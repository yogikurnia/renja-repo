<?php
/* @var $this SasaranProgramController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sasaran Programs',
);

$this->menu=array(
	array('label'=>'Create SasaranProgram', 'url'=>array('create')),
	array('label'=>'Manage SasaranProgram', 'url'=>array('admin')),
);
?>

<h1>Sasaran Programs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
