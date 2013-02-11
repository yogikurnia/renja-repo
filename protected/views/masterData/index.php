<?php
/* @var $this RoleController */
/* @var $dataProvider CActiveDataProvider */
?>

<h3>Master Data <a style="margin-left: 15px;" href="<?=Yii::app()->getBaseUrl(true)?>/index.php/masterdata/create" id="tambah-master" class="btn btn-primary">tambah master data</a></h3> 

<div class="table-wrap">
       
       <?php echo $this->renderPartial('//masterData/masterDataAjax', array('masters' => $masters), false, true); ?>
</div>

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
