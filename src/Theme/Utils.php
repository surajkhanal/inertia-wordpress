<?php

namespace EvoMark\InertiaWordpress\Theme;

class Utils
{
    public static function getClass($path)
    {
        if (empty($path)) {
            return [];
        }

        $classes = get_declared_classes();

        require_once $path;

        $diff = array_diff(get_declared_classes(), $classes);

        return reset($diff);
    }
}
