<?php
/**
 * Created by PhpStorm.
 * User: Володя
 * Date: 30.04.2018
 * Time: 19:21
 */

namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord {

    public static function tableName()
    {


        return 'categories';

    }

    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['parent'=>'id']);
    }


}


