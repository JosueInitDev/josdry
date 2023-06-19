<?php
require_once('includes/constants.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('includes/head.php') ?>
</head>
<body>
    <?php include('includes/navbar.php'); ?>


    <!-- waves -->
    <div class="waves">
        <div id="particles-foreground"></div>
        <!--Content before waves//-->
        <div class="inner-header flex">
            <!--Just the logo//-->
            <svg version="1.1" class="logo" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" xml:space="preserve">
                <path fill="#FFFFFF" stroke="#000000" stroke-width="10" stroke-miterlimit="10" d="M57,283" />
                <g><path fill="#fff"
                d="M250.4,0.8C112.7,0.8,1,112.4,1,250.2c0,137.7,111.7,249.4,249.4,249.4c137.7,0,249.4-111.7,249.4-249.4
                C499.8,112.4,388.1,0.8,250.4,0.8z M383.8,326.3c-62,0-101.4-14.1-117.6-46.3c-17.1-34.1-2.3-75.4,13.2-104.1
                c-22.4,3-38.4,9.2-47.8,18.3c-11.2,10.9-13.6,26.7-16.3,45c-3.1,20.8-6.6,44.4-25.3,62.4c-19.8,19.1-51.6,26.9-100.2,24.6l1.8-39.7		c35.9,1.6,59.7-2.9,70.8-13.6c8.9-8.6,11.1-22.9,13.5-39.6c6.3-42,14.8-99.4,141.4-99.4h41L333,166c-12.6,16-45.4,68.2-31.2,96.2	c9.2,18.3,41.5,25.6,91.2,24.2l1.1,39.8C390.5,326.2,387.1,326.3,383.8,326.3z" />
                </g>
            </svg>
            <h1>L'IT, notre Passion</h1>
        </div>
        <h5 class="cIsking">Obtenez le site web / application que vous méritez !</h5>
    
        <!--Waves Container-->
        <div>
            <svg class="waves-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
            </svg>
        </div>
        <!--//Waves Container-->
    </div>
    <!-- //waves -->

    <!-- whatWeDo -->
    <div class="whatWeDo" id="services">
        <center><h1>Nous offrons ces services</h1></center>
        <p></p>
        <article class="wrapper">
            <div class="marquee">
                <div class="marquee__group">
                    <div class="box"><h1>Site Vitrine</h1></div>
                    <div class="box"><h1>Site Ecommerce</h1></div>
                    <div class="box"><h1>Site Entreprise</h1></div>
                    <div class="box"><h1>Restaurant</h1></div>
                    <div class="box"><h1>Tout Commerce</h1></div>
                    <div class="box"><h1>Wordpress</h1></div>
                    <div class="box"><h1>Site Gouvernement</h1></div>
                </div>
                <div aria-hidden="true" class="marquee__group">
                    <div class="box"><h1>Site 3D maison</h1></div>
                    <div class="box"><h1>Site Ecommerce</h1></div>
                    <div class="box"><h1>Site Vitrine</h1></div>
                    <div class="box"><h1>Hotêl</h1></div>
                    <div class="box"><h1>Tout Commerce</h1></div>
                    <div class="box"><h1>Wordpress</h1></div>
                    <div class="box"><h1>Site Gouvernement</h1></div>
                </div>
            </div>
          
            <div class="marquee marquee--reverse">
                <div class="marquee__group">
                    <div class="box"><h1>Application mobile</h1></div>
                    <div class="box"><h1>Porfolio</h1></div>
                    <div class="box"><h1>Mode</h1></div>
                    <div class="box"><h1>Carte de visite</h1></div>
                    <div class="box"><h1>Poster</h1></div>
                    <div class="box"><h1>Logo</h1></div>
                    <div class="box"><h1>Kakemmono</h1></div>
                </div>
          
                <div aria-hidden="true" class="marquee__group">
                    <div class="box"><h1>Couverture livre</h1></div>
                    <div class="box"><h1>Application android</h1></div>
                    <div class="box"><h1>Application iPhone</h1></div>
                    <div class="box"><h1>Ecoles</h1></div>
                    <div class="box"><h1>CV</h1></div>
                    <div class="box"><h1>Machine Learning</h1></div>
                    <div class="box"><h1>Tout design</h1></div>
                </div>
            </div>
        </article>
    </div>
    <!-- //whatWeDo -->
    
    <!-- colorizedBreak -->
    <div class="colorizedBreak" id="exemple1">
        <div class="content">
            <h1 class="title">Réalisez-le
                <div class="aurora">
                    <div class="aurora__item"></div>
                    <div class="aurora__item"></div>
                    <div class="aurora__item"></div>
                    <div class="aurora__item"></div>
                </div>
            </h1>
        </div>
    </div>
    <!-- //colorizedBreak -->

    <!-- mountain -->
    <div class="mountain" id="mountain">
        <section id="top">
            <img src="https://aryan-tayal.github.io/Mountains-Parallax/bg.jpg" id="bg" />
            <h2 id="text">Commandez</h2>
            <img src="https://aryan-tayal.github.io/Mountains-Parallax/man.png" id="man" />
            <img src="https://aryan-tayal.github.io/Mountains-Parallax/clouds_1.png" id="clouds_1" />
            <img src="https://aryan-tayal.github.io/Mountains-Parallax/clouds_2.png" id="clouds_2" />
            <img src="https://aryan-tayal.github.io/Mountains-Parallax/mountain_left.png" id="mountain_left" />
            <img src="https://aryan-tayal.github.io/Mountains-Parallax/mountain_right.png" id="mountain_right" />
        </section>
        <section id="sec">
            <h2 class="mah2">Vous définissez votre besoin,</h2>
            <h2 class="mah2" style="float:right">nous nous occupons du reste !</h2>
        </section>
    </div>
    <!-- //mountain -->

    <!-- book -->
    <div class="book">
        <div class="imgLoader"></div>
        <div class="container">
            <h1 class="title">
                Un travail de<br>pro
            </h1>

            <div class="book">
                <div class="gap"></div>
                <div class="pages">
                <div class="page"></div>
                <div class="page"></div>
                <div class="page"></div>
                <div class="page"></div>
                <div class="page"></div>
                <div class="page"></div>
                </div>
                <div class="flips">
                <div class="flip flip1">
                    <div class="flip flip2">
                    <div class="flip flip3">
                        <div class="flip flip4">
                        <div class="flip flip5">
                            <div class="flip flip6">
                            <div class="flip flip7"></div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <a href="<?php echo $site_url ?>/contact"><button class="btn btn-dark" style="padding:5px 30px; border-radius:25px">Demander un devis pour mon projet</button></a>
    </div>
    <!-- //book -->

    <!-- oldPhone -->
    <div class="oldPhone" id="exemple2">
        <div class="screen">  
            <div class="screen-image"></div>  
            <div class="screen-overlay"></div>  
            <div class="screen-content">
                <i class="screen-icon fa-brands fa-codepen"></i>
                <div class="screen-user">
                    <span class="name" data-value="CODEPEN">Photograph ?</span>
                    <p class="link" href="https://youtube.com/@Hyperplexed" target="_blank">Faites connaitre votre art</p>
                    <a href="<?php echo $site_url ?>/contact"><button class="btn btn-sm btn-light">Je demande un devis</button></a>
                </div>
            </div>
        </div>
        
        <div id="blob"></div>
        <div id="blur"></div>
    </div>
    <!-- //oldPhone -->

    <!-- restaurant -->
    <div class="restaurant" id="exemple3">
        <p><br><br><br></p>
        <h2 class="mah2">Dans la restauration ?</h2>
        <h2 class="mah2" style="float:right">Nous vous construisons le rêve</h2>
        <main>
            <div class="container">
                <div class="top">
                    <img class="header" src="img/header.png" />
                </div>
                <div class="content">
                    <div class="info">
                        <h2>Votre Restaurant</h2>
                        <nav>
                            <navItem>
                                <span>Menu</span>
                            </navItem>
                            <navItem>
                                <span>Spécialités</span>
                            </navItem>
                            <navItem>
                                <span>Promotions</span>
                            </navItem>
                            <button>Commander</button>
                        </nav>
                    </div>
                    <div class="grid">
                        <div class="item-holder">
                            <div class="item">
                                <img src="img/smoothie.png" />
                                <div class="label">label</div>
                            </div>
                        </div>
                        <div class="item-holder">
                            <div class="item">
                                <img src="img/grapefruit.png" />
                                <div class="label">label</div>
                            </div>
                        </div>
                        <div class="item-holder">
                            <div class="item">
                                <img src="img/dessert.png" />
                                <div class="label">label</div>
                            </div>
                        </div>
                        <div class="item-holder">
                            <div class="item">
                                <img src="img/strawberry.png" />
                                <div class="label">label</div>
                            </div>
                        </div>
                        <div class="item-holder">
                            <div class="item">
                                <img src="img/palala.png" />
                                <div class="label">label</div>
                            </div>
                        </div>
                        <div class="item-holder">
                            <div class="item">
                                <img src="img/icecream.png" />
                                <div class="label">label</div>
                            </div>
                        </div>
                        <div class="item-holder">
                            <div class="item">
                                <img src="img/pololo.png" />
                                <div class="label">label</div>
                            </div>
                        </div>
                        <div class="item-holder">
                            <div class="item">
                                <img src="img/mysteryfruit.png" />
                                <div class="label">label</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- //restaurant -->

    <!-- music -->
    <div class="music" id="exemple4">
        <h2 class="mah2">Vous êtes plus tôt musique ?</h2>
        <h2 class="mah2" style="float:right">Donnons vie à votre application de rève !</h2>
        <div class="container">
            <div class="bubble pink-bubble"></div>
            <div class="bubble blue-bubble"></div>
            <div class="bubble small-p-bubble"></div>
            <div class="bubble small-b-bubble"></div>
            <div class="wrapper">
                <div class="app-ui left-ui">
                    <div class="header">
                        <div class="discover">Votre projet</div>
                        <div class="menu-line"></div>
                    </div>
                    <div class="left-menu-bar">
                        <div class="playlist">
                            <div class="playlist-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 29">
                                <g
                                    fill="#FFF"
                                    fill-rule="evenodd"
                                    stroke="#10335C"
                                    stroke-width="3"
                                >
                                    <rect width="21" height="21" x="7" y="7" rx="5" />
                                    <rect width="21" height="21" x="1" y="1" rx="5" />
                                </g>
                                </svg>
                            </div>
                            <div class="ur-playlist">Ma playlist</div>
                        </div>
                        <div class="like-recent">
                            <div class="ur-playlist recent">Recent</div>
                            <div class="recent-detail"></div>
                            <div class="ur-playlist like">Like</div>
                        </div>
                    </div>
                    <div class="album-img">
                        <div class="relax">Relax</div>
                    </div>
                    <div class="flowers-img"></div>
                    <div class="music-list">
                        <div class="song">
                            <div class="song-img">
                                <img src="https://source.unsplash.com/featured/300x201&1" />
                            </div>
                            <div class="song-detail">
                                <div class="song-name">Sunset</div>
                                <div class="artist">The xx</div>
                            </div>
                        </div>
                        <div class="song">
                            <div class="song-img">
                                <img src="https://source.unsplash.com/featured/300x201&2" />
                            </div>
                            <div class="song-detail">
                                <div class="song-name">The pursuit of happiness</div>
                                <div class="artist">Beyries</div>
                            </div>
                        </div>
                        <div class="song">
                            <div class="song-img">
                                <img src="https://source.unsplash.com/featured/300x201&3" />
                            </div>
                            <div class="song-detail">
                                <div class="song-name">Run</div>
                                <div class="artist">Daughter</div>
                            </div>
                        </div>
                    </div>
                    <div class="player-bg">
                    </div>
                    <div class="player-info">
                        <div class="player-cover">
                            <img src="https://source.unsplash.com/featured/300x201&4" />
                            <div class="pointer"></div>
                        </div>
                        <div class="song-detail">
                            <div class="song-name">Ensemble</div>
                            <div class="artist play-artist">Audio Library</div>
                        </div>
                        <svg
                            fill="none"
                            stroke="#063064"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            class="blue-heart"
                            viewBox="0 0 24 24"
                        >
                        <path
                            d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"
                        />
                        </svg>
                    </div>
                    <div class="nav">
                        <div class="nav-first">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                class="feather feather-home"
                                viewBox="0 0 24 24"
                            >
                                <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                            </svg>
                            <svg
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                class="css-i6dzq1"
                                viewBox="0 0 24 24"
                            >
                                <circle cx="11" cy="11" r="8" />
                                <path d="M21 21l-4.35-4.35" />
                            </svg>
                            <svg
                                style="width: 15px; height: 15px;"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 29 29"
                            >
                                <g
                                fill="#FFF"
                                fill-rule="evenodd"
                                stroke="currentColor"
                                stroke-width="3"
                                >
                                <rect width="21" height="21" x="7" y="7" rx="5" />
                                <rect width="21" height="21" x="1" y="1" rx="5" />
                                </g>
                            </svg>
                            <svg
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                class="css-i6dzq1"
                                viewBox="0 0 24 24"
                            >
                                <path
                                d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"
                                />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="app-ui right-ui">
                    <div class="play-action">
                        <div class="half-arrow">
                            <div class="line">
                                <div class="other-line"></div>
                            </div>
                        </div>
                        <div class="what-play">Lecture en cours</div>
                        <div class="double-dot">
                            <div class="dot"></div>
                            <div class="dot"></div>
                        </div>
                    </div>
                    <div class="app-ui inside-right">
                        <div class="bigPlay">
                            <img src="https://source.unsplash.com/featured/300x201&5" />
                            <div class="grey-detail"></div>
                            <div class="grey-detail-sec"></div>
                            <button class="btn play-pause" id="play-pause">
                                <div class="icon-container">
                                    <div class="icon play bigger-play">
                                        <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 308.838 308.838"
                                        >
                                        <path
                                            fill="#063064"
                                            d="M269.394 139.638c-.4-.8-.8-1.2-1.2-1.6-.8-1.2-1.6-2-2.8-3.2-1.2-1.2-2.8-2.4-4-3.2l-91.6-63.2-92-63.6c-6-4.4-13.6-5.6-20.4-4.4s-13.2 5.2-17.2 11.2c-1.6 2.4-2.8 4.8-3.6 7.2-.8 2-1.2 4-1.2 6.4v256.4c0 7.6 3.2 14.4 8 19.2 4.4 4.8 11.2 8 18.8 8 3.2 0 6.4-.4 9.2-1.6 2.8-.8 5.2-2.4 7.6-4.4l90.8-62.8 91.2-63.2c.4-.4 1.2-.8 1.6-1.2 5.6-4.4 9.2-10.4 10.4-16.8 1.2-6.4 0-13.6-3.6-19.2zm-20 20.4l-92 63.6-90.4 62.4c-.4 0-.8.4-.8.4-.4.4-1.2.8-2 1.2-.8.4-1.2.4-2 .4-1.6 0-3.2-.8-4.4-1.6-1.2-1.2-1.6-2.8-1.6-4.4v-127.6h-.4v-126-1.6c0-.4 0-.8.4-1.2 0-.4.4-.8.4-1.2.4-.4.4-.4.4-.8.8-1.2 2.4-2 3.6-2 1.6-.4 2.8 0 4.4.8.4.4.8.4 1.2.8l91.2 63.2 91.6 63.2c.4.4.8.4.8.8.4.4.4.8.8.8.8 1.6 1.2 3.2 1.2 4.8-.4 1.6-1.2 3.2-2.4 4z"
                                            class="active-path"
                                            data-old_color="#000000"
                                            data-original="#000000"
                                        />
                                        </svg>
                                    </div>
                                </div>
                                <div class="icon-container">
                                    <div class="icon pause bigger-pause">
                                        <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 493.528 493.528"
                                        >
                                        <path
                                            fill="#063064"
                                            d="M178.064 0L166.04.248c-14.876 0-27.236 12.112-27.236 26.992v439.664c0 14.876 13.396 26.624 28.272 26.624h.084l10.976-.072c14.892 0 26.22-11.92 26.22-26.808V26.996C204.352 12.116 193.028 0 178.064 0zM328.584 0l-12.092.248c-14.88 0-27.3 12.112-27.3 26.992v439.664c0 14.876 13.708 26.624 28.58 26.624h.084l10.816-.072c14.88 0 26.052-11.92 26.052-26.808V26.996C354.72 12.116 343.548 0 328.584 0z"
                                            class="active-path"
                                            data-old_color="#000000"
                                            data-original="#000000"
                                        />
                                        </svg>
                                    </div>
                                </div>
                            </button>
                            <div class="song-detail right-detail">
                            <div class="song-name right-song">Ensemble</div>
                            <div class="artist play-artist right-artist">Audio Library</div>
                        </div>
                        <div class="line-wrapper">
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                            <div class="lines grey"></div>
                        </div>
                        <div class="second">
                            <div class="listened">0:39</div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 477.88 477.88">
                                <path fill="#063064" d="M468.46 1.8a17.06 17.06 0 00-15.3 0L9.44 223.69a17.07 17.07 0 004.58 32.05l176.1 32.03 32.04 176.11a17.07 17.07 0 0032.05 4.58L476.07 24.7a17.07 17.07 0 00-7.61-22.9z" class="active-path" data-old_color="#000000" data-original="#000000"/>
                            </svg>
                            <div class="listen">6:28</div>
                        </div>
                        <div class="left-bar-wrapper">
                            <svg class="addTo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000">
                                <path fill="#063064" d="M934 822H794v140c0 15.5-12.5 28-28 28s-28-12.5-28-28V822H598c-15.5 0-28-12.5-28-28s12.5-28 28-28h140V626c0-15.5 12.5-28 28-28s28 12.5 28 28v140h140c15.5 0 28 12.5 28 28s-12.5 28-28 28zM738 122c0-30.9-25.1-56-56-56H150c-30.9 0-56 25.1-56 56v756c0 30.9 25.1 56 56 56h364v56H122c-46.4 0-84-37.6-84-84V94c0-46.4 37.6-84 84-84h588c46.4 0 84 37.6 84 84v364h-56V122z"/>
                            </svg>
                            <svg class="menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000">
                                <path d="M977.8 524.5H22.3c-6.8 0-12.3-5.5-12.3-12.3v-24.5c0-6.7 5.5-12.3 12.3-12.3h955.5c6.8 0 12.3 5.5 12.3 12.3v24.5c-.1 6.8-5.6 12.3-12.3 12.3zm-49.1-294H757.2c-6.8 0-12.3-5.5-12.3-12.2v-24.5c0-6.8 5.5-12.3 12.3-12.3h171.5c6.8 0 12.3 5.5 12.3 12.3v24.5c0 6.7-5.5 12.2-12.3 12.2zm-294 0H71.3c-6.8 0-12.3-5.5-12.3-12.2v-24.5c0-6.8 5.5-12.3 12.3-12.3h563.5c6.8 0 12.3 5.5 12.3 12.3v24.5c-.1 6.7-5.6 12.2-12.4 12.2zm-563.4 539h171.5c6.8 0 12.2 5.5 12.2 12.2v24.5c0 6.8-5.5 12.3-12.2 12.3H71.3c-6.8 0-12.3-5.5-12.3-12.3v-24.5c0-6.7 5.5-12.2 12.3-12.2zm293.9 0h563.5c6.8 0 12.3 5.5 12.3 12.2v24.5c0 6.8-5.5 12.3-12.3 12.3H365.2c-6.8 0-12.3-5.5-12.3-12.3v-24.5c.1-6.7 5.6-12.2 12.3-12.2z"/>
                            </svg>
                            <svg class="heart" xmlns="http://www.w3.org/2000/svg" viewBox="0 -28 512 512">
                                <path fill="#EBC7E5" d="M471.383 44.578C444.879 15.832 408.512 0 368.973 0c-29.555 0-56.621 9.344-80.45 27.77C276.5 37.07 265.605 48.45 256 61.73c-9.602-13.277-20.5-24.66-32.527-33.96C199.648 9.344 172.582 0 143.027 0c-39.539 0-75.91 15.832-102.414 44.578C14.426 72.988 0 111.801 0 153.871c0 43.3 16.137 82.938 50.781 124.742 30.992 37.395 75.535 75.356 127.117 119.313 17.614 15.012 37.579 32.027 58.309 50.152A30.023 30.023 0 00256 455.516c7.285 0 14.316-2.641 19.785-7.43 20.73-18.129 40.707-35.152 58.328-50.172 51.575-43.95 96.117-81.906 127.11-119.305C495.867 236.81 512 197.172 512 153.867c0-42.066-14.426-80.879-40.617-109.289zm0 0" class="active-path" data-old_color="#000000" data-original="#000000"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div></div>
        </div>
        <audio style="display: none;" controls id="audio">
            <source src="img/Ensemble.mp3" type="audio/mp3">
            Your browser does not support the audio element .
        </audio>
    </div>
    <!-- //music -->

    <!-- room360dom -->
    <div class="room360dom" id="exemple5">
        <p><br><br><br></p>
        <h2 class="mah2">Dans l'immobilier ?</h2>
        <h2 class="mah2" style="float:right">Donnez à vos clients une visite 360 sans qu'ils se déplacent</h2>
        <img src="img/view360help.gif" class="room360help" alt="" title="Utiliser la souris pour regarder la pièce" style="height:70px">
        <p style="float: left;">NB : Utilisez la souris pour regarder autour de vous dans la pièce ci-dessous</p>
        <iframe src="room360.html" frameborder="0" class="room360"></iframe>
    </div>
    <!-- //room360dom -->

    <!-- itsnow -->
    <div class="itsnow">
        <script type="x-shader/x-vertex" id="vertexshader">
            attribute float size;
            attribute vec3 customColor;
            varying vec3 vColor;
          
            void main() {
                vColor = customColor;
                vec4 mvPosition = modelViewMatrix * vec4( position, 1.0 );
                gl_PointSize = size * ( 300.0 / -mvPosition.z );
                gl_Position = projectionMatrix * mvPosition;
            }
        </script>
        <script type="x-shader/x-fragment" id="fragmentshader"> 
            uniform vec3 color;
            uniform sampler2D pointTexture;
          
            varying vec3 vColor;
          
            void main() {
                gl_FragColor = vec4( color * vColor, 1.0 );
                gl_FragColor = gl_FragColor * texture2D( pointTexture, gl_PointCoord );
            }
        </script>
          
        <div id="magic"></div>
        <div class="playground">
            <div class="bottomPosition">
                <a href="#" target="_blank">
                    <svg class="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 278.8 278.8">
                        <circle fill="#000205" cx="139.4" cy="139.4" r="139.4" />
                        <g fill="none" stroke="#FFF" stroke-width="6.062" stroke-miterlimit="10">
                            <path d="M214 183.4l-74.6 43.1-75.5-43.6V95.8l75.5-43.5 75.4 43.5v59.8l-11.3 6.5z" />
                            <path d="M139.4 226.5l-18.8-38.2 18.8 10.8 75.4-43.5M63.9 95.8l75.3 43.6 75.6-43.6M139.2 139.4v59.7" />
                        </g>
                    </svg>
                </a><br>
                <a href="<?php echo $site_url ?>/contact"><button class="btn btn-lg btn-light">Demander un devis maintenant</button></a>
            </div>
        </div>
    </div>
    <!-- //itsnow -->

    <!-- photosStyled -->
    <div class="photosStyled" id="exemple6">
        <div class="texts">
            <h2 class="mah2">Quelque soit votre projet ...</h2>
            <h2 class="mah2" style="width:100%; text-align: right;">... dites nous, et nous le réalisons</h2>
            <p><br></p>
            <center><a href="#"><button class="btn btn-lg btn-light" style="border-radius:25px; padding:5px 20px"><b>Je demande un devis</b></button></a></center>
        </div>
        <div id="drag-container">
            <div id="spin-container">
                <img class="imgStyled" src="img/website0.jpg" alt="">
                <img class="imgStyled" src="img/website1.jpg" alt="">
                <img class="imgStyled" src="img/website2.jpg" alt="">
                <img class="imgStyled" src="img/website3.jpg" alt="">
                <img class="imgStyled" src="img/website4.jpg" alt="">
                <img class="imgStyled" src="img/website5.jpg" alt="">
                
                <a target="_blank" href="https://images.pexels.com/photos/139829/pexels-photo-139829.jpeg">
                    <img src="img/website6.jpg" alt="">
                </a>
          
                <p>Nous magnifions votre projet</p>
            </div>
            <div id="ground"></div>
        </div>
    </div>
    <!-- //photosStyled -->

    <?php
    include('includes/footer.php');
    include('includes/foot.php');
    ?>
</body>
</html>