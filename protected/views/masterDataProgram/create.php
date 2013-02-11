<?php
/* @var $this MasterDataProgramController */
/* @var $model MasterDataProgram */

$this->breadcrumbs=array(
	'Master Data Programs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MasterDataProgram', 'url'=>array('index')),
	array('label'=>'Manage MasterDataProgram', 'url'=>array('admin')),
);
?>

<h1>Create MasterDataProgram</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>