<?php

class SearchController{
	public function actionIndex(){
		require ROOT.'/views/search/search.php';
		return true;
	}
}

?>