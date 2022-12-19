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
                            <li><span>Fitness First Gym</span></li>
                        </ul>
                    </div>
                </div>
                <!-- Title -->
                <div class="mx-auto col-md-8 mt-4 text-center">
                    <h2 class="text-white fw-bold">FITNESS FIRST GYM</h2>
                    <p class="color-secondary">Fitness First Gym Web and App helps gym managers to organize and track their income, and manage members and payments</p>
                </div>
                <!-- Image  -->
                <div class="col-md-10 mx-auto top-img my-5">
                    <img src="/public/img/projects/bg/fitness-first-gym.jpg" class="img-fluid project-img" alt="FITNESS FIRST GYM">
                    <img src="/public/img/projects/fitness-first-gym.jpg" class="img-fluid project-img-r" alt="FITNESS FIRST GYM">
                </div>
                <!-- Project Overview -->
                <div class="py-4 col-md-8 mx-auto color-secondary">
                    <h4 class="text-white mb-4">Project Overview</h4>
                    <div class="mb-5">
                        <p>
                            The Fitness First Gym system is a software tool designed to help gym owner and managers streamline their daily tasks and manage their business more efficiently. It can help with important tasks from managing member accounts to tracking profit and managing finances.
                            <br><br>
                            Some key features of the Fitness First Gym system include:
                        </p>
                        <ul class="list-unstyled ps-3 mb-4">
                            <li class="mb-2"><i class="fas fa-code me-2"></i>
                                <b>Member management:</b> Allows gym staff to easily view and update member information, including contact details, membership status, and payment information.
                            </li>
                            <li class="mb-2"><i class="fas fa-code me-2"></i>
                                <b>Financial management:</b> Allows gym staff to track income and expenses, create invoices and receipts, and manage payroll.
                            </li>
                            <li class="mb-3"><i class="fas fa-code me-2"></i>
                                <b>Communication tools:</b> Provides tools for staff to communicate with members using email, to keep them informed about pending payments.
                            </li>
                        </ul>
                        <p>
                            Overall, the Fitness First Gym system can help gym owner and managers save time and effort by automating many of the day-to-day tasks involved in running a gym.
                        </p>
                    </div>
                    </p>
                    <h4 class="text-white my-4">Tools Used (For Web)</h4>
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
                    <h4 class="text-white my-4">Tools Used (For App)</h4>
                    <div class="d-flex flex-row flex-wrap">
                        <div class="btn-tags me-3 mb-3">Flutter</div>
                        <div class="btn-tags me-3 mb-3">Firebase</div>
                    </div>
                </div>
                <!-- Video -->
                <div class="my-4 col-md-10 mx-auto video">
                    <h4 class="text-white my-4">See Web Preview</h4>
                    <iframe width="100%" height="500" src="https://www.youtube.com/embed/xeFT1J60hSU">
                    </iframe>
                </div>
                <div class="my-4 mt-5 col-md-10 mx-auto video">
                    <h4 class="text-white my-4">See App Preview</h4>
                    <iframe width="100%" height="500" src="https://www.youtube.com/embed/Ob4ZAkV33Gw">
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