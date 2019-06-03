<?php 
    include 'head.php';
    require_once "php/connect.php";

    
?>

<body>

    <?php
        include 'header.php';
        $dane = dane_zespolu($_GET['zespol_id']);
        $info = koncert_info($_GET['koncert_id']);
    ?>
    <div class="bg_event" style="background-image: url('img/nk.jpg')" >
        <h3 class="title_event"><?php echo $dane['nazwa'] ?></h3>
    </div>
    <div class="container events">
        <div class="content">
        <h3 style="margin-bottom: 0px;"> <?php echo $info['Data'].' '.$info['Kraj'].', '.$info['Miasto'].' > '.$info['Miejsce']; ?> </h3>
        <h4> Bilety na to wydarzenie </h4>
            <form action="php/zamowienie.php" method="POST">
                <div class="event">
                    <table class="order">
                        <tr>
                            <td class="day"><?php echo $info['sektor1_nazwa'] ?></td>
                            <td class="price" rowspan="2"><?php echo $info['sektor1_cena'].' zł' ?></td>
                            <td class="btn_plus" rowspan="2"><button class="button">-</button></td>
                            <td rowspan="2">
                                <input type="text" class="num" placeholder="0" name="num">
                                <input type="hidden" name="cena" value="<?php echo $info['sektor1_cena'] ?>"/>
                                <input type="hidden" name="ilosc" value="<?php echo $info['sektor1_ilosc'] ?>"/>
                                <input type="hidden" name="nazwa" value="sektor1"/>
                                <input type="hidden" name="id" value="<?php echo $_GET['koncert_id']; ?>"/>
                            </td>
                            <td class="btn_minus" rowspan="2"><button class="button">+</button></td>
                        </tr>
                        <tr>
                            <td class="month">Sektor</td>
                        </tr>
                    </table>
                    <input type="submit" class="button" value="Zamów">
                    
                </div>
            </form>
            <form action="php/zamowienie.php" method="POST">
                <div class="event">
                    <table class="order">
                        <tr>
                            <td class="day"><?php echo $info['sektor2_nazwa'] ?></td>
                            <td class="price" rowspan="2"><?php echo $info['sektor2_cena'].' zł' ?></td>
                            <td class="btn_plus" rowspan="2"><button class="button">-</button></td>
                            <td rowspan="2">
                                <input type="text" class="num" placeholder="0" name="num"> 
                                <input type="hidden" name="cena" value="<?php echo $info['sektor2_cena'] ?>"/>
                                <input type="hidden" name="ilosc" value="<?php echo $info['sektor2_ilosc'] ?>"/>
                                <input type="hidden" name="nazwa" value="sektor2"/>
                                <input type="hidden" name="id" value="<?php $_GET['koncert_id'] ?>"/>
                            </td>
                            <td class="btn_minus" rowspan="2"><button class="button">+</button></td>
                        </tr>
                        <tr>
                            <td class="month">Sektor</td>
                        </tr>
                    </table>
                    <input type="submit" class="button" value="Zamów">
                    
                </div>
            </form>
            
            <form action="php/zamowienie.php" method="POST">
                <div class="event">
                    <table class="order">
                        <tr>
                            <td class="day"><?php echo $info['sektor3_nazwa'] ?></td>
                            <td class="price" rowspan="2"><?php echo $info['sektor3_cena'].' zł' ?></td>
                            <td class="btn_plus" rowspan="2"><button class="button">-</button></td>
                            <td rowspan="2">
                                <input type="text" class="num" placeholder="0" name="num">
                                <input type="hidden" name="cena" value="<?php echo $info['sektor3_cena'] ?>"/>
                                <input type="hidden" name="ilosc" value="<?php echo $info['sektor3_ilosc'] ?>"/>
                                <input type="hidden" name="nazwa" value="sektor3"/>
                                <input type="hidden" name="id" value="<?php $_GET['koncert_id'] ?>"/>
                            </td>
                            <td class="btn_minus" rowspan="2"><button class="button">+</button></td>
                        </tr>
                        <tr>
                            <td class="month">Sektor</td>
                        </tr>
                    </table>
                    <input type="submit" class="button" value="Zamów">
                    
                </div>
            </form>
            
            <form action="php/zamowienie.php" method="POST">
                <div class="event">
                    <table class="order">
                        <tr>
                            <td class="day"><?php echo $info['sektor4_nazwa'] ?></td>
                            <td class="price" rowspan="2"><?php echo $info['sektor4_cena'].' zł' ?></td>
                            <td class="btn_plus" rowspan="2"><button class="button">-</button></td>
                            <td rowspan="2">
                                <input type="text" class="num" placeholder="0" name="num">
                                <input type="hidden" name="cena" value="<?php echo $info['sektor4_cena'] ?>"/>
                                <input type="hidden" name="ilosc" value="<?php echo $info['sektor4_ilosc'] ?>"/>
                                <input type="hidden" name="nazwa" value="sektor4"/>
                                <input type="hidden" name="id" value="<?php $_GET['koncert_id'] ?>"/>
                            </td>
                            <td class="btn_minus" rowspan="2"><button class="button">+</button></td>
                        </tr>
                        <tr>
                            <td class="month">Sektor</td>
                        </tr>
                    </table>
                    <input type="submit" class="button" value="Zamów">
                    
                </div>
            </form>
            
            <form action="php/zamowienie.php" method="POST">
                <div class="event">
                    <table class="order">
                        <tr>
                            <td class="day"><?php echo $info['sektor5_nazwa'] ?></td>
                            <td class="price" rowspan="2"><?php echo $info['sektor5_cena'].' zł' ?></td>
                            <td class="btn_plus" rowspan="2"><button class="button">-</button></td>
                            <td rowspan="2">
                                <input type="text" class="num" placeholder="0" name="num">
                                <input type="hidden" name="cena" value="<?php echo $info['sektor5_cena'] ?>"/>
                                <input type="hidden" name="ilosc" value="<?php echo $info['sektor5_ilosc'] ?>"/>
                                <input type="hidden" name="nazwa" value="sektor5"/>
                                <input type="hidden" name="id" value="<?php $_GET['koncert_id'] ?>"/>
                            </td>
                            <td class="btn_minus" rowspan="2"><button class="button">+</button></td>
                        </tr>
                        <tr>
                            <td class="month">Sektor</td>
                        </tr>
                    </table>
                    <input type="submit" class="button" value="Zamów">
                    
                </div>
            </form>
            
            <p>
            <?php echo $dane['opis'] ?></p>
        </div>
        <aside class="sidebar">
            
        </aside>
    </div>
<hr style="width: 90%; clear: both; visibility: hidden;" />
<?php include 'footer.php' ?>
© 2019 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
Pricing
API
Training
Blog
About
