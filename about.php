<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cloud Template - Free Bootstrap 4 Template by Colorlib</title>
    <style>
 
   @import url(http://fonts.googleapis.com/css?family=Raleway:400,900);

body{
  font-family: 'Raleway', sans-serif;
  color: #333;
}

header h1{
  text-align: center;
  font-weight: bold;
  margin-top: 0;
}
  
 header p{
   text-align: center;
   margin-bottom: 0;
 }

.hexa{
  border: 0px;
  float: left;
  text-align: center;
  height: 35px;
  width: 60px;
  font-size: 22px;
  background: #f0f0f0;
  color: #3c3c3c;
  position: relative;
  margin-top: 15px;
}

.hexa:before{
  content: ""; 
  position: absolute; 
  left: 0; 
  width: 0; 
  height: 0;
  border-bottom: 15px solid #f0f0f0;
  border-left: 30px solid transparent;
  border-right: 30px solid transparent;
  top: -15px;
}

.hexa:after{
  content: ""; 
  position: absolute; 
  left: 0; 
  width: 0; 
  height: 0;
  border-left: 30px solid transparent;
  border-right: 30px solid transparent;
  border-top: 15px solid #f0f0f0;
  bottom: -15px;
}

.timeline1 {
  position: relative;
  padding: 0;
  width: 100%;
  margin-top: 20px;
  list-style-type: none;
}

.timeline1:before {
  position: absolute;
  left: 50%;
  top: 0;
  content: ' ';
  display: block;
  width: 2px;
  height: 100%;
  margin-left: -1px;
  background: rgb(213,213,213);
  background: -moz-linear-gradient(top, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(30,87,153,1)), color-stop(100%,rgba(125,185,232,1)));
  background: -webkit-linear-gradient(top, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
  background: -o-linear-gradient(top, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
  background: -ms-linear-gradient(top, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
  background: linear-gradient(to bottom, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
  z-index: 5;
}

.timeline1 li {
  padding: 2em 0;
}

.timeline1 .hexa{
  width: 16px;
  height: 10px;
  position: absolute;
  background: #00c4f3;
  z-index: 5;
  left: 0;
  right: 0;
  margin-left:auto;
  margin-right:auto;
  top: -30px;
  margin-top: 0;
}

.timeline1 .hexa:before {
  border-bottom: 4px solid #00c4f3;
  border-left-width: 8px;
  border-right-width: 8px;
  top: -4px;
}

.timeline1 .hexa:after {
  border-left-width: 8px;
  border-right-width: 8px;
  border-top: 4px solid #00c4f3;
  bottom: -4px;
}

.direction-l,
.direction-r {
  float: none;
  width: 100%;
  text-align: center;
}

.flag-wrapper {
  text-align: center;
  position: relative;
}

.flag {
  position: relative;
  display: inline;
  background: rgb(255,255,255);
  font-weight: 600;
  z-index: 15;
  padding: 6px 10px;
  text-align: left;
  border-radius: 5px;
}

.direction-l .flag:after,
.direction-r .flag:after {
  content: "";
  position: absolute;
  left: 50%;
  top: -15px;
  height: 0;
  width: 0;
  margin-left: -8px;
  border: solid transparent;
  border-bottom-color: rgb(255,255,255);
  border-width: 8px;
  pointer-events: none;
}

.direction-l .flag {
  -webkit-box-shadow: -1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  -moz-box-shadow: -1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  box-shadow: -1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
}

.direction-r .flag {
  -webkit-box-shadow: 1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  -moz-box-shadow: 1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  box-shadow: 1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
}

.time-wrapper {
  display: block;
  position: relative;
  margin: 4px 0 0 0;
  z-index: 14;
  line-height: 1em;
  vertical-align: middle;
  color: #fff;
}

.direction-l .time-wrapper {
  float: none;
}

.direction-r .time-wrapper {
  float: none;
}

.time {
  background: #00c4f3;
  display: inline-block;
  padding: 8px;
}

.desc {
  position: relative;
  margin: 1em 0 0 0;
  padding: 1em;
  background: rgb(254,254,254);
  -webkit-box-shadow: 0 0 1px rgba(0,0,0,0.20);
  -moz-box-shadow: 0 0 1px rgba(0,0,0,0.20);
  box-shadow: 0 0 1px rgba(0,0,0,0.20);
  z-index: 15;
}

.direction-l .desc,
.direction-r .desc {
  position: relative;
  margin: 1em 1em 0 1em;
  padding: 1em;
  z-index: 15;
}

@media(min-width: 768px){
  .timeline1 {
    width: 660px;
    margin: 0 auto;
    margin-top: 20px;
  }

  .timeline1 li:after {
    content: "";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
  }
  
  .timeline1 .hexa {
    left: -28px;
    right: auto;
    top: 8px;
  }

  .timeline1 .direction-l .hexa {
    left: auto;
    right: -28px;
  }

  .direction-l {
    position: relative;
    width: 310px;
    float: left;
    text-align: right;
  }

  .direction-r {
    position: relative;
    width: 310px;
    float: right;
    text-align: left;
  }

  .flag-wrapper {
    display: inline-block;
  }
  
  .flag {
    font-size: 18px;
  }

  .direction-l .flag:after {
    left: auto;
    right: -16px;
    top: 50%;
    margin-top: -8px;
    border: solid transparent;
    border-left-color: rgb(254,254,254);
    border-width: 8px;
  }

  .direction-r .flag:after {
    top: 50%;
    margin-top: -8px;
    border: solid transparent;
    border-right-color: rgb(254,254,254);
    border-width: 8px;
    left: -8px;
  }

  .time-wrapper {
    display: inline;
    vertical-align: middle;
    margin: 0;
  }

  .direction-l .time-wrapper {
    float: left;
  }

  .direction-r .time-wrapper {
    float: right;
  }

  .time {
    padding: 5px 10px;
  }

  .direction-r .desc {
    margin: 1em 0 0 0.75em;
  }
}

@media(min-width: 992px){
  .timeline1 {
    width: 800px;
    margin: 0 auto;
    margin-top: 20px;
  }

  .direction-l {
    position: relative;
    width: 380px;
    float: left;
    text-align: right;
  }

  .direction-r {
    position: relative;
    width: 380px;
    float: right;
    text-align: left;
  }
}

    </style>
    <?php include('header.html');?>
    <!-- END nav -->

    <div class="hero-wrap hero-wrap-2" style="background-image: url('images/image_bg.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
          	<p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About</span></p>
            <h1 class="mb-3 bread">About</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-faqs">
    	<div class="container">
    			<div class="col-lg-12 pl-lg-5">
    				<div class="heading-section mb-1 mt-2 mt-lg-0 ">
              <div class="text-center">
	            <h1 class="mb-3 "><strong>Short Story About Our Company</strong></h1></div>
             <h5 class="text-justify"><strong>ITLOGIN</strong> Is A Professional Website Design Company In Jammu & Kashmir. We Offer A Complete Range Of Website Design And Development, Includes Corporate Website, Flash Website Design, E-Commerce Website, Web Hosting, Internet Marketing, And Search Engine Optimization. We Have Extended Our Hands Across The Globe In Providing The World Class Solutions To The Clients In Web Designing And Development. 
            <br> <strong>ITLOGIN</strong>  is a unique block made of corporate values, enthusiastic, skilled and experienced staff, in providing best of breed solutions, services, and products to customers across the globe round the clock
             <br> Amongst Many Competitors, In The Field Of Web Designing And Development, <strong>ITLOGIN</strong> Strives Hard To Excel Well In Its Project. Most Of Our Clients Have Been With Us For Years And Keep Coming Back For More. We Are Very Proud Of Being A Customer-Oriented Design Company, And We Nurture All Our Business Relationships With Great Care And Love.
            </h4>
    				</div>
	        </div>
        </div>
    </section>

    <div class="container-fluid mt-0 mb-2">
      <div class="row">
        <div class="col-md-12 ">
          <ul class="timeline1">
            <!-- Item 1 -->
            <li>
              <div class="direction-r">
                <div class="flag-wrapper">
                  <span class="hexa"></span>
                  <span class="flag">Foundation of the Company</span>
                  <span class="time-wrapper"><span class="time">	
                    Aug, 2017</span></span>
                </div>
                <div class="desc">It Was A Pleasure Experience & Everything Went All The Way It Was Planned To On. Thanks To Our Team & You As Well.</div>
              </div>
            </li>
          
            <!-- Item 2 -->
            <li>
              <div class="direction-l">
                <div class="flag-wrapper">
                  <span class="hexa"></span>
                  <span class="flag">Served Our First Client</span>
                  <span class="time-wrapper"><span class="time">Aug, 2017</span></span>
                </div>
                <div class="desc">Yes, This Was A Major Breakthrough. We Served Our First Client On The Next Day We Launched Our Services.</div>
              </div>
            </li>
          
            <!-- Item 3 -->
            <li>
              <div class="direction-r">
                <div class="flag-wrapper">
                  <span class="hexa"></span>
                  <span class="flag">Meet Many New Clients</span>
                  <span class="time-wrapper"><span class="time">Jun, 2018</span></span>
                </div>
                <div class="desc">Yes, We Got Many Call From Reputated Companies And We Starting To Design Website, Android Applications According To Their Choice. </div>
              </div>
            </li>
            <li>
              <div class="direction-l">
                <div class="flag-wrapper">
                  <span class="hexa"></span>
                  <span class="flag">Continuing To Grow.</span>
                  <span class="time-wrapper"><span class="time">Jun, 2019</span></span>
                </div>
                <div class="desc">Slow & Steady Wins the Race. </div>
              </div>
            </li>
          </ul>
            
        </div>
      </div>
    </div>
  

    <section class="ftco-section ftco-counter img" id="section-counter">
    	<div class="container pb-md-3">
    		<div class="row justify-content-left mb-5 mt-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-3">We Always work for your profit</h2>
            <h5 class="text-center text-white"> lets us help you get your online and grow it with passion.</h5>
          </div>
          <div class="col-md-5">
              <img src="images/profit.png"  class="one-third  align-self-end order-md-first img-fluid" >

          </div>
        </div>
	        </div>
        
    </section>

   

    <section class="ftco-section testimony-section  ftco-animate">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">ITLOGIN FAMILY</h2>
            <p>Teamwork Makes the Dream Work</p>
        </div>
      </div>
    </div>
      <div class="container">
      <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="image-flip" >
            <div class="mainflip flip-0">
                <div class="frontside">
                    <div class="card">
                        <div class="card-body text-center">
                            <p><img class=" img-fluid" src="images/Mir-Zubair-CSE-A-4th-Semester.jpg" alt="card image"></p>
                            <h4 class="card-title">Mir Zubair</h4>
                            <p class="card-text">Founder & CEO ITLOGIN</p>
                        </div>
                    </div>
                </div>
            </div>
        </div></div>
        <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="image-flip" >
          <div class="mainflip flip-0">
              <div class="frontside">
                  <div class="card">
                      <div class="card-body text-center">
                          <p><img class=" img-fluid" src="images/waheed.jpg" alt="card image"></p>
                          <h4 class="card-title">Wahid Husainr</h4>
                          <p class="card-text">Web Developer</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
      <div class="image-flip" >
        <div class="mainflip flip-0">
            <div class="frontside">
                <div class="card">
                    <div class="card-body text-center">
                        <p><img class=" img-fluid" src="images/aqib.jpg" alt="card image"></p>
                        <h4 class="card-title">Aqib War</h4>
                        <p class="card-text">Web Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
<div class="col-xs-12 col-sm-6 col-md-3">
        <div class="image-flip" >
          <div class="mainflip flip-0">
              <div class="frontside">
                  <div class="card">
                      <div class="card-body text-center">
                          <p><img class=" img-fluid" src="images\aafaq.jpg" alt="card image"></p>
                          <h4 class="card-title">Aafaq Ganaie
                           </h4>
                          <p class="card-text"> Marketing Head</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    

  </div>
</div>
    </section>

<?php include('footer.html');?>