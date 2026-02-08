<?php
include "db.php";

$id = $_GET['id'];

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $department = $_POST['department'];

    mysqli_query($conn, "UPDATE student SET
        name='$name',
        email='$email',
        mobile='$mobile',
        department='$department'
        WHERE id=$id");

    header("Location: index.php");
}

$result = mysqli_query($conn, "SELECT * FROM student WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<body>

<h2>Edit Student</h2>

<form method="post">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
    Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
    Mobile: <input type="text" name="mobile" value="<?php echo $row['mobile']; ?>"><br><br>
    Department: <input type="text" name="department" value="<?php echo $row['department']; ?>"><br><br>
    <input type="submit" name="update" value="Update Student">
</form>

</body>
</html>