<?php

namespace App\Helpers;

use App\Enums\Constant;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CommonHelper
{

    /**
     * @param $bytes
     * @return string
     */
    public static function byteConvert($bytes): string
    {
        if ($bytes == 0)
            return "0.00 B";

        $units = array('B', 'KB', 'MB', 'GB', 'TB', 'PB');
        $pow = floor(log($bytes, 1024));

        return round($bytes / pow(1024, $pow), 2) . $units[$pow];
    }

    /**
     * @param int|string $size
     * @return float - bytes
     */
    public static function parseSize($size): float
    {
        $unit = preg_replace('/[^bkmgtpezy]/i', '', $size);
        $size = preg_replace('/[^0-9\.]/', '', $size);
        if ($unit) {
            return round($size * pow(1024, stripos('bkmgtpezy', $unit[0])));
        }

        return round($size);
    }

    /**
     * @return string
     */
    public static function getLanguage(): string
    {
        return app()->getLocale() ?? 'vi';
    }

    /**
     * @param string|null $path
     * @return string
     */
    public static function getUrlFile(?string $path,  string $typePath = Constant::PATH_LIBRARY): string
    {
        $path = trim($path);

        if (Str::contains($path, 'https://') || Str::contains($path, 'http://')) {
            return $path;
        }

        return Storage::url($typePath . '/' . $path);
    }

}
