<?php echo form_open('guru/update') ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
                <div class="mdc-card p-0">
                  <div class="table-responsive">
                  	<?php echo $judul ?>
                  	<table class="table table-bordered">
                  		<thead>
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
							<td><input type="radio" value="P" name="jk" id="jk"> Perepmuan <input type="radio" value="L" name="jk" id="jk"> Laki-laki</td>	
						</tr>
						<tr>
							<td><button class="mdc-button mdc-button--raised filled-button--success">Simpan</button><button class="mdc-button mdc-button--raised filled-button--danger" style="margin-left: 10px">Batal</button></td>
<!-- 							<td><input type="submit" name="button" id="button" value="Simpan"></td>
							<td><input type="reset" name="button2" id="button2" value="Batal"></td> -->
						</tr>
						</thead>
					    </tbody>
						</table>
						<?php echo form_close() ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>