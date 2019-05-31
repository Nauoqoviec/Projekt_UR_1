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

    function loop_events($id)
    {
        global $host, $db_user, $db_password, $db_name;
        
        //$id = htmlentities($id, ENT_QUOTES, "UTF-8");
        $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
        
        if (mysqli_connect_errno())
        {
            echo "Error: ".mysqli_connect_error();
            exit();
        }
        else
        {
            
            if ($rezultat = $polaczenie->query('SELECT * FROM koncerty INNER JOIN zespoly ON koncerty.zespol_id = zespoly.zespol_id WHERE zespoly.zespol_id = "'.$id.'"
            '))
            {
                $ile_eventow = $rezultat->num_rows;
                if($ile_eventow>0){
                    while($wiersz = $rezultat -> fetch_assoc()){
                        $phpdate = strtotime( $wiersz['Data'] );
                        echo '<div class="event">
                            <table>
                                <tr>
                                    <td class="day">'.date( 'd', $phpdate ).'</td>
                                    <td class="title">'.$wiersz['Miasto'].', '.$wiersz['Kraj'], $wiersz['koncert_id'].'</td>
                                </tr>
                                <tr>
                                    <td class="month">'.date( 'M', $phpdate ).'</td>
                                    <td class="place">'.$wiersz['Miasto'].', '.$wiersz['Miejsce'].' - '.date( 'D', $phpdate ).'. '.$wiersz['Godz'].'</td>
                                </tr>
                            </table>
                            <a href="event.php?koncert_id='.$wiersz['koncert_id'].'&zespol_id='.$id.'" class="button" style="line-height: 2.2">Bilety</a>
                        </div>';
                    }
                }
                              
            }
            
            $polaczenie->close();
        }

       
    }

    function dane_zespolu($id)
    {
        global $host, $db_user, $db_password, $db_name;
        
        //$id = htmlentities($id, ENT_QUOTES, "UTF-8");
        $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
        
        if (mysqli_connect_errno())
        {
            echo "Error: ".mysqli_connect_error();
            exit();
        }
        else
        {
            if ($rezultat = $polaczenie->query('SELECT * FROM zespoly WHERE zespol_id = "'.$id.'"'))
            {
                $zespol = $rezultat->fetch_assoc();
                return $zespol;
            }
        $polaczenie -> close();
        
        }
    }

    function koncert_info($id){
        global $host, $db_user, $db_password, $db_name;
        
        //$id = htmlentities($id, ENT_QUOTES, "UTF-8");
        $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
        
        if (mysqli_connect_errno())
        {
            echo "Error: ".mysqli_connect_error();
            exit();
        }
        else
        {
            if ($rezultat = $polaczenie->query('SELECT * FROM koncerty WHERE koncert_id = "'.$id.'"'))
            {
                $info = $rezultat->fetch_assoc();
                return $info;
            }
        $polaczenie -> close();
        
        }
    }
?>