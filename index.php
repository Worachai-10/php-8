<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "students";
    $conn = mysqli_connect($servername, $username, $password, $database) or die("Connection failed: ".$conn -> connect_error);

    $sql = "SELECT * FROM students ORDER BY class_id ASC";
    $query = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- นายวรชัย เจนจบวิทยา ม.6/10 เลขที่ 10 -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>10-วรชัย</title>
</head>
<body>
    <div class="container pb-4 px-2">
        <h3 class="my-2 text-center fw-bold">รายชื่อนักเรียนในฐานข้อมูล</h3>
        <h5 class="text-center">โดย</h5>
        <h3 class="my-2 text-center">นายวรชัย เจนจบวิทยา ม.6/10 เลขที่ 10</h3>
        <table class="table table-hover table-bordered text-center">
            <thead>
                <tr>
                    <th>เลขประจำตัว</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>ระดับชั้น</th>
                    <th>Email</th>
                    <th>Username</th>
                </tr>
            </thead>
            <tbody>
            <?php while ($row = mysqli_fetch_assoc($query)) {?>
                <tr>
                    <td><?php echo $row["student_id"]?></td>
                    <td><?php echo $row["first_name"]." ".$row["last_name"]?></td>
                    <td><?php echo $row["class_id"]?></td>
                    <td><?php echo $row["email"]?></td>
                    <td><?php echo $row["user_name"]?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>
