<?php
/* @var $this MasterDataProgramController */
/* @var $model MasterDataProgram */

$this->breadcrumbs=array(
	'Master Data Programs'=>array('index'),
	$model->id_program,
);

$this->menu=array(
	array('label'=>'List MasterDataProgram', 'url'=>array('index')),
	array('label'=>'Create MasterDataProgram', 'url'=>array('create')),
	array('label'=>'Update MasterDataProgram', 'url'=>array('update', 'id'=>$model->id_program)),
	array('label'=>'Delete MasterDataProgram', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_program),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MasterDataProgram', 'url'=>array('admin')),
);
?>

<h1>View MasterDataProgram #<?php echo $model->id_program; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_program',
		'id_master_data',
		'id_satuan_kerja',
		'kode_program',
		'program',
		'tahun_anggaran',
		'tahun_aktif',
		'id_referensi',
	),
)); ?>
