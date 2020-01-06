<a href="<?= base_url('Myadmin/tambahdata'); ?>">Tambah Data</a>

<div class="table-responsive">
	<table class="table table-hover" id="tableData">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Semester</th>
			</tr>
		</thead>
		<tbody>
			<?php for ($i=1; $i <= 50; $i++){
			?>
			<tr>
				<td><?php echo $i; ?></td>
				<td>Siapa</td>
				<td>1</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>