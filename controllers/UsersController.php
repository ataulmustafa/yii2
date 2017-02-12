<?php
/**
 * Created by PhpStorm.
 * User: Atas
 * Date: 2/12/2017
 * Time: 7:02 PM
 */

namespace app\controllers;

use yii\web\Controller;
use app\models\Users;

class UsersController extends Controller{
    public function actionIndex(){
        $users = Users::find()->all();

        return $this->render('index', ['users'=>$users]);
    }
}