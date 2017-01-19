<html>
    <head>
    </head>
    <body>
    <form method="post">
        Kategoria <br/>
        <input type=radio name=jedzenie1 value=pizza>pizza
        <br/>
        <input type=radio name=jedzenie1 value=obiad>dania obaidowe<br/>
        <input type=radio name=jedzenie1 value=kawa>napoje cieple<br/>
        <input type=radio name=jedzenie1 value=zimne>napoje zimne<br/>
        <input type=radio name=jedzenie1 value=spaghetti>spaghetti<br/>
		 <input type=radio name=jedzenie1 value=penne>zapiekanki penne<br/>
		  <input type=radio name=jedzenie1 value=ziemniaczane>zapiekanki ziemniaczane<br/>
		   <input type=radio name=jedzenie1 value=warzywa>zapiekane warzywa<br/>
		   <input type=radio name=jedzenie1 value=salatki>salatki<br/>
		    <input type=radio name=jedzenie1 value=zupy>zupy<br/>
			 <input type=radio name=jedzenie1 value=przekaski>przekaski<br/>
        nazwa dania<input type=text name=nazwajedzenia><br/>
        cena<input type=text name=cena><br/>
        sklad<input type=text name=sklad><br/>
        <input type=submit>
        
        
        
        </form>
    
            <?php
			if((isset($_POST['jedznie1']))||(isset($_POST['nazwajedzenia']))||(isset($_POST['cena']))||(isset($_POST['sklad'])))
			{
			
            $jedzenie=$_POST['jedzenie1'];
            $nazwa=$_POST['nazwajedzenia'];
            $cena=$_POST['cena'];
            $sklad=$_POST['sklad'];
           $servername = "localhost";
            $cena=$cena+1.5;
            $cena=$cena-1.5;
            $username = "root";
            $password = "";
            $dbname = "vabene";
            $conn = mysqli_connect($servername, $username, $password, $dbname);
                    
							if (($jedzenie=="zupy")||($jedzenie=="zimne")||($jedzenie=="kawa")){
								 $sql="insert into `$jedzenie` (`id`,`nazwa`,`cena`) VALUES ('','$nazwa','$cena')";
								
								
								
							} else {
							$sql="insert into `$jedzenie` (`id`,`nazwa`,`cena`,`sklad`) VALUES ('','$nazwa','$cena','$sklad')";}
        if(mysqli_query($conn,$sql))
            echo "ok";
            else echo "nie";
			}
    ?>
           <form action=usun.php method="post">
        Kategoria usuwanego dania <br/>
        <input type=radio name=jedzenie1 value=pizza>pizza
        <br/>
        <input type=radio name=jedzenie1 value=obiad>dania obaidowe<br/>
        <input type=radio name=jedzenie1 value=kawa>napoje cieple<br/>
        <input type=radio name=jedzenie1 value=zimne>napoje zimne<br/>
        <input type=radio name=jedzenie1 value=spaghetti>spaghetti<br/>
		 <input type=radio name=jedzenie1 value=penne>zapiekanki penne<br/>
		  <input type=radio name=jedzenie1 value=ziemniaczane>zapiekanki ziemniaczane<br/>
		   <input type=radio name=jedzenie1 value=warzywa>zapiekane warzywa<br/>
		   <input type=radio name=jedzenie1 value=salatki>salatki<br/>
		    <input type=radio name=jedzenie1 value=zupy>zupy<br/>
			 <input type=radio name=jedzenie1 value=przekaski>przekaski<br/>
        nazwa dania<input type=text name=nazwajedzenia>
        <input type=submit>
        
        
        
        </form>
        
        <?php /*
		if(isset($_POST['jedznie1']))
			{
		
		
        $jedzenie=$_POST['jedzenie1'];
            $nazwa=$_POST['nazwajedzenia'];
            
           $servername = "localhost";
            $cena=$cena+1.5;
            $cena=$cena-1.5;
            $username = "root";
            $password = "";
            $dbname = "vabene";
            $conn = mysqli_connect($servername,$username,$password, $dbname);
                    
            $sql1="DELETE * FROM $jedzenie WHERE nazwa=$nazwa";
        if(mysqli_query($conn,$sql1))
            echo "ok";
            else echo "nie i chuj";
        
        
		}*/
        ?>
		


		DODANIE ARTYKULU
	<form method=post>	
		<textarea name=cokolwiek>Tresc artykulu</textarea>
    <input type=submit>
	</form>


<?php
if(isset($_POST['cokolwiek'])){
$tresc1=$_POST['cokolwiek'];
//echo $tresc1;
	//if(isset($_POST['comment'])){
		
		//$tresc=$_POST['comment'];
		
$myfile = fopen("artykuly.txt", "w") or die("Unable to open file!");
$txt=$tresc1;
fwrite($myfile,$txt);

	fclose($myfile);}
?>
    
    </body>
    
</html>