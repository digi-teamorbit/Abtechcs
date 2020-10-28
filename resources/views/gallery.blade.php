@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->
   
    <!-- Begin: Banner -->
   
    <!-- Begin: Banner -->
   
    <section class="sub-banner galler_banner" style="
    background: url({{asset($banner->image)}}); background-size: cover;
    background-position: center center;">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="sub-banner-content">
                <h2 class="wow fadeInRight" data-wow-delay="0.4s"> {{$banner->title}} </h2>
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <!-- End: Banner -->

<!-- Shop Now Slider -->
<section class="shop portfolio-sec">
    <div class="container">
      <div class="row">
        <div class="head-sec">
          <?= html_entity_decode($cms_gallery->content) ?>
        </div>
      </div>
      <div class="portfolio-slider"> 
          <div>
            <div class="row mb">
              @foreach ($images as $image)
                <div class="col-lg-3">
                  <div class="img-box mt">
                    <img src="{{asset($image->image)}}" class="img-responsive" alt="">
                  </div>
                </div>
                @endforeach

                <!-- <div class="col-lg-3">
                  <div class="img-box">
                    <img src="{{asset('images/2.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="img-box mt-custom">
                    <img src="{{asset('images/3.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-lg-3">
                    <div class="img-box">
                      <img src="{{asset('images/4.jpg')}}" class="img-responsive" alt="">
                    </div>
                  </div>
              </div>
              <div class="row mb">
                <div class="col-lg-3">
                  <div class="img-box mt">
                    <img src="{{asset('images/5.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="img-box">
                    <img src="{{asset('images/6.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-lg-3 mt-custom">
                  <div class="img-box">
                    <img src="{{asset('images/7.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-lg-3">
                    <div class="img-box">
                      <img src="{{asset('images/8.jpg')}}" class="img-responsive" alt="">
                    </div>
                  </div>
                </div>
                  <div class="row mb">
                  <div class="col-lg-3">
                    <div class="img-box mt">
                      <img src="{{asset('images/9.jpg')}}" class="img-responsive" alt="">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="img-box">
                      <img src="{{asset('images/10.jpg')}}" class="img-responsive" alt="">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="img-box mt-custom">
                      <img src="{{asset('images/11.jpg')}}" class="img-responsive" alt="">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="img-box">
                      <img src="{{asset('images/12.jpg')}}" class="img-responsive" alt="">
                    </div>
                  </div>
              </div>
              <div class="row mb">
                <div class="col-lg-3">
                  <div class="img-box mt">
                    <img src="{{asset('images/13.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="img-box">
                    <img src="{{asset('images/14.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="img-box mt-custom">
                    <img src="{{asset('images/15.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="img-box">
                    <img src="{{asset('images/16.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
            </div>
            <div class="row mb">
                <div class="col-lg-3">
                  <div class="img-box mt">
                    <img src="{{asset('images/17.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="img-box">
                    <img src="{{asset('images/18.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="img-box mt-custom">
                    <img src="{{asset('images/19.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="img-box">
                    <img src="{{asset('images/20.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
              </div>
          </div>
          <div>
    
                  <div class="row mb">
                  <div class="col-lg-3">
                    <div class="img-box mt">
                      <img src="{{asset('images/21.jpg')}}" class="img-responsive" alt="">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="img-box">
                      <img src="{{asset('images/22.jpg')}}" class="img-responsive" alt="">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="img-box mt-custom">
                      <img src="{{asset('images/23.jpg')}}" class="img-responsive" alt="">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="img-box">
                      <img src="{{asset('images/24.jpg')}}" class="img-responsive" alt="">
                    </div>
                  </div>
              </div>
              <div class="row mb">
                <div class="col-lg-3">
                  <div class="img-box mt">
                    <img src="{{asset('images/25.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="img-box">
                    <img src="{{asset('images/26.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="img-box mt-custom">
                    <img src="{{asset('images/27.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-lg-3">
                    <div class="img-box">
                      <img src="{{asset('images/28.jpg')}}" class="img-responsive" alt="">
                    </div>
                  </div>
              </div>
              <div class="row mb">
                <div class="col-lg-3">
                  <div class="img-box mt">
                    <img src="{{asset('images/25.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="img-box">
                    <img src="{{asset('images/26.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="img-box mt-custom">
                    <img src="{{asset('images/27.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-lg-3">
                    <div class="img-box">
                      <img src="{{asset('images/28.jpg')}}" class="img-responsive" alt="">
                    </div>
                  </div>
              </div>
              <div class="row mb">
                <div class="col-lg-3">
                  <div class="img-box mt">
                    <img src="{{asset('images/29.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="img-box">
                    <img src="{{asset('images/30.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-lg-3 mt-custom">
                  <div class="img-box">
                    <img src="{{asset('images/31.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-lg-3">
                    <div class="img-box">
                      <img src="{{asset('images/32.jpg')}}" class="img-responsive" alt="">
                    </div>
                  </div>
                </div>
          </div>
          <div>
   
                  <div class="row mb">
                  <div class="col-lg-3">
                    <div class="img-box mt">
                      <img src="{{asset('images/33.jpg')}}" class="img-responsive" alt="">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="img-box">
                      <img src="{{asset('images/34.jpg')}}" class="img-responsive" alt="">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="img-box mt">
                      <img src="{{asset('images/35.jpg')}}" class="img-responsive" alt="">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="img-box">
                      <img src="{{asset('images/36.jpg')}}" class="img-responsive" alt="">
                    </div>
                  </div>
              </div>
              <div class="row mb">
                <div class="col-lg-3">
                  <div class="img-box mt">
                    <img src="{{asset('images/37.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="img-box">
                    <img src="{{asset('images/38.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="img-box mt">
                    <img src="{{asset('images/39.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="img-box">
                    <img src="{{asset('images/40.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
            </div>
            <div class="row mb">
              <div class="col-lg-3">
                <div class="img-box mt">
                  <img src="{{asset('images/41.jpg')}}" class="img-responsive" alt="">
                </div>
              </div>
              <div class="col-lg-3">
                <div class="img-box">
                  <img src="{{asset('images/42.jpg')}}" class="img-responsive" alt="">
                </div>
              </div>
              <div class="col-lg-3">
                <div class="img-box mt">
                  <img src="{{asset('images/43.jpg')}}" class="img-responsive" alt="">
                </div>
              </div>
              <div class="col-lg-3">
                <div class="img-box">
                  <img src="{{asset('images/44.jpg')}}" class="img-responsive" alt="">
                </div>
              </div> -->
          </div>
          </div>
      </div>

      <?php echo $images->render(); ?>

    </div>
</section>
<!-- Gallery Sec Ends -->

<!-- ============================================================== -->
<!-- BODY END HERE -->
<!-- ============================================================== -->

@endsection
@section('css')
<style>

</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection