<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dolon Roy-My Portfolio Webpage</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
</head>
<body>

<div id="menu-bars" class="fas fa-bars"></div>
<!-- header section starts  -->
<header>

    <a href="#" class="logo"> <span><b>Dolon</b></span></a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#skill">skill</a>
        <a href="#resume">resume</a>
        <a href="#project">project</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="follow">
        <a href="https://github.com/dolon-roy" target="_blank" class="fab fa-github"></a>
        <a href="https://www.instagram.com/roydolon1/" target="_blank" class="fab fa-instagram"></a>
        <a href="https://www.facebook.com/dolon.roy.750983/" target="_blank" class="fab fa-facebook-f"></a>
    </div>

</header>
<!-- header section ends -->

<!-- home section starts  -->
<section class="home" id="home">

    <div class="content">
        <span class="hi"><strong> Hello... </strong></span>
        <h3> i am <span> Dolon Roy </span> </h3>
        <p class="info"> i am a student. Want to know more.. </p>
        <a href="#about" class="btn">About me</a>
    </div>

</section>
<!-- home section ends -->

<!-- about section starts  -->
<section class="about" id="about">

    <h1 class="heading"> about <span> me </span> </h1>
    <div class="row-1">

        <div class="image">
            <img src="image.jpg" alt="">
        </div>
    
        <div class="content">
            <h3> my name is Dolon Roy & i am a student, currently pursuing BCA degree. </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi error molestias impedit officia! Exercitationem dignissimos esse eos quas nisi impedit delectus, voluptate ullam iste nostrum at. Dolor culpa eaque omnis.</p>
            <div class="box-container">
                    <p> <span> age : </span> 20 </p>
                    <p> <span> gender : </span> female </p>
                    <p> <span> language : </span> english, hindi, bengali </p>
                    <p> <span> work : </span> Student </p>
                    <p> <span> phone : </span> +917908612662 </p>
                    <p id="mail"> <span> email : </span> rdolon321@gmail.com </p>
                    <p> <span> country : </span> india </p>
            </div>
            <a href="24oct2021DolonRoy.pdf" target="_blank" id="resume" class="btn">resume</a>
        </div>
    </div>
</section>
<!-- about section ends -->

<!-- skill section start -->
<section class="skill" id="skill">
    <h1 class="heading"> <span> my </span> skills </h1>
    <div class="row-2">
    
        <div class="percentage">
            <div class="progress">
                <h3> HTML <span> 95% </span> </h3>
                <div class="bar"> <span></span> </div>
            </div>
            <div class="progress">
                <h3> CSS <span> 80% </span> </h3>
                <div class="bar"> <span></span> </div>
            </div>
            <div class="progress">
                <h3> JAVA <span> 70% </span> </h3>
                <div class="bar"> <span></span> </div>
            </div>
            <div class="progress">
                <h3> PYTHON <span> 60% </span> </h3>
                <div class="bar"> <span></span> </div>
            </div>
            <div class="progress">
                <h3> DATABASE <span> 55% </span> </h3>
                <div class="bar"> <span></span> </div>
            </div>
        </div>
    </div>
</section>
<!-- skill section ends -->

<!-- project section starts  -->
<section class="project" id="project">
    <h1 class="heading"> <span> my </span> projects </h1>
    <h2>projects are yet to come..</h2>

</section>
<!-- project section ends  -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> contact <span> me </span> </h1>

    <div class="icons-container">
        <div class="icons">
            <a href="mailto:rdolon321@gmail.com"><i class="fas fa-envelope"></i></a>
            <h3>my email</h3>
            <p id="mail">rdolon321@gmail.com</p>
        </div>

        <div class="icons">
            <a href="tel:7908612662"><i class="fas fa-phone"></i></a>
            <h3>my number</h3>
            <p>+917908612662</p>
        </div>

        <div class="icons">
            <i class="fas fa-map-marker-alt"></i>
            <h3>my address</h3>
            <p>Memari, Purba Bardhaman, West Bengal, india - 713151</p>
        </div>
    </div>
    <div class="row">

        <form action="">

            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="number" placeholder="number" class="box">

            <textarea name="" placeholder="message" id="" cols="30" rows="10"></textarea>

            <input type="submit" class="btn" value="send message">

        </form>
    </div>
</section>
<!-- Contact section ends -->

<!-- footer section  -->
<footer class="footer"> &copy;<span> Dolon Roy </span> | all rights reserved! </footer>

<script src="script.js"></script>
</body>
</html>