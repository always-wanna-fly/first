<?php
/**
 * Created by PhpStorm.
 * User: Володя
 * Date: 01.05.2018
 * Time: 12:42
 */

namespace app\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord
{

    public static function tableName()
    {


        return 'products';
    }

//    public function getCategories()
//    {
//        return $this->hasOne(Product::className(), ['parent' => 'id']);
//    }
}