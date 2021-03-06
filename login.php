<?php 
    include 'head.php'; 
?>

<body>

    <?php include 'header.php' ?>
    <main class="container main_login">
        <div class="login">
            <div class="login_form">
                <form action="php/zaloguj.php" method="POST">
                    <input type="text" name="login" placeholder="Login lub e-mail" class="input_login" />
                    <input type="password" name="haslo" placeholder="Hasło" class="input_login" />
                    <input type="submit" class="button" value="Zaloguj" />
                </form>
            </div>
            <div class="login_alt">
                <img src="img/loginFacebook.png" alt="Zaloguj za pomocą facebooka" />
                <img src="img/loginGoogle.png" alt="Zaloguj za pomocą google" />
                <a href="register.php" class="button">Utwórz konto</a>
            </div>
        </div>
    </main>
    
<?php include 'footer.php' ?>