<?php include 'head.php' ?>

<body>

    <?php include 'header.php' ?>
    <main class="container main_login">
        <div class="register">
            <form>
                <input type="text" name="login" placeholder="Nazwa użytkownika" class="input_login">
                <input type="password" name="password" placeholder="Podaj hasło" class="input_login">
                <input type="password" name="password2" placeholder="Powtórz hasło" class="input_login">
                <input type="password" name="text" placeholder="Podaj adres e-mail" class="input_login">
                <span><input type="radio" name="reg"> Akceptuję regulamin.</span>
                <button type="submit" class="button">Zarejestruj</button>
            </form>
        </div>
    </main>
    
<?php include 'footer.php' ?>