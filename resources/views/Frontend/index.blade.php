
@extends('layouts.frontend')
@section('title', 'Home page')
@section('frontend')
      <!-- *Banner Desktop Section start -->
      <section id="banner" class="d-none d-lg-block">
         <div class="continer">
            <div class="swiper mySwiper">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div class="row align-items-center">
                        <div class="col-7 bannerImg">
                           <img class="img-fluid" src=" {{asset('Frontend/assets/img/bgImage.png')}}" >
                           <div class="discount">
                              <div class="row">
                                 <p>70%</p>
                                 <span>OFF</span>
                              </div>
                           </div>
                        </div>
                        <div class="col-5 text-start bannerText">
                           <p>Welcome to shopery</p>
                           <h1>Fresh & Healthy
                              Organic Food</h1>
                           <span>Free shipping on all your order. we deliver, you enjoy</span>
                           <a href="shop.html"><button>Shop Now <iconify-icon
                                    icon="mdi-light:arrow-right"></iconify-icon></button></a>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="row align-items-center">
                        <div class="col-7 bannerImg">
                           <img class="img-fluid" src=" {{asset('Frontend/assets/img/bgImage1.png')}}" >
                           <div class="discount">
                              <div class="row">
                                 <p>30%</p>
                                 <span>OFF</span>
                              </div>
                           </div>
                        </div>
                        <div class="col-5 text-start bannerText">
                           <p>Welcome to shopery</p>
                           <h1>Fresh & Healthy
                              Organic Food</h1>
                           <span>Free shipping on all your order. we deliver, you enjoy</span>
                           <a href="shop.html"><button>Shop Now <iconify-icon
                                    icon="mdi-light:arrow-right"></iconify-icon></button></a>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="row align-items-center">
                        <div class="col-7 bannerImg">
                           <img class="img-fluid" src=" {{asset('Frontend/assets/img/bgImage.png')}}" >
                           <div class="discount">
                              <div class="row">
                                 <p>70%</p>
                                 <span>OFF</span>
                              </div>
                           </div>
                        </div>
                        <div class="col-5 text-start bannerText">
                           <p>Welcome to shopery</p>
                           <h1>Fresh & Healthy
                              Organic Food</h1>
                           <span>Free shipping on all your order. we deliver, you enjoy</span>
                           <a href="shop.html"><button>Shop Now <iconify-icon
                                    icon="mdi-light:arrow-right"></iconify-icon></button></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-pagination"></div>
               <div class="swiper-button-next">
                  <iconify-icon icon="mynaui:arrow-right"></iconify-icon>
               </div>
               <div class="swiper-button-prev">
                  <iconify-icon icon="mynaui:arrow-left"></iconify-icon>
               </div>
            </div>
         </div>
         <div class="bgImages">
            <img class="img-fluid" src=" {{asset('Frontend/assets/img/BG1.png')}}" >
         </div>
      </section>
      <!-- *Banner Section end -->

      <!-- *Banner Mobile Section start -->
      <section id="bannerSm" class="d-lg-none">
         <div class="container">
            <div class="row">
               <div class="bgImages">
                  <div class="bgImage1">
                     <img class="img-fluid" src=" {{asset('Frontend/assets/img/foodbg1.png')}}" >
                  </div>
                  <div class="bgImage2">
                     <img src=" {{asset('Frontend/assets/img/foodbg2.png')}}" >
                  </div>
                  <div class="bgImage3">
                     <img src=" {{asset('Frontend/assets/img/foodbg3.png')}}" >
                  </div>
               </div>
               <div class="swiper mySwiper">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="row align-items-center">
                           <div class="col-12 bannerImg">
                              <img class="img-fluid" src=" {{asset('Frontend/assets/img/bgImage.png')}}" >
                              <div class="discount">
                                 <div class="row">
                                    <p>70%</p>
                                    <span>OFF</span>
                                 </div>
                              </div>
                           </div>
                           <div class="col bannerText">
                              <p>Welcome to shopery</p>
                              <h1>Fresh & Healthy
                                 Organic Food</h1>
                              <span>Free shipping on all your order. we deliver, you enjoy</span>
                              <button>Shop Now <iconify-icon icon="mdi-light:arrow-right"></iconify-icon></button>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="row align-items-center">
                           <div class="col-12 bannerImg">
                              <img class="img-fluid" src=" {{asset('Frontend/assets/img/bgImage1.png')}}" >
                              <div class="discount">
                                 <div class="row">
                                    <p>30%</p>
                                    <span>OFF</span>
                                 </div>
                              </div>
                           </div>
                           <div class="col bannerText">
                              <p>Welcome to shopery</p>
                              <h1>Fresh & Healthy
                                 Organic Food</h1>
                              <span>Free shipping on all your order. we deliver, you enjoy</span>
                              <button>Shop Now <iconify-icon icon="mdi-light:arrow-right"></iconify-icon></button>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="row align-items-center">
                           <div class="col bannerImg">
                              <img class="img-fluid" src=" {{asset('Frontend/assets/img/bgImage.png')}}" >
                              <div class="discount">
                                 <div class="row">
                                    <p>70%</p>
                                    <span>OFF</span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 bannerText">
                              <p>Welcome to shopery</p>
                              <h1>Fresh & Healthy
                                 Organic Food</h1>
                              <span>Free shipping on all your order. we deliver, you enjoy</span>
                              <button>Shop Now <iconify-icon icon="mdi-light:arrow-right"></iconify-icon></button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-pagination"></div>
                  <div class="swiper-button-next">
                     <iconify-icon icon="mynaui:arrow-right"></iconify-icon>
                  </div>
                  <div class="swiper-button-prev">
                     <iconify-icon icon="mynaui:arrow-left"></iconify-icon>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- *Banner Mobile Section end -->

      <!-- *Features Section Start -->
      <section id="features">
         <div class="container">
            <div class="featureCnt">
               <div class="row justify-content-center mt-3 mt-lg-0 mb-3 mb-lg-0">
                  <div class="col-4 featureCard">
                     <span class="featureIcon">
                        <iconify-icon icon="material-symbols-light:delivery-truck-speed-outline"></iconify-icon>
                     </span>
                     <div class="texts">
                        <p>Free Shipping</p>
                        <span>Free shipping with discount</span>
                     </div>
                  </div>
                  <div class="col-4 featureCard">
                     <span class="featureIcon">
                        <iconify-icon icon="bx:support"></iconify-icon>
                     </span>
                     <div class="texts">
                        <p>Great Support 24/7</p>
                        <span>Instant access to Contact</span>
                     </div>
                  </div>
                  <div class="col-4 featureCard">
                     <span class="featureIcon">
                        <iconify-icon icon="solar:bag-check-linear"></iconify-icon>
                     </span>
                     <div class="texts">
                        <p>100% Sucure Payment</p>
                        <span>We ensure your money is save</span>
                     </div>
                  </div>
                  <div class="col-4 featureCard">
                     <span class="featureIcon">
                        <iconify-icon icon="solar:box-broken"></iconify-icon>
                     </span>
                     <div class="texts">
                        <p>Money-Back Guarantee</p>
                        <span>30 days money-back guarantee</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- *Features Section End -->


      <!-- *Product Section start -->
      <section id="productMain">
         <div class="container">
            <div class="headers">
               <h2>Introducing Our Products</h2>
               <div class="navigation">
                  <a type="button" data-filter="*" class="pdNavButtons active">All</a>
                  <a type="button" data-filter=".VegetablesCard" class="pdNavButtons ">Vegetables</a>
                  <a type="button" data-filter=".FruitCard" class="pdNavButtons ">Fruit</a>
                  <a type="button" data-filter=".CookingCard" class="pdNavButtons ">Meat & Fish</a>
                  <a type="button" href="shop.html" class="pdNavButtons ">View All</a>
               </div>
            </div>
         </div>


         <!-- Product start here -->
         <section id="ProductCardBox">
            <div class="container productFilter">
               <div class="cart VegetablesCard">
                  <a href="#">
                     <div class="imgBox">
                        <img class="img-fluid" src=" {{asset('Frontend/assets/img/Image.png')}}" >
                     </div>
                     <div class="details">
                        <a href="#">Big Potatos</a>
                        <div class="priceAndCard d-flex align-items-center justify-content-between">
                           <div class="price">
                              <span class="col-2">$14.99</span>
                           </div>
                           <span class="text-end col-6 addCatdBtn">
                              <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                           </span>
                        </div>
                        <div class="review">
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                              style="color: #b3b3b3"></iconify-icon>
                        </div>
                     </div>
                  </a>

                  <!-- *Hover Effect Start Here -->

                  <div class="iconBox">
                     <div class="Wishlist">
                        <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                     </div>
                     <div class="View">
                        <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                     </div>
                  </div>

                  <!-- *Hover Effect End Here -->

               </div>
               <div class="cart VegetablesCard">
                  <a href="#">
                     <div class="imgBox">
                        <img class="img-fluid" src=" {{asset('Frontend/assets/img/Chanise.png')}}" >
                     </div>
                     <div class="details">
                        <a href="#">Chanise Cabbage</a>
                        <div class="priceAndCard d-flex align-items-center justify-content-between">
                           <div class="price">
                              <span class="col-2">$14.99</span>
                           </div>
                           <span class="text-end col-6 addCatdBtn">
                              <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                           </span>
                        </div>
                        <div class="review">
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                              style="color: #b3b3b3"></iconify-icon>
                        </div>
                     </div>
                  </a>

                  <!-- *Hover Effect Start Here -->

                  <div class="iconBox">
                     <div class="Wishlist">
                        <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                     </div>
                     <div class="View">
                        <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                     </div>
                  </div>

                  <!-- *Hover Effect End Here -->

               </div>
               <div class="cart FruitCard">
                  <a href="#">
                     <div class="imgBox">
                        <img class="img-fluid" src=" {{asset('Frontend/assets/img/Ladies.png')}}" >
                     </div>
                     <div class="details">
                        <a href="#">Ladies Finger</a>
                        <div class="priceAndCard d-flex align-items-center justify-content-between">
                           <div class="price">
                              <span class="col-2">$14.99</span>
                              <span class="col-3 oldPrice">$20.99</span>
                           </div>
                           <span class="text-end col-6 addCatdBtn">
                              <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                           </span>
                        </div>
                        <div class="review">
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                              style="color: #b3b3b3"></iconify-icon>
                        </div>
                     </div>
                  </a>

                  <!-- *Hover Effect Start Here -->

                  <div class="iconBox">
                     <div class="Wishlist">
                        <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                     </div>
                     <div class="View">
                        <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                     </div>
                  </div>

                  <!-- *Hover Effect End Here -->

                  <!-- *Label Start Here -->
                  <div class="label">
                     <span>Out of Stock</span>
                  </div>
                  <!-- *Label End Here -->


               </div>
               <div class="cart VegetablesCard">
                  <a href="#">
                     <div class="imgBox">
                        <img class="img-fluid" src=" {{asset('Frontend/assets/img/Eggplant.png')}}" >
                     </div>
                     <div class="details">
                        <a href="#">Eggplant</a>
                        <div class="priceAndCard d-flex align-items-center justify-content-between">
                           <div class="price">
                              <span class="col-2">$14.99</span>
                              <span class="col-3 oldPrice">$20.99</span>
                           </div>
                           <span class="text-end col-6 addCatdBtn">
                              <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                           </span>
                        </div>
                        <div class="review">
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                              style="color: #b3b3b3"></iconify-icon>
                        </div>
                     </div>
                  </a>

                  <!-- *Hover Effect Start Here -->

                  <div class="iconBox">
                     <div class="Wishlist">
                        <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                     </div>
                     <div class="View">
                        <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                     </div>
                  </div>

                  <!-- *Hover Effect End Here -->

               </div>
               <div class="cart CookingCard">
                  <a href="#">
                     <div class="imgBox">
                        <img class="img-fluid" src=" {{asset('Frontend/assets/img/Fresh.png')}}" >
                     </div>
                     <div class="details">
                        <a href="#">Fresh Cauliflower</a>
                        <div class="priceAndCard d-flex align-items-center justify-content-between">
                           <div class="price">
                              <span class="col-2">$14.99</span>
                              <span class="col-3 oldPrice">$20.99</span>
                           </div>
                           <span class="text-end col-6 addCatdBtn">
                              <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                           </span>
                        </div>
                        <div class="review">
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                              style="color: #b3b3b3"></iconify-icon>
                        </div>
                     </div>
                  </a>

                  <!-- *Hover Effect Start Here -->

                  <div class="iconBox">
                     <div class="Wishlist">
                        <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                     </div>
                     <div class="View">
                        <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                     </div>
                  </div>

                  <!-- *Hover Effect End Here -->

               </div>
               <div class="cart FruitCard">
                  <a href="#">
                     <div class="imgBox">
                        <img class="img-fluid" src=" {{asset('Frontend/assets/img/GreenApple.png')}}" >
                     </div>
                     <div class="details">
                        <a href="#">Green Apple</a>
                        <div class="priceAndCard d-flex align-items-center justify-content-between">
                           <div class="price">
                              <span class="col-2">$14.99</span>
                              <span class="col-3 oldPrice">$20.99</span>
                           </div>
                           <span class="text-end col-6 addCatdBtn">
                              <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                           </span>
                        </div>
                        <div class="review">
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                              style="color: #b3b3b3"></iconify-icon>
                        </div>
                     </div>
                  </a>

                  <!-- *Hover Effect Start Here -->

                  <div class="iconBox">
                     <div class="Wishlist">
                        <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                     </div>
                     <div class="View">
                        <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                     </div>
                  </div>

                  <!-- *Hover Effect End Here -->

               </div>
               <div class="cart VegetablesCard">
                  <a href="#">
                     <div class="imgBox">
                        <img class="img-fluid" src=" {{asset('Frontend/assets/img/GreenCapsicum.png')}}" >
                     </div>
                     <div class="details">
                        <a href="#">Green Capsicum</a>
                        <div class="priceAndCard d-flex align-items-center justify-content-between">
                           <div class="price">
                              <span class="col-2">$14.99</span>
                              <span class="col-3 oldPrice">$20.99</span>
                           </div>
                           <span class="text-end col-6 addCatdBtn">
                              <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                           </span>
                        </div>
                        <div class="review">
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                              style="color: #b3b3b3"></iconify-icon>
                        </div>
                     </div>
                  </a>

                  <!-- *Hover Effect Start Here -->

                  <div class="iconBox">
                     <div class="Wishlist">
                        <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                     </div>
                     <div class="View">
                        <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                     </div>
                  </div>

                  <!-- *Hover Effect End Here -->

               </div>
               <div class="cart VegetablesCard">
                  <a href="#">
                     <div class="imgBox">
                        <img class="img-fluid" src=" {{asset('Frontend/assets/img/GreenChili.png')}}" >
                     </div>
                     <div class="details">
                        <a href="#">Green Chili</a>
                        <div class="priceAndCard d-flex align-items-center justify-content-between">
                           <div class="price">
                              <span class="col-2">$14.99</span>
                              <span class="col-3 oldPrice">$20.99</span>
                           </div>
                           <span class="text-end col-6 addCatdBtn">
                              <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                           </span>
                        </div>
                        <div class="review">
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                           <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                              style="color: #b3b3b3"></iconify-icon>
                        </div>
                     </div>
                  </a>

                  <!-- *Hover Effect Start Here -->

                  <div class="iconBox">
                     <div class="Wishlist">
                        <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                     </div>
                     <div class="View">
                        <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                     </div>
                  </div>

                  <!-- *Hover Effect End Here -->

               </div>
           </div>           
         </section>
      </section>
      <!-- product end here -->
      <!-- *Product Section end -->


      <!-- *Drinks Section start -->
      <section id="drinks">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-4 col-12">
                  <a href="#"><img class="img-fluid" src="{{asset('Frontend/assets/img/drink1.png')}}"></a>
               </div>
               <div class="col-lg-4 col-12 my-3 my-lg-0">
                  <a href="#"><img class="img-fluid" src="{{asset('Frontend/assets/img/drink2.png')}}"></a>
               </div>
               <div class="col-lg-4 col-12">
                  <a href="#"><img class="img-fluid" src="{{asset('Frontend/assets/img/drink3.png')}}"></a>
               </div>
            </div>
         </div>
      </section>
      <!-- *Drinks Section end -->


      <!-- *Best Deals Section start -->
      <section id="bestDeals">
         <div class="container">
            <div class="row">
               <div class="col-4 d-none d-lg-block">
                  <img class="img-fluid" src=" {{asset('Frontend/assets/img/bgImage1.png')}}" >
               </div>
               <div class="col-lg-4 text-center middleItems">
                  <p>Best Deals</p>
                  <h2>Our Special Products Deal of the Month</h2>
                  <div class="countTime d-flex">
                     <div>
                       <p id="days">00</p>
                       <span>Days</span>
                     </div>
                     <div>
                       <p id="hours">00</p>
                       <span>Hours</span>
                     </div>
                     <div>
                       <p id="mins">00</p>
                       <span>Mins</span>
                     </div>
                     <div>
                       <p id="secs">00</p>
                       <span>Secs</span>
                     </div>
                   </div>
                   
                  <a href="shop.html"><button>Shop Now <iconify-icon
                           icon="ri:arrow-right-line"></iconify-icon></button></a>
               </div>
               <div class="col-4 d-none d-lg-block">
                  <img class="img-fluid" src=" {{asset('Frontend/assets/img/deals.png')}}" >
               </div>
            </div>
         </div>
      </section>
      <!-- *Best Deals Section end -->

      <!-- *Featured Product Section start -->
      <section id="featureProduct">
         <section id="ProductCardBox">
            <div class="container">
               <h2 class="head">Featured Products</h2>
               <div class="row">
                  <div class="swiper mySwiper">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="cart Vegetables ">
                              <a href="#">
                                 <div class="imgBox">
                                    <img class="img-fluid" src=" {{asset('Frontend/assets/img/Image.png')}}" >
                                 </div>
                                 <div class="details text-start">
                                    <a href="#">Big Potatos</a>
                                    <div class="priceAndCard d-flex align-items-center justify-content-between">
                                       <div class="price">
                                          <span class="col-2">$14.99</span>
                                       </div>
                                       <span class="text-end col-6 addCatdBtn">
                                          <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                       </span>
                                    </div>
                                    <div class="review">
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                          style="color: #b3b3b3"></iconify-icon>
                                    </div>
                                 </div>
                              </a>
                              <!-- *Hover Effect Start Here -->
                              <div class="iconBox">
                                 <div class="Wishlist">
                                    <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                                 </div>
                                 <div class="View">
                                    <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                                 </div>
                              </div>
                              <!-- *Hover Effect End Here -->
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="cart Vegetables">
                              <a href="#">
                                 <div class="imgBox">
                                    <img class="img-fluid" src=" {{asset('Frontend/assets/img/Chanise.png')}}" >
                                 </div>
                                 <div class="details text-start">
                                    <a href="#">Chanise Cabbage</a>
                                    <div class="priceAndCard d-flex align-items-center justify-content-between">
                                       <div class="price">
                                          <span class="col-2">$14.99</span>
                                       </div>
                                       <span class="text-end col-6 addCatdBtn">
                                          <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                       </span>
                                    </div>
                                    <div class="review">
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                          style="color: #b3b3b3"></iconify-icon>
                                    </div>
                                 </div>
                              </a>
                              <!-- *Hover Effect Start Here -->
                              <div class="iconBox">
                                 <div class="Wishlist">
                                    <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                                 </div>
                                 <div class="View">
                                    <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                                 </div>
                              </div>
                              <!-- *Hover Effect End Here -->
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="cart fruits">
                              <a href="#">
                                 <div class="imgBox">
                                    <img class="img-fluid" src=" {{asset('Frontend/assets/img/Ladies.png')}}" >
                                 </div>
                                 <div class="details text-start">
                                    <a href="#">Ladies Finger</a>
                                    <div class="priceAndCard d-flex align-items-center justify-content-between">
                                       <div class="price">
                                          <span class="col-2">$14.99</span>
                                          <span class="col-3 oldPrice">$20.99</span>
                                       </div>
                                       <span class="text-end col-6 addCatdBtn">
                                          <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                       </span>
                                    </div>
                                    <div class="review">
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                          style="color: #b3b3b3"></iconify-icon>
                                    </div>
                                 </div>
                              </a>
                              <!-- *Hover Effect Start Here -->
                              <div class="iconBox">
                                 <div class="Wishlist">
                                    <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                                 </div>
                                 <div class="View">
                                    <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                                 </div>
                              </div>
                              <!-- *Hover Effect End Here -->
                              <!-- *Label Start Here -->
                              <div class="label">
                                 <span>Out of Stock</span>
                              </div>
                              <!-- *Label End Here -->
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="cart Vegetables">
                              <a href="#">
                                 <div class="imgBox">
                                    <img class="img-fluid" src=" {{asset('Frontend/assets/img/Eggplant.png')}}" >
                                 </div>
                                 <div class="details text-start">
                                    <a href="#">Eggplant</a>
                                    <div class="priceAndCard d-flex align-items-center justify-content-between">
                                       <div class="price">
                                          <span class="col-2">$14.99</span>
                                          <span class="col-3 oldPrice">$20.99</span>
                                       </div>
                                       <span class="text-end col-6 addCatdBtn">
                                          <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                       </span>
                                    </div>
                                    <div class="review">
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                          style="color: #b3b3b3"></iconify-icon>
                                    </div>
                                 </div>
                              </a>
                              <!-- *Hover Effect Start Here -->
                              <div class="iconBox">
                                 <div class="Wishlist">
                                    <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                                 </div>
                                 <div class="View">
                                    <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                                 </div>
                              </div>
                              <!-- *Hover Effect End Here -->
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="cart Vegetables">
                              <a href="#">
                                 <div class="imgBox">
                                    <img class="img-fluid" src=" {{asset('Frontend/assets/img/Fresh.png')}}" >
                                 </div>
                                 <div class="details text-start">
                                    <a href="#">Fresh Cauliflower</a>
                                    <div class="priceAndCard d-flex align-items-center justify-content-between">
                                       <div class="price">
                                          <span class="col-2">$14.99</span>
                                          <span class="col-3 oldPrice">$20.99</span>
                                       </div>
                                       <span class="text-end col-6 addCatdBtn">
                                          <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                       </span>
                                    </div>
                                    <div class="review">
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                          style="color: #b3b3b3"></iconify-icon>
                                    </div>
                                 </div>
                              </a>
                              <!-- *Hover Effect Start Here -->
                              <div class="iconBox">
                                 <div class="Wishlist">
                                    <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                                 </div>
                                 <div class="View">
                                    <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                                 </div>
                              </div>
                              <!-- *Hover Effect End Here -->
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="cart fruits">
                              <a href="#">
                                 <div class="imgBox">
                                    <img class="img-fluid" src=" {{asset('Frontend/assets/img/GreenApple.png')}}" >
                                 </div>
                                 <div class="details text-start">
                                    <a href="#">Green Apple</a>
                                    <div class="priceAndCard d-flex align-items-center justify-content-between">
                                       <div class="price">
                                          <span class="col-2">$14.99</span>
                                          <span class="col-3 oldPrice">$20.99</span>
                                       </div>
                                       <span class="text-end col-6 addCatdBtn">
                                          <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                       </span>
                                    </div>
                                    <div class="review">
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                          style="color: #b3b3b3"></iconify-icon>
                                    </div>
                                 </div>
                              </a>
                              <!-- *Hover Effect Start Here -->
                              <div class="iconBox">
                                 <div class="Wishlist">
                                    <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                                 </div>
                                 <div class="View">
                                    <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                                 </div>
                              </div>
                              <!-- *Hover Effect End Here -->
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="cart fruits">
                              <a href="#">
                                 <div class="imgBox">
                                    <img class="img-fluid" src=" {{asset('Frontend/assets/img/GreenCapsicum.png')}}" >
                                 </div>
                                 <div class="details text-start">
                                    <a href="#">Green Capsicum</a>
                                    <div class="priceAndCard d-flex align-items-center justify-content-between">
                                       <div class="price">
                                          <span class="col-2">$14.99</span>
                                          <span class="col-3 oldPrice">$20.99</span>
                                       </div>
                                       <span class="text-end col-6 addCatdBtn">
                                          <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                       </span>
                                    </div>
                                    <div class="review">
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                          style="color: #b3b3b3"></iconify-icon>
                                    </div>
                                 </div>
                              </a>
                              <!-- *Hover Effect Start Here -->
                              <div class="iconBox">
                                 <div class="Wishlist">
                                    <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                                 </div>
                                 <div class="View">
                                    <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                                 </div>
                              </div>
                              <!-- *Hover Effect End Here -->
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="cart Vegetables">
                              <a href="#">
                                 <div class="imgBox">
                                    <img class="img-fluid" src=" {{asset('Frontend/assets/img/GreenChili.png')}}" >
                                 </div>
                                 <div class="details text-start">
                                    <a href="#">Green Chili</a>
                                    <div class="priceAndCard d-flex align-items-center justify-content-between">
                                       <div class="price">
                                          <span class="col-2">$14.99</span>
                                          <span class="col-3 oldPrice">$20.99</span>
                                       </div>
                                       <span class="text-end col-6 addCatdBtn">
                                          <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                       </span>
                                    </div>
                                    <div class="review">
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                          style="color: #b3b3b3"></iconify-icon>
                                    </div>
                                 </div>
                              </a>
                              <!-- *Hover Effect Start Here -->
                              <div class="iconBox">
                                 <div class="Wishlist">
                                    <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                                 </div>
                                 <div class="View">
                                    <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                                 </div>
                              </div>
                              <!-- *Hover Effect End Here -->
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="cart Vegetables">
                              <a href="#">
                                 <div class="imgBox">
                                    <img class="img-fluid" src=" {{asset('Frontend/assets/img/GreenChili.png')}}" >
                                 </div>
                                 <div class="details text-start">
                                    <a href="#">Green Chili</a>
                                    <div class="priceAndCard d-flex align-items-center justify-content-between">
                                       <div class="price">
                                          <span class="col-2">$14.99</span>
                                          <span class="col-3 oldPrice">$20.99</span>
                                       </div>
                                       <span class="text-end col-6 addCatdBtn">
                                          <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                       </span>
                                    </div>
                                    <div class="review">
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                          style="color: #b3b3b3"></iconify-icon>
                                    </div>
                                 </div>
                              </a>
                              <!-- *Hover Effect Start Here -->
                              <div class="iconBox">
                                 <div class="Wishlist">
                                    <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                                 </div>
                                 <div class="View">
                                    <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                                 </div>
                              </div>
                              <!-- *Hover Effect End Here -->
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="cart Vegetables ">
                              <a href="#">
                                 <div class="imgBox">
                                    <img class="img-fluid" src=" {{asset('Frontend/assets/img/Image.png')}}" >
                                 </div>
                                 <div class="details text-start">
                                    <a href="#">Big Potatos</a>
                                    <div class="priceAndCard d-flex align-items-center justify-content-between">
                                       <div class="price">
                                          <span class="col-2">$14.99</span>
                                       </div>
                                       <span class="text-end col-6 addCatdBtn">
                                          <iconify-icon icon="ph:handbag" width="20" height="20"></iconify-icon>
                                       </span>
                                    </div>
                                    <div class="review">
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                       <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                          style="color: #b3b3b3"></iconify-icon>
                                    </div>
                                 </div>
                              </a>
                              <!-- *Hover Effect Start Here -->
                              <div class="iconBox">
                                 <div class="Wishlist">
                                    <iconify-icon icon="meteor-icons:heart" width="20" height="20"></iconify-icon>
                                 </div>
                                 <div class="View">
                                    <iconify-icon icon="ant-design:eye-outlined" width="20" height="20"></iconify-icon>
                                 </div>
                              </div>
                              <!-- *Hover Effect End Here -->
                           </div>
                        </div>
                     </div>
                     <div class="swiper-button-next">
                        <iconify-icon icon="mynaui:arrow-right"></iconify-icon>
                     </div>
                     <div class="swiper-button-prev">
                        <iconify-icon icon="mynaui:arrow-left"></iconify-icon>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </section>
      <!-- *Featured Product Section end -->


      <!-- *Client Review Section start -->
      <section id="review" class="">
         <div class="container">
            <h2 class="head">What our Clients Says</h2>
            <div class="row">
               <div class="col-lg-4 col-12">
                  <div class="reviewCnt text-center">
                     <img class="img-fluid" src=" {{asset('Frontend/assets/img/qoute.png')}}">
                     <p>“Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed
                        sagittis diam sit amet ante sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”</p>
                  </div>
                  <div class="client text-center mt-3">
                     <img class="img-fluid" src=" {{asset('Frontend/assets/img/client1.png')}}">
                     <p>Jenny Wilson</p>
                     <span>Customer</span>
                  </div>
               </div>
               <div class="col-lg-4 col-12">
                  <div class="reviewCnt text-center">
                     <img class="img-fluid" src=" {{asset('Frontend/assets/img/qoute.png')}}">
                     <p>“Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed
                        sagittis diam sit amet ante sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”</p>
                  </div>
                  <div class="client text-center mt-3">
                     <img class="img-fluid" src=" {{asset('Frontend/assets/img/client2.png')}}">
                     <p>Guy Hawkins</p>
                     <span>Customer</span>
                  </div>
               </div>
               <div class="col-lg-4 col-12">
                  <div class="reviewCnt text-center">
                     <img class="img-fluid" src=" {{asset('Frontend/assets/img/qoute.png')}}">
                     <p>“Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed
                        sagittis diam sit amet ante sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”</p>
                  </div>
                  <div class="client text-center mt-3">
                     <img class="img-fluid" src=" {{asset('Frontend/assets/img/client3.png')}}">
                     <p>Kathryn Murphy</p>
                     <span>Customer</span>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- *Client Review Section end -->


      <!-- *Video Section start -->
      <section id="video">
         <div class="container">
            <div class="row">
               <a class="videoHome" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=zep0sZs7JNA"><img class="img-fluid vid" src=" {{asset('Frontend/assets/img/Video.png')}}" ></a>
            </div>
         </div>
      </section>
      <!-- *Video Section end -->

      <!-- *Latest News Section start -->
      <section id="latestNews">
         <div class="container">
            <h2 class="head">Latest News</h2>
            <div class="row">
               <div class="col-lg-4 col-12 mt-4 mt-lg-0">
                  <div class="newsCnt text-center">
                     <div class="image">
                        <img class="img-fluid" src=" {{asset('Frontend/assets/img/news2.png')}}" >
                        <div class="date">
                           <p>23</p>
                           <span>Jan</span>
                        </div>
                     </div>
                     <div class="text text-start my-4">
                        <p>Curabitur porttitor orci eget neque accumsan venenatis.</p>
                        <span>Nulla libero lorem, euismod venenatis nibh sed, sodales dictum ex. Etiam nisi augue,
                           malesuada et pulvinar at, posuere eu neque.</span>
                        <a href="#">Read More <iconify-icon icon="mdi-light:arrow-right"></iconify-icon></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-12">
                  <div class="newsCnt text-center">
                     <div class="image">
                        <img class="img-fluid" src=" {{asset('Frontend/assets/img/news2.png')}}" >
                        <div class="date">
                           <p>23</p>
                           <span>Jan</span>
                        </div>
                     </div>
                     <div class="text text-start">
                        <p>Curabitur porttitor orci eget neque accumsan venenatis.</p>
                        <span>Nulla libero lorem, euismod venenatis nibh sed, sodales dictum ex. Etiam nisi augue,
                           malesuada et pulvinar at, posuere eu neque.</span>
                        <a href="#">Read More <iconify-icon icon="mdi-light:arrow-right"></iconify-icon></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col">
                  <div class="newsCnt text-center">
                     <div class="image">
                        <img class="img-fluid" src=" {{asset('Frontend/assets/img/news3.png')}}" >
                        <div class="date">
                           <p>23</p>
                           <span>Jan</span>
                        </div>
                     </div>
                     <div class="text text-start">
                        <p>Curabitur porttitor orci eget neque accumsan venenatis.</p>
                        <span>Nulla libero lorem, euismod venenatis nibh sed, sodales dictum ex. Etiam nisi augue,
                           malesuada et pulvinar at, posuere eu neque.</span>
                        <a href="#">Read More <iconify-icon icon="mdi-light:arrow-right"></iconify-icon></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- *Latest News Section end -->

      @endsection