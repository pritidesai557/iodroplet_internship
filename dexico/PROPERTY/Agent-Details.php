<?php 
  /* Template Name: Agent Details*/
  // <?php bloginfo('template_directory');
  get_header();
?>

    <!-- Agent-Element-1 -->
    <div class="Agent-Element-1">
        <section>
          <div class="Cont" style="width: 100%;height: 100%;overflow: hidden;"><div class="Pic"></div></div>
            <div class="Text">
                <div class="Piece-1">Agent Details</div>
                <div class="LinkPath"><a href="../index.html">Home</a> » <a href="">Templates</a> » Agent Details</div>
            </div>
        </section>
    </div>

    <!-- Agent-Details-Element-1 -->
    <div class="Agent-Details-Element-1">
        <section>
            <div class="Box-1">
                <div class="Pic"></div>
            </div>
            <div class="Box-2">
                <div class="Bio">
                    <div class="Name"><a href="#" style="text-decoration: none;color: rgb(19,59,92);font-size: 25px;font-weight: 500;height: 33.59px;width: 100%;line-height: 33.6px;">Polina Podolski</a></div>
                    <div class="Phno"><a href="#" style="text-decoration: none;color: rgb(65,68,75)"><b>+ 123 456 789</b></a></div>
                    <div class="SocialMedia" style="width: 230px;height: 40px;font-size: 35px;">
                        <a href=""><i class='bx bxl-twitter' style="color: #3C6E71;margin-right: 5px;"></i></a>
                        <a href=""><i class='bx bxl-facebook' style="color: #3C6E71;margin-right: 5px;"></i></a>
                        <a href=""><i class='bx bxl-instagram' style="color: #3C6E71;"></i></a>  
                    </div>
                    <div class="Content">And not only is that heart-breaking, but it has broad implications for the economy,” added Hamrick. “It’s not only a case of the virus causing an impact on lives and livelihoods, but it impacts our lives in other ways that don’t relate to health. Obviously, housing activity is key for the broader economy, and right now it may be one of the more positive impacts that is being seen. The housing market is performing better than other aspects of the economy</div>
                    <div class="ViewButton">
                        <button class="btn btn-primary" type="button">− Write</button>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Third Segment -->
    <div class="ThirdSegment">
        <section>
          <div class="PropertyHeader">Property Highlights</div>
          <div class="Properties">
            <div class="Property">
              <div class="PropertyContainer">
                <div class="PropertyImage" style="background-image:url(<?php bloginfo('template_directory');?>/Room1.jpg) ;"></div>
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
                <div class="PropertyImage" style="background-image:url(<?php bloginfo('template_directory');?>/Room2.jpg) ;"></div>
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
                <div class="PropertyImage" style="background-image:url(<?php bloginfo('template_directory');?>/Room3.jpg) ;"></div>
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

    <?php get_footer(); ?>
  
      <!-- Bootstrap JavaScript files -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
      <script>
        Trans = document.querySelector('.Agent-Element-1');
  window.onscroll = () => {
    console.log(Trans);
    let top = window.scrollY;
    let offset = Trans.offsetTop - 70;
    console.log(
      'top:', top,
      'offset:', offset
    );
    if(top>=offset && top <100){
      console.log(Trans.childNodes[1].childNodes[1].childNodes[0].style.transform="scale("+(top/82)+")");
    }
  }
      </script>
</body>
</html>