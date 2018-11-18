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
            <?php echo "Nama Material"; ?>
			<?php echo $form->textField($model,'nama',array('class'=>'form-control'),array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'nama'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model,'client'); ?>
            <?php echo $form->dropDownList(
                    $model,'client',
                    array(
                            '1' => 'PLN',
                            '2' => 'Telkom',
                            
                        ),
                    array('prompt'=>'Pilih Client','class'=>'form-control'),array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'client'); ?>
        </div>
	<div class="form-group">
            <?php echo "Upload Dokumen Engineering : " ?>
			<?php echo $form->fileField($model,'dokeng'); ?>
			<?php echo $form->error($model,'dokeng'); ?>
    </div>
    </div>
    <div class="form-group col-lg-12">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Ajukan' : 'Save', array('class'=>'btn btn-lg btn-primary left ')); ?>
    </div>

<?php $this->endWidget(); ?>
