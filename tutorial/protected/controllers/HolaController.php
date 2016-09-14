<?php 

class HolaController extends Controller
{
	public function actionIndex()
	{
		$twitter="@maurosanchez93";
		$this->render("index",array("twitter"=>$twitter));
	}
}