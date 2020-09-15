<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteeb72b83748316a65a535ff74e52bd91
{
    public static $files = array (
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
    );

    public static $prefixLengthsPsr4 = array (
        'y' => 
        array (
            'yiidreamteam\\upload\\' => 20,
            'yii\\swiftmailer\\' => 16,
            'yii\\composer\\' => 13,
            'yii\\bootstrap\\' => 14,
            'yii\\' => 4,
        ),
        'v' => 
        array (
            'vova07\\imperavi\\tests\\' => 22,
            'vova07\\imperavi\\' => 16,
        ),
        'r' => 
        array (
            'rmrevin\\yii\\fontawesome\\' => 24,
        ),
        'm' => 
        array (
            'madetec\\crm\\' => 12,
        ),
        'l' => 
        array (
            'lhs\\Yii2SaveRelationsBehavior\\' => 30,
        ),
        'k' => 
        array (
            'kartik\\plugins\\fileinput\\' => 25,
            'kartik\\file\\' => 12,
            'kartik\\base\\' => 12,
        ),
        'd' => 
        array (
            'dmstr\\' => 6,
        ),
        'c' => 
        array (
            'cebe\\markdown\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'yiidreamteam\\upload\\' => 
        array (
            0 => __DIR__ . '/..' . '/yii-dream-team/yii2-upload-behavior/src',
        ),
        'yii\\swiftmailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-swiftmailer',
        ),
        'yii\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-composer',
        ),
        'yii\\bootstrap\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-bootstrap/src',
        ),
        'yii\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2',
        ),
        'vova07\\imperavi\\tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/vova07/yii2-imperavi-widget/tests',
        ),
        'vova07\\imperavi\\' => 
        array (
            0 => __DIR__ . '/..' . '/vova07/yii2-imperavi-widget/src',
        ),
        'rmrevin\\yii\\fontawesome\\' => 
        array (
            0 => __DIR__ . '/..' . '/rmrevin/yii2-fontawesome',
        ),
        'madetec\\crm\\' => 
        array (
            0 => __DIR__ . '/..' . '/madetec/crm',
        ),
        'lhs\\Yii2SaveRelationsBehavior\\' => 
        array (
            0 => __DIR__ . '/..' . '/la-haute-societe/yii2-save-relations-behavior/src',
        ),
        'kartik\\plugins\\fileinput\\' => 
        array (
            0 => __DIR__ . '/..' . '/kartik-v/bootstrap-fileinput',
        ),
        'kartik\\file\\' => 
        array (
            0 => __DIR__ . '/..' . '/kartik-v/yii2-widget-fileinput/src',
        ),
        'kartik\\base\\' => 
        array (
            0 => __DIR__ . '/..' . '/kartik-v/yii2-krajee-base/src',
        ),
        'dmstr\\' => 
        array (
            0 => __DIR__ . '/..' . '/dmstr/yii2-adminlte-asset',
        ),
        'cebe\\markdown\\' => 
        array (
            0 => __DIR__ . '/..' . '/cebe/markdown',
        ),
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cebe\\gravatar\\' => 
            array (
                0 => __DIR__ . '/..' . '/cebe/yii2-gravatar',
            ),
        ),
        'P' => 
        array (
            'PHPThumb\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/masterexploder/phpthumb/tests',
            ),
            'PHPThumb' => 
            array (
                0 => __DIR__ . '/..' . '/masterexploder/phpthumb/src',
            ),
        ),
        'H' => 
        array (
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteeb72b83748316a65a535ff74e52bd91::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteeb72b83748316a65a535ff74e52bd91::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticIniteeb72b83748316a65a535ff74e52bd91::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
