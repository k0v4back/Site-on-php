<?php

class InstitutionController{
	public function actionIndex(){
		require_once(ROOT.'/views/institution/institution.php');
		return true;
	}
}

?>