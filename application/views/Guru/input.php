<?php echo form_open('guru/save') ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                  <div class="table-responsive">
	  				<?php echo $judul ?>
	  				<table class="table table-bordered">
					    <thead>
						<tr>
							<td style="text-align: center;">NIP</td>
							<td><input type="text" name="nip" id="nip"></td>
						</tr>
						<tr>
							<td style="text-align: center;">Nama</td>
							<td><input type="text" name="nama" id="nama"></td>
						</tr>
						<tr>
							<td style="text-align: center;">Email</td>
							<td><input type="text" name="email" id="email"></td>
						</tr>
						<tr>
							<td style="text-align: center;" >Jenis Kelamin</td>
							<td><input type="radio" value="P" name="jk" id="jk">Perepmuan <input type="radio" value="L" name="jk" id="jk"> Laki-laki</td>	
						</tr>
						<tr>
							<td><button class="mdc-button mdc-button--raised filled-button--success">Simpan</button><button class="mdc-button mdc-button--raised filled-button--danger" style="margin-left: 10px">batal</button>
							</td>
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