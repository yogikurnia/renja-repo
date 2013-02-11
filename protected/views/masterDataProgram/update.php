<?php
/* @var $this MasterDataProgramController */
/* @var $model MasterDataProgram */

$this->breadcrumbs=array(
	'Master Data Programs'=>array('index'),
	$model->id_program=>array('view','id'=>$model->id_program),
	'Update',
);

$this->menu=array(
	array('label'=>'List MasterDataProgram', 'url'=>array('index')),
	array('label'=>'Create MasterDataProgram', 'url'=>array('create')),
	array('label'=>'View MasterDataProgram', 'url'=>array('view', 'id'=>$model->id_program)),
	array('label'=>'Manage MasterDataProgram', 'url'=>array('admin')),
);
?>

<h1>Update MasterDataProgram <?php echo $model->id_program; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>