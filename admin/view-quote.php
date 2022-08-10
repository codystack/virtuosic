<?php
include '../components/adminheader.php';
require_once '../auth/profile.php';
?>

    <div class="offcanvas-wrap">

        <section class="py-8 bg-light">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-8 mx-auto">
                        <div class="card overflow-hidden bg-primary mb-5">
                            <div class="card-body inverted level-3">
                                <div class="row mb-5">
                                    <div class="col-lg-10">
                                        <span class="text-white eyebrow mb-1" id="greet"></span>
                                        <h2>Hello, <?php echo $_SESSION['firstName']; ?>!</h2>
                                    </div>
                                </div>
                            </div>
                            <img class="position-absolute top-100 start-100 translate-middle"
                            src="../assets/images/svg/pattern.svg" alt="Image">
                        </div>

                        <section>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card bg-opaque-white">
                                        <div class="card-header">
                                            <div class="row g-2 g-xl-5 align-items-center">
                                                <div class="col-md-6">
                                                    <a href="quote-request" class="btn btn-with-icon btn-dark">
                                                        <i class="bi bi-arrow-left"></i> Go Back
                                                    </a>
                                                </div>
                                                <div class="col-md-6 text-md-end">
                                                    <h3 class="fs-6">Quote Request</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            $id = $_GET['id'];
                                                $select_query = "SELECT * FROM quote WHERE id ='$id'";
                                                $result = mysqli_query($conn, $select_query);
                                                if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $id = $row['id'];
                                                    $firstName = $row['firstName'];
                                                    $lastName = $row['lastName'];
                                                    $email = $row['email'];
                                                    $phone = $row['phone'];
                                                    $jobTitle = $row['jobTitle'];
                                                    $company = $row['company'];
                                                    $billingAddress = $row['billingAddress'];
                                                    $address = $row['address'];
                                                    $city = $row['city'];
                                                    $country = $row['country'];
                                                    $stateProvinceRegion = $row['stateProvinceRegion'];
                                                    $postalZipCode = $row['postalZipCode'];
                                                    $role = $row['role'];
                                                    $companyIndustry = $row['companyIndustry'];
                                                    $inquiryNature = $row['inquiryNature'];
                                                    $budget = $row['budget'];
                                                    $timeFrame = $row['timeFrame'];
                                                    $requestUrgency = $row['requestUrgency'];
                                                    $referral = $row['referral'];
                                                    $anyComment = $row['anyComment'];
                                        ?>
                                        <div class="card-body bg-white">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="firstName" class="form-label">First Name</label>
                                                    <input type="text" class="form-control" required name="firstName" disabled value="<?php echo $firstName; ?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="lastName" class="form-label">Last Name</label>
                                                    <input type="text" class="form-control" required name="lastName" disabled value="<?php echo $lastName; ?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" required name="email" disabled value="<?php echo $email; ?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="phone" class="form-label">Phone Number</label>
                                                    <input type="tel" class="form-control" required name="phone" disabled value="<?php echo $phone; ?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="jobTitle" class="form-label">Job Title</label>
                                                    <input type="text" class="form-control" required name="jobTitle" disabled value="<?php echo $jobTitle; ?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="company" class="form-label">Company</label>
                                                    <input type="text" class="form-control" required name="company" disabled value="<?php echo $company; ?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="billingAddress" class="form-label">Billing Address</label>
                                                    <input type="text" class="form-control" required name="billingAddress" disabled value="<?php echo $billingAddress; ?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="address" class="form-label">Address</label>
                                                    <input type="text" class="form-control" required name="address" disabled value="<?php echo $address; ?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="city" class="form-label">City</label>
                                                    <input type="text" class="form-control" required name="city" disabled value="<?php echo $city; ?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="country" class="form-label">Country</label>
                                                    <input type="text" class="form-control" required name="country" disabled value="<?php echo $country; ?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="stateProvinceRegion" class="form-label">State / Province / Region</label>
                                                    <input type="text" class="form-control" required name="stateProvinceRegion" disabled value="<?php echo $stateProvinceRegion; ?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="postalZipCode" class="form-label">Postal / Zip Code</label>
                                                    <input type="text" class="form-control" required name="postalZipCode" disabled value="<?php echo $postalZipCode; ?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="role" class="form-label">What is your role?</label>
                                                    <input type="text" class="form-control" required name="role" disabled value="<?php echo $role; ?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="companyIndustry" class="form-label">What industry is your company in?</label>
                                                    <input type="text" class="form-control" required name="companyIndustry" disabled value="<?php echo $companyIndustry; ?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="inquiryNature" class="form-label">What is the nature of your inquiry?</label>
                                                    <input type="text" class="form-control" required name="inquiryNature" disabled value="<?php echo $inquiryNature; ?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="budget" class="form-label">What is your approximate budget?</label>
                                                    <input type="text" class="form-control" required name="budget" disabled value="<?php echo $budget; ?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="timeFrame" class="form-label">What is the timeframe to implement?</label>
                                                    <input type="text" class="form-control" required name="timeFrame" disabled value="<?php echo $timeFrame; ?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="requestUrgency" class="form-label">What is the urgency of your request?</label>
                                                    <input type="text" class="form-control" required name="requestUrgency" disabled value="<?php echo $requestUrgency; ?>">
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label for="referral" class="form-label">How did you hear about us?</label>
                                                    <input type="text" class="form-control" required name="referral" disabled value="<?php echo $referral; ?>">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="comment" class="form-label">Any comments?</label>
                                                    <textarea class="form-control" required name="anyComment" disabled rows="3"><?php echo $anyComment; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
                                            }
                                                }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </section>

    </div>


    <script src="../assets/js/vendor.js"></script>
    <script src="../assets/js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#quoteRequest').DataTable();
        } );
    </script>

</body>

</html>