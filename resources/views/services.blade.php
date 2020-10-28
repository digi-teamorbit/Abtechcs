@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->
   
    <!-- Begin: Banner -->
   
      <!-- Begin: Crousel -->
    <!-- Begin: Banner -->
   
    <section class="sub-banner Service_banner" style="
    background: url({{asset($banner->image)}}); background-size: cover;
    background-position: center center;">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="sub-banner-content">
              <h1 class="wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.2s"> {{$banner->title}} </h1>
              <?= html_entity_decode($banner->description) ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- End: Banner -->


    <!-- Main-banner Ends -->
<section class="our-services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-sec">
                 <h1> {{$cms_services1->name}} </h1>
                </div>
                <div class="list-services">
                    <?= html_entity_decode($cms_services1->content) ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service Slider Start-->

<section class="service-slider nopadbtm">
    <div class="heading-sec">
      <div class="word-wrapper">
        <div class="word-rotate-wrapper">
          <h1> Choose <div id="rotate"> <div>Networking</div> <div>Solutions</div> <div>Networking</div> <div>Solutions</div> </div> for your business </h1>
        </div>
   </div>
       </div>
  
</section>


<section class="service-sec">
  <div class="container-fluid no-padd">
     @foreach ($services as $key => $service)             
  <?php
  if(($key+1)%2 != 0 )
  {?>
    <div class="row nav-flex">
    <div class="col-lg-6 no-padd">
      <div class="img-box">
        <img src="{{asset($service->image)}}" alt="Jimmy Eat World" class="img-responsive" width="100%">
      </div>
    </div>
    <div class="col-lg-6 no-padd">
      <div class="ctr">
        <h2 class="wow zoomIn" data-wow-duration="3s" data-wow-delay="0.3s"> {{$service->title}} </h2>
       <?= html_entity_decode($service->description) ?>
        
      </div>
    </div>
  </div>

  <?php }else{?>

  <div class="row nav-flex">
    <div class="col-lg-6 no-padd">
      <div class="ctr">
        <h2 class="wow zoomIn" data-wow-duration="3s" data-wow-delay="0.5s"> {{$service->title}} </h2>
        <?= html_entity_decode($service->description) ?>
      
      </div>
    </div>
    <div class="col-lg-6 no-padd">
      <div class="img-box">
        <img src="{{asset($service->image)}}" alt="" class="img-responsive" width="100%">
      </div>
    </div>
  </div>

  <?php }
  ?>
  
  
  @endforeach

  <!-- <div class="row nav-flex">
    <div class="col-lg-6 no-padd">
      <div class="img-box">
        <img src="{{asset('images/fiber-termination.png')}}" alt="Jimmy Eat World" class="img-responsive" width="100%">
      </div>
    </div>
    <div class="col-lg-6 no-padd">
      <div class="ctr">
        <h2 class="wow zoomIn" data-wow-duration="3s" data-wow-delay="0.3s">  FIBER TERMINATION TESTING AND CERTIFICATION   </h2>
       <p> 
                    
                      With our core competency in fiber services, we specialize in all aspect of fiber splicing, termination, testing, troubleshooting, and network certifications.
                       Including anaerobic or unicam multi-mode or single mode. We stock ST, SC, LC and many types of fiber.
                  
                </p>
        
      </div>
    </div>
  </div> -->
  <!-- <div class="row nav-flex">
    <div class="col-lg-6 no-padd">
      <div class="ctr">
        <h2 class="wow zoomIn" data-wow-duration="3s" data-wow-delay="0.5s"> WIFI PLANNING AND SITE SURVEYS 802.11AC AND 802.11N </h2>
        <p>
         We have expanded and grown to offer services that now include wireless site survey, sometimes called an RF site survey or wireless survey, is the process of planning and designing a wireless network, to provide a wireless solution that best fits your needs.
        </p>
      
      </div>
    </div>
    <div class="col-lg-6 no-padd">
      <div class="img-box">
        <img src="{{asset('images/wifi-surveys-body-1.png')}}" alt="" class="img-responsive" width="100%">
      </div>
    </div>
  </div> -->
</div>
</section>


<!-- Service Slider End-->

@include('widgets.clients')

<!-- Testimonail Sec Starts -->
<section class="testimonail-sec">
  <div class="row">
    <div class="col-lg-6">
      <div class="test-slider">

      </div>
    </div>
    <div class="col-lg-6">
      
    </div>
  </div>
</section>

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