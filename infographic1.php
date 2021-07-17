<?php 

include 'inc/connection.php';

include 'inc/nav.php';

$sql = "select * from focus where fid = 1 ";

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

      <img src="img/industrysectors.png" class="d-block w-100" alt="...">

                <div class="carousel-caption d-none d-md-block" style="background: rgb(255 255 255 / 80%); padding:40px; width: 660px;right: 0px;left: auto;bottom:20%;color:#2e3031; border-left: 10px solid #105776;"">

                 <h5 style="font-size: 2.8rem;text-align: right; text-transform:uppercase">Our Focus</h5>

				<p style="font-size: 1.8rem;line-height: 1.8rem;letter-spacing: 1.5px; text-align: right;">

				Our key services for a successful engagement </p>

                </div>

    </div>

  </div>

</div>

	  </section>

	  <section style="background-color:#fbfbfb;">

      <h1 class="infogtitle">&nbsp;

       </h1>

	   			     <div class="col-md-10 offset-md-1 ">

                <p style=" margin: 0; text-align: center; font-size:2rem;"><?php echo $data['ftitle'] ?></p>

              </div>

      <div class="container">

          <div class="row infogrow justify-content-center">

            <div class="col-md-10">

                <img class="infograph" src="img/focus1.png">

              </div>

          </div>





      </div>

	</section>

      <script>



      var ctx = document.getElementById('myChart').getContext('2d');

      var myChart = new Chart(ctx, {

          type: 'pie',

          data: {

              labels: ['Legal', 'Product design ', 'Marketing', 'Distribution/Selling agreements ', 'Capital Raising/Sales '],

              datasets: [{

                  label: '# of Votes',

                  data: [5, 5, 20, 20, 50],

                  backgroundColor: [

                      'rgba(0, 86, 199, 1)',

                      'rgba(2, 142, 195, 1)',

                      'rgba(3, 184, 253, 1)',

                      'rgba(3, 244, 253, 1)',

                      'rgba(16, 87, 118, 1)'

                  ],

                  borderColor: [

                  'rgba(0, 86, 199, 1)',

                      'rgba(2, 142, 195, 1)',

                      'rgba(3, 184, 253, 1)',

                      'rgba(3, 244, 253, 1)',

                      'rgba(16, 87, 118, 1)'

                  ],

                  borderWidth: 1

              }]

          },

      });

      </script>



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