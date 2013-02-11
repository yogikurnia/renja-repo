<?php
/* @var $this RoleController */
/* @var $dataProvider CActiveDataProvider */
?>

<h3>Master Data Program<a style="margin-left: 15px;" href="<?=Yii::app()->getBaseUrl(true)?>/index.php/masterdataprogram/create/masterid/<?=$masterid?>" id="tambah-master" class="btn btn-primary">tambah master data program</a></h3> 

<div class="table-wrap">
       
<?php echo $this->renderPartial('//masterDataProgram/masterDataProgramAjax', array('masters' => $masters, 'masterid' => $masterid), false, true); ?>
       
</div>

<!-- Your custom menu with dropdown-menu as default styling -->
<!--<div class="context-menu tex">
       <ul class="dropdown-menu" role="menu" style="top: -100px;">
              <li><div class="tes" tabindex="-1">Tambah Sasaran Program</div></li>
              <li><a tabindex="-1" href="#">Another action</a></li>
              <li><a tabindex="-1" href="#">Something else here</a></li>
              
       </ul>
       <script>
              $('.tes').click(function(){
                     alert('tes');
              }); 
       </script>
</div>-->

<ul id="tambah-sasaran" class="context-menu dropdown-menu">
    <li><a href="<?=  ?>">Tambah Sasaran</a></li>
    <li><a href="#">Another action 1</a></li>
    <li><a href="#">Something else here 1</a></li>
    <li class="divider"></li>
    <li><a href="#">Separated link 1</a></li>
</ul>

<script>
       $('#tambah-sasaran a').click(function(){
              var $m = $(this).closest('.context-menu');    
              alert($($m.data('e').target).attr('kodeprog'))
       });
</script>
