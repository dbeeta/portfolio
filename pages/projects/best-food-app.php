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
                            <li><span>Best Food App</span></li>
                        </ul>
                    </div>
                </div>
                <!-- Title -->
                <div class="mx-auto col-md-8 mt-4 text-center">
                    <h2 class="text-white fw-bold">BEST FOOD APP</h2>
                    <p class="color-secondary">Best Food App connects users with local restaurants and provides a convenient way to order and receive meals from their favorite establishments</p>
                </div>
                <!-- Image  -->
                <div class="col-md-10 mx-auto top-img my-5">
                    <img src="/public/img/projects/bg/best-food-app.jpg" class="img-fluid project-img" alt="BEST FOOD APP">
                    <img src="/public/img/projects/best-food-app.jpg" class="img-fluid project-img-r" alt="BEST FOOD APP">
                </div>
                <!-- Project Overview -->
                <div class="py-4 col-md-8 mx-auto color-secondary">
                    <h4 class="text-white mb-4">Project Overview</h4>
                    <div class="mb-5">
                        <p>
                            Best Food App is a tutorial-based project. This is a mobile app that allows users to browse menus and place orders for food delivery or pickup from local restaurants. Users can typically search for restaurants by location or menu item, and then view menus, pictures, and descriptions of the food and drinks offered. Customers should log in or signup for the app before coming to the checkout page, and also add the required details such as an address, name, and telephone number.
                        </p>
                    </div>
                    </p>
                    <h4 class="text-white my-4">Tools Used</h4>
                    <div class="d-flex flex-row flex-wrap">
                        <div class="btn-tags me-3 mb-3">Flutter</div>
                        <div class="btn-tags me-3 mb-3">API</div>
                        <div class="btn-tags me-3 mb-3">Google Maps</div>
                    </div>

                    <h4 class="text-white my-4">GitHub Repo</h4>
                    <div>
                        <a class="btn btn-tags text-white mb-3" style="background-color: #333333; cursor:pointer; color: #ebebeb !important;" href="https://github.com/MSahirullah/The-Best-Food-App" target="_blank" role="button">
                            <i class="fab fa-github me-2"></i>
                            Best Food App
                        </a>
                    </div>
                </div>
                <!-- Video -->
                <div class="my-4 col-md-10 mx-auto video">
                    <h4 class="text-white my-4">See App Preview</h4>
                    <iframe width="100%" height="500" src="https://www.youtube.com/embed/X6nMPbrx-B4">
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