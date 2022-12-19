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
                            <li><span>Lak Market</span></li>
                        </ul>
                    </div>
                </div>
                <!-- Title -->
                <div class="mx-auto col-md-8 mt-4 text-center">
                    <h2 class="text-white fw-bold">LAK MARKET


                    </h2>
                    <p class="color-secondary">Master market to connect sellers and customers (Web-platform)</p>
                </div>
                <!-- Image  -->
                <div class="col-md-10 mx-auto top-img my-5">
                    <img src="/public/img/projects/bg/lak-market.jpg" class="img-fluid project-img" alt="LAK MARKET">
                    <img src="/public/img/projects/lak-market.jpg" class="img-fluid project-img-r" alt="LAK MARKET">
                </div>
                <!-- Project Overview -->
                <div class="py-4 col-md-8 mx-auto color-secondary">
                    <h4 class="text-white mb-4">Project Overview</h4>
                    <div class="mb-5">
                        <p>
                            Lak market is a web platform that connects sellers and customers to create a virtual market.
                            <br><br>
                            In Lak Market, Customers can view each shop's details, shop location, how customers talk about this seller’s shop, and so on. Customers have to choose the city in which he/she desired to get details of the shops. This means when customers want to buy some items, the items will be displayed depending on his/her chosen city. Customers can search to see if there is a shop in another city where they can buy an item they want. This helps the customer to order and receive good products faster.
                            <br><br>
                            In Lak Market, Sellers can list products to purchase from customers. Also, sellers can add new products, manage product details, manage stocks and categorize products. It is also a great opportunity for the seller to increase their sales.

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
                    <h4 class="text-white my-4">GitHub Repo</h4>
                    <div>
                        <a class="btn btn-tags text-white mb-3" style="background-color: #333333; cursor:pointer; color: #ebebeb !important;" href="https://github.com/MSahirullah/LakMarket" target="_blank" role="button">
                            <i class="fab fa-github me-2"></i>
                            Lak Market
                        </a>
                    </div>
                </div>
                <!-- Video -->
                <div class="my-4 col-md-10 mx-auto video">
                    <h4 class="text-white my-4">See Web Preview</h4>
                    <iframe width="100%" height="500" src="https://www.youtube.com/embed/hq0xG2d1Oxg">
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