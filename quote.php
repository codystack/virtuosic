<?php
include "./components/header.php";
include "./components/navbarlight.php";
require_once "./auth/quote.php";
?>

<section class="py-15 py-xl-20 border-top">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 mb-5">
          <h2>Let's make something big. <span class="d-block">Together.</span></h2>
        </div>
        <div class="col-lg-8">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="row g-3">
            <div class="col-md-6">
              <label for="firstName" class="form-label">First Name</label>
              <input type="text" class="form-control" required name="firstName" placeholder="First Name">
            </div>
            <div class="col-md-6">
              <label for="lastName" class="form-label">Last Name</label>
              <input type="text" class="form-control" required name="lastName" placeholder="Last Name">
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" required name="email" placeholder="Email Address">
            </div>
            <div class="col-md-6">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="tel" class="form-control" required name="phone" placeholder="Phone Number">
            </div>
            <div class="col-md-6">
              <label for="jobTitle" class="form-label">Job Title</label>
              <input type="text" class="form-control" required name="jobTitle" placeholder="Job Title">
            </div>
            <div class="col-md-6">
              <label for="company" class="form-label">Company</label>
              <input type="text" class="form-control" required name="company" placeholder="Company">
            </div>
            <div class="col-md-6">
              <label for="billingAddress" class="form-label">Billing Address</label>
              <input type="text" class="form-control" required name="billingAddress" placeholder="Billing Address">
            </div>
            <div class="col-md-6">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" required name="address" placeholder="Address">
            </div>
            <div class="col-md-6">
              <label for="city" class="form-label">City</label>
              <input type="text" class="form-control" required name="city" placeholder="City">
            </div>
            <div class="col-md-6">
              <label for="country" class="form-label">Country</label>
              <input type="text" class="form-control" required name="country" placeholder="Country">
            </div>
            <div class="col-md-6">
              <label for="stateProvinceRegion" class="form-label">State / Province / Region</label>
              <input type="text" class="form-control" required name="stateProvinceRegion" placeholder="State / Province / Region">
            </div>
            <div class="col-md-6">
              <label for="postalZipCode" class="form-label">Postal / Zip Code</label>
              <input type="text" class="form-control" required name="postalZipCode" placeholder="Postal / Zip Code">
            </div>
            <div class="col-md-6">
              <label for="role" class="form-label">What is your role?</label>
              <input type="text" class="form-control" required name="role" placeholder="What is your role?">
            </div>
            <div class="col-md-6">
              <label for="companyIndustry" class="form-label">What industry is your company in?</label>
              <input type="text" class="form-control" required name="companyIndustry" placeholder="What industry is your company in?">
            </div>
            <div class="col-md-6">
              <label for="inquiryNature" class="form-label">What is the nature of your inquiry?</label>
              <input type="text" class="form-control" required name="inquiryNature" placeholder="What is the nature of your inquiry?">
            </div>
            <div class="col-md-6">
              <label for="budget" class="form-label">What is your approximate budget?</label>
              <input type="text" class="form-control" required name="budget" placeholder="What is your approximate budget?">
            </div>
            <div class="col-md-6">
              <label for="timeFrame" class="form-label">What is the timeframe to implement?</label>
              <input type="text" class="form-control" required name="timeFrame" placeholder="What is the timeframe to implement?">
            </div>
            <div class="col-md-6">
              <label for="requestUrgency" class="form-label">What is the urgency of your request?</label>
              <input type="text" class="form-control" required name="requestUrgency" placeholder="What is the urgency of your request?">
            </div>
            <div class="col-md-12">
              <label for="referral" class="form-label">How did you hear about us?</label>
              <input type="text" class="form-control" required name="referral" placeholder="How did you hear about us?">
            </div>
            <div class="col-md-12">
              <label for="comment" class="form-label">Any comments?</label>
              <textarea class="form-control" required name="anyComment" rows="3" placeholder="Any comments?"></textarea>
            </div>
            <div class="col-md-8">
              <div class="form-check">
                <input class="form-check-input" required type="checkbox" id="gridCheck">
                <label class="form-check-label text-muted small" for="gridCheck">
                  I accept the <a href="terms" class="underline">Terms
                    & Conditions</a> and acknowledge that my information will be used in accordance with Privacy
                  Policy.
                </label>
              </div>
            </div>
            <div class="col-md-12 d-grid">
              <button type="submit" name="quote_request_btn" class="btn btn-block btn-black">Request Quote</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


<?php include "./components/footer.php";?>