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
                            <li><span>Smart Covid Assist</span></li>
                        </ul>
                    </div>
                </div>
                <!-- Title -->
                <div class="mx-auto col-md-8 mt-4 text-center">
                    <h2 class="text-white fw-bold">SMART COVID ASSIST</h2>
                    <p class="color-secondary">Covid-19 quarantine patients and contacts monitoring system using the mobile app in an IoT environment</p>
                </div>
                <!-- Image  -->
                <div class="col-md-10 mx-auto top-img my-5">
                    <img src="/public/img/projects/bg/smart-covid-assist.jpg" class="img-fluid project-img" alt="SMART COVID ASSIST">
                    <img src="/public/img/projects/smart-covid-assist.jpg" class="img-fluid project-img-r" alt="SMART COVID ASSIST">
                </div>
                <!-- Project Overview -->
                <div class="py-4 col-md-8 mx-auto color-secondary">
                    <h4 class="text-white mb-4">Project Overview</h4>
                    <div class="mb-5">
                        <p>
                            SmartCovidAssist is a conceptual project. It is developed for remote monitoring of COVID-19 patients and contacts who are in intermediate quarantine centers and contacts who are being quarantined at their homes. Using the system user can get prompt actions for critical patients and visualize the information and generate reports.
                        </p>
                    </div>
                    </p>
                    <h4 class="text-white my-4">Tools Used</h4>
                    <div class="d-flex flex-row flex-wrap">
                        <div class="btn-tags me-3 mb-3">Laravel</div>
                        <div class="btn-tags me-3 mb-3">Bootstrap</div>
                        <div class="btn-tags me-3 mb-3">HTML</div>
                        <div class="btn-tags me-3 mb-3">CSS</div>
                        <div class="btn-tags me-3 mb-3">PHP</div>
                        <div class="btn-tags me-3 mb-3">MySQL</div>
                        <div class="btn-tags me-3 mb-3">JavaScript</div>
                        <div class="btn-tags me-3 mb-3">jQuery</div>
                        <div class="btn-tags me-3 mb-3">Data Tables</div>
                    </div>

                </div>
                <!-- Video -->
                <div class="my-4 col-md-10 mx-auto video">
                    <h4 class="text-white my-4">See Web Preview</h4>
                    <iframe width="100%" height="500" src="https://www.youtube.com/embed/YI15CXdwO4M">
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