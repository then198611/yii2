<?php
/**
 * Created by PhpStorm.
 * User: huangshuaihui
 * Date: 2016/11/29
 * Time: 下午4:38
 */
namespace app\models;
use Yii;
use yii\base\Model;

class EntryForm extends Model{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name','email'],'required'],
            ['email','email'],
        ];
    }
}