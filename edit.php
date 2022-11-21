<?php
include_once 'includes/dbs.inc.php';
$conn = connection();
$patientID =  mysqli_real_escape_string($conn, $_GET['ID']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <form action="update.php?ID=<?php echo $patientID ?>" method="POST">
            <div class="mb-3 ">
                <div>
                    <div class="mt-3">
                        <p class="h1 fw-5">Edit Patient's Information</p>
                    </div>
                    <div class="row">
                        <div class="col-4"> <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" required value="">
                        </div>
                        <div class="col-4">
                            <label for="middleName" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="middleName" name="middleName" required value="Anob">
                        </div>
                        <div class="col-4">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" required value="Homwad">
                        </div>
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
                            <input class="form-check-input" type="radio" name="maritalStatus" required value="Single" id="defaultCheck1">
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
            </div>
            <div class="d-flex justify-content-end">
                <a href="index.php" type="button" name="close" class="btn btn-danger">Back</a>
                &nbsp;
                <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
            </div>
    </div>
    </form>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>