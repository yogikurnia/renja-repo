<?php
/* @var $this MasterDataController */
/* @var $data MasterData */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_master_data')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_master_data), array('view', 'id'=>$data->id_master_data)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun_awal')); ?>:</b>
	<?php echo CHtml::encode($data->tahun_awal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun_akhir')); ?>:</b>
	<?php echo CHtml::encode($data->tahun_akhir); ?>
	<br />


</div>