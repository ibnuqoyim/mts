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
		<?php foreach ($repair as $res)
            { ?>
         <table class="table table-hover table-dark" style="width:100%">
              <tr>
                <td>Nama Material</td>
                <td><?php echo $res->materiala->nama ?></td>
              </tr>
              <tr>
                <td>Klien</td>
                 <td><?php echo $res->materiala->clienta->nama ?></td>
              </tr>
              <tr>
                <td>Vendor</td>
               <td><?php echo $res->materiala->usera->nama ?></td>
              </tr>
              <tr>
                <td>Berita Acara Inspeksi</td>
                <td><a href="/mts/dokumen/hasilrepair/<?php echo $res->file ?>"><?php echo $res->file ?></a></td>
              </tr>
            </table> 
          <?php  }?>
          <br>

	<p style="font-size: 16px">Input IRN untuk <?php echo "".$modal->nama; ?> : </p>

	<div class="form-group">
		
		<?php echo $form->textField($model,'irn',array('class'=>'form-control'),array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'irn'); ?>
	</div>



	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Save', array('class'=>'btn  btn-info left ')); ?>
	</div>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->