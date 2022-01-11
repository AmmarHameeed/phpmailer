<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13096ec7ded03a4167f233401e5304be
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit13096ec7ded03a4167f233401e5304be::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit13096ec7ded03a4167f233401e5304be::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}