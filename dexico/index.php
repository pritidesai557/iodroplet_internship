<!-- wp:template-part {"slug":"header","tagName":"header"} /-->
<?php 
  // echo get_template_directory_uri();
  // bloginfo('template_directory');
  /* Template Name: Home */
  get_header();
?>

    <!-- First Segment -->
    <div class="MainPage">
      <section style="margin-bottom: 120px;">
        <div class="Content">
          <div class="TransitionElements">
            <div class="ApartmentText" id="ani"><p><?php the_field('main_text_above');?></p><p><?php the_field('main_text_below');?></p></div>
            <div class="ApartmentTextContent">
              <p><?php the_field('main_description1');?></p>
              <p><?php the_field('main_description2');?></p>
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
        <div class="Heading"><h2><p style="margin-bottom: 0;"><?php the_field('left_text');?></h2></div>
        <div class="TextBody"><?php the_field('left_description');?></div>
        <div class="ViewButton">
          <button class="btn btn-primary" type="button">− View</button>
        </div>  
      </div>
      <div class="HoverBackground-1">
        <div class="Pics">
          <div class="City">
            <div class="Name"><?php the_field('city_text1');?></div>
            <div class="Propertys"><?php the_field('city_property_number1');?></div>
          </div>
        </div>
      </div>
      <div class="HoverBackground-2">
        <div class="Pics" >
          <div class="City">
            <div class="Name"><?php the_field('city_text2');?></div>
            <div class="Propertys"><?php the_field('city_property_number2');?></div>
          </div>
        </div>
      </div>
      <div class="HoverBackground-3">
        <div class="Pics">
          <div class="City">
            <div class="Name"><?php the_field('city_text3');?></div>
            <div class="Propertys"><?php the_field('city_property_number3');?></div>
          </div>
        </div>
      </div>
      <div class="HoverBackground-4">
        <div class="Pics">
          <div class="City">
            <div class="Name"><?php the_field('city_text4');?></div>
            <div class="Propertys"><?php the_field('city_property_number4');?></div>
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
              <div class="PropertyImage" style="background-image:url(<?php bloginfo('template_directory') ?>/Room1.jpg) ;"></div>
            </div>
            <div class="Price">$<?php the_field('price');?></div>
            <div class="AddressLinks">
              <a href="#"><i class='bx bxs-map' style="color: #3C6E71;margin-right: 20px; font-size: 25px;"></i><?php the_field('street');?></a>
            </div>
            <a class="PropertyName">
              <h2><?php the_field('place');?></h2>
            </a>
            <div class="PropertyFooter">
              <ul>
                <li><?php the_field('info1');?> Rooms</li>
                <li><i class='bx bxs-bed'></i> <?php the_field('info2');?> Beds </li>
                <li><i class='bx bx-area'></i> Area <?php the_field('info3');?>Ft²</li>
              </ul>
            </div>
          </div>
          <div class="Property">
            <div class="PropertyContainer">
              <div class="PropertyImage" style="background-image:url(<?php bloginfo('template_directory') ?>/Room2.jpg) ;"></div>
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
              <div class="PropertyImage" style="background-image:url(<?php bloginfo('template_directory') ?>/Room3.jpg) ;"></div>
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
                  <img src="<?php bloginfo('template_directory') ?>/Slide4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" style="height: 359.72px;">
                  <img src="<?php bloginfo('template_directory') ?>/Slide1.jpg" class="d-block w-100" alt="..." style="object-fit: fill;">
                </div>
                <div class="carousel-item">
                  <img src="<?php bloginfo('template_directory') ?>/Room3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" style="height: 359.72px;">
                  <img src="<?php bloginfo('template_directory') ?>/Slide2.jpg" class="d-block w-100" alt="..." style="object-fit: fill;">
                </div>
                <div class="carousel-item">
                  <img src="<?php bloginfo('template_directory') ?>/Slide3.jpg" class="d-block w-100" alt="...">
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
          <img id="inner" src="<?php bloginfo('template_directory') ?>/Building1.jpg" alt="">
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
          <img src="<?php bloginfo('template_directory') ?>/Building2.jpg" alt="avatar">
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
                <div class="d-block Special"><?php the_field('feedback_field1');?></div>
                <div class="carousel-caption d-none d-md-block">
                  <div class="SlideImage" style="background-image: url(<?php bloginfo('template_directory') ?>/Kanye.jpg);"></div>
                  <h5><?php the_field('name1');?></h5>
                  <p>happy client</p>
                </div>
              </div>
              <div class="carousel-item" align="center">
                <div class="d-block Special"><?php the_field('feedback_field2');?></div>
                <div class="carousel-caption d-none d-md-block">
                  <div class="SlideImage" style="background-image: url(<?php bloginfo('template_directory') ?>/Ana.jpg);"></div>
                  <h5><?php the_field('name2');?></h5>
                  <p>happy client</p>
                </div>
              </div>
              <div class="carousel-item" align="center">
                <div class="d-block Special"><?php the_field('feedback_field3');?></div>                
                <div class="carousel-caption d-none d-md-block">
                  <div class="SlideImage" style="background-image: url(<?php bloginfo('template_directory') ?>/Lionel.jpg);"></div>
                  <h5><?php the_field('name3');?></h5>
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

    <?php
      get_footer();
    ?>

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
