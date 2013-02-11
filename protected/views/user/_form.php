<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
       
       <table width="95%">
              
              <tr>
                     <td width="125px">
                            <b><?php echo $form->labelEx($model,'username'); ?></b>
                     </td>
                     <td>
                            <?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>20, 'class' => 'sedang')); ?>
                            <?php echo $form->error($model,'username'); ?>
                     </td>
              </tr>
              
              <tr>
                     <td width="125px">
                            <b><?php echo $form->labelEx($model,'password'); ?></b>
                     </td>
                     <td>
                            <?php echo $form->passwordField($model,'password',array('size'=>20,'maxlength'=>20, 'class' => 'sedang')); ?>
                            <?php echo $form->error($model,'password'); ?>
                     </td>
              </tr>
              
              <tr>
                     <td width="125px">
                            <b><?php echo $form->labelEx($model,'nama'); ?></b>
                     </td>
                     <td>
                            <?php echo $form->textField($model,'nama',array('size'=>20,'maxlength'=>20, 'class' => 'sedang')); ?>
                            <?php echo $form->error($model,'nama'); ?>
                     </td>
              </tr>
              
              <tr>
                     <td width="125px">
                            <b><?php echo $form->labelEx($model,'role'); ?></b>
                     </td>
                     <td>
                            <select class="e1" data-placeholder="choose role..." name="User[role]" style="width: 200px;">
                                   <option value=""></option>
                                   <?php $this->widget('selectRoleWidget', array('choose' => $model)) ?>
                            </select>
                            <?php echo $form->error($model,'role'); ?>
                     </td>
              </tr>
              
              <tr>
                     <td width="125px">
                            <b><?php echo $form->labelEx($model,'satuan_kerja'); ?></b>
                     </td>
                     <td>
                            <select class="e1" data-placeholder="choose satker..." name="User[satuan_kerja]" style="width: 200px;">
                                   <option value=""></option>
                                   <?php $this->widget('selectSatkerWidget', array('choose' => $model)) ?>
                            </select>
                            <?php echo $form->error($model,'satuan_kerja'); ?>
                     </td>
              </tr>
              
              
              <tr>
                     <td width="125px">
                            <b><?php echo $form->labelEx($model,'jabatan'); ?></b>
                     </td>
                     <td>
                            <?php echo $form->textField($model,'jabatan',array('size'=>20,'maxlength'=>20, 'class' => 'sedang')); ?>
                            <?php echo $form->error($model,'jabatan'); ?>
                     </td>
              </tr>
              
              <tr>
                     <td>
                     </td>
                     <td>
                            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
			</td>
              </tr>
		</table>

	

	
	

	<div class="row buttons">
		
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<h3></h3>