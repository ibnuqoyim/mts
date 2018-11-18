<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>
    <div class="col-lg-12">
        
        <?php echo $form->errorSummary($model); ?>
    </div>

    <div class="col-lg-6">
        <div class="form-group">
            <?php echo 'Nama Material : '.$model->nama; ?>
            <?php echo '<br> Status : '.$model->statusa->namaStatus; ?>
            <?php 
            foreach ($respon as $res)
            {    echo '<br> Alasan Penolakan : '.$res->isi; 
                 echo '<br> File Pendukung : <a href="/mts/dokumen/responclient/tolak-'.$res->file_respon.'">download</a>';
            }?>
			
        </div>

	<div class="form-group">
            <?php echo "Update Dokumen Engineering : " ?>
			<?php echo $form->fileField($model,'dokeng'); ?>
			<?php echo $form->error($model,'dokeng'); ?>
    </div>
    </div>
    <div class="form-group col-lg-12">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Ajukan' : 'Save', array('class'=>'btn btn-lg btn-primary left ')); ?>
    </div>

<?php $this->endWidget(); ?>
