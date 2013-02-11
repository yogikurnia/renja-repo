<?php
/* @var $this UserController */
/* @var $model User */


?>

<h1>View User <?php echo $model->username; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_user',
		'role',
		'satuan_kerja',
		'username',
		'password',
		'nama',
		'jabatan',
	),
)); ?>
