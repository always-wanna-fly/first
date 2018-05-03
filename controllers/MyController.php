<?php 

namespace app\controllers;
/**
* 
*/

class MyController extends AppController
{
	
	public function actionIndex($id=null)
	{
		$hi= 'HELLO WORLD';
		$names =['Ivanov', 'Petrov', 'Sidorov'];

		if (!$id) $id='test';

		return $this->render('index', compact('hi', 'names', 'id'));
	}
}



 ?>