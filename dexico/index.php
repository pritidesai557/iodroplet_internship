<!-- wp:template-part {"slug":"header","tagName":"header"} /-->
<?php 
  // echo get_template_directory_uri();
  bloginfo('template_directory');
?>

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
              <a href="index.html">dexico.</a>
            </div>
            <div class="NavLinks" style="width: 85%;min-height: 100%;">
              <ul>
                <li><a href="index.html" style="color: #3c6e71; text-decoration: none;">home<i class='bx bx-plus'></i></a>
                  <div class="dropdown-content">
                    <a href="HOME/Home-2.html">Home 2</a>
                    <a href="HOME/Home-3.html">Home 3</a>
                    <a href="HOME/Home-4.html">Home 4</a>
                  </div>
                </li>
                <li><a href="PROPERTY/Property.html" style="color: #3c6e71; text-decoration: none;">property<i class='bx bx-plus'></i></a>
                  <div class="dropdown-content">
                    <a href="PROPERTY/Property-List.html">Property List</a>
                    <a href="PROPERTY/Property-Details.html">Property Details</a>
                    <a href="PROPERTY/Property-Width-Full-Details.html">Property Details Full Width</a>
                    <a href="PROPERTY/Agents.html">Agents</a> 
                    <a href="PROPERTY/Agent-Details.html">Agents Details</a>
                  </div>
                </li>
                <li><a href="ABOUT/About.html" style="color: #3c6e71; text-decoration: none;">about<i class='bx bx-plus'></i></a>
                  <div class="dropdown-content">
                    <a href="ABOUT/404.html">404</a>
                  </div>
                </li>
                <li><a href="BLOG/Blog.html" style="color: #3c6e71; text-decoration: none;">blog<i class='bx bx-plus'></i></a>
                  <div class="dropdown-content">
                    <a href="BLOG/SinglePost.html">Single Post</a>
                    </div>
                </li>
                <li><a href="Contacts.html" style="color: #3c6e71; text-decoration: none;">contacts</a></li>
              </ul>
            </div>
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d317893.9737282887!2d-0.11951900000000001!3d51.503186!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2slastminute.com%20London%20Eye!5e0!3m2!1sen!2sus!4v1691729805369!5m2!1sen!2sus" width="478" height="338" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                  <div class="ContactsDetails">
                    <h6><a href="#" style="text-decoration: none;color: #3C6E71; display: flex; justify-content: center;align-items: center;"><i class='bx bxs-map' style="margin-right:10px;font-size: 30px;margin-top: 5px;color: #3C6E71;"></i>LA, Vehiclua Street, 58</a></h6>
                    <h6><a href="#" style="text-decoration: none;color: #3C6E71; display: flex; justify-content: center;align-items: center;"><i class='bx bxs-phone' style="margin-right:10px;font-size: 30px;margin-bottom: 5px;color: #3C6E71;"></i>+91 1234567890</a></h6>
                    <h6><a href="#" style="text-decoration: none;color: #3C6E71; display: flex; justify-content: center;align-items: center;"><i class='bx bxs-envelope' style="margin-right:10px;font-size: 30px;margin-bottom: 5px;color: hsl(191, 77%, 12%);"></i>hello@merkulov.design</a></h6>
                  </div>
                  <br>
                  <br>
                  <div class="SocialMedia" style="width: 230px;height: 40px;font-size: 35px;">
                    <a href=""><i class='bx bxl-twitter' style="color: #3C6E71;margin-right: 5px;"></i></a>
                    <a href=""><i class='bx bxl-facebook' style="color: #3C6E71;margin-right: 5px;"></i></a>
                    <a href=""><i class='bx bxl-instagram' style="color: #3C6E71;"></i></a>  
                  </div>
                </div>
              </div>
            </div>
        </nav>
  </section>

    <!-- First Segment -->
    <div class="MainPage">
      <section style="margin-bottom: 120px;">
        <div class="Content">
          <div class="TransitionElements">
            <div class="ApartmentText" id="ani"><p>Apartments</p><p>For Life</p></div>
            <div class="ApartmentTextContent">
              <p>In the heart of Brooklyn, in a vibrant neighborhood just east of Prospect Park,</p>
              <p>stands an eight-story, full-service, strikingly beautiful apartment building</p>
            </div>
          </div>
          <div class="Search">
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
              <button class="btn btn-outline-success" type="submit">− Search</button>
            </form>
          </div>
          <div class="PopularTags">
            <p style="margin-bottom: 2px;color: #133b5c;font-size: 20px; font-weight: 400;">Popular Tags</p>
            <div class="Tags">
              <div class="EachTag" style="width: 102.77px;"><a href="#" style="text-decoration: none;color: #3c6e71;">brooklyn</a></div>
              <div class="EachTag" style="width: 140.81px;"><a href="#" style="text-decoration: none;color: #3c6e71;">broom street</a></div>
              <div class="EachTag" style="width: 130.36px;"><a href="#" style="text-decoration: none;color: #3c6e71;">lake street</a></div>
              <div class="EachTag" style="width: 85.19px;"><a href="#" style="font-weight: 600;color: #3c6e71;">more</a></div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Second Segment  -->
    <div class="SecondSegment">
      <div></div>
      <div class="Text">
        <div class="Heading"><h2><p style="margin-bottom: 0;">Sunny</p>Loft Apartments</h2></div>
        <div class="TextBody">From the rooftop terrace, down to the first floor gym, every detail of eight floors provides amenities filled with convenience, class</div>
        <div class="ViewButton">
          <button class="btn btn-primary" type="button">− View</button>
        </div>  
      </div>
      <div class="HoverBackground-1">
        <div class="Pics">
          <div class="City">
            <div class="Name">Brooklyn</div>
            <div class="Propertys">456 Propertys</div>
          </div>
        </div>
      </div>
      <div class="HoverBackground-2">
        <div class="Pics" >
          <div class="City">
            <div class="Name">Manhatten</div>
            <div class="Propertys">137 Propertys</div>
          </div>
        </div>
      </div>
      <div class="HoverBackground-3">
        <div class="Pics">
          <div class="City">
            <div class="Name">Bronx</div>
            <div class="Propertys">89 Propertys</div>
          </div>
        </div>
      </div>
      <div class="HoverBackground-4">
        <div class="Pics">
          <div class="City">
            <div class="Name">Queens</div>
            <div class="Propertys">249 Propertys</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Third Segment -->
    <div class="ThirdSegment">
      <section>
        <div class="PropertyHeader">Property Highlights</div>
        <div class="Properties">
          <div class="Property">
            <div class="PropertyContainer">
              <div class="PropertyImage" style="background-image:url(Room1.jpg) ;"></div>
            </div>
            <div class="Price">$765</div>
            <div class="AddressLinks">
              <a href="#"><i class='bx bxs-map' style="color: #3C6E71;margin-right: 20px; font-size: 25px;"></i>LA, Vehiclua Street, 58</a>
            </div>
            <a class="PropertyName">
              <h2>Sunny Loft</h2>
            </a>
            <div class="PropertyFooter">
              <ul>
                <li>2 Rooms</li>
                <li><i class='bx bxs-bed'></i> 2 Beds</li>
                <li><i class='bx bx-area'></i> Area 80 Ft²</li>
              </ul>
            </div>
          </div>
          <div class="Property">
            <div class="PropertyContainer">
              <div class="PropertyImage" style="background-image:url(Room2.jpg) ;"></div>
            </div>
            <div class="Price">$789</div>
            <div class="AddressLinks">
              <a href="#"><i class='bx bxs-map' style="color: #3C6E71;margin-right: 20px; font-size: 25px;"></i>LA, Vehiclua Street, 59</a>
            </div>
            <a class="PropertyName">
              <h2>Palace Square</h2>
            </a>
            <div class="PropertyFooter">
              <ul>
                <li>4 Rooms</li>
                <li><i class='bx bxs-bed'></i> 2 Beds</li>
                <li><i class='bx bx-area'></i> Area 120 Ft²</li>
              </ul>
            </div>
          </div>
          <div class="Property">
            <div class="PropertyContainer">
              <div class="PropertyImage" style="background-image:url(Room3.jpg) ;"></div>
            </div>
            <div class="Price">$341</div>
            <div class="AddressLinks">
              <a href="#"><i class='bx bxs-map' style="color: #3C6E71;margin-right: 20px; font-size: 25px;"></i>LA, Vehiclua Street, 60</a>
            </div>
            <a class="PropertyName">
              <h2>Lonsdale Palace</h2>
            </a>
            <div class="PropertyFooter">
              <ul>
                <li>3 Rooms</li>
                <li><i class='bx bxs-bed'></i> 2 Beds</li>
                <li><i class='bx bx-area'></i> Area 70 Ft²</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Forth Segment -->
    <div class="ForthSegmnet">
      <section>
        <div class="Heading">
          <a href="#" style="text-decoration: none;color: #133b5c;">Traditional Apartments</a>
        </div>
        <div class="SSContent">
          <div class="SlideShow">
            <!-- SlideShow -->
            <div id="carouselExampleIndicators" class="carousel slide" style="height: 410.33px;" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active" style="object-fit: cover;">
                  <img src="Slide4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" style="height: 359.72px;">
                  <img src="Slide1.jpg" class="d-block w-100" alt="..." style="object-fit: fill;">
                </div>
                <div class="carousel-item">
                  <img src="Room3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" style="height: 359.72px;">
                  <img src="Slide2.jpg" class="d-block w-100" alt="..." style="object-fit: fill;">
                </div>
                <div class="carousel-item">
                  <img src="Slide3.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!-- End -->
          </div>
          <div class="Info">
            <div class="InfoText">New York is more than the small Island Manhattan. There are more districts that are representing New York City, who we will presented below</div>
            <div class="AddressLinks">
              <a href="#"><i class='bx bxs-map' style="color: #3C6E71;margin-right: 20px; font-size: 25px;"></i>LA, Vehiclua Street, 60</a>
            </div>
            <div class="Details">4 Rooms | 2 beds | Area 70 Ft2</div>
            <div class="PriceDetails">
              <div class="Head" style="color: #797a7e;">PRICE</div>
              <div class="Price" style="color: #133b5c;font-size: 30px;"><b>$125</b>/month</div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Fifth Segment -->
    <div class="FifthSegmnet">
      <section>
        <div id="FirstPic">
          <img id="inner" src="Building1.jpg" alt="">
        </div>
        <div class="Content-1">
          <div class="Title">Something About Our Company</div>
          <div class="Text">Browse the highest quality listings, apply online, sign your lease, and even pay your rent from any device</div>
          <div class="Data">
            <div class="Data-1">
              <div class="Num">15+</div>
              <div class="SubTitle">Years of Expirience</div>
            </div>
            <div class="Data-1">
              <div class="Num">23</div>
              <div class="SubTitle">Qualificated Realtors</div>
            </div>
            <div class="Data-1">
              <div class="Num">849</div>
              <div class="SubTitle">Best Propertys</div>
            </div>
          </div>
          <img src="Building2.jpg" alt="avatar">
        </div>
      </section>
    </div>

    <!-- Sixth Segment -->
    <div class="SixthSegment">
      <section>
        <div class="ClientTitle">Clients We Help</div>
        <div class="CustomerSlideShow">
          <!-- SlideShow  -->
          <div id="carouselExampleCaptions" class="carousel slide" style="height: 309px;" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" align="center">
                <div class="d-block Special">Home building’s 2020 sling-shot trajectory—coming as it did amidst the shock and stress of the pandemic—defied gravity. It’s one of American business and society’s few feel-good stories in a bleak, topsy-turvy backdrop.</div>
                <div class="carousel-caption d-none d-md-block">
                  <div class="SlideImage" style="background-image: url(Kanye.jpg);"></div>
                  <h5>KANYE WEST</h5>
                  <p>happy client</p>
                </div>
              </div>
              <div class="carousel-item" align="center">
                <div class="d-block Special">Looking for Hamptons pool days? How about a home right by the beach? No matter what you’re looking for, you’ll find it on Out East — a beautiful new way to find a home in the Hamptons.</div>
                <div class="carousel-caption d-none d-md-block">
                  <div class="SlideImage" style="background-image: url(Ana.jpg);"></div>
                  <h5>ANNA KEY</h5>
                  <p>happy client</p>
                </div>
              </div>
              <div class="carousel-item" align="center">
                <div class="d-block Special">An upside, still-widening consensus hypothesis of a housing-led broad economic recovery has taken meaningful hold of sentiment in the buyer-seller arena where it matters most—money for land.</div>                
                <div class="carousel-caption d-none d-md-block">
                  <div class="SlideImage" style="background-image: url(Lionel.jpg);"></div>
                  <h5>Lionel Messi</h5>
                  <p>happy client</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <!-- End -->
        </div>
      </section>
    </div>

    <!-- Footer -->
    <div class="Footer">
      <section>
        <div class="FooterHeader">
          <div class="Heading-1">A special and qualified service dedicated to luxury properties for rent</div>
          <div class="Heading-2"><a href="#" style="text-decoration: none;color: #133b5c;">dexico<span style="color: #3C6E71;">.</span></a></div>
        </div>
        <div class="FooterContent">
          <div class="F-Content">
            <ul>
              <li><a href="#">– Propertys</a></li>
              <li><a href="#">– Agents</a></li>
              <li><a href="#">– Locations</a></li>
              <li><a href="#">– Clients Support</a></li>
            </ul>
          </div>
          <div class="F-Content">
            <ul>
              <li><a href="#">– Home</a></li>
              <li><a href="#">– About</a></li>
              <li><a href="#">– Blog</a></li>
              <li><a href="#">– Contacts</a></li>
            </ul>
          </div>
          <div class="F-Content">
            <div class="Box-1">
              <ul>
                <li><a href="#" style="display: flex;align-items: center;"><i class='bx bxs-map' style="color: #3C6E71;margin-right: 20px; font-size: 25px;"></i>LA, Vehiclua Street, 58</a></li>
                <li><a href="#" style="display: flex;align-items: center;"><i class='bx bxs-phone' style="color: #3C6E71;margin-right: 20px; font-size: 25px;"></i>+91 1234567890</a></li>
                <li><a href="#" style="display: flex;align-items: center;"><i class='bx bxs-envelope' style="color: hsl(191, 77%, 12%);margin-right: 20px; font-size: 25px;"></i>hello@merkulov.design</a></li>
              </ul>
            </div>
            <div class="Box-2" style="display: flex;align-items: center;">
              <a href="#"><i class='bx bxl-twitter' style="color: #3C6E71;margin-right: 10px;font-size: 35px;"></i></a>
              <a href="#"><i class='bx bxl-facebook' style="color: #3C6E71;margin-right: 10px;font-size: 35px;"></i></a>
              <a href="#"><i class='bx bxl-instagram' style="color: #3C6E71;font-size: 35px;"></i></a>  
            </div>
          </div>
        </div>
        <hr>
        <div class="FooterCredits">
          <b>Merkulove © Dexico Template All rights reserved Copyrights 2020</b>
        </div>
      </section>
    </div>

    <!-- Bootstrap JavaScript files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script>
      $(".FirstPic").hover(function(){
  console.log(this,"HoverBackground");
  }, function(){
    console.log("Confirm");
});   
 
// Translate
Trans = document.querySelector('.SecondSegment');
Trans1 = document.querySelector('.FifthSegmnet');
Trans2 = document.querySelector('.SixthSegment');
window.onscroll = () => {
  let top = window.scrollY;
  let offset = Trans.offsetTop - 550;
  // console.log(
  //   'top:', top,
  //   'offset:', offset
  // );
  if(top>=offset){
    Trans.childNodes[3].childNodes[1].childNodes[0].classList.add('active');
    Trans.childNodes[3].childNodes[3].classList.add('active');
    Trans.childNodes[5].classList.add('active');
    Trans.childNodes[7].classList.add('active');
    Trans.childNodes[9].classList.add('active')
    Trans.childNodes[11].classList.add('active')
    console.log(Trans.childNodes[5]);
  }

  offset = Trans1.offsetTop - 350;
  // console.log(
  //   'top:', top,
  //   'offset:', offset
  // );
  if(top>=offset){
    console.log(Trans1.childNodes[1].childNodes[3].childNodes[7].classList.add('active'));
    Trans1.childNodes[1].childNodes[1].classList.add('active');
    Trans1.childNodes[1].childNodes[3].childNodes[1].classList.add('active');
    Trans1.childNodes[1].childNodes[3].childNodes[3].classList.add('active');
    Trans1.childNodes[1].childNodes[3].childNodes[5].classList.add('active');
    Trans1.childNodes[1].childNodes[3].childNodes[7].classList.add('active');
  }

  offset = Trans2.offsetTop - 450;
  // console.log(
  //   'top:', top,
  //   'offset:', offset
  // );
  if(top>=offset){
    Trans2.childNodes[1].childNodes[1].classList.add('active') 
   }
}

      //Perpective
      (function() {
  // Init
  var container = document.getElementById("FirstPic"),
    inner = document.getElementById("inner");
    console.log('container:',container);
  console.log('inner:',inner);
  // Mouse
  var mouse = {
    _x: 0,
    _y: 0,
    x: 0,
    y: 0,
    updatePosition: function(event) {
      var e = event || window.event;
      this.x = e.clientX - this._x;
      this.y = (e.clientY - this._y) * -1;
    },
    setOrigin: function(e) {
      this._x = e.offsetLeft + Math.floor(e.offsetWidth / 2);
      this._y = e.offsetTop + Math.floor(e.offsetHeight / 2);
    },
    show: function() {
      return "(" + this.x + ", " + this.y + ")";
    }
  };

  // Track the mouse position relative to the center of the container.
  mouse.setOrigin(container);

  //-----------------------------------------

  var counter = 0;
  var updateRate = 10;
  var isTimeToUpdate = function() {
    return counter++ % updateRate === 0;
  };

  //-----------------------------------------

  var onMouseEnterHandler = function(event) {
    update(event);
  };

  var onMouseLeaveHandler = function() {
    inner.style = "";
  };

  var onMouseMoveHandler = function(event) {
    if (isTimeToUpdate()) {
      update(event);
    }
  };

  //-----------------------------------------

  var update = function(event) {
    mouse.updatePosition(event);
    updateTransformStyle(
      (mouse.y / inner.offsetHeight / 2).toFixed(2),
      (mouse.x / inner.offsetWidth / 2).toFixed(2)
    );
  };

  var updateTransformStyle = function(x, y) {
    var style = "rotateX(" + x + "deg) rotateY(" + y + "deg)";
    inner.style.transform = style;
    inner.style.webkitTransform = style;
    inner.style.mozTransform = style;
    inner.style.msTransform = style;
    inner.style.oTransform = style;
  };

  //-----------------------------------------

  container.onmouseenter = onMouseEnterHandler;
  container.onmouseleave = onMouseLeaveHandler;
  container.onmousemove = onMouseMoveHandler;
})();

    </script>
</body>
</html>
