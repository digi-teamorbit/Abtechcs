@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

   <!-- Begin: Banner -->
   
      <!-- Begin: Crousel -->
    <section class="main-banner">
      <div class="overlay">
                    <video width="100%" autoplay="" loop preload="auto" loop="loop" muted="muted" id="videoBanner" class="videoBanner">
                    <source src="{{asset($banner->video)}}" type="video/mp4">
                    <source src="{{asset('video/video1.ogg')}}" type="video/ogg"> 
                    <source src="{{asset('video/video1.webm')}}" type="video/webm">    
                    </video>

                </div>
      <div class="container-fluid banner-content">
        <div class="row">
          <div class="col-lg-12">
            <div class="">
              <h1>
                <?= html_entity_decode($banner->description) ?>
              </h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    <!-- Main-banner Ends -->
    <!-- Who Starts -->
    <section class="who-sec">
     <div class="container">
       <div class="row">
         <div class="col-lg-12">
           <div class="head-sec">
             <h2 class="wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.2s"> {{$cms_home1->name}} </h2>
             <?= html_entity_decode($cms_home1->content) ?>
             <?= html_entity_decode($cms_home2->content) ?>
           </div>
         </div>
       </div>
       <div class="row pt">
        <div class="heading-sec">
          <?= html_entity_decode($cms_home7->content) ?>
         </div>
         <div class="col-lg-4">
           <div class="icon-box wow pulse" data-wow-duration=""  data-wow-iteration="infinite" data-wow-delay="0.5s">
             <span> 
              <i class="fa fa-bullseye"></i>
             </span>
           </div>
           <div class="who-box"> 
             <h3> {{$cms_home8->name}} </h3>
             <?= html_entity_decode($cms_home8->content) ?>
           </div>
         </div>
         <div class="col-lg-4">
          <div class="icon-box wow pulse" data-wow-duration=""  data-wow-iteration="infinite" data-wow-delay="0.5s">
            <span> 
              <i class="fa fa-lock"></i>
            </span>
          </div>
          <div class="who-box">
            <h3> {{$cms_home9->name}} </h3>
            <?= html_entity_decode($cms_home9->content) ?>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="icon-box wow pulse" data-wow-duration=""  data-wow-iteration="infinite" data-wow-delay="0.5s">
            <span> 
              <i class="fa fa-bullseye"></i>
            </span>
          </div>
          <div class="who-box">
            <h3> {{$cms_home10->name}}
            </h3>
            <?= html_entity_decode($cms_home10->content) ?>
          </div>
        </div>
       </div>
       <!-- <div class="row pt">
        <div class="col-lg-4">
          <div class="icon-box">
            <span> 
              <i class="fa fa-lock"></i>
            </span>
          </div>
          <div class="who-box">
            <h3> Security Services </h3>
            <p>
             The Abtech Cs Mission is to grow and prosper by providing unique and the best solutions 
             to our customers’ business needs; better, faster, stronger, and more cost-effectively than any other competition.
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="icon-box">
            <span> 
              <i class="fa fa-comment"></i>
            </span>
          </div>
         <div class="who-box">
           <h3> VOICE COMMUNICATION </h3>
           <p>
            The Abtech Cs Mission is to grow and prosper by providing unique and the best solutions 
            to our customers’ business needs; better, faster, stronger, and more cost-effectively than any other competition.
           </p>
         </div>
       </div>
       <div class="col-lg-4">
        <div class="icon-box">
          <span> 
            <i class="fa fa-cogs"></i>
          </span>
        </div>
         <div class="who-box">
           <h3> ELECTRICAL SERVICES
           </h3>
           <p>
            The Abtech Cs Mission is to grow and prosper by providing unique and the best solutions 
            to our customers’ business needs; better, faster, stronger, and more cost-effectively than any other competition.
           </p>
         </div>
       </div>
      </div> -->
     </div>

    </section>

<!-- Services Sec Starts -->


<!-- Services Sec Ends -->
<section class="service-sec">
  <div class="container-fluid no-padd">
    <div class="row nav-flex">
    <div class="col-lg-6 no-padd">
      <div class="img-box">
        <img src="{{asset($cms_home14->image)}}" alt="" class="img-responsive" width="100%">
      </div>
    </div>
    <div class="col-lg-6 no-padd">
      <div class="ctr">
        <h3 class="wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.2s"> {{$cms_home14->name}} </h3>
        <?= html_entity_decode($cms_home14->content) ?>
        <a class="read-link wow zoomInRight" href="{{route('services')}}" data-wow-duration="3s" data-wow-delay="0.4s"> Read More </a>
      </div>
    </div>
  </div>
  <div class="row nav-flex">
    <div class="col-lg-6 no-padd">
      <div class="ctr">
        <h3 class="wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.4s"> {{$cms_home15->name}} </h3>
        <?= html_entity_decode($cms_home15->content) ?>
        <a class="read-link wow zoomInRight" href="{{route('services')}}" data-wow-duration="3s" data-wow-delay="0.6s"> Read More </a>
      </div>
    </div>
    <div class="col-lg-6 no-padd">
      <div class="img-box">
        <img src="{{asset($cms_home15->image)}}" alt="" class="img-responsive" width="100%">
      </div>
    </div>
  </div>
</div>
</section>


<!-- Service Slider Start-->

<section class="service-slider">
  <div class="container">
    <div class="head-sec">
      <?= html_entity_decode($cms_home6->content) ?>
     </div>
    <div class="row">
      <div class="slider-box">
  
        @foreach ($services as $service)
        <div>
          <img id="image" src="{{asset($service->image)}}" class="img-responsive serv" alt="">
          <div class="ctr">
            <h2> {{$service->title}}  </h2>
            <?= html_entity_decode($truncated = Str::limit($service->description, 175) ) ?><br>
            <a class="read-link" href="{{route('services')}}"> Read More </a>
          </div>
        </div>
        @endforeach
        <!-- <div>
          <img src="{{asset('images/3.png')}}" class="img-responsive" alt="">
          <div class="ctr">
            <h2> Site Surveys  </h2>
            <p> 
               Abtech Cs recommends conducting site surveys as part of any new technology deployment initiative.
               We can provide a complete inventory of existing store systems or survey sites to prepare for the deployment of new technology.
            </p>
            <a class="read-link" href="{{route('services')}}"> Read More </a>
          </div>
        </div> -->
        <!-- <div>
          <img src="{{asset('images/1.png')}}" class="img-responsive" alt="">
          <div class="ctr">
            <h2> Network Cabling </h2>
            <p> 
              Abtech Cs has 14 RCDD certified professionals on staff along with a national team of BICSI certified technicians. We have relationships will all major structured cabling
               manufacturers and distribution partners, allowing us to effectively support nationwide multi-site client projects.
            </p>
            <a class="read-link" href="{{route('services')}}"> Read More </a>
          </div>
        </div> -->
        <!-- <div>
          <img src="{{asset('images/2.png')}}" class="img-responsive" alt="">
          <div class="ctr">
            <h2> Wireless </h2>
            <p> 
              Abtech Cs has the expertise to perform wireless site surveys and 
              a proven ability to successfully deploy wireless solutions. We have Certified Wireless Network Administrators on staff.
            </p>
            <a class="read-link" href="{{route('services')}}"> Read More </a>
          </div>
        </div> -->
        <!-- <div>
          <img src="{{asset('images/2.png')}}" class="img-responsive" alt="">
          <div class="ctr">
            <h2> VOIP </h2>
            <p> 
              Abtech Cs can furnish, stage, configure, and install your VOIP systems or provide the Smart Hands and Rack & Stack in the field to support client provided configuration.
            </p>
            <a class="read-link" href="{{route('services')}}"> Read More </a>
          </div>
        </div> -->
        <!-- <div>
          <img src="{{asset('images/2.png')}}" class="img-responsive" alt="">
          <div class="ctr">
            <h2> Equipment Staging & Configuration </h2>
            <p> 
              Abtech Cs operates redundant staging centers to provide full support for our client-provided hardware/software. These facilities are key to removing time, cost and risk in the field, as they allow us to provide top quality support for our clients' enterprise standards.            </p>
            <a class="read-link" href="{{route('services')}}"> Read More </a>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</section>
<!-- Service Slider End-->
<!-- 
Testimonail Sec -->
<section class="review rev">
  <div class="container">
     <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <div class="head-sec">
                <?= html_entity_decode($cms_home3->content) ?>
                <div class="review-slider">
                  @foreach ($testimonials as $test)
                   <div>
                      <div class="review-box">
                         <div class="img-box">
                            <img src="{{asset('images/qoute.png')}}" alt="" class="img-responsive">
                         </div>
                       <div class="ctr">
                        <?= html_entity_decode($test->comments) ?>
                       </div>
                       <div class="start">
                          <ul>
              <li>{!! str_repeat('<i class="fa fa-star" aria-hidden="true" style="padding: 2px;"></i>', $test->rate) !!}
              {!! str_repeat('<i class="fa fa-star-o" aria-hidden="true" style="padding: 2px;"></i>', 5 - $test->rate) !!}</li>
         </ul>
                       </div>
                       <div class="info">
                          <div class="img">
                            <img src="{{asset($test->image)}}" alt="" class="img-responsive">
                          </div>
                          <div class="ctr">
                             <h5> {{$test->name}}
                             </h5>
                             <h6> {{$test->verified}} </h6> 
                          </div>
                       </div>
                      </div>
                   </div>
                   @endforeach
                       <!-- <div>
                      <div class="review-box">
                         <div class="img-box">
                            <img src="{{asset('images/qoute.png')}}" alt="" class="img-responsive">
                         </div>
                       <div class="ctr">
                        <p>
                         “Donec id elit non mi porta gravida at eget metus. 
                         Nulla vitae elit libero, a pharetra augue. 
                         Etiam porta malesuada magna mollis euismod”
    
                        </p>
                       </div>
                       <div class="start">
                          <ul>
                             <li> <i class="fa fa-star" aria-hidden="true"></i></li>
                             <li> <i class="fa fa-star" aria-hidden="true"></i></li>
                             <li> <i class="fa fa-star" aria-hidden="true"></i></li>
                             <li> <i class="fa fa-star" aria-hidden="true"></i></li>
                             <li> <i class="fa fa-star" aria-hidden="true"></i></li>
                          </ul>
                       </div>
                       <div class="info">
                          <div class="img">
                            <img src="{{asset('images/review-img.png')}}" alt="" class="img-responsive">
                          </div>
                          <div class="ctr">
                             <h5> Jhonaton Doe
                             </h5>
                             <h6> CEO, LoremIpsum. </h6> 
                          </div>
                       </div>
                      </div>
                   </div> -->
                   <!-- <div>
                      <div class="review-box">
                         <div class="img-box">
                            <img src="{{asset('images/qoute.png')}}" alt="" class="img-responsive">
                         </div>
                       <div class="ctr">
                        <p>
                         “Donec id elit non mi porta gravida at eget metus. 
                         Nulla vitae elit libero, a pharetra augue. 
                         Etiam porta malesuada magna mollis euismod”
    
                        </p>
                       </div>
                       <div class="start">
                          <ul>
                             <li> <i class="fa fa-star" aria-hidden="true"></i></li>
                             <li> <i class="fa fa-star" aria-hidden="true"></i></li>
                             <li> <i class="fa fa-star" aria-hidden="true"></i></li>
                             <li> <i class="fa fa-star" aria-hidden="true"></i></li>
                             <li> <i class="fa fa-star" aria-hidden="true"></i></li>
                          </ul>
                       </div>
                       <div class="info">
                          <div class="img">
                            <img src="{{asset('images/review-img.png')}}" alt="" class="img-responsive">
                          </div>
                          <div class="ctr">
                             <h5> Jhonaton Doe
                             </h5>
                             <h6> CEO, LoremIpsum. </h6> 
                          </div>
                       </div>
                      </div>
                   </div> -->
                   <!-- <div>
                      <div class="review-box">
                         <div class="img-box">
                            <img src="{{asset('images/qoute.png')}}" alt="" class="img-responsive">
                         </div>
                       <div class="ctr">
                        <p>
                         “Donec id elit non mi porta gravida at eget metus. 
                         Nulla vitae elit libero, a pharetra augue. 
                         Etiam porta malesuada magna mollis euismod”
    
                        </p>
                       </div>
                       <div class="start">
                          <ul>
                             <li> <i class="fa fa-star" aria-hidden="true"></i></li>
                             <li> <i class="fa fa-star" aria-hidden="true"></i></li>
                             <li> <i class="fa fa-star" aria-hidden="true"></i></li>
                             <li> <i class="fa fa-star" aria-hidden="true"></i></li>
                             <li> <i class="fa fa-star" aria-hidden="true"></i></li>
                          </ul>
                       </div>
                       <div class="info">
                          <div class="img">
                            <img src="{{asset('images/review-img.png')}}" alt="" class="img-responsive">
                          </div>
                          <div class="ctr">
                             <h5> Jhonaton Doe
                             </h5>
                             <h6> CEO, LoremIpsum. </h6> 
                          </div>
                       </div>
                      </div>
                   </div> -->
                </div>
             </div>
            </div>
            <div class="col-lg-6 ">
              <div class="head-sec bordered">
                <h2 class="wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.3s"> {{$cms_home4->name}} </h2>
                <div class="icon-box">
                  <span> 
                    <i class="fa fa-question-circle"></i>
                  </span>
                </div>
                <div class="who-box">
                  <?= html_entity_decode($cms_home4->content) ?>
              </div>
            </div>
          </div>
        </div>
     </div>
  </div>
  </section>
  
  
<!-- Certifications Starts -->

<section class="cert">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="head-sec">
           <h2 class="wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.2s"> {{$cms_home5->name}} </h2>
           <?= html_entity_decode($cms_home5->content) ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="icon-box wow pulse" data-wow-duration=""  data-wow-iteration="infinite" data-wow-delay="0.5s">
          <span> 
           <i class="fa fa-cogs"></i>
          </span>
        </div>
        <div class="who-box"> 
          <h3> {{$cms_home11->name}} </h3>
          <?= html_entity_decode($cms_home11->content) ?>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="icon-box wow pulse" data-wow-duration=""  data-wow-iteration="infinite" data-wow-delay="0.5s">
          <span> 
           <i class="fa fa-cogs"></i>
          </span>
        </div>
        <div class="who-box"> 
          <h3> {{$cms_home12->name}} </h3>
          <?= html_entity_decode($cms_home12->content) ?>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="icon-box wow pulse" data-wow-duration=""  data-wow-iteration="infinite" data-wow-delay="0.5s">
          <span> 
           <i class="fa fa-cogs"></i>
          </span>
        </div>
        <div class="who-box"> 
          <h3> {{$cms_home13->name}} </h3>
          <?= html_entity_decode($cms_home13->content) ?>
        </div>
      </div>
    </div>
  </div>
</section>
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

.rev{
  background: url({{asset($cms_home3->image)}});
     background-color: #000;
    padding: 6% 0 9%;
    position: relative;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed
  }

.serv{
  height: 200px;
}

</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection