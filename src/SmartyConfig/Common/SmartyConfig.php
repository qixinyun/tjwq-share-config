<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/wuqing-share-config/src/SmartyConfig/Wq',
            S_ROOT.'vendor/qixinyun/wuqing-share-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/wuqing-share-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
