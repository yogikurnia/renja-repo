<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';

?>


<div id="loginForm">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

       <div class="headLoginForm">
              Login
       </div>
       <div class="fieldLogin">
	<p class="note">Fields with <span class="required">*</span> are required.</p>

       
	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		
              <input type="text" class="login" class="login" name="LoginForm[username]"/>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<input type="password" class="login" name="LoginForm[password]"/>
		<?php echo $form->error($model,'password'); ?>
		<p class="hint">
			Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
		</p>
	</div>

	<input type="submit" class="button" value="Login">
       </div>

<?php $this->endWidget(); ?>
</div><!-- form -->
