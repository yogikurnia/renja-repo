
<?php if($models != null):?>

    <?php foreach($models as $model): ?>
    <option <?= isset($choose)? ($choose->role == $model->id_role) ? 'selected="selected"' : '' : '' ?> value="<?php echo $model->id_role?>"> <?=$model->role_name?> </option>
    <?php endforeach?>
<?php endif; ?>

    