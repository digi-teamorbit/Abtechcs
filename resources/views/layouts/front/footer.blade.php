<?php $cms_footer1 = DB::table('pages')->where('id', 1)->first();
$cms_footer2 = DB::table('pages')->where('id', 2)->first();
 ?>

<footer>
  <div class="container">
    <div class="row">
      
     <div class="col-md-3 wow fadeInLeft" data-wow-duration="3s" data-wow-delay="0.2s">
       <div class="ftr-blk">
         <img src="{{asset($logo2->img_path)}}" alt="">
         <?= html_entity_decode($cms_footer1->content) ?>
       </div>
     </div>

     <div class="col-md-4 wow fadeInLeft" data-wow-duration="3s" data-wow-delay="0.3s">
       <div class="ftr-links">
         <h4>Quick Links</h4>
     
         <ul class="ftr-cntc">
                     <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:{{App\Http\Traits\HelperTrait::returnFlag(59) }}">{{App\Http\Traits\HelperTrait::returnFlag(59) }}</a></li>
          <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:{{App\Http\Traits\HelperTrait::returnFlag(218) }}">{{App\Http\Traits\HelperTrait::returnFlag(218) }}</a></li>
        </ul>
       </div>
     </div>

     <div class="col-md-2 wow fadeInLeft" data-wow-duration="3s" data-wow-delay="0.4s">
       <div class="ftr-links">
         <h4>Services</h4>
         <ul>
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('about')}}">About</a></li>
          <li><a href="{{route('services')}}">Services</a></li>
          <li><a href="past-project.html">Past Projects</a></li>
          <li><a href="about-founder.html">About Founder</a></li>
        </ul>
       </div>
     </div>

     <div class="col-md-3 wow fadeInLeft" data-wow-duration="3s" data-wow-delay="0.5s">
       <div class="ftr-form" id="qoute">
         <h4>{{$cms_footer2->name}}</h4>
         <?= html_entity_decode($cms_footer2->content) ?>
         <form method="post" action="{{route(quoteSubmit)}}">
          @csrf
           <input type="text" name="name" placeholder="Your Name">
           <input type="email" name="email" placeholder="Your Email Address">
           <input type="text" name="subject" placeholder="Subject">
           <textarea name="message" placeholder="Message"></textarea>
           <button>Send</button>
         </form>
       </div>
     </div>

    </div>
  </div>
</footer>

<!-- END Footer -->

<!-- Copyright Start -->
<div class="copyrit">
<div class="container">
 <p>{{App\Http\Traits\HelperTrait::returnFlag(499) }}</p>
</div>
</div>