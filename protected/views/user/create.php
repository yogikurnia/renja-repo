<?php
/* @var $this UserController */
/* @var $model User */


?>

<h1>Create User</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<?php
       $modelAdmin=new User('search');
       $modelAdmin->unsetAttributes();
?>

<?php echo $this->renderPartial('//user/admin', array('model'=>$modelAdmin)); ?>