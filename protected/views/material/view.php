        <header>
            <div class="info">
                <div class="container">
                    <div class="col-lg-4 left">
                        <a class="page"><span class="glyphicon glyphicon-user gold" aria-hidden="true"></span> View Material  <?php $model->nama ?></a>
                    </div>
                    <div class="col-lg-5 right alamat">
                        <?php
                            if(Yii::app()->user->kodeAsrama != NULL){
                        ?>
                                <p class="head"><?php echo CHtml::link(Yii::app()->user->nama .' ('.Yii::app()->user->role.' '.Yii::app()->user->asrama.')', array('/user/update','id'=>Yii::app()->user->id), array('class'=>'gold')); ?></p>
                        <?php
                            }  else {
                        ?>
                                <p class="head"><?php echo CHtml::link(Yii::app()->user->nama .' ('.Yii::app()->user->role.')', array('/user/update','id'=>Yii::app()->user->id), array('class'=>'gold')); ?></p>
                        <?php        
                            }
                        ?>
                    </div>
                    <div class="clear"></div>
                </div>
            </div> 
        </header>

        <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	'enableAjaxValidation'=>false,
  'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

        <section class="container">
		     <div class="col-lg-6">
		        <div class="form-group">
		            <?php echo $form->labelEx($model,'nama'); ?>
					<?php echo $form->textField($model,'nama',array('class'=>'form-control','readonly'=>true),array('size'=>60,'maxlength'=>100)); ?>
					<?php echo $form->error($model,'nama'); ?>
		        </div>

			<div class="form-group">
		            <?php echo $form->labelEx($model,'status'); ?>
					<?php echo $model->statusa->namaStatus ?>
					<?php echo $form->error($model,'status'); ?>
		    </div>
		    <div class="form-group">
	            
		</div>
		<div class="form-group col-lg-12">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Ajukan' : 'Save', array('class'=>'btn btn-lg btn-primary left ')); ?>
    </div>
		    </div>
		    <div class="col-lg-12">
		    
			<!-- Trigger the modal with a button -->
<?php
		        if((Yii::app()->user->role ==  "Client" || Yii::app()->user->role ==  "Admin") && $model->status == 1){
     ?>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#Approve">Approve</button>
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Reject">Reject</button>
<?php } ?>
<?php if((Yii::app()->user->role ==  "Pengadaan" || Yii::app()->user->role ==  "Admin") && $model->status == 2){ ?>
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#Create_DPP">Upload DPP</button>
<?php } ?>
<?php if((Yii::app()->user->role ==  "Vendor" || Yii::app()->user->role ==  "Admin") && $model->status == 4){ ?>
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#Create_DP">Upload DP</button>
<?php } ?>
<?php if((Yii::app()->user->role ==  "Pengadaan" || Yii::app()->user->role ==  "Admin") && $model->status == 5){ ?>
<button type="button" class="btn" data-toggle="modal" data-target="#Lihat_PP">Lihat Penawaran</button>
<?php } ?>
<?php if((Yii::app()->user->role ==  "Pengadaan" || Yii::app()->user->role ==  "Admin") && $model->status == 6){ ?>
<button type="button" class="btn " data-toggle="modal" data-target="#kontrak">Upload Kontrak</button>
<?php } ?>
<?php if((Yii::app()->user->role ==  "Expedeting" || Yii::app()->user->role ==  "Admin") && $model->status == 7){ ?>
<button type="button" class="btn " data-toggle="modal" data-target="#kom">Kick of Meeting</button>
<?php } ?>
<?php if((Yii::app()->user->role ==  "Pengadaan" || Yii::app()->user->role ==  "Admin") && $model->status == 8){ ?>
<button type="button" class="btn " data-toggle="modal" data-target="#jpi">Jadwal Production & Inspenction</button>
<?php } ?>
<?php if((Yii::app()->user->role ==  "QC" || Yii::app()->user->role ==  "Admin") && $model->status == 9){ ?>
<button type="button" class="btn " data-toggle="modal" data-target="#bapi">BA Production & Inspenction</button>
<?php } ?>
<?php if((Yii::app()->user->role ==  "Vendor" || Yii::app()->user->role ==  "Admin") && $model->status == 10){ ?>
<button type="button" class="btn " data-toggle="modal" data-target="#rpl">Upload Repair PL</button>
<?php } ?>
<?php if((Yii::app()->user->role ==  "QC" || Yii::app()->user->role ==  "Admin") && $model->status == 11){ ?>
<button type="button" class="btn " data-toggle="modal" data-target="#irn">IRN</button>
<?php } ?>
<?php if((Yii::app()->user->role ==  "Traffic" || Yii::app()->user->role ==  "Admin") && $model->status == 12){ ?>
<button type="button" class="btn " data-toggle="modal" data-target="#pengiriman">Pengiriman</button>
<?php } ?>
<?php if((Yii::app()->user->role ==  "Warehouse" || Yii::app()->user->role ==  "Admin") && $model->status == 13){ ?>
<button type="button" class="btn " data-toggle="modal" data-target="#diterima">Material diterima</button>
<?php } ?>
<?php if((Yii::app()->user->role ==  "Warehouse" || Yii::app()->user->role ==  "Admin") && $model->status == 14){ ?>
<button type="button" class="btn " data-toggle="modal" data-target="#material-inpeksi">Material Inspeksi</button>
<?php } ?>
<?php if((Yii::app()->user->role ==  "Warehouse" || Yii::app()->user->role ==  "Admin") && $model->status == 15){ ?>
<button type="button" class="btn " data-toggle="modal" data-target="#complete">Complete Proses</button>
<?php } ?>
<!-- Modal -->
<div id="Approve" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Approval Document</h4>
      </div>
      <div class="modal-body">
        <p>Anda akan melakukan approval dokumen engineering untuk material ....</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="Reject" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reject Document</h4>
      </div>
      <div class="modal-body">
        <p>Anda akan melakukan Reject dokumen engineering untuk material ....</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<div id="Create_DPP" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Upload Dokumen Permintaan Penawaran</h4>
      </div>
      <div class="modal-body">
        <p>Anda akan melakukan upload dokumen Permintaan penawaran untuk material ....</p>
        <div class="form-group">
            <?php echo $form->labelEx($model,'dok_eng'); ?>
			<?php echo $form->fileField($model,'dok_eng'); ?>
			
    </div>
    <div class="form-group col-lg-12">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Ajukan' : 'Upload', array('class'=>'btn btn-lg btn-primary left ')); ?>
    </div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<div id="Create_DP" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Upload Dokumen Penawaran</h4>
      </div>
      <div class="modal-body">
        <p>Anda akan melakukan upload dokumen penawaran untuk material ....</p>
         <div class="form-group">
            <?php echo $form->labelEx($model,'dok_eng'); ?>
			<?php echo $form->fileField($model,'dok_eng'); ?>
			
    </div>
    <div class="form-group col-lg-12">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Ajukan' : 'Upload', array('class'=>'btn btn-lg btn-primary left ')); ?>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<div id="Lihat_PP" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Dokumen </h4>
      </div>
      <div class="modal-body">
        <p>Anda akan melakukan approval dokumen engineering untuk material ....</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<div id="Approve" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Approval Document</h4>
      </div>
      <div class="modal-body">
        <p>Anda akan melakukan approval dokumen engineering untuk material ....</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<div id="Approve" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Approval Document</h4>
      </div>
      <div class="modal-body">
        <p>Anda akan melakukan approval dokumen engineering untuk material ....</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
		</div>
        </section>
<?php $this->endWidget(); ?>


