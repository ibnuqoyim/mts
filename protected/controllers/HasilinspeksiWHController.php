<?php

class HasilinspeksiWHController extends Controller
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
				'actions'=>array('create','update','submit'),
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

	public function actionSubmit($idm)
	{
		$log = new Log;
		$model=Material::model()->findByPk($idm);
		$model->status = 15;
		$model->save();
		$log->id_user = Yii::app()->user->id;
		$log->kegiatan = "mensubmit dokumen Plan Produksi material baru";
		$log->tgl = date("Y-m-d",time());
		$log->save();
		Yii::app()->user->setFlash('success', 'Dokumen Plan Produksi '.$model->nama.' telah dikrim!!');
		$this->redirect(array('material/index')); 
		
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
		$model=new HasilinspeksiWH;
		$modal=Material::model()->findByPk($idm);
		$irn=Irn::model()->findAll('id_material='.$idm);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['HasilinspeksiWH']))
		{
			$model->attributes=$_POST['HasilinspeksiWH'];
			$model->id_material=$idm;
			$model->file_hasil_inspeksi = CUploadedFile::getInstance($model, 'file_hasil_inspeksi');       
			$path = Yii::getPathOfAlias("webroot"). '/dokumen/Warehouse/inspeksi-'.$model->file_hasil_inspeksi;
			$model->file_hasil_inspeksi->saveAs($path);
			$modal->status=13.5;
			$modal->attributes=$_POST['Material'];
			
			$modal->actual_finish=date("Y-m-d H:i:s");
			$modal->save();
			$model->pic = Yii::app()->user->id;
			$model->tgl_create= date("Y-m-d",time());
			if($model->save())
				$log = new Log;
				$log->id_user = Yii::app()->user->id;
				$log->kegiatan = 'Menginput hasil inspeksi di warehouse untuk material  '.$modal->nama;
				$log->tgl = date("Y-m-d",time());
				$log->save();
				Yii::app()->user->setFlash('success', 'Hasil Inspeksi Warehouse berhasil di submit!');
				$this->redirect(array('material/index'));
		}

		$this->render('create',array(
			'model'=>$model, 'modal'=>$modal, 'irn'=>$irn
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($idm)
	{
		$model=$this->loadModel($idm);
		$modal=Material::model()->findByPk($idm);
		$irn=Irn::model()->findAll('id_material='.$idm);
		$old = $model->file_hasil_inspeksi;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['HasilinspeksiWH']))
		{
			$model->attributes=$_POST['HasilinspeksiWH'];
			$model->id_material=$idm;
			$model->file_hasil_inspeksi = CUploadedFile::getInstance($model, 'file_hasil_inspeksi');       
			
			if($model->file_hasil_inspeksi != Null){
			$path = Yii::getPathOfAlias("webroot"). '/dokumen/Warehouse/inspeksi-'.$model->file_hasil_inspeksi;
			$model->file_hasil_inspeksi->saveAs($path);
		}else{
		$model->file_hasil_inspeksi = $old;}
			$modal->status=13.5;
			$modal->attributes=$_POST['Material'];
			
			$modal->actual_finish=date("Y-m-d H:i:s");
			$modal->save();
			$model->pic = Yii::app()->user->id;
			$model->tgl_create= date("Y-m-d",time());
			if($model->save())
				$log = new Log;
				$log->id_user = Yii::app()->user->id;
				$log->kegiatan = 'Menginput hasil inspeksi di warehouse untuk material  '.$modal->nama;
				$log->tgl = date("Y-m-d",time());
				$log->save();
				Yii::app()->user->setFlash('success', 'Hasil Inspeksi Warehouse berhasil di submit!');
				$this->redirect(array('material/index'));
		}

		$this->render('update',array(
			'model'=>$model, 'modal'=>$modal, 'irn'=>$irn
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
		$dataProvider=new CActiveDataProvider('HasilinspeksiWH');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new HasilinspeksiWH('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['HasilinspeksiWH']))
			$model->attributes=$_GET['HasilinspeksiWH'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return HasilinspeksiWH the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=HasilinspeksiWH::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param HasilinspeksiWH $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='hasilinspeksi-wh-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
