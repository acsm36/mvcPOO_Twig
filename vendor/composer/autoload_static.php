<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite04e9178da2aba25e91f1685a2e76849
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
    );

    public static $classMap = array (
        'Article' => __DIR__ . '/../..' . '/Models/Article.php',
        'ArticleController' => __DIR__ . '/../..' . '/Controllers/ArticleController.php',
        'Controller' => __DIR__ . '/../..' . '/Controllers/Controller.php',
        'Exemple' => __DIR__ . '/../..' . '/Models/Exemple.php',
        'ExempleController' => __DIR__ . '/../..' . '/Controllers/Exemple/ExempleController.php',
        'HomeController' => __DIR__ . '/../..' . '/Controllers/HomeController.php',
        'Model' => __DIR__ . '/../..' . '/Models/Model.php',
        'NotFoundController' => __DIR__ . '/../..' . '/Controllers/NotFoundController.php',
        'Route' => __DIR__ . '/../..' . '/Router/Route.php',
        'Router' => __DIR__ . '/../..' . '/Router/Router.php',
        'TrucController' => __DIR__ . '/../..' . '/Controllers/TrucController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite04e9178da2aba25e91f1685a2e76849::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite04e9178da2aba25e91f1685a2e76849::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite04e9178da2aba25e91f1685a2e76849::$classMap;

        }, null, ClassLoader::class);
    }
}