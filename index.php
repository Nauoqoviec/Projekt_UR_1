<?php include 'head.php' ?>

<body>

    <?php include 'header.php' ?>

    <main>
        <div class="container">
            <div class="search">
                <input type="text" name="search" class="input-search" placeholder="Szukaj"/>
                <button class="button-search fas">&#xf002</button>
            </div>
            <div class="popular">
                <a href="#" class="gallery-big" style="background-image: url('img/aciddrinkers.jpg');">
                    <span class="info">
                        <span class="popular-event">Popularne wydarzenie</span>
                        <h3>Acid Drinkers</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a class="gallery-small" style="background-image: url('img/KSU.png');">
                    <span class="info">
                        <h3>KSU</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a class="gallery-small" style="background-image: url('img/pot.png');">
                    <span class="info">
                        <h3>Power Of Trinity</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a class="gallery-small" style="background-image: url('img/illusion.jpg');">
                    <span class="info">
                        <h3>Illusion</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a class="gallery-small" style="background-image: url('img/fl.jpg');">
                    <span class="info">
                        <h3>Farben Lehre</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a href="#" class="gallery-big" style="background-image: url('img/nk.jpg')">
                    <span class="info">
                        <h3>Nocny Kochanek</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
            </div>
            <span id="koncerty">
                <h3>Koncerty</h3>
                <button class="button filtr" onClick="filters_k()">Filtrowanie</button>
            </span>
            <div class="filters" id="filters_k">
                <form>
                    <?php include 'form.php' ?>
                </form>
            </div>
            <div class="gallery">
                <a href="#" class="gallery-big" style="background-image: url('img/nk.jpg')">
                    <span class="info">
                        <h3>Nocny Kochanek</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a href="#" class="gallery-big" style="background-image: url('img/aciddrinkers.jpg');">
                    <span class="info">
                        <span class="popular-event">Popularne wydarzenie</span>
                        <h3>Acid Drinkers</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a class="gallery-small" style="background-image: url('img/KSU.png');">
                    <span class="info">
                        <h3>KSU</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a class="gallery-small" style="background-image: url('img/pot.png');">
                    <span class="info">
                        <h3>Power Of Trinity</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a class="gallery-small" style="background-image: url('img/illusion.jpg');">
                    <span class="info">
                        <h3>Illusion</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a class="gallery-small" style="background-image: url('img/fl.jpg');">
                    <span class="info">
                        <h3>Farben Lehre</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a class="gallery-small" style="background-image: url('img/KSU.png');">
                    <span class="info">
                        <h3>KSU</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a class="gallery-small" style="background-image: url('img/pot.png');">
                    <span class="info">
                        <h3>Power Of Trinity</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a class="gallery-small" style="background-image: url('img/illusion.jpg');">
                    <span class="info">
                        <h3>Illusion</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a class="gallery-small" style="background-image: url('img/fl.jpg');">
                    <span class="info">
                        <h3>Farben Lehre</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
            </div>
            <span>
                <button class="more button"> Więcej </button>
            </span>
        </div>

    <?php include 'promotion.php' ?>

        <div class="container">
             <span id="festiwale">
                <h3>Festiwale</h3>
                <button class="button filtr" onClick="filters_f()">Filtrowanie</button>
            </span>
            <div class="filters" id="filters_f">
                <form>
                    <?php include 'form.php' ?>
                </form>
            </div>
            <div class="gallery">
                <a href="#" class="gallery-big" style="background-image: url('img/nk.jpg')">
                    <span class="info">
                        <h3>Nocny Kochanek</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a href="#" class="gallery-big" style="background-image: url('img/aciddrinkers.jpg');">
                    <span class="info">
                        <span class="popular-event">Popularne wydarzenie</span>
                        <h3>Acid Drinkers</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a class="gallery-small" style="background-image: url('img/KSU.png');">
                    <span class="info">
                        <h3>KSU</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a class="gallery-small" style="background-image: url('img/pot.png');">
                    <span class="info">
                        <h3>Power Of Trinity</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a class="gallery-small" style="background-image: url('img/illusion.jpg');">
                    <span class="info">
                        <h3>Illusion</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a class="gallery-small" style="background-image: url('img/fl.jpg');">
                    <span class="info">
                        <h3>Farben Lehre</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a class="gallery-small" style="background-image: url('img/KSU.png');">
                    <span class="info">
                        <h3>KSU</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a class="gallery-small" style="background-image: url('img/pot.png');">
                    <span class="info">
                        <h3>Power Of Trinity</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a class="gallery-small" style="background-image: url('img/illusion.jpg');">
                    <span class="info">
                        <h3>Illusion</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a class="gallery-small" style="background-image: url('img/fl.jpg');">
                    <span class="info">
                        <h3>Farben Lehre</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
            </div>
            <button class="more button"> Więcej </button>

            <hr class="line">

            <span id="wydarzenia">
                <h3>Wydarzenia</h3>
                <button class="button filtr" onClick="filters_w()">Filtrowanie</button>
            </span>
            <div class="filters" id="filters_w">
                <form>
                    <?php include 'form.php' ?>
                </form>
            </div>
            <div class="gallery">
                <a href="#" class="gallery-big" style="background-image: url('img/nk.jpg')">
                    <span class="info">
                        <h3>Nocny Kochanek</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a href="#" class="gallery-big" style="background-image: url('img/aciddrinkers.jpg');">
                    <span class="info">
                        <span class="popular-event">Popularne wydarzenie</span>
                        <h3>Acid Drinkers</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a class="gallery-small" style="background-image: url('img/KSU.png');">
                    <span class="info">
                        <h3>KSU</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a class="gallery-small" style="background-image: url('img/pot.png');">
                    <span class="info">
                        <h3>Power Of Trinity</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a class="gallery-small" style="background-image: url('img/illusion.jpg');">
                    <span class="info">
                        <h3>Illusion</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a class="gallery-small" style="background-image: url('img/fl.jpg');">
                    <span class="info">
                        <h3>Farben Lehre</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a class="gallery-small" style="background-image: url('img/KSU.png');">
                    <span class="info">
                        <h3>KSU</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a class="gallery-small" style="background-image: url('img/pot.png');">
                    <span class="info">
                        <h3>Power Of Trinity</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a class="gallery-small" style="background-image: url('img/illusion.jpg');">
                    <span class="info">
                        <h3>Illusion</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
                <a class="gallery-small" style="background-image: url('img/fl.jpg');">
                    <span class="info">
                        <h3>Farben Lehre</h3>
                        <span class="date">Katowice, 23.05.2019</span>
                    </span>
                </a>
            </div>
            <button class="more button"> Więcej </button>
        </div>
    </main>
<?php include 'footer.php' ?>