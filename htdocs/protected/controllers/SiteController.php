<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the signUp page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

	/**
	 * Displays the signUp page
	 */
	public function actionSignUp()
	{
		$model=new SignUpForm;
		$pc = Yii::app()->passwordCrypto;
		if(isset($_POST['SignUpForm']))
		{
			$model->attributes=$_POST['SignUpForm'];
			if($model->validate())
			{
				// Check for uniqueness and add to user database
 
				// $model->save() automatically invokes the $model->validate() method
				// which fires the rules() function defined in the user class.
				if ($model->save())
				{
/*
	                    $postBuckle = new Buckle;
	                    $postBuckle->dataset_id = 90;
	                    $postBuckle->type = '277';
	                    if (!$postBuckle->save()) error_log('Failed to save buckle');
*/

					$newUser= new User;
					$newUser->username = $model->username;
					$newUser->password = Yii::app()->passwordCrypto->hash($model->password);
					$newUser->grade = $model->grade;
					$newUser->codeword = $model->codeword;					
					$newUser->first_name='generic';
					$newUser->last_name='user';
					$newUser->email=$model->email;
					
					if (!$newUser->save())
					{
						error_log('Failed to save user');
						Yii::app()->user->setFlash('signUp','That username is already taken, please try another');
					}

					else
					{
						Yii::app()->user->setFlash('signUp','Successfully signed up. You can now login. KEEP YOUR PASSWORD SAFE!');
					}
				}
				else
				{
					Yii::app()->user->setFlash('signUp','There was an error saving, please contact the BEAVRS administrator');
				}
				    
				//$headers="From: {$model->username}\r\nReply-To: {$model->username}";
				//mail(Yii::app()->params['adminEmail'],$model->username,$model->passcode);
				//Yii::app()->user->setFlash('signUp','Thank you for signing up with us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('signUp',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// Collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
			{
				// Successfully logged in. Set outcomes to failure if more than x months
				$datasets = new Dataset;
				$datasets->setFailures();
				
				// Show admin screen
                $this->redirect($this->createUrl('dataset/admin'));
            }
		}
		
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Displays the information page
	 */
	public function actionDocumentation()
	{
		$model=null;

		// display the documentation
		$this->render('documentation');
	}
	
	/**
	 * Displays the admin page
	 * @param integer $id the ID of the report to be run
	 */
	public function actionAdmin($id)
	{
		$model=null;
		
		// Define admins here
		switch ($id) {
			case 0:
				break;
			
			// Admin 1
			case 1:
				break;
				
			// Admin 2
			case 2:
				break;
				
			default:
				break;
		}

		// Sisplay the admin page		
		$this->render('admin',array(
			'adminId'=>$id,
		));
	}
	
	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}