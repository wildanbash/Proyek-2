  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<!-- Content Header (Page header) -->
  	<div class="content-header">
  		<div class="container-fluid">
  			<div class="row mb-2">
  				<div class="col-sm-6">
  					<h1 class="m-0 text-dark">Dashboard</h1>
  				</div>
  			</div>
  		</div>
  	</div>

  	<!-- Main content -->
  	<section class="content">
  		<div class="container-fluid">
  			<!-- Small boxes (Stat box) -->
  			<div class="row">
  				<div class="col-lg-3 col-6">
  					<!-- small box -->
  					<div class="small-box bg-info">
  						<div class="inner">
  							<h3>
  								<?php $query = $this->db->query('select*from kegiatan');
									echo $query->num_rows($query) 
								?>
  							</h3>
  							<p>Kegiatan</p>
  						</div>
  						<div class="icon">
  							<i class="fas fa-tasks"></i>
  						</div>
  						<a href="<?= base_url('admin/kegiatan') ?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
  					</div>
  				</div>
  				<!-- ./col -->
  				<div class="col-lg-3 col-6">
  					<!-- small box -->
  					<div class="small-box bg-success">
  						<div class="inner">
  							<h3>
  								<?php $query = $this->db->query('select*from artikel');
									echo $query->num_rows($query) 
								?>
  							</h3>
  							<p>Artikel</p>
  						</div>
  						<div class="icon">
  							<i class="fas fa-newspaper"></i>
  						</div>
  						<a href="<?= base_url('admin/artikel') ?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
  					</div>
  				</div>
  				<!-- ./col -->
  				<div class="col-lg-3 col-6">
  					<!-- small box -->
  					<div class="small-box bg-warning">
  						<div class="inner">
  							<h3>
							  	<?php $query = $this->db->query('select*from user');
									echo $query->num_rows($query)
								?>
							</h3>
  							<p>User</p>
  						</div>
  						<div class="icon">
  							<i class="fas fa-users"></i>
  						</div>
  						<a href="<?= base_url('admin/user') ?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
  					</div>
  				</div>
  				<!-- ./col -->
  				<div class="col-lg-3 col-6">
  					<!-- small box -->
  					<div class="small-box bg-danger">
  						<div class="inner">
  							<h3>
							  	<?php $query = $this->db->query('select*from pesan');
									echo $query->num_rows($query) 
								?>
							</h3>
  							<p>Pesan</p>
  						</div>
  						<div class="icon">
  							<i class="fas fa-book"></i>
  						</div>
  						<a href="<?= base_url('admin/pesan') ?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
  					</div>
  				</div>
  				<!-- ./col -->
  			</div>
  			<!-- /.row -->
  			<!-- Main row -->

  			<!-- /.card-header -->

  			<!-- /.card-body -->

  			<div class="row">
  				<div class="col-md-6">
  					<div class="card">

  					</div>
  				</div>
  			</div>

  		</div>
  		<!-- /.card -->
  </div>

  <div class="container">
	  <div class="row">
		  <div class="col">
			  
		  </div>
	  </div>
  </div>

  </section>
  <!-- right col -->
  </div>