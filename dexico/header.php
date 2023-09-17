<?php // Template Name: Header ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CSS file -->
    
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

    <!-- Preview Header  -->
    <div class="PreviewHeader" style="position: sticky;top: 0; z-index: 5;">
      <div class="logo">
        <a href="#"><i class='bx bxs-hot'></i><span>envato</span>market</a>
      </div>
      <div class="BuyAction">
        <button type="button" class="btn btn-success">Buy Now</button>
      </div>
    </div>

    <!-- Navbar  -->
    <section style="position: sticky; top: 54px; width: 1366px; height: 97px; display: flex; justify-content: center;padding: 20px 0px 20px 0px;z-index: 5; background-color: white;">
      <nav class="navbar bg-body-tertiary" style="width: 80%;">
          <div class="container-nav">
            <div class="LogoName" style="min-width: 190px;min-height: 45px;">
              <a href="index.php">dexico.</a>
            </div>
            <!-- <div class="NavLinks" style="width: 85%;min-height: 100%;"> -->
              <!-- <ul>
                <li><a href="index.php" style="color: #3c6e71; text-decoration: none;">home<i class='bx bx-plus'></i></a>
                  <div class="dropdown-content">
                    <a href="<?php //bloginfo('template_directory') ?>/HOME/Home-2.html">Home 2</a>
                    <a href="<?php //bloginfo('template_directory') ?>/HOME/Home-3.html">Home 3</a>
                    <a href="<?php //bloginfo('template_directory') ?>/HOME/Home-4.html">Home 4</a>
                  </div>
                </li>
                <li><a href="<?php //bloginfo('template_directory') ?>/PROPERTY/Property.html" style="color: #3c6e71; text-decoration: none;">property<i class='bx bx-plus'></i></a>
                  <div class="dropdown-content">
                    <a href="<?php //bloginfo('template_directory') ?>/PROPERTY/Property-List.html">Property List</a>
                    <a href="<?php //bloginfo('template_directory') ?>/PROPERTY/Property-Details.html">Property Details</a>
                    <a href="<?php //bloginfo('template_directory') ?>/PROPERTY/Property-Width-Full-Details.html">Property Details Full Width</a>
                    <a href="<?php //bloginfo('template_directory') ?>/PROPERTY/Agents.html">Agents</a> 
                    <a href="<?php //bloginfo('template_directory') ?>/PROPERTY/Agent-Details.html">Agents Details</a>
                  </div>
                </li>
                <li><a href="<?php //bloginfo('template_directory') ?>/ABOUT/About.html" style="color: #3c6e71; text-decoration: none;">about<i class='bx bx-plus'></i></a>
                  <div class="dropdown-content">
                    <a href="ABOUT/404.html">404</a>
                  </div>
                </li>
                <li><a href="<?php //bloginfo('template_directory') ?>/BLOG/Blog.html" style="color: #3c6e71; text-decoration: none;">blog<i class='bx bx-plus'></i></a>
                  <div class="dropdown-content">
                    <a href="BLOG/SinglePost.html">Single Post</a>
                    </div>
                </li> -->

                <!-- Menu  -->
                <?php 
                    wp_nav_menu(
                        array('theme_location'=>'primary-menu')
                    );
                ?>

                <!-- <li><a href="<?php //bloginfo('template_directory') ?>/Contacts.html" style="color: #3c6e71; text-decoration: none;">contacts</a></li> -->
              <!-- </ul> -->
            <!-- </div> -->
            <!-- Off-Canvas -->
            <button class="btn btn-primary OffCanvaBtn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class='bx bx-align-right'></i></button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="width: 600px; padding: 54px 20px 30px 20px;">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body" align="center">
                <div class="InsideCanvas" style="color: #133b5c;">
                  <h1 style="font-family: 'Gothic A1', Sans-serif;font-size: 47px;font-weight: 543;line-height: 1.3em;">Let's be Together</h1>
                  <div class="gmap" style="width: 480px;height: 340px; margin-bottom: 40px; margin-top: 30px;">
                    <iframe src="<?php the_field('map_link',93);?>" width="478" height="338" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                  <div class="ContactsDetails">
                    <h6><a href="#" style="text-decoration: none;color: #3C6E71; display: flex; justify-content: center;align-items: center;"><i class='bx bxs-map' style="margin-right:10px;font-size: 30px;margin-top: 5px;color: #3C6E71;"></i><?php the_field('address',93);?></a></h6>
                    <h6><a href="#" style="text-decoration: none;color: #3C6E71; display: flex; justify-content: center;align-items: center;"><i class='bx bxs-phone' style="margin-right:10px;font-size: 30px;margin-bottom: 5px;color: #3C6E71;"></i><?php the_field('phone_number',93);?></a></h6>
                    <h6><a href="mailto:<?php the_field('e-mail',93);?>" style="text-decoration: none;color: #3C6E71; display: flex; justify-content: center;align-items: center;"><i class='bx bxs-envelope' style="margin-right:10px;font-size: 30px;margin-bottom: 5px;color: hsl(191, 77%, 12%);"></i><?php the_field('e-mail',93);?></a></h6>
                  </div>
                  <br>
                  <br>
                  <div class="SocialMedia" style="width: 230px;height: 40px;font-size: 35px;">
                    <a href="<?php the_field('twitter_link',93);?>"><i class='bx bxl-twitter' style="color: #3C6E71;margin-right: 5px;"></i></a>
                    <a href="<?php the_field('facebook_link',93);?>"><i class='bx bxl-facebook' style="color: #3C6E71;margin-right: 5px;"></i></a>
                    <a href="<?php the_field('instagram_link',93);?>"><i class='bx bxl-instagram' style="color: #3C6E71;"></i></a>  
                  </div>
                </div>
              </div>
            </div>
        </nav>
  </section>
  <script>

    // Styling for menu 
    let Tag = document.getElementsByClassName('menu-header-menu-container');
    console.log('Tag',Tag);
    Tag[0].classList.add('NavLinks');
    Tag[0].style.width = "85%";
    Tag[0].style.minHeight = "100%"

    // Adding the Icon to menu items
    for (let Index = 0; Index < Tag[0].childNodes[0].childElementCount; Index++) {
      console.log('Index:',2*Index)
      // Icon '+'
      let i = document.createElement('i');
      // add the Icon class
      i.classList.add('bx', 'bx-plus');
      Tag[0].childNodes[0].childNodes[2*Index].childNodes[0].appendChild(i)
      Tag[0].childNodes[0].childNodes[2*Index].childNodes[0].style.color="#3c6e71";
      Tag[0].childNodes[0].childNodes[2*Index].childNodes[0].style.textDecoration="none";
    }

    //Sub Menu
    for (let index = 0; index < 4; index++) {
      let SubMenu = Tag[0].childNodes[0].childNodes[2*index].childNodes[2];
      console.log('SubMenu:',SubMenu);
      SubMenu.classList.add('dropdown-content')
    }
    
  </script>