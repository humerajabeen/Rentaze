<html>
<?php

$servername="localhost";

$username="root";

$password=""; 
$dbname="wt";

$conn=new mysqli ($servername, $username, $password, $dbname); 
if($conn->connect_error)

{ die("connectoin failed:". $conn->connect_error);
}

$sql="INSERT INTO index2 (name,contact,email,address,type,pname,pgender,page,pcolor,healthy,txt)
VALUES('$_POST[name]','$_POST[contact]','$_POST[email]','$_POST[address]','$_POST[type]','$_POST[pname]','$_POST[pgender]','$_POST[page]','$_POST[pcolor]','$_POST[healthy]','$_POST[txt]')";

if($conn->query($sql)===TRUE){
    echo "new record created successfully";

}
else
    {
        echo "error :".$sql."<br>".$conn->error;

    }
    $conn->close();
?>
</html>