<?php

class CategoryController{
	public function actionIndex(){
		require_once(ROOT.'/views/category/category.php');
		return true;
	}
}

?>