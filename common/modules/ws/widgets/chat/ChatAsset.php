<?php
/**
 * Created by PhpStorm.
 * User: Monk
 * Date: 24.06.2019
 * Time: 20:04
 */

namespace common\modules\ws\widgets\chat;


use yii\web\AssetBundle;

class ChatAsset extends AssetBundle
{
    public $sourcePath = '@common\modules\ws\widgets\chat\source\js';
    public $js = [
        'chat.js'
    ];
}