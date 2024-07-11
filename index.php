    <?php ?>
    <!doctype html>
    <html class="no-js" lang="">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
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
            $contextSml = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum voluptatibus nemo";
            $contextMed = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum voluptatibus nemo cumque odio accusantium. Dicta, commodi";
            $contextLg = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum voluptatibus nemo cumque odio accusantium. Dicta, commodi voluptas fugiat nostrum itaque laborum voluptate corporis adipisci nulla error suscipit libero nesciunt. ";
            $contextXLg = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum voluptatibus nemo cumque odio accusantium. Dicta, commodi voluptas fugiat nostrum itaque laborum voluptate corporis adipisci nulla error suscipit libero nesciunt. Magnam!t nostrum itaque laborum voluptate corporis adipisci nulla error suscipit libero nesciunt. Magnam!";
            $footerContent1 = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum voluptatibus nemo cumque odio accusantium. Dicta, commodi voluptas fugiat nostrum itaque laborum";
            $footerContent2 = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum voluptatibus nemo cumque odio accusantium. Dicta, commodi voluptas fugiat nostrum itaque laborum";
            $testominalscontext = "Lorem ipsum dolor sit amet consectetur, adipisicing elit."
            // Array of colors

            ?>

            <section data-component-hero class="h-50vh" id="hero">

                <div class="border-1 border-solid border-black flex flex-col md.justify-content-center md.align-content-center md.flex-wrap py-56 md.py-48 h-100p">
                    <div class="l-container | h-100p">
                        <div class="row | flex-row justify-content-center md.justify-content-unset h-100p">
                            <!-- <div class="col-xs-12 | text-center">
                            
                            </div> -->
                            <div class="col-xs-12 col-md-12 | text-center | md.mt-72 mx-auto md.px-224">
                            <h1 class="heading | mt-auto text-4xl"><?= $sectionTitle1 ?></h1>
                                <p class="italic"><?= $contextLg ?></p>
                            </div>


                            <div class="col-xs-12 col-md-12 | text-center">
                                <!-- <button>Play</button> -->
                                <div class="modal flex justify-content-center align-items-center h-100p">
                                    <a class="flex justify-content-center video_modal_btn" href="#">
                                        <svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="currentColor" class="bi bi-play-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" fill="white"></path>
                                            <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z" fill="white"></path>
                                        </svg>
                                    </a>
                                    <div class="video-container">
                                        <span class="close">&#10006;</span>
                                        <video class="" src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" controls="controls"></video>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xs-12  col-md-2 | mt-auto  text-center">
                                <a class="c_btn c_btn--get_started | flex justify-content-center p-12 color-white mx-auto md.mx-0 w-50p md.w-100p md.w-100 radius-xs" href="#">Get Started</a>
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
                                    <p><?= $contextLg ?></p>
                                </div>
                                <div class="col-xs-12 col-md-4">Middle
                                    <button>Play</button>
                                </div>
                                <div class="col-xs-12 col-md-4"><a href="">CTA</a></div> -->

                    </div>
                </div>
            </section>
            <section data-component-download-now class="pt-64 pb-64" id="download-now">
                <div class="l-container">
                    <div class="row">
                        <div class="col-xs-12  col-md-8">
                            <h1 class="mb-24"><?= $sectionTitle2 ?></h1>
                            <div class=" flex flex-col  justify-content-between | mb-24 ">
                                <p class="leading-180 | mb-24"><?= $contextLg ?>
                                </p>
                                <p class="leading-180 | mb-24"><?= $contextLg ?>
                                </p>
                            </div>

                            <a class="border-4 border-white border-solid  px-96 py-12 w-6-12 mt-32 mb-24" href="#">Download Now</a>
                        </div>
                        <!-- <div class="hidden md.flex col-md-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16"> <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/> </svg>
                        </div> -->
                    </div>
                </div>
            </section>
            <section data-component-testmonials class="bg-red-500 py-96" id="testmonials">
                <div class="c-testmonials-bg">
                    <div class="l-container">
                        <div class="row ">
                            <div class="col-xs-12 col-md-12">
                                <div class="slider">
                                    <div class="c-testmonials-main-carousel">

                                        <?php
                                        for ($i = 1; $i <= 3; $i++) {

                                            echo "<div class='col-xs-12 col-md-12 w-100p c-testmonials-carousel-item' id='' class='c-testmonials-carousel-item-$i | flex flex-col justify-content-center align-content-center'>
                                            <img class='w-2-12 | mx-auto' src='https://placeholder.pics/svg/132x132' alt=''>
                                            <p class='mt-24  mx-auto text-center color-white text-6xl'>$testominalscontext </p>
                                        </div>";
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <section data-component-features class=" relative | py-96" id="features">
                <div class="row">
                    <div class="col-xs-12 col-md-12 text-center">
                        <div class="c-arrow-down absolute top-0 left-0 right-0">
                            <div class="arrow-down"></div>
                        </div>
                    </div>
                </div>
                <div class="l-container">
                    <div class="c-features-grid ">

                        <div class="c-features-grid__item-1">
                            <h3 id="" class="mb-24 feature-heading uppercase">Item 1</h3>
                            <p class="leading-180"> <?= $contextLg ?></p>
                        </div>
                        <div class="c-features-grid__item-2">
                            <h3 id="" class="mb-24 feature-heading uppercase"> Item 2</h3>
                            <p class="leading-180"> <?= $contextLg ?></p>
                        </div>
                        <div class="c-features-grid__item-3">
                            <div class="divider"></div>
                        </div>
                        <div class="c-features-grid__item-4">
                            <h3 id="" class="mb-24 feature-heading uppercase"> Item 3</h3>
                            <p class="leading-180"> <?= $contextLg ?></p>
                        </div>
                        <div class="c-features-grid__item-5">
                            <h3 id="" class="mb-24 feature-heading uppercase"> Item 4</h3>
                            <p class="leading-180"> <?= $contextLg ?></p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-2 | mx-auto mt-48">
                        <a class="flex justify-content-center p-12 bg-orange-200 color-white mx-auto md.mx-0 w-50p md.w-100p md.w-100 radius-xs" href="#">Try Demo</a>
                    </div>
                </div>

            </section>
            <section data-component-design class=" pt-96 pb-256" id="design">
                <div class="l-container">
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="slider">
                                <ul class="main-carousel c-design-carousel">
                                    <?php
                                    for ($i = 1; $i <= 3; $i++) {
                                        echo "  
                                        <li class='slider-item-$i | flex flex-col md.flex-row'>
                                            <div class='col-xs-12 col-md-4'>
                                                <div class='img_bloc'>
                                                    <img class='' src='https://placeholder.pics/svg/475x346' alt=''>
                                                    <div class='bg-white | py-48 px-24'>
                                                        <p class='bold color-gray-500 | mb-24'>Card Title $i</p>
                                                        <p class='italic gray-200'>Feature $i</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='col-xs-12 col-md-4 | [ mt-24 md.mt-0 ]'>
                                                <div class='img_bloc'>
                                                <img class='' src='https://placeholder.pics/svg/475x346' alt=''>
                                                    <div class='bg-white | p-48'>
                                                        <p class='bold color-gray-500 | mb-24'>Card Title $i</p>
                                                        <p class='italic gray-200'>  Feature $i</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='col-xs-12 col-md-4 | [ mt-24 md.mt-0 ]'>
                                                <h3 class='[ mt-24 md.mt-0 ] | [ text-5xl ultralight color-gray-500 ]'> Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam. $i</h3>
                                                <p class='[ mt-24 md.mt-18 ] | [ leading-140 ]'> $contextSml</p>
                                            </div>
                                        </li>
                                
                                        ";
                                    }

                                    ?>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>



        <?php
        // Array of footer links
        $footerLinks = ["Home", "Work", "Contact", "People",];
        $socialLinks = ["Fb", "Ln", "X", "Insta"];
        $footerPageLinks = ["Item 1", "Item 2", "item 3", "item 4", "item 5"];
        ?>
        <footer class=" | pt-96 pb-256">
            <div class="l-container">
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <p class="mt-24 leading-150 pr-18"><?= $contextLg ?> </p>
                    </div>
                    <div class="col-xs-12 col-md-3 ">
                        <p class="mt-24 mb-24 leading-150"><?= $footerContent2 ?> </p>
                    </div>
                    <div class="col-xs-12 col-md-4 md.col-md-offset-2 flex md.justify-content-end">
                        <ul class="flex flex-col justify-content-between |  mt-24">

                            <?php
                            // Loop through colors and create an option for each color
                            foreach ($footerPageLinks as $fplink) {
                                echo "<li class='my-12'>$fplink</li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-12  md.mt-48 mx-auto | "> <img class="mx-auto" src="https://placeholder.pics/svg/64x64" alt="">
                        <h3 class="text-center mt-24">Lorem, ipsum dolor.</h3>
                    </div>
                </div>

        </footer>
    </body>
    <!-- JavaScript -->
    <script src="public/dist/js/app.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    </html>

    <script>
        var elem = document.querySelector('.main-carousel');
        var elem2 = document.querySelector('.c-testmonials-main-carousel');
        var flkty = new Flickity(elem, {
            // options
            cellAlign: 'left',
            contain: true,
            draggable: false,
            pageDots: false,
            prevNextButtons: false,
            autoPlay: 10000,
            pauseAutoPlayOnHover: false
        });
        var flkty2 = new Flickity(elem2, {
            // options
            // cellAlign: 'left',
            // contain: true,
            // draggable: false,
            // pageDots: false,
            prevNextButtons: false,
            autoPlay: 8000,
            // pauseAutoPlayOnHover: false
        });
    </script>