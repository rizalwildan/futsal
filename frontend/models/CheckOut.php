<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

class CheckOut extends Model
{
    public $name;
    public $tgl;
    public $tempat;

    public function rules()
    {
        return [
            
        ];
    }
}