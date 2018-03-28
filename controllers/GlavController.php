<?php

class GlavController{
	public function actionIndex(){
		require_once(ROOT.'/views/site/index.php  ');
		return true;
	}
}

?>