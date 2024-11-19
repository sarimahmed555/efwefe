<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=">
  <title>Responsive Contact Us Page</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
  <script src="https://kit.fontawesome.com/c32adfdcda.js" crossorigin="anonymous"></script>

  <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}


body{
  background-color: #0C356A;
}

section {
  position: relative;
  z-index: 3;
  padding-top: 50px;
  padding-bottom: 50px;
}

.container {
  max-width: 1080px;
  margin-left: auto;
  margin-bottom: 65px;
  margin-right: auto;
  padding-left: 20px;
  padding-right: 20px;
}

.section-header {
  margin-bottom: 50px;
  text-align: center;
}

.section-header h2 {
  color: #fdfdfd;
  font-weight: bold;
  font-size: 3em;
  margin-bottom: 20px;
}

.section-header p {
  color: #ffffff;
}

.row  {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}

.contact-info {
  width: 50%;
}

.contact-info-item {
  display: flex;
  margin-bottom: 30px;
}

.contact-info-icon {
  height: 70px;
  width: 70px;
  background-color: #fff;
  text-align: center;
  border-radius: 50%;
}

.contact-info-icon i {
  font-size: 30px;
  line-height: 70px;
}

.contact-info-content {
  margin-left: 20px;
}

.contact-info-content h4 {
  color: #0C356A;
  font-size: 1.4em;
  margin-bottom: 5px;
}

.contact-info-content p {
  color: #FFF;
  font-size: 1em;
}

.contact-form {
  background-color: #fff;
  padding: 40px;
  width: 45%;
  padding-bottom: 20px;
  padding-top: 20px;
}

.contact-form h2 {
  font-weight: bold;
  font-size: 2em;
  margin-bottom: 10px;
  color: #333;
}

.contact-form .input-box {
  position: relative;
  width: 100%;
  margin-top: 10px;
}

.contact-form .input-box input,
.contact-form .input-box textarea{
  width: 100%;
  padding: 5px 0;
  font-size: 16px;
  margin: 10px 0;
  border: none;
  border-bottom: 2px solid #333;
  outline: none;
  resize: none;
}

.contact-form .input-box span {
  position: absolute;
  left: 0;
  padding: 5px 0;
  font-size: 16px;
  margin: 10px 0;
  pointer-events: none;
  /* transition: 0.5s; */
  color: #666;
}

.contact-form .input-box input:focus ~ span,
.contact-form .input-box textarea:focus ~ span{
  color: #e91e63;
  font-size: 12px;
  transform: translateY(-15px);
}

.contact-form .input-box input[type="submit"]
{
  width: 100%;
  background: #0C356A;
  color: #FFF;
  border: none;
  cursor: pointer;
  padding: 10px;
  font-size: 18px;
  border: 1px solid #0C356A;
  /* transition: 0.5s; */
}

.contact-form .input-box input[type="submit"]:hover
{
  background: #FFF;
  color: #0C356A;
}

@media (max-width: 991px) {
  section {
    padding-top: 50px;
    padding-bottom: 50px;
  }
  
  .row {
    flex-direction: column;
  }
  
  .contact-info {
    margin-bottom: 40px;
    width: 100%;
  }
  
  .contact-form {
    width: 100%;
  }
}
.top marquee{
	font-size: 20px;
	margin-bottom: -25px;
margin-right: 355px;
color: aliceblue;
font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.top{
	margin-bottom: -27px;
	padding: 15px;
background-color: #0087ca;
text-align: right;
justify-content: space-between;
word-spacing: 1em;

}
.top a{
	
	color: aliceblue;
}

.top a:hover{
	color: #000000;
}
 
.navbar a:hover{
	color: #004774;
   }
.navbar{
    margin-top: 30px;
    padding-top: 15px;
    background-color: #000000;
    
   }
   .navbar a{
    font-size: 18px;
    color: #ffffff;
    font-family: 'Young Serif', serif;
   
   }
   .navbar img{
       margin-top: -95px;
       margin-bottom: -85px;
       width: 250px;
       height: 250px;
   }
  </style>
</head>
<body>
  
  <div class="top"> 
    <marquee  direction="left">Wellcome to Gracious Garmnets Pakistan Top Selling Brand. Standard Shipping Rate Rs300 All Over Pakistan.</marquee>
    
    
    <a href="">021-223-234-267</a>
    <a href=""> CustomerCare</a>
    <a href="">24/7</a>
    
    
    </div>
    
      <div class="navbar ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
    
                    <div class="navbar-header">
                        <button id="Toggle" class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                       <img src="logo2.png" alt="">
                    </div>
    
                    <div class="navbar-collapse collapse" id="mobile_menu">
                        <ul class="nav navbar-nav">
                            <li ><a href="index.html">Home</a></li>
                            <li><a href="#">Brands</a></li>
                            <li><a href="About Us.html">About Us</a></li>
                            <li><a href="contact us.html">Contact Us</a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li>
                                <form action="" class="navbar-form">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="search" name="search" id="" placeholder="Search Anything Here..." class="form-control">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
    
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login / Sign Up <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="sign in page (2).html">Login</a></li>
                                    <li><a href="sign in page (2).html">Sign Up</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



  <section>
    
    <div class="section-header">
      <div class="container">
        <h2>Contact Us</h2>
        <p>Certainly! If you need assistance or have any questions, feel free to reach out. You can contact us through the following methods</p>
      </div>
    </div>
    
    <div class="container">
      <div class="row">
        
        <div class="contact-info">
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-home"></i>
            </div>
            
            <div class="contact-info-content">
              <h4>Address</h4>
              <p>Aptech Computer Learning Institute,<br/> 11B/North Karchi. <br/>75400</p>
            </div>
          </div>
          
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-phone"></i>
            </div>
            
            <div class="contact-info-content">
              <h4>Phone</h4>
              <p>021-223-234-267</p>
            </div>
          </div>
          
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-envelope"></i>
            </div>
            
            <div class="contact-info-content">
              <h4>Email</h4>
             <p>graciousgarments@gmail.com</p>
            </div>
          </div>
        </div>
        
        <div class="contact-form">
          <form action="code.php" method="post" id="contact-form">
            <h2>Send Message</h2>
            <div class="input-box">
              <input type="text" name="fullname" placeholder="Full Name" required="">
            
            </div>
            
            <div class="input-box">
              <input type="text" name="email" placeholder="Email" required="">
        
            </div>
            
            <div class="input-box">
              <input type="text" name="Message" placeholder="Type your Message..." required="">             
            </div>
            
            <div class="input-box">
              <input type="submit" value="Send" name="submit_btn">
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>