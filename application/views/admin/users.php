<div class="page-header">
	<h3>Data  Users</h3>
</div>


<a href="<?php echo base_url().'Users/user_add'; ?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> user  Baru</a>
<br/><br/>
<div class="table-responsive">
<table class="table table-bordered table-striped table-hover" id="table-datatable">
	<thead>
		<tr>
			<th>No</th>
			<th>nama pogrammer</th>
			
			
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$no = 1;
		foreach($users as $u){ 
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $u->name_user ?></td>
				
				

				<td> 
					<a class="btn btn-warning btn-sm" href="<?php echo base_url().'Users/users_edit/'.$u->id_user; ?>"><span class="glyphicon glyphicon-plus"></span> lihat skil</a>
					
				</td>
			</tr>
			<?php 
		}
		?>
	</tbody>
</table>
</div>