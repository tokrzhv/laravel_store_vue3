<template>
  <div>
    <main class="overflow-hidden">
      <section class="banner-style-3 overflow-hidden">
        <!-- Banner Carousel -->
        <div class="banner-slide3 slick" data-slick='{"dots": true, "infinite": true, "speed": 600, "slidesToShow": 1,
                "slidesToScroll": 1, "arrows": false, "autoplay": true, "autoplaySpeed": 6000,
                 "fade": false, "pauseOnHover": false}'>

          <!-- Slide -->
          <div class="slide">
            <div class="contant-box position-relative">

              <img class="bg-img hundread-vh" src="/assets/images/home-three/home01.jpg" alt="image">

              <div class="content-holder p-0 absolute-content">
                <div class="container  w-100 h-100">
                  <div class="row align-items-center justify-content-start w-100 h-100">
                    <div class="col-xl-6 col-md-9">
                      <div class="content-common home3c slideup position-relative">
                        <h6 class="new wow animated fadeInUp">NEW COLLECTION</h6>
                        <h1 class="wow animated fadeInUp" data-wow-delay="0.4s">
                          Run anywhere <br> comfort everywhere.
                        </h1>
                        <p class="text wow animated fadeInUp text-dark">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vehicula
                          faucibus massa est elit maecenas.
                        </p>
                          <router-link to="/products"
                                       class="btn--primary button style2 wow animated fadeInUp">Shop
                              Collection</router-link>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide -->
          <div class="slide">
            <div class="contant-box position-relative">


              <img class="bg-img hundread-vh" src="/assets/images/home-three/home02.jpg" alt="image">


              <div class="content-holder p-0 absolute-content">
                <div class="container w-100 h-100">
                  <div class="row align-items-center justify-content-end w-100 h-100">
                    <div class="col-xl-6 col-md-9">
                      <div class="content-common slidedown home3c position-relative text-center">
                        <h6 class="new wow animated fadeInUp">NEW COLLECTION</h6>
                        <h1 class="wow animated fadeInUp text-light" data-wow-delay="0.4s">
                          Run anywhere <br> comfort everywhere.
                        </h1>
                        <p class="text wow animated fadeInUp ms-auto me-auto text-light">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vehicula
                          faucibus massa est elit maecenas.
                        </p>
                       <router-link to="/products"
                           class="btn--primary button style2 wow animated fadeInUp">Shop
                           Collection</router-link>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="catagory4 pt-60 pb-60">
        <div class="container">
          <div class="row mt--30">
            <div class="col-lg-6 h-100 mt-30">
              <a href="shop-grid.html" class="catagory-single one home3cat">
                <img src="/assets/images/home-three/cat-1.png" alt="#" class="background-img bg-img imgone">
                <div class="content">
                  <div class="row w-100 h-100 align-items-center">
                    <div class="col-xl-7 col-md-9">
                      <h5 class="wow animated fadeInUp" data-wow-delay="0.2s"> Shop & Save</h5>
                      <h3 class="wow animated fadeInUp" data-wow-delay="0.3s"> Exclusive Women Shoes
                      </h3>
                      <span class=" link wow animated fadeInUp" data-wow-delay="0.4s"> explore
                                            now</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="co-12 mt-30 ">
                  <a href="shop-grid.html" class="catagory-single home3cat">
                    <img src="/assets/images/home-three/catbg-3.png" alt=""
                         class="background-img bg-img">
                    <div class="content">
                      <div class="row w-100 h-100 align-items-center">
                        <div class="col-12">
                          <h5 class=" wow animated red fadeInUp" data-wow-delay="0.2s"> 20% Off
                          </h5>
                          <h3 class=" wow animated fadeInUp" data-wow-delay="0.3s"> Men Sneakers
                          </h3>
                          <span class="link wow animated fadeInUp" data-wow-delay="0.4s"> explore
                                                    now</span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-12 mt-30">
                  <a href="shop-grid.html" class="catagory-single home3cat">
                    <img src="/assets/images/home-three/catbg-2.png" alt=""
                         class="background-img bg-img">
                    <div class="content">
                      <div class="row w-100 h-100 align-items-center">
                        <div class="col-xxl-6 col-lg-9">
                          <h5 class=" wow animated fadeInUp" data-wow-delay="0.2s"> New Products
                          </h5>
                          <h3 class=" wow animated fadeInUp" data-wow-delay="0.3s"> Women Sneakers
                          </h3>
                          <span class="link wow animated fadeInUp" data-wow-delay="0.4s"> explore
                                                    now</span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</template>

<script>
export default {
  name: "Index",
  mounted() {
    $(document).trigger('changed')
  }
}
</script>

<style>

</style>
