<?php

class PermintaanController extends Controller
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
				'actions'=>array('create','simpan','submit','update'),
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
		$this->render('view',array(
			'model'=>Material::model()->findByPk($idm),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($idm)
	{
		$model=new Permintaan;
		$modal=Material::model()->findByPk($idm);
		$respon = Dokpermintaan::Model()->findAll('id_material='.$idm);
		$model->id_material=$idm;
		$modal->status_tender=1;
			$modal->status=4.5;
			$modal->save();
		
		$model->tgl_create= date("Y-m-d",time());
			$date = strtotime(date("Y-m-d H:i:s"));
			$a = strtotime("+10 day", $date);
			$model->pic = Yii::app()->user->id;
			$model->deadline_tutup=date("Y-m-d H:i:s",$a);
			$model->save();
				$log = new Log;
				$log->id_user = Yii::app()->user->id;
				$log->kegiatan = 'Upload dokumen permintaan penawaran vendor unuk pengadaan material  '.$modal->nama;
				$log->tgl = date("Y-m-d",time());
				$log->save();

		/*if(isset($_POST['Permintaan']))
		{
			//$model->attributes=$_POST['Permintaan'];
			//$model->id_material=$idm;
			
			
			//$model->file = CUploadedFile::getInstance($model, 'file');       
			//$path = Yii::getPathOfAlias("webroot"). '/dokumen/permintaan/'.$model->file;
			//$model->file->saveAs($path);
			
				Yii::app()->user->setFlash('success', 'Dokumen permintaan penawaran berhasil di upload');
				$this->redirect(array('material/index'));
		}*/
		
		$this->render('create',array(
			'model'=>$model, 'modal'=>$modal, 'respon'=>$respon
		));
	}

	public function actionSimpan (){
		Yii::app()->user->setFlash('success', 'Dokumen permintaan penawaran berhasil di upload');
		$this->redirect(array('material/index'));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionSubmit($id)
	{
		$log = new Log;
		$model=Material::model()->findByPk($id);
		$model->status = 5;
		$model->save();
		$log->id_user = Yii::app()->user->id;
		$log->kegiatan = "mensubmit dokumen permintaan material baru";
		$log->tgl = date("Y-m-d",time());
		$log->save();
		Yii::app()->user->setFlash('success', 'Permintaan Material '.$model->nama.' telah dikrim!!');
		$this->redirect(array('material/index')); 
		
	}

	public function actionUpdate($idm)
	{
		$model=$this->loadModel($idm);
		$modal=Material::model()->findByPk($idm);
		$respon = Dokpermintaan::Model()->findAll('id_material='.$idm);

		if(isset($_POST['Permintaan']))
		{
			$model->attributes=$_POST['Permintaan'];
			
			if($model->save())
				$log = new Log;
				$log->id_user = Yii::app()->user->id;
				$log->kegiatan = 'Upload dokumen permintaan penawaran vendor unuk pengadaan material  '.$modal->nama;
				$log->tgl = date("Y-m-d",time());
				$log->save();
				Yii::app()->user->setFlash('success', 'Dokumen permintaan penawaran berhasil di upload');
				$this->redirect(array('material/index'));
		}

		$this->render('create',array(
			'model'=>$model, 'modal'=>$modal, 'respon'=>$respon
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
		$dataProvider=new CActiveDataProvider('Permintaan');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Permintaan('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Permintaan']))
			$model->attributes=$_GET['Permintaan'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Permintaan the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Permintaan::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Permintaan $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='permintaan-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
