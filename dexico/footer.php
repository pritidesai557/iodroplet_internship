<?php // Template Name: Footer ?>

<!-- Footer -->
<div class="Footer">
      <section>
        <div class="FooterHeader">
          <div class="Heading-1"><?php the_field('small_description',79);?></div>
          <div class="Heading-2"><a href="#" style="text-decoration: none;color: #133b5c;"><?php the_field('company_name',79);?><span style="color: #3C6E71;">.</span></a></div>
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
                <li><a href="#" style="display: flex;align-items: center;"><i class='bx bxs-map' style="color: #3C6E71;margin-right: 20px; font-size: 25px;"></i><?php the_field('address',79)?></a></li>
                <li><a href="#" style="display: flex;align-items: center;"><i class='bx bxs-phone' style="color: #3C6E71;margin-right: 20px; font-size: 25px;"></i><?php the_field('phone_number',79)?></a></li>
                <li><a href="mailto:<?php the_field('e-mail',79);?>" style="display: flex;align-items: center;"><i class='bx bxs-envelope' style="color: hsl(191, 77%, 12%);margin-right: 20px; font-size: 25px;"></i><?php the_field('e-mail',79)?></a></li>
              </ul>
            </div>
            <div class="Box-2" style="display: flex;align-items: center;">
              <a href="<?php the_field('twitter_link',79);?>"><i class='bx bxl-twitter' style="color: #3C6E71;margin-right: 10px;font-size: 35px;"></i></a>
              <a href="<?php the_field('facebook_link',79);?>"><i class='bx bxl-facebook' style="color: #3C6E71;margin-right: 10px;font-size: 35px;"></i></a>
              <a href="<?php the_field('instagram_link',79);?>"><i class='bx bxl-instagram' style="color: #3C6E71;font-size: 35px;"></i></a>  
            </div>
          </div>
        </div>
        <hr>
        <div class="FooterCredits">
          <b><?php the_field('copyrighted_text',79);?></b>
        </div>
      </section>
    </div>