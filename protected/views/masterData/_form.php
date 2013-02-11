<?php
/* @var $this MasterDataController */
/* @var $model MasterData */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'master-data-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tahun_awal'); ?>
		<?php echo $form->textField($model,'tahun_awal'); ?>
		<?php echo $form->error($model,'tahun_awal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tahun_akhir'); ?>
		<?php echo $form->textField($model,'tahun_akhir'); ?>
		<?php echo $form->error($model,'tahun_akhir'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->