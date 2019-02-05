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
				'actions'=>array('hapus','submit','create','update','dynamicform', 'log','win','admin','detail','closetender','test'),
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

	public function actionHapus($id)
	{

		$model=new Material('search');
		$modal=$this->loadModel($id);
		$modal->proyek = 1;  // clear any default values
		$modal->save();

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionDynamicform()
	{
	    $x=(int) $_POST['kategori'];
	    if($x == 1){
	    echo '<script>
			function myFunction() {
			  document.getElementById("dok1").style.visibility = "hidden";
			}
			myFunction()
			</script>' ;
		}	else{
	    echo '<script>
			function myFunction() {
			  document.getElementById("dok1").style.visibility = "visible";
			}
			myFunction()
			</script>' ; }
	}

	public function actionDetail($id)
	{
		$log = new Log;
		$respon = ClientRespon::Model()->findAll('material_id='.$id);
		$hasilPni = HasilPni::Model()->findAll('id_material='.$id);
		$hasilinspeksiWH = HasilinspeksiWH::Model()->findAll('id_material='.$id);
		$hasilRepair = Hasilrepair::Model()->findAll('id_material='.$id);
		$irn = Irn::Model()->findAll('id_material='.$id);
		$kom = Kom::Model()->findAll('id_material='.$id);
		$kontrak = Kontrak::Model()->findAll('id_material='.$id);
		$pni =Pni::Model()->findAll('id_material='.$id);
		$permintaan = Permintaan::Model()->findAll('id_material='.$id);
		$penawaran = Penawaran::Model()->findAll('id_material='.$id);
		$pengiriman = Pengiriman::Model()->findAll('id_material='.$id);
		$model = $this->loadModel($id);
				$log->id_user = Yii::app()->user->id;
				$log->kegiatan = 'Melihat detail material '.$model->nama;
				$log->tgl = date("Y-m-d H:i:s");
				$log->save();		
		$this->render('detail',array(
			'model'=>$model,
			'respon'=>$respon,
			'hasilPni'=>$hasilPni,
			'hasilinspeksiWH'=>$hasilinspeksiWH,
			'hasilRepair'=>$hasilRepair,
			'irn'=>$irn,
			'kom'=>$kom,
			'kontrak'=>$kontrak,
			'pni'=>$pni,
			'permintaan'=>$permintaan,
			'penawaran'=>$penawaran,
			'pengiriman'=>$pengiriman, 
		));
	}

	public function actionTest(){
		/*if((int) $_POST['kategori'] == 1){
			echo $data1 = $model->engineering();
			}*/

			if($_POST['kategori'] == 1){$data1 = $model->vendor();}
		}

	public function actionLog($id)
	{
		$log = new Log;
		$respon = ClientRespon::Model()->findAll('material_id='.$id);
		$hasilPni = HasilPni::Model()->findAll('id_material='.$id);
		$hasilinspeksiWH = HasilinspeksiWH::Model()->findAll('id_material='.$id);
		$hasilRepair = Hasilrepair::Model()->findAll('id_material='.$id);
		$irn = Irn::Model()->findAll('id_material='.$id);
		$kom = Kom::Model()->findAll('id_material='.$id);
		$kontrak = Kontrak::Model()->findAll('id_material='.$id);
		$pni =Pni::Model()->findAll('id_material='.$id);
		$permintaan = Permintaan::Model()->findAll('id_material='.$id);
		$penawaran = Penawaran::Model()->findAll('id_material='.$id);
		$pengiriman = Pengiriman::Model()->findAll('id_material='.$id);
		$model = $this->loadModel($id);
				$log->id_user = Yii::app()->user->id;
				$log->kegiatan = 'Melihat log material '.$model->nama;
				$log->tgl = date("Y-m-d H:i:s");
				$log->save();

		$this->render('log',array(
			'model'=>$model,
			'respon'=>$respon,
			'hasilPni'=>$hasilPni,
			'hasilinspeksiWH'=>$hasilinspeksiWH,
			'hasilRepair'=>$hasilRepair,
			'irn'=>$irn,
			'kom'=>$kom,
			'kontrak'=>$kontrak,
			'pni'=>$pni,
			'permintaan'=>$permintaan,
			'penawaran'=>$penawaran,
			'pengiriman'=>$pengiriman, 
		));
	}	

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Material;
		$dokeng=new DokEng;
		$log = new Log;
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$old = 0;
		if(isset($_POST['Material'], $_POST['DokEng']))
		{
			$model->attributes=$_POST['Material'];
			$dokeng->attributes=$_POST['DokEng'];
			$dokeng->file_mto = CUploadedFile::getInstance($dokeng, 'file_mto');
			if($dokeng->file_mto != null){
				$path1 = Yii::getPathOfAlias("webroot"). '/dokumen/dokeng/MTO-'.$dokeng->file_mto;
				$dokeng->file_mto->saveAs($path1);
			}
			$dokeng->file_dwg = CUploadedFile::getInstance($dokeng, 'file_dwg');
			if($dokeng->file_dwg != null){
				$path2 = Yii::getPathOfAlias("webroot"). '/dokumen/dokeng/DWG-'.$dokeng->file_dwg;
				$dokeng->file_dwg->saveAs($path2);
			}
			$dokeng->file_spec = CUploadedFile::getInstance($dokeng, 'file_spec');
			if($dokeng->file_spec != null){
				$path3 = Yii::getPathOfAlias("webroot"). '/dokumen/dokeng/SPEC-'.$dokeng->file_spec;
				$dokeng->file_spec->saveAs($path3);
			}
			$dokeng->file_datasheet = CUploadedFile::getInstance($dokeng, 'file_datasheet');                        
			if($dokeng->file_datasheet != null){
				$path4 = Yii::getPathOfAlias("webroot"). '/dokumen/dokeng/DS-'.$dokeng->file_datasheet;
				$dokeng->file_datasheet->saveAs($path4);
			}
			
			//$model->serial = $model->kategoria->singkatan.'-'.$model->id;
			$model->proyek = 0;
			$model->create_date= date("Y-m-d",time());
			$model->last_update= date("Y-m-d",time());
			$date = strtotime(date("Y-m-d H:i:s"));
			$a = strtotime("+14 day", $date);
			$dokeng->plan_approve=date("Y-m-d H:i:s",$a);
			$model->status = 0.5 ;
			$model->pic = Yii::app()->user->id;

			if($model->save())
				$dokeng->id_material = $model->id;
				$dokeng->save();
				$log->id_user = Yii::app()->user->id;
				$log->kegiatan = "membuat material baru";
				$log->tgl = date("Y-m-d",time());
				$log->save();
				Yii::app()->user->setFlash('success', 'Material '.$model->nama.' telah buat!!');
				$this->redirect(array('material/index')); 
		
		}

		$this->render('create',array(
			'model'=>$model, 'dokeng'=>$dokeng,
		));
	}

	public function actionSubmit($id)
	{
		$log = new Log;
		$model=$this->loadModel($id);
		$model->status = 1;
		$model->save();
		$log->id_user = Yii::app()->user->id;
		$log->kegiatan = "mensubmit material baru";
		$log->tgl = date("Y-m-d",time());
		$log->save();
		Yii::app()->user->setFlash('success', 'Material '.$model->nama.' telah diajukan!!');
		$this->redirect(array('material/index')); 
		
	}
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$log = new Log;
		$model=$this->loadModel($id);
		$dokeng=DokEng::Model()->findByPk($id);
		$respon = ClientRespon::Model()->findAll('material_id='.$id);
		//$old = $model->dokeng;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['DokEng']))
		{
			//$model->attributes=$_POST['Material'];
			$dokeng->attributes=$_POST['DokEng'];
			//$mto_old = $dokeng->file_mto;
			$new = CUploadedFile::getInstance($dokeng, 'file_mto');
			if($new != null){
				$dokeng->file_mto = $new;
				$path1 = Yii::getPathOfAlias("webroot"). '/dokumen/dokeng/MTO-'.$dokeng->file_mto;
				$dokeng->file_mto->saveAs($path1);
			}
			 $new1 = CUploadedFile::getInstance($dokeng, 'file_dwg');
			if($new1 != null){
				$dokeng->file_dwg = $new1;
				$path2 = Yii::getPathOfAlias("webroot"). '/dokumen/dokeng/DWG-'.$dokeng->file_dwg;
				$dokeng->file_dwg->saveAs($path2);
			}
			$new2  = CUploadedFile::getInstance($dokeng, 'file_spec');
			if( $new2 != null){
				$dokeng->file_spec =$new2 ;
				$path3 = Yii::getPathOfAlias("webroot"). '/dokumen/dokeng/SPEC-'.$dokeng->file_spec;
				$dokeng->file_spec->saveAs($path3);
			}
			 $new3 = CUploadedFile::getInstance($dokeng, 'file_datasheet');                        
			if($new3  != null){
				$dokeng->file_datasheet = $new3 ;
				$path4 = Yii::getPathOfAlias("webroot"). '/dokumen/dokeng/DS-'.$dokeng->file_datasheet;
				$dokeng->file_datasheet->saveAs($path4);
			}
			$dokeng->tgl_rejected=date("Y-m-d",time());
			$dokeng->save();
			$model->create_date= date("Y-m-d",time());
			$model->last_update= date("Y-m-d",time());
			$model->status = 0.5 ;

			if($model->save())
				$log->id_user = Yii::app()->user->id;
				$log->kegiatan = 'Mengupdate dokumen engineering untuk material '.$model->nama;
				$log->tgl = date("Y-m-d",time());
				$log->save();
				Yii::app()->user->setFlash('success', 'Dokumen Engineering Material '.$model->nama.' berhasil di update!!');
				$this->redirect(array('material/index')); 
		}

		$this->render('update',array(
			'model'=>$model,'respon'=>$respon, 'dokeng'=>$dokeng,
		));
	}
	
	public function actionClosetender($idm)
	{
		$log = new Log;
		$model=$this->loadModel($idm);
		$tender=Permintaan::Model()->findByPk($idm);
		$model->status_tender = 2;
		$tender->actual_tutup = date("Y-m-d H:i:s");
		$date = strtotime(date("Y-m-d H:i:s"));
		$a = strtotime("+17 day", $date);
		$tender->plan_pemenang=date("Y-m-d H:i:s",$a);
		$model->save();
		$tender->save();
				$log->id_user = Yii::app()->user->id;
				$log->kegiatan = 'Menutup tender untuk material '.$model->nama;
				$log->tgl = date("Y-m-d",time());
				$log->save();
		Yii::app()->user->setFlash('success', 'Tender telah ditutup');
		$this->redirect(array('material/index'));
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
		$log = new Log;
		$model=$this->loadModel($idm);
		$tender=Permintaan::Model()->findByPk($idm);
		$model->pemenang=$idp;
		$model->status=6;
		$tender->actual_pemenang = date("Y-m-d H:i:s");
		$date = strtotime(date("Y-m-d H:i:s"));
		$a = strtotime("+5 day", $date);
		$model->plan_kontrak=date("Y-m-d H:i:s",$a);
		$model->save();
		$tender->save();
				$log->id_user = Yii::app()->user->id;
				$log->kegiatan = 'Menentukan pemenang tender untuk  '.$model->nama;
				$log->tgl = date("Y-m-d",time());
				$log->save();		
		Yii::app()->user->setFlash('success', 'Pemenang telah ditetapkan');
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
