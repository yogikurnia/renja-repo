<?php
/* @var $this RoleController */
/* @var $dataProvider CActiveDataProvider */


?>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/role.js" type="text/javascript"></script>

<h3>Tabel</h3>

<table style="width: 100%" class="data table table-striped table-hover">
	<tr>
		<th width="30px">No</th>
		<th>Role</th>
		<th>User</th>
		<th>Salt</th>
		<th>Password</th>
		
	</tr>
	<?php $cur_role=1?>
	<?php foreach($roles as $role):?>
              <?php $users = User::model()->findAllByAttributes(array('role' => $role->id_role))?>
	<tr <?php if($cur_role % 2 == 0) echo 'class="tr-alt rolemenu"'; else echo 'class="data rolemenu"'?> data-toggle="rolemenu" data-target="#context-menu">
		<td class="data" <?php if(count($users) != 0) echo 'rowspan="'.count($users).'"';  ?> width="30px"><?=$cur_role?></td>
		<td class="data" <?php if(count($users) != 0) echo 'rowspan="'.count($users).'"';  ?> width="30px"><?=$role->role_name?></td>
		<?php $cur_user=0?>
		<?php foreach($users as $user):?>
			<!-- TR nya ada sebanyak n -->
			
		<!--  ini kondisi populate user pertama -->
		<?php if($cur_user == 0):?>
		
		<?php else:?>
	<tr <?php if($cur_role % 2 == 0) echo 'class="tr-alt"'; else echo 'class="data"' ?>>		
		<?php endif?>	
		<td class="username1 data">
			<?=$user->username?> 
		</td>
		<td class="salt data">
			<?=$user->salt?>
		</td>
		<td class="data">
			<?=$user->password?>
		</td>
                    
	</tr>
		
		
			
              <?php $cur_user++?>   
		<?php endforeach?>
	
	<?php $cur_role++?>
	<?php endforeach;?>
	
</table>

<!-- Your custom menu with dropdown-menu as default styling -->
	      <div id="context-menu">
	      	<ul class="dropdown-menu" role="menu">
	      		<li><a tabindex="-1" href="#">Action</a></li>
	            <li><a tabindex="-1" href="#">Another action</a></li>
	            <li><a tabindex="-1" href="#">Something else here</a></li>
	            <li class="divider"></li>
	            <li><a tabindex="-1" href="#">Separated link</a></li>
	      	</ul>
	      </div>
