<?php
/* @var $this MasterDataController */
/* @var $model MasterData */

$this->breadcrumbs=array(
	'Master Datas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MasterData', 'url'=>array('index')),
	array('label'=>'Manage MasterData', 'url'=>array('admin')),
);
?>

<h1>Create MasterData</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>