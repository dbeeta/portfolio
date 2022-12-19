<?php require '../header.php' ?>

<body>
    <!-- NavBar -->
    <?php require '../navbar.php' ?>
    <!-- End NavBar -->
    <div class=" main outer-banner projects-page mb-5" style="margin-top: 7rem;">
        <div class="row w-100 ">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <!-- Breadcrumbs -->
                <div class="pt-30 pb-20">
                    <div class="box-breadcrumbs">
                        <ul class="breadcrumb">
                            <li><a class="home" href="/">Home</a></li>
                            <li><a href="/#projects">Projects</a></li>
                            <li><span>BMI Calculator App</span></li>
                        </ul>
                    </div>
                </div>
                <!-- Title -->
                <div class="mx-auto col-md-8 mt-4 text-center">
                    <h2 class="text-white fw-bold">BMI CALCULATOR APP</h2>
                    <p class="color-secondary">The BMI Calculator App is a simple tool that allows users to calculate their body mass index (BMI) and save it in Firebase</p>
                </div>
                <!-- Image  -->
                <div class="col-md-10 mx-auto top-img my-5">
                    <img src="/public/img/projects/bg/bmi-app.jpg" class="img-fluid project-img" alt="BMI CALCULATOR APP">
                    <img src="/public/img/projects/bmi-app.jpg" class="img-fluid project-img-r" alt="BMI CALCULATOR APP">
                </div>
                <!-- Project Overview -->
                <div class="py-4 col-md-8 mx-auto color-secondary">
                    <h4 class="text-white mb-4">Project Overview</h4>
                    <div class="mb-5">
                        <p>
                            The BMI Calculator App is a simple tool that allows users to calculate their body mass index (BMI). With this app, users can quickly and easily determine if they are within a healthy weight range based on their height and weight. The app provides an interpretation of the result, indicating whether the user is underweight, normal, overweight, or obese. This app is user-friendly and easy to use, making it a valuable tool for anyone looking to monitor their weight and ensure they are maintaining a healthy BMI.
                            <br><br>
                            The app is connected with Firebase and would allow users to store and access their BMI calculations and related information on a secure, cloud-based platform. This would enable users to access their BMI data from any device with an internet connection, making it easy to track their BMI over time.

                        </p>
                    </div>
                    </p>
                    <h4 class="text-white my-4">Tools Used</h4>
                    <div class="d-flex flex-row flex-wrap">
                        <div class="btn-tags me-3 mb-3">Flutter</div>
                        <div class="btn-tags me-3 mb-3">Firebse</div>
                    </div>
                    <h4 class="text-white my-4">GitHub Repo</h4>
                    <div>
                        <a class="btn btn-tags text-white mb-3" style="background-color: #333333; cursor:pointer; color: #ebebeb !important;" href="https://github.com/MSahirullah/BMI_Calculator_App" target="_blank" role="button">
                            <i class="fab fa-github me-2"></i>
                            BMI Calculator App
                        </a>
                    </div>
                </div>
                <!-- Video -->
                <div class="my-4 col-md-10 mx-auto video">
                    <h4 class="text-white my-4">See App Preview</h4>
                    <iframe width="100%" height="500" src="https://www.youtube.com/embed/oq2nUUjfteQ">
                    </iframe>
                </div>
            </div>
            <div class="col-md-1">
            </div>
        </div>

    </div>
    <!-- Footer -->
    <?php require '../footer2.php'; ?>
    <!-- End Footer -->

    <script>
        $(document).ready(function() {
            $("#projectsNav").addClass('active');
        });
    </script>
</body>