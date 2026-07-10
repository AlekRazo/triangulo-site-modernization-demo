<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Env
{
    private static array $data = [];

    public static function load(string $file): void
    {
        if (!file_exists($file)) {
            throw new Exception(".env no encontrado");
        }

        foreach (file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {

            $line = trim($line);

            if ($line === '' || $line[0] === '#') {
                continue;
            }

            [$key, $value] = explode('=', $line, 2);

            self::$data[trim($key)] = trim($value, "\"'");
        }
    }

    public static function get(string $key): ?string
    {
        return self::$data[$key] ?? null;
    }
}