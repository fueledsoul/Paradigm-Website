<?php 

include 'inc/connection.php';

include 'inc/nav.php';

$sql = "select * from `process` where pid = 1 ";

$get = mysqli_query($conn,$sql);

$data = mysqli_fetch_assoc($get);



?>

     <section class="slidermain">

	 <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">

    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>

  </ol>

  <div class="carousel-inner">

    <div class="carousel-item active " data-interval="3500">

      <img src="img/ourprocess.png" class="d-block w-100" alt="...">

                <div class="carousel-caption d-none d-md-block" style="background: rgb(255 255 255 / 80%); padding:40px; width: 660px;right: 0px;left: auto;bottom:20%;color:#2e3031; border-left: 10px solid #105776;"">

                 <h5 style="font-size: 2.8rem;text-align: right;">PARADIGM CAPITAL INTERNATIONAL</h5>

				<p style="font-size: 1.8rem;line-height: 1.8rem;letter-spacing: 1.5px; text-align: right;">

				A systemic process for success </p>

                </div>

    </div>

  </div>

</div>

	  </section>

      <section style="background-color: #fbfbfb">

          <img src="admin/<?php echo $data['pimg'] ?>" class="processimg">

      </section>



      <footer class="footbg">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="footer_logo_sec"><img src="img/footlogo.png" class="footlogo"></div>                  
		<p class="footcontent">The Paradigm Invest Group is a global financial services company that have earned their reputations as experts in the industry.</p>
            </div>
            <div class="col-md-3 foottwo">
              <p class="foottitle">
                Links
              </p>
              <ul class="footul ">
                <li class="foolli"><a style="color: white;" href="index.html">Home</a></li>
                <li class="foolli"><a style="color: white;" href="services.html">Services</a></li>
                <li class="foolli"><a style="color: white;" href="infographic.php">Our Focus</a></li>
                <li class="foolli"><a style="color: white;" href="contact.html">Contact</a></li>

              </ul>
            </div>  
            <div class="col-md-3 footfour">
              <p class="foottitle" >
                Contact Us
              </p>
                <p class="footcontent" style="padding-top:0px;"> Tortola Pier Park, Building 1<br> Second Floor, Wickhams Cay 1<br>
 Road Town, Tortola<br>
 British Virgin Islands<br>
<a href="mailto: info@paradigminvestgroup.com"> info@paradigminvestgroup.com</a>
              </ul>
            </div>  
            <div class="col-md-3 footfour">
              <p class="foottitle" >
                DISCLAIMER
              </p>
                <p class="footcontent" style="padding-top:0px;"> All regulated activities and securities offered through Marco Polo Securities Inc. Marco Polo Securities Inc. is a member of FINRA, NFA, and SIPC.
              </ul>
            </div>  			
          </div>
        </div>
        <div class="copyholder" style="padding-top:0px;">	
        <hr class="foothr">
        <p class="copyright"> Copyright &copy; 2021 Paradigm. All rights reserved</p>
      </div>
      </footer>            

</body>

<script src="js/jquery.js"></script>

<script src="js/bootstrap.js"></script>

</html>