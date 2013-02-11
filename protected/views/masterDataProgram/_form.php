<?php
/* @var $this MasterDataProgramController */
/* @var $model MasterDataProgram */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'master-data-program-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_master_data'); ?>
		<?php echo $form->textField($model,'id_master_data'); ?>
		<?php echo $form->error($model,'id_master_data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_satuan_kerja'); ?>
		<?php echo $form->textField($model,'id_satuan_kerja'); ?>
		<?php echo $form->error($model,'id_satuan_kerja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_program'); ?>
		<?php echo $form->textField($model,'kode_program'); ?>
		<?php echo $form->error($model,'kode_program'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'program'); ?>
		<?php echo $form->textField($model,'program',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'program'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tahun_anggaran'); ?>
		<?php echo $form->textField($model,'tahun_anggaran'); ?>
		<?php echo $form->error($model,'tahun_anggaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tahun_aktif'); ?>
		<?php echo $form->textField($model,'tahun_aktif'); ?>
		<?php echo $form->error($model,'tahun_aktif'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_referensi'); ?>
		<?php echo $form->textField($model,'id_referensi'); ?>
		<?php echo $form->error($model,'id_referensi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->