</div> <!-- /#wrapper -->

<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4 bg-success">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">TOKSEDO Company</h6>
        <p>Website ini dibuat untuk membantu keperluan warga desa yang masih
        terkendala dalam mendapatkan kebutuhan bertani dan beternak mereka, juga
        tempat yang cocok untuk berkonsultasi dengan ahli ternak dan tani</p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Founder</h6>
        <!-- keterangan founder andri -->
        <p>
          <a title="Asal Kota: Blitar (UI/UX Designer)" href="#!">
          Andri Yoga Susila
          </a>
        </p>
        <!-- keterangan founder fajar -->
        <p>
          <a title="Asal Kota: Malang (Front-end Developer)" href="#!">
            Fajar Pandu Waskito
          </a>
        </p>
        <!-- keterangan founder yusril -->
        <p>
          <a title="Asal Kota: Gresik (Back-end Developer)" href="#!">
            Muhammad Yusril Hasriansyah
          </a>          
        </p>
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">For More Information</h6>
        <p>
          <img id="logoweb" src="<?php echo base_url();?>images/logo-web.png" alt="logo website"> <a id="web" href="<?php echo base_url();?>"><b>www.toksedo.com</b></a></p>
        <p>
          <img id="logoemail" src="<?php echo base_url();?>images/logo-email.png" alt="logo email"> <b>toksedo@gmail.com</b></p>
        <p>
          <img id="logoinsta" src="<?php echo base_url();?>images/logo-insta.png" alt="logo instagram"> <b>@toksedo</b></p>
        <p>
          <img id="logoinsta" src="<?php echo base_url();?>images/logo-fb.png" alt="logo facebook"> <b>Toko Serba Serbi Desa Online</b></p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <p class="text-center text-md-left">&copy; 2020 Copyright:
          <a href="<?php echo base_url();?>">
            <strong> TOKSEDO Website</strong>
          </a>
        </p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
<!-- Footer -->


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <!-- jQuery untuk toggle password -->
    <script type="text/javascript">
      $(document).ready(function(){
        $('#icon-click').click(function(){
          $('#icon').toggleClass('fa-eye-slash');
          $('#icon').css('color','blue');
          var input = $('#password');
          var teks = $('#text_password');
          if(input.attr("type") === "password" ){
            input.attr("type","text");
            teks.text("Hide Password");
          }else{
            input.attr("type","password");
            teks.text("Show Password");
            $('#icon').css('color','black');
          }
        });
      });
    </script>
    <!-- sidebar toggle -->
    <script>
      $(function(){
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
            if ($("#wrapper").hasClass("toggled") == false) {
              $("#user-logo").css('color','black');
            }else {
              $("#user-logo").css('color','white');
            }
        });

        $(window).resize(function(e) {
          if($(window).width()<=768){
            $("#wrapper").removeClass("toggled");
          }else{
            $("#wrapper").addClass("toggled");
          }
        });
      });
    </script>
    <!-- Perkalian value input detail produk -->
    <?php if($this->input->post('jumlah') != null && $this->input->post('harga') != null): ?>
      <script>
      $output = $('#totalBelanja');
      $(document).ready(function{
        $('#totalBelanja').keyup(function() {
          var $total = (int) $('#harga').val();
          var $value = (int) $('#jumlah').val();
          $output.val($value * $total);
        });
      });
    </script>
    <?php endif; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>