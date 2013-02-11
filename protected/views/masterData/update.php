<?php
/* @var $this MasterDataController */
/* @var $model MasterData */

$this->breadcrumbs=array(
	'Master Datas'=>array('index'),
	$model->id_master_data=>array('view','id'=>$model->id_master_data),
	'Update',
);

$this->menu=array(
	array('label'=>'List MasterData', 'url'=>array('index')),
	array('label'=>'Create MasterData', 'url'=>array('create')),
	array('label'=>'View MasterData', 'url'=>array('view', 'id'=>$model->id_master_data)),
	array('label'=>'Manage MasterData', 'url'=>array('admin')),
);
?>

<h1>Update MasterData <?php echo $model->id_master_data; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>