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
        self::rename($zipFilePath, $options);
    }

    private static function buildZipFilePath(ZipOptions $options, string $sha1Prefix = ''): string {
        return rtrim($options->getOutputDir(), '/') . '/'
                . Strings::appendSuffix($sha1Prefix, '-')
                . $options->getZipFileName()
                . Strings::appendPrefix($options->getSigfilesVersion(), '-')
                . '.zip';
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
        $licenseFileDir = $options->getLicenseFileDir();
        $sigfilesVersion = $options->getSigfilesVersion();
        if (!$licenseFileDir || $zip->addEmptyDir($licenseFileDir)) {
            foreach ($options->getLicenseFiles() as $file) {
                $basename = basename($file);
                if ($basename === 'phpsigfiles-license.txt') {
                    $contents = file_get_contents($file);
                    if ($contents === false) {
                        Log::error('Cannot get license file contents: ' . $file, true);
                    }
                    $contents = str_replace('%PHPSIGFILES_VERSION%', $sigfilesVersion, $contents);
                    $zip->addFromString($licenseFileDir . '/phpsigfiles' . Strings::appendPrefix($sigfilesVersion, '-') . '-license.txt', $contents);
                } else if ($basename === 'phpsigfiles-notice.txt') {
                    $contents = file_get_contents($file);
                    if ($contents === false) {
                        Log::error('Cannot get notice file contents: ' . $file, true);
                    }
                    $contents = str_replace('%CURRENT_YEAR%', date('Y'), $contents);
                    $zip->addFromString($licenseFileDir . '/phpsigfiles' . Strings::appendPrefix($sigfilesVersion, '-') . '-notice.txt', $contents);
                } else {
                    $zip->addFile($file, $licenseFileDir . '/' . basename($file));
                }
            }
        } else {
            Log::error('Cannot add an empty directory: ' . $licenseFileDir, true);
        }
    }

    private static function rename(string $zipFilePath, ZipOptions $options): void {
        if ($options->isSha1Prefixed()) {
            if (file_exists($zipFilePath)) {
                $sha1Prefix = strtoupper(sha1_file($zipFilePath));
                $zipFilePathWitSha1Prefix = self::buildZipFilePath($options, $sha1Prefix);
                $result = rename($zipFilePath, $zipFilePathWitSha1Prefix);
                if ($result) {
                    Log::info('Renamed: ' . $zipFilePathWitSha1Prefix);
                } else {
                    Log::error('Cannot rename to ' . $zipFilePathWitSha1Prefix);
                }
            } else {
                Log::error($zipFilePath . ' does not exist.');
            }
        }
    }
}
