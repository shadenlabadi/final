<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Sector</title>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <link rel="stylesheet" href="css/style.css">
           
          
          	<link rel="stylesheet" href="css/theme.css" type="text/css" />
                
                <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
    
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">

        
        
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">

    
    
       
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-plot-listing.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <style>
          
.wrapper {
  position: fixed;
  top: 50%;
  left: 2.5%;
  transform: translate(-50%, -50%);
}

.wrapper ul {
  list-style: none;
}

.wrapper ul li {
  width: 50px;
  height: 50px;
  position: relative;
  background: #e59500;
  margin: 10px 0;
  cursor: pointer;
  border-radius: 3px;
  box-shadow: 0 0 10px rgba(0,0,0,0.3);
}

.wrapper ul li .fa {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 20px;
  color: #fff;
}

.wrapper ul li.facebook{
  background: #3b5998;
}

.wrapper ul li.twitter{
  background: #00aced;
}

.wrapper ul li.instagram{
  background: #bc2a8d;
}

.wrapper ul li.google{
  background: #dd4b39;
}

.wrapper ul li.whatsapp{
  background: #4dc247;
}

.wrapper ul li.facebook div.slider{
  background: #627aac;
}

.wrapper ul li.twitter div.slider{
  background: #7fd5f6;
}

.wrapper ul li.instagram div.slider{
  background: #dd94c6;
}

.wrapper ul li.google div.slider{
  background: #eea59c;
}

.wrapper ul li.whatsapp div.slider{
  background: #82d47e;
}

.slider {
  content: "";
  position: absolute;
  top: 0;
  left: 51px;
  width: 0px;
  height: 50px;
  background: #eebb5c;
  border-radius: 3px;
  transition: all 0.5s 0.3s ease;
}

.slider a p{
  font-family: arial;
  text-transform: uppercase;
  font-size: 16px;
  font-weight: 900;
  color: #fff;
  text-align: center;
  line-height: 50px;
  opacity: 0;
  transition: all 0.6s ease;
}

.wrapper ul li:hover .slider {
  width: 180px;
  transition: all 0.5s ease;
}

.wrapper ul li:hover .slider p {
  opacity: 1;
  transition: all 1s 0.2s ease;
}






        
        
              
.page-wrapper {
  width: 100%;
  height: auto;
}

.nav-wrapper {
  width: 100%;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
  background-color: #fff;
}

.grad-bar {
  width: 100%;
  height: 5px;
  background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
  background-size: 400% 400%;
  	-webkit-animation: gradbar 15s ease infinite;
	-moz-animation: gradbar 15s ease infinite;
	animation: gradbar 15s ease infinite;
}

/* NAVIGATION */

.navbar {
  display: grid;
  grid-template-columns: 1fr 3fr;
  align-items: center;
  height: 100px;
  overflow: hidden;
}

.navbar img {
  height: 50px;
  width: 80px;
  justify-self: start;
  margin-left: 20px;
}

.navbar ul {
  list-style: none;
  display: grid;
  grid-template-columns: repeat(6,1fr);
  justify-self: end;
  
}

.nav-item a {
  color: #0099cc;
  padding: 20px;
  font-size: 1.4rem;
  font-weight: 400;
  text-decoration: none;
  transition: color 0.3s ease-out;
}



/* SECTIONS */

.headline {
  width: 100%;
  height: 100vh;
  min-height: 350px;
  background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.7)), url('https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/jPLiQ-9/mountains-background-for-titles-intro-projects-and-etc_ew22rur3l__F0000.png');
  background-size: cover;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.features {
  width: 100%;
  height: auto;
  background-color: #f1f1f1;
  display: flex;
  padding: 50px 20px;
  justify-content: space-around;
}

.feature-container {
  flex-basis: 30%;
  margin-top: 10px;
}

.feature-container p {
  color: #000;
  text-align: center;
  line-height: 1.4;
  margin-bottom: 15px;
}

.feature-container img {
  width: 100%;
  margin-bottom: 15px;
}

/* SEARCH FUNCTION */

#search-icon {
  font-size: 0.9rem;
  margin-top: 3px;
  margin-left: 15px;
  transition: color 0.3s ease-out;
}

#search-icon:hover {
  color: #3498db;
  cursor: pointer;
}

.search {
  transform: translate(-35%);
  -webkit-transform: translate(-35%);
  transition: transform 0.7s ease-in-out;
  color: #3498db;
}

.no-search {
  transform: translate(0);
  transition: transform 0.7s ease-in-out;
}

.search-input {
  position: absolute;
  top: -4px;
  right: -125px;
  opacity: 0;
  z-index: -1;
  transition: opacity 0.6s ease;
}

.search-active {
  opacity: 1;
  z-index: 0;
}

input {
  border: 0;
  border-left: 1px solid #ccc;
  border-radius: 0; /* FOR SAFARI */
  outline: 0;
  padding: 5px;
}

/* MOBILE MENU & ANIMATION */

.menu-toggle .bar{
  width: 25px;
  height: 3px;
  background-color: #3f3f3f;
  margin: 5px auto;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.menu-toggle {
  justify-self: end;
  margin-right: 25px;
  display: none;
}

.menu-toggle:hover{
  cursor: pointer;
}

#mobile-menu.is-active .bar:nth-child(2){
  opacity: 0;
}

#mobile-menu.is-active .bar:nth-child(1){
  -webkit-transform: translateY(8px) rotate(45deg);
  -ms-transform: translateY(8px) rotate(45deg);
  -o-transform: translateY(8px) rotate(45deg);
  transform: translateY(8px) rotate(45deg);
}

#mobile-menu.is-active .bar:nth-child(3){
  -webkit-transform: translateY(-8px) rotate(-45deg);
  -ms-transform: translateY(-8px) rotate(-45deg);
  -o-transform: translateY(-8px) rotate(-45deg);
  transform: translateY(-8px) rotate(-45deg);
}

/* KEYFRAME ANIMATIONS */

@-webkit-keyframes gradbar {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@-moz-keyframes gradbar {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@keyframes gradbar {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

/* Media Queries */

  /* Mobile Devices - Phones/Tablets */

@media only screen and (max-width: 720px) { 
  .features {
    flex-direction: column;
    padding: 50px;
  }
  
  /* MOBILE HEADINGS */
  
  h1 {
    font-size: 1.9rem;
  }
  
  h2 {
    font-size: 1rem;
  }
  
  p {
    font-size: 0.8rem;
  }
  
  #power{
  position: fixed;
  width: 70px;
  margin-top: 150px;
  transition: all 0.3s linear;
  box-shadow: 2px 2px 8px 0px rgba(0,0,0,.4);
}
#power li{
  height: 60px;
  position:relative;
}
#power li a{
  color: white;
  display: block;
  height: 100%;
  width: 100%;
  line-height: 60px;
  padding-left:25%;
  border-bottom: 1px solid rgba(0,0,0,.4);
  transition: all .3s linear;
}
#power li:nth-child(1) a{
  background:   #0099cc;
}
#power li:nth-child(2) a{
    background:#ffcc00;
}
#power li:nth-child(3) a{
    background:#4267B2;
     
}
#power li:nth-child(4) a{
    background:#6699ff;
}

#power li a i{
  position:absolute;
  top: 17px;
  left: 20px;
  font-size: 27px;
}
 #power ul li a span{
  display: none;
  font-weight: bold;
  letter-spacing: 1px;
  text-transform: uppercase;
}
#power a:hover {
  z-index:1;
  width: 200px;
  border-bottom: 1px solid rgba(0,0,0,.5);
  box-shadow: 0 0 1px 1px rgba(0,0,0,.3);
}
#power ul li:hover a span{
  padding-left: 30%;
  display: block;
}

::-webkit-scrollbar {
    width: 10px;
    background-color:#6699ff;
}

::-webkit-scrollbar-thumb {
    background-color:#0099cc;
    background-image: -webkit-linear-gradient(45deg,rgba(255,215,0, .2) 25%, transparent 25%, transparent 50%, rgba(255,215,0, .2) 50%, rgba(255,215,0, .2) 75%, transparent 75%, transparent);
}

::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(255,215,0,.3);
    background-color:#6699ff;
}

  
  /* MOBILE NAVIGATION */
     
  
  .navbar ul {
    display: flex;
    flex-direction: column;
    position: fixed;
    justify-content: start;
    top: 55px;
    background-color: #fff;
    width: 100%;
    height: calc(100vh - 55px);
    transform: translate(-101%);
    text-align: center;
    overflow: hidden;
  }
  
  .navbar li {
    padding: 15px;
  }
  
  .navbar li:first-child {
    margin-top: 50px;
  }
  
  .navbar li a {
    font-size: 1rem;
  }
   
  .menu-toggle, .bar {
    display: block;
    cursor: pointer;
  }
  
  .mobile-nav {
  transform: translate(0%)!important;
}
  
  /* SECTIONS */
  
  .headline {
    height: 20vh;
  }
    
  .feature-container p {
    margin-bottom: 25px;
  }
  
  .feature-container {
    margin-top: 20px;
  }
  
  .feature-container:nth-child(2) {
    order: -1;
  }
  
  /* SEARCH DISABLED ON MOBILE */
  
  #search-icon {
    display: none;
  }
  
  .search-input {
  display: none;
 }
  
}


 
 .openChatBtn {
      background-color: #ffcc00;
      color: white;
      padding: 16px 20px;
      border: none;
      font-weight: 500;
      font-size: 18px;
      cursor: pointer;
      opacity: 0.8;
      position: fixed;
      bottom: 23px;
      right: 28px;
      width: 100px;
      text-align: center;
   }
   .openChat {
      display: none;
      position: fixed;
      bottom: 0;
      right: 15px;
      border: 3px solid #ccccff ;
      z-index: 9;
   }
   form {
      max-width: 300px;
      padding: 10px;
      background-color: white;
      text-align: right;
   }
   form textarea {
      width: 100%;
      font-size: 18px;
      padding: 15px;
      margin: 5px 0 22px 0;
      border: none;
      font-weight: 500;
      background: #ccccff;
      color: rgb(0, 0, 0);
      resize: none;
      min-height: 200px;
     text-align: right;
   }
   form textarea:focus {
       background-color: #99ccff;
      outline: none;
   }
   form .btn {
       background-color: #0066ff;
      color: white;
      padding: 16px 20px;
      font-weight: bold;
      border: none;
      cursor: pointer;
      width: 100%;
      margin-bottom: 10px;
      opacity: 0.8;
   }
   form .close {
      background-color: red;
   }
   form .btn:hover, .openChatBtn:hover {
      opacity: 1;
   }
   
   
   @media only screen and (max-width: 600px) {
  .openChatBtn {
       height: 50px;
  width: 50px;
  //background-color: #555;
  border-radius: 50%;
  font-size: 12px;
  text-align: left;
        position: fixed;

  }
}



.openChatBtn {
      background-color: #ffcc00;
      color: white;
      padding: 16px 20px;
      border: none;
      font-weight: 500;
      font-size: 18px;
      cursor: pointer;
      opacity: 0.8;
      position: fixed;
      bottom: 23px;
      right: 28px;
      width: 100px;
      text-align: center;
   }
   .openChat {
      display: none;
      position: fixed;
      bottom: 0;
      right: 15px;
      border: 3px solid #ccccff ;
      z-index: 9;
   }
   form {
      max-width: 300px;
      padding: 10px;
      background-color: white;
      text-align: right;
   }
   form textarea {
      width: 100%;
      font-size: 18px;
      padding: 15px;
      margin: 5px 0 22px 0;
      border: none;
      font-weight: 500;
      background: #ccccff;
      color: rgb(0, 0, 0);
      resize: none;
      min-height: 200px;
     text-align: right;
   }
   form textarea:focus {
       background-color: #99ccff;
      outline: none;
   }
   form .btn {
       background-color: #0066ff;
      color: white;
      padding: 16px 20px;
      font-weight: bold;
      border: none;
      cursor: pointer;
      width: 100%;
      margin-bottom: 10px;
      opacity: 0.8;
   }
   form .close {
      background-color: red;
   }
   form .btn:hover, .openChatBtn:hover {
      opacity: 1;
   }
   
   
   @media only screen and (max-width: 600px) {
  .openChatBtn {
       height: 50px;
  width: 50px;
  //background-color: #555;
  border-radius: 50%;
  font-size: 12px;
  text-align: left;
        position: fixed;

  }
}






//////////////////////////////////////////////////////////////////////////////////////////////////


    </style>
    </head>
    <body>
       
    <div class="page-wrapper">
 <div class="nav-wrapper">
  <div class="grad-bar"></div>
  <nav class="navbar">
      <img src="SECTOR1.png" width="10px">
      <div class="menu-toggle" id="mobile-menu">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </div>
      <div id="top_nav">
    <ul class="nav no-search">
                     

    

        <li class="nav-item"><a href="index.php">Home</a></li>
      
        <li class="nav-item"><a href="sector.php">Sector</a></li>
        <li class="nav-item"><a href="user.php">Customer</a>
         
      </li>
      
      <li class="nav-item"><a href="#">Logout</a></li>
      
      <i class="fas fa-search" id="search-icon"></i>
      <input class="search-input" type="text" placeholder="Search..">
    </ul>
  </div>
      
  </nav>
  </div>
           </div>
        <br>
        <br>
        <br>
        <br>
    <div class="container-fluid tm-container-content tm-mt-60">
       
        <div class="row tm-mb-90 tm-gallery">
        	<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="SECTOR1.png" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2  >أريحا</h2>
                        <a href="tab4.php">View more</a>
                    </figcaption>                    
                </figure>
               
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="SECTOR1.png" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>ضواحي القدس</h2>
                        <a href="tab3.php">View more</a>
                    </figcaption>                    
                </figure>
               
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="SECTOR1.png" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>الرام </h2>
                        <a href="tab2.php">View more</a>
                    </figcaption>                    
                </figure>
             
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="SECTOR1.png" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>رام الله </h2>
                        <a href="tab1.php">View more</a>
                    </figcaption>                    
                </figure>
             
            </div>
            
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="SECTOR1.png" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>طوباس</h2>
                        <a href="tab8.php">View more</a>
                    </figcaption>                    
                </figure>
          
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="SECTOR1.png" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>نابلس</h2>
                        <a href="tab7.php">View more</a>
                    </figcaption>                    
                </figure>
               
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="SECTOR1.png" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>الخليل</h2>
                        <a href="tab6.php">View more</a>
                    </figcaption>                    
                </figure>
                
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="SECTOR1.png" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>بيت لحم</h2>
                        <a href="tab5.php">View more</a>
                    </figcaption>                    
                </figure>
              
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="SECTOR1.png" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>جنين</h2>
                        <a href="tab12.php">View more</a>
                    </figcaption>                    
                </figure>
              
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="SECTOR1.png" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>طولكرم</h2>
                        <a href="tab11.php">View more</a>
                    </figcaption>                    
                </figure>
            
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="SECTOR1.png" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>قلقيلية</h2>
                        <a href="tab10.php">View more</a>
                    </figcaption>                    
                </figure>
        
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="SECTOR1.png" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>سلفيت </h2>
                        <a href="tab9.php">View more</a>
                    </figcaption>                    
                </figure>
                
            </div>
      
        </div> 

    </div> 

    
    
            
             
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    
    
    
    </body>
</html>
