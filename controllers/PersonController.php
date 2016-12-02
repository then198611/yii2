<?php
/**
 * Created by PhpStorm.
 * User: huangshuaihui
 * Date: 2016/12/1
 * Time: 下午5:21
 */

namespace app\controllers;


use app\models\Person;
use yii\rest\ActiveController;
use yii\web\Response;

class PersonController extends ActiveController
{
    public $modelClass = 'app\models\Person';


//    public function actionView($id)
//    {
//        return Person::findOne($id);
//    }


}