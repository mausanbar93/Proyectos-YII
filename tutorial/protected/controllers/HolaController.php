<?php 

class HolaController extends Controller
{
	public function actionIndex()
	{
		$model=CActiveRecord::model("Users")->findAll();
		$twitter="@maurosanchez93";
		$this->render("index",array("model"=>$model,"twitter"=>$twitter));
	}
}