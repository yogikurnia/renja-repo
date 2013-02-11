<?php
       $basemaster = Yii::app()->getBaseUrl(true).'/index.php/masterdata';
?>
<table style="width: 100%" class="data table table-striped table-hover">
       <tr>
              <th width="30px">No</th>
              <th>Tahun Mulai</th>
              <th>Tahun Berakhir</th>
              <th width="15%">Aksi</th>

       </tr>
       <?php $cur_master = 1 ?>
       <?php foreach ($masters as $master): ?>
              <tr>
                     <td><?= $cur_master ?></td>
                     <td class="tahun_awal" data-pk="<?= $master->id_master_data ?>" data-url="<?=$basemaster?>/updateField" data-name="tahun_awal" data-original-title="Masukkan Tahun Awal"><?= $master->tahun_awal ?></td>
<!--                     <td data-type="select" data-source="{'2001', '2002'}" class="tahun_awal" data-pk="<?= $master->id_master_data ?>" data-url="<?=$basemaster?>/updateField" data-name="tahun_awal" data-original-title="Masukkan Tahun Awal"><?= $master->tahun_awal ?></td>-->
                     <td class="tahun_akhir" data-pk="<?= $master->id_master_data ?>" data-url="<?=$basemaster?>/updateField" data-name="tahun_akhir" data-original-title="Masukkan Tahun Akhir"><?= $master->tahun_akhir ?></td>
                     <td><a href="<?= Yii::app()->getBaseUrl(true) ?>/index.php/masterdataprogram/index/masterid/<?=$master->id_master_data?>" class="btn btn-success">Buka</a><a href="<?= Yii::app()->getBaseUrl(true) ?>/index.php/masterdata/remove/id/<?=$master->id_master_data?>" class="btn btn-danger hapus-master">Hapus</a></td>
              </tr>
              <?php $cur_master++ ?>
       <?php endforeach ?>

</table>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/masterdata2.js"></script>
