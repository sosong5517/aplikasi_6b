<div class="page-header">
	<h3> Tambah skil</h3>
</div>



<form action="<?php echo base_url().'Users/skil_update' ?>" method="post"> 
	<?php foreach($users as $u){ ?>
	<div class="form-group">
		

		<input class="form-control" type="hidden"  value="<?php echo $u->name_user; ?>">
		<input type="hidden" name="user_id" value="<?php echo $u->id_user; ?>">
	</div>
<?php } ?>
	<div class="form-group">
		<label>nama skil</label>
		<input class="form-control" type="text" name="name_skil">
		
	</div>

	<div class="form-group">
		<input type="submit" value="Simpan" class="btn btn-primary">
	</div>	
</form>
