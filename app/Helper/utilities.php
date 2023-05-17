<?php

use Illuminate\Support\Facades\File;

if (!function_exists('getGalleryImage')) {
    function getGalleryImage($path)
    {
        $path = public_path($path);
        $files = File::files($path);

        $fileName = array();
        foreach ($files as $key => $value) {
            $fileName[] = $value->getFilename();
        }

        return $fileName;
    }
}
