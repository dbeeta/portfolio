<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M Sahirullah | Protfolio</title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" href="style.css">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Scripts -->


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/TypewriterJS/2.19.0/core.min.js" integrity="sha512-t4NGjfaRaGCjmiTGBsiG3w8FCp8ZY7dPlwZAXfeoGPARUT/rt3OP0NpQkblSgZy/2R8vPTXiEcq/zcWIJ8NusQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>


</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container py-2 ">
            <a class="navbar-brand  fw-bold " href="/">
                #MSahirullah
            </a>

            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse " id="navbarButtonsExample">
                <ul class="navbar-nav me-auto mx-auto mb-2 mb-lg-0">
                    <li class="nav-item px-2">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="#">About Me</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="#">Projects</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="#">Contact Me</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center social-icons">
                    <a class="nav-link icon-btn" target="_blank" href="https://www.linkedin.com/in/mohomed-sahirullah-3184b8141/">
                        <i class="fa-brands fa-linkedin icon"></i>
                    </a>
                    <a class="nav-link icon-btn" target="_blank" href="https://github.com/MSahirullah">
                        <i class="fa-brands fa-github icon"></i>
                    </a>
                    <a class="nav-link icon-btn me-0" target="_blank" href="https://twitter.com/M_Sahirullah">
                        <i class="fa-brands fa-twitter icon"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Home -->
    <div class="main outer-banner " style="margin-top: 4rem;">
        <div class="container pt-5">
            <div class="row justify-content-around mx-5 animate__animated animate__fadeIn animate__slow banner">

                <div class="col-md-7 pt-2r ">
                    <span class="fw-bold color-gray-600">Hello Everyone!</span>
                    <h1 class="mt-20 mb-20 text-white typewrite-div">I’m
                        <span class="typewrite color-linear" id="typewrite">
                        </span>
                        <span class="animate__animated animate__flash animate__infinite infinite" style="margin-left: -3.8rem !important; margin-top:-1rem;">
                            |
                        </span>
                    </h1>
                    <div class="row">
                        <div class="col-lg-10">
                            <p class="color-gray-700 lh-base ">
                                I am <strong>Mohomed Sahirullah</strong>. I am currently studying for a degree in Bachelor of Information & Communication Technology at the University of Colombo. I am a skilled and experienced developer with a passion for creating intuitive and engaging digital experiences. With a diverse skill set in programming languages and frameworks like <strong>Flutter</strong> and <strong>Laravel</strong>, I have the technical expertise to bring your vision to life.
                                <span class="d-inline-block mt-3">
                                    Whether you are in need of a new website, a mobile app, or an upgrade to an existing platform, I am confident that I can deliver high-quality results that exceed your expectations.
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="fs-5 fw-bold color-gray-700 mb-3">Here Is My Resume!</div>
                        <a href="/public/resume.pdf" target="_blank" download="M.T. Sahirullah - Resume.pdf" type="button" class="btn btn-primary button download-btn cs-btn"><i class=" fa-sharp fa-solid fa-download me-2"></i> Download</a>

                    </div>
                </div>
                <div class="col-md-5 mx-auto my-auto">
                    <div class="profile-img animate__animated animate__pulse animate__slow">
                        <div class=""><img class="img-fluid rounded-4 shadow-4-strong " src="/public/msahirullah.jpg" alt="MSahirullah"></div>
                        <div class="img-bg-box ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg class="wave-svg" id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 170" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                    <stop stop-color="rgba(15, 23, 42, 1)" offset="0%"></stop>
                    <stop stop-color="rgba(15, 23, 42, 1)" offset="100%"></stop>
                </linearGradient>
            </defs>
            <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,34L48,45.3C96,57,192,79,288,96.3C384,113,480,125,576,113.3C672,102,768,68,864,51C960,34,1056,34,1152,51C1248,68,1344,102,1440,104.8C1536,108,1632,79,1728,73.7C1824,68,1920,85,2016,79.3C2112,74,2208,45,2304,31.2C2400,17,2496,17,2592,36.8C2688,57,2784,96,2880,96.3C2976,96,3072,57,3168,42.5C3264,28,3360,40,3456,59.5C3552,79,3648,108,3744,104.8C3840,102,3936,68,4032,70.8C4128,74,4224,113,4320,121.8C4416,130,4512,108,4608,104.8C4704,102,4800,119,4896,130.3C4992,142,5088,147,5184,141.7C5280,136,5376,119,5472,104.8C5568,91,5664,79,5760,68C5856,57,5952,45,6048,39.7C6144,34,6240,34,6336,42.5C6432,51,6528,68,6624,85C6720,102,6816,119,6864,127.5L6912,136L6912,170L6864,170C6816,170,6720,170,6624,170C6528,170,6432,170,6336,170C6240,170,6144,170,6048,170C5952,170,5856,170,5760,170C5664,170,5568,170,5472,170C5376,170,5280,170,5184,170C5088,170,4992,170,4896,170C4800,170,4704,170,4608,170C4512,170,4416,170,4320,170C4224,170,4128,170,4032,170C3936,170,3840,170,3744,170C3648,170,3552,170,3456,170C3360,170,3264,170,3168,170C3072,170,2976,170,2880,170C2784,170,2688,170,2592,170C2496,170,2400,170,2304,170C2208,170,2112,170,2016,170C1920,170,1824,170,1728,170C1632,170,1536,170,1440,170C1344,170,1248,170,1152,170C1056,170,960,170,864,170C768,170,672,170,576,170C480,170,384,170,288,170C192,170,96,170,48,170L0,170Z"></path>
        </svg>
    </div>

    <div class="container">
        <div class="">
            <h1 class="heading color-linear">about me</h1>

            <div class="row mt-5 color-gray-700 lh-base justify-content-center">
                <div class="col-md-10 text-center">
                    <p class="text-justify">
                        I am a driven individual with the ability to adapt to any situation and an excellent team worker. I am skilled and experienced in IT related fields.</p>
                    <div class="mt-3 d-flex flex-wrap justify-content-center skill-btn">
                        <div class="btn btn-outline-success  btn-rounded shadow-3-strong shine disable m-2">Web Development</div>

                        <div class="btn btn-outline-danger btn-rounded shadow-3-strong disable m-2 shine">App Development</div>
                        <div class="btn btn-outline-warning btn-rounded shadow-3-strong disable m-2 shine">UI/UX Design</div>
                        <div class="btn btn-outline-info btn-rounded shadow-3-strong disable m-2 shine">Multimedia Content Production</div>
                    </div>
                    <p class=" mt-3">
                        I enjoy tackling new challenges and solving complex problems through code. I am always looking to learn and improve my skills in order to deliver high-quality software solutions.
                    </p>

                    <a target="_blank" href="https://www.linkedin.com/in/mohomed-sahirullah-3184b8141/" type="button" class="btn btn-primary button download-btn cs-btn mt-2 mb-3"><i class="fa-solid fa-certificate me-2"></i>
                        Certifications</a>
                </div>

            </div>
            <div class="row mt-5 color-gray-700 lh-base px-5 justify-content-between">
                <div class="col-md-6 ">
                    <div class="card" style="width: 100%; height:575px;">
                        <div class="card-body">
                            <h5 class="card-title mb-4">
                                <div class="head-sidebar">
                                    <h5 class="line-bottom color-gray-700" style="--lwidth:130px">Own Experiences</h5>
                                </div>
                            </h5>
                            <div class="mt-4">
                                <ol class="list-group list-group-light list-group-numbered ">
                                    <li class="list-group-item d-flex justify-content-between align-items-start bg-1  color-gray-700">
                                        <div class="ms-2 me-auto color-gray-700">
                                            <div class="fw-bold pe-3 mb-2 text-white">1 Year of experience in Flutter App Development</div>
                                            <div class="small-text">Good knowledge of UI development and Firebase functions in Flutter.</div>
                                            <div class="text-end exp-icon">
                                                <img src="/public/icons/flutter.png" class="me-2" alt="Flutter">
                                                <img src="/public/icons/firebase.png" class="me-2" alt="Firebase">
                                                <img src="/public/icons/maps.png" alt="Google Maps">
                                            </div>
                                        </div>
                                        <span class="badge badge-primary rounded-pill" style="padding: 5px 15px;">1 Year</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start bg-1  color-gray-700">
                                        <div class="ms-2 me-auto color-gray-700">
                                            <div class="fw-bold pe-3 mb-2 text-white">2 years of experience in Back-End Web Development using PHP and Laravel Framework</div>
                                            <div class="small-text">
                                                Back-End development with MySQL databases <br>
                                                Knowledge about API handling error handling
                                            </div>
                                            <div class="text-end exp-icon">
                                                <img src="/public/icons/Laravel.png" alt="Laravel">
                                            </div>
                                        </div>
                                        <span class="badge badge-primary rounded-pill" style="padding: 5px 15px;">2 Years</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start bg-1  color-gray-700">
                                        <div class="ms-2 me-auto color-gray-700">
                                            <div class="fw-bold pe-3 mb-2 text-white">2 years of experience in Front-End Web Development</div>
                                            <div class="small-text">
                                                Familiar with HTML 5, CSS, JavaScript and jQuery plugins <br>
                                                Good working knowledge of Bootstrap 4.0 - 5.2
                                            </div>
                                            <div style="margin-right: -5px;" class="text-end exp-icon">
                                                <img src="/public/icons/boostrap.png" alt="Bootstrap ">
                                            </div>
                                        </div>
                                        <span class="badge badge-primary rounded-pill" style="padding: 5px 15px;">2 Years</span>
                                    </li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card" style="width: 100%; height:575px;">
                        <div class="card-body">
                            <h5 class="card-title mb-4">
                                <div class="head-sidebar">
                                    <h5 class="line-bottom color-gray-700" style="--lwidth:30px">Skills</h5>
                                </div>
                            </h5>

                            <div style="margin-top:2.5rem; margin-bottom:2rem">
                                <div class="progress rounded-4 mb-4" style="height: 30px;">
                                    <div class="progress-bar d-inline-flex flex-row flex-wrap px-4 justify-content-between" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        <div class="my-auto text-white">App Development</div>
                                        <div class="my-auto">90%</div>
                                    </div>
                                </div>
                                <div class="progress rounded-4 mb-4" style="height: 30px;">
                                    <div class="progress-bar d-inline-flex flex-row flex-wrap px-4 justify-content-between" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                        <div class="my-auto text-white"> Web Development
                                        </div>
                                        <div class="my-auto">95%</div>
                                    </div>
                                </div>
                                <div class="progress rounded-4 mb-4" style="height: 30px;">
                                    <div class="progress-bar d-inline-flex flex-row flex-wrap px-4 justify-content-between" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                        <div class="my-auto text-white"> UI / UX Designing</div>
                                        <div class="my-auto">95%</div>
                                    </div>
                                </div>
                                <div class="progress rounded-4 mb-4" style="height: 30px;">
                                    <div class="progress-bar d-inline-flex flex-row flex-wrap px-4 justify-content-between" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <div class="my-auto text-white">Project Management</div>
                                        <div class="my-auto">80%</div>
                                    </div>
                                </div>
                                <div class="progress rounded-4 mb-4" style="height: 30px;">
                                    <div class="progress-bar d-inline-flex flex-row flex-wrap px-4 justify-content-between" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <div class="my-auto text-white">Graphic Designing</div>
                                        <div class="my-auto">85%</div>
                                    </div>
                                </div>
                                <div class="progress rounded-4 mb-4" style="height: 30px;">
                                    <div class="progress-bar d-inline-flex flex-row flex-wrap px-4 justify-content-between" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                        <div class="my-auto text-white">Video Editing</div>
                                        <div class="my-auto">70%</div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div style="margin-top:2rem;" class="text-center">
                                <div class="btn-tags me-3 mb-3">Communication</div>
                                <div class="btn-tags me-3 mb-3">Teamwork</div>
                                <div class="btn-tags">Problem-solving</div>
                                <div class="btn-tags me-3 mb-3">Creativity</div>
                                <div class="btn-tags me-3 mb-3">Time Management</div>
                                <div class="btn-tags mb-3">Decision Making</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h1 class="mt-5">
                ssss
            </h1>

        </div>
    </div>


    <!-- Scripts -->
    <script>
        $(document).ready(function() {

        });
        var app = document.getElementById('typewrite');

        var typewriter = new Typewriter(app, {
            loop: true
        });

        typewriter.typeString('M. Sahirullah')
            .pauseFor(2500)
            .deleteAll()
            .typeString('<strong>App Developer</strong>')
            .pauseFor(2500)
            .deleteAll()
            .typeString('<strong>Web Developer</strong>')
            .pauseFor(2500)
            .start();
    </script>

</body>

</html>