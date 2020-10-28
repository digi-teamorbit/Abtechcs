@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->
   

    
    <!-- Begin: Banner -->
   
      <!-- Begin: Crousel -->
    <!-- Begin: Banner -->
   
    <section class="sub-banner contact_banner" style="
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

<!-- Contact Sec -->
<section class="happy">
    <div class="container">
       <div class="row">
           <div class="col-lg-6">
               <div class="head-sec">
                   <h1 class="wow zoomInLeft" data-wow-duration="3s" data-wow-delay="0.2s"> 
                        {{$cms_contact1->name}}
                  </h1>
                  <?= html_entity_decode($cms_contact->content1) ?>
               </div>
           </div>
           <div class="col-lg-6">
              <div class="contact-link wow zoomIn" data-wow-duration="3s" data-wow-delay="0.2s" >
                  <a href="#contact"> Contact Now </a>
              </div> 
          </div>
       </div>
    </div>
</section>
<!-- Contact Sec Ends -->
<section class="contact-wrap" id="contact">
    <div class="container">
        <div class="heading">
            <h5 class="wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.2s"> {{$cms_contact2->name}} </h5>
            <?= html_entity_decode($cms_contact2->content) ?>
          </div>
        <div class="row justify-center">
            <div class="col-lg-8">
                <div class="contact-form-inner">
                    <div class="row">
                      <form method="post" action="{{route('contactUsSubmit')}}">
                        @csrf
                        <div class="col-md-6">
                          <div class="name form-group">
                            <input id="name" name="name" type="text" class="form-control @error('name') is-danger @enderror" placeholder="Your Name" required="">
                          </div>
                          @error('name')
                          <p class="help is-danger">{{ $errors->first('name') }}</p>
                          @enderror
                        </div>
                        <div class="col-md-6">
                          <div class="name form-group">
                            <input id="email" name="email" type="text" class="form-control @error('email') is-danger @enderror" placeholder="Email Address" required="">
                          </div>
                          @error('email')
                          <p class="help is-danger">{{ $errors->first('email') }}</p>
                          @enderror
                        </div>
                        <div class="col-md-12">
                          <div class="details form-group">
                            <textarea id="comment" name="comment" rows="8" class="form-control @error('comment') is-danger @enderror" placeholder="Write Comment" required=""></textarea>
                          </div>
                          @error('comment')
                          <p class="help is-danger">{{ $errors->first('comment') }}</p>
                          @enderror
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <button type="buton">Send Message</button>
                          </div>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="address-more contact-address">
    <div class="container">
      <div class="address-ctr"> 
        <div class="row center">
          <div class="col-lg-4">
            <div class="address-content">
                <div class="row ">
                  <div class="col-lg-4 no-padd text-center">
                    <i class="fa fa-home wow pulse" data-wow-duration=""  data-wow-iteration="infinite" data-wow-delay="0.5s" aria-hidden="true"></i>
                  </div>
                  <div class="col-lg-8 no-padd">
                    <div class="address-text">
                        <p> {{$cms_contact3->name}} </p>
                        <?= html_entity_decode($cms_contact3->content) ?>
                        <h6>{{App\Http\Traits\HelperTrait::returnFlag(519) }}</h6>
                    </div>
                </div>
                </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="address-content">
              <div class="row">
                <div class="col-lg-4 no-padd text-center">
                    <i class="fa fa-phone wow pulse" data-wow-duration=""  data-wow-iteration="infinite" data-wow-delay="0.5s" aria-hidden="true"></i>
                </div>
                   <div class="col-lg-8 no-padd">
                    <div class="address-text">
                        <p> {{$cms_contact4->name}} </p>
                        <?= html_entity_decode($cms_contact4->content) ?>
                        <h6>{{App\Http\Traits\HelperTrait::returnFlag(59) }}</h6>
                    </div>
                </div>
              </div>
          </div>
          </div>
          <div class="col-lg-4">
            <div class="address-content">
              <div class="row">
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope wow pulse" data-wow-duration=""  data-wow-iteration="infinite" data-wow-delay="0.5s" aria-hidden="true"></i>
                </div>
                <div class="col-lg-8 no-padd">
                  <div class="address-text">
                      <p> {{$cms_contact5->name}} </p>
                      <?= html_entity_decode($cms_contact5->content) ?>
                      <h6> {{App\Http\Traits\HelperTrait::returnFlag(218) }} </h6>
                  </div>
              </div>
              </div>
          </div>
          </div>
        </div>

      </div>
    </div>
  </section>
<section class="map">
    <div class="container-fluid no-padd">
        <div class="iframe-map">
            <iframe class="iframe-custom" src="{{App\Http\Traits\HelperTrait::returnFlag(1966) }}" width="100%" height="400" frameborder="0" style="border:0"></iframe>
         </div>
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