<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Detail Karyawan
				</div>
				<div class="card-body">
					<h5 class="card-title"><?= $employee['name_employee'] ?></h5>
					<p>Position : <?= $employee['jobtitle'] ?></p>
					<p>Salary : <?= $employee['salary'] ?></p>
					<a href="<?= base_url(); ?>employee" class="btn btn-primary">Kembali</a>
				</div>
			</div>
		</div>
	</div>
</div>