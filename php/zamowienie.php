<?php

    if((!(isset($_SESSION['zalogowany']))) && ($_SESSION['zalogowany']==false)){
        header('Location: ../login.php');
    };
   
    require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
        $cena = $_POST['cena'];
        $ilosc = $_POST['ilosc'];
        $num = $_POST['num'];
        $nazwa = $_POST['nazwa'];
        $id = $_POST['id'];

        $cena = $cena * $num;
        $ilosc = $ilosc - $num;
        if(@$polaczenie -> query("UPDATE koncerty SET ".$nazwa."_ilosc='".$ilosc."' WHERE koncert_id='".$id."'")){
          
            header('Location: ../zamowiono.php?sukces=1&cena='.$cena.'');
        }
        else
        {
            echo "Błąd zapytania";
        }

        
    }


?>