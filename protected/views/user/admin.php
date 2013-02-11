<?php
/* @var $this UserController */
/* @var $model User */


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('user-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div style="width: 100%; height: 30px;">
       <a href="<?=Yii::app()->getBaseUrl(true)?>/index.php/user/create" class="greenbutton" style="float: left;">Tambah User</a>
</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_user',
		'role',
		'satuan_kerja',
		'username',
		'password',
		'nama',
		/*
		'jabatan',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
