<?php

class PengajuanController extends Controller
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
				'actions'=>array('create','update','approve','reject','konfirmasi','cekstok'),
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
		$pengajuan = Pengajuan::Model()->findAll('id_material ='.$idm);
		$modal=Material::model()->findByPk($idm);
		$this->render('view',array(
			'pengajuan'=>$pengajuan, 'modal'=>$modal
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($idm)
	{
		$model=new Pengajuan;
		$modal=Material::model()->findByPk($idm);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pengajuan']))
		{
			$model->attributes=$_POST['Pengajuan'];
			$model->id_material=$idm;
			$model->id_pengaju = Yii::app()->user->id;
			$model->tgl_create = date("Y-m-d");
			$model->disetujui = 0;
			$model->diterima =0;
			//$modal->actual_fatnirn=date("Y-m-d H:i:s");
			$date = strtotime(date("Y-m-d H:i:s"));
			$a = strtotime("+7 day", $date);
			if($model->save())
				$log = new Log;
				$log->id_user = Yii::app()->user->id;
				$log->kegiatan = 'Pengajuan Material oleh user';
				$log->tgl = date("Y-m-d",time());
				$log->save();
				Yii::app()->user->setFlash('success', 'Pengajuan Material  '.$modal->nama.' telah disubmit!');
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
	public function actionApprove($id, $idm)
	{
		$modal=Material::model()->findByPk($idm);
		$model=$this->loadModel($id);
		$modal->stok = $modal->stok - $model->jumlah;
		$modal->save();
		$model->disetujui = 1;
		$model->pic_wh = Yii::app()->user->id;
		$model->tgl_setujui = date("Y-m-d");
		$model->save();
				$log = new Log;
				$log->id_user = Yii::app()->user->id;
				$log->kegiatan = 'Menerima pengajuan untuk material '.$modal->nama.' yang diajukan oleh '.$model->pengaju->nama;
				$log->tgl = date("Y-m-d",time());
				$log->save();
				Yii::app()->user->setFlash('success', 'Pengajuan Material  '.$modal->nama.' telah di approve!');
				$this->redirect(array('material/index'));
		
	}

	public function actionReject($id, $idm)
	{
		$modal=Material::model()->findByPk($idm);
		$model=$this->loadModel($id);
		//$modal->stok = $modal->stok - $model->jumlah;
		$modal->save();
		$model->disetujui = 2;
		$model->pic_wh = Yii::app()->user->id;
		$model->tgl_setujui = date("Y-m-d");
		$model->save();
				$log = new Log;
				$log->id_user = Yii::app()->user->id;
				$log->kegiatan = 'Menolak pengajuan untuk material '.$modal->nama.' yang diajukan oleh '.$model->pengaju->nama;
				$log->tgl = date("Y-m-d",time());
				$log->save();
				Yii::app()->user->setFlash('success', 'Pengajuan Material  '.$modal->nama.' telah di reject!');
				$this->redirect(array('material/index'));
		
	}

	public function actionKonfirmasi($id, $idm)
	{
		$modal=Material::model()->findByPk($idm);
		$model=$this->loadModel($id);
		//$modal->stok = $modal->stok - $model->jumlah;
		$modal->save();
		$model->disetujui = 3;
		$model->id_penerima = Yii::app()->user->id;
		$model->tgl_diterima = date("Y-m-d");
		$model->save();
				$log = new Log;
				$log->id_user = Yii::app()->user->id;
				$log->kegiatan = 'Konfirmasi penerimaan untuk material '.$modal->nama.' yang diajukan oleh '.$model->pengaju->nama;
				$log->tgl = date("Y-m-d",time());
				$log->save();
				Yii::app()->user->setFlash('success', 'Pengajuan Material  '.$modal->nama.' telah di konfirmasi!');
				$this->redirect(array('material/index'));
		
	}
	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Pengajuan');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionCekstok(){
		$x=(int) $_POST['jumlah'];
		$xc = $_POST['jumlah'];
		echo $xc;
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Pengajuan('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Pengajuan']))
			$model->attributes=$_GET['Pengajuan'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Pengajuan the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Pengajuan::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Pengajuan $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pengajuan-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
