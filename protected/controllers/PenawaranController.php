 <?php

class PenawaranController extends Controller
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
				'actions'=>array('create','updatec','update','review_eng'),
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
		$penawaran = Penawaran::Model()->findAll('id_material='.$idm);
		$modal=Material::model()->findByPk($idm);
		$this->render('view',array(
			'modal'=>$modal, 'penawaran' => $penawaran,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($idm)
	{
		$model=new Penawaran;
		$dok_per = Dokpermintaan::model()->findAll('id_material ='.$idm.' AND id_vendor ='.Yii::app()->user->id);
		$modal=Material::model()->findByPk($idm);
		$permintaan = Permintaan::Model()->findByPk($idm);
		$list = Penawaran::model()->findAll('id_material = '.$idm.' AND id_user ='.Yii::app()->user->id);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Penawaran']))
		{
			$model->attributes=$_POST['Penawaran'];
			$model->id_material=$idm;
			$model->id_user = Yii::app()->user->id;
			$modal->status=5;
			$modal->save();
			$model->file_teknis = CUploadedFile::getInstance($model, 'file_teknis');       
			$path = Yii::getPathOfAlias("webroot"). '/dokumen/penawaran/TEKNIS-'.$model->file_teknis;
			$model->file_teknis->saveAs($path);
			$model->file_administrasi = CUploadedFile::getInstance($model, 'file_administrasi');       
			$path = Yii::getPathOfAlias("webroot"). '/dokumen/penawaran/ADM-'.$model->file_administrasi;
			$model->file_administrasi->saveAs($path);
			$model->tgl_create= date("Y-m-d",time());
			if($model->save())
				$log = new Log;
				$log->id_user = Yii::app()->user->id;
				$log->kegiatan = 'Input penawaran untuk tender pengadaan material  '.$modal->nama;
				$log->tgl = date("Y-m-d",time());
				$log->save();
				Yii::app()->user->setFlash('success', 'Dokumen penawaran berhasil di upload');
				$this->redirect(array('material/index'));
		}
		$this->render('create',array(
			'model'=>$model, 'dok_per'=> $dok_per,'modal'=>$modal, 'permintaan'=>$permintaan, 'list'=>$list,
		));
	}

	public function actionUpdatec($idm)
	{
		$model=$this->loadModel($idm);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Penawaran']))
		{
			$model->attributes=$_POST['Penawaran'];
			
			$model->file_teknis = CUploadedFile::getInstance($model, 'file_teknis');       
			$path = Yii::getPathOfAlias("webroot"). '/dokumen/penawaran/TEKNIS-'.$model->file_teknis;
			$model->file_teknis->saveAs($path);
			$model->file_administrasi = CUploadedFile::getInstance($model, 'file_administrasi');       
			$path = Yii::getPathOfAlias("webroot"). '/dokumen/penawaran/ADM-'.$model->file_administrasi;
			$model->file_administrasi->saveAs($path);
			$model->tgl_create= date("Y-m-d",time());
			if($model->save())
				$log = new Log;
				$log->id_user = Yii::app()->user->id;
				$log->kegiatan = 'Input penawaran untuk tender pengadaan material  ';
				$log->tgl = date("Y-m-d",time());
				$log->save();
				Yii::app()->user->setFlash('success', 'Dokumen penawaran berhasil di upload');
				$this->redirect(array('material/index'));
		}
		$this->render('createc',array(
			'model'=>$model
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

		if(isset($_POST['Penawaran']))
		{
			$model->attributes=$_POST['Penawaran'];
			
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	public function actionReview_eng($id)
	{
		$model=$this->loadModel($id);
		$modal=Material::Model()->findByPk($id);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Penawaran']))
		{
			$model->attributes=$_POST['Penawaran'];
			$model->file_review_eng = CUploadedFile::getInstance($model, 'file_review_eng'); 
			if($model->file_review_eng != null){      
			$path = Yii::getPathOfAlias("webroot"). '/dokumen/penawaran/RE-'.$model->file_review_eng;
			$model->file_review_eng->saveAs($path);
		}
			if($model->save())
				$log = new Log;
				$log->id_user = Yii::app()->user->id;
				$log->kegiatan = 'Memberikan memberikan review untuk penawaran  ';
				$log->tgl = date("Y-m-d",time());
				$log->save();
				Yii::app()->user->setFlash('success', 'Dokumen penawaran berhasil di review');
				$this->redirect(array('penawaran/view','idm'=>$model->id_material));
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
		$dataProvider=new CActiveDataProvider('Penawaran');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Penawaran('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Penawaran']))
			$model->attributes=$_GET['Penawaran'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Penawaran the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Penawaran::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Penawaran $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='penawaran-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
