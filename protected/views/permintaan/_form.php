<?php
/* @var $this PermintaanController */
/* @var $model Permintaan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'permintaan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	

	<?php echo $form->errorSummary($model); ?>


	<div class="col-lg-6">
		<table class="table table-hover table-dark" style="width:100%">
              <tr>
                <td>Nama Material</td>
                <td><?php echo $modal->nama ?></td>
              </tr>
              <tr>
                <td>Status</td>
                 <td><?php echo $modal->statusa->namaStatus ?></td>
              </tr>
              <tr>
                <td>Dokumen Engineering</td>
                <td><a href="/mts/dokumen/dokeng/<?php echo $modal->dokeng ?>"><?php echo $modal->dokeng ?></a></td>
              </tr>
            </table> 
	<div class="form-group">
            <?php echo "<b> Silahkan Upload Dokumen Permintaan Penawaran : </b>" ?>
			<?php echo $form->fileField($model,'file'); ?>
			<?php echo $form->error($model,'file'); ?>
    </div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'deskripsi'); ?>
		<?php echo $form->textArea($model,'deskripsi',array('class'=>'form-control'),array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'deskripsi'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Upload' : 'Save',array('class'=>'btn btn-success left ')); ?>
		<?php echo '&nbsp &nbsp'.CHtml::link(' <button class="btn  btn-warning ">Back</button>', array('/material/index')); ?>
	</div>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->