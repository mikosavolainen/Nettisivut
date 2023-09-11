<!DOCTYPE html>
<html>
 
<head>
    <title>Datahandleri</title>
</head>
 
<body>
        <?php

        $conn = mysqli_connect("localhost", "root", "", "oh3cyt");
         
        $log_kutsu =  $_REQUEST['log_kutsu'];
        $log_frq = $_REQUEST['log_frq'];
        $log_rst =  $_REQUEST['log_rst'];
        $log_gth = $_REQUEST['log_gth'];
        $log_time = $_REQUEST['log_time'];
        $log_date = $_REQUEST['log_date'];
         

        $sql = "INSERT INTO logikirja  VALUES ('$log_kutsu',
            '$log_frq','$log_rst','$log_gth','$log_time','$log_date')";
         
        if(mysqli_query($conn, $sql)){
            header('Location: ../nettisivu/logi.php');
            exit;
        } else{
            echo "ERROR: VIRHE!!!!!!!!!! $sql. "
                . mysqli_error($conn);
        }
         

        mysqli_close($conn);
        ?>

</body>
 
</html>