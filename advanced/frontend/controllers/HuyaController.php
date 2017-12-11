<?php
namespace frontend\controllers;

use Yii;

use yii\web\Controller;

use yii\db\query;

use yii\data\Pagination;

use frontend\models\Student;

use DfaFilter\SensitiveHelper;
class HuyaController extends Controller
{
		public $layout=false;
	    public $enableCsrfValidation=false;

	public function actionIndex()
	{
	
		return $this->render('index');

	}
	public function actionLogin()
	{


		return $this->render('login');	

	}
	public function actionLogin_do()
	{
		$query=new Query();
		
		$tell=$_POST['tell'];

		$pwd=$_POST['pwd'];
		$data=$query->select(['tell'])->from('h_login')->one();

		if($tell==$data['tell'])
		{
			$data=$query->select(['pwd'])->from('h_login')->one();
			if($pwd==$data['pwd'])
			{

				return $this->redirect('?r=huya/index');
			}
			else
			{
				echo "密码错误";
			}

		}
		else
		{

			echo "账户不存在";
		}


	}

	public function actionRefresh()
	{

		return $this->render('refresh');

	}
	public function actionRecharge()
	{

		return $this->render('recharge');

	}
	public function actionRelease()
	{

		return $this->render('release');

	}
	public function actionRegister()
	{

		return $this->render('register');

	}
	public function actionZhuce()
	{

		$data=$_POST;
		$re = Yii::$app->db->createCommand()->insert('h_login', $data)->execute();
		if($re)
		{

			return $this->redirect('?r=huya/login');

		}

	}




}



?>