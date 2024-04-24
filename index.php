<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with LeadMark landing page.">
    <meta name="author" content="Devcrud">
    <title>Carbon Footprint Calculator KJSCE</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + LeadMark main styles -->
	<link rel="stylesheet" href="assets/css/leadmark.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- page Navigation -->
    <!-- <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/imgs/kj-logo.jpg" alt="">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Carbon Footprint</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="Login.html">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.html">Signup</a>
                    </li>

                    <li class="nav-item">
                        <a href="calculate.html" class="ml-4 nav-link btn btn-primary btn-sm rounded">Calculate</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
    <?php
session_start();

// Check if the user is logged in
if(isset($_SESSION['login_status'])) {
    // User is logged in, display result and logout
    echo '
    <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/imgs/kj-logo.jpg" alt="">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Carbon Footprint</a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a href="calculate.php" class="ml-4 nav-link btn btn-primary btn-sm rounded">Calculate</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>';
} else {
    // User is not logged in, display login and signup
    echo '
    <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/imgs/kj-logo.jpg" alt="">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Carbon Footprint</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Login.html">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.html">Signup</a>
                    </li>
                    <li class="nav-item">
                        <a href="calculate.php" class="ml-4 nav-link btn btn-primary btn-sm rounded">Calculate</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>';
}
?>
    <!-- End Of Second Navigation -->

    <!-- Page Header -->
    <header class="header">
        <div class="overlay">
            <h1 class="subtitle">Calculate Your </h1>
            <h1 class="title">CARBON FOOTPRINT AT KJSCE</h1>  
            <h2 class="subtitles">Our college lives can have a big impact on the environment.</h2>
            <h2 class="subtitles">From driving to energy uses in college.</h2>
            <h2 class="subtitles">Find out how your lifestyle at college stacks up ecologically.</h2>
        </div>  
        <div class="shape">
            <svg viewBox="0 0 1500 200">
                <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z"/>
            </svg>
        </div>  
        <div class="mouse-icon"><div class="wheel"></div></div>
    </header>
    <!-- End Of Page Header -->

    <!-- Service Section -->
    <section  id="service" class="section pt-0">
        <div class="container">
            <h6 class="section-title text-center">How it works</h6>
            <h6 class="section-subtitle text-center mb-5 pb-3">Solving climate change requires reducing carbon emissions. When you offset your footprint, you neutralize your emissions by protecting forests that absorb carbon from the atmosphere.</h6>

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">01</small>
                            <h5 class="card-title mt-3"> Calculate your carbon footprint <h5>
                            <p class="mb-0">You can calculate the carbon emission by filling in details about your day to day uses on transport and electricity and maany more.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">02</small>
                            <h5 class="card-title mt-3">Offset your climate impactt<h5>
                            <p class="mb-0">Offsetting your climate impact involves investing in projects that reduce greenhouse gas emissions, such as reforestation or renewable energy initiatives.Offsetting should supplement efforts to reduce emissions at the source, not replace them entirely. By responsibly offsetting and actively reducing emissions, we contribute to a more sustainable future.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">03</small>
                            <h5 class="card-title mt-3">Help fight climate change by protecting vital forests<h5>
                            <p class="mb-0">Protect vital forests to curb carbon emissions, as they absorb and store significant amounts of CO2. Preserving these ecosystems mitigates climate change by maintaining their carbon-sequestering capacity. Forest protection is a cost-effective strategy to reduce greenhouse gas concentrations in the atmosphere. By safeguarding forests, we play a vital role in combatting climate change's adverse effects.</p>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </section>
    <!-- End OF Service Section -->

    <!-- About Section -->
    <section class="section" id="about">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 pr-md-5 mb-4 mb-md-0">
                    <h6 class="section-title mb-0">About Our Project</h6>
                    <h6 class="section-subtitle mb-4">Carbon Footprint Calculator</h6>
                    <p >Our mission is to empower our college K. J. Somaiya College of Engineering to understand, measure, and reduce their carbon footprint. With our easy-to-use carbon footprint calculator, students, faculty, and staff can assess the environmental impact of their daily activities and make informed decisions to minimize their carbon emissions.</p>
                    <img src="assets/imgs/abouts-1.jpg" alt="" class="w-100 mt-3 shadow-sm">
                </div>
                <div class="col-md-6 pl-md-5">
                    <div class="row">
                        <div class="col-6">
                            <img src="assets/imgs/abouts-2.jpg" alt="" class="w-100 shadow-sm">
                        </div>
                        <div class="col-6">
                            <img src="assets/imgs/abouts-3.jpg" alt="" class="w-100 shadow-sm">
                        </div>
                        <div class="col-12 mt-4">
                            <p>The effects of carbon footprints on the environment are profound. Excessive greenhouse gas emissions, particularly CO2, contribute significantly to global warming and climate change by trapping heat in the Earth's atmosphere. This leads to rising temperatures, melting glaciers and ice caps, more frequent and severe weather events, disrupted ecosystems, altered precipitation patterns, and sea-level rise</p>
                            <p>Moreover, carbon emissions exacerbate air pollution, leading to respiratory problems and other health issues in humans and wildlife. Ocean acidification, driven by the absorption of excess CO2, poses threats to marine life and coral reefs.</p>
                            <p>Understanding and reducing carbon footprints are essential steps towards mitigating climate change and preserving the planet for future generations. By adopting sustainable practices, transitioning to renewable energy sources, promoting energy efficiency, and supporting carbon offset initiatives, individuals, businesses, and governments can work together to minimize their carbon footprints and address the urgent challenges posed by climate change</p>
                        </div>
                    </div>
                </div>
            </div>              
        </div>
    </section>
    <!-- End OF About Section -->

    <!-- Contact Section -->
    <section id="contact" class="section has-img-bg pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 my-3">
                    <h6 class="mb-0">Project By</h6>
                    <br.></br.>
                    <p class="mb-4">Manas Mapuskar <br>Yashank Kothari<br>Bhakti Lahane</p>
                    

                    <h6 class="mb-0">Batch</h6>
                    <p class="mb-4">B-1</p>

                    <h6 class="mb-0">Emails</h6>
                    <p class="mb-0">Manas.mapuskar@somaiya.edu<br>yashank.kothari@somaiya.edu<br>Bhakti.lahane@somaiya.edu</p>
                    <p></p>
                </div>
               
        </div>
    </section>
	
	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope -->
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>

    <!-- LeadMark js -->
    <script src="assets/js/leadmark.js"></script>

</body>
</html>
