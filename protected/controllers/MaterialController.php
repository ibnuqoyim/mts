<?php

class MaterialController extends Controller
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
				'actions'=>array('create','update','UpdateDPP','win'),
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

		if(isset($_POST['Material']))
		{
			$model->attributes=$_POST['Material'];
			$model->dok_eng = CUploadedFile::getInstance($model, 'dok_eng');
			                        if (empty($model->dok_eng)) {
			                           $model->dok_eng = 0;
			                        } else {
			                            $val = TRUE;
			                        }
			$model->dok_eng=$dokeng->id;
			$dokeng->material=$model->id;
			if($dokeng->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'dokeng'=>new DokEng,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Material;
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$old = 0;
		if(isset($_POST['Material']))
		{
			$model->attributes=$_POST['Material'];
			
			$model->dokeng = CUploadedFile::getInstance($model, 'dokeng');
			                        
			$path = Yii::getPathOfAlias("webroot"). '/dokumen/dokeng/'.$model->dokeng;
			$model->dokeng->saveAs($path);

			
			$model->create_date= date("Y-m-d",time());
			$model->last_update= date("Y-m-d",time());
			$model->status = 1 ;

			if($model->save())
				Yii::app()->user->setFlash('success', 'Material '.$model->nama.' telah diajukan!!');
				$this->redirect(array('material/index')); 
		
		}

		$this->render('create',array(
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
		$respon = ClientRespon::Model()->findAll('material_id='.$id);
		$old = $model->dokeng;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Material']))
		{
			$model->attributes=$_POST['Material'];
			$model->dokeng = CUploadedFile::getInstance($model, 'dokeng');
			                        
			$path = Yii::getPathOfAlias("webroot"). '/dokumen/dokeng/'.$model->dokeng;
			$model->dokeng->saveAs($path);
			//$pathold = Yii::getPathOfAlias("webroot"). '/dokumen/dokeng/old-'.$model->dokeng;
			//$old->saveAs($pathold);
			
			$model->create_date= date("Y-m-d",time());
			$model->last_update= date("Y-m-d",time());
			$model->status = 1 ;

			if($model->save())
				Yii::app()->user->setFlash('success', 'Dokumen Engineering Material '.$model->nama.' berhasil di update!!');
				$this->redirect(array('material/index')); 
		}

		$this->render('update',array(
			'model'=>$model,'respon'=>$respon
		));
	}

	public function actionUpdateDPP($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Material']))
		{
			$model->attributes=$_POST['Material'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('updateDPP',array(
			'model'=>$model,
		));
	}
	public function actionUpdateDP($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Material']))
		{
			$model->attributes=$_POST['Material'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('updateDP',array(
			'model'=>$model,
		));
	}
	public function actionUpdatePemenang($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Material']))
		{
			$model->attributes=$_POST['Material'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('updatePemenang',array(
			'model'=>$model,
		));
	}
	public function actionUpdateKontrak($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Material']))
		{
			$model->attributes=$_POST['Material'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('updateKontrak',array(
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
		$model=new Material('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Material']))
			$model->attributes=$_GET['Material'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	public function actionWin($idp, $idm)
	{
		$model=$this->loadModel($idm);
		$model->pemenang=$idp;
		$model->status=6;
		$model->save();

		$this->redirect('index');
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Material('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Material']))
			$model->attributes=$_GET['Material'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Material the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Material::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Material $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='material-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
