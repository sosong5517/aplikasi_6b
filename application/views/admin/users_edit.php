<div class="page-header">
	<h3>data skil</h3>
</div>


<?php foreach($users as $u){ ?>

	<div class="form-group">
		<label>nama user</label>
		<input type="hidden" name="user_id" value="<?php echo $u->id_user; ?>">
		<input class="form-control" type="Disabled" name="name_user" value="<?php echo $u->name_user; ?>">
	</div>
	<?php }?>
<div class="table-responsive">
<table class="table table-bordered table-striped table-hover" id="table-datatable">
	<thead>
		<tr>
			<th>No</th>
			<th>nama skil</th>
			
			
			
		</tr>
	</thead>
	<tbody>
		<?php 
		$no = 1;
		foreach($skil as $s){ 
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $s->name_skil ?></td>
				
			
			</tr>
			<?php 
		}
		?>
		<tr>
		<td> 
			<?php 
		foreach($users as $u){ 
			?>
					<a class="btn btn-warning btn-sm" href="<?php echo base_url().'Users/tambah_skil/'.$u->id_user; ?>"><span class="glyphicon glyphicon-plus"></span> tambah</a>
					<?php }?>
				</td>
				</tr>
	</tbody>
</table>
</div>