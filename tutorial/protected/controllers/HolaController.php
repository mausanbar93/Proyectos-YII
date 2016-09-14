<?php 
/*
* Acceder al holamundo con la siguiente url:
* http://localhost/yii/proyectos-YII/tutorial/hola/index
*/
class HolaController extends Controller
{
	public function actionIndex()
	{
		//$model=CActiveRecord::model("Users")->findAll();
		$model=Users::model()->findAll();
		$twitter="@maurosanchez93";
		$this->render("index",array("model"=>$model,"twitter"=>$twitter));
	}
}