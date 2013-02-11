<?php
       $basemaster = Yii::app()->getBaseUrl(true).'/index.php/masterdataprogram';
?>
<table style="width: 100%" class="data table">
       <tr>
              <th width="30px">No</th>
              <th>Kode</th>
              <th>Program</th>
              <th>Sasaran Program</th>
              <th>Indikator Kinerja Utama</th>
              <th>Unit Penanggung Jawab</th>

       </tr>
       <?php $cur_master = 1 ?>
       <?php foreach ($masters as $master): ?>
              <?php $sasaran_program = SasaranProgram::model()->findAllByAttributes(array('id_program' => $master->id_program));?>
              <?php
                     $rowspan = 0;
                     foreach($sasaran_program as $sasp)
                     {
                            $ikup = IkuProgram::model()->findAllByAttributes(array('id_sasaran_program' => $sasp->id_sasaran_program));
                            $rowspan += count($ikup);
                     }
              ?>
       
              <tr <?php if($cur_master % 2 == 0) echo 'class="tr-alt"'; else echo 'class="data"'?>>
                     <td  class="data" rowspan="<?=$rowspan?>"><?= $cur_master ?></td>
                     <td class="data kode_program" rowspan="<?=$rowspan?>" data-context-menu="#tambah-sasaran" kodeprog="123">
                            <?= $master->kode_program?>
                     </td>
                     <td  class="data program" rowspan="<?=$rowspan?>">       
                         <?= $master->program?>   
                     </td>
                     <?php $cur_sasaran=0?>
                     <?php foreach($sasaran_program as $sasaran):?>
                            <?php $iku_program = IkuProgram::model()->findAllByAttributes(array('id_sasaran_program' => $sasaran->id_sasaran_program));?>
                            <?php if($cur_sasaran == 0):?>
		
                            <?php else:?>
                     
              <tr <?php if($cur_master % 2 == 0) echo 'class="tr-alt"'; else echo 'class="data"' ?>>		
                            <?php endif?>	
                     <td <?php if(count($iku_program) != 0) echo 'rowspan="'.count($iku_program).'"';  ?> class="data sasaran_program">
                            <?=$sasaran->sasaran_program?> 
                     </td>
                            
                            <?php $cur_iku=0?>
                            <?php foreach($iku_program as $iku):?>
                                   <?php if($cur_iku == 0):?>
                                   
                                   <?php else:?>
                     
              <tr <?php if($cur_master % 2 == 0) echo 'class="tr-alt"'; else echo 'class="data"' ?>>		
                                   <?php endif?>
                     <td class="data iku">
                            <?=$iku->iku_program?> 
                     </td>
                                   <?php if($cur_sasaran == 0 && $cur_iku == 0):?>
                                          <?php $satker = SatuanKerja::model()->findByPk($master->id_satuan_kerja)?>
                                          <td  class="data unit" rowspan="<?=$rowspan?>"><?=$satker->satuan_kerja?></td>
                                   <?php endif?>
                     
                            <?php $cur_iku++?>
                            <?php endforeach?>
                     
              </tr>
                     <?php $cur_sasaran++?>
                     <?php endforeach?>        
                     
              
              <?php $cur_master++ ?>
              
       <?php endforeach ?>
              
</table>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/masterdataProgram2.js"></script>
