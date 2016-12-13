
	<div class="col-md-10">
		<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title"><h3>Daftar Murid</h3></div>
				</div>
  				<div class="panel-body">
  					<table class="table table-striped">
						<tr>
							<th>NIM</th>
							<th>Nama Murid</th>
							<th>Kelas</th>
							<th>Kelompok Belajar</th>
						</tr>
								
						<?php foreach ($murid as $row) { ?>
							<tr>
								<td>
									<?php echo $row->no_induk; ?>
								</td>
								<td>
									<?php echo anchor('c_murid/lihatKelolaMurid/'.$row->id_murid, $row->nama_lengkap); ?>
								</td>
								<td>
									<?php if ($row->kelas == NULL) {
										echo "Belum ada kelas";
									}else{
										echo $row->kelas;
										} ?>
								</td>
								<td>
									<?php if ($row->kelas == NULL) {
										echo "Belum ada kelompok belajar";
									}else{
										echo $row->kel_belajar;
										} ?>
								</td>
							</tr>
						<?php } ?>
					</table>
				</div>
			</div>
	</div>
</div>
</div>