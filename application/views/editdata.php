<form action="<?= base_url('Myadmin/f_editdata');?>" method="post">
	<?php foreach($user as $u){ ?>
	<pre>
	<section>		
	<input type="hidden" name="id" maxlength="12" value="<?= $u->id; ?>">
	npm: 		<input type="text" name="npm" maxlength="12" placeholder="Nomor Induk Mahasiswa" value="<?= $u->npm; ?>">

	nama: 		<input type="text" name="nama" maxlength="40" placeholder="Nama Lengkap" value="<?= $u->nama;?>">

	semester: 	<select name="semester" value="<?= $u->semester; ?>">
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
	</section>
	<pre>
	<?php } ?>
</form>