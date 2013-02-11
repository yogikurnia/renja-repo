<?php
/* @var $this SasaranProgramController */
/* @var $model SasaranProgram */

$this->breadcrumbs=array(
	'Sasaran Programs'=>array('index'),
	$model->id_sasaran_program=>array('view','id'=>$model->id_sasaran_program),
	'Update',
);

$this->menu=array(
	array('label'=>'List SasaranProgram', 'url'=>array('index')),
	array('label'=>'Create SasaranProgram', 'url'=>array('create')),
	array('label'=>'View SasaranProgram', 'url'=>array('view', 'id'=>$model->id_sasaran_program)),
	array('label'=>'Manage SasaranProgram', 'url'=>array('admin')),
);
?>

<h1>Update SasaranProgram <?php echo $model->id_sasaran_program; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>