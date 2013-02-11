
<?php if($models != null):?>

    <?php foreach($models as $model): ?>
    <option <?= isset($choose)? ($choose->satuan_kerja == $model->id_satuan_kerja) ? 'selected="selected"' : '' : '' ?> value="<?php echo $model->id_satuan_kerja?>"> <?=$model->satuan_kerja?> </option>
    <?php endforeach?>
<?php endif; ?>

    