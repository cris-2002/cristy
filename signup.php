<?php include 'db.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $course_section = $_POST['course_section'];

    $conn->query("INSERT INTO students (firstname, middlename, lastname, age, address, course_section) 
                  VALUES ('$firstname', '$middlename', '$lastname', '$age', '$address', '$course_section')");

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Create Record</title>
</head>
<body>
    <div class="container">
        <h1>Add New Record</h1>
        <form method="POST" action="">
            <input type="text" name="firstname" placeholder="First Name" required>
            <input type="text" name="middlename" placeholder="Middle Name" required>
            <input type="text" name="lastname" placeholder="Last Name" required>
            <input type="number" name="age" placeholder="Age" required>
            <input type="text" name="address" placeholder="Address" required>
            <input type="text" name="course_section" placeholder="Course/Section" required>
            <button type="submit" class="btn">Save</button>
        </form>
    </div>
</body>
</html>
