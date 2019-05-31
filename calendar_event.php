<?php 

    include 'head.php';

    require_once "php/connect.php";

    
?>

<body>

    <?php 
        include 'header.php';
        $dane = dane_zespolu($_GET['zespol_id']); 
    ?>
    
    <div class="bg_event" style="background-image: url('img/nk.jpg')">
        <h3 class="title_event"><?php echo $dane['nazwa'] ?></h3>
    </div>
    <div class="container events">
        <div class="content">
        <h4> Nadchodzące wydarzenia</h4>
        <?php loop_events($_GET['zespol_id']) ?>  
            <p>
            <?php echo $dane['opis'] ?></p>
        </div>
        <aside class="sidebar">
            
        </aside>
    </div>
<hr style="width: 90%; clear: both; visibility: hidden;" />
<?php include 'footer.php' ?>