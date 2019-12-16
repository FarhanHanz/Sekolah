<?php echo form_open('guru/update') ?>
<?php echo $judul ?>
<table width="325" border="1">
	<tr>
		<td>NIP</td>
		<td><input type="text" name="nip" value="<?php echo $edit['nip']?>" name="nip"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" value="<?php echo $edit['nama']?>" name="nama"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="email" value="<?php echo $edit['email']?>" name="email"></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td><input type="radio" value="P" name="jk" id="jk"> Perepmuan<input type="radio" value="L" name="jk" id="jk"> Laki-laki</td>	
	</tr>
	<tr>
		<td><input type="submit" name="button" id="button" value="Simpan"></td>
		<td><input type="reset" name="button2" id="button2" value="Batal"></td>
	</tr>
</table>
<?php echo form_close() ?>