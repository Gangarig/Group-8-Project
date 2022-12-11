<html>
<head>
</head>
<body>
<?php
require_once 'actions/db_connect.php';

session_start();
 $role=$_SESSION["admin"];
 echo $role;
$result = mysqli_query($link, "SELECT * FROM courses");

if($role == 'ADMIN'){
    echo '<a href="/Group-8-Project/create_courses.php">Create course</a>';
}

echo "<table>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>name</th>";
echo "<th>duration</th>";
echo "<th>address</th>";
echo "<th>start_date</th>";
echo "<th>end_date</th>";
echo "<th>price_private</th>";
echo "<th>price_business</th>";
echo "<th>price_student</th>";
echo "<th>fk_trainer</th>";
echo "<th>capacity</th>";
echo "<th>image</th>";
echo "<th>description</th>";
if($role == "ADMIN"){
    echo "<th>Actions</th>";
}
echo "</tr>";
while($row = mysqli_fetch_array($result)) {             
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['duration'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['start_date'] . "</td>";
    echo "<td>" . $row['end_date'] . "</td>";
    echo "<td>" . $row['price_private'] . "</td>";
    echo "<td>" . $row['price_business'] . "</td>";
    echo "<td>" . $row['price_student'] . "</td>";
    echo "<td>" . $row['fk_trainer'] . "</td>";
    echo "<td>" . $row['capacity'] . "</td>";
    echo "<td><img src='image/".$row['image']."' height='100px' width='100px' /></td>";
    echo "<td>" . $row['description'] . "</td>";

    if($role == "ADMIN"){
        echo "<td><a href='/Group-8-Project/update_courses.php?name=". $row['name'] . "'>Update</a><br><a href='/Group-8-Project/actions/c_delete.php?name=" . $row['name'] . "'>Delete</a></td>";
    }
    echo "</tr>";  
}   

echo "</table>";
?>
</body>
</html>
