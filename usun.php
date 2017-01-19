<?php   
		if(isset($_POST['jedzenie1']))
			{
		
		
        $jedzenie=$_POST['jedzenie1'];
            $nazwa=$_POST['nazwajedzenia'];
            
           $servername = "localhost";
            
            $username = "root";
            $password = "";
            $dbname = "vabene";
            $conn = mysqli_connect($servername,$username,$password, $dbname);
                    
            $sql1="DELETE FROM $jedzenie WHERE `nazwa`='$nazwa'";
        if(mysqli_query($conn,$sql1))
            echo "ok";
            else echo "nie i chuj";
        
        
		}
        ?>
		<script>
		location.assign("panel.php");
		
		</script>