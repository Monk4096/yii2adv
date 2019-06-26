<?php
/**
 * Created by PhpStorm.
 * User: Monk
 * Date: 24.06.2019
 * Time: 19:43
 */

namespace common\modules\ws\widgets\chat;


use yii\base\Widget;

class ChatWidget extends Widget
{
    public $directoryAsset;

    public function init() {
        if (!$this->directoryAsset) {
            throw new \Exception('need param $directoryAsset');

        }
        parent::init();
    }

    public function run() {
        return $this->render('index', ['directoryAsset' => $this->directoryAsset]);
    }

}