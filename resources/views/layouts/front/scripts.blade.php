<!-- ============================================================== -->
<!-- All SCRIPTS AND JS LINKS BELOW  -->
<!-- ============================================================== -->


    <script src="{{asset('js/all.min.js')}}"></script>
    <script src="{{asset('js/custom.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.min.js"></script>


  <!-- Notification JS Below  -->

  <script src="{{ asset('/plugins/vendors/toast-master/js/jquery.toast.js') }}"></script>

  <script>

       $(document).ready(function () {

             @if(\Session::has('message')) 
                  $.toast({
                      heading: 'Success!',
                      position: 'bottom-right',
                      text:  '{{session()->get('message')}}',
                      loaderBg: '#ff6849',
                      icon: 'success',
                      hideAfter: 3000,
                      stack: 6
                  });
              @endif
              
              
              @if(\Session::has('flash_message')) 
                  $.toast({
                      heading: 'Error!',
                      position: 'bottom-right',
                      text:  '{{session()->get('flash_message')}}',
                      loaderBg: '#ff6849',
                      icon: 'error',
                      hideAfter: 3000,
                      stack: 6
                  });
              @endif

              
          })
      
  </script>
