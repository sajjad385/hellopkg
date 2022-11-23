<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb697513eea4a158e576457bee80c72a8
{
    public static $prefixLengthsPsr4 = array (
        'X' => 
        array (
            'Xpeedstudio\\Hellopkg\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Xpeedstudio\\Hellopkg\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb697513eea4a158e576457bee80c72a8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb697513eea4a158e576457bee80c72a8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb697513eea4a158e576457bee80c72a8::$classMap;

        }, null, ClassLoader::class);
    }
}