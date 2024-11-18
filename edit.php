<?php include 'db.php'; ?>

<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id = $id");
$student = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $course_section = $_POST['course_section'];

    $conn->query("UPDATE students SET 
                  firstname='$firstname', middlename='$middlename', lastname='$lastname', 
                  age='$age', address='$address', course_section='$course_section' 
                  WHERE id=$id");

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Edit Record</title>
</head>
<body>
    <div class="container">
        <h1>Edit Record</h1>
        <form method="POST" action="">
            <input type="text" name="firstname" value="<?= $student['firstname'] ?>" required>
            <input type="text" name="middlename" value="<?= $student['middlename'] ?>" required>
            <input type="text" name="lastname" value="<?= $student['lastname'] ?>" required>
            <input type="number" name="age" value="<?= $student['age'] ?>" required>
            <input type="text" name="address" value="<?= $student['address'] ?>" required>
            <input type="text" name="course_section" value="<?= $student['course_section'] ?>" required>
            <button type="submit" class="btn">Update</button>
        </form>
    </div>
</body>
</html>
