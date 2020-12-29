<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Pesan</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item active">Pesan</li>
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
						<i class="fas fa-newspaper"></i>
						Data Pesan
					</div>

				</div>
				<div class="card-body">
					<table class="table table-striped table-bordered" id="datatables">
						<thead>
                            <th style="width: 5%">No</th>
							<th style="width: 17%">Nama</th>
							<th style="width: 17%">Email</th>
							<th style="width: 17%">Subject</th>
							<th style="width: 40%">Message</th>
							<th style="width: 4%">Actions</th>
						</thead>
						<tbody>
                            <?php 
                            $no=1;
                            foreach($pesan as $p){ ?>
							<tr>								
								<td><?= $no ?></td>
								<td><?= $p['nama']; ?></td>
								<td><?= $p['email']; ?></td>
								<td><?= $p['subject']; ?></td>
								<td><?= $p['pesan']; ?></td>
								<td>
                                    <div class="input-group-append justify-content-center">
										<a href="<?= base_url('admin/pesan/remove/'.$p['id']); ?>"
										onclick="return confirm('Yakin hapus data ?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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
