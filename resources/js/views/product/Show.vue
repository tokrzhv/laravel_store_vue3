<template>
  <div>
    <main v-if="product">
      <!--Start Shop Details Breadcrumb-->
      <div class="shop-details-breadcrumb wow fadeInUp animated overflow-hidden ">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="shop-details-inner">
                <ul class="shop-details-menu">
                  <li>
                    <router-link to="/">Home</router-link>
                  </li>
                  <li class="active">Shop Details</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End Shop Details Breadcrumb-->
      <!--Start Shop Details Top-->
      <section class="shop-details-top two ">
        <div class="container">
          <div class="row mt--30">
            <div class="col-xl-6 col-lg-6 mt-30 wow fadeInUp animated">
              <div class="single-product-box one">
                <div class="big-product single-product-one slider-for">
                  <div>
                    <div class="single-item"> <img src="/assets/images/shop/products-img1.jpg" alt="">
                      <div class="ptag"> <span class="one">-20% </span> </div> <a href="#0"
                                                                                  class="love"> <i class="flaticon-like"></i> </a>
                    </div>
                  </div>
                  <div>
                    <div class="single-item"> <img src="/assets/images/shop/products-img2.jpg" alt="">
                      <div class="ptag"> <span class="one">-20% </span> </div> <a href="#0"
                                                                                  class="love"> <i class="flaticon-like"></i> </a>
                    </div>
                  </div>
                  <div>
                    <div class="single-item"> <img src="/assets/images/shop/products-img3.jpg" alt="">
                      <div class="ptag"> <span class="one">-20% </span> </div> <a href="#0"
                                                                                  class="love"> <i class="flaticon-like"></i> </a>
                    </div>
                  </div>
                  <div>
                    <div class="single-item"> <img src="/assets/images/shop/products-img4.jpg" alt="">
                      <div class="ptag"> <span class="one">-20% </span> </div> <a href="#0"
                                                                                  class="love"> <i class="flaticon-like"></i> </a>
                    </div>
                  </div>
                  <div>
                    <div class="single-item"> <img src="/assets/images/shop/products-img5.jpg" alt="">
                      <div class="ptag"> <span class="one">-20% </span> </div> <a href="#0"
                                                                                  class="love"> <i class="flaticon-like"></i> </a>
                    </div>
                  </div>
                </div>
                <div class="navholder">
                  <div class="product-slicknav single-product-one-nav slider-nav">
                    <div> <span class="single-item"> <img
                        src="/assets/images/shop/shop-details-top-img-1.png" alt=""> </span>
                    </div>
                    <div> <span class="single-item"> <img
                        src="/assets/images/shop/shop-details-top-img-2.png" alt=""> </span>
                    </div>
                    <div> <span class="single-item"> <img
                        src="/assets/images/shop/shop-details-top-img-3.png" alt=""> </span>
                    </div>
                    <div> <span class="single-item"> <img
                        src="/assets/images/shop/shop-details-top-img-1.png" alt=""> </span>
                    </div>
                    <div> <span class="single-item"> <img
                        src="/assets/images/shop/shop-details-top-img-2.png" alt=""> </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-6 col-lg-6 mt-30 wow fadeInUp animated">
              <div class="shop-details-top-right ">
                <div class="shop-details-top-right-content-box">
                  <div class="shop-details-top-review-box">
                    <div class="shop-details-top-review">
                      <ul>
                        <li><i class="flaticon-star-1"></i></li>
                        <li><i class="flaticon-star-1"></i></li>
                        <li><i class="flaticon-star-1"></i></li>
                        <li><i class="flaticon-star-1"></i></li>
                        <li><i class="flaticon-star-1"></i></li>
                      </ul>
                      <p>(2 Reviews)</p>
                    </div>
                  </div>
                  <div class="shop-details-top-title">
                    <h3>{{ product.model }}</h3>
                  </div>
                  <ul class="shop-details-top-info">
                    <li><span>SKU:</span> 25d5214</li>
                    <li><span>Vendor:</span> Flemeno</li>
                  </ul>
                  <div class="shop-details-top-price-box">
                    <h3>{{ product.price}}
                      <del>${{ product.old_price}}</del>
                    </h3>
                  </div>


                  <div class="shop-details-top-color-sky-box">
                    <h4>Color: </h4>
                    <ul class="varients">
                      <li>
                          <template v-for="groupProduct in product.group_products">
                            <a @click.prevent=redirectGetProduct(groupProduct.id)
                               v-for="color in groupProduct.colors" :href="groupProduct.id"
                               :style="`background: #${color.title}`"  class="shop-details-top-color-sky-img">
                              <span></span>
                            </a>
                          </template>
                      </li>
                    </ul>
                  </div>

                  <ul class="shop-details-top-ask-question">
                    <li><a href="#0">
                      <div class="icon"><i class="flaticon-left-and-right-arrows"></i></div>
                      <div class="text">
                        <p>Add to Compare</p>
                      </div>
                    </a></li>
                    <li><a href="#0">
                      <div class="icon"><i class="flaticon-chat-bubble"></i></div>
                      <div class="text">
                        <p>Ask Question</p>
                      </div>
                    </a></li>
                  </ul>
                  <div class="timer-box">
                    <h4>Running Offer</h4>
                    <div class="countdown-timer">
                      <div class="default-coundown">
                        <div class="box">
                          <div class="countdown time-countdown-two" data-countdown-time="2022/03/12"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <p class="shop-details-top-product-sale"><span>20</span> Persons looking for this product</p>
                  <div class="product-quantity">
                    <h4>Quantity</h4>
                    <div class="product-quantity-box d-flex align-items-center flex-wrap">
                      <div class="qty mr-2">
                        <div class="qtySelector text-center">
                          <span class="decreaseQty">
                            <i class="flaticon-minus"></i>
                          </span>
                          <input type="number" class="qtyValue" value="1"/>
                          <span class="increaseQty">
                            <i class="flaticon-plus"></i>
                          </span>
                        </div>
                      </div>
                      <div class="product-quantity-check"><i class="flaticon-select"></i>
                        <p>In Stock</p>
                      </div>
                    </div>
                  </div>
                  <div class="shop-details-top-order-now">
                    <i class="flaticon-point"></i>
                    <p>Order Now !</p>
                  </div>

                  <div class="shop-details-top-cart-box-btn">
                    <button  @click.prevent="addToCart(product.id, product.model )" class="btn--primary style2 " type="submit">Add to Cart</button>
                  </div>

                  <div class="shop-details-top-free-shipping"><i class="flaticon-shipping"></i>
                    <p>FREE SHIPPING</p>
                  </div>

                  <div class="shop-details-top-social-box">
                    <p>Share:</p>
                    <ul class="ps-1 social_link d-flex align-items-center">
                      <li><a href="https://www.facebook.com/" class="active" target="_blank"><i
                          class="flaticon-facebook-app-symbol"></i></a></li>
                      <li><a href="https://www.youtube.com/" target="_blank"><i
                          class="flaticon-youtube"></i></a></li>
                      <li><a href="https://twitter.com/" target="_blank"><i
                          class="flaticon-twitter"></i></a></li>
                      <li><a href="https://www.instagram.com/" target="_blank"><i
                          class="flaticon-instagram"></i></a></li>
                    </ul>
                  </div>
                  <div class="checked-box">
                    <form>
                      <div class="form-group"><input type="checkbox" id="html">
                        <label for="html">I agree with all company terms & condition</label></div>
                    </form>
                  </div>
                  <div class="shop-details-top-buy-now-btn">
                    <a @click.prevent="addToCart(product.id, product.model, product.price, product.image_url )" href="#" class="btn--primary">Buy It Now</a>
                  </div>

                  <p class="shop-details-top-product-delivery">This product estimated delivery between
                    <span>Wednesday 27 October</span> <br> <span>Tuesday 02 November</span></p>
                  <ul class="shop-details-top-category-tags">
                    <li>Category: <span>{{ product.category.title}}</span></li>
                    <li>Tags:
                    <template v-for="tags in product.tags">
                      <span v-for="tag in tags.tags" class="m-1">{{ tag.title }}</span>
                    </template>
                    </li>
                  </ul>

                  <ul class="shop-details-top-feature">
                    <li>
                      <div class="icon"><i class="flaticon-portfolio"></i></div>
                      <div class="text">
                        <p>Money back guarantee</p>
                      </div>
                    </li>
                    <li>
                      <div class="icon"><i class="flaticon-truck"></i></div>
                      <div class="text">
                        <p>Free Shipping & Return</p>
                      </div>
                    </li>
                    <li>
                      <div class="icon"><i class="flaticon-security"></i></div>
                      <div class="text">
                        <p>Comportable Support</p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--End Shop Details Top-->
      <!-- productdrescription-tabStart -->
      <section class="product pt-60 pb-60 wow fadeInUp overflow-hidden ">
        <div class="container">
          <div class="row wow fadeInUp animated">
            <div class="col-12">
              <ul class="nav product-details-nav nav-one nav-pills justify-content-center" id="pills-tab-two"
                  role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active"
                          id="pills-description-tab" data-bs-toggle="pill" data-bs-target="#pills-description"
                          type="button" role="tab" aria-controls="pills-description" aria-selected="true">
                    Description
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-additional-tab"
                          data-bs-toggle="pill" data-bs-target="#pills-additional" type="button" role="tab"
                          aria-controls="pills-additional" aria-selected="false"> Additional
                  </button>
                </li>
              </ul>
            </div>
          </div>
          <div class="row wow fadeInUp animated">
            <div class="tab-content" id="pills-tabContent-two">
              <div class="tab-pane fade show active" id="pills-description" role="tabpanel"
                   aria-labelledby="pills-description-tab">
                <div class="product-drescription">
                  <h4> Product Details:</h4>
                  <p> Assertively conceptualize parallel process improvements through user friendly
                    colighue to action items. Interactively antidos cultivate interdependent customer
                    service without clicks-and-mortar e-services. Proactively cultivate go forward
                    testing procedures with accurate quality vectors. Globally aiembrace ethical
                    functionalities via empowered scenarios. Phosfluorescently restore highly efficient
                    opportunities and client-focused infomediaries. Enthusiastically transition
                    multidisciplinary outside the box thinking without premium networks. Progressive
                    supply clicks-and-mortar human capital through enterprise-wide web services.
                    Objectivey bester provide access to extensible processes better than more
                    qulification dumber there stoaling through 24/365 solutions. </p>
                  <div class="row align-items-center">
                    <div class="col-lg-4 mt-30 ">
                      <div class="thumb">
                        <img :src="product.image_url" alt="">
                      </div>
                    </div>
                    <div class="col-lg-8 mt-30">
                      <h4>Specification:</h4>
                      <ul class="drescription-list">
                        <li> 1. Adipiscing hac cubilia, fermentum ipsum auctor parturient tempus
                          lobortis fermentum.
                        </li>
                        <li> 2. Euismod disagree soler imperdiet vehicula pede eros ipsum cras mi
                          feugiat.
                        </li>
                        <li> 3. Rhoncus consequat phasellus donec suspendisse scelerisque facilisis
                          gravida porttitor turpis.
                        </li>
                        <li> 4. Consequat phasellus donec suspendisse scelerisque facilisis gravida
                          porttitor turpis.
                        </li>
                        <li> 5. Consequat phasellus donec suspendisse scelerisque facilisis gravida
                          porttitor
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-additional" role="tabpanel"
                   aria-labelledby="pills-additional-tab">
                <div class="product-drescription">
                  <p class="pt-0"> Assertively conceptualize parallel process improvements through user
                    friendly colighue to action items. Interactively antidos cultivate interdependent
                    customer service without clicks-and-mortar e-services. Proactively cultivate go
                    forward testing procedures with accurate quality vectors. Globally aiembrace ethical
                    functionalities via empowered scenarios. Phosfluorescently restore highly efficient
                    opportunities and client-focused infomediaries. Enthusiastically transition
                    multidisciplinary outside the box thinking without premium networks. Progressive
                    supply clicks-and-mortar human capital through enterprise-wide web services.
                    Objectivey bester provide access to extensible processes better than more
                    qulification dumber there stoaling through 24/365 solutions. </p>
                  <ul class="drescription-list">
                    <li> 1. Adipiscing hac cubilia, fermentum ipsum auctor parturient tempus lobortis
                      fermentum.
                    </li>
                    <li> 2. Euismod disagree soler imperdiet vehicula pede eros ipsum cras mi feugiat.
                    </li>
                    <li> 3. Rhoncus consequat phasellus donec suspendisse scelerisque facilisis gravida
                      porttitor turpis.
                    </li>
                    <li> 4. Consequat phasellus donec suspendisse scelerisque facilisis gravida
                      porttitor turpis.
                    </li>
                    <li> 5. Consequat phasellus donec suspendisse scelerisque facilisis gravida
                      porttitor
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> <!-- productdrescription-tab End -->

    </main>
  </div>
</template>

<script>
export default {
  name: "Index",
  data() {
    return {
      product: null,
    }
  },

  mounted() {
    $(document).trigger('changed')
    this.getProduct()
  },
  methods: {
      addToCart(id, model, price, image_url, isSingle) {
          let qty = isSingle ? 1 : $('.qtyValue').val()
          $('.qtyValue').val(1)
          let cart = localStorage.getItem('cart')
          let newProduct = [
              {
                  'id': id,
                  'model': model,
                  'price': price,
                  'image_url': image_url,
                  'qty': qty,
              }
          ]
          if (!cart) {
              localStorage.setItem('cart', JSON.stringify(newProduct));
          } else {
              cart = JSON.parse(cart)
              cart.forEach(productInCart => {
                  if (productInCart.id === id) {
                      productInCart.qty = Number(productInCart.qty) + Number(qty)
                      newProduct = null
                  }
              })
              Array.prototype.push.apply(cart, newProduct)
              localStorage.setItem('cart', JSON.stringify(cart))
          }
      },
    redirectGetProduct(id){
      this.axios.get(`/api/products/${id}`)
          .then(result => {
            this.product = result.data.data
            //console.log(result);
          })
          .finally(v => {
            $(document).trigger('changed')
          })
    },
    getProduct(id) {
      this.axios.get(`/api/products/${this.$route.params.id}`)
          .then(result => {
            this.product = result.data.data
           // console.log(result);
          })
          .finally(v => {
            $(document).trigger('changed')
          })
    }
  }
}
</script>

<style>

</style>
