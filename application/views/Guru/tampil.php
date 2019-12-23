<button class="mdc-button mdc-button--raised filled-button--success"><?php echo anchor('guru/input','Tambah Baru'); ?></button>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                  <h6 class="card-title card-padding pb-0">Table</h6>
                  <div class="table-responsive">
	  				<table class="table table-bordered">
	  					<thead>
						<tr>
							<td style="text-align: center;">Nip</td>
							<td style="text-align: center;">Nama</td>
							<td style="text-align: center;">Email</td>
							<td style="text-align: center;">Jenis Kelamin</td>
							<td colspan="2" style="text-align: center;">Aksi</td>
						</tr>
						<?php foreach ($tampil as $key => $value) { ?>
						<tr>
							<td style="text-align: center;"><?php echo $value->nip ?></td>
							<td style="text-align: center;"><?php echo $value->nama ?></td>
							<td style="text-align: center;"><?php echo $value->email ?></td>
							<td style="text-align: center;"><?php echo $value->jk ?></td>
							<td style="text-align: center;"><button class="mdc-button mdc-button--raised filled-button--danger"><?php echo anchor('guru/delete/'.$value->nip,'Hapus'); ?></td></button>
							<td style="text-align: center;"><button class="mdc-button mdc-button--raised filled-button--info"><?php echo anchor('guru/edit/'.$value->nip,'Edit'); ?></button></td>
						</tr>
						<?php } ?>
						</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>