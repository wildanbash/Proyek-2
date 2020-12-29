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
						<i class="fas fa-tasks"></i>
						Data kegiatan
					</div>
					<div class="col-6 mt-2">
						<a href="<?=base_url('admin/kegiatan/add')?>" class="btn btn-secondary btn-xs">
							<i class="fas fa-plus"></i>
							Tambah Data
						</a>
					</div>


				</div>
				<div class="card-body">
					<table class="table table-striped table-bordered">
						<thead>
                            <th>No</th>
                            <th>Pengusul / Pembuat</th>
							<th>Nama kegiatan</th>
							<th>Deskripsi</th>
							<th>Actions</th>
						</thead>
						<tbody>
                            <?php 
                            $no=1;
                            foreach($kegiatan as $a){ ?>
							<tr>								
								<td><?php echo $no?></td>
								<td><?php echo $a['namauser']; ?></td>
								<td><?php echo $a['nama']; $no++; ?></td>
								<td><?php echo $a['deskripsi'];?></td>
								<td>
                                    <div class="input-group-append justify-content-center">
                                        <a href="<?= base_url('admin/kegiatan/edit/'.$a['kegiatan_id']); ?>"
											class="btn btn-sm btn-primary mr-1"><i class="fas fa-edit"></i></a>
                                    </div>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
</div>

