<?php

class DefaultController extends Admin
{

	public function actionIndex()
	{
        $this->layout='//layouts/admin_panel';
		if (!Yii::app()->user->isGuest)
		{
			$this->render('content');
		}
		else
		{
			$model=new LoginForm;
			if(isset($_POST['LoginForm']))
			{
				$model->attributes=$_POST['LoginForm'];
				if($model->validate())
					$this->refresh();
			}
			$this->render('login_form', array('model'=>$model));
		}
	}

	public function actionLogin()
	{
		$model=new LoginForm;

		//$this->layout='//layouts/admin_panel';
		$this->render('login_form', array('model'=>$model));

	}

	public function actionLogout()
	{
        //$this->layout='//layouts/admin_panel';
		Yii::app()->user->logout();
		$this->redirect(array('/admin'));
	}

}