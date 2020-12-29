<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Laporan Keuangan</h1>
				</div>
			</div>
		</div>
	</div>

	<section class="content">
		<div class="container">
			<div class="row">
				<div class="col-xs-4">

				</div>
				<div class="col-xs-4">

				</div>
				<div class="col-xs-4">

				</div>
			</div>

			<div class="row">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary mb-3 mr-3" data-toggle="modal" data-target="#modelId">
					<i class="fas fa-plus"></i>
					Insert Keuangan
				</button>
				<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#kalender">
					<i class="fa fa-calendar" aria-hidden="true"></i>
					Keuangan Bulan Lalu
				</button>
				<div class="col-xs-12 table-responsive text-center">

					<table class="table table-hover table-bordered">
						<thead class="thead-inverse">
							<tr>
								<th>No</th>
								<th>Tanggal</th>
								<th>Uraian</th>
								<th>Jenis</th>
								<th>Jumlah</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 1;
							foreach ($keuangan as $k) : ?>
								<tr>
									<td><?= $i; ?></td>
									<td><?= date("d-M-Y", strtotime($k['tanggal'])); ?></td>
									<td><?= $k['ket']; ?></td>
									<td><?= $k['jenis']; ?></td>
									<td>Rp. <?= $k['jumlah']; ?></td>
									<td>
										<div class="input-group-append justify-content-center">
											<a href="<?= base_url('admin/keuangan/remove/' . $k['id']); ?>" onclick="return confirm('Yakin hapus data ?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
										</div>
									</td>
								</tr>
							<?php
								$i++;
							endforeach; ?>
							<tr>
								<td colspan="2"> <strong>Total Pemasukkan</strong></td>
								<td>Rp. <?= $t_pemasukan['jumlah'] ?></td>
								<td colspan="2"><strong>Total Pengeluaran</strong></td>
								<td>Rp. <?= $t_pengeluaran['jumlah'] ?></td>
							</tr>
							<tr>
							</tr>
							<tr>
								<td colspan="4" class="text-center"><strong>TOTAL</strong></td>
								<?php
								$total = $t_pemasukan['jumlah'] - $t_pengeluaran['jumlah'];
								if (($total) > 0) { ?>
									<td class="text-center text-success"><strong>Rp. <?= $total ?></strong></td>
								<?php } else { ?>
									<td class="text-danger"><strong>Rp. <?= $total ?></strong></td>
								<?php } ?>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
</div>

<!-- Modal untuk menambah data -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Insert Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="Keuangan/entry" method="post">
				<div class="modal-body">
					<div class="container-fluid">
						<div class="form-group">
							<label for="tanggal">Tanggal</label>
							<input type="text" name="tanggal" id="tanggal" class="form-control" value="<?= date("d-m-Y"); ?>" disabled>
						</div>
						<div class="form-group">
							<label for="keterangan">Keterangan</label>
							<input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Masukkan Keterangan">
						</div>
						<div class="form-group">
							<label for="jenis">Jenis</label>
							<select class="form-control" name="jenis" id="jenis">
								<option value="pemasukkan">Pemasukan</option>
								<option value="pengeluaran">Pengeluaran</option>
							</select>
						</div>
						<div class="form-group">
							<label for="jumlah">Jumlah</label>
							<input type="number" name="jumlah" id="jumlah" class="form-control" placeholder="Masukkan Nominal">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Modal untuk mendapatkan data bulan lalu -->
<div class="modal fade" id="kalender" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Bulan Lalu</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<?php if (empty($keuangan_bulan_lalu)) {
						echo "<h1>Tidak ada Data pada bulan ini</h1>";
					} else {
						$i = 1;
						foreach ($keuangan as $k) : ?>
							<tr>
								<td><?= $i; ?></td>
								<td><?= date("d-M-Y", strtotime($k['tanggal'])); ?></td>
								<td><?= $k['ket']; ?></td>
								<td><?= $k['jenis']; ?></td>
								<td>Rp. <?= $k['jumlah']; ?></td>
								<td>
									<div class="input-group-append justify-content-center">
										<a href="<?= base_url('admin/keuangan/remove/' . $k['id']); ?>" onclick="return confirm('Yakin hapus data ?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
									</div>
								</td>
							</tr>
						<?php
							$i++;
						endforeach; ?>
						<tr>
							<td colspan="2"> <strong>Total Pemasukkan</strong></td>
							<td>Rp. <?= $t_pemasukan['jumlah'] ?></td>
							<td colspan="2"><strong>Total Pengeluaran</strong></td>
							<td>Rp. <?= $t_pengeluaran['jumlah'] ?></td>
						</tr>
						<tr>
						</tr>
						<tr>
							<td colspan="4" class="text-center"><strong>TOTAL</strong></td>
							<?php
							$total = $t_pemasukan['jumlah'] - $t_pengeluaran['jumlah'];
							if (($total) > 0) { ?>
								<td class="text-center text-success"><strong>Rp. <?= $total ?></strong></td>
							<?php } else { ?>
								<td class="text-danger"><strong>Rp. <?= $total ?></strong></td>
						<?php }
						} ?>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<script>
	$('#exampleModal').on('show.bs.modal', event => {
		var button = $(event.relatedTarget);
		var modal = $(this);
		// Use above variables to manipulate the DOM

	});
</script>
