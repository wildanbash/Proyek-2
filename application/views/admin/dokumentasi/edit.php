<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Dokumentasi</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item active">Dokumentasi</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>


	<section class="content">
		<div class="container-fluid">
			<!-- COLOR PALETTE -->
			<div class="card">
				<div class="card-header">


					<div class="col-6">
						<i class="fas fa-image"></i>
						Edit Dokumentasi
					</div>
					<div class="col-6 mt-2">
						<a href="<?= base_url('admin/dokumentasi/index') ?>" class="btn btn-warning btn-xs">
							<i class="fas fa-arrow-left"></i>
							Kembali
						</a>
					</div>


				</div>
				<div class="card-body">
					<form action="<?= base_url('admin/dokumentasi/edit/' . $dokumentasi['dokumentasi_id']) ?>" method="POST" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group col-md-6">
									<label for="kegiatan_id">kegiatan</label>
									<select name="kegiatan_id" class="form-control" id="kegiatan_id">
										<option value="">--- Pilih kegiatan ---</option>
										<?php
										foreach ($all_kegiatan as $aktifita) {
											$selected = ($aktifita['kegiatan_id'] == $dokumentasi['kegiatan_id']) ? ' selected="selected"' : "";

											echo '<option value="' . $aktifita['kegiatan_id'] . '" ' . $selected . '>' . $aktifita['nama'] . '</option>';
										}
										?>
									</select>
									<span class="text-danger"><?php echo form_error('kegiatan_id'); ?></span>
								</div>
								<div class="form-group col-md-6">
									<label>Gambar</label> <br>
									<img src="<?= base_url('assets/upload/dokumentasi/'.$dokumentasi['content_images']);?>" alt="">
									<input type="file" name="gambar" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 text-center">
								<button type="submit" class="btn btn-info mt-4 border"><i></i> Save</button>
								<button type="reset" class="btn btn-danger mt-4 border"><i class=""></i>Reset</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</div>
