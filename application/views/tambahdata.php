<form action="<?= base_url('Myadmin/f_tambahdata');?>" method="post">
	<section>
		<pre>
	npm: 		<input type="text" name="npm" maxlength="12" placeholder="Nomor Induk Mahasiswa">

	nama: 		<input type="text" name="nama" maxlength="40" placeholder="Nama Lengkap">

	semester: 	<select name="semester">
					<option value="1">Semester 1</option>
					<option value="2">Semester 2</option>				
					<option value="3">Semester 3</option>
					<option value="4">Semester 4</option>
					<option value="5">Semester 5</option>
					<option value="6">Semester 6</option>
					<option value="7">Semester 7</option>
					<option value="8">Semester 8</option>
					<option value="9">Semester 9</option>
					<option value="10">Semester 10</option>
				</select>

			<button type="submit">Submit</button><button type="#">Cancel</button>			
		</pre>
	</section>
</form>

<table style="margin:20px auto;" border="1">
	<tbody>
		<tr>
			<td>No</td>
			<td>Npm</td>
			<td>Nama</td>
			<td>Semester</td>
			<td>Aksi</td>
		</tr>
		<?php		
		$no = 1;
		foreach($user as $u){
		?>
		<tr>
			<td><?= $no++ ?></td>
			<td><?= $u->npm ?></td>
			<td><?= $u->nama ?></td>
			<td><?= $u->semester ?></td>
			<td>
				<?= anchor('Myadmin/editdata/'.$u->id,'Edit');?>
				<?= anchor('Myadmin/hapusdata/'.$u->id,'Hapus');?>
			</td>
		</tr>
		<?php	
			}			
		?>
	</tbody>
</table>