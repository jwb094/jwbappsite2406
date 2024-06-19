    <?php ?>
    <!doctype html>
    <html class="no-js" lang="">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="public/dist/css/projectstyle.css">
        <meta name="description" content="">

        <meta property="og:title" content="">
        <meta property="og:type" content="">
        <meta property="og:url" content="">
        <meta property="og:image" content="">
        <meta property="og:image:alt" content="">

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/icon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="icon.png">

        <link rel="manifest" href="site.webmanifest">
        <meta name="theme-color" content="#fafafa">
    </head>

    <body>
        <nav class="l-container hidden">
            <div class="row">
                <div class="col-xs-12 col-md-4">LOGO</div>
                <div class="col-xs-12 col-md-4">
                    <ul class="flex flex-col md.flex-row">
                        <li> menu item 1 </li>
                        <li> menu item 2 </li>
                        <li> menu item 3 </li>
                        <li> menu item 4 </li>
                        <li> menu item 5 </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-4 flex justify-content-end">ICONS</div>
            </div>
        </nav>
        <main>
            <?php
            $sectionTitle1 = "Lorem ipsum Title 1";
            $sectionTitle2 = "Lorem ipsum Title 2";
            $sectionTitle3 = "Lorem ipsum Title 3";
            $sectionTitle4 = "Lorem ipsum Title 4";
            $context = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum voluptatibus nemo cumque odio accusantium. Dicta, commodi voluptas fugiat nostrum itaque laborum voluptate corporis adipisci nulla error suscipit libero nesciunt. Magnam!";
            $footerContent1 = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum voluptatibus nemo cumque odio accusantium. Dicta, commodi voluptas fugiat nostrum itaque laborum";
            $footerContent2 = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum voluptatibus nemo cumque odio accusantium. Dicta, commodi voluptas fugiat nostrum itaque laborum";
            $testominalscontext = "Lorem ipsum dolor sit amet consectetur, adipisicing elit."
            // Array of colors

            ?>

            <section data-component-hero class="h-50vh" id="hero">
                
                    <div class="border-1 border-solid border-black flex flex-col md.justify-content-center md.align-content-center md.flex-wrap py-56 md.py-48 h-100p">
                        <div class="l-container | h-100p">
                            <div class="row | flex-row justify-content-center md.justify-content-unset h-100p">
                                <div class="col-xs-12 | text-center">
                                    <h1><?= $sectionTitle1 ?></h1>
                                </div>
                                <div class="col-xs-12">
                                    <p><?= $context ?></p>
                                </div>


                                <div class="col-xs-12 | text-center">
                                    <button>Play</button>
                                </div>
                                <div class="col-xs-12 mt-auto | text-center">
                                    <a href="">CTA</a>
                                </div>
                            </div>
                            <!-- <div class="row | flex flex-col">
                            <div>TOP</div>
                            <div>MID</div>
                            <div>BTM</div>
                            <div>BTM</div>
                            </div> -->
                            <!-- <div class="row">
                                <div>MID</div>
                                </div>
                                <div class="row">
                                    <div>BTM</div>
                                    </div>
                                    <div class="row">
                                        <div>BTM</div>
                                        </div> -->
                                <!-- <div class="col-xs-12 col-md-4 | mb-auto">
                                    <h1><?= $sectionTitle1 ?></h1>
                                    <p><?= $context ?></p>
                                </div>
                                <div class="col-xs-12 col-md-4">Middle
                                    <button>Play</button>
                                </div>
                                <div class="col-xs-12 col-md-4"><a href="">CTA</a></div> -->
                      
                    </div>
                </div>
            </section>
            <section data-component-download-now class="" id="download-now">
                <div class="l-container">
                    <div class="row">
                        <div class="col-xs-12 col-md-8">
                            <h2><?= $sectionTitle2 ?></h2>
                            <p><?= $context ?></p>
                            <a href="">CTA</a>
                        </div>
                    </div>
                </div>
            </section>
            <section data-component-testmonials class="" id="testmonials">
                <div class="l-container">
                    <div class="row ">
                        <div>
                            <img src="" alt="">
                            <p>testominalscontext</p>
                        </div>
                        <div> <img src="" alt="">
                            <p>testominalscontext</p>
                        </div>
                        <div> <img src="" alt="">
                            <p>testominalscontext</p>
                        </div>
                    </div>
                </div>
            </section>
            <section data-component-features class="" id="features">
                <div class="l-container">
                    <div class="grid grid-cols-1 md.grid-cols-2 gap-14">
                        <div class="">
                            <h3><?= $sectionTitle3 ?></h3>
                            <p><?= $context ?></p>
                        </div>
                        <div class="">
                            <h3><?= $sectionTitle3 ?></h3>
                            <p><?= $context ?></p>
                        </div>
                        <div class="">
                            <h3><?= $sectionTitle3 ?></h3>
                            <p><?= $context ?></p>
                        </div>
                        <div class="">
                            <h3><?= $sectionTitle3 ?></h3>
                            <p><?= $context ?></p>
                        </div>
                    </div>


                    <div>
                        <a href="#">Try Now Demo</a>
                    </div>
                </div>

            </section>
            <section data-component-design class="" id="">
                <div class="l-container">
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="slider">
                                <!-- Slider Item 1::START-->
                                <ul>
                                    <li class="slider-item-1">
                                        <div class="col-xs-12 col-md-4">
                                            <div class="img_bloc">
                                                <img src="" alt="">
                                                <div>img content</div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-4">
                                            <div class="img_bloc">
                                                <img src="" alt="">
                                                <div>img content</div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-4">
                                            <p> content</p>
                                        </div>
                                    </li>
                                    <li class="slider-item-2">
                                        <div class="col-xs-12 col-md-4">
                                            <div class="img_bloc">
                                                <img src="" alt="">
                                                <div>img content</div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-4">
                                            <div class="img_bloc">
                                                <img src="" alt="">
                                                <div>img content</div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-4">
                                            <p> content</p>
                                        </div>
                                    </li>
                                    <li class="slider-item-3">
                                        <div class="col-xs-12 col-md-4">
                                            <div class="img_bloc">
                                                <img src="" alt="">
                                                <div>img content</div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-4">
                                            <div class="img_bloc">
                                                <img src="" alt="">
                                                <div>img content</div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-4">
                                            <p> content</p>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Add your site or application content here -->
        <p class="l-container">Welcome to world! This is HTML5 Boilerplate.</p>
        <script src="public/dist/js/app.js"></script>

        <?php
        // Array of footer links
        $footerLinks = ["Home", "Work", "Contact", "People",];
        $socialLinks = ["Fb", "Ln", "X", "Insta"];
        ?>
        <footer class>
            <div class="l-container">
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                    <p><?=$footerContent1 ?> </p>
                    </div>
                    <div class="col-xs-12 col-md-4 ">
                            <p><?=$footerContent2 ?> </p>
                    </div>
                    <div class="col-xs-12 col-md-2 col-xs-offset-2 flex justify-content-end">
                        <ul class="flex flex-col md.flex-row justify-content-between">

                            <?php
                            // Loop through colors and create an option for each color
                            foreach ($socialLinks as $slink) {
                                echo "<li class=''>$slink</li>";
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12"> <img src="" alt=""> </div>
                        <h3>Lorem, ipsum dolor.</h3>
                    </div>

        </footer>
    </body>

    </html>