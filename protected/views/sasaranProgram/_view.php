<?php
/* @var $this SasaranProgramController */
/* @var $data SasaranProgram */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sasaran_program')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_sasaran_program), array('view', 'id'=>$data->id_sasaran_program)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_program')); ?>:</b>
	<?php echo CHtml::encode($data->id_program); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sasaran_program')); ?>:</b>
	<?php echo CHtml::encode($data->sasaran_program); ?>
	<br />


</div>