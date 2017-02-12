<?php
/**
 * Created by PhpStorm.
 * User: Atas
 * Date: 2/12/2017
 * Time: 2:32 PM
 */
namespace app\models;

use yii\base\Model;

class UserForm extends Model{
    public $name;
    public $email;

    // Validation Rules
    public function rules(){
        return[
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}