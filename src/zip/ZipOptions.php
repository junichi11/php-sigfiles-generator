<?php

namespace zip;

use Config;

class ZipOptions {

    private string $outputDir;

    private string $subDir;

    private string $sigfilesVersion;

    private string $zipFileName;

    private bool $overwrite;

    private string $licenseFileDir;

    /** @var string[] */
    private array $licenseFiles;

    private bool $isSha1Prefixed;

    public static function create() {
        return new self;
    }

    private function __construct() {
        $this->outputDir = Config::get()->zipOutputDir();
        $this->subDir = 'phpstubs/phpruntime';
        $this->sigfilesVersion = Config::get()->sigfilesVersion();
        $this->zipFileName = 'phpsigfiles';
        $this->overwrite = Config::get()->overwriteZip();
        $this->licenseFileDir = 'META-INF';
        $this->licenseFiles = [];
        $this->isSha1Prefixed = Config::get()->isSha1PrefixedZip();
    }

    public function getOutputDir(): string {
        return $this->outputDir;
    }

    public function getSubDir(): string {
        return $this->subDir;
    }

    public function getSigfilesVersion(): string {
        return $this->sigfilesVersion;
    }

    public function getZipFileName(): string {
        return $this->zipFileName;
    }

    public function overwrite(): bool {
        return $this->overwrite;
    }

    public function getLicenseFileDir(): string {
        return $this->licenseFileDir;
    }

    public function getLicenseFiles(): array {
        return $this->licenseFiles;
    }

    public function isSha1Prefixed(): bool {
        return $this->isSha1Prefixed;
    }

    public function setOutputDir(string $outputDir): ZipOptions {
        $this->outputDir = $outputDir;
        return $this;
    }

    public function setSubDir(string $subDir): ZipOptions {
        $this->subDir = $subDir;
        return $this;
    }

    public function setSigfilesVersion(string $version): ZipOptions {
        $this->sigfilesVersion = $version;
        return $this;
    }

    public function setZipFileName(string $zipFileName): ZipOptions {
        $this->zipFileName = $zipFileName;
        return $this;
    }

    public function setOverwrite(bool $overwrite): ZipOptions {
        $this->overwrite = $overwrite;
        return $this;
    }

    public function setLicenseFileDir(string $dirName): ZipOptions {
        $this->licenseFileDir = $dirName;
        return $this;
    }

    public function setLicenseFiles(array $files): ZipOptions {
        $this->licenseFiles = $files;
        return $this;
    }

    public function setSha1Prefixed(bool $isSha1Prefixed): ZipOptions {
        $this->isSha1Prefixed = $isSha1Prefixed;
        return $this;
    }
}
