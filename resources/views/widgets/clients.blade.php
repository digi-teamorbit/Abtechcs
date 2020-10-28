<?php $clients = DB::table('clients')->get(); ?>
<!-- Service Slider End-->
<section class="client">
  <div class="container-fluid">
    <div class="client-slider">
      @foreach ($clients as $cli)
      <img name="{{$cli->name}}" src="{{asset($cli->image)}}" alt="{{$cli->name}}">
      @endforeach
     <!--  <img src="{{asset('images/bank-ozk-180x180.png')}}" alt="">
      <img src="{{asset('images/bk-180x180.jpg')}}" alt="">
      <img src="{{asset('images/kroger-logo-180x136.png')}}" alt="">
      <img src="{{asset('images/bedbath.png')}}" alt="">
      <img src="{{asset('images/ford-logo-180x180.jpg')}}" alt="">
      <img src="{{asset('images/bank-ozk-180x180.png')}}" alt="">
      <img src="{{asset('images/bk-180x180.jpg')}}" alt="">
      <img src="{{asset('images/kroger-logo-180x136.png')}}" alt="">
      <img src="{{asset('images/bedbath.png')}}" alt=""> -->
    </div>
  </div>
</section>