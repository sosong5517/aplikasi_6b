<div class="page-header">
	<h3>User  Baru</h3>
</div>

<form action="<?php echo base_url().'Users/users_add_act' ?>" method="post"> 
	<div class="form-group">
		<label>nama User  </label>
		<input type="text" name="name_user" class="form-control">
		<?php echo form_error('name_user'); ?>
	</div>
	
	<div class="form-group">
		<input type="submit" value="Simpan" class="btn btn-primary">
	</div>
</div>
</form>