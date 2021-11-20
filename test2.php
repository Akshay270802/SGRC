<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Data</title>
</head>
<body>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>
<table style="width:100%">
  <tr>
    <th>Sr.No</th>
    <th>Name</th>
    <th>Contact</th>
    <th>Email</th>
    <th>Grievance Details</th>
    <th>Date & Time</th>
  </tr>
<?php

$conn = mysqli_connect("localhost", "root", "", "test");
$sql = "SELECT * FROM test5";
$result = $conn->query($sql);

if($result-> num_rows > 0)
{
    while($row = $result-> fetch_assoc())
    {
        echo "<tr><td>" . $row["sno"] . "</td><td>" . $row["name"] . "</td><td>" . $row["contact"] . "</td><td>" . $row["email"] . "</td><td>". $row["detail"] . "</td><td>". $row["dt"] . "</td></tr>";
     
    }
}
else{
    echo "No results Found";
}
$conn->close();

?>
</table>

</div>
</body>
</html>