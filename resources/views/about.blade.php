@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->
   
      <!-- Begin: Crousel -->
   
    <!-- Begin: Banner -->
   
    <section class="sub-banner" style="
    background: url({{asset($banner->image)}}); background-size: cover;
    background-position: center center;background-attachment: fixed;
    padding: 10% 0;">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="sub-banner-content">
              <h2 class="wow zoomInRight" data-wow-duration="3s" data-wow-delay="0.2s"> {{$banner->title}} </h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- End: Banner -->


    <!-- Main-banner Ends -->

<!-- About Page  -->
<section class="about">
  <div class="container">
    <div class="row">
       <h2  class="wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.3s"> {{$cms_about1->name}} </h2>
       <?= html_entity_decode($cms_about1->content) ?>
    </div>
  </div>
</section>
<!-- About Page Ends -->
<section class="who">
  <div class="container-fluid no-padd">
   <div class="row">
     <div class="col-lg-6">
       <div class="img-box">
         <img src="{{asset($cms_about2->image)}}" alt="" class="img-responsive">
       </div>
     </div>
     <div class="col-lg-6">
       <div class="head-sec">
         <span class="wow fadeInRight" data-wow-duration="3s" data-wow-delay="0.3s"> 
           <h2> {{$cms_about2->name}} </h2>
         </span>
       </div>
       <div class="ctr wow fadeIn"  data-wow-duration="3s" data-wow-delay="0.4s">
         <?= html_entity_decode($cms_about2->content) ?>
         <span class="link_wrap">
           <a class="link_text" href="{{route('contact')}}">Contact Us Today
              <div class="right">
                <div class="arrow"></div>
              </div>
           </a>      
        </span>
       </div>
     </div>
   </div>
  </div>
</section>

<!-- Client CSS Starts -->
@include('widgets.clients')


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