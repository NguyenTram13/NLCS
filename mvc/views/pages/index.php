<div class="main">
  <div class="main-background">
    <?php
    foreach ($data['sliders'] as $slider) {
      echo '
      <div class="main-background-content">
      <div class="mbc-img1">

        <img src="' . _PATH_UPLOAD_SLIDER . '/' . $slider['img'] . '" alt="">
      </div>
      <div class="w-50 background-text bg-text1">
        <h4>' . $slider['caption'] . '</h4>
        <h2 class=" text-center">' . $slider['title'] . '</h2>
        <a href="' . _WEB_ROOT . '/Shop' . '">shop now
          <i class="fa-solid fa-arrow-right-long"></i>
        </a>
      </div>
    </div>
            ';
    }
    ?>

  </div>
  <div class="main-produce">
    <div class="main-produce-content container">
      <div class="row">
        <div class="col-xs-12 col-lg-6 main-produce-left" data-aos="fade-right">
          <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/main/1.jpg ' ?>" alt="" />
        </div>
        <div class="col-xs-12 col-lg-6 main-produce-right" data-aos="fade-left">
          <h4>30 Years Experience</h4>
          <h2>We Cultivate Tea for Everyday Drinkers</h2>
          <p>
            Eundesrwell pasmegna prsonal ertion and smegna mel prsone
            auter veiw all abore lore andosrs wiand armans.
          </p>
          <div class="right-img">
            <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/main/2.jpg' ?>" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-product w-[70%] mx-[auto]">
    <div class="new-arrival-title">
      <div data-aos="fade-up" data-aos-duration="1000">
        <span>
          <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/main/wave-2.png' ?>" alt="" />
          Our Tours
          <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/main/wave-2.png' ?>" alt="" />
        </span>
      </div>
      <h2 data-aos="fade-up" data-aos-duration="2000">New Arrivals</h2>
    </div>
    <div class="container new-arrival-list" data-aos="fade-up" data-aos-duration="3000">

      <div class="row product-list product-list2  gx-3">
        <?php
        foreach ($data['productNews'] as $new) {
        ?>
          <div class="col-xs-12 col-sm-6 col-lg-3 ">
            <div class="item new-arrival-item shadow " data-id=" <?php echo $new['id'] ?>">
              <div class="new-arrival-img">
                <img src="<?php echo _PATH_UPLOAD_PRODUCT . $new['img'] ?>">
                <div class="new-arrival-other">
                  <div class="other-icon">
                    <span class="other-icon-cart" data-url="<?php echo _WEB_ROOT . '/ajax' ?>" data-pathimg="<?php echo _PATH_UPLOAD_PRODUCT  ?>" data-id="<?php echo $new['id'] ?>">
                      <i class="fa-solid fa-bag-shopping"></i>
                    </span>
                    <span>
                      <i class="fa-solid fa-heart"></i>
                    </span>
                    <span>
                      <i class="fa-solid fa-scale-balanced"></i>
                    </span>
                  </div>
                  <div class="other-btn">
                    <button>Quick View</button>
                  </div>
                </div>

                <div>
                  <span class="sale">12% off</span>
                </div>
              </div>
              <div class="arrival-product-content">
                <h3><a href="<?php echo _WEB_ROOT . '/Detail/index/' . $new['id'] ?>"><?php echo $new['name'] ?></a></h3>
                <div class="arrival-product-evaluate">
                  <span class="raiting">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </span>
                  <span class="sold-out"><?php echo $new['views'] ?></span>
                </div>
                <p class="arrival-product-price">
                  <span>$</span>
                  <span class="product-price "><?php echo $new['price'] ?></span>
                </p>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </div>

  <div class="main-work w-[70%] mx-[auto]">
    <div class="main-work-title">
      <div data-aos="fade-up" data-aos-duration="1000">
        <span>
          <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/main/wave-2.png' ?>" alt="" />
          Our Tours
          <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/main/wave-2.png ' ?>" alt="" />
        </span>
      </div>
      <h2 data-aos="fade-up" data-aos-duration="2000">How We Work</h2>
    </div>
    <div class="container main-work-list" data-aos="fade-up" data-aos-duration="3000">
      <div class="row">
        <a class="col-xs-12 col-md-4 main-work-item">
          <div class="work-item-img">
            <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/tea/leaf.png ' ?>" alt="" />
          </div>
          <div class="work-item-content">
            <h4 class="work-item-name">Tea Tours</h4>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            </p>
            <h5 class="work-item-read">Read more</h5>
          </div>
        </a>
        <a class="col-xs-12 col-md-4 main-work-item">
          <div class="work-item-img">
            <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/tea/tea-set.png ' ?>" alt="" />
          </div>
          <div class="work-item-content">
            <h4 class="work-item-name">Tea Tasting</h4>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            </p>
            <h5 class="work-item-read">Read more</h5>
          </div>
        </a>
        <a class="col-xs-12 col-md-4 main-work-item">
          <div class="work-item-img">
            <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/tea/tea (1).png ' ?>" alt="" />
          </div>
          <div class="work-item-content">
            <h4 class="work-item-name">Unique Products</h4>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            </p>
            <h5 class="work-item-read">Read more</h5>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="main-quality">
    <div class="container main-quality-content">
      <div class="row">
        <div class="col-sm-12 col-lg-6 quality-content-left" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
          <div class="quality-left-title">
            <h2>What Do We Offer For You?</h2>
            <p>
              Lorem Ipsum. Proin gravida nibh vel velit tauctor aliquet.
              Aenean sollicitudin.
            </p>
          </div>
          <div class="quality-left-list">
            <div class="row">
              <div class="col-6 quality-left-item">
                <div class="quality-left-img">
                  <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/tea/tea-leaf.png ' ?>" alt="" />
                </div>
                <div class="quality-left-element">
                  <h3>100% Organic</h3>
                  <p>Pick Up The Best Product</p>
                </div>
              </div>
              <div class="col-6 quality-left-item">
                <div class="quality-left-img">
                  <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/tea/tea-pot2.png ' ?>" alt="" />
                </div>
                <div class="quality-left-element">
                  <h3>Tea-Ware Set</h3>
                  <p>Comfortable and Fastert</p>
                </div>
              </div>
              <div class="col-6 quality-left-item">
                <div class="quality-left-img">
                  <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/tea/tea-mug.png ' ?>" alt="" />
                </div>
                <div class="quality-left-element">
                  <h3>Always Fresh</h3>
                  <p>The Single Origin Tea</p>
                </div>
              </div>
              <div class="col-6 quality-left-item">
                <div class="quality-left-img">
                  <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/tea/pack.png ' ?>" alt="" />
                </div>
                <div class="quality-left-element">
                  <h3>High Quality</h3>
                  <p>No Primary Defects</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-lg-6 quality-content-right" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
          <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/main/quality.jpg ' ?>" alt="" />
        </div>
      </div>
    </div>
  </div>

  <div class="main-product w-[70%] mx-[auto]" data-aos="fade-up">
    <div class="new-arrival-title">
      <div data-aos="fade-up" data-aos-duration="1000">
        <span>
          <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/main/wave-2.png ' ?>" alt="" />
          Our Tours
          <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/main/wave-2.png ' ?>" alt="" />
        </span>
      </div>
      <h2 data-aos="fade-up" data-aos-duration="2000">Our Featured</h2>
    </div>
    <div class="container new-arrival-list" data-aos="fade-up" data-aos-duration="3000">
      <div class="row product-list2  ">
        <?php
        foreach ($data['productFeatureds'] as $new) {
        ?>
          <div class="col-xs-12 col-sm-6 col-lg-3 ">
            <div class="item new-arrival-item shadow " data-url="<?php echo _WEB_ROOT . '/ajax' ?>" data-pathimg="<?php echo _PATH_UPLOAD_PRODUCT  ?>" data-id="<?php echo $new['id'] ?>">
              <div class="new-arrival-img">
                <img src="<?php echo _PATH_UPLOAD_PRODUCT . $new['img'] ?>">
                <div class="new-arrival-other">
                  <div class="other-icon">
                    <span class="other-icon-cart" data-id="<?php echo $new['id'] ?>">
                      <i class="fa-solid fa-bag-shopping"></i>
                    </span>
                    <span>
                      <i class="fa-solid fa-heart"></i>
                    </span>
                    <span>
                      <i class="fa-solid fa-scale-balanced"></i>
                    </span>
                  </div>
                  <div class="other-btn">
                    <button>Quick View</button>
                  </div>
                </div>

                <div>
                  <span class="sale">12% off</span>
                </div>
              </div>
              <div class="arrival-product-content">
                <h3><a href="<?php echo _WEB_ROOT . '/Detail/index/' . $new['id'] ?>"><?php echo $new['name'] ?></a></h3>
                <div class="arrival-product-evaluate">
                  <span class="raiting">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </span>
                  <span class="sold-out"><?php echo $new['views'] ?></span>
                </div>
                <p class="arrival-product-price">
                  <span>$</span>
                  <span class="product-price "><?php echo $new['price'] ?></span>
                </p>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </div>

  <div class="main-client ">
    <div class="main-client-content container">
      <div class="row">
        <div class="col-xs-12 col-md-6 main-client-left" data-aos="fade-up">
          <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/main/quality.jpg ' ?>" alt="" />
        </div>
        <div class="col-xs-12 col-md-6 main-client-right">
          <div class="client-right-img" data-aos="fade-up" data-aos-duration="1000">
            <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/main/main-client.png ' ?>" alt="" />
          </div>
          <div class="client-right-title" data-aos="fade-up" data-aos-duration="2000">
            <span>
              <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/main/wave-2.png ' ?>" alt="" />
              Happy Clients
              <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/main/wave-2.png ' ?>" alt="" />
            </span>

            <p>
              This is simply the best useful tea shop for any kinds of
              tea. Just be patient when configuring. There are so many
              types and you can choose everything.
            </p>
            <h3>Karina Marie</h3>
            <h4>CLIENTS</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-last w-[70%] mx-[auto]" data-aos="fade-up" data-aos-duration="3000">
    <div class="main-last-content">
      <div class="main-last-title">
        <div>
          <span>
            <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/main/wave-2.png ' ?>" alt="" />
            Our Tours
            <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/main/wave-2.png ' ?>" alt="" />
          </span>
        </div>
        <h2>Lastest News</h2>
      </div>
      <div class="main-last-list container">
        <div class="row">
          <div class="col-xs-12 col-md-6 col-lg-4 last-list-item">
            <div class="last-list-img">
              <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/main/last1.jpg ' ?>" alt="" />
              <span class="lifestyle">Lifestyle</span>
              <span class="creative">Creative</span>

              <!-- <span class="fashion" >Fashion</span>
                    <span class="food" >Food</span> -->
            </div>
            <div class="last-list-element">
              <p class="last-list-date"><a href="#">28 June 2022</a></p>
              <h2><a href="#">Made confident bigger chance as</a></h2>
              <p class="last-list-comment">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Phasellus hendrerit. Pellentesque aliquet nibh nec urna.…
              </p>
              <div class="last-list-footer">
                <div class="last-list-left">
                  <span>
                    <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/logo/User-avatar.svg.png ' ?>" alt="" />
                  </span>
                  <span>by</span>
                  <span class="last-name-user"><a href="#">John Doe</a></span>
                </div>

                <div class="last-list-right">
                  <a href="#">
                    <span>
                      <i class="fa-solid fa-heart"></i>
                    </span>
                    <span class="last-list-heart">0</span>
                  </a>
                  <a href="#">
                    <span>
                      <i class="fa-solid fa-comment"></i>
                    </span>
                    <span class="last-list-cmt">0</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-6 col-lg-4 last-list-item">
            <div class="last-list-img">
              <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/main/last2.jpg ' ?>" alt="" />
              <span class="lifestyle">Lifestyle</span>
              <span class="creative">Creative</span>

              <!-- <span class="fashion" >Fashion</span>
                    <span class="food" >Food</span> -->
            </div>
            <div class="last-list-element">
              <p class="last-list-date"><a href="#">28 June 2022</a></p>
              <h2>
                <a href="#">Not roasted accomodations</a>
              </h2>
              <p class="last-list-comment">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Phasellus hendrerit. Pellentesque aliquet nibh nec urna.…
              </p>
              <div class="last-list-footer">
                <div class="last-list-left">
                  <span>
                    <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/logo/User-avatar.svg.png ' ?>" alt="" />
                  </span>
                  <span>by</span>
                  <span class="last-name-user"><a href="#">John Doe</a></span>
                </div>

                <div class="last-list-right">
                  <a href="#">
                    <span>
                      <i class="fa-solid fa-heart"></i>
                    </span>
                    <span class="last-list-heart">0</span>
                  </a>
                  <a href="#">
                    <span>
                      <i class="fa-solid fa-comment"></i>
                    </span>
                    <span class="last-list-cmt">0</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-6 col-lg-4 last-list-item">
            <div class="last-list-img">
              <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/main/last3.jpg ' ?>" alt="" />
              <span class="lifestyle">Lifestyle</span>
              <span class="creative">Creative</span>

              <!-- <span class="fashion" >Fashion</span>
                    <span class="food" >Food</span> -->
            </div>
            <div class="last-list-element">
              <p class="last-list-date"><a href="#">28 June 2022</a></p>
              <h2>
                <a href="#">Spicey choose plush amazing</a>
              </h2>
              <p class="last-list-comment">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Phasellus hendrerit. Pellentesque aliquet nibh nec urna.…
              </p>
              <div class="last-list-footer">
                <div class="last-list-left">
                  <span>
                    <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/logo/User-avatar.svg.png ' ?>" alt="" />
                  </span>
                  <span>by</span>
                  <span class="last-name-user">
                    <a href="#">John Doe</a>
                  </span>
                </div>

                <div class="last-list-right">
                  <a href="#">
                    <span>
                      <i class="fa-solid fa-heart"></i>
                    </span>
                    <span class="last-list-heart">0</span>
                  </a>

                  <a href="#">
                    <span>
                      <i class="fa-solid fa-comment"></i>
                    </span>
                    <span class="last-list-cmt">0</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>