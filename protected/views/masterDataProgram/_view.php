<?php
/* @var $this MasterDataProgramController */
/* @var $data MasterDataProgram */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_program')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_program), array('view', 'id'=>$data->id_program)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_master_data')); ?>:</b>
	<?php echo CHtml::encode($data->id_master_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_satuan_kerja')); ?>:</b>
	<?php echo CHtml::encode($data->id_satuan_kerja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_program')); ?>:</b>
	<?php echo CHtml::encode($data->kode_program); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('program')); ?>:</b>
	<?php echo CHtml::encode($data->program); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun_anggaran')); ?>:</b>
	<?php echo CHtml::encode($data->tahun_anggaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun_aktif')); ?>:</b>
	<?php echo CHtml::encode($data->tahun_aktif); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_referensi')); ?>:</b>
	<?php echo CHtml::encode($data->id_referensi); ?>
	<br />

	*/ ?>

</div>