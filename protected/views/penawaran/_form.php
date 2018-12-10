<?php
/* @var $this PermintaanController */
/* @var $model Permintaan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php 
	
$form=$this->beginWidget('CActiveForm', array(
	'id'=>'permintaan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	

	<?php echo $form->errorSummary($model); ?>
<!--
	<div class="row">
		<?php //echo $form->labelEx($model,'id_user'); ?>
		<?php //echo $form->textField($model,'id_user',array('class'=>'form-control','type'=>'hidden',
//'value'=>),array('size'=>60,'maxlength'=>300)); ?>
		<?php //echo $form->error($model,'id_user'); ?>
	</div>
-->
	<div class="col-lg-6">
	
	
	<?php foreach ($permintaan as $per)
            { ?>
         <table class="table table-hover table-dark" style="width:100%">
              <tr>
                <td>Nama Material</td>
                <td><?php echo $per->materiala->nama ?></td>
              </tr>
              <tr>
                <td>Status</td>
                 <td><?php echo $per->materiala->statusa->namaStatus ?></td>
              </tr>
              <tr>
                <td>File Pendukung</td>
                <td><a href="/mts/dokumen/permintaan/<?php echo $per->file ?>"><?php echo $per->file ?></a></td>
              </tr>
            </table> 
          <?php  }?>
	<br>
	
	<div class="form-group">
            <?php echo "<h4><b>Silahkan Upload Dokumen Administrasi untuk tender : </b></h4> <br>" ?>
			<?php echo $form->fileField($model,'file_administrasi'); ?>
			<?php echo $form->error($model,'file_administrasi'); ?>
    </div>

    <div class="form-group">
            <?php echo "<h4><b>Silahkan Upload Dokumen Teknis untuk tender : </b></h4><br>" ?>
			<?php echo $form->fileField($model,'file_teknis'); ?>
			<?php echo $form->error($model,'file_teknis'); ?>
    </div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'deskripsi'); ?>
		<?php echo $form->textArea($model,'deskripsi',array('class'=>'form-control'),array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'deskripsi'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Upload' : 'Save', array('class'=>'btn btn-success left ')); ?>
	</div>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->