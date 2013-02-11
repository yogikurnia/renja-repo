<?php

class MasterDataProgramController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'create'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
              $masterid = $_GET['masterid'];
		$masterDataProgram=new MasterDataProgram;
              $sasaranProgram=new SasaranProgram;
              $iku = new IkuProgram;
              
              $masterDataProgram->id_master_data = $masterid;
              if($masterDataProgram->save())
              {
                     $sasaranProgram->id_program = $masterDataProgram->getPrimaryKey();
                     if($sasaranProgram->save())
                     {
                            $iku->id_sasaran_program = $sasaranProgram->getPrimaryKey();
                            $iku->save();
                     }
              }
                     
              
//              if($masterDataProgram->save())
//              
//                     $sasaranProgram->id_program = $masterDataProgram->id_program;
//                     $sasaranProgram->save();
//              }
              
//              $this->redirect(array('index'));
              $masters = MasterDataProgram::model()->findAll();
              
              if (Yii::app()->request->isAjaxRequest)
              {
                     
                     $this->renderPartial('masterDataProgramAjax', array('masters' => $masters), false, true);
              }
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['MasterDataProgram']))
		{
			$model->attributes=$_POST['MasterDataProgram'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_program));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
              $masterid = $_GET['masterid'];
		$masters = MasterDataProgram::model()->findAllByAttributes(array('id_master_data' => $masterid));
		$this->render('index', array('masters' => $masters, 'masterid' => $masterid));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new MasterDataProgram('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['MasterDataProgram']))
			$model->attributes=$_GET['MasterDataProgram'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=MasterDataProgram::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='master-data-program-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
