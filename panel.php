<html>
    <head>
    </head>
    <body>
    <form method="post">
        KAtegoria 
        <input type=radio name=jedzenie1 value=pizza>pizza
        <br/>
        <input type=radio name=jedzenie1 value=dania>dania obaidowe
        <input type=radio name=jedzenie1 value=napojecieple>napoje cieple
        <input type=radio name=jedzenie1 value=napojezimne>napoje zimne
        <input type=radio name=jedzenie1 value=sosy>sosy
        nazwa dania<input type=text name=nazwajedzenia>
        cena<input type=text name=cena>
        sklad<input type=text name=sklad>
        <input type=submit>
        
        
        
        </form>
    
            <?php
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
                    if($conn) echo"git";
                            else echo"notgit";
            $sql="insert into `$jedzenie` (`id`,`nazwa`,`cena`,`sklad`) VALUES ('','$nazwa','$cena','$sklad')";
        if(mysqli_query($conn,$sql))
            echo "ok";
            else echo "nie";

    ?>
           <form method="post">
        KAtegoria usuwanego dania
        <input type=radio name=jedzenie1 value=pizza>pizza
        <br/>
        <input type=radio name=jedzenie1 value=dania>dania obaidowe
        <input type=radio name=jedzenie1 value=napojecieple>napoje cieple
        <input type=radio name=jedzenie1 value=napojezimne>napoje zimne
        <input type=radio name=jedzenie1 value=sosy>sosy
        nazwa dania<input type=text name=nazwajedzenia>
        <input type=submit>
        
        
        
        </form>
        
        <?php
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
            $conn = mysqli_connect($servername,$username,$password, $dbname);
                    if($conn) echo"git";
                            else echo"notgit";
            $sql="delete * from $jedzenie where nazwa=$nazwa";
        if(mysqli_query($conn,$sql))
            echo "ok";
            else echo "nie";
        
        
        
        ?>
    
    </body>
    
</html>