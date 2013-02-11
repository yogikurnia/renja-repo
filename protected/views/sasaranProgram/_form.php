<?php
/* @var $this SasaranProgramController */
/* @var $model SasaranProgram */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sasaran-program-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_program'); ?>
		<?php echo $form->textField($model,'id_program'); ?>
		<?php echo $form->error($model,'id_program'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sasaran_program'); ?>
		<?php echo $form->textField($model,'sasaran_program',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'sasaran_program'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->