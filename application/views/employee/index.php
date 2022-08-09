<div class="container">

	<?php if ($this->session->flashdata('flash')) : ?>
		<div class="row mt-3">
			<div class="col-md-6">
				<div class="alert alert-success alert-dismissible fade show" role="alert">Data karyawan
					<strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>employee/add" class="btn btn-primary">
				Tambah Data Karyawan
			</a>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" method="post">
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Search Name Employes or Job title ..." name="keyword">
					<button class="btn btn-primary" type="submit">Cari</button>
				</div>
			</form>
		</div>
	</div>

	<div class="row mt-3 mb-5">
		<div class="col-md-6">
			<h3>Daftar Karyawan</h3>
			<table class="table table-hover">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Name Employee</th>
						<th scope="col">Job Title</th>
						<th scope="col">Salary</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($employee as $emp) : ?>
						<tr>
							<th scope="row"><?= $emp['id']; ?></th>
							<td><?= $emp['name_employee']; ?></td>
							<td><?= $emp['jobtitle']; ?></td>
							<td><?= $emp['salary']; ?></td>
							<td>
								<a href="<?= base_url(); ?>employee/detail/<?= $emp['id'];  ?>" class="btn btn-primary btn-sm">Detail</a>
								<a href="<?= base_url(); ?>employee/edit/<?= $emp['id'];  ?>" class="btn btn-warning btn-sm">Edit</a>
								<a href="<?= base_url(); ?>employee/delete/<?= $emp['id'];  ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?');">Hapus</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<?php if (empty($employee)) : ?>
				<div class="alert alert-danger" role="alert">
					Data tidak ditemukan!
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>