# PHP Signature Files Generator

Application that generates PHP signature files from the official PHP HTML documentation.

## How to run

- download `Many HTML files` from [PHP documentation site](http://php.net/download-docs.php)
and unzip it into `resources` directory (the HTML files will end in `php-chunked-xhtml` directory)
- update `php-chunked-xhtml.txt` (size and date of the HTML help)
- *[optional]* create any of the following files if any configuration option needs to be overwritten:
    - `config.local.ini` in the application directory
    - `.php.sigfiles.config.ini` in your home directory
- *[optional]* enable `DEBUG` log level in `generate.php` (line `Log::start(true/false);`)
- run `generate.php`

## Verification
- open generated files in the IDE and wait for errors :)
- run PHP lint `php -l <file>.php` or run `php verify-syntax.php` after sigfiles are generated but take its output easy ;)

## Install missing extensions

Install missing extensions to get constant values if possible.

e.g.
```
sudo apt install php-imagick php-gmagick php-memcashed php-zip
```

## The licenses

### Source code

[Apache license 2.0](http://www.apache.org/licenses/)

### Resources(PHP Documentation files)

[CC-BY-3.0](https://www.php.net/manual/en/cc.license.php)

### Generated files

[CC-BY-3.0](http://creativecommons.org/licenses/by/3.0/) (because The license of PHP Documentation is [CC-BY-3.0](https://www.php.net/manual/en/cc.license.php).)
