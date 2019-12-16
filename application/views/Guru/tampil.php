<?php echo anchor('guru/input','Tambah Baru'); ?>
<table border="1">
	<tr>
		<td>Nip</td>
		<td>Nama</td>
		<td>Email</td>
		<td>Jenis Kelamin</td>
		<td colspan="2" style="text-align: center;">Aksi</td>
	</tr>
	<?php foreach ($tampil as $key => $value) { ?>
	<tr>
		<td><?php echo $value->nip ?></td>
		<td><?php echo $value->nama ?></td>
		<td><?php echo $value->email ?></td>
		<td><?php echo $value->jk ?></td>
		<td><?php echo anchor('guru/delete/'.$value->nip,'Hapus'); ?></td>
		<td><?php echo anchor('guru/edit/'.$value->nip,'Edit'); ?></td>
	</tr>
	<?php } ?>
</table>