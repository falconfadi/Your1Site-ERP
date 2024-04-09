

<?php $__env->startSection('title', 'Swiper'); ?>

<?php $__env->startSection('vendor-style'); ?>
  <!-- vendor css files -->
  <link rel="stylesheet" href="<?php echo e(asset(mix('vendors/css/extensions/swiper.min.css'))); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-style'); ?>
  <!-- Page css files -->
  <link rel="stylesheet" href="<?php echo e(asset(mix('css/base/plugins/extensions/ext-component-swiper.css'))); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- default swiper -->
<section id="component-swiper-default">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Default</h4>
    </div>
    <div class="card-body">
      <div class="swiper-default swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-1.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-2.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-4.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-13.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-7.jpg')); ?>" alt="banner" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ default swiper -->

<!-- navigation swiper -->
<section id="component-swiper-navigations">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Navigations</h4>
    </div>
    <div class="card-body">
      <div class="swiper-navigations swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-7.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-4.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-14.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-3.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-2.jpg')); ?>" alt="banner" />
          </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </div>
</section>
<!--/ navigations swiper -->

<!-- pagination swiper -->
<section id="component-swiper-pagination">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Pagination</h4>
    </div>
    <div class="card-body">
      <div class="swiper-paginations swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-12.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-9.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-8.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-7.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-20.jpg')); ?>" alt="banner" />
          </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
</section>
<!--/ pagination swiper -->

<!-- progress swiper -->
<section id="component-swiper-progress">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Progress</h4>
    </div>
    <div class="card-body">
      <div class="swiper-progress swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-8.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-7.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-20.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-5.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-4.jpg')); ?>" alt="banner" />
          </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </div>
</section>
<!--/ progress swiper -->

<!-- Multiple Slides Per View swiper -->
<section id="component-swiper-multiple">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Multiple Slides Per View</h4>
    </div>
    <div class="card-body">
      <div class="swiper-multiple swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-31.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-32.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-33.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-34.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-35.jpg')); ?>" alt="banner" />
          </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
</section>
<!--/ Multiple Slides Per View swiper -->

<!-- Multi row Slides Per View swiper -->
<section id="component-swiper-multi-row">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Multi Row Slides Layout</h4>
    </div>
    <div class="card-body">
      <div class="swiper-multi-row swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-26.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-39.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-28.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-29.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-30.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-31.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-32.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-33.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-34.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-35.jpg')); ?>" alt="banner" />
          </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
</section>
<!--/ Multi row Slides Per View swiper -->

<!-- centered-slides swiper option-1 -->
<section id="component-swiper-centered-slides">
  <div class="card bg-transparent shadow-none">
    <div class="card-header">
      <h4 class="card-title">Centered Slides option-1</h4>
    </div>
    <div class="card-body">
      <div class="swiper-centered-slides swiper-container p-1">
        <div class="swiper-wrapper">
          <div class="swiper-slide rounded swiper-shadow">
            <i data-feather="play" class="font-large-1"></i>
            <div class="swiper-text pt-md-1 pt-sm-50">Getting Started</div>
          </div>
          <div class="swiper-slide rounded swiper-shadow">
            <i data-feather="dollar-sign" class="font-large-1"></i>
            <div class="swiper-text pt-md-1 pt-sm-50">Pricing & Plans</div>
          </div>
          <div class="swiper-slide rounded swiper-shadow">
            <i data-feather="help-circle" class="font-large-1"></i>
            <div class="swiper-text pt-md-1 pt-sm-50">Sales Question</div>
          </div>
          <div class="swiper-slide rounded swiper-shadow">
            <i data-feather="file-text" class="font-large-1"></i>
            <div class="swiper-text pt-md-1 pt-sm-50">Usage Guides</div>
          </div>
          <div class="swiper-slide rounded swiper-shadow">
            <i data-feather="archive" class="font-large-1"></i>
            <div class="swiper-text pt-md-1 pt-sm-50">General Guide</div>
          </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </div>
</section>
<!--/ centered-slides swiper option-1 -->

<!-- centered-slides option-2 swiper -->
<section id="component-swiper-centered-slides-2">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Centered Slides option-2</h4>
    </div>
    <div class="card-body">
      <div class="swiper-centered-slides-2 swiper-container p-1">
        <div class="swiper-wrapper">
          <div class="swiper-slide rounded swiper-shadow py-1 px-3 d-flex">
            <i data-feather="play" class="me-50 font-medium-3"></i>
            <div class="swiper-text">Getting Started</div>
          </div>
          <div class="swiper-slide rounded swiper-shadow py-1 px-3 d-flex">
            <i data-feather="dollar-sign" class="me-50 font-medium-3"></i>
            <div class="swiper-text">Pricing & Plans</div>
          </div>
          <div class="swiper-slide rounded swiper-shadow py-1 px-3 d-flex">
            <i data-feather="help-circle" class="me-50 font-medium-3"></i>
            <div class="swiper-text">Sales Question</div>
          </div>
          <div class="swiper-slide rounded swiper-shadow py-1 px-3 d-flex">
            <i data-feather="file-text" class="me-50 font-medium-3"></i>
            <div class="swiper-text">Usage Guides</div>
          </div>
          <div class="swiper-slide rounded swiper-shadow py-1 px-3 d-flex">
            <i data-feather="archive" class="me-50 font-medium-3"></i>
            <div class="swiper-text">General Guide</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ centered-slides option-2 swiper -->

<!-- Fade Effect swiper -->
<section id="component-swiper-fade-effect">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Fade Effect</h4>
    </div>
    <div class="card-body">
      <div class="swiper-fade-effect swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-20.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-19.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-18.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-17.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-16.jpg')); ?>" alt="banner" />
          </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </div>
</section>
<!--/ Fade Effect swiper -->

<!-- 3d cube effect swiper -->
<section id="component-swiper-cube-effect">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">3-D cube Effect</h4>
    </div>
    <div class="card-body">
      <div class="swiper-cube-effect swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-21.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-22.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-23.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-24.jpg')); ?>" alt="banner" />
          </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
      </div>
    </div>
  </div>
</section>
<!--/ 3d cube effect swiper -->

<!-- coverflow effect swiper -->
<section id="component-swiper-coverflow">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">3d Effect Coverflow Effect</h4>
    </div>
    <div class="card-body">
      <div class="swiper-coverflow swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-35.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-39.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-38.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-37.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-36.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-34.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-33.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-32.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-31.jpg')); ?>" alt="banner" />
          </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
</section>
<!--/ coverflow effect swiper -->

<!-- autoplay swiper -->
<section id="component-swiper-autoplay">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Autoplay</h4>
    </div>
    <div class="card-body">
      <div class="swiper-autoplay swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-20.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-7.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-8.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-9.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-10.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-11.jpg')); ?>" alt="banner" />
          </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </div>
</section>
<!--/ autoplay swiper -->

<!-- gallery swiper -->
<section id="component-swiper-gallery">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Gallery</h4>
    </div>
    <div class="card-body">
      <div class="swiper-gallery swiper-container gallery-top">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-11.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-12.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-13.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-14.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-15.jpg')); ?>" alt="banner" />
          </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
      <div class="swiper-container gallery-thumbs">
        <div class="swiper-wrapper mt-25">
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-11.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-12.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-13.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-14.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-15.jpg')); ?>" alt="banner" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ gallery swiper -->

<!-- parallax swiper -->
<section id="component-swiper-parallax">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Parallax</h4>
    </div>
    <div class="card-body">
      <!-- Swiper -->
      <div class="swiper-parallax swiper-container">
        <div class="parallax-bg" data-swiper-parallax="-23%">
          <img class="img-fluid" src="<?php echo e(asset('images/banner/parallax-4.jpg')); ?>" alt="banner" />
        </div>
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="title" data-swiper-parallax="-300">Slide 1</div>
            <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
            <div class="text" data-swiper-parallax="-100">
              <p class="card-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus
                felis iaculis nec. Nulla laoreet Lorem, ipsum dolor sit amet consectetur..
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="title" data-swiper-parallax="-300" data-swiper-parallax-opacity="0">Slide 2</div>
            <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
            <div class="text" data-swiper-parallax="-100">
              <p class="card-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus
                felis iaculis nec. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam reiciendis provident
                atque quod obcaecati voluptatibus ex qui repudiandae sunt dolores. Nulla laoreet justo vitae porttitor
                porttitor. Suspendisse in sem justo. Integeo. Aenean feugiat non eros quis feugiat.
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="title" data-swiper-parallax="-300">Slide 3</div>
            <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
            <div class="text" data-swiper-parallax="-100">
              <p class="card-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus
                felis iaculis nec. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam reiciendis provident
                atque quod obcaecati voluptatibus ex qui repudiandae sunt dolores. Nulla laoreet justo vitae porttitor
                porttitor. Suspendisse in sem justo. Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod.
                Aliquam hendrerit lnt ut libero. Aenean feugiat non eros quis feugiat.
              </p>
            </div>
          </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
  </div>
</section>
<!--/ parallax swiper -->

<!-- Lazy loading swiper -->
<section id="component-swiper-lazy">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Lazy Loading</h4>
    </div>
    <div class="card-body">
      <div class="swiper-lazy-loading swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <!-- Required swiper-lazy class and image source specified in data-src attribute -->
            <img src="<?php echo e(asset('images/banner/banner-9.jpg')); ?>" class="swiper-lazy img-fluid" alt="banner" />
            <!-- Preloader image -->
            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
          </div>
          <div class="swiper-slide">
            <img src="<?php echo e(asset('images/banner/banner-8.jpg')); ?>" class="swiper-lazy img-fluid" alt="banner" />
            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
          </div>
          <div class="swiper-slide">
            <img src="<?php echo e(asset('images/banner/banner-7.jpg')); ?>" class="swiper-lazy img-fluid" alt="banner" />
            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
          </div>
          <div class="swiper-slide">
            <img src="<?php echo e(asset('images/banner/banner-20.jpg')); ?>" class="swiper-lazy img-fluid" alt="banner" />
            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
          </div>
          <div class="swiper-slide">
            <img src="<?php echo e(asset('images/banner/banner-5.jpg')); ?>" class="swiper-lazy img-fluid" alt="banner" />
            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
          </div>
          <div class="swiper-slide">
            <img src="<?php echo e(asset('images/banner/banner-4.jpg')); ?>" class="swiper-lazy img-fluid" alt="banner" />
            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
          </div>
        </div>

        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </div>
</section>
<!--/ Lazy loading swiper -->

<!-- Responsive Breakpoints swiper -->
<section id="component-swiper-responsive-breakpoints">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Responsive Breakpoints</h4>
    </div>
    <div class="card-body">
      <div class="swiper-responsive-breakpoints swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-30.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-31.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-32.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-33.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-34.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-35.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-36.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-37.jpg')); ?>" alt="banner" />
          </div>
          <div class="swiper-slide">
            <img class="img-fluid" src="<?php echo e(asset('images/banner/banner-38.jpg')); ?>" alt="banner" />
          </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
</section>
<!--/ Responsive Breakpoints swiper -->

<!-- virtual slides swiper -->
<section id="component-swiper-virtual">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Virtual Slides</h4>
    </div>
    <div class="card-body">
      <!-- Swiper -->
      <div class="swiper-virtual swiper-container">
        <div class="swiper-wrapper"></div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
      <div class="demo-inline-spacing justify-content-center">
        <button class="btn btn-outline-primary prepend-2-slides font-small-3">Prepend 2 Slides</button>
        <button class="btn btn-outline-primary slide-1 font-small-3">Slide 1</button>
        <button class="btn btn-outline-primary slide-250 font-small-3">Slide 250</button>
        <button class="btn btn-outline-primary slide-500 font-small-3">Slide 500</button>
        <button class="btn btn-outline-primary append-slide font-small-3">Append Slide</button>
      </div>
    </div>
  </div>
</section>
<!--/ virtual slides swiper -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('vendor-script'); ?>
  <!-- vendor files -->
  <script src="<?php echo e(asset(mix('vendors/js/extensions/swiper.min.js'))); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-script'); ?>
  <!-- Page js files -->
  <script src="<?php echo e(asset(mix('js/scripts/extensions/ext-component-swiper.js'))); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\96393\Desktop\y1s\erp_v1\resources\views//content/extensions/ext-component-swiper.blade.php ENDPATH**/ ?>