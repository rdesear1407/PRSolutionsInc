<!DOCTYPE html>
<html lang="en">

<?php include('head.php') ?>

<body>
    <?php include('nav.php') ?>
    <section class="home" id="welcomeSection">
        <div class="welcomeTitle">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <div class="text-center">
                        <h3 class="welcomeTitleText" style="font-size: 32px; font-weight: lighter;">Welcome to PR Solutions Inc.</h3>
                        <h1 data-animation="fadeInUp" data-delay=".4s" class="welcomeTitleText">"Unlocking Key to Your Success"</h1>
                        <button class="button-27" role="button" href="#aboutSection">Our Services</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT SECTION -->
    <div style="height: 750px" class="container-fluid aboutSection" id="aboutSection">
        <div class="aboutContainer">
            <div class="aboutLogo">
                <img class="aboutImg" src="assets/logo/dark-mode-light-text.png" alt="PR Solutions Inc." width="1000px">
            </div>
            <div class="aboutText">
                <h2 class="text-md-start" style="font-size: 60px; font-weight: bolder; margin-bottom: 50px;">about us</h2>
                <p class="text-md" style="font-size: 18px; width: 85%; max-width:max-content; text-align:justify;">PR Solutions Inc. is a dynamic and innovative web development solutions company with a track record of providing high-quality, personalized online solutions to businesses in a variety of industries. With a passion for technology and a dedication to client success, we have evolved into a reliable partner for businesses seeking to develop a strong online presence, improve user experiences, and meet their digital goals.</p>
            </div>
        </div>
    </div>



    <center>
        <div class="companyVideo container-fluid" style="background-color: #000000;height: 750px; ">
            <iframe width="80%" height="500" src="https://www.youtube.com/embed/I-oLxDkjaaU?autoplay=1" frameborder="0" allowfullscreen></iframe>
            <!-- <video controls autoplay muted src="https://www.youtube.com/watch?v=I-oLxDkjaaU" poster="assets/logo/light-mode-dark-text.png" width="50%">
                Sorry, your browser doesn't support embedded videos, but don't worry, you can
                <a href="https://www.youtube.com/watch?v=I-oLxDkjaaU">download it</a>
                and watch it with your favorite video player!
            </video> -->
        </div>
    </center>


    <!-- SERVICES SECTION -->
    <div class="container-fluid servicesSection" id="servicesSection">
        <div class="servicesContainer">
            <div class="row">
                <div>
                    <h2 class="text-center servicesText">our services</h2>
                </div>
                <div class="col">
                    <div class="card cardService">
                        <img src="./assets/medium-shot-woman-working-laptop.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Web Application Development</h5>
                            <p class="card-text">
                                Beyond websites, we create custom web applications tailored to specific business needs. Whether it's a customer portal, booking system, or data management tool, we have the expertise to bring your vision to life.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card cardService">
                        <img src="./assets/digital-nomad-working-remotly-their-project.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Responsive Web Design</h5>
                            <p class="card-text">
                                In today's mobile-driven world, having a responsive website is essential. We design and develop websites that adapt seamlessly to different devices and screen sizes, ensuring an optimal user experience for all visitors.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- POLICY SECTION -->
    <div class="container-fluid policySection" id="policySection">
        <div class="container-fluid policyContainer">
            <div class="policyText">
                <h2 class="text-md-start" style="font-size: 60px; font-weight: bolder; margin-bottom: 10px; ">our policies</h2>
                <p class="text-md-start" style="font-size: 15px; width: 85%; max-width:max-content">
                    The company's policies prioritize employee well-being and sustainable business practices.
                </p>
                <ol class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-start bg-transparent" style="color: black">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">1. Quality</div>
                            We have a stringent quality assurance process in place to ensure that all web development projects meet the highest standards. Our team conducts rigorous testing, usability assessments, and performance checks before deployment.
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start bg-transparent" style="color: black">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">2. Client-Centric Approach</div>
                            Our client's satisfaction is our top priority. We maintain open lines of communication, actively involve clients in the development process, and tailor our solutions to their unique needs.
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start bg-transparent" style="color: black">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">3. Transparency</div>
                            We believe in transparency throughout the project lifecycle. Clients are provided with regular progress updates, detailed project timelines, and cost breakdowns.
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start bg-transparent" style="color: black">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">4. Privacy & Data Security</div>
                            We have a clear refund and cancellation policy in place, ensuring that clients are aware of the terms and conditions before commencing any project.
                        </div>
                    </li>

                </ol>
            </div>
        </div>
    </div>

    <!-- CONTACT PAGE -->
    <div class="container-fluid contactSection text-center" id="contactSection">
        <div class="foundersText">
            <h2 class="text-md-start" style="font-size: 60px; font-weight: bolder; margin-bottom: 20px; ">our founders</h2>
        </div>
        <div class="row rowFounder">
            <div class="col columnFounder">
                <img src="assets/founders/JOSE, PATRICIA.png" alt="" class="img-fluid">
            </div>
            <div class="col columnFounder">
                <img src="assets/founders/DESEAR, RAVEN DANIELLIE M.jpg" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row rowFounderName">
            <div class="col columnFounderName" style="color: black">
                <a href="" class="fw-light fs-3 text-center" style="color: black">Patricia M. Jose</a>
                <p class="fw-bolder fs-3 text-center">CEO, PRSolutions</p>
            </div>
            <div class="col columnFounderName" style="color: black">
                <a href="" class="fw-light fs-3 text-center" style="color: black">Raven M. Desear</a>
                <p class="fw-bolder fs-3 text-center">CTO, PRSolutions</p>
            </div>
        </div>
    </div>
</body>
<?php include("footer.php") ?>



</html>