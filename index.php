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
            $contextLg = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum voluptatibus nemo cumque odio accusantium. Dicta, commodi voluptas fugiat nostrum itaque laborum voluptate corporis adipisci nulla error suscipit libero nesciunt. Magnam!t nostrum itaque laborum voluptate corporis adipisci nulla error suscipit libero nesciunt. Magnam!";
            $contextSml = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum voluptatibus nemo cumque odio accusantium. Dicta, commodi";
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
                                    <p><?= $contextLg ?></p>
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
                                    <p><?= $contextLg ?></p>
                                </div>
                                <div class="col-xs-12 col-md-4">Middle
                                    <button>Play</button>
                                </div>
                                <div class="col-xs-12 col-md-4"><a href="">CTA</a></div> -->
                      
                    </div>
                </div>
            </section>
            <section data-component-download-now class="border-1 border-solid border-black | pt-64 pb-64" id="download-now">
                <div class="l-container">
                    <div class="row">
                        <div class="col-xs-12 col-md-8">
                            <h2 class="mb-24"><?= $sectionTitle2 ?></h2>
                            <div class=" flex flex-col  justify-content-between | mb-24 " >
                                <p class="mb-24"><?= $contextLg ?>
                                </p>
                                <p class="mb-24"><?= $contextLg ?>
                                </p>
                            </div>
                           
                            <a  class="mt-32 mb-24" href="#">CTA</a>
                        </div>
                    </div>
                </div>
            </section>
            <section data-component-testmonials class="border-1 border-solid border-black py-96" id="testmonials">
                <div class="l-container">
                    <div class="row ">
                        <div class="col-xs-12 col-md-12">
                            <div class="c-testmonials-main-carousel">
                                <?php
                                    for ($i=1; $i <= 3; $i++) { 
                                        
                                        echo "<div id='' class='c-testmonials-carousel-item-$i | flex flex-col justify-content-center align-content-center'>
                                        <img class='w-3-12 | mx-auto' src='https://placeholder.pics/svg/132x132' alt=''>
                                        <p class='mt-24  mx-auto'>$testominalscontext </p>
                                    </div>";
                                
                                    }
                            ?>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section data-component-features class="border-1 border-solid border-black | py-96" id="features">
                <div class="l-container">
                    <div class="grid grid-cols-1 md.grid-cols-2 row-gap-64">
                    <?php
                                    for ($i=1; $i <= 4; $i++) { 
                        echo "<div class=''>
                            <h3 id='' class='mb-24 feature-$i'> $sectionTitle3  $i</h3>
                            <p class=''> $contextLg</p>
                        </div>";
                    }
                    ?>
                 
                    </div>


                    <div class="col-xs-12 col-md-12 | mt-48">
                        <a class="flex justify-content-center" href="#">Try Now Demo</a>
                    </div>
                </div>

            </section>
            <section data-component-design class="border-1 border-solid border-black pt-96 pb-256" id="">
                <div class="l-container">
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="slider">
                                <!-- Slider Item 1::START-->
                                <ul>
                                    <?php
                                    for ($i=1; $i <= 3; $i++) { 
                                        echo"  
                                        <li class='slider-item-$i | flex flex-col md.flex-row'>
                                            <div class='col-xs-12 col-md-4'>
                                                <div class='img_bloc'>
                                                    <img class='https://placeholder.pics/svg/475x346' src='' alt=''>
                                                    <div class=''>
                                                        <p>Card Title $i</p>
                                                        <p>Feature </p>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class='col-xs-12 col-md-4'>
                                                <div class='img_bloc'>
                                                    <img class='https://placeholder.pics/svg/475x346' src='' alt=''>
                                                    <div class=''>
                                                        <p>Card Title $i</p>
                                                        <p>Feature </p>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class='col-xs-12 col-md-4'>
                                                <div><h5>$sectionTitle4</h5></div>
                                                <p class=''> $contextSml</p>
                                            </div>
                                        </li>";
                                    }
                                    ?>
                                  
                     
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <script src="public/dist/js/app.js"></script>

        <?php
        // Array of footer links
        $footerLinks = ["Home", "Work", "Contact", "People",];
        $socialLinks = ["Fb", "Ln", "X", "Insta"];
        $footerPageLinks = ["Item 1", "Item 2", "item 3", "item 4", "item 5"];
        ?>
        <footer class="border-1 border-solid border-black | pt-96 pb-256">
            <div class="l-container">
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                    <p class="mt-24 leading-150 pr-18"><?=$contextLg ?> </p>
                    </div>
                    <div class="col-xs-12 col-md-3 ">
                            <p class="mt-24 mb-24 leading-150"><?=$footerContent2 ?> </p>
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

    </html>