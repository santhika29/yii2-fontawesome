<?php

/**
* @copyright Copyright &copy; Gogodigital Srls
* @company Gogodigital Srls - Wide ICT Solutions 
* @website http://www.gogodigital.it
* @github https://github.com/cinghie/yii2-fontawesome
* @license GNU GENERAL PUBLIC LICENSE VERSION 3
* @package yii2-fontawesome
* @version 1.2.1

add some ionicons
*/

namespace cinghie\fontawesome;

use yii\web\AssetBundle;

/**
 * Class FontAwesomeAsset
 * @package cinghie\fontawesome
 */
class FontAwesomeAsset extends AssetBundle
{

    /**
     * @inherit
     */
    public $sourcePath = '@bower';

    /**
     * @inherit
     */
    public $css = [
        'fontawesome/css/font-awesome.css',
        'ionicons/css/ionicons.css',
    ];
    
    /**
     * @inherit
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    /**
     * Initializes the bundle
     */
    public function init()
    {
        parent::init();

        $this->publishOptions['beforeCopy'] = function ($from, $to) {
            return preg_match('%(/|\\\\)(fonts|css)%', $from);
        };
    }
}
