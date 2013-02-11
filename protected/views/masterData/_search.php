<?php
/* @var $this MasterDataController */
/* @var $model MasterData */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_master_data'); ?>
		<?php echo $form->textField($model,'id_master_data'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahun_awal'); ?>
		<?php echo $form->textField($model,'tahun_awal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahun_akhir'); ?>
		<?php echo $form->textField($model,'tahun_akhir'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->