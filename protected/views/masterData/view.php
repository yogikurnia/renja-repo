<?php
/* @var $this MasterDataController */
/* @var $model MasterData */

$this->breadcrumbs=array(
	'Master Datas'=>array('index'),
	$model->id_master_data,
);

$this->menu=array(
	array('label'=>'List MasterData', 'url'=>array('index')),
	array('label'=>'Create MasterData', 'url'=>array('create')),
	array('label'=>'Update MasterData', 'url'=>array('update', 'id'=>$model->id_master_data)),
	array('label'=>'Delete MasterData', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_master_data),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MasterData', 'url'=>array('admin')),
);
?>

<h1>View MasterData #<?php echo $model->id_master_data; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_master_data',
		'tahun_awal',
		'tahun_akhir',
	),
)); ?>
