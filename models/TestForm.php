<?php
/**
 * Created by PhpStorm.
 * User: Володя
 * Date: 28.04.2018
 * Time: 20:46
 */
namespace app\models;
use yii\db\ActiveRecord;

class TestForm extends ActiveRecord{

    public static function tableName(){
        return 'posts';
    }


        public function attributeLabels(){
            return [
                'name'=>'имя',
                'email'=>'E-mail',
                'text'=>'текст повідомлення',
            ];
        }
        public function rules()
        {
            return [
                [['name','text'], 'required'],
                ['email', 'email'],
            ];
        }
       }