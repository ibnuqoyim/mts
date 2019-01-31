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
            <?php echo $form->labelEx($model,'kategori'); ?>
            <?php echo $form->dropDownList(
                    $model,'kategori',
                    array(
                            '1' => 'Material Civil',
                            '2' => 'Pipping & Flange',
                            '3' => 'Instrument & Electrical',
                            '4' => 'Material Lainnya',
                            
                        ),
                    array('prompt'=>'Pilih kategori','class'=>'form-control'),array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'kategori'); ?>
        </div>
        <div class="form-group">
            <?php echo "Kode Material"; ?>
            <?php echo $form->textField($model,'kode',array('class'=>'form-control'),array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'kode'); ?>
        </div>
        <div class="form-group">
            <?php echo "Nama Material"; ?>
			<?php echo $form->textField($model,'nama',array('class'=>'form-control'),array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'nama'); ?>
        </div>
        
	<div id="dok1" class="form-group">
            <?php echo "Upload Dokumen MTO : "; if($model->dokenga->file_mto != null){echo '<a href="/mts/dokumen/dokeng/MTO-'.$model->dokenga->file_mto.'">'.$model->dokenga->file_mto.'</a>';} ?>
			<?php echo $form->fileField($dokeng,'file_mto'); ?>
			<?php echo $form->error($dokeng,'file_mto'); ?>
    </div>
    <div class="form-group">
            <?php echo "Upload Dokumen Drawing : "; if($model->dokenga->file_dwg != null){echo '<a href="/mts/dokumen/dokeng/MTO-'.$model->dokenga->file_dwg.'">'.$model->dokenga->file_dwg.'</a>';}  ?>
            <?php echo $form->fileField($dokeng,'file_dwg'); ?>
            <?php echo $form->error($dokeng,'file_dwg'); ?>
    </div>
    <div class="form-group">
            <?php echo "Upload Dokumen Spesifikasi : " ; if($model->dokenga->file_spec != null){echo '<a href="/mts/dokumen/dokeng/MTO-'.$model->dokenga->file_spec.'">'.$model->dokenga->file_spec.'</a>';} ?>
            <?php echo $form->fileField($dokeng,'file_spec'); ?>
            <?php echo $form->error($dokeng,'file_spec'); ?>
    </div>
    <div class="form-group">
            <?php echo "Upload Dokumen Datasheet : " ; if($model->dokenga->file_datasheet != null){echo '<a href="/mts/dokumen/dokeng/MTO-'.$model->dokenga->file_datasheet.'">'.$model->dokenga->file_datasheet.'</a>';} ?>
            <?php echo $form->fileField($dokeng,'file_datasheet'); ?>
            <?php echo $form->error($dokeng,'file_datasheet'); ?>
    </div>
    <?php /*echo CHtml::dropDownList('kategori','', array(1=>'USA',2=>'France',3=>'Japan'),
            array(
            'ajax' => array(
            'type'=>'POST', //request type
            'url'=>CController::createUrl('material/dynamicform'), //url to call.
            //Style: CController::createUrl('currentController/methodToCall')
            'update'=>'#dinamik', //selector to update
            //'data'=>'js:javascript statement' 
            //leave out the data key to pass all form values through
            ))); */
             ?>
            <div id="dinamik"> </div>
    </div>
    <div class="form-group col-lg-12">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Ajukan' : 'Save', array('class'=>'btn btn-lg btn-primary left ')); ?>
    </div>

<?php $this->endWidget(); ?>
