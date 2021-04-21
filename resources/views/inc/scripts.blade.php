<script type="text/javascript" src="https://phppot.com/demo/how-to-create-horizontal-scrolling-menu-using-jquery-and-php/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="http://localhost/htdocs/js/emojionearea.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script type="text/javascript" src="http://localhost/htdocs/js1/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="http://localhost/htdocs/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="http://localhost/htdocs/js/functions.js"></script>
    <script type="text/javascript" src="http://localhost/htdocs/js/main.js"></script>
    <script type="text/javascript">

        $(document).on("click", function(event){
          var $triggerOn = $(".locale");
          if($triggerOn !== event.target && !$triggerOn.has(event.target).length){
            $(".popover-box").removeClass("active");
          }            
        });  
    
        var owl = $('.owl-carousel');
        owl.owlCarousel({
          items:1,
          loop:true,
          margin:10,
          rtl:true,
          autoplay:true,
          animateIn: 'flipInX',
          autoplayTimeout:4000,
          mouseDrag:false,
          autoplayHoverPause:true
        });
        
      </script>