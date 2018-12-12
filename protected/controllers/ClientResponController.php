<?php

class ClientResponController extends Controller
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
				'actions'=>array('create','creater','update'),
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
	public function actionCreate($idm)
	{
		$model=new ClientRespon;
		$modal=Material::model()->findByPk($idm);
		$dokeng=DokEng::model()->findByPk($idm);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ClientRespon']))
		{
			$model->attributes=$_POST['ClientRespon'];
			$model->material_id = $modal->id;
			$model->file_respon = CUploadedFile::getInstance($model, 'file_respon');                       
			$path = Yii::getPathOfAlias("webroot"). '/dokumen/responclient/terima-'.$model->file_respon;
			if($model->file_respon != null){
			$model->file_respon->saveAs($path);
		}
			$model->tgl_create= date("Y-m-d",time());
			$modal->status=2;
			
			$date = strtotime(date("Y-m-d H:i:s"));
			$a = strtotime("+2 day", $date);
			$dokeng->actual_approve=date("Y-m-d H:i:s");
			$modal->plan_tender=date("Y-m-d H:i:s",$a);
			$modal->save();
			$dokeng->save();
			if($model->save())
				Yii::app()->user->setFlash('success', 'Dokumen Engineering Material '.$modal->nama.' berhasil di Approve!!');
				$this->redirect(array('material/index'));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionCreateR($idm)
	{
		$model=new ClientRespon;
		$modal=Material::model()->findByPk($idm);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ClientRespon']))
		{
			$model->attributes=$_POST['ClientRespon'];
			$model->material_id = $modal->id;
			$model->file_respon = CUploadedFile::getInstance($model, 'file_respon');                       
			$path = Yii::getPathOfAlias("webroot"). '/dokumen/responclient/tolak-'.$model->file_respon;
			$model->file_respon->saveAs($path);
			$model->tgl_create= date("Y-m-d",time());
			$dokeng->tgl_rejected=date("Y-m-d H:i:s");
			$dokeng->save();
			$modal->status=3;
			$modal->save();
			if($model->save())
				Yii::app()->user->setFlash('success', 'Dokumen Engineering Material '.$modal->nama.' berhasil di reject!!');
				$this->redirect(array('material/index'));
		}

		$this->render('creater',array(
			'model'=>$model,
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

		if(isset($_POST['ClientRespon']))
		{
			$model->attributes=$_POST['ClientRespon'];
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
		$dataProvider=new CActiveDataProvider('ClientRespon');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ClientRespon('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ClientRespon']))
			$model->attributes=$_GET['ClientRespon'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ClientRespon the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ClientRespon::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ClientRespon $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='client-respon-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
