<?php

class KomController extends Controller
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
				'actions'=>array('create','submit','update','approve'),
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
		$model=new Kom;
		$modal=Material::model()->findByPk($idm);
		$kontrak=Kontrak::model()->findAll('id_material ='.$idm);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Kom']))
		{
			$model->attributes=$_POST['Kom'];
			$model->id_material=$idm;
			
			$modal->status=75;
			$modal->save();
			$model->pic = Yii::app()->user->id;
			$model->tgl_create= date("Y-m-d",time());
			if($model->save())
				$log = new Log;
				$log->id_user = Yii::app()->user->id;
				$log->kegiatan = 'Membuat jadwal dan undangan untuk pelaksanaan Kick of Meeting pelaksanaan pengadaan material  '.$modal->nama;
				$log->tgl = date("Y-m-d",time());
				$log->save();
				Yii::app()->user->setFlash('success', 'Jadwal Kick of Meeting berhasil di buat');
				$this->redirect(array('material/index'));
		}

		$this->render('create',array(
			'model'=>$model, 'modal'=>$modal,'kontrak'=>$kontrak
		));
	}

	public function actionApprove($idm)
	{
		$model=Kom::model()->findAll('id_material='.$idm);
		$modal=Material::model()->findByPk($idm);
		$kontrak=Kontrak::model()->findAll('id_material ='.$idm);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Material']))
		{
			$modal->attributes=$_POST['Material'];
			$modal->status = 8;
			if($modal->save())
				$log = new Log;
				$log->id_user = Yii::app()->user->id;
				$log->kegiatan = 'Mengkonfirmasi undangan Kick of Meeting untuk pengdaan material  '.$modal->nama;
				$log->tgl = date("Y-m-d",time());
				$log->save();
				Yii::app()->user->setFlash('success', 'Jadwal Kick of Meeting telah di Konfirmasi');
				$this->redirect(array('material/index'));
		}

		$this->render('view',array(
			'model'=>$model, 'modal'=>$modal,'kontrak'=>$kontrak
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionSubmit($idm)
	{
		$log = new Log;
		$model=Material::model()->findByPk($idm);
		$model->status = 7.5;
		$model->save();
		$log->id_user = Yii::app()->user->id;
		$log->kegiatan = "mensubmit jadwal Kick Of Meeting";
		$log->tgl = date("Y-m-d",time());
		$log->save();
		Yii::app()->user->setFlash('success', 'jadwal Kick Of Meeting '.$model->nama.' telah disubmit!!');
		$this->redirect(array('material/index')); 
		
	}


	public function actionUpdate($idm)
	{
		$model=$this->loadModel($idm);
		$modal=Material::model()->findByPk($idm);
		$kontrak=Kontrak::model()->findAll('id_material ='.$idm);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Kom']))
		{
			$model->attributes=$_POST['Kom'];
			$model->id_material=$idm;
			
			$modal->status=75;
			$modal->save();
			$model->pic = Yii::app()->user->id;
			$model->tgl_create= date("Y-m-d",time());
			if($model->save())
				$log = new Log;
				$log->id_user = Yii::app()->user->id;
				$log->kegiatan = 'Mengupdate jadwal dan undangan untuk pelaksanaan Kick of Meeting pelaksanaan pengadaan material  '.$modal->nama;
				$log->tgl = date("Y-m-d",time());
				$log->save();
				Yii::app()->user->setFlash('success', 'Jadwal Kick of Meeting berhasil di update');
				$this->redirect(array('material/index'));
		}

		$this->render('update',array(
			'model'=>$model, 'modal'=>$modal,'kontrak'=>$kontrak
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
		$dataProvider=new CActiveDataProvider('Kom');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Kom('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Kom']))
			$model->attributes=$_GET['Kom'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Kom the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Kom::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Kom $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='kom-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
