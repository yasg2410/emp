<?php 
include 'server.php';
echo "<h3> Employee Details</h3>";
  $show_query="select * from employee_details";
  $result=mysqli_query($db,$show_query);
  $count=1;
echo "<table border=1><tr bgcolor='#F65B5B'><td>Sr no</td><td>full Name</td><td>Email</td><td>Mobile Number</td><td>Address</td><td>Job Location</td><td>Designation</td></tr>";

 while ($row=mysqli_fetch_array($result)) {

   echo '<tr>  <td> '.$count++.'</td>
        <td> '.$row[1].' </td>
        <td> '.$row[2].' </td>
        <td> '.$row[3].' </td>
        <td> '.$row[4].' </td>
        <td> '.$row[5].' </td>
        <td> '.$row[6].' </td>
         </tr> ';
    }
    echo "</table>";
?>
<a href="index.php">Back</a>