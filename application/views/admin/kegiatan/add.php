<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Data kegiatan</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item active">kegiatan</li>
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
						<i class="fas fa-user"></i>
						Tambah Data kegiatan
					</div>
					<div class="col-6 mt-2">
						<a href="<?=base_url('admin/kegiatan/index')?>" class="btn btn-warning btn-xs">
							<i class="fas fa-arrow-left"></i>
							Kembali
						</a>
					</div>


				</div>
				<div class="card-body">
					<?php echo form_open('admin/kegiatan/add'); ?>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="nama">Nama kegiatan</label>
								<input class="form-control" type="text" name="nama" placeholder="Masukkan nama kegiatan"/>
								<span class="text-danger"><?php echo form_error('nama');?></span>
							</div>
                            <div class="form-group">
							  <label for="deskripsi">Deskripsi</label>
							  <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" placeholder="Masukkan deskripsi kegiatan"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<button type="submit" class="btn btn-info mt-4 border"><i></i> Save</button>
							<button type="reset" class="btn btn-danger mt-4 border"><i class=""></i>Reset</button>
						</div>
					</div>


					

					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</section>
</div>
