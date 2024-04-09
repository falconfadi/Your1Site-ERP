<?php $__env->startSection('title', 'Form Wizard'); ?>

<?php $__env->startSection('vendor-style'); ?>
  <!-- vendor css files -->
  <link rel="stylesheet" href="<?php echo e(asset(mix('vendors/css/forms/wizard/bs-stepper.min.css'))); ?>">
  <link rel="stylesheet" href="<?php echo e(asset(mix('vendors/css/forms/select/select2.min.css'))); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-style'); ?>
  <!-- Page css files -->
  <link rel="stylesheet" href="<?php echo e(asset(mix('css/base/plugins/forms/form-validation.css'))); ?>">
  <link rel="stylesheet" href="<?php echo e(asset(mix('css/base/plugins/forms/form-wizard.css'))); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Horizontal Wizard -->
<section class="horizontal-wizard">
  <div class="bs-stepper horizontal-wizard-example">
    <div class="bs-stepper-header" role="tablist">
      <div class="step" data-target="#account-details" role="tab" id="account-details-trigger">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">1</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Account Details</span>
            <span class="bs-stepper-subtitle">Setup Account Details</span>
          </span>
        </button>
      </div>
      <div class="line">
        <i data-feather="chevron-right" class="font-medium-2"></i>
      </div>
      <div class="step" data-target="#personal-info" role="tab" id="personal-info-trigger">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">2</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Personal Info</span>
            <span class="bs-stepper-subtitle">Add Personal Info</span>
          </span>
        </button>
      </div>
      <div class="line">
        <i data-feather="chevron-right" class="font-medium-2"></i>
      </div>
      <div class="step" data-target="#address-step" role="tab" id="address-step-trigger">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">3</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Address</span>
            <span class="bs-stepper-subtitle">Add Address</span>
          </span>
        </button>
      </div>
      <div class="line">
        <i data-feather="chevron-right" class="font-medium-2"></i>
      </div>
      <div class="step" data-target="#social-links" role="tab" id="social-links-trigger">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">4</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Social Links</span>
            <span class="bs-stepper-subtitle">Add Social Links</span>
          </span>
        </button>
      </div>
    </div>
    <div class="bs-stepper-content">
      <div id="account-details" class="content" role="tabpanel" aria-labelledby="account-details-trigger">
        <div class="content-header">
          <h5 class="mb-0">Account Details</h5>
          <small class="text-muted">Enter Your Account Details.</small>
        </div>
        <form>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="username">Username</label>
              <input type="text" name="username" id="username" class="form-control" placeholder="johndoe" />
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="email">Email</label>
              <input
                type="email"
                name="email"
                id="email"
                class="form-control"
                placeholder="john.doe@email.com"
                aria-label="john.doe"
              />
            </div>
          </div>
          <div class="row">
            <div class="mb-1 form-password-toggle col-md-6">
              <label class="form-label" for="password">Password</label>
              <input
                type="password"
                name="password"
                id="password"
                class="form-control"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
              />
            </div>
            <div class="mb-1 form-password-toggle col-md-6">
              <label class="form-label" for="confirm-password">Confirm Password</label>
              <input
                type="password"
                name="confirm-password"
                id="confirm-password"
                class="form-control"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
              />
            </div>
          </div>
        </form>
        <div class="d-flex justify-content-between">
          <button class="btn btn-outline-secondary btn-prev" disabled>
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-primary btn-next">
            <span class="align-middle d-sm-inline-block d-none">Next</span>
            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
          </button>
        </div>
      </div>
      <div id="personal-info" class="content" role="tabpanel" aria-labelledby="personal-info-trigger">
        <div class="content-header">
          <h5 class="mb-0">Personal Info</h5>
          <small>Enter Your Personal Info.</small>
        </div>
        <form>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="first-name">First Name</label>
              <input type="text" name="first-name" id="first-name" class="form-control" placeholder="John" />
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="last-name">Last Name</label>
              <input type="text" name="last-name" id="last-name" class="form-control" placeholder="Doe" />
            </div>
          </div>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="country">Country</label>
              <select class="select2 w-100" name="country" id="country">
                <option label=" "></option>
                <option>UK</option>
                <option>USA</option>
                <option>Spain</option>
                <option>France</option>
                <option>Italy</option>
                <option>Australia</option>
              </select>
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="language">Language</label>
              <select class="select2 w-100" name="language" id="language" multiple>
                <option>English</option>
                <option>French</option>
                <option>Spanish</option>
              </select>
            </div>
          </div>
        </form>
        <div class="d-flex justify-content-between">
          <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-primary btn-next">
            <span class="align-middle d-sm-inline-block d-none">Next</span>
            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
          </button>
        </div>
      </div>
      <div id="address-step" class="content" role="tabpanel" aria-labelledby="address-step-trigger">
        <div class="content-header">
          <h5 class="mb-0">Address</h5>
          <small>Enter Your Address.</small>
        </div>
        <form>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="address">Address</label>
              <input
                type="text"
                id="address"
                name="address"
                class="form-control"
                placeholder="98  Borough bridge Road, Birmingham"
              />
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="landmark">Landmark</label>
              <input type="text" name="landmark" id="landmark" class="form-control" placeholder="Borough bridge" />
            </div>
          </div>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="pincode1">Pincode</label>
              <input type="text" id="pincode1" class="form-control" placeholder="658921" />
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="city1">City</label>
              <input type="text" id="city1" class="form-control" placeholder="Birmingham" />
            </div>
          </div>
        </form>
        <div class="d-flex justify-content-between">
          <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-primary btn-next">
            <span class="align-middle d-sm-inline-block d-none">Next</span>
            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
          </button>
        </div>
      </div>
      <div id="social-links" class="content" role="tabpanel" aria-labelledby="social-links-trigger">
        <div class="content-header">
          <h5 class="mb-0">Social Links</h5>
          <small>Enter Your Social Links.</small>
        </div>
        <form>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="twitter">Twitter</label>
              <input
                type="text"
                id="twitter"
                name="twitter"
                class="form-control"
                placeholder="https://twitter.com/abc"
              />
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="facebook">Facebook</label>
              <input
                type="text"
                id="facebook"
                name="facebook"
                class="form-control"
                placeholder="https://facebook.com/abc"
              />
            </div>
          </div>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="google">Google+</label>
              <input
                type="text"
                id="google"
                name="google"
                class="form-control"
                placeholder="https://plus.google.com/abc"
              />
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="linkedin">Linkedin</label>
              <input
                type="text"
                id="linkedin"
                name="linkedin"
                class="form-control"
                placeholder="https://linkedin.com/abc"
              />
            </div>
          </div>
        </form>
        <div class="d-flex justify-content-between">
          <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-success btn-submit">Submit</button>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Horizontal Wizard -->

<!-- Vertical Wizard -->
<section class="vertical-wizard">
  <div class="bs-stepper vertical vertical-wizard-example">
    <div class="bs-stepper-header">
      <div class="step" data-target="#account-details-vertical" role="tab" id="account-details-vertical-trigger">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">1</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Account Details</span>
            <span class="bs-stepper-subtitle">Setup Account Details</span>
          </span>
        </button>
      </div>
      <div class="step" data-target="#personal-info-vertical" role="tab" id="personal-info-vertical-trigger">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">2</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Personal Info</span>
            <span class="bs-stepper-subtitle">Add Personal Info</span>
          </span>
        </button>
      </div>
      <div class="step" data-target="#address-step-vertical" role="tab" id="address-step-vertical-trigger">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">3</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Address</span>
            <span class="bs-stepper-subtitle">Add Address</span>
          </span>
        </button>
      </div>
      <div class="step" data-target="#social-links-vertical" role="tab" id="social-links-vertical-trigger">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">4</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Social Links</span>
            <span class="bs-stepper-subtitle">Add Social Links</span>
          </span>
        </button>
      </div>
    </div>
    <div class="bs-stepper-content">
      <div
        id="account-details-vertical"
        class="content"
        role="tabpanel"
        aria-labelledby="account-details-vertical-trigger"
      >
        <div class="content-header">
          <h5 class="mb-0">Account Details</h5>
          <small class="text-muted">Enter Your Account Details.</small>
        </div>
        <div class="row">
          <div class="mb-1 col-md-6">
            <label class="form-label" for="vertical-username">Username</label>
            <input type="text" id="vertical-username" class="form-control" placeholder="johndoe" />
          </div>
          <div class="mb-1 col-md-6">
            <label class="form-label" for="vertical-email">Email</label>
            <input
              type="email"
              id="vertical-email"
              class="form-control"
              placeholder="john.doe@email.com"
              aria-label="john.doe"
            />
          </div>
        </div>
        <div class="row">
          <div class="mb-1 form-password-toggle col-md-6">
            <label class="form-label" for="vertical-password">Password</label>
            <input
              type="password"
              id="vertical-password"
              class="form-control"
              placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
            />
          </div>
          <div class="mb-1 form-password-toggle col-md-6">
            <label class="form-label" for="vertical-confirm-password">Confirm Password</label>
            <input
              type="password"
              id="vertical-confirm-password"
              class="form-control"
              placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
            />
          </div>
        </div>
        <div class="d-flex justify-content-between">
          <button class="btn btn-outline-secondary btn-prev" disabled>
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-primary btn-next">
            <span class="align-middle d-sm-inline-block d-none">Next</span>
            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
          </button>
        </div>
      </div>
      <div id="personal-info-vertical" class="content" role="tabpanel" aria-labelledby="personal-info-vertical-trigger">
        <div class="content-header">
          <h5 class="mb-0">Personal Info</h5>
          <small>Enter Your Personal Info.</small>
        </div>
        <div class="row">
          <div class="mb-1 col-md-6">
            <label class="form-label" for="vertical-first-name">First Name</label>
            <input type="text" id="vertical-first-name" class="form-control" placeholder="John" />
          </div>
          <div class="mb-1 col-md-6">
            <label class="form-label" for="vertical-last-name">Last Name</label>
            <input type="text" id="vertical-last-name" class="form-control" placeholder="Doe" />
          </div>
        </div>
        <div class="row">
          <div class="mb-1 col-md-6">
            <label class="form-label" for="vertical-country">Country</label>
            <select class="select2 w-100" id="vertical-country">
              <option label=" "></option>
              <option>UK</option>
              <option>USA</option>
              <option>Spain</option>
              <option>France</option>
              <option>Italy</option>
              <option>Australia</option>
            </select>
          </div>
          <div class="mb-1 col-md-6">
            <label class="form-label" for="vertical-language">Language</label>
            <select class="select2 w-100" id="vertical-language" multiple>
              <option>English</option>
              <option>French</option>
              <option>Spanish</option>
            </select>
          </div>
        </div>
        <div class="d-flex justify-content-between">
          <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-primary btn-next">
            <span class="align-middle d-sm-inline-block d-none">Next</span>
            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
          </button>
        </div>
      </div>
      <div id="address-step-vertical" class="content" role="tabpanel" aria-labelledby="address-step-vertical-trigger">
        <div class="content-header">
          <h5 class="mb-0">Address</h5>
          <small>Enter Your Address.</small>
        </div>
        <div class="row">
          <div class="mb-1 col-md-6">
            <label class="form-label" for="vertical-address">Address</label>
            <input
              type="text"
              id="vertical-address"
              class="form-control"
              placeholder="98  Borough bridge Road, Birmingham"
            />
          </div>
          <div class="mb-1 col-md-6">
            <label class="form-label" for="vertical-landmark">Landmark</label>
            <input type="text" id="vertical-landmark" class="form-control" placeholder="Borough bridge" />
          </div>
        </div>
        <div class="row">
          <div class="mb-1 col-md-6">
            <label class="form-label" for="pincode2">Pincode</label>
            <input type="text" id="pincode2" class="form-control" placeholder="658921" />
          </div>
          <div class="mb-1 col-md-6">
            <label class="form-label" for="city2">City</label>
            <input type="text" id="city2" class="form-control" placeholder="Birmingham" />
          </div>
        </div>
        <div class="d-flex justify-content-between">
          <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-primary btn-next">
            <span class="align-middle d-sm-inline-block d-none">Next</span>
            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
          </button>
        </div>
      </div>
      <div id="social-links-vertical" class="content" role="tabpanel" aria-labelledby="social-links-vertical-trigger">
        <div class="content-header">
          <h5 class="mb-0">Social Links</h5>
          <small>Enter Your Social Links.</small>
        </div>
        <div class="row">
          <div class="mb-1 col-md-6">
            <label class="form-label" for="vertical-twitter">Twitter</label>
            <input type="text" id="vertical-twitter" class="form-control" placeholder="https://twitter.com/abc" />
          </div>
          <div class="mb-1 col-md-6">
            <label class="form-label" for="vertical-facebook">Facebook</label>
            <input type="text" id="vertical-facebook" class="form-control" placeholder="https://facebook.com/abc" />
          </div>
        </div>
        <div class="row">
          <div class="mb-1 col-md-6">
            <label class="form-label" for="vertical-google">Google+</label>
            <input type="text" id="vertical-google" class="form-control" placeholder="https://plus.google.com/abc" />
          </div>
          <div class="mb-1 col-md-6">
            <label class="form-label" for="vertical-linkedin">Linkedin</label>
            <input type="text" id="vertical-linkedin" class="form-control" placeholder="https://linkedin.com/abc" />
          </div>
        </div>
        <div class="d-flex justify-content-between">
          <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-success btn-submit">Submit</button>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Vertical Wizard -->

<!-- Modern Horizontal Wizard -->
<section class="modern-horizontal-wizard">
  <div class="bs-stepper wizard-modern modern-wizard-example">
    <div class="bs-stepper-header">
      <div class="step" data-target="#account-details-modern" role="tab" id="account-details-modern-trigger">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">
            <i data-feather="file-text" class="font-medium-3"></i>
          </span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Account Details</span>
            <span class="bs-stepper-subtitle">Setup Account Details</span>
          </span>
        </button>
      </div>
      <div class="line">
        <i data-feather="chevron-right" class="font-medium-2"></i>
      </div>
      <div class="step" data-target="#personal-info-modern" role="tab" id="personal-info-modern-trigger">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">
            <i data-feather="user" class="font-medium-3"></i>
          </span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Personal Info</span>
            <span class="bs-stepper-subtitle">Add Personal Info</span>
          </span>
        </button>
      </div>
      <div class="line">
        <i data-feather="chevron-right" class="font-medium-2"></i>
      </div>
      <div class="step" data-target="#address-step-modern" role="tab" id="address-step-modern-trigger">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">
            <i data-feather="map-pin" class="font-medium-3"></i>
          </span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Address</span>
            <span class="bs-stepper-subtitle">Add Address</span>
          </span>
        </button>
      </div>
      <div class="line">
        <i data-feather="chevron-right" class="font-medium-2"></i>
      </div>
      <div class="step" data-target="#social-links-modern" role="tab" id="social-links-modern-trigger">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">
            <i data-feather="link" class="font-medium-3"></i>
          </span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Social Links</span>
            <span class="bs-stepper-subtitle">Add Social Links</span>
          </span>
        </button>
      </div>
    </div>
    <div class="bs-stepper-content">
      <div id="account-details-modern" class="content" role="tabpanel" aria-labelledby="account-details-modern-trigger">
        <div class="content-header">
          <h5 class="mb-0">Account Details</h5>
          <small class="text-muted">Enter Your Account Details.</small>
        </div>
        <div class="row">
          <div class="mb-1 col-md-6">
            <label class="form-label" for="modern-username">Username</label>
            <input type="text" id="modern-username" class="form-control" placeholder="johndoe" />
          </div>
          <div class="mb-1 col-md-6">
            <label class="form-label" for="modern-email">Email</label>
            <input
              type="email"
              id="modern-email"
              class="form-control"
              placeholder="john.doe@email.com"
              aria-label="john.doe"
            />
          </div>
        </div>
        <div class="row">
          <div class="mb-1 form-password-toggle col-md-6">
            <label class="form-label" for="modern-password">Password</label>
            <input
              type="password"
              id="modern-password"
              class="form-control"
              placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
            />
          </div>
          <div class="mb-1 form-password-toggle col-md-6">
            <label class="form-label" for="modern-confirm-password">Confirm Password</label>
            <input
              type="password"
              id="modern-confirm-password"
              class="form-control"
              placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
            />
          </div>
        </div>
        <div class="d-flex justify-content-between">
          <button class="btn btn-outline-secondary btn-prev" disabled>
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-primary btn-next">
            <span class="align-middle d-sm-inline-block d-none">Next</span>
            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
          </button>
        </div>
      </div>
      <div id="personal-info-modern" class="content" role="tabpanel" aria-labelledby="personal-info-modern-trigger">
        <div class="content-header">
          <h5 class="mb-0">Personal Info</h5>
          <small>Enter Your Personal Info.</small>
        </div>
        <div class="row">
          <div class="mb-1 col-md-6">
            <label class="form-label" for="modern-first-name">First Name</label>
            <input type="text" id="modern-first-name" class="form-control" placeholder="John" />
          </div>
          <div class="mb-1 col-md-6">
            <label class="form-label" for="modern-last-name">Last Name</label>
            <input type="text" id="modern-last-name" class="form-control" placeholder="Doe" />
          </div>
        </div>
        <div class="row">
          <div class="mb-1 col-md-6">
            <label class="form-label" for="modern-country">Country</label>
            <select class="select2 w-100" id="modern-country">
              <option label=" "></option>
              <option>UK</option>
              <option>USA</option>
              <option>Spain</option>
              <option>France</option>
              <option>Italy</option>
              <option>Australia</option>
            </select>
          </div>
          <div class="mb-1 col-md-6">
            <label class="form-label" for="modern-language">Language</label>
            <select class="select2 w-100" id="modern-language" multiple>
              <option>English</option>
              <option>French</option>
              <option>Spanish</option>
            </select>
          </div>
        </div>
        <div class="d-flex justify-content-between">
          <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-primary btn-next">
            <span class="align-middle d-sm-inline-block d-none">Next</span>
            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
          </button>
        </div>
      </div>
      <div id="address-step-modern" class="content" role="tabpanel" aria-labelledby="address-step-modern-trigger">
        <div class="content-header">
          <h5 class="mb-0">Address</h5>
          <small>Enter Your Address.</small>
        </div>
        <div class="row">
          <div class="mb-1 col-md-6">
            <label class="form-label" for="modern-address">Address</label>
            <input
              type="text"
              id="modern-address"
              class="form-control"
              placeholder="98  Borough bridge Road, Birmingham"
            />
          </div>
          <div class="mb-1 col-md-6">
            <label class="form-label" for="modern-landmark">Landmark</label>
            <input type="text" id="modern-landmark" class="form-control" placeholder="Borough bridge" />
          </div>
        </div>
        <div class="row">
          <div class="mb-1 col-md-6">
            <label class="form-label" for="pincode3">Pincode</label>
            <input type="text" id="pincode3" class="form-control" placeholder="658921" />
          </div>
          <div class="mb-1 col-md-6">
            <label class="form-label" for="city3">City</label>
            <input type="text" id="city3" class="form-control" placeholder="Birmingham" />
          </div>
        </div>
        <div class="d-flex justify-content-between">
          <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-primary btn-next">
            <span class="align-middle d-sm-inline-block d-none">Next</span>
            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
          </button>
        </div>
      </div>
      <div id="social-links-modern" class="content" role="tabpanel" aria-labelledby="social-links-modern-trigger">
        <div class="content-header">
          <h5 class="mb-0">Social Links</h5>
          <small>Enter Your Social Links.</small>
        </div>
        <div class="row">
          <div class="mb-1 col-md-6">
            <label class="form-label" for="modern-twitter">Twitter</label>
            <input type="text" id="modern-twitter" class="form-control" placeholder="https://twitter.com/abc" />
          </div>
          <div class="mb-1 col-md-6">
            <label class="form-label" for="modern-facebook">Facebook</label>
            <input type="text" id="modern-facebook" class="form-control" placeholder="https://facebook.com/abc" />
          </div>
        </div>
        <div class="row">
          <div class="mb-1 col-md-6">
            <label class="form-label" for="modern-google">Google+</label>
            <input type="text" id="modern-google" class="form-control" placeholder="https://plus.google.com/abc" />
          </div>
          <div class="mb-1 col-md-6">
            <label class="form-label" for="modern-linkedin">Linkedin</label>
            <input type="text" id="modern-linkedin" class="form-control" placeholder="https://linkedin.com/abc" />
          </div>
        </div>
        <div class="d-flex justify-content-between">
          <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-success btn-submit">Submit</button>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Modern Horizontal Wizard -->

<!-- Modern Vertical Wizard -->
<section class="modern-vertical-wizard">
  <div class="bs-stepper vertical wizard-modern modern-vertical-wizard-example">
    <div class="bs-stepper-header">
      <div
        class="step"
        data-target="#account-details-vertical-modern"
        role="tab"
        id="account-details-vertical-modern-trigger"
      >
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">
            <i data-feather="file-text" class="font-medium-3"></i>
          </span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Account Details</span>
            <span class="bs-stepper-subtitle">Setup Account Details</span>
          </span>
        </button>
      </div>
      <div
        class="step"
        data-target="#personal-info-vertical-modern"
        role="tab"
        id="personal-info-vertical-modern-trigger"
      >
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">
            <i data-feather="user" class="font-medium-3"></i>
          </span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Personal Info</span>
            <span class="bs-stepper-subtitle">Add Personal Info</span>
          </span>
        </button>
      </div>
      <div
        class="step"
        data-target="#address-step-vertical-modern"
        role="tab"
        id="address-step-vertical-modern-trigger"
      >
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">
            <i data-feather="map-pin" class="font-medium-3"></i>
          </span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Address</span>
            <span class="bs-stepper-subtitle">Add Address</span>
          </span>
        </button>
      </div>
      <div
        class="step"
        data-target="#social-links-vertical-modern"
        role="tab"
        id="social-links-vertical-modern-trigger"
      >
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">
            <i data-feather="link" class="font-medium-3"></i>
          </span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Social Links</span>
            <span class="bs-stepper-subtitle">Add Social Links</span>
          </span>
        </button>
      </div>
    </div>
    <div class="bs-stepper-content">
      <div
        id="account-details-vertical-modern"
        class="content"
        role="tabpanel"
        aria-labelledby="account-details-vertical-modern-trigger"
      >
        <div class="content-header">
          <h5 class="mb-0">Account Details</h5>
          <small class="text-muted">Enter Your Account Details.</small>
        </div>
        <div class="row">
          <div class="mb-1 col-md-6">
            <label class="form-label" for="vertical-modern-username">Username</label>
            <input type="text" id="vertical-modern-username" class="form-control" placeholder="johndoe" />
          </div>
          <div class="mb-1 col-md-6">
            <label class="form-label" for="vertical-modern-email">Email</label>
            <input
              type="email"
              id="vertical-modern-email"
              class="form-control"
              placeholder="john.doe@email.com"
              aria-label="john.doe"
            />
          </div>
        </div>
        <div class="row">
          <div class="mb-1 form-password-toggle col-md-6">
            <label class="form-label" for="vertical-modern-password">Password</label>
            <input
              type="password"
              id="vertical-modern-password"
              class="form-control"
              placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
            />
          </div>
          <div class="mb-1 form-password-toggle col-md-6">
            <label class="form-label" for="vertical-modern-confirm-password">Confirm Password</label>
            <input
              type="password"
              id="vertical-modern-confirm-password"
              class="form-control"
              placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
            />
          </div>
        </div>
        <div class="d-flex justify-content-between">
          <button class="btn btn-outline-secondary btn-prev" disabled>
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-primary btn-next">
            <span class="align-middle d-sm-inline-block d-none">Next</span>
            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
          </button>
        </div>
      </div>
      <div
        id="personal-info-vertical-modern"
        class="content"
        role="tabpanel"
        aria-labelledby="personal-info-vertical-modern-trigger"
      >
        <div class="content-header">
          <h5 class="mb-0">Personal Info</h5>
          <small>Enter Your Personal Info.</small>
        </div>
        <div class="row">
          <div class="mb-1 col-md-6">
            <label class="form-label" for="vertical-modern-first-name">First Name</label>
            <input type="text" id="vertical-modern-first-name" class="form-control" placeholder="John" />
          </div>
          <div class="mb-1 col-md-6">
            <label class="form-label" for="vertical-modern-last-name">Last Name</label>
            <input type="text" id="vertical-modern-last-name" class="form-control" placeholder="Doe" />
          </div>
        </div>
        <div class="row">
          <div class="mb-1 col-md-6">
            <label class="form-label" for="vertical-modern-country">Country</label>
            <select class="select2 w-100" id="vertical-modern-country">
              <option label=" "></option>
              <option>UK</option>
              <option>USA</option>
              <option>Spain</option>
              <option>France</option>
              <option>Italy</option>
              <option>Australia</option>
            </select>
          </div>
          <div class="mb-1 col-md-6">
            <label class="form-label" for="vertical-modern-language">Language</label>
            <select class="select2 w-100" id="vertical-modern-language" multiple>
              <option>English</option>
              <option>French</option>
              <option>Spanish</option>
            </select>
          </div>
        </div>
        <div class="d-flex justify-content-between">
          <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-primary btn-next">
            <span class="align-middle d-sm-inline-block d-none">Next</span>
            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
          </button>
        </div>
      </div>
      <div
        id="address-step-vertical-modern"
        class="content"
        role="tabpanel"
        aria-labelledby="address-step-vertical-modern-trigger"
      >
        <div class="content-header">
          <h5 class="mb-0">Address</h5>
          <small>Enter Your Address.</small>
        </div>
        <div class="row">
          <div class="mb-1 col-md-6">
            <label class="form-label" for="vertical-modern-address">Address</label>
            <input
              type="text"
              id="vertical-modern-address"
              class="form-control"
              placeholder="98  Borough bridge Road, Birmingham"
            />
          </div>
          <div class="mb-1 col-md-6">
            <label class="form-label" for="vertical-modern-landmark">Landmark</label>
            <input type="text" id="vertical-modern-landmark" class="form-control" placeholder="Borough bridge" />
          </div>
        </div>
        <div class="row">
          <div class="mb-1 col-md-6">
            <label class="form-label" for="pincode4">Pincode</label>
            <input type="text" id="pincode4" class="form-control" placeholder="658921" />
          </div>
          <div class="mb-1 col-md-6">
            <label class="form-label" for="city4">City</label>
            <input type="text" id="city4" class="form-control" placeholder="Birmingham" />
          </div>
        </div>
        <div class="d-flex justify-content-between">
          <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-primary btn-next">
            <span class="align-middle d-sm-inline-block d-none">Next</span>
            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
          </button>
        </div>
      </div>
      <div
        id="social-links-vertical-modern"
        class="content"
        role="tabpanel"
        aria-labelledby="social-links-vertical-modern-trigger"
      >
        <div class="content-header">
          <h5 class="mb-0">Social Links</h5>
          <small>Enter Your Social Links.</small>
        </div>
        <div class="row">
          <div class="mb-1 col-md-6">
            <label class="form-label" for="vertical-modern-twitter">Twitter</label>
            <input
              type="text"
              id="vertical-modern-twitter"
              class="form-control"
              placeholder="https://twitter.com/abc"
            />
          </div>
          <div class="mb-1 col-md-6">
            <label class="form-label" for="vertical-modern-facebook">Facebook</label>
            <input
              type="text"
              id="vertical-modern-facebook"
              class="form-control"
              placeholder="https://facebook.com/abc"
            />
          </div>
        </div>
        <div class="row">
          <div class="mb-1 col-md-6">
            <label class="form-label" for="vertical-modern-google">Google+</label>
            <input
              type="text"
              id="vertical-modern-google"
              class="form-control"
              placeholder="https://plus.google.com/abc"
            />
          </div>
          <div class="mb-1 col-md-6">
            <label class="form-label" for="vertical-modern-linkedin">Linkedin</label>
            <input
              type="text"
              id="vertical-modern-linkedin"
              class="form-control"
              placeholder="https://linkedin.com/abc"
            />
          </div>
        </div>
        <div class="d-flex justify-content-between">
          <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-success btn-submit">Submit</button>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Modern Vertical Wizard -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('vendor-script'); ?>
  <!-- vendor files -->
  <script src="<?php echo e(asset(mix('vendors/js/forms/wizard/bs-stepper.min.js'))); ?>"></script>
  <script src="<?php echo e(asset(mix('vendors/js/forms/select/select2.full.min.js'))); ?>"></script>
  <script src="<?php echo e(asset(mix('vendors/js/forms/validation/jquery.validate.min.js'))); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-script'); ?>
  <!-- Page js files -->
  <script src="<?php echo e(asset(mix('js/scripts/forms/form-wizard.js'))); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\96393\Desktop\y1s\erp_v1\resources\views//content/forms/form-wizard.blade.php ENDPATH**/ ?>