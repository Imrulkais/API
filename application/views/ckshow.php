<?php  echo form_open('CkController/ckeditor');
echo $this->ckeditor->editor('description', @$default_value);?>
<input type="submit" name="submit" value="Save" id="save" class="save" />
<?php echo form_close(); ?>
