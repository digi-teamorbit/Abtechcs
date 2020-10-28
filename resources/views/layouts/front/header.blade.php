<?php $segment = Request::segments();?>

<header>
      <div class="topbar">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="leftahrf">
                <a href="telto:{{App\Http\Traits\HelperTrait::returnFlag(59) }}">Phone: {{App\Http\Traits\HelperTrait::returnFlag(59) }}</a>
                <a href="mailto:{{App\Http\Traits\HelperTrait::returnFlag(218) }}">Email: {{App\Http\Traits\HelperTrait::returnFlag(218) }}</a>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <ul>
                <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(682) }}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(1960) }}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(1961) }}" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(1963) }}" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="bottom-row">
        <div class="container">
          <div class="row ">
            <div class="col-lg-2">
              <div class="nav-brand">
                <a href="{{route('home')}}"> <img src="{{asset($logo->img_path)}}" class="img-responsive" alt=""> </a>
              </div>
            </div>
            <div class="col-lg-10 no-padd">
              <div class="top-row">
               <nav class="navbar navbar-default">
                 <div class="navbar-header">
                   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   </button>
                   <!-- <a class="navbar-brand" href="#">Project name</a> -->
                 </div>
                 <div id="navbar" class="navbar-collapse collapse no-padd">
                       <ul class="nav navbar-nav">
                         <li><a href="javascript:(0)" class="nav-overlay-btn"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
                         <li class="active"><a href="#qoute"> GET QOUTE </a></li>
                       </ul>
                     </div>
                  </nav>
                </div>
                 </div>
               </div>
             </div>
      </div>
  </header>

  <section class="nav-overlay">
      <ul>
        <li><a href="{{route('home')}}"> <i class="fa fa-home" aria-hidden="true"></i>HOME</a></li>
        <li><a href="{{route('about')}}"> <i class="fa fa-info-circle"></i>About Us </a></li>
        <li><a href="{{route('services')}}"><i class="fa fa-list-alt"></i>Services</a></li>
        <li><a href="{{route('gallery')}}"> <i class="fa fa-image"></i>Gallery</a></li>
        <li><a href="{{route('contact')}}"><i class="fa fa-paper-plane"></i>CONTACT</a></li>
      </ul>
      <a href="#" class="close-btn"><i class="fa fa-times"></i></a>
  </section>