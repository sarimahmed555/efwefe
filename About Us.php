<?php

include "links.php"

?>

<style>
*{
    margin: 0;
    padding: 0;
    font-family: "Open Sans",sans-serif;
    box-sizing: border-box;
}


.about-section{
    margin-top: 145px;
    background: url(https://images.pexels.com/photos/1488463/pexels-photo-1488463.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) no-repeat left;
    background-size: 55%;
    background-color: #0C356A;
    overflow: hidden;
    padding: 100px 0;
}

.inner-container{
    width: 55%;
    float: right;
    background-color: #0174BE;
    padding: 70px;
}

.inner-container h1{
    color:aliceblue;
    margin-bottom: 10px;
    font-size: 50px;
    font-weight: 600;
}
.inner-container p{
    color: aliceblue;
font-size: 25px;
}


@media screen and (max-width:1200px){
    .inner-container{
        padding:80px;
    }
}

@media screen and (max-width:1000px){
    .about-container{
        background-size: 100%;
        padding: 100px 40px;
    }
    .inner-container{
        width: 100%;
    }
}

@media screen and (max-width:600px){
    .about-section{
        padding: 0;
    }
    .inner-container{
       padding: 60px;
    }
}

</style>



</head>
<body>
<?php

include "header.php"

?>





    <div class="about-section">
        <div class="inner-container">
            <h1>About Us</h1>
            <p>Our Mission is to make a difference through our branding by staying ahead of the fashion trends, defining style and giving customers what they want.
                Our Vision is to change the way our society connects with the fashion industry by providing our customers with products that are ethically and responsibly sourced.
            </p>
            <br>
            <br>
           
        </div>
    </div>





  
    <?php

include "footer.php"

?>