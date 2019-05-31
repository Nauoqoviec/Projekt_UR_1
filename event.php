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
            <div class="event">
                <table class="order">
                    <tr>
                        <td class="day">A1</td>
                        <td class="price" rowspan="2">200 zł</td>
                        <td class="btn_plus" rowspan="2"><button class="button">-</button></td>
                        <td rowspan="2"><div class="num">0</div></td>
                        <td class="btn_minus" rowspan="2"><button class="button">+</button></td>
                    </tr>
                    <tr>
                        <td class="month">Sektor</td>
                    </tr>
                </table>
                <button class="button">Zamów</button>
            </div>
            
            <div class="event">
                <table class="order">
                    <tr>
                        <td class="day">A2</td>
                        <td class="price" rowspan="2">200 zł</td>
                        <td class="btn_plus" rowspan="2"><button class="button">-</button></td>
                        <td rowspan="2"><div class="num">0</div></td>
                        <td class="btn_minus" rowspan="2"><button class="button">+</button></td>
                    </tr>
                    <tr>
                        <td class="month">Sektor</td>
                    </tr>
                </table>
                <button class="button">Zamów</button>
            </div>
            
            <div class="event">
                <table class="order">
                    <tr>
                        <td class="day">B1</td>
                        <td class="price" rowspan="2">200 zł</td>
                        <td class="btn_plus" rowspan="2"><button class="button">-</button></td>
                        <td rowspan="2"><div class="num">0</div></td>
                        <td class="btn_minus" rowspan="2"><button class="button">+</button></td>
                    </tr>
                    <tr>
                        <td class="month">Sektor</td>
                    </tr>
                </table>
                <button class="button">Zamów</button>
            </div>
            
            <div class="event">
                <table class="order">
                    <tr>
                        <td class="day">B2</td>
                        <td class="price" rowspan="2">200 zł</td>
                        <td class="btn_plus" rowspan="2"><button class="button">-</button></td>
                        <td rowspan="2"><div class="num">0</div></td>
                        <td class="btn_minus" rowspan="2"><button class="button">+</button></td>
                    </tr>
                    <tr>
                        <td class="month">Sektor</td>
                    </tr>
                </table>
                <button class="button">Zamów</button>
            </div>
            
            <div class="event">
                <table class="order">
                    <tr>
                        <td class="day">VIP</td>
                        <td class="price" rowspan="2">200 zł</td>
                        <td class="btn_plus" rowspan="2"><button class="button">-</button></td>
                        <td rowspan="2"><div class="num">0</div></td>
                        <td class="btn_minus" rowspan="2"><button class="button">+</button></td>
                    </tr>
                    <tr>
                        <td class="month">Sektor</td>
                    </tr>
                </table>
                <button class="button">Zamów</button>
            </div>
            
            <p>
            Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fermentum in, dolor. Pellentesque facilisis. Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac turpis velit, rhoncus eu, luctus et interdum adipiscing wisi. Aliquam erat ac ipsum. Integer aliquam purus. Quisque lorem tortor fringilla sed, vestibulum id, eleifend justo vel bibendum sapien massa ac turpis faucibus orci luctus non, consectetuer lobortis quis, varius in, purus. Integer ultrices posuere cubilia Curae, Nulla ipsum dolor lacus, suscipit adipiscing. Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, dapibus risus ante sodales lectus blandit eu, tempor diam pede cursus vitae, ultricies eu, faucibus quis, porttitor eros cursus lectus, pellentesque eget, bibendum a, gravida ullamcorper quam. Nullam viverra consectetuer. Quisque cursus et, porttitor risus. Aliquam sem. In hendrerit nulla quam nunc, accumsan congue. Lorem ipsum primis in nibh vel risus. Sed vel lectus. Ut sagittis, ipsum dolor quam.</p>
        </div>
        <aside class="sidebar">
            
        </aside>
    </div>
<hr style="width: 90%; clear: both; visibility: hidden;" />
<?php include 'footer.php' ?>