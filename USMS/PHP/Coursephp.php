<?php
    include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course_php</title>
</head>
<body>
    <?php
        
        if(isset($_POST["submit"]))
        {
            $faculty=$_POST["faculty"];
            $sName=$_POST["sName"];
            $regNo =$_POST["regNo"];
            $indexNo =$_POST["indexNo"];
            $mobileNo=$_POST["mobileNo"];
            $year=$_POST["year"];
            $sem=$_POST["sem"];
            $department=$_POST["department"];
            $date=$_POST["date"];
            $signature1=$_FILES["signature1"];
            // $cCode=$_POST["cCode"];
            // $cTitle=$_POST["cTitle"];
            // $cStatus=$_POST["cStatus"];
            // $cValue=$_POST["cValue"];
            $tcValue=$_POST["tcValue"];
            
           
            $sql="INSERT INTO course_register (faculty,sName,regNo,indexNo,mobileNo,year,sem,department,date,signature1,tcValue) 
            VALUES('$faculty','$sName','$regNo','$indexNo','$mobileNo','$year','$sem','$department','$date','$signature1','$tcValue')";
            $stmt = $conn->prepare($sql);

            if($conn-> query($sql))
            {
                // echo"<p>Welcome, </p>" .$sName ;
                // echo"<p>Your account successfully registered</p> ";
                header("location:../index.php");

            }
            else
            {
                echo"<p> Some Error try again </p>";

            }

        }

    ?>
    
</body>
</html>