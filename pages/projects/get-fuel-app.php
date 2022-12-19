<?php require '../header.php' ?>

<body>
    <!-- NavBar -->
    <?php require '../navbar.php' ?>
    <!-- End NavBar -->
    <div class=" main outer-banner projects-page mb-5" style="margin-top: 7rem;">
        <div class="container row w-100">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <!-- Breadcrumbs -->
                <div class="pt-30 pb-20">
                    <div class="box-breadcrumbs">
                        <ul class="breadcrumb">
                            <li><a class="home" href="/">Home</a></li>
                            <li><a href="/#projects">Projects</a></li>
                            <li><span>Get Fuel App</span></li>
                        </ul>
                    </div>
                </div>
                <!-- Title -->
                <div class="mx-auto col-md-8 mt-4 text-center">
                    <h2 class="text-white fw-bold">GET FUEL APP</h2>
                    <p class="color-secondary">Due to the economic and fuel crisis happened in Sri Lanka in 2022, a conceptual app was developed to manage fuel procurement through a QR code</p>
                </div>
                <!-- Image  -->
                <div class="col-md-10 mx-auto top-img my-5">
                    <img src="/public/img/projects/bg/get-fuel-app.jpg" class="img-fluid project-img" alt="GET FUEL APP">
                    <img src="/public/img/projects/get-fuel-app.jpg" class="img-fluid d-none project-img-r" alt="GET FUEL APP">
                </div>
                <!-- Project Overview -->
                <div class="py-4 col-md-8 mx-auto color-secondary overview">
                    <h4 class="text-white mb-4">Project Overview</h4>
                    <div class="mb-5 content">
                        <p>
                            Get Fuel App is a conceptual app. Due to the economic and fuel crisis happened in Sri Lanka in 2022, a conceptual app was developed to manage fuel procurement through a QR code. Users can log in or signup for the app. Using the app users can view balance fuel details.
                        </p>
                    </div>
                    </p>
                    <h4 class="text-white my-4">Tools Used</h4>
                    <div class="d-flex flex-row flex-wrap">
                        <div class="btn-tags me-3 mb-3">Flutter</div>
                        <div class="btn-tags me-3 mb-3">Proste_bezier_curve Flutter Package</div>
                    </div>
                    <h4 class="text-white my-4">GitHub Repo</h4>
                    <div>
                        <a class="btn cs-btn text-white mb-3" href="https://github.com/MSahirullah/Get-Fuel-App" target="_blank" role="button">
                            <i class="fab fa-github me-2" style="font-size: 20px;"></i>
                            Get Fuel App
                        </a>
                    </div>
                </div>
                <!-- Video -->
                <div class="my-4 col-md-10 mx-auto video">
                    <h4 class="text-white my-4">See App Preview</h4>
                    <iframe width="100%" height="500" src="https://www.youtube.com/embed/NtGr8XRSIV4">
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