<?php
/* @var $this SasaranProgramController */
/* @var $model SasaranProgram */

$this->breadcrumbs=array(
	'Sasaran Programs'=>array('index'),
	$model->id_sasaran_program,
);

$this->menu=array(
	array('label'=>'List SasaranProgram', 'url'=>array('index')),
	array('label'=>'Create SasaranProgram', 'url'=>array('create')),
	array('label'=>'Update SasaranProgram', 'url'=>array('update', 'id'=>$model->id_sasaran_program)),
	array('label'=>'Delete SasaranProgram', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_sasaran_program),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SasaranProgram', 'url'=>array('admin')),
);
?>

<h1>View SasaranProgram #<?php echo $model->id_sasaran_program; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_sasaran_program',
		'id_program',
		'sasaran_program',
	),
)); ?>
