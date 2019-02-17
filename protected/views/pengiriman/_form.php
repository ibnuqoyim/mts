

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
		<p style="font-size: 16px">Detail Material : </p>
		
         <table class="table table-hover table-dark" style="width:100%">
              <tr>
                <td>Kode Material</td>
                <td><?php echo $modal->kode ?></td>
              </tr>
              <tr>
                <td>Nama Material</td>
                <td><?php echo $modal->nama ?></td>
              </tr>
              
              <tr>
                <td>Vendor</td>
               <td><?php echo $modal->usera->perusahaan ?></td>
              </tr>
              <tr>
                <td>IRN</td>
                <td><?php echo $modal->irn->irn ?></td>
              </tr>
            </table> 
          
          <br>

	<p style="font-size: 16px">Input detail pengiriman untuk <?php echo "".$modal->nama; ?> : </p>
	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'tujuan'); ?>
		<?php echo $form->dropDownList(
                    $model,'tujuan',
                    array(
                            'Warehouse Pusat' => 'Warehouse Pusat',
                            'Warehouse Surabaya' => 'Warehouse Surabaya',
                            'Warehouse Site' => 'Warehouse Site',
                           
                        ), array('prompt'=>'Pilih Warehouse','class'=>'form-control'),array('size'=>60,'maxlength'=>100)); ?>	
		<?php echo $form->error($model,'tujuan'); ?>
	</div>
  <div class="form-group">
    <?php echo "Estimasi diterima Warehouse : " ?>
    <?php echo $form->dateField($modal,'plan_penerimaan',array('class'=>'form-control')); ?>
    <?php echo $form->error($modal,'plan_penerimaan'); ?>
  </div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Save', array('class'=>'btn  btn-info left ')); ?>
	</div>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->