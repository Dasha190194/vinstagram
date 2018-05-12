<?php
/**
 * Created by PhpStorm.
 * User: dogienko
 * Date: 29.04.18
 * Time: 18:42
 */

namespace app\models;


use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName()
    {
        return '{{category}}';
    }


}