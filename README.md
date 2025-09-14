# Locale Generator

This repository provides a PHP script to generate a list of available locales on your system and store them in a `config/languages.php` file.

## Requirements

- PHP with the `intl` extension enabled.

## How It Works

The script:
1. Fetches all available locales using `ResourceBundle::getLocales('')`.
2. Filters them to include only language codes that match the pattern `xx` or `xx_XX`.
3. Gets the English display name for each locale.
4. Sorts them alphabetically.
5. Saves the result as a PHP array in `config/languages.php`.

## Usage

Run the script from the repository root:

```bash
php generate_locales.php
```

By default, the file will be saved to:

`/path/to/repository/config/languages.php`

If you want to save it somewhere else, edit the $path variable in the script:

`$path = __DIR__.'/config/languages.php';`

Change it to the desired location before running the script.
