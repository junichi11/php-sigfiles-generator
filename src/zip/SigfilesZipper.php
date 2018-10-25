<?php

namespace zip;

use Config;
use utils\Files;
use utils\Log;
use utils\Strings;
use ZipArchive;

class SigfilesZipper {

    public static function generate(array $licenseFiles): void {
        if (!self::sigfilesExist()) {
            Log::error('Not found sigfiles in ' . Config::get()->outputDir() . '. Please generate them.', true);
        }
        self::validateZipExtension();

        // zip
        $zipOptions = ZipOptions::create()
                ->setLicenseFiles($licenseFiles);
        self::zip($zipOptions);
    }

    private static function sigfilesExist(): bool {
        // check whether sigfiles exist
        $sigfiles = glob(Config::get()->outputDir() . '/*.php');
        if (count($sigfiles) === 0) {
            return false;
        }
        return true;
    }

    private static function validateZipExtension(): void {
        if (!extension_loaded('zip')) {
            Log::error('Please install the zip extension.', true);
        }
    }

    public static function zip(ZipOptions $options): void {
        // create an output directory if it does not exist
        Files::createDirectory($options->getOutputDir());
        $zipFilePath = self::buildZipFilePath($options);
        self::validateExistingFile($zipFilePath, $options);
        self::internalZip($zipFilePath, $options);
    }

    private static function buildZipFilePath(ZipOptions $options): string {
        return $options->getOutputDir() . '/'
                . $options->getZipFileName() . ($options->getSigfilesVersion() ? '-' : '')
                . $options->getSigfilesVersion() . '.zip';
    }

    private static function validateExistingFile(string $zipFilePath, ZipOptions $options): void {
        if (file_exists($zipFilePath)) {
            if (!$options->overwrite()) {
                Log::error('Zip file already exists.', true);
            }
            // delete the existing file
            @unlink($zipFilePath);
        }
    }

    private static function internalZip(string $filePath, ZipOptions $options): void {
        $zip = new ZipArchive();
        try {
            $result = $zip->open($filePath, ZipArchive::CREATE);
            if (!$result) {
                Log::error('Cannot create a zip file. Error code: ' . $result, true);
            }
            self::addSigfiles($zip, $options);
            self::addLicenseFiles($zip, $options);
        } finally {
            $zip->close();
        }
    }

    private static function addSigfiles(ZipArchive $zip, ZipOptions $options): void {
        if (!$options->getSubDir() || $zip->addEmptyDir($options->getSubDir())) {
            $subDir = $options->getSubDir();
            if ($subDir) {
                $subDir = Strings::endsWith($subDir, '/') ? $subDir : $subDir . '/';
            }
            $zip->addGlob(Config::get()->outputDir() . '/*.php', 0,
                    ['add_path' => $subDir, 'remove_all_path' => true]);
        } else {
            Log::error('Cannot add an empty directory: ' . $options->getSubDir(), true);
        }
        return;
    }

    private static function addLicenseFiles(ZipArchive $zip, ZipOptions $options): void {
        if (!$options->getLicenseFileDir() || $zip->addEmptyDir($options->getLicenseFileDir())) {
            foreach ($options->getLicenseFiles() as $file) {
                $basename = basename($file);
                if ($basename === 'phpsigfiles-license.txt') {
                    $contents = file_get_contents($file);
                    if ($contents === false) {
                        Log::error('Cannot get license file contents: ' . $file, true);
                    }
                    $contents = str_replace('%PHPSIGFILES_VERSION%', $options->getSigfilesVersion(), $contents);
                    $zip->addFromString($options->getLicenseFileDir() . '/phpsigfiles-' . $options->getSigfilesVersion() . '-license.txt', $contents);
                } else if ($basename === 'phpsigfiles-notice.txt') {
                    $zip->addFile($file, $options->getLicenseFileDir() . '/phpsigfiles-' . $options->getSigfilesVersion() . '-notice.txt');
                } else {
                    $zip->addFile($file, $options->getLicenseFileDir() . '/' . basename($file));
                }
            }
        } else {
            Log::error('Cannot add an empty directory: ' . $options->getLicenseFileDir(), true);
        }
    }

}
