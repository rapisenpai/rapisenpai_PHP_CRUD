<?php
include_once 'includes/dbs.inc.php';
$conn = connection();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HMS</title>
	</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
	<div class="container-xxl">
		<div class="p-2 d-flex justify-content-between d-flex align-items-center">
			<div>
				<h1 class="fw-bold">Manage Patient Information</h1>
			</div>
			<div>
				<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalAdd">Add new</button>
			</div>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Patient's ID</th>
					<th scope="col">Name</th>
					<th scope="col">Date of Birth</th>
					<th scope="col">Sex</th>
					<th scope="col">Marital Status</th>
					<th scope="col">Address</th>
					<th scope="col">Contact Number</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php do { ?>
					<tr>
						<th scope="row"><?php echo $row['patientID'] . "<br>"; ?></th>
						<td><?php echo $row['firstName'] . " " . $row['middleName'] .  " " . $row['lastName'] . "<br>"; ?></td>
						<td><?php echo $row['dateOfBirth'] . "<br>"; ?></td>
						<td><?php echo $row['gender'] . "<br>"; ?></td>
						<td><?php echo $row['maritalStatus'] . "<br>"; ?></td>
						<td><?php echo $row['p_address'] . "<br>"; ?></td>
						<td><?php echo $row['contactNumber'] . "<br>"; ?></td>
						<td>
							<a href="edit.php?ID=<?php echo $row['patientID'] ?>" type="button" class="btn btn-success">Edit</a>
							<a href="delete.php?ID=<?php echo $row['patientID'] ?>" type="button" class="btn btn-danger">Delete</a>
						</td>
					</tr>
				<?php } while ($row = $patientInformation->fetch_assoc()) ?>
			</tbody>
		</table>
	</div>

	<!-- Add (Modal) -->
	<div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="modalAdd" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="create.php" method="POST">
					<div class="modal-header">Add Patient's Information</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="mb-3">
							<label for="firstName" class="form-label">First Name</label>
							<input type="text" class="form-control" id="firstName" name="firstName" required placeholder="Rafhael Lowix">
						</div>
						<div>
							<label for="middleName" class="form-label">Middle Name</label>
							<input type="text" class="form-control" id="middleName" name="middleName" required placeholder="Anob">
						</div>
						<div>
							<label for="lastName" class="form-label">Last Name</label>
							<input type="text" class="form-control" id="lastName" name="lastName" required placeholder="Homwad">
						</div>
						<div>
							<label for="dob">Date of Birth</label>
							<input class="form-control" name="dob" id="dob" value="" required type="date">
						</div>
						<label>Sex</label> <br>
						<div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="sex" required value="Male" id="male">
								<label class="form-check-label" for="male">
									Male
								</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="sex" required value="Female" id="female">
								<label class="form-check-label" for="female">
									Female
								</label>
							</div>
						</div>
						<div>
							<label>Marital Status</label> <br>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="maritalStatus" required value="Single" id="defaultCheck1">
								<label class="form-check-label" for="defaultCheck1">
									Single
								</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="maritalStatus" required value="Widowed" id="defaultCheck1">
								<label class="form-check-label" for="defaultCheck1">
									Taken
								</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="maritalStatus" required value="Married" id="defaultCheck1">
								<label class="form-check-label" for="defaultCheck1">
									Married
								</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="maritalStatus" required value="Divorced" id="defaultCheck1">
								<label class="form-check-label" for="defaultCheck1">
									Divorced
								</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="maritalStatus" required value="Widowed" id="defaultCheck1">
								<label class="form-check-label" for="defaultCheck1">
									Widowed
								</label>
							</div>
						</div>
						<div>
							<label for="address" class="form-label">Address</label>
							<textarea class="form-control" required id="address" name="address" rows="3"></textarea>
						</div>
						<div>
							<label for="cNum" class="form-label">Contact Number</label>
							<input type="number" required maxlength="13" required class="form-control" id="cNum" name="cNum" placeholder="+639514602246">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
					</div>
			</div>

			</form>
		</div>
	</div>
	</div>
	<script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>