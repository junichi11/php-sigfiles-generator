# PHP Signature Files Generator

Application that generates PHP signature files from the official HTML documentation.

## How to run

- download and unzip `Many HTML files` from [PHP documentation site](http://php.net/download-docs.php)
- *[optional]* create any of the following files if any configuration option needs to be overwritten:
    - `config.local.ini` in the application directory
    - `.php.sigfiles.config.ini` in your home directory
- *[optional]* enable `DEBUG` log level in `generate.php` (line `Log::start(true/false);`)
- run `generate.php`

## Verification
- open generated files in the IDE and wait for errors :)
- run PHP lint `php -l <file>.php` or run `php verify-syntax.php` after sigfiles are generated but take its output easy ;)
