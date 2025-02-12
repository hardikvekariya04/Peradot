<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peradot</title>
    <link rel="icon" type="image/png" href="img/logo/sm-logo.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>

    <div id="pageloader" class="pageloader is-left-to-right is-theme"></div>
    <div id="infraloader" class="infraloader is-active"></div>    
    <div class="roadmap-wrapper">
        <!-- Landing page Hero -->
        <section class="hero is-medium">
            <div class="hero-head">
    
                <!-- Cloned navbar -->
                <!-- Cloned navbar that comes in on scroll -->
                <nav x-data="initNavbar()"  x-on:scroll.window="scroll()" id="navbar-clone" class="navbar is-fixed is-dark" :class="{
                        'is-active': scrolled,
                        '': !scrolled
                    }">
                    <div class="container">
                        <!-- Brand -->
                        <div class="navbar-brand">
                            <a href="index.php" class="navbar-item">
                                <img class="" src="img/logo/logo.png" alt="">
                                <span class="brand-name">Peradot</span>
                            </a>
                            <!-- Responsive toggle -->
                            <div class="navbar-burger" @click="openMobileMenu()">
                                <div class="menu-toggle">
                                    <span class="icon-box-toggle" :class="{
                                            'active': mobileOpen,
                                            '': !mobileOpen
                                        }">
                                        <span class="rotate">
                                            <i class="icon-line-top"></i>
                                            <i class="icon-line-center"></i>
                                            <i class="icon-line-bottom"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Menu -->
                        <div id="cloneNavbarMenu" class="navbar-menu" :class="{
                                'is-active': mobileOpen,
                                '': !mobileOpen
                            }">
                            <div class="navbar-end">
                                <!-- Menu item -->
                                
                                <!-- Menu item -->
                                <div class="navbar-item is-nav-link">
                                    <a class="is-centered-responsive" href="index.php#ico">Ico</a>
                                </div>
                                <!-- Menu item -->
                                <div class="navbar-item is-nav-link">
                                    <a class="is-centered-responsive" href="index.php#perashop">shop</a>
                                </div>
                                <!-- Menu item -->
                                <div class="navbar-item is-nav-link">
                                    <a class="is-centered-responsive" href="">Roadmap</a>
                                </div>
 
                                <!-- Menu item -->
                                
                                <!-- Sign up -->
                                <div class="navbar-item is-nav-link">
                                    <a href="#" class="button k-button k-primary raised has-gradient slanted">
                                        <span class="text">Register</span>
                                        <span class="front-gradient"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- /Cloned navbar -->
                <!-- Static navbar -->
                <!-- Static navbar -->
                <nav x-data="initNavbar()" class="navbar is-light" :class="{
                        'is-dark-mobile': mobileOpen,
                        '': !mobileOpen
                    }">
                    <div class="container">
                        <!-- Brand -->
                        <div class="navbar-brand">
                            <a href="index.php" class="navbar-item">
                                <img class="" src="img/logo/logo.png" alt="">
                                <span class="brand-name">Peradot</span>
                            </a>
                            <!-- Responsive toggle -->
                            <div class="navbar-burger" @click="openMobileMenu()">
                                <div class="menu-toggle">
                                    <span class="icon-box-toggle" :class="{
                                            'active': mobileOpen,
                                            '': !mobileOpen
                                        }">
                                        <span class="rotate">
                                            <i class="icon-line-top"></i>
                                            <i class="icon-line-center"></i>
                                            <i class="icon-line-bottom"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Menu -->
                        <div id="navbarMenu" class="navbar-menu light-menu" :class="{
                                'is-active': mobileOpen,
                                '': !mobileOpen
                            }">
                            <div class="navbar-end">
                                <!-- Menu item -->
                                
                                <!-- Menu item -->
                                <div class="navbar-item is-nav-link">
                                    <a class="is-centered-responsive" href="index.php#ico">Ico</a>
                                </div>
                                <!-- Menu item -->
                                <div class="navbar-item is-nav-link">
                                    <a class="is-centered-responsive" href="index.php#perashop">shop</a>
                                </div>
                                <!-- Menu item -->
                                <div class="navbar-item is-nav-link">
                                    <a class="is-centered-responsive" href="roadmap.php">Roadmap</a>
                                </div>

                                <!-- Menu item -->
                                
                                <!-- Sign up -->
                                <div class="navbar-item">
                                    <a href="#" class="button k-button k-primary raised has-gradient slanted">
                                        <span class="text">Register</span>
                                        <span class="front-gradient"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- /Static navbar -->
            </div>
    
            <div class="hero-body has-text-centered">
                <div class="columns">
                    <div class="column is-6 is-offset-3">
                        <div class="roadmap-image">
                            <img src="img/illustrations/world.svg">
                        </div>
                        <h1 class="title is-2 is-light is-semibold is-spaced main-title">Peramap Roadmap</h1>
                        <h2 class="subtitle is-5 is-light is-thin">
                            Peradot brought to the next level. Join our ICO for supercharged rates.
                        </h2>
                        <!-- CTA -->
                        <p>
                            <a href="#roadmap" class="button k-button k-primary raised has-gradient is-fat is-bold">
                                <span class="text">More details</span>
                                <span class="front-gradient"></span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    
        <section x-data="initRoadmap()" x-init="setupRoadmap()" id="roadmap" class="main-timeline">
            <ul>
                <li>
                    <div>
                        <span class="item-title">Step-1</span>
                        <span class="item-content">
                            Project Planning and Research Consultation with Industry Experts Website Version 1 launch                        <span class="more">
                            <i data-feather="file-text"></i>
                            <a href="data/whitepaper.pdf">Whitepaper</a>
                        </span>
                    </div>
                </li>
                <li>
                    <div>
                        <span class="item-title">Step-2</span>
                        <span class="item-content">
                            Smart Contract Development Smart Contract Audit Main site updated WhitePaper Release Market Campaign launch
                        </span>
                    </div>
                </li>
                <li>
                    <div>
                        <span class="item-title">Step-3</span>
                        <span class="item-content">
                            Public Sale Authentication form created Community of supporters created AirDrop Announced Contest Announced
                        </span>
                    </div>
                </li>
                <li>
                    <div>
                        <span class="item-title">Step-4</span>
                        <span class="item-content">
                            Peradot Shopping Portal launch DEX listing (Uniswap, 1inchswap, Pancake swap...) More CEX listings (Binance, Houbi, Kucoin,Upbit...) CoinGecko & Coinmarketcap listing
                        </span>
                    </div>
                </li>
                <li>
                    <div>
                        <span class="item-title">Step-5</span>
                        <span class="item-content">
                            Peradot exchange launching Peradot Hard wallet More potential CEX listings Continuous Improvement on Peradot Platform and more Product release Introduction of more Unique Features to ecosystem Continuous Marketing expansion More Strategic Partnerships and Collaboration.
                        </span>
                    </div>
                </li>
                <li>
                    
        </section>
    
        <section>
            <div class="roadmap-end">
                <img src="img/illustrations/roadmap-end.svg" alt="">
            </div>
    
            <div class="follow-us">
    
                <div data-aos="fade-up" data-aos-delay="100" data-aos-offset="100" data-aos-easing="ease-out-quart">
                    <a href="#">
                        <svg aria-labelledby="simpleicons-gitlab-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.955 13.587l-1.342-4.135-2.664-8.189c-.135-.423-.73-.423-.867 0L16.418 9.45H7.582L4.919 1.263C4.783.84 4.185.84 4.05 1.26L1.386 9.449.044 13.587c-.121.375.014.789.331 1.023L12 23.054l11.625-8.443c.318-.235.453-.647.33-1.024"/>
                        </svg>
                    </a>
                </div>
    
                <div data-aos="fade-up" data-aos-delay="200" data-aos-offset="100" data-aos-easing="ease-out-quart">
                    <a href="#">
                        <svg aria-labelledby="simpleicons-telegram-icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M9.028 20.837c-.714 0-.593-.271-.839-.949l-2.103-6.92L22.263 3.37"/>
                            <path d="M9.028 20.837c.552 0 .795-.252 1.105-.553l2.941-2.857-3.671-2.214"/>
                            <path d="M9.403 15.213l8.89 6.568c1.015.56 1.748.271 2-.942l3.62-17.053c.372-1.487-.564-2.159-1.534-1.72L1.125 10.263c-1.45.582-1.443 1.392-.264 1.753l5.455 1.7L18.94 5.753c.595-.36 1.143-.167.694.232"/>
                        </svg>
                    </a>
                </div>
    
                <div data-aos="fade-up" data-aos-delay="300" data-aos-offset="100" data-aos-easing="ease-out-quart">
                    <a href="#">
                        <svg aria-labelledby="simpleicons-messenger-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 0C5.373 0 0 4.974 0 11.111c0 3.498 1.744 6.614 4.469 8.654V24l4.088-2.242c1.092.3 2.246.464 3.443.464 6.627 0 12-4.975 12-11.11S18.627 0 12 0zm1.191 14.963l-3.055-3.26-5.963 3.26L10.732 8l3.131 3.259L19.752 8l-6.561 6.963z"/>
                        </svg>
                    </a>
                </div>
    
                <div data-aos="fade-up" data-aos-delay="400" data-aos-offset="100" data-aos-easing="ease-out-quart">
                    <a href="#">
                        <svg aria-labelledby="simpleicons-slack-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.879 10.995l1.035 3.085 3.205-1.074-1.035-3.074-3.205 1.08v-.017z"/>
                            <path d="M18.824 14.055l-1.555.521.54 1.61c.218.65-.135 1.355-.786 1.574-.15.045-.285.067-.435.063-.511-.015-.976-.338-1.155-.849l-.54-1.607-3.21 1.073.539 1.608c.211.652-.135 1.358-.794 1.575-.15.048-.285.067-.435.064-.51-.015-.976-.34-1.156-.85l-.539-1.619-1.561.524c-.15.045-.285.061-.435.061-.511-.016-.976-.345-1.155-.855-.225-.66.135-1.364.78-1.575l1.56-.525L7.5 11.76l-1.551.525c-.141.048-.285.066-.428.064-.495-.016-.975-.338-1.141-.848-.209-.65.135-1.354.796-1.574l1.56-.52-.54-1.605c-.21-.654.136-1.359.796-1.575.659-.22 1.363.136 1.574.783l.539 1.608L12.3 7.544l-.54-1.605c-.209-.645.135-1.35.789-1.574.652-.211 1.359.135 1.575.791l.54 1.621 1.555-.51c.651-.219 1.356.135 1.575.779.218.654-.135 1.359-.784 1.575l-1.557.524 1.035 3.086 1.551-.516c.652-.211 1.358.135 1.575.795.22.66-.135 1.365-.779 1.574l-.011-.029zm4.171-5.356C20.52.456 16.946-1.471 8.699 1.005.456 3.479-1.471 7.051 1.005 15.301c2.475 8.245 6.046 10.17 14.296 7.694 8.245-2.475 10.17-6.046 7.694-14.296z"/>
                        </svg>
                    </a>
                </div>
    
                <div data-aos="fade-up" data-aos-delay="500" data-aos-offset="100" data-aos-easing="ease-out-quart">
                    <a href="#">
                        <svg aria-labelledby="simpleicons-linkedin-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </section>
    
    </div>
    <footer class="krypton-footer">
        <div class="container">
            <!-- Logo -->
            <div class="footer-logo">
                <a href="#">
                    <img class="" src="img/logo/logo.png" alt="">
                    <div class="brand-name">Peradot</div>
                    <div class="brand-subtitle"></div>
                </a>
            </div>
            
            <!-- Columns -->
            <div class="columns footer-columns is-vcentered">
                <div class="column is-4">
                    <!-- Links group -->
                    <ul class="footer-links">
                        
    
                        <li>
                            <a href="index.php#ico">ICO</a>
                        </li>
    
                        <li>
                            <a href="index.php#perashop">Shop</a>
                        </li>
                    </ul>
                </div>
                <!-- Newsletter -->
                <div class="column is-4">
                    <div class="subscribe-block">
                        <form>
                            <!-- Field -->
                            <div class="control">
                                <!-- Special input -->
                                <input class="krypton-subscribe-input" type="email" name="email" placeholder="">
                                <button class="subscribe-button">
                                    <span>Subscribe</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Links group -->
                <div class="column is-4">
                    <ul class="footer-links">
                        <li>
                            <a href="roadmap.php">roadmap</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Copyright -->
            <p class="k-copyright">© 2022 | Peradot. All Rights Reserved</p>
            <br>
            <!-- Made by -->
            <p class="coded-by">By Peradot Foundation.</p>
        </div>
        
        <!-- Absolute image -->
        <img class="solar-system" src="img/bg/solar.svg" alt="">
    </footer>    <!-- Back To Top Button -->
    <div x-data="initBackToTop()" x-on:scroll.window="scroll($event)" @click="goTop($event)" id="backtotop"><a href="javascript:" :class="{
        'visible': scrolled,
        '': !scrolled
    }"></a></div>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="./js/bundle.js"></script>

</body>

</html>