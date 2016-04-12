<?php

	class HolaController extends Controller{

		public function actionIndex(){
			//$model = CActiveRecord::model("Users")->findAll();

			//esta es una forma más simple de llamar a nuestro modelo
			//el modelo es quien se encarga de consultar con la bd
			$model = Users::model()->findAll();
			$twitter = "@underunan";
			$this->render("index",array("model"=>$model,"twitter"=>$twitter));
		}
	}
?>