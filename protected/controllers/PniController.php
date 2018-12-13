<?php

class PniController extends Controller
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
				'actions'=>array('index','view','progres'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','hasil'),
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
		$model=new Pni; 
		$modal=Material::model()->findByPk($idm);
		$kontrak=Kontrak::model()->findByPk($idm);
		$kom=Kom::model()->findByPk($idm);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pni']))
		{
			$model->attributes=$_POST['Pni'];
			
			$model->id_material=$idm;
			$model->pic = Yii::app()->user->id;
			$kom->actual_kom = date("Y-m-d H:i:s");
			$kom->save();
			$modal->status=8.5;
			$modal->save();
			$model->file = CUploadedFile::getInstance($model, 'file');       
			$path = Yii::getPathOfAlias("webroot"). '/dokumen/pni/'.$model->file;
			$model->file->saveAs($path);
			$model->tgl_create= date("Y-m-d",time());
			$model->save();
			if($model->save())
				Yii::app()->user->setFlash('success', 'Perencanaan Production and Inspection berhasil di upload');
				$this->redirect(array('material/index'));
		}

		$this->render('create',array(
			'model'=>$model, 'modal'=>$modal,'kontrak'=>$kontrak
		));
	}

	public function actionProgres($idm)
	{
		$model=$this->loadModel($idm);
 
		$modal=Material::model()->findByPk($idm);


		if(isset($_POST['Pni']))
		{
			$model->attributes=$_POST['Pni'];
			
			
			$model->save();
				if($model->progres == 100){
					$modal->status = 9;
					$model->actual_produksi = date("Y-m-d H:i:s");
					$date = strtotime(date("Y-m-d H:i:s"));
					$a = strtotime("+2 day", $date);
					
					$model->plan_inspeksi=date("Y-m-d H:i:s",$a);
					$modal->save();
					$model->save();
				}
				
				
				Yii::app()->user->setFlash('success', 'Progress produksi telah diupdate');
				$this->redirect(array('material/index'));
		}

		$this->render('createp',array(
			'model'=>$model, 'modal'=>$modal
		));
		
	}

	public function actionHasil($idm)
	{
		$model=$this->loadModel($idm);
 
		$modal=Material::model()->findByPk($idm);


		if(isset($_POST['Pni']))
		{
			$model->attributes=$_POST['Pni'];
			
			$model->file_hasil_inspeksi = CUploadedFile::getInstance($model, 'file_hasil_inspeksi');       
			$path = Yii::getPathOfAlias("webroot"). '/dokumen/pni/hasil-'.$model->file_hasil_inspeksi;
			$model->file_hasil_inspeksi->saveAs($path);
			$model->pic_qc = Yii::app()->user->id;
			if($model->save())
				if($model->status_inspeksi == "Lulus"){
					$model->actual_inspeksi = date("Y-m-d H:i:s");
					$date = strtotime(date("Y-m-d H:i:s"));
					$a = strtotime("+3 day", $date);
					
					$modal->plan_irn=date("Y-m-d H:i:s",$a);
					$modal->save();
					$model->save();
					$this->redirect(array('irn/create','idm'=>$modal->id));
				}
				else{
				$modal->status=10;
				$model->actual_inspeksi = date("Y-m-d H:i:s");
				$date = strtotime(date("Y-m-d H:i:s"));
				$a = strtotime("+5 day", $date);
				$model->save();	
				$modal->plan_repair=date("Y-m-d H:i:s",$a);
				$modal->save();
				Yii::app()->user->setFlash('success', 'Berita Acara Inspeksi berhasil di upload');
				$this->redirect(array('material/index'));

		}}

		$this->render('createh',array(
			'model'=>$model, 'modal'=>$modal
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
		$modal=Material::model()->findByPk($id);
		$kontrak=Kontrak::model()->findByPk($id);
		$kom=Kom::model()->findByPk($id);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pni']))
		{
			$model->attributes=$_POST['Pni'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_material));
		}

		$this->render('update',array(
			'model'=>$model, 'modal'=>$modal,
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
		$dataProvider=new CActiveDataProvider('Pni');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Pni('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Pni']))
			$model->attributes=$_GET['Pni'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Pni the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Pni::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Pni $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pni-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
