<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit911b68b12a0677262b6dca044e63e604
{
    public static $files = array (
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
    );

    public static $prefixLengthsPsr4 = array (
        'y' => 
        array (
            'yii\\swiftmailer\\' => 16,
            'yii\\imagine\\' => 12,
            'yii\\gii\\' => 8,
            'yii\\faker\\' => 10,
            'yii\\debug\\' => 10,
            'yii\\composer\\' => 13,
            'yii\\codeception\\' => 16,
            'yii\\bootstrap\\' => 14,
            'yii\\' => 4,
        ),
        'k' => 
        array (
            'kartik\\mpdf\\' => 12,
            'kartik\\growl\\' => 13,
            'kartik\\date\\' => 12,
            'kartik\\base\\' => 12,
        ),
        'c' => 
        array (
            'cebe\\markdown\\' => 14,
        ),
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'yii\\swiftmailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-swiftmailer',
        ),
        'yii\\imagine\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-imagine',
        ),
        'yii\\gii\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-gii',
        ),
        'yii\\faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-faker',
        ),
        'yii\\debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-debug',
        ),
        'yii\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-composer',
        ),
        'yii\\codeception\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-codeception',
        ),
        'yii\\bootstrap\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-bootstrap',
        ),
        'yii\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2',
        ),
        'kartik\\mpdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/kartik-v/yii2-mpdf',
        ),
        'kartik\\growl\\' => 
        array (
            0 => __DIR__ . '/..' . '/kartik-v/yii2-widget-growl',
        ),
        'kartik\\date\\' => 
        array (
            0 => __DIR__ . '/..' . '/kartik-v/yii2-widget-datepicker',
        ),
        'kartik\\base\\' => 
        array (
            0 => __DIR__ . '/..' . '/kartik-v/yii2-krajee-base',
        ),
        'cebe\\markdown\\' => 
        array (
            0 => __DIR__ . '/..' . '/cebe/markdown',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $prefixesPsr0 = array (
        'I' => 
        array (
            'Imagine' => 
            array (
                0 => __DIR__ . '/..' . '/imagine/imagine/lib',
            ),
        ),
        'H' => 
        array (
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
        'D' => 
        array (
            'Diff' => 
            array (
                0 => __DIR__ . '/..' . '/phpspec/php-diff/lib',
            ),
        ),
    );

    public static $classMap = array (
        'CGIF' => __DIR__ . '/..' . '/kartik-v/mpdf/classes/gif.php',
        'CGIFCOLORTABLE' => __DIR__ . '/..' . '/kartik-v/mpdf/classes/gif.php',
        'CGIFFILEHEADER' => __DIR__ . '/..' . '/kartik-v/mpdf/classes/gif.php',
        'CGIFIMAGE' => __DIR__ . '/..' . '/kartik-v/mpdf/classes/gif.php',
        'CGIFIMAGEHEADER' => __DIR__ . '/..' . '/kartik-v/mpdf/classes/gif.php',
        'CGIFLZW' => __DIR__ . '/..' . '/kartik-v/mpdf/classes/gif.php',
        'INDIC' => __DIR__ . '/..' . '/kartik-v/mpdf/classes/indic.php',
        'MYANMAR' => __DIR__ . '/..' . '/kartik-v/mpdf/classes/myanmar.php',
        'OTLdump' => __DIR__ . '/..' . '/kartik-v/mpdf/classes/otl_dump.php',
        'PDFBarcode' => __DIR__ . '/..' . '/kartik-v/mpdf/classes/barcode.php',
        'SEA' => __DIR__ . '/..' . '/kartik-v/mpdf/classes/sea.php',
        'SVG' => __DIR__ . '/..' . '/kartik-v/mpdf/classes/svg.php',
        'TTFontFile' => __DIR__ . '/..' . '/kartik-v/mpdf/classes/ttfontsuni.php',
        'TTFontFile_Analysis' => __DIR__ . '/..' . '/kartik-v/mpdf/classes/ttfontsuni_analysis.php',
        'UCDN' => __DIR__ . '/..' . '/kartik-v/mpdf/classes/ucdn.php',
        'bmp' => __DIR__ . '/..' . '/kartik-v/mpdf/classes/bmp.php',
        'cssmgr' => __DIR__ . '/..' . '/kartik-v/mpdf/classes/cssmgr.php',
        'directw' => __DIR__ . '/..' . '/kartik-v/mpdf/classes/directw.php',
        'grad' => __DIR__ . '/..' . '/kartik-v/mpdf/classes/grad.php',
        'mPDF' => __DIR__ . '/..' . '/kartik-v/mpdf/mpdf.php',
        'meter' => __DIR__ . '/..' . '/kartik-v/mpdf/classes/meter.php',
        'mpdfform' => __DIR__ . '/..' . '/kartik-v/mpdf/classes/mpdfform.php',
        'otl' => __DIR__ . '/..' . '/kartik-v/mpdf/classes/otl.php',
        'tocontents' => __DIR__ . '/..' . '/kartik-v/mpdf/classes/tocontents.php',
        'wmf' => __DIR__ . '/..' . '/kartik-v/mpdf/classes/wmf.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit911b68b12a0677262b6dca044e63e604::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit911b68b12a0677262b6dca044e63e604::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit911b68b12a0677262b6dca044e63e604::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit911b68b12a0677262b6dca044e63e604::$classMap;

        }, null, ClassLoader::class);
    }
}