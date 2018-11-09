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
	           
            <frameset> <frame src="https://github.com/ibnuqoyim/mts"> </frameset>

		</div>
		<div class="form-group col-lg-12">
            
    </div>
		    </div>
		    <div class="col-lg-12">
		    <b> Dokumen Engineering </b>: <?php echo $model->dok_eng ?>
        <a href="#demo" class="glyphicon glyphicon-eye-open" data-toggle="collapse"></a>

      <div id="demo" class="collapse">
      <embed width="100%" height="600px" src="/mts/Dokumen Engineering/<?php echo $model->dok_eng ?>">
      </div>
       <div>
        <br> <br>
       </div>     
            
			<!-- Trigger the modal with a button -->
<?php
		        if((Yii::app()->user->role ==  "Client" || Yii::app()->user->role ==  "Admin") && $model->status == 1){
     ?>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#Approve">Approve</button>

<div id="Approve" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Approval Document</h4>
      </div>
      <div class="modal-body">
        <p>Anda akan melakukan approval dokumen engineering untuk <?php echo $model->nama ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Reject">Reject</button>

<div id="Reject" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reject Document</h4>
      </div>
      <div class="modal-body">
        <p>Anda akan melakukan Reject dokumen engineering untuk <?php echo $model->nama ?></p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<?php } ?>
<?php if((Yii::app()->user->role ==  "Pengadaan" || Yii::app()->user->role ==  "Admin") && $model->status == 2){ ?>
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#Create_DPP">Upload DPP</button>

<div id="Create_DPP" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Upload Dokumen Permintaan Penawaran</h4>
      </div>
      <div class="modal-body">
        <p>Anda akan melakukan upload dokumen Permintaan penawaran untuk <?php echo $model->nama ?></p>
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

<?php } ?>
<?php if((Yii::app()->user->role ==  "Vendor" || Yii::app()->user->role ==  "Admin") && $model->status == 4){ ?>
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#Create_DP">Upload DP</button>

<div id="Create_DP" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Upload Dokumen Penawaran</h4>
      </div>
      <div class="modal-body">
        <p>Anda akan melakukan upload dokumen penawaran untuk <?php echo $model->nama ?></p>
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

<?php } ?>
<?php if((Yii::app()->user->role ==  "Pengadaan" || Yii::app()->user->role ==  "Admin") && $model->status == 5){ ?>
<button type="button" class="btn" data-toggle="modal" data-target="#Lihat_PP">Lihat Penawaran</button>

<div id="Lihat_PP" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Pemilihan Dokumen Penawaran </h4>
      </div>
      <div class="modal-body">
        <p>Berikut list dokumen penawaran untuk <?php echo $model->nama ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<?php } ?>
<?php if((Yii::app()->user->role ==  "Pengadaan" || Yii::app()->user->role ==  "Admin") && $model->status == 6){ ?>
<button type="button" class="btn " data-toggle="modal" data-target="#kontrak">Upload Kontrak</button>

<div id="kontrak" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Contract Document</h4>
      </div>
      <div class="modal-body">
        <p>Silahkan upload dokumen kontrak untuk <?php echo $model->nama ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<?php } ?>
<?php if((Yii::app()->user->role ==  "Expedeting" || Yii::app()->user->role ==  "Admin") && $model->status == 7){ ?>
<button type="button" class="btn " data-toggle="modal" data-target="#kom">Kick of Meeting</button>

<div id="kom" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Rencana Kick of Meeting</h4>
      </div>
      <div class="modal-body">
        <p>Silahkan input jadwal Kick of Meeting untuk <?php echo $model->nama ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<?php } ?>
<?php if((Yii::app()->user->role ==  "Pengadaan" || Yii::app()->user->role ==  "Admin") && $model->status == 8){ ?>
<button type="button" class="btn " data-toggle="modal" data-target="#jpi">Jadwal Production & Inspenction</button>

<div id="jpi" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Approval Document</h4>
      </div>
      <div class="modal-body">
        <p>Silahkan upload rencana Production & Inspeksi untuk <?php echo $model->nama ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<?php } ?>
<?php if((Yii::app()->user->role ==  "QC" || Yii::app()->user->role ==  "Admin") && $model->status == 9){ ?>
<button type="button" class="btn " data-toggle="modal" data-target="#bapi">BA Production & Inspenction</button>

<div id="bapi" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Production & Inspenction</h4>
      </div>
      <div class="modal-body">
        <p>Silahkan Upload Berita Acara hasil Production Inspection untuk <?php echo $model->nama ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php } ?>
<?php if((Yii::app()->user->role ==  "Vendor" || Yii::app()->user->role ==  "Admin") && $model->status == 10){ ?>
<button type="button" class="btn " data-toggle="modal" data-target="#rpl">Upload Repair Punch List</button>

<div id="rpl" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Repair & Closing Punch List</h4>
      </div>
      <div class="modal-body">
        <p>Silahkan upload BA Repair Punch List untuk <?php echo $model->nama ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php } ?>
<?php if((Yii::app()->user->role ==  "QC" || Yii::app()->user->role ==  "Admin") && $model->status == 11){ ?>

<br><br><button type="button" class="btn " data-toggle="modal" data-target="#irn">Terbitkan IRN</button>

<div id="irn" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Input IRN</h4>
      </div>
      <div class="modal-body">

        <p>Anda akan melakukan input IRN untuk <?php echo $model->nama ?></p>

        <div class="form-group">
                <?php echo $form->labelEx($model,'irn'); ?>
          <?php echo $form->textField($model,'irn',array('class'=>'form-control')); ?>
          <?php echo $form->error($model,'irn'); ?>
        </div
      </div>
      <div class="modal-footer">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Ajukan' : 'Submit', array('class'=>'btn btn-lg btn-primary left ')); ?>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php } ?>
<?php if((Yii::app()->user->role ==  "Traffic" || Yii::app()->user->role ==  "Admin") && $model->status == 12){ ?>
<button type="button" class="btn " data-toggle="modal" data-target="#pengiriman">Pengiriman</button>

<div id="pengiriman" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Pengiriman Material</h4>
      </div>
      <div class="modal-body">
        <p>Masukan detail pengiriman <?php echo $model->nama ?> dari vendor</p>
      
       <div class="form-group">
                <?php echo $form->labelEx($model,'jadwal_pengambillan'); ?>
          <?php echo $form->dateField($model,'jadwal_pengambillan',array('class'=>'form-control')); ?>
          <?php echo $form->error($model,'jadwal_pengambillan'); ?>
        </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php } ?>
<?php if((Yii::app()->user->role ==  "Warehouse" || Yii::app()->user->role ==  "Admin") && $model->status == 13){ ?>
<button type="button" class="btn " data-toggle="modal" data-target="#diterima">Material diterima</button>

<div id="diterima" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Konfirmasi Penerimaan Material</h4>
      </div>
      <div class="modal-body">
        <p>Mterial .... telah diterima ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
      </div>
    </div>

  </div>
</div>
<?php } ?>
<?php if((Yii::app()->user->role ==  "Warehouse" || Yii::app()->user->role ==  "Admin") && $model->status == 14){ ?>
<button type="button" class="btn " data-toggle="modal" data-target="#materialinpeksi">Material Inspeksi</button>

<div id="materialinpeksi" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Material Inspeksi</h4>
      </div>
      <div class="modal-body">
        <p>Upload Berita Acara Materila Inspeksi di Warehouse dari <?php echo $model->nama ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php } ?>
<?php if((Yii::app()->user->role ==  "Warehouse" || Yii::app()->user->role ==  "Admin") && $model->status == 15){ ?>
<button type="button" class="btn " data-toggle="modal" data-target="#complete">Complete Proses</button>

<div id="complete" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Complete Proses</h4>
      </div>
      <div class="modal-body">
        <p>Anda akan melakukan Complete Proses untuk <?php echo $model->nama ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
      </div>
    </div>

  </div>
</div>
<?php } ?>
<!-- Modal -->







		</div>
        </section>
<?php $this->endWidget(); ?>


