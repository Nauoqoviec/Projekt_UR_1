<?php

    session_start();

    require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		$nazwa = $_GET['nazwa'];
	
		if ($rezultat = @$polaczenie->query(
		sprintf("SELECT * FROM uzytkownicy WHERE user='%s'",
		mysqli_real_escape_string($polaczenie,$nazwa))))
		{
			$ile_eventow = $rezultat->num_rows;
			if($ile_eventow>0)
			{
				
				$wiersz = $rezultat->fetch_assoc();
				$_SESSION['id'] = $wiersz['ID'];
                $_SESSION['nazwa'] = $wiersz['nazwa'];
                $_SESSION['miejsce'] = $wiersz['miejsce'];
                $_SESSION['data'] = $wiersz['data'];
                $_SESSION['godz'] = $wiersz['godz'];
				
				unset($_SESSION['blad']);
				$rezultat->free_result();
                header('Location: ../index.php');
				
			} else {
				
				//$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				header('Location: ../index.php');
				
			}
			
		}
		
		$polaczenie->close();
	}
?>