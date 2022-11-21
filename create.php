 <?php
   include_once 'includes/dbs.inc.php';
   $conn = connection();

   if (isset($_POST['submit'])) {

      $firstName = $_POST['firstName'];
      $middleName = $_POST['middleName'];
      $lastName = $_POST['lastName'];
      $dateOfBirth = $_POST['dob'];
      $gender = $_POST['sex'];
      $maritalStatus = $_POST['maritalStatus'];
      $address = $_POST['address'];
      $contactNumber = $_POST['cNum'];


      $sql = "INSERT INTO `patientinformation`(`firstName`, `middleName`, `lastName`, `dateOfBirth`, `gender`, `maritalStatus`, `p_address`, `contactNumber`) 
      VALUES ('$firstName',' $middleName',' $lastName',' $dateOfBirth', '$gender',' $maritalStatus','$address','$contactNumber')";

      $conn->query($sql) or die($conn->error);

      echo header("Location: index.php");
   }
   ?>