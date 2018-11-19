

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

	<div class="col-lg-6">
	<p style="font-size: 16px">Input detail pengiriman untuk <?php echo "".$modal->nama; ?> : </p>
	<?php echo $form->errorSummary($model); ?>
	<div class="form-group">
		<?php echo $form->labelEx($model,'tanggal_pengiriman'); ?>
		<?php echo $form->dateField($model,'tanggal_pengiriman',array('class'=>'form-control'),array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'tanggal_pengiriman'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'tujuan'); ?>
		<?php echo $form->dropDownList(
                    $model,'tujuan',
                    array(
                            'Warehouse Pusat' => 'Warehouse Pusat',
                            'Warehouse Surabaya' => 'Warehouse Surabaya',
                           
                        ), array('prompt'=>'Pilih Client','class'=>'form-control'),array('size'=>60,'maxlength'=>100)); ?>	
		<?php echo $form->error($model,'tujuan'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList(
                    $model,'status',
                    array(
                            'Akan dikirim' => 'Akan dikirim',
                            'Sedang Dikirim' => 'Sedang Dikirim',
                           'Telah di terima' => 'Telah di terima',
                        ), array('prompt'=>'Pilih status','class'=>'form-control'),array('size'=>60,'maxlength'=>100)); ?>	
		<?php echo $form->error($model,'status'); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'pic'); ?>
		<?php echo $form->textField($model,'pic',array('class'=>'form-control'),array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'pic'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'kontak'); ?>
		<?php echo $form->textField($model,'kontak',array('class'=>'form-control'),array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'kontak'); ?>
	</div>



	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->