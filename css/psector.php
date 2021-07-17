<?php 

include 'inc/connection.php';

include 'inc/nav.php';

$sql = "select * from sector where status = 1 ";

$get = mysqli_query($conn,$sql);



?>



     <section class="slidermain">

	 <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">

    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>

  </ol>

  <div class="carousel-inner">

    <div class="carousel-item active " data-interval="3500">

      <img src="img/industrysectors.png" class="d-block w-100" alt="...">

                <div class="carousel-caption d-none d-md-block" style="background: rgb(255 255 255 / 80%); padding:40px; width: 660px;right: 0px;left: auto;bottom:20%;color:#2e3031; border-left: 10px solid #105776;">

                 <h5 style="font-size: 2.8rem;text-align: right;">PARADIGM INVEST GROUP</h5>

				<p style="font-size: 1.8rem;line-height: 1.8rem;letter-spacing: 1.5px; text-align: right;">

				Our team focuses on a diverse range of industry sectors </p>

                </div>

    </div>

  </div>

</div>

	  </section>

      <section class="ssection">

        <div class="container">

          <div class="row sectorrow">

		  <?php while($data = mysqli_fetch_assoc($get)){

			 ?>

            <div class="col-md-6" style="margin-bottom: 25px;">

              <div class="scard card">

              <img src="admin/<?php echo $data['simg']?>" class="simg">

              <div class="container scontainer">

              <h1 class="stitle"> <?php echo $data['sname']?>    </h1>

              <p class="scontent">

<?php echo $data['sdesc']?>

</p>

              </div>

            </div>

          </div>

		  <?php } ?>

            <!--<div class="col-md-6">

              <div class="scardnew card">

              <img src="img/sectorone.png" class="simg">

              <div class="container scontainer">

              <h1 class="stitle">Global Asset Managers</h1>

              <p class="scontent">The team supports asset managers seeking access to capital from financial institutions located around the globe. We provide assistance on the appropriate legal structures, distribution agreements and local sales and marketing support to successfully launch asset management funds.<br>&nbsp; </p>

              </div>

            </div>

          </div>

          </div>

          <div class="row" style="margin-top:20px; padding-bottom:20px;" >

		            <div class="col-md-6">

            <div class="scard card">

            <img src="img/sectortwo.jpg" class="simg">

            <div class="container scontainer">

            <h1 class="stitle">Private Equity</h1>

            <p class="scontent">Our global team provides our Private equity partners access to a select group of financial institutions to target unique and tailored deals. We provide the necessary introductions and support the deal from all perspectives to make the transaction a success <br>&nbsp; </p>

            </div>

          </div>

        </div>


          <div class="col-md-6">

            <div class="scard card">

            <img src="img/sectorfour.png" class="simg">

            <div class="container scontainer">

            <h1 class="stitle">Financial Technology Providers</h1>

            <p class="scontent">We provide leading global financial technology providers access to our global financial institutional partners to showcase their innovative digital investment solutions. Our team provides access to the key stakeholders and decision makers of these banks and financial institutions to get a rapid response. </p>

            </div>

          </div>

        </div>-->

          </div>

        </div>

      </section>

      <footer class="footbg">

        <div class="container">

          <div class="row">

            <div class="col-md-3">

              <img src="img/footlogo.png" class="footlogo">

              <p class="footcontent">The Paradigm Invest Group is a global financial services company that have earned their reputations as experts in the industry.</p>

            </div>

            <div class="col-md-3 foottwo">

              <p class="foottitle">

                Links

              </p>

              <ul class="footul ">

                <li class="foolli"><a style="color: white;" href="index.html">Home</a></li>

                <li class="foolli"><a style="color: white;" href="about.html">About</a></li>

                <li class="foolli"><a style="color: white;" href="services.html">Services</a></li>

                <li class="foolli"><a style="color: white;" href="infographic.html">Our Focus</a></li>

                <li class="foolli"><a style="color: white;" href="contact.html">Contact</a></li>



              </ul>

            </div>

            <div class="col-md-3 footthree ">

              <p class="foottitle">

                Links

              </p>

              <ul class="footul">

                <li class="foolli"><a style="color: white;" href="services.html">Captial Raising</a></li>

                <li class="foolli"><a style="color: white;" href="services.html">Global Distribution</a></li>

                <li class="foolli"><a style="color: white;" href="services.html">Product Developement</a></li>

                <li class="foolli"><a style="color: white;" href="services.html">Marketing</a></li>

              </ul>

            </div>   

            <div class="col-md-3 footfour">

              <p class="foottitle">

                Contact Us

              </p>

                <p class="footcontent"> New York, USA<br>info@paradigm.com<br>666 888 0000

              </ul>

            </div>          

          </div>

        </div>

        <div class="copyholder">

        <hr class="foothr">

        <p class="copyright"> Copyright Â© 2020 by Paradigm. All rights reserved</p>

      </div>

      </footer>           

</body>

<script src="js/jquery.js"></script>

<script src="js/bootstrap.js"></script>

</html>