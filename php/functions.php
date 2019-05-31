<?php

    function zaloguj(){
        if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
        {
            echo '<span>Witaj '.$_SESSION['user'].' ! [<a href="logout.php"> Wyloguj się ! </a>]';
        }
        else
        {
            echo '<span class="login">
                <a href="login.php" class="button">Zaloguj</a>
            </span>';
        }
    }

    function button_event(){

    }

    function button_zamow(){

    }

    function loop_events($id)
    {
        $id = htmlentities($id, ENT_QUOTES, "UTF-8");
        $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
        
        if ($polaczenie->connect_errno!=0)
        {
            echo "Error: ".$polaczenie->connect_errno;
        }
        else
        {
            
            if ($rezultat = @$polaczenie->query(
                sprintf("SELECT * FROM koncerty INNER JOIN zespoly WHERE zespoly.id='%s'",
                mysqli_real_escape_string($polaczenie,$id))))
            {
                echo "TEST";
                $ile_eventow = $rezultat->num_rows;
                if($ile_eventow>0)
                {
                    echo $ile_eventow;
                    $wiersz = $rezultat->fetch_assoc();
                    

                    $rezultat->free_result();
                }
                else 
                {
                    
                }
                
            }
            
            $polaczenie->close();
        }

       
    }
?>