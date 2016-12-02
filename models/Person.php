<?php
/**
 * Created by PhpStorm.
 * User: huangshuaihui
 * Date: 2016/12/1
 * Time: 下午5:21
 */

namespace app\models;


use yii\db\ActiveRecord;

class Person extends ActiveRecord
{
    public function fields()
    {
        return ['id', 'first_name','last_name','gender'];
    }

    public function extraFields()
    {
        return ['profile'];
    }
}