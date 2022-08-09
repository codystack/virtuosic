<?php
$page = "Branding";
include "./components/header.php";
include "./components/navbardark.php";
?>

    <section class="py-15 py-xl-20 bg-black inverted overflow-hidden">
        <div class="container mt-10 level-3">
            <div class="row">
                <div class="col-md-10 col-lg-8">
                    <h1 class="display-2 font-weight-bold">Branding and Advertising</h1>
                </div>
            </div>
        </div>
        <figure class="background background-overlay" style="background-image: url('assets/images/home/branding.jpg')">
        </figure>
    </section>


    <section class="mb-10 py-10" data-aos="fade-up" data-aos-delay="150">
        <div class="container">
            <div class="row g-0 bg-white">
                <div class="col-lg-6 order-lg-2 position-relative">
                    <span class="background" style="background-image: url('assets/images/services/branding.jpg')"></span>
                </div>
                <div class="col-lg-6 p-4 p-md-10 order-lg-1">
                    <h3 class="fw-bold">Branding and Advertising</h3>
                    <p class="fs-lg text-secondary">Branding is the tool with which a business connects with its customers. It reveals the mission, objectives and purpose of the brand to the people it serves.</p>
                    <p class="fs-lg text-secondary">For this service we help businesses and organizations create unique identification for their products, services or corporation.</p>
                    <a href="quote" class="btn btn-black btn-with-icon rounded-pill mt-3">Request Quote Now <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>


    <?php include "./components/cta.php";?>

<?php include "./components/footer.php";?>