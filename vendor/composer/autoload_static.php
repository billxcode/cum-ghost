<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit56a394c2c015ba684c121c81b4dbad98
{
    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'CumGhost' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit56a394c2c015ba684c121c81b4dbad98::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
