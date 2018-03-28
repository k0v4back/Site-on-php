<?php

// include_once ROOT.'/models/Category.php';

class CabinetController{
public function actionIndex(){

		// $categories = array();
		// $categories = Category::getCategoriesList();

		require ROOT.'/views/cabinet/cabinet.php';
		return true;
	}
}