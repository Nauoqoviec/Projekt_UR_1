<?php 
    include 'head.php'; 

?>

<body>

    <?php include 'header.php' ?>
    <main class="container main_login">
        <div class="login">
                <?php 
                    echo 'Twoje zamówienie zostało złożone poprawnie!<br />
                    Koszt zamówienia to: '.$_GET['cena'];

                    header('Refresh: 10; url=index.php');
                ?>
        </div>
    </main>
    
<?php include 'footer.php' ?>