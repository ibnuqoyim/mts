

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
		<p style="font-size: 16px">Detail Pengiriman : </p>
		
         <table class="table table-hover table-dark" style="width:100%">
              <tr>
                <td>Kode Material</td>
                <td><?php echo $modal->proyek ?></td>
              </tr>
              <tr>
                <td>Nama Material</td>
                <td><?php echo $modal->nama ?></td>
              </tr>
              
              <tr>
                <td>Vendor</td>
               <td><?php echo $modal->usera->nama ?></td>
              </tr>
              <tr>
                <td>Tanggal Kirim</td>
                <td><?php echo $modal->pengiriman->tgl_create ?></td>
              </tr>
              <tr>
                <td>Warehouse tujuan</td>
                <td><?php echo $modal->pengiriman->tujuan ?></td>
              </tr>
              <tr>
                <td>PIC</td>
                <td><?php echo $modal->pengiriman->pica->nama ?></td>
              </tr>
            </table> 
          
          <br>
	<p style="font-size: 16px">Klik Konfirm jika Material telah sampai di Warehouse! </p>


	<?php echo $form->errorSummary($modal); ?>

	<div class="form-group">
		
		<?php echo $form->hiddenField($modal,'status',array('class'=>'form-control','readonly'=>true,'value'=>13),array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($modal,'status'); ?>
	</div>


	<div class="form-group buttons">
		<?php echo CHtml::submitButton($modal->isNewRecord ? 'Create' : 'Konfirm', array('class'=>'btn  btn-success left ')); ?>
	</div>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->