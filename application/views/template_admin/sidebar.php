<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
		</li>
	</ul>

	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">
		<li class="nav-item dropdown user user-menu">
			<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
				<img src="<?= base_url('assets/template_adminlte/')?>dist/img/avatar5.png" class="user-image img-circle elevation-2 alt=" User Image">
			</a>

			<ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
				<!-- Dropdown Avatar -->
				<li class="user-header bg-secondary">
					<img src="<?= base_url('assets/template_adminlte/')?>dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
					<p>
						<?= $this->fungsi->user_login()['nama'] ?> <br>
						Bagian <?= $this->fungsi->user_login()['type'] ?>
						<small>Staff since <?= date("M, Y",strtotime($this->fungsi->user_login()['created'])) ?></small>
					</p>
				</li>
				<!-- Dropdown Footer -->
				<li class="user-footer">
					<div class="float-left">
						<a href="<?= base_url('Home') ?>" class="btn btn-default btn-flat"> Home Page</a>
					</div>
					<div class="float-right">
						<a href="<?= base_url('auth/logout') ?>" class="btn btn-default btn-flat"><i class="fas fa-sign-out-alt"></i> Sign out</a>
					</div>
				</li>
			</ul>
		</li>
	</ul>
</nav>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="<?= base_url()?>" class="brand-link">
		<img src="<?= base_url('assets/template_adminlte/')?>dist/img/logo.png" alt="SIMANMAS"
			class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light ml-4">SIMANMAS</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Sidebar Item -->
				<li class="nav-item">
					<a href="<?= base_url('admin/dashboard')?>" class="nav-link">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/artikel') ?>" class="nav-link">
						<i class="nav-icon fas fa-newspaper"></i>
						<p>
							Artikel
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/kegiatan') ?>" class="nav-link">
						<i class="nav-icon fas fa-tasks"></i>
						<p>
							Kegiatan
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/dokumentasi') ?>" class="nav-link">
						<i class="nav-icon fas fa-image"></i>
						<p>
							Dokumentasi
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/pesan') ?>" class="nav-link">
						<i class="nav-icon fas fa-envelope"></i>
						<p>
							Pesan
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/user')?>" class="nav-link">
						<i class="nav-icon fas fa-user"></i>
						<p>
							Manajemen User
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('admin/keuangan')?>" class="nav-link">
						<i class="nav-icon fas fa-clipboard-list"></i>
						<p>
							Keuangan
						</p>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</aside>
