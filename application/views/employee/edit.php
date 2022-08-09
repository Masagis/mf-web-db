<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
				<div class="card-header">
					Form Edit Data Employee
				</div>
				<div class="card-body">
					<form action="" method="post">
						<input type="hidden" name="id" value="<?= $employee['id'] ?>">
						<div class="mb-2">
							<label for="name" class="form-label">Name Employee</label>
							<input type="text" class="form-control" id="name_employee" name="name_employee" value="<?= $employee['name_employee'] ?>">
							<small class="form-text text-danger"><?= form_error('name_employee') ?></small>
						</div>
						<div class="mb-2">
							<label for="jobtitle" class="form-label">Job Title</label>
							<input type="text" class="form-control" id="jobtitle" name="jobtitle" value="<?= $employee['jobtitle'] ?>">
							<small class="form-text text-danger"><?= form_error('jobtitle') ?></small>
						</div>
						<div class="mb-2">
							<label for="salary" class="form-label">Salary</label>
							<input type="text" class="form-control" id="salary" name="salary" value="<?= $employee['salary'] ?>">
							<small class="form-text text-danger"><?= form_error('salary') ?></small>
						</div>
						<button type="submit" name="add" class="btn btn-primary float-end mt-2">Edit Employee</button>
					</form>
				</div>
			</div>


		</div>
	</div>
</div>