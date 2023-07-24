<section class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="ftr-bx">
          <span>
            <img src="{{url('user_interface/assets/image/ftr-logo.png')}}">
          </span>
        </div>
      </div>

      <div class="col-lg-2 col-md-2 col-sm-8 col-6">
        <div class="f2">
            <h3 class="fhead">Quick Links</h3>
            <ul>
              <li class="mb5"><a href="#" class="cl4">Home</a></li>
              <li class="mb5"><a href="#" class="cl4">About Us</a></li>
              <li class="mb5"><a href="#" class="cl4">Pune Project</a></li>
              <li><a href="#" class="cl4">Blogs</a></li>
            </ul>
        </div>
      </div>

      <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="f2">
            <h3 class="fhead">Policies</h3>
            <ul>
              <li class="mb5"><a href="#" class="cl4">Terms and Condition</a></li>
              <li class="mb5"><a href="#" class="cl4">Privacy apolicies</a></li>
              <li class="mb5"><a href="#" class="cl4">Cookies</a></li>
            </ul>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="f2">
            <h3 class="fhead">Join Us</h3>
            <ul>
              <li class="mb5"><a href="#" class="cl4">Subscribe to our newsletter and stay updated.</a></li>
              <li class="mb5 mt">
                <input type="email" placeholder="Enter your email adress">
              </li>
              <li class="mb5">
                <div class="sub-btn">
                  <a href="#">Subscribe</a>
                </div>
              </li>
            </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- -------------------------copyright-start------------------ -->
<section class="legal">
  <div class="container">
    <p>©2023 Heritage Temples. All rights reserved.</p>
  </div>
</section>


<!-- ------------------------------modal-start------------------------ -->
<div id="pop1" class="cd-popup" role="alert">
  <div class="cd-popup-container">
    <input type="text" placeholder="Search...">
    <a href="#0" class="cd-popup-close"></a>
  </div> <!-- cd-popup-container -->
</div> <!-- cd-popup -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


  <script>
    jQuery(document).ready(function($){
  
  //close popup
  $('.cd-popup').on('click', function(event){
    if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
      event.preventDefault();
      $(this).removeClass('is-visible');
    }
  });
  //close popup when clicking the esc keyboard button
  $(document).keyup(function(event){
      if(event.which=='27'){
        $('.cd-popup').removeClass('is-visible');
      }
    });
});

//open popup
function openpopup(id) {
    event.preventDefault();
      $("#"+id+"").addClass('is-visible');
}
  </script>

  </body>
</html>