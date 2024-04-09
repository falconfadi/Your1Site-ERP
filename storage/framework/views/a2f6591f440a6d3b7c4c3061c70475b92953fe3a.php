<?php $__env->startSection('title', 'Dropdowns'); ?>

<?php $__env->startSection('content'); ?>
<!-- Basic Dropdowns Start -->
<section id="basic-dropdown">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Basic</h4>
        </div>
        <div class="card-body">
          <div class="demo-inline-spacing">
            <div class="btn-group">
              <button
                class="btn btn-primary dropdown-toggle"
                type="button"
                id="dropdownMenuButton"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Primary
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
              </div>
            </div>
            <div class="btn-group">
              <button
                class="btn btn-secondary dropdown-toggle"
                type="button"
                id="dropdownMenuButton6"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Secondary
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
              </div>
            </div>
            <div class="btn-group">
              <button
                class="btn btn-success dropdown-toggle"
                type="button"
                id="dropdownMenuButton2"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Success
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
              </div>
            </div>
            <div class="btn-group">
              <button
                class="btn btn-danger dropdown-toggle"
                type="button"
                id="dropdownMenuButton4"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Danger
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
              </div>
            </div>
            <div class="btn-group">
              <button
                class="btn btn-warning dropdown-toggle"
                type="button"
                id="dropdownMenuButton5"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Warning
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
              </div>
            </div>
            <div class="btn-group">
              <button
                class="btn btn-info dropdown-toggle"
                type="button"
                id="dropdownMenuButton3"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Info
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
              </div>
            </div>
            <div class="btn-group">
              <button
                class="btn btn-dark dropdown-toggle"
                type="button"
                id="dropdownMenuButton7"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Dark
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Dropdown End -->

<!-- Split Button Dropdown Starts -->
<section id="dropdown-with-split-btn">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Split Dropdowns</h4>
        </div>
        <div class="card-body">
          <p class="card-text mb-0">
            To create a split button add class <code>.dropdown-toggle-split</code> with your dropdown toggle class And
            to add divider between dropdown item use class <code>.dropdown-divider</code>
          </p>
          <div class="demo-inline-spacing">
            <div class="btn-group">
              <button type="button" class="btn btn-primary">Primary</button>
              <button
                type="button"
                class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <span class="visually-hidden">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-secondary">Secondary</button>
              <button
                type="button"
                class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <span class="visually-hidden">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-success">Success</button>
              <button
                type="button"
                class="btn btn-success dropdown-toggle dropdown-toggle-split"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <span class="visually-hidden">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <h6 class="dropdown-header">Header</h6>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-danger">Danger</button>
              <button
                type="button"
                class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <span class="visually-hidden">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-warning">Warning</button>
              <button
                type="button"
                class="btn btn-warning dropdown-toggle dropdown-toggle-split"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <span class="visually-hidden">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-info">Info</button>
              <button
                type="button"
                class="btn btn-info dropdown-toggle dropdown-toggle-split"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <span class="visually-hidden">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item disabled" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-dark">Dark</button>
              <button
                type="button"
                class="btn btn-dark dropdown-toggle dropdown-toggle-split"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <span class="visually-hidden">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Split Button Dropdown Ends -->

<!-- Outline Dropdown Starts -->
<section id="dropdown-with-outline-btn">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Outline</h4>
        </div>
        <div class="card-body">
          <p class="card-text mb-0">
            To create a dropdown with split button use <code>.btn-outline-</code> with your dropdown toggle
          </p>
          <div class="demo-inline-spacing">
            <div class="btn-group">
              <button
                type="button"
                class="btn btn-outline-primary dropdown-toggle"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Primary
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-outline-secondary">Secondary</button>
              <button
                type="button"
                class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <span class="visually-hidden">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>
            <div class="btn-group">
              <button
                type="button"
                class="btn btn-outline-success dropdown-toggle"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Success
              </button>
              <div class="dropdown-menu">
                <h6 class="dropdown-header">Header</h6>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>
            <div class="btn-group">
              <button class="btn btn-outline-danger">Danger</button>
              <button
                type="button"
                class="btn btn-outline-danger dropdown-toggle dropdown-toggle-split"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <span class="visually-hidden">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-outline-warning">Warning</button>
              <button
                type="button"
                class="btn btn-outline-warning dropdown-toggle dropdown-toggle-split"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <span class="visually-hidden">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>
            <div class="btn-group">
              <button
                type="button"
                class="btn btn-outline-info dropdown-toggle"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Info
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item disabled" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Outline Dropdown Ends -->

<!-- Flat Dropdown Start -->
<section id="flat-dropdown">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Flat</h4>
        </div>
        <div class="card-body">
          <p class="card-text mb-0">To create a flat dropdown use <code>.btn-flat-*</code> with your dropdown-toggle</p>
          <div class="demo-inline-spacing">
            <div class="btn-group">
              <button
                class="btn btn-flat-primary dropdown-toggle"
                type="button"
                id="dropdownMenuButton100"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Primary
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton100">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
              </div>
            </div>
            <div class="btn-group">
              <button
                class="btn btn-flat-secondary dropdown-toggle"
                type="button"
                id="dropdownMenuButton600"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Secondary
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton600">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
              </div>
            </div>
            <div class="btn-group">
              <button
                class="btn btn-flat-success dropdown-toggle"
                type="button"
                id="dropdownMenuButton200"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Success
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton200">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
              </div>
            </div>
            <div class="btn-group">
              <button
                class="btn btn-flat-danger dropdown-toggle"
                type="button"
                id="dropdownMenuButton400"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Danger
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton400">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
              </div>
            </div>
            <div class="btn-group">
              <button
                class="btn btn-flat-warning dropdown-toggle"
                type="button"
                id="dropdownMenuButton500"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Warning
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton500">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
              </div>
            </div>
            <div class="btn-group">
              <button
                class="btn btn-flat-info dropdown-toggle"
                type="button"
                id="dropdownMenuButton300"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Info
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton300">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
              </div>
            </div>
            <div class="btn-group">
              <button
                class="btn btn-flat-dark dropdown-toggle"
                type="button"
                id="dropdownMenuButton700"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Dark
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton700">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Flat Dropdown Ends -->

<!-- Gradient Dropdowns Start -->
<section id="gradient-dropdown">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Gradient</h4>
        </div>
        <div class="card-body">
          <div class="demo-inline-spacing">
            <div class="btn-group">
              <button
                class="btn btn-gradient-primary dropdown-toggle"
                type="button"
                id="dropdownMenuButton101"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Primary
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton101">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
              </div>
            </div>
            <div class="btn-group">
              <button
                class="btn btn-gradient-secondary dropdown-toggle"
                type="button"
                id="dropdownMenuButton701"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Secondary
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton701">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
              </div>
            </div>
            <div class="btn-group">
              <button
                class="btn btn-gradient-success dropdown-toggle"
                type="button"
                id="dropdownMenuButton202"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Success
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton202">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
              </div>
            </div>
            <div class="btn-group">
              <button
                class="btn btn-gradient-danger dropdown-toggle"
                type="button"
                id="dropdownMenuButton404"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Danger
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton404">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
              </div>
            </div>
            <div class="btn-group">
              <button
                class="btn btn-gradient-warning dropdown-toggle"
                type="button"
                id="dropdownMenuButton505"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Warning
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton505">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
              </div>
            </div>
            <div class="btn-group">
              <button
                class="btn btn-gradient-info dropdown-toggle"
                type="button"
                id="dropdownMenuButton303"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Info
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton303">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
              </div>
            </div>
            <div class="btn-group">
              <button
                class="btn btn-gradient-dark dropdown-toggle"
                type="button"
                id="dropdownMenuButton707"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Dark
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton707">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Dropdown End -->

<!-- Dropdown Sizes Starts -->
<section id="dropdown-sizes">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Sizes</h4>
        </div>
        <div class="card-body">
          <p class="card-text mb-0">
            To create dropdown with you can use <code>.btn-lg</code> for large and <code>.btn-sm</code> for Small with
            your <code>.btn</code> class
          </p>
          <div class="d-flex justify-content-between flex-wrap">
            <div class="demo-inline-spacing">
              <div class="btn-group">
                <button
                  type="button"
                  class="btn btn-primary btn-lg dropdown-toggle"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Large
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Option 1</a>
                  <a class="dropdown-item" href="#">Option 2</a>
                  <a class="dropdown-item" href="#">Option 3</a>
                </div>
              </div>
              <div class="btn-group">
                <button
                  type="button"
                  class="btn btn-primary dropdown-toggle"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Default
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Option 1</a>
                  <a class="dropdown-item" href="#">Option 2</a>
                  <a class="dropdown-item" href="#">Option 3</a>
                </div>
              </div>
              <div class="btn-group">
                <button
                  type="button"
                  class="btn btn-primary btn-sm dropdown-toggle"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Small
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Option 1</a>
                  <a class="dropdown-item" href="#">Option 2</a>
                  <a class="dropdown-item" href="#">Option 3</a>
                </div>
              </div>
            </div>
            <div class="demo-inline-spacing">
              <div class="btn-group">
                <button type="button" class="btn btn-primary btn-lg">Large</button>
                <button
                  type="button"
                  class="btn btn-primary btn-lg dropdown-toggle dropdown-toggle-split"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="#">Option 1</a>
                  <a class="dropdown-item" href="#">Option 2</a>
                  <a class="dropdown-item" href="#">Option 3</a>
                </div>
              </div>
              <div class="btn-group">
                <button type="button" class="btn btn-primary">Default</button>
                <button
                  type="button"
                  class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="#">Option 1</a>
                  <a class="dropdown-item" href="#">Option 2</a>
                  <a class="dropdown-item" href="#">Option 3</a>
                </div>
              </div>
              <div class="btn-group">
                <button type="button" class="btn btn-primary btn-sm">Small</button>
                <button
                  type="button"
                  class="btn btn-primary btn-sm dropdown-toggle dropdown-toggle-split"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="#">Option 1</a>
                  <a class="dropdown-item" href="#">Option 2</a>
                  <a class="dropdown-item" href="#">Option 3</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Dropdown Sizes Ends -->

<!-- Dropdown Direction Starts -->
<section id="dropdown-directions">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Directions</h4>
        </div>
        <div class="card-body">
          <p class="card-text mb-0">
            You can use drop from different direction to use drop from bottom end use
            <code>.dropdown-menu-end</code> with your <code>.dropdown-menu</code>. For drop up use
            <code>.dropup</code> as a wrapper. For drop end use <code>.dropend</code> as wrapper. For drop start use
            <code>.dropstart</code> as a wrapper.
          </p>
          <div class="demo-inline-spacing">
            <div class="btn-group">
              <button
                type="button"
                class="btn btn-primary dropdown-toggle"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Drop bottom end
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
              </div>
            </div>
            <div class="btn-group dropup">
              <button
                type="button"
                class="btn btn-primary dropdown-toggle"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Drop up
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item disabled" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
              </div>
            </div>
            <div class="btn-group dropend">
              <button
                type="button"
                class="btn btn-primary dropdown-toggle"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Drop end
              </button>
              <div class="dropdown-menu">
                <h6 class="dropdown-header">Header</h6>
                <a class="dropdown-item" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
              </div>
            </div>
            <div class="btn-group dropstart">
              <button
                type="button"
                class="btn btn-primary dropdown-toggle"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Drop start
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item disabled" href="#">Option 2</a>
                <a class="dropdown-item" href="#">Option 3</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Dropdown Direction End -->

<!-- Dropdown variations Starts -->
<section id="dropdown-variations">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Variations</h4>
        </div>
        <div class="card-body">
          <p class="card-text">
            To create a dropdown with groups you can use <code>.dropdown-header</code> for the header of groups and for
            separation of group you can use <code>.dropdown-divider</code>.
          </p>
          <p class="card-text mb-0">
            To create a dropdown with icons use class <code>.dropdown-icon-wrapper</code> with your dropdown and you
            class class <code>.dropdown-icon</code> with the default <code>&lt;i&gt;</code> tag.
          </p>
          <div class="demo-inline-spacing">
            <div class="btn-group dropup">
              <button
                class="btn btn-primary dropdown-toggle"
                type="button"
                id="dropdownMenuButton902"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Groups
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton902">
                <h6 class="dropdown-header">Group 1</h6>
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <div class="dropdown-divider"></div>
                <h6 class="dropdown-header">Group 2</h6>
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
                <div class="dropdown-divider"></div>
                <h6 class="dropdown-header">Group 3</h6>
                <a class="dropdown-item" href="#">Option 1</a>
                <a class="dropdown-item" href="#">Option 2</a>
              </div>
            </div>

            <div class="btn-group dropup dropdown-icon-wrapper">
              <button type="button" class="btn btn-primary">Icons</button>
              <button
                type="button"
                class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i data-feather="wifi" class="dropdown-icon"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <span class="dropdown-item">
                  <i data-feather="wifi-off"></i>
                </span>
                <span class="dropdown-item">
                  <i data-feather="volume-2"></i>
                </span>
                <span class="dropdown-item">
                  <i data-feather="volume-x"></i>
                </span>
                <span class="dropdown-item">
                  <i data-feather="bell"></i>
                </span>
                <span class="dropdown-item">
                  <i data-feather="bell-off"></i>
                </span>
                <span class="dropdown-item">
                  <i data-feather="phone-off"></i>
                </span>
              </div>
            </div>

            <div class="btn-group dropup">
              <button
                type="button"
                class="btn btn-primary dropdown-toggle"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Form
              </button>
              <div class="dropdown-menu">
                <form action="#" class="px-2 py-2">
                  <div class="mb-1">
                    <label class="form-label" for="exampleDropdownFormEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="Email" />
                  </div>
                  <div class="mb-1">
                    <label class="form-label" for="exampleDropdownFormPassword1">Password</label>
                    <input
                      type="password"
                      class="form-control"
                      id="exampleDropdownFormPassword1"
                      placeholder="Password"
                    />
                  </div>
                  <div class="mb-0">
                    <div class="mb-1">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="dropdownCheck" />
                        <label class="form-check-label" for="dropdownCheck">Remember me</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                  </div>
                </form>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">New around here? Sign up</a>
                <a class="dropdown-item" href="#">Forgot password?</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Dropdown variations Ends -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-script'); ?>
<script src="<?php echo e(asset('js/scripts/components/components-dropdowns.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\96393\Desktop\y1s\erp_v1\resources\views//content/components/component-dropdowns.blade.php ENDPATH**/ ?>