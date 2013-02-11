<?php
/* @var $this MasterDataProgramController */
/* @var $model MasterDataProgram */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_program'); ?>
		<?php echo $form->textField($model,'id_program'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_master_data'); ?>
		<?php echo $form->textField($model,'id_master_data'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_satuan_kerja'); ?>
		<?php echo $form->textField($model,'id_satuan_kerja'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kode_program'); ?>
		<?php echo $form->textField($model,'kode_program'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'program'); ?>
		<?php echo $form->textField($model,'program',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahun_anggaran'); ?>
		<?php echo $form->textField($model,'tahun_anggaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahun_aktif'); ?>
		<?php echo $form->textField($model,'tahun_aktif'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_referensi'); ?>
		<?php echo $form->textField($model,'id_referensi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->