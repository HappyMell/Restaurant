<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 */

get_header(); ?>

		<?php
		if ( have_posts() ) :

			while ( have_posts() ) : the_post(); 
			the_content()
			
			?>

<section class="hero container" id="home">
        <div class="hero__container">
          <div
            data-sal="slide-left"
            data-sal-delay="300"
            data-sal-easing="ease-out-back"
            data-sal-duration="1200"
          >
            <p class="title"><?php echo the_field('top')?></p>
            <h1><?php echo the_field('title')?></h1>
            <div class="underline"></div>
          </div>
          <div
            data-sal="slide-right"
            data-sal-delay="300"
            data-sal-easing="ease-out-back"
            data-sal-duration="1200"
          >
            <h1 class="subtitle"><?php echo the_field('details')?></h1>
            <button class="button__yellow" href="<?php echo get_field('button')['url']?>"><?php echo get_field('button')['title'] ?></button>
          </div>
          <div class="arrow-button">
            <div class="arrow-button__content">
              <a href="#">
                <img src="<?php echo the_field('arrow')?>" />
              </a>
            </div>
          </div>
        </div>
      </section>

	  <section class="main-section container-w">
        <div class="main-section__display">
          <div class="main-section__container container-sm">
            <p class="title"><?php echo the_field('introduction_title')?></p>
            <h2><?php echo the_field('introduction_header')?></h2>
            <p>
             <?php echo the_field('introduction_details')?>
            </p>
          </div>
          <div class="card-container container">
		  <?php $cards = get_field('introduction_cards')?>
		  <?php foreach($cards as $card) {?>
            <div
              class="card"
              data-sal="slide-up"
              data-sal-delay="300"
              data-sal-easing="ease-out-back"
              data-sal-duration="1200"
            >
              <div
                class="card__img"
                style="background-image: url('<?php echo $card['image']?>');"
              ></div>
              <div class="card__container">
                <p class="highlight"><?php echo $card['title']?></p>
                <a href="<?php echo $card['link']['url']?>"><?php echo $card['link']['title']?></a>
              </div>
            </div>
		  <?php }?>           
           
          </div>
        </div>
      </section>

	  <section class="secondary-section " id="rest">
        <div class="secondary-section__display container-w">
          <div class="secondary-section__row ">
            <div class="secondary-section__container">
              <div class="secondary-section__wrapper">
                <p class="title"><?php echo the_field('tradition_title')?></p>
                <h2><?php echo the_field('tradition_header')?></h2>
                <p><?php echo the_field('tradition_details')?></p>
              </div>
            </div>
            <div
              class="style"
              data-sal="slide-up"
              data-sal-delay="300"
              data-sal-easing="ease-out-back"
              data-sal-duration="1200"
            >
              <div
                class="card-container__img"
                style="background-image: url('<?php echo the_field('tradition_image')?>');"
              ></div>
            </div>
          </div>
          <div class="secondary-section__row">
            <div
              class="carousel"
              data-sal="slide-up"
              data-sal-delay="400"
              data-sal-easing="ease-out-back"
              data-sal-duration="1200"
            >
			<?php $images = get_field('place_carousel')?>
			<?php foreach($images as $image) {?>
              <div
                class="carousel-img"
                style="background-image: url('<?php echo $image['image']?>');"
              ></div>
			<?php }?>             
            </div>
            <div class="secondary-section__container ">
              <div
                class="secondary-section__wrapper"
                data-sal="slide-up"
                data-sal-delay="300"
                data-sal-easing="ease-out-back"
                data-sal-duration="1200"
              >
                <p class="title"><?php echo the_field('place_title')?></p>
                <h2><?php echo the_field('place_header')?></h2>
                <p><?php echo the_field('place_details')?></p>
              </div>
            </div>
          </div>
        </div>
      </section>

	  <section class="content-section" id="about">
        <div class="content-section__card container-w">
          <div
            class="content-section__row"
            data-sal="slide-up"
            data-sal-delay="300"
            data-sal-easing="ease-out-back"
            data-sal-duration="1200"
          >
            <div
              class="card content-section__display"
              style="background-image: url('<?php echo the_field('address_image')?>');"
            ></div>
            <div class="card__container">
              <p class="highlight"><?php echo the_field('address_title')?></p>
              <p class="sub-title"><?php echo the_field('address')?></p>
            </div>
          </div>
          <div
            class="content-section__row"
            data-sal="slide-up"
            data-sal-delay="300"
            data-sal-easing="ease-out-back"
            data-sal-duration="1200"
            id="about-us"
          >
            <div class="card-bottom">
              <p class="title"><?php echo the_field('about_us_title')?></p>
              <h2><?php echo the_field('about_us_header')?></h2>
              <p><?php echo the_field('about_us_content')?></p>
              <div
                class="card-bottom__img"
                style="background-image: url('<?php echo the_field('about_us_image')?>');"
              ></div>
            </div>
          </div>
        </div>
      </section>

	  <section
        class="menu container"
        style="background-image: url('<?php echo the_field('background_image')?>');"
        id="menu"
        data-sal="slide-up"
        data-sal-delay="300"
        data-sal-easing="ease-out-back"
        data-sal-duration="1200"
      >
        <div class="menu__wrapper container-w">
          <div class="menu__main">
            <div class="menu__container">
              <div class="menu__intro">
                <p class="title"><?php echo the_field('menu_title')?></p>
                <h2><?php echo the_field('menu_header')?></h2>
                <p><?php echo the_field('menu_details')?></p>
              </div>
              <div id="tabs">
                <div class="menu__start">

                  <ul class="menu__tabs">
				  <?php $tabs = get_field('menu_tabs')?>
				  <?php foreach($tabs as $tab) {?>
                    <li><a href="<?php echo $tab['tabs']['url']?>"><?php echo $tab['tabs']['title']?></a></li>
				  <?php }?>
                  </ul>
                </div>
                <div id="<?php echo the_field('breakfast_id')?>" class="main-menu">
				<?php $items = get_field('breakfast_menu_items')?>
				<?php foreach($items as $item) {?>
                  <div class="menu__item">
                    <div class="menu__title">
                      <p class="food-title"><?php echo $item['item']?></p>
                    </div>
                    <div class="menu__price">
                      <p class="food-price"><?php echo $item['price']?></p>
                    </div>
                    <div class="menu__details">
                      <p class="small">
                        <?php echo $item['details']?>
                      </p>
                    </div>
                  </div>
				<?php }?>

        
                </div>
                <div id="<?php echo the_field('lunch_id')?>" class="main-menu">
				<?php $lunchItems = get_field('lunch_menu_items')?>
				<?php foreach($lunchItems as $lunchItem) {?>
                  <div class="menu__item">
                    <div class="menu__title">
                      <p class="food-title"><?php echo $lunchItem['item']?></p>
                    </div>
                    <div class="menu__price">
                      <p class="food-price"><?php echo $lunchItem['price']?></p>
                    </div>
                    <div class="menu__details">
                      <p class="small">
                       <?php echo $lunchItem['details']?>
                      </p>
                    </div>
                  </div>
				<?php }?>
            
                </div>
                <div id="<?php echo the_field('dinner_id')?>" class="main-menu">
				<?php $dinnerItems = get_field('dinner_menu_items')?>
				<?php foreach($dinnerItems as $dinnerItem) {?>
                  <div class="menu__item">
                    <div class="menu__title">
                      <p class="food-title"><?php echo $dinnerItem['item']?></p>
                    </div>
                    <div class="menu__price">
                      <p class="food-price"><?php echo $dinnerItem['price']?></p>
                    </div>
                    <div class="menu__details">
                      <p class="small"><?php echo $dinnerItem['details']?></p>
                    </div>
                  </div>
				<?php }?>           
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="main-section container-w" id="services">
        <div class="main-section__display container">
          <div
            class="main-section__container container-sm"
            data-sal="slide-up"
            data-sal-delay="300"
            data-sal-easing="ease-out-back"
            data-sal-duration="1200"
          >
            <p class="title"><?php echo the_field('services_title')?></p>
            <h2><?php echo the_field('services_header')?></h2>
            <p><?php echo the_field('services_details')?></p>
          </div>
          <div class="service-box-container">
          <?php $serviceCard = get_field('services_card')?>
          <?php foreach($serviceCard as $serviceCards) {?>
            <div
              class="service-box "
              data-sal="slide-up"
              data-sal-delay="300"
              data-sal-easing="ease-out-back"
              data-sal-duration="1200"
            >
              <div class="service-box__zoom">
                <div class="service-box__top">
                  <div class="service-box__icon">
                    <img src="<?php echo $serviceCards['icon']?>" />
                  </div>
                </div>
                <div class="service-box__text">
                  <h4><?php echo $serviceCards['header']?></h4>
                  <p><?php echo $serviceCards['content']?></p>
                </div>
                <button class="button-yellow">
                  Learn More
                </button>
              </div>
            </div>
          <?php }?>     
      
          </div>
        </div>
</section>

<section class="bottom-section">
        <div class="content-wrapper container-w">
          <div
            class="block"
            data-sal="slide-left"
            data-sal-delay="300"
            data-sal-easing="ease-out-back"
            data-sal-duration="1200"
          >
            <p class="title"><?php echo the_field('visit_title')?></p>
            <h3 class="big"><?php echo the_field('visit_header')?></h3>
            <div class="underline"></div>
          </div>
        </div>
        <div
          class="content-wrapper container-w"
          data-sal="slide-right"
          data-sal-delay="300"
          data-sal-easing="ease-out-back"
          data-sal-duration="1200"
        >
          <div class="stars">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              version="1.1"
              id="Capa_1"
              x="0px"
              y="0px"
              width="512px"
              height="512px"
              viewBox="0 0 306 306"
              style="enable-background:new 0 0 306 306;"
              xml:space="preserve"
            >
              <g>
                <g id="star-rate">
                  <polygon
                    points="153,230.775 247.35,299.625 211.65,187.425 306,121.125 191.25,121.125 153,6.375 114.75,121.125 0,121.125     94.35,187.425 58.65,299.625   "
                    fill="#FFDA44"
                  />
                </g>
              </g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              version="1.1"
              id="Capa_1"
              x="0px"
              y="0px"
              width="512px"
              height="512px"
              viewBox="0 0 306 306"
              style="enable-background:new 0 0 306 306;"
              xml:space="preserve"
            >
              <g>
                <g id="star-rate">
                  <polygon
                    points="153,230.775 247.35,299.625 211.65,187.425 306,121.125 191.25,121.125 153,6.375 114.75,121.125 0,121.125     94.35,187.425 58.65,299.625   "
                    fill="#FFDA44"
                  />
                </g>
              </g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              version="1.1"
              id="Capa_1"
              x="0px"
              y="0px"
              width="512px"
              height="512px"
              viewBox="0 0 306 306"
              style="enable-background:new 0 0 306 306;"
              xml:space="preserve"
            >
              <g>
                <g id="star-rate">
                  <polygon
                    points="153,230.775 247.35,299.625 211.65,187.425 306,121.125 191.25,121.125 153,6.375 114.75,121.125 0,121.125     94.35,187.425 58.65,299.625   "
                    fill="#FFDA44"
                  />
                </g>
              </g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              version="1.1"
              id="Capa_1"
              x="0px"
              y="0px"
              width="512px"
              height="512px"
              viewBox="0 0 306 306"
              style="enable-background:new 0 0 306 306;"
              xml:space="preserve"
            >
              <g>
                <g id="star-rate">
                  <polygon
                    points="153,230.775 247.35,299.625 211.65,187.425 306,121.125 191.25,121.125 153,6.375 114.75,121.125 0,121.125     94.35,187.425 58.65,299.625   "
                    fill="#FFDA44"
                  />
                </g>
              </g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              version="1.1"
              id="Capa_1"
              x="0px"
              y="0px"
              width="512px"
              height="512px"
              viewBox="0 0 306 306"
              style="enable-background:new 0 0 306 306;"
              xml:space="preserve"
            >
              <g>
                <g id="star-rate">
                  <polygon
                    points="153,230.775 247.35,299.625 211.65,187.425 306,121.125 191.25,121.125 153,6.375 114.75,121.125 0,121.125     94.35,187.425 58.65,299.625   "
                    fill="#FFDA44"
                  />
                </g>
              </g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
            </svg>
          </div>
          <p class="bottom"><?php echo the_field('visit_footer')?></p>
        </div>
      </section>
      <section
        class="main-section container"
        id="contact"
        data-sal="slide-up"
        data-sal-delay="300"
        data-sal-easing="ease-out-back"
        data-sal-duration="1200"
      >
        <div class="form container-w">
          <div class="form__row">
            <form action="/action_page.php">
              <div >
                <div class="input-container">
                  <label for="name"><b>Name:</b></label>
                  <br />
                  <input
                    type="text"
                    placeholder="Your name"
                    name="name"
                    required
                    style="background-image: url('img/name.png');"
                  />
                </div>
                <br />
                <div class="input-container">
                  <label for="phone"><b>Phone:</b></label>
                  <br />
                  <input
                    type="text"
                    placeholder="Your phone"
                    name="phone"
                    required
                    style="background-image: url('img/phone.png');"
                  />
                </div>
                <br />
                <div class="input-container">
                  <label for="email"><b>Email:</b></label>
                  <br />
                  <input
                    type="email"
                    placeholder="Your email address"
                    name="email"
                    required
                    style="background-image: url('img/email.png');"
                  />
                </div>
                <br />
                <div class="input-container">
                  <label for="message"><b>Message</b></label>
                  <br />
                  <textarea name="message" rows="8" col="8">
Your Message</textarea
                  >
                </div>
                <br />
                <button type="submit" class="submit-button">Submit</button>
              </div>
            </form>
          </div>
          <div class="form__row">
            <div id="map"></div>
          </div>
        </div>
      </section>
      <section class="main-section">
        <div class="main-section__details container-w">
        <?php $contactCards = get_field('contact_cards')?>
        <?php foreach($contactCards as $contactCard) {?>
          <div class="main-section__wrapper">
            <div
              class="col"
              data-sal="slide-up"
              data-sal-delay="300"
              data-sal-easing="ease-out-back"
              data-sal-duration="1200"
            >
              <img src="<?php echo $contactCard['image']?>" />
              <h3><?php echo $contactCard['header']?></h3>
              <p><?php echo $contactCard['details_one']?></p>
              <p><?php echo $contactCard['details_two']?></p>
            </div>
          </div>
        <?php }?>         
       
        </div>
      </section>


			<?php endwhile;
		endif; ?>

<?php
get_footer();
