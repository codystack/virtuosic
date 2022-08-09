<?php
$page = "Web";
include "./components/header.php";
include "./components/navbardark.php";
?>

    <section class="py-15 py-xl-20 bg-black inverted overflow-hidden">
        <div class="container mt-10 level-3">
            <div class="row">
                <div class="col-md-10 col-lg-8">
                    <h1 class="display-2 font-weight-bold">Web Design/Development</h1>
                </div>
            </div>
        </div>
        <figure class="background background-overlay" style="background-image: url('assets/images/home/web.jpg')">
        </figure>
    </section>


    <section class="mb-10 py-10" data-aos="fade-up" data-aos-delay="150">
        <div class="container">
            <div class="row g-0 bg-white">
                <div class="col-lg-6 order-lg-2 position-relative">
                    <span class="background" style="background-image: url('assets/images/services/web.jpg')"></span>
                </div>
                <div class="col-lg-6 p-4 p-md-10 order-lg-1">
                    <h3 class="fw-bold">Web Design/Development</h3>
                    <p class="fs-lg text-secondary">For this service we help our clients acquire new customers for their businesses and also convert existing prospects into new customers.</p>
                    <p class="fs-lg text-secondary">From simple websites to dynamic database-driven online applications, our professional developers have the experience and expertise to complete your project on time and on budget.</p>
                    <a href="quote" class="btn btn-black btn-with-icon rounded-pill mt-3">Request Quote Now <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>


    <?php include "./components/cta.php";?>

<?php include "./components/footer.php";?>