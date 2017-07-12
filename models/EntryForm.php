<?php

namespace app\models;

use yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $password;

    public function rules()
    {
        return [
            [['name', 'password'], 'required'],
        ];
    }
}
?>