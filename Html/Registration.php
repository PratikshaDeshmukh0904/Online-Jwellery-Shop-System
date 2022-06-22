<?php
$con = mysqli_connect("localhost","root","","signup");

if(isset($_POST['submit'])){

    $Fname =  $_POST['firstname'];
    $Lname =$_POST['lastname'];
    $Mobileno = $_POST['mobileno'];
    $Email =$_POST['email'];
    $Pass = $_POST['password'];
    $Cpass = $_POST['cpassword'];

    $sql = "insert into registration(firstname,lastname,mobileno,email,password,cpassword) values(' $Fname',' $Lname',' $Mobileno','$Email',' $Pass','$Cpass')";

    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('Record saved');</script>";

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
        </table>
        <?php
        while($res = mysqli_fetch_array($query))
        {
            echo $res['firstname']."".$res['lastname']."".$res['mobileno']."".$res['email']."".$res['password']."<br>";
        }
        }
    }
    else{
        echo "error : ".mysqli_error($con);
    }
}
?>