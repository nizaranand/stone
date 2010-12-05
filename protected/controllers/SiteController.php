<?php

class SiteController extends CController {

	public $layout = 'right_panel';

	public function actionIndex() {
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	public function actionError() {
		$error = Yii::app()->errorHandler->error;
		
		if ($error != null) {
			if (Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

}