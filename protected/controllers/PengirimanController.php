<?php

class PengirimanController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
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
	public function actionView($idm)
	{
		$modal=Material::model()->findByPk($idm);
		$pengiriman = Pengiriman::Model()->findAll('id_material='.$idm);
		if(isset($_POST['Material']))
		{
			$modal->attributes=$_POST['Material'];
			$modal->status=13;
			$modal->save();
			
			if($modal->save())
				Yii::app()->user->setFlash('success', 'Pengiriman '.$modal->nama.' telah diterima!');
				$this->redirect(array('material/index'));
			}
		$this->render('update',array(
			'modal'=>$modal, 'pengiriman'=>$pengiriman
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($idm)
	{
		$model=new Pengiriman;
		$modal=Material::model()->findByPk($idm);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pengiriman']))
		{
			$model->attributes=$_POST['Pengiriman'];
			$model->id_material=$idm;
			$modal->save();
			$model->tgl_create= date("Y-m-d",time());
			if($model->save())
				Yii::app()->user->setFlash('success', 'Detail Pengiriman '.$modal->nama.' telah di simpan!');
				$this->redirect(array('material/index'));
		}

		$this->render('create',array(
			'model'=>$model, 'modal'=>$modal,
		));
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

		if(isset($_POST['Pengiriman']))
		{
			$model->attributes=$_POST['Pengiriman'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		$dataProvider=new CActiveDataProvider('Pengiriman');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Pengiriman('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Pengiriman']))
			$model->attributes=$_GET['Pengiriman'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Pengiriman the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Pengiriman::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Pengiriman $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pengiriman-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}