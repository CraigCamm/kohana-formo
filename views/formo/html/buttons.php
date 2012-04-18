<?php echo $open; ?>
	<label class="control-label">
	    <?= $label ?>
	</label>
	<?php echo $message; ?>
	<div class="field controls">
        <div class="btn-group" data-toggle-name="is_private<?= $label ?>" data-toggle="buttons-radio" >
            <?php foreach ($this->get('options') as $key => $option): ?>
                <button type="button" value="<?= $key ?>" class="btn btn-primary" data-toggle="button"><?= $option ?></button>
            <?php endforeach; ?>
        </div>
        <input type="hidden" name="is_private<?= $label ?> " value="0" />
	</div>
<?php echo $close; ?>
