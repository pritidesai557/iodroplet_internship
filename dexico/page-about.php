<?php
/*
Template Name:ABOUT +
*/
// the_post();
?>
<head>
 <style>
       .card_sm , .md,.section1_subv, .trad{
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            transition: transform 1s ease;
        }
        .trad{
            transition:none;
            
            height:18rem!important;
        }

        .card_sm:hover {
            transform: scale(1.15);
        }
        .card_sm {
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 1rem;
            height: 4rem;            
            position: relative;
        }

        .md {
            height: 15rem;
        }

        .hd3 {
            color: #133b5c;
            font-weight: 500;
        }

        .element_p {
            font-size: 16px;
            font-weight: 700;
            color: #133b5c;
        }

        .section1_subv {
            height: 100vh;

        }

        .hd2 {
            font-size: 52px;
            color: #133b5c;
            font-weight: 600;
            line-height: 1.2em;
        }

        a {
            font-size: 14px;
            font-weight: 500;
            line-height: 1.4em;
            text-decoration: none;
            color: #3c6e71;
            fill: #3c6e71;

        }
        
 </style>
</head>
<body>
  <?php get_header();
   ?>
   <section class="section1"style="border-width: 0px 100px 0px 100px;">
        <div class="section1_sub" style="background-image:url(<?php the_field('back_img_url')  ?>)">
            <div class="element1">
                <div>
                    <h1 class="hd1"><?php the_field('page_heading')  ?></h1>
                    <div>
                        <p>
                            <a class="nav-link gr" style="float: left; padding: 0px 0px;" href="index.html">Home »</a>
                            <a class="nav-link gr" style="float: left; padding: 0px 0px;"
                                href="Templates.html">Templates »</a>
                            <a class="nav-link gr" style="float: left; padding: 0px 0px;" href="contacts.html">About
                                us</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <div class="row">
        <div class="row row-cols-lg-3 row-cols-1 my-0 mx-4">
            <div class="col" style="padding: 20px;">
                <div class="col">
                    <!-- <figure class="card_3"> -->
                    <h3 class="hd3"><?php the_field('element_hd1')  ?></h3>
                    <!-- </figure> -->
                </div>
                <p><?php the_field('element_para') ; ?></p>
            </div>
            <div class="col" style="padding: 20px;">
                <div class="row g-2 m-0">
                    <div class="col-2">
                        <i class="bx bxs-envelope icon" style="font-size: 46px;"></i>
                    </div>
                    <div class="col">
                        <p class="mx-2 element_p"><?php the_field('element_para_21') ; ?></p>
                    </div>
                </div>
                <div class="row g-2 m-0">
                    <div class="col-2">
                        <i class="bx bxs-envelope icon" style="font-size: 46px;"></i>
                    </div>
                    <div class="col">
                        <p class="mx-2 element_p"><?php the_field('element_para_22') ; ?></p>
                    </div>
                </div>
                <div class="row g-2 m-0">
                    <div class="col-2">
                        <i class="bx bxs-envelope icon" style="font-size: 46px;"></i>
                    </div>
                    <div class="col">
                        <p class="mx-2 element_p"><?php the_field('element_para_23') ; ?></p>
                    </div>
                </div>
            </div>
            <div class="col" style="padding: 20px;">
                <div class="row g-2 m-0">
                    <div class="col-4">
                        <div class="row" style="margin:10px 3px">
                            <div class="col card_sm" style="background-image:url(<?php the_field('small_img1') ; ?>);">

                            </div>
                        </div>
                        <div class="row" style="margin:10px 3px">
                            <div class="col card_sm "style="background-image:url(<?php the_field('small_img2') ; ?>);">
                               
                            </div>
                        </div>
                        <div class="row" style="margin:10px 3px">
                            <div class="col card_sm"style="background-image:url(<?php the_field('small_img3') ; ?>);">
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" style="width: 0px;" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide-to="0" class="active" aria-current="true"
                                    aria-label="Slide 1"></button>
                                <button type="button" style="width: 0px;" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" style="width: 0px;" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" style="width: 0px;" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide-to="3" aria-label="Slide 2"></button>
                                <button type="button" style="width: 0px;" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide-to="4" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block trad" alt="..." src="<?php the_field('slider_img1') ; ?>">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block trad" alt="..."src="<?php the_field('slider_img2') ; ?>">
                                </div>
                                <div class="carousel-item">
                                    <img  class="d-block trad" alt="..."src="<?php the_field('slider_img3') ; ?>">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block trad" alt="..."src="<?php the_field('slider_img4') ; ?>">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block trad" alt="..."src="<?php the_field('slider_img5') ; ?>">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="align-items: center;">
        <div class="row row-cols-lg-5 row-cols-1 my-0 mx-4">
            <div class="col" style="padding: 10px;">
                <div class="col md" style="transform: none;background-image:url(<?php the_field('galary_img1') ; ?>);">
              
                </div>
            </div>
            <div class="col" style="padding: 10px;">
                <div class="col md" id="items2" style="transform: none;background-image:url(<?php the_field('galary_img2') ; ?>);">
                    
                </div>
            </div>
            <div class="col" style="padding: 10px;">
                <div class="col md" id="items3" style="transform: none;background-image:url(<?php the_field('galary_img3') ; ?>);">
                    
                </div>
            </div>
            <div class="col" style="padding: 10px;">
                <div class="col md" id="items4" style="transform: none;background-image:url(<?php the_field('galary_img4') ; ?>);">
                   
                </div>
            </div>
            <div class="col" style="padding: 10px;">
                <div class="col md" id="items5" style="transform: none;background-image:url(<?php the_field('galary_img5') ; ?>);">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" align="center">
        <div class="row m-0" style="margin-bottom:0px 0px 40px 0px;">
            <h1><?php the_field('element_hd2_1') ; ?> <br>
            <?php the_field('element_hd2_2') ; ?> </h1>
        </div>
        <div class="row m-0" style="margin-bottom:0px 0px 40px 0px;">
            <p>
                <center><?php the_field('element_para_3_1') ; ?><br>
                <?php the_field('element_para_3_2') ; ?><br>
                <?php the_field('element_para_3_3') ; ?></center>
            </p>
        </div>
    </div>
    <section>
        <div class="section1_subv m-2"style="background-image:url(<?php the_field('video_img');  ?>)">
            <div
                style="padding: 10px;position: relative;width: 100%;flex-wrap: wrap;align-content: flex-start;text-align: center;margin: 0% 50%;padding: 20% 0%;">

                <div style="text-align: center;">
                    <div style="background-color: #FFFFFFAB;width: 9%;border-radius: 50%;padding: 2% 0%;">
                       <a href="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJ0eXBlIjoidmlkZW8iLCJ2aWRlb1R5cGUiOiJ5b3V0dWJlIiwidXJsIjoiaHR0cHM6XC9cL3d3dy55b3V0dWJlLmNvbVwvZW1iZWRcL1ZtMlZnWF9KVzlZP2ZlYXR1cmU9b2VtYmVkIn0%3D">
                         <svg xmlns="http://www.w3.org/2000/svg" style="color: #3c6e71;cursor:pointer" width="46"  height="46" viewBox="0 0 16 16">
                                <path fill="currentColor"d="M14.222 6.687a1.5 1.5 0 0 1 0 2.629l-10 5.499A1.5 1.5 0 0 1 2 13.5V2.502a1.5 1.5 0 0 1 2.223-1.314l9.999 5.499Z" />
                         </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="row my-4">
        <div class="row row-cols-lg-3 row-cols-1">
            <div class="col-4"></div>
            <div class="col-4">
                <h2 class="hd2"><?php the_field('element_hd3_1');  ?> <br> <?php the_field('element_hd3_2');  ?> <br>
                <?php the_field('element_hd3_3');  ?> <br> <?php the_field('element_hd3_4');  ?></h2>
                <div>
                    <p>
                    <?php the_field('element_para4_1');  ?><br> <?php the_field('element_para4_2');  ?><br>
                    <?php the_field('element_para4_3');  ?> <br> <?php the_field('element_para4_4');  ?>
                    </p>
                </div>
                <div class="row my-2">
                    <div style="margin: 2rem 0rem;">
                        <button type="button" class="btn btn-success dexico"
                            style="padding:0.7rem 2.7rem; font-size: 1.2rem;margin-top: 0px;color:#fff"><?php the_field('button_property');  ?>
                            </button><br>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" style="width: 9px;height: 9px; border-radius: 50%;"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" style="width: 9px;height: 9px; border-radius: 50%;"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" style="width: 9px;height: 9px; border-radius: 50%;"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" style="width: 9px;height: 9px; border-radius: 50%;"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                            aria-label="Slide 2"></button>
                        <button type="button" style="width: 9px;height: 9px; border-radius: 50%;"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php the_field('slider_img1') ; ?>" class="d-block trad" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php the_field('slider_img1') ; ?>" class="d-block trad" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php the_field('slider_img1') ; ?>" class="d-block trad" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php the_field('slider_img1') ; ?>" class="d-block trad" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php the_field('slider_img1') ; ?>" class="d-block trad" alt="...">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row g-4 mx-4">
        <h1 align="center"><?php the_field('element_hd4') ; ?>  </h1>
        <div class="row row-cols-lg-4 row-cols-1 mx-4 my-0">
            <div class="col my-3">
                <div class="md" style="transform: none;background-image:url(<?php the_field('agent_img1');?>);">
                    
                </div>
                <div class="py-3">
                    <a href="">
                        <h3 class="hd3" style="font-size: 20px;"><?php the_field('agent_1_name');?></h3>
                    </a>
                    <div><a href=""><?php the_field('agent_1_phone');?></a></div>
                </div>
            </div>
            <div class="col my-3">
                <div class="md" style="transform: none;background-image:url(<?php the_field('agent_img2');?>);">
                    
                </div>
                <div class="py-3">
                    <a href="">
                        <h3 class="hd3" style="font-size: 20px;"><?php the_field('agent_1_name');?></h3>
                    </a>
                    <div><a href=""><?php the_field('agent_1_phone');?></a></div>
                </div>
            </div>
            <div class="col my-3">
                <div class="md" style="transform: none;background-image:url(<?php the_field('agent_img1');?>);">
                    
                </div>
                <div class="py-3">
                    <a href="">
                        <h3 class="hd3" style="font-size: 20px;"><?php the_field('agent_1_name');?></h3>
                    </a>
                    <div><a href=""><?php the_field('agent_1_phone');?></a></div>
                </div>
            </div>
            <div class="col my-3">
                <div class="md" style="transform: none;background-image:url(<?php the_field('agent_img2');?>);">
                    
                </div>
                <div class="py-3">
                    <a href="">
                        <h3 class="hd3" style="font-size: 20px;"><?php the_field('agent_1_name');?></h3>
                    </a>
                    <div><a href=""><?php the_field('agent_1_phone');?></a></div>
                </div>
            </div>
        </div>
        <center>
            <div class="row">
                <div style="margin: 2rem 0rem;">
                    <button type="button" class="btn btn-success dexico"
                        style="padding:0.7rem 2.7rem; font-size: 1.2rem;margin-top: 0px;color:#fff"><?php the_field('button_more') ; ?></button><br>
                </div>
            </div>
        </center>
    </div>
    
    <?php get_footer(); ?>
  </body>
