<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\db\query;	

use  yii\web\Session;

class DengController extends Controller{
	 public $layout=false;
	 public $enableCsrfValidation=false;


	 public function actionLogin()
	 {

	 	return $this->render('login');

	 }
	 public function actionLogin_do()
	 {
	 	$query=new Query();

	 	$data=$_POST;

	 	$tell= $data['tell'];
	 	$pwd = $data['pwd'];

 		$list=$query->from('h_login')->all();

 		if($tell==$list[0]['tell'] && $pwd==$list[0]['pwd'])
 		{

 			echo 1;
 		}
 		
	 }
	 public function actionLo()
	 {

	 	return $this->render('lo');

	 }


}

?>