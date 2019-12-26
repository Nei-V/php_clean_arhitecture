<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdb432a2481b866f0dfe59675fde6f8ef
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CleanPhp\\Invoicer\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CleanPhp\\Invoicer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdb432a2481b866f0dfe59675fde6f8ef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdb432a2481b866f0dfe59675fde6f8ef::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
