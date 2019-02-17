<?php
/* @var $this HasilinspeksiWHController */
/* @var $model HasilinspeksiWH */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hasilinspeksi-wh-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	

	<?php echo $form->errorSummary($model); ?>

	<div class="col-lg-6">
		<p style="font-size: 16px">Detail Material : </p>
		<?php foreach ($irn as $res)
            { ?>
         <table class="table table-hover table-dark" style="width:100%">
              <tr>
                <td>Kode Material</td>
                <td><?php echo $modal->kode ?></td>
              </tr>
              <tr>
                <td>Nama Material</td>
                <td><?php echo $res->materiala->nama ?></td>
              </tr>
              
              <tr>
                <td>Vendor</td>
               <td><?php echo $res->materiala->usera->perusahaan ?></td>
              </tr>
              <tr>
                <td>IRN</td>
                <td><?php echo $res->irn ?></td>
              </tr>
            </table> 
          <?php  }?>
          <br>
	<p style="font-size: 16px">Silahkan Upload Berita Acara Inspeksi : </p>

	<div class="form-group">
            <?php echo " " ?>
			<?php echo $form->fileField($model,'file_hasil_inspeksi'); ?>
			<?php echo $form->error($model,'file_hasil_inspeksi'); ?>
    </div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'hasil_inspeksi'); ?>
		<?php echo $form->textArea($model,'hasil_inspeksi',array('class'=>'form-control'),array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'hasil_inspeksi'); ?>
	</div>
	<div class="form-group">
		<?php echo $form->labelEx($model,'lokasi'); ?>
		<?php echo $form->textArea($model,'lokasi',array('class'=>'form-control'),array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'lokasi'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($modal,'stok'); ?>
		<?php echo $form->textField($modal,'stok',array('class'=>'form-control'),array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($modal,'stok'); ?>
	</div>



	<div class="form-group buttons">
		<?php echo '<br>'.CHtml::submitButton($model->isNewRecord ? 'Upload' : 'Save', array('class'=>'btn  btn-info left ')); ?>
	</div>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->