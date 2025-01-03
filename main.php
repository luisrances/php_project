<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEKATALON</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!-- navbar -->
    <link rel="stylesheet" href="css/navbar.css">
    <script src="js/navbar.js"></script>
    <header class="header">
        <nav class="nav container">
            <!-- <div class="nav__data">
                <a href="#" class="nav__logo">
                    
                </a>
                <h1>DEKATALON</h1>
            </div> -->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li><a href="#" class="nav__link">DEKATALON</a></li>
                </ul>
            </div>

            <!-- nav menu -->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li><a href="#homepage" class="nav__link">Homepage</a></li>
                    <li><a href="#shop" class="nav__link">Shop</a></li>
                    <li><a href="#about" class="nav__link">About</a></li>
                    <li><a href="#contact" class="nav__link">Contact</a></li>
                </ul>
            </div>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li><a href="logout.php" class="nav__link">Logout</a></li>

                </ul>
            </div>
        </nav>
    </header>
    <!-- end navbar -->

    <!-- homepage -->
    <link rel="stylesheet" href="css/homepage.css">
    <a name="homepage"></a>
    <div class="home-container">
        <div class="home">
            <div class="text-container">
                <p>Unleash Your Inner Athlete: Exclusive Sports Gear Now Available!</p>
                <h1>Giving you the best sportsware at the best possible price</h1>
                <button class="homepage-button" role="button" onclick="location.href='#shop'">Shop Now</button>
                <div class="socials-container"></div>
            </div>
        </div>
    </div>
    <!-- end homepage -->

    <!-- shop -->
    <link rel="stylesheet" href="css/shop.css">
    <script src="js/shop.js" async defer></script>
    <a name="shop"></a>
    <div class="shop-container">
        <div class="spacer"></div>
        <div class="select-category">
            <div class="top">
                <button class="btn-category" onclick="showbadminton()" id="try">Badminton</button>
                <button class="btn-category" onclick="showbasketball()">Basketball</button>
                <button class="btn-category" onclick="showvolleyball()">Volleyball</button>
                <button class="btn-category" onclick="showbaseball()">Baseball</button>
                <button class="btn-category" onclick="showfootball()">Football</button>
            </div>
            <div class="foot">
                <button class="btn-category" onclick="showCart()">
                    <img id="btn-checkout"
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        Checkout
                </button>
            </div>
        </div>
        <section class="cards" id="cards">
            <!-- <div class="card-min-size"></div>
            <div class="card-min-size"></div>
            <div class="card-min-size"></div> -->

            <div id="badminton" class="category">
                <article class="card card--1">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">5% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index1)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Badminton Shuttlecock</span>
                        <h3 class="card__title">YONEX Mavis 350</h3>
                        <span class="card__by">php 600.00</span>
                    </div>
                </article>
                
                <article class="card card--2">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">15% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index2)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Badminton Shuttlecock</span>
                        <h3 class="card__title">YONEX AS 30</h3>
                        <span class="card__by">php 400.00</span>
                    </div>
                </article>
                
                <article class="card card--3">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">15% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index3)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Badminton Shuttlecock</span>
                        <h3 class="card__title">RSL Tourney 4</h3>
                        <span class="card__by">php 600.00</span>
                    </div>
                </article>
                
                <article class="card card--4">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">15% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index4)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Badminton Shuttlecock</span>
                        <h3 class="card__title">HEAD Glider 505</h3>
                        <span class="card__by">php 500.00</span>
                    </div>
                </article>
                
                <article class="card card--5">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">15% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index5)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Badminton Shuttlecock</span>
                        <h3 class="card__title">Li-Ning Champ</h3>
                        <span class="card__by">php 600.00</span>
                    </div>
                </article>
                
                <article class="card card--6">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">15% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index6)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Badminton Racket</span>
                        <h3 class="card__title">Yonex Astrox 100 ZZ</h3>
                        <span class="card__by">php 2,200.00</span>
                    </div>
                </article>
                
                <article class="card card--7">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">15% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index7)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Badminton Racket</span>
                        <h3 class="card__title">Victor JetSpeed S 12</h3>
                        <span class="card__by">php 2,100.00</span>
                    </div>
                </article>
                
                <article class="card card--8">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">15% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index8)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Badminton Racket</span>
                        <h3 class="card__title">Yonex Astrox 88D PRO</h3>
                        <span class="card__by">php 2,000.00</span>
                    </div>
                </article>
            </div>
                
            <div id="basketball" class="category">
                <article class="card card--9">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">15% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index9)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Basketball</span>
                        <h3 class="card__title">Wilson NBA Authentic Series</h3>
                        <span class="card__by">php 2,500.00</span>
                    </div>
                </article>
                <article class="card card--10">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">15% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index10)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Basketball</span>
                        <h3 class="card__title">Champion Sports Pro Style</h3>
                        <span class="card__by">php 1,500.00</span>
                    </div>
                </article>
                <article class="card card--11">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">15% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index11)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Basketball</span>
                        <h3 class="card__title">Wilson Evolution Game</h3>
                        <span class="card__by">php 4,000.00</span>
                    </div>
                </article>
                <article class="card card--12">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">15% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index12)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Basketball</span>
                        <h3 class="card__title">Spalding Marble Series Outdoor</h3>
                        <span class="card__by">php 2,000.00</span>
                    </div>
                </article>
                <article class="card card--13">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">15% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index13)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Basketball</span>
                        <h3 class="card__title">Wilson NCAA Killer Crossover</h3>
                        <span class="card__by">php 2,700.00</span>
                    </div>
                </article>
            </div>

            <div id="volleyball" class="category">
                <article class="card card--14">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">15% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index14)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Volleyball</span>
                        <h3 class="card__title">Mikasa V200W</h3>
                        <span class="card__by">php 6,300.00</span>
                    </div>
                </article>
                <article class="card card--15">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">15% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index15)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Volleyball</span>
                        <h3 class="card__title">Mikasa MR2 Sports</h3>
                        <span class="card__by">php 3,900.00</span>
                    </div>
                </article>
                <article class="card card--16">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">15% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index16)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Volleyball</span>
                        <h3 class="card__title">Molten V5M5000</h3>
                        <span class="card__by">php 6,100.00</span>
                    </div>
                </article>
                <article class="card card--17">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">15% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index17)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Volleyball</span>
                        <h3 class="card__title">Molten MIKASA V300W</h3>
                        <span class="card__by">php 1,400.00</span>
                    </div>
                </article>
            </div>

            <div id="baseball" class="category">
                <article class="card card--18">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">15% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index18)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Baseball</span>
                        <h3 class="card__title">Kipsta 11" BA100 Foam Baseball Single Ball</h3>
                        <span class="card__by">php 150.00</span>
                    </div>
                </article>
                <article class="card card--19">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">15% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index19)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Baseball</span>
                        <h3 class="card__title">All-American Blank</h3>
                        <span class="card__by">php 500.00</span>
                    </div>
                </article>
                <article class="card card--20">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">15% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index20)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Baseball</span>
                        <h3 class="card__title">SKLZ Baseball</h3>
                        <span class="card__by">php 450.00</span>
                    </div>
                </article>
                <article class="card card--21">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">20% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index21)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Baseball Bats</span>
                        <h3 class="card__title">Marucci CAT9 CONNECT</h3>
                        <span class="card__by">php 14,050.00</span>
                    </div>
                </article>
                <article class="card card--22">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">10% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index22)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Baseball Bats</span>
                        <h3 class="card__title">Louisville Slugger 2022</h3>
                        <span class="card__by">php 10,100.00</span>
                    </div>
                </article>
                <article class="card card--23">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">10% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index23)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Baseball Bats</span>
                        <h3 class="card__title">DeMarini 2022</h3>
                        <span class="card__by">php 22,300.00</span>
                    </div>
                </article>
                <article class="card card--24">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">10% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index24)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Baseball Bats</span>
                        <h3 class="card__title">Louisville Slugger 2019</h3>
                        <span class="card__by">php 23,600.00</span>
                    </div>
                </article>
                <article class="card card--25">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">10% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index25)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Baseball Bats</span>
                        <h3 class="card__title">EASTON Ghost X Evolution</h3>
                        <span class="card__by">php 24,700.00</span>
                    </div>
                </article>
            </div>

            <div id="football" class="category">
                <article class="card card--26">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">15% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index26)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Football</span>
                        <h3 class="card__title">Nike Premier League Skills ball</h3>
                        <span class="card__by">php 1,000.00</span>
                    </div>
                </article>
                <article class="card card--27">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">15% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index27)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Football</span>
                        <h3 class="card__title">Nike USA Skills ball</h3>
                        <span class="card__by">php 800.00</span>
                    </div>
                </article>
                <article class="card card--28">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">15% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index28)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Football</span>
                        <h3 class="card__title">Puma Orbita 1 La Liga Mini ball</h3>
                        <span class="card__by">php 900.00</span>
                    </div>
                </article>
                <article class="card card--29">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">15% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index29)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Football</span>
                        <h3 class="card__title">adidas MLS Club ball</h3>
                        <span class="card__by">php 1,100.00</span>
                    </div>
                </article>
                <article class="card card--30">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">15% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index30)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Football</span>
                        <h3 class="card__title">Nike NWSL Academy ball</h3>
                        <span class="card__by">php 2,000.00</span>
                    </div>
                </article>
                <article class="card card--31">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">15% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index31)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Football</span>
                        <h3 class="card__title">Nike Flight ball</h3>
                        <span class="card__by">php 9,300.00</span>
                    </div>
                </article>
                <article class="card card--32">
                    <div class="card__info-hover">
                        <img class="card__like" onclick="addToCart()"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5ElEQVR4nO3WrwrCQBzA8W+waFVQo/gIJpPB4hCsgqBPYDHrA4gvIZh8g3UNaza7OLOCYeDfiXBBLN7N305Bv3Dtx3243WCDX20OhGqtgOYn4BA4AUUsN1H4wDbcULBnG04BAXABsrZxV526YxvuPr1sUmv2Ci7EBG90Tr2MAR7rwKMY4JYOXBFGr0BOB04AO0F4gUFTQXhoArcF4aoJnAHOAmgAJDHME4BdItQXgHtR4DywfwPdAmkiVlaP/GgAHtQPRikq+rvV1dfFBxyBOe38h/tbC8x9P+yoTe+b1QTm/mGlGw7LH6npIjrWAAAAAElFTkSuQmCC">
                        <div class="card__clock-info">
                            <span class="card__time">15% off</span>
                        </div>
                    </div>
                    <div class="card__img"></div>
                    <a href="javascript:void(0)" onclick="displayProduct(index32)" class="card_link">
                        <div class="card__img--hover"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category">Football</span>
                        <h3 class="card__title">New Balance Dynamite Team ball</h3>
                        <span class="card__by">php 1,700.00</span>
                    </div>
                </article>
            </div>
        
        </section>
    </div>
    <!-- end shop -->

    <link rel="stylesheet" href="css/modal.css">
    <!-- cart -->
    <div id="cartContainer">
        <div class="center-cart">
            <button id="cart-exit">X</button>
            <div id="cartItems">
                    <p>Cart Items</p>
                    <div id="cartList"></div>
            </div>
            <button id="buyNow_checkout">Buy now</button>
        </div>
    </div>

    <!-- The popup container -->
    <div id="popup-container">
        <div class="center">
            <button id="popup-exit" class="btn">X</button>
            <div id="popup-content">
                <div class="image-container">
                    <img id="product_img" src="" alt="Product Image">
                </div>
                <div class="text-container">
                    <p id="product_name"></p>
                    <p id="product_price"></p>
                    <p id="product_desc"></p>
                </div>
                <div class="number">
                    <button class="minus" onclick="minus()">-</button>
                    <input type="text" value="1" id="txtQuantity"/>
                    <button class="plus" onclick="add()">+</button>
                </div>
                <p id="lblPrice">price: </p>
                <div class="button-container">
                    <button id="btnAddToCart" onclick="addToCart()">Add to cart</button>
                    <button id="buyNow">Buy now</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- contact info -->
    <div class="address-container" id="address-container">
        <div class="center">
            <h2>Delivery Information</h2>
            <div class="flex-delivery">
                <div class="information">
                    <div class="form-group">
                        <label for="firstname">First Name:</label>
                        <input type="text" id="firstname" name="firstname" required>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name:</label>
                        <input type="text" id="lastname" name="lastname" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact Number:</label>
                        <input type="tel" id="contact" name="contact" required>
                    </div>
                </div>
    
                <div class="modeOfPayment">
                    <div class="form-group">
                        <label for="address">Home Address:</label>
                        <textarea id="address" name="address" rows="1" required></textarea>
                    </div>
                    <label for="paymentMethod">Select Payment Method:</label>
                    <select id="paymentMethod" name="paymentMethod" onchange="handlePaymentMethod()">
                        <option class="option" value="cash" style="height: 40px;">Cash on Delivery</option>
                        <option class="option" value="ewallet">E-Wallet</option>
                        <option class="option" value="creditcard">Credit Card</option>
                        <option class="option" value="onlinebanking">Online Banking</option>
                    </select>
                    <div id="paymentDetails">
                        <!-- Payment details fields will be dynamically added here -->
                    </div>
                </div>
            </div>
            <input type="submit" id="btnAddress" onclick="popupOrderSuccess()">
        </div>
    </div>

    <!-- modal buy now -->
    <div id="buynow-container">
        <div class="center">
            <div class="card-buynow">
                <div class="header-buynow">
                    <div class="image">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                            <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="#000000"
                                    d="M20 7L9.00004 18L3.99994 13"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="content">
                        <span class="title">Order validated</span>
                        <p class="message">Thank you for your purchase. you package will be delivered within 2 days of your
                            purchase
                        </p>
                    </div>
                    <div class="actions">
                        <button type="button" id="btnOk">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <!-- about -->
    <link rel="stylesheet" href="css/about.css">
    <a name="about"></a>
    <div class="about-container">
        <div class="image-1">

        </div>
        <div class="image-2"></div>
        <div class="image-3"></div>
        <div class="text-container">
            <h1>About us</h1>
            <p>Welcome to our sportswear haven! At "DEKATALON", we’re passionate about helping athletes and fitness enthusiasts
            perform at their best. Whether you’re a seasoned pro or just starting your fitness journey, we’ve got you covered. Our
            mission is simple: to provide top-quality sportswear and equipment that empowers you to conquer any challenge.</p>
        </div>
    </div>
    <!-- end about -->

    <!-- contact -->
    <link rel="stylesheet" href="css/contact.css">
    <a name="contact"></a>
    <div class="contact-container">

        <div id="contact" class="contact segments">
            <div class="container">
                <div class="box-content">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="content-left">
                                <div class="section-title section-title-left">
                                    <h3>Contact Me</h3>
                                </div>
                                <h2>Realize your dream with us</h2>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="content-right">
                                <!-- <form action="#" class="contact-form" id="contact-form" method="post"> -->
                                    <div class="row">
                                        <div class="col">
                                            <div id="first-name-field">
                                                <input type="text" placeholder="First Name" class="form-control"
                                                    name="form-name">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div id="last-name-field">
                                                <input type="text" placeholder="Last Name" class="form-control"
                                                    name="form-name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div id="email-field">
                                                <input type="email" placeholder="Email Address" class="form-control"
                                                    name="form-email">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div id="subject-field">
                                                <input type="text" placeholder="Subject" class="form-control"
                                                    name="form-subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div id="message-field">
                                                <textarea cols="30" rows="5" class="form-control" id="form-message"
                                                    name="form-message" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="button" id="submit" name="submit">Send Message</button>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end contact -->

    <!-- Site footer -->
    <link rel="stylesheet" href="css/footer.css">
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p class="text-justify"> <i>CODE WANTS TO BE SIMPLE </i> is an initiative to help the
                        upcoming programmers with the code. Focuses on providing the most efficient code or
                        snippets as the code wants to be simple. We will help programmers build up concepts in different
                        programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL
                        and Algorithm.</p>
                </div>
    
                <div class="col-xs-6 col-md-3">
                    <h6>Categories</h6>
                    <ul class="footer-links">
                        <li><a href="">C</a></li>
                        <li><a href="">UI Design</a></li>
                        <li><a href="">PHP</a></li>
                        <li><a href="">Java</a></li>
                        <li><a href="">Android</a></li>
                        <li><a href="">Templates</a></li>
                    </ul>
                </div>
    
                <div class="col-xs-6 col-md-3">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="">About Us</a></li>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">Contribute</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2024 All Rights Reserved by
                        <a href="#">Francis Luis Rances</a>.
                    </p>
                </div>
    
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>