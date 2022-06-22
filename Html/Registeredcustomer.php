<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Customer</title>
    <link rel="stylesheet" href="../css/Registeredcustomer.css">
</head>
<body>
    <center>
       <marquee><h1>Registered Customer</h1></marquee> <br>
    <table>
       <?php 
       $con = mysqli_connect("localhost","root","","signup");
       
        $selectquery = "select firstname,lastname,mobileno,email,password from registration";
        $query = mysqli_query($con,$selectquery);
        $nums = mysqli_num_rows($query);
        if($nums != 0)
        {
            ?>
           <table border=1px solid>
                <tr>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>MobileNo</th>
                    <th>Email</th>
                    <th>Password</th>
        </tr>
       
        <?php
        while($res = mysqli_fetch_array($query))
        {
            echo "<tr>";
            echo "<td>" .$res['firstname']."</td>";
            echo "<td>" .$res['lastname']."</td>";
            echo "<td>" .$res['mobileno']."</td>";
            echo "<td>" .$res['email']."</td>";
            echo "<td>" .$res['password']."</td>";
            echo "</tr>";
                }
        }
        echo "</table>";
    
    
    ?>
    </table></center>
</body>
</html>