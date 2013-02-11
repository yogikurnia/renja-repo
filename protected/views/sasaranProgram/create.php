<?php
/* @var $this SasaranProgramController */
/* @var $model SasaranProgram */

$this->breadcrumbs=array(
	'Sasaran Programs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SasaranProgram', 'url'=>array('index')),
	array('label'=>'Manage SasaranProgram', 'url'=>array('admin')),
);
?>

<h1>Create SasaranProgram</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>