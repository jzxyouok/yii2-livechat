<?php
namespace venkatesanchinna\yii2livechat\assets;

use yii\web\AssetBundle;

/**
 * This declares the asset files required by Live Chat.
 *
 * @author Venkatesan C <venkatesangee@gmail.com>
 */
class LivechatAsset extends AssetBundle
{
    // the alias to assets folder in file system
    public $sourcePath = '@vendor/venkatesanchinna/yii2-livechat/assets/source';
    public $css = ['css/juichat.css','css/jquery.cssemoticons.css','css/jquery-ui.css'];
    public $js = ['js/jquery.juichat.js','js/jquery.cssemoticons.min.js','js/custom.js'];
    // that are the dependecies, for making Asset bundle work with Yii2 framework
    public $depends = ['yii\web\YiiAsset','yii\bootstrap\BootstrapAsset'];
}
