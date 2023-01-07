<html>
	<body>
		<?php
        $servername:"localhost";
        $username:"root";
        $password:"mj";
        $dbname:"rentaze" ;      
        $conn=new mysqli($servername,$username,$password,$dbname);	
			if ($conn->connect_error)
			{
				die("Could not connect: .$conn->connect_error");
			}
			$sql="INSERT INTO signup (email,pwd,rpwd)
			    VALUES ('$_POST[email]','$_POST[pwd]','$_POST[rpwd]')";

			if ($conn->query($sql)===TRUE)
			{
				echo "new record created successfully" ;
			}
			else{
				echo "error:" .$sql. "<br>".$conn->error;
			}
			$conn->close();
		?>
        </body>
</html>