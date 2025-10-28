<?php

/**
 * @return string|null
 */
function getCurrentLocale(): ?string
{
    static $locale = null;

    if ($locale === null) {
        if (isset($_GET['en'])) {
            $locale = 'en';
        } else if (isset($_GET['ru'])) {
            $locale = 'ru';
        }
    }
    return $locale;
}

/**
 * @param $key
 * @return string
 * @throws Exception
 */
function trans($key): string
{
    $locale = getCurrentLocale();

    if (!$locale) {
        return $key;
    }
    $langComponents = explode('.', $key);
    $langDir = DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'lang' . DIRECTORY_SEPARATOR . strtolower($locale) . DIRECTORY_SEPARATOR;
    if (!file_exists($langDir)) {
        throw new Exception('Directory "lang" not found');
    }

    $langFile = $langDir . array_shift($langComponents) . '.php';
    $langs = include $langFile;

    $res = array_reduce($langComponents, function ($carry, $item) {
        return $carry[$item] ?? null;
    }, $langs);

    return $res ?? $key;
}

spl_autoload_register(function ($class) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (file_exists($file)) {
        include_once $file;
        return true;
    }
    return false;
});

