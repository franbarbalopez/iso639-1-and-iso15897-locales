<?php

if (! extension_loaded('intl')) {
    fwrite(STDERR, "intl extension is required.\n");
    exit(1);
}

$locales = ResourceBundle::getLocales('');

$result = [];

foreach ($locales as $loc) {
    if (! preg_match('/^[a-z]{2}(_[A-Z]{2})?$/', $loc)) {
        continue;
    }

    $result[$loc] = Locale::getDisplayName($loc, 'en');
}

ksort($result);

$output = "<?php\n\nreturn ".var_export($result, true).";\n";

$path = __DIR__.'/config/languages.php';

file_put_contents($path, $output);

echo "File generated at: $path\n";
