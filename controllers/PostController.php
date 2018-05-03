<?php
namespace app\controllers;
use app\models\Category;
use Yii;
use app\models\TestForm;


/**
 *
 */
class PostController extends AppController
{
    public $layout = 'basic';
//    public function beforeAction($action){
//        if ($action ->id==='index'){
//            $this->enableCsrfValidationble = false;
//        }
//        return parent::beforeAction($action);
//    }
    public function actionIndex(){
    if (Yii::$app->request->isAjax){
        debug(Yii::$app->request->post());
        return 'test';
    }

    $post = TestForm::findOne(2);
//    $post->email='2@gmail.com';
//    $post->save();
//        $post->delete();

    $model = new TestForm();
//    $model->name='Автор';
//    $model->email='mail@mail.com';
//    $model->text='Текст повідомлення';
//    $model->save();



    if( $model->load(Yii::$app->request->post()) ){
//        debug($model);
//        die;
        if( $model->save() ){
            Yii::$app->session->setFlash('success', 'Данні прийнято');
            return $this->refresh();

        }else {
            Yii::$app->session->setFlash('error', 'Помилка');
        }
    }

    $this->view->title='Всі статті';
    return $this->render('test', compact('model'));
}
    public function actionShow(){
        $this->view->title='Титулка';
        $this->view->registerMetaTag(['name'=>'keyword', 'content'=>'ключі' ]);
        $this->view->registerMetaTag(['name'=>'description', 'content'=>'опис сторінки' ]);

//        $cats = Category::find()->all(); відкладена загрузка

        $cats = Category::find()->with('products')->all();//жадна загрузка

        return $this->render('show', compact('cats'));
    }

}
?>