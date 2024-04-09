
<body class="horizontal-layout horizontal-menu <?php echo e($configData['contentLayout']); ?> <?php echo e($configData['horizontalMenuType']); ?> <?php echo e($configData['blankPageClass']); ?> <?php echo e($configData['bodyClass']); ?> <?php echo e($configData['footerType']); ?>"
data-open="hover"
data-menu="horizontal-menu"
data-col="<?php echo e($configData['showMenu'] ? $configData['contentLayout'] : '1-column'); ?>"
data-framework="laravel"
data-asset-path="<?php echo e(asset('/')); ?>">

  <!-- BEGIN: Header-->
  <?php echo $__env->make('panels.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  
  <?php if((isset($configData['showMenu']) && $configData['showMenu'] === true)): ?>
  <?php echo $__env->make('panels.horizontalMenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>

  <!-- BEGIN: Content-->
  <div class="app-content content <?php echo e($configData['pageClass']); ?>">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>

    <?php if(($configData['contentLayout']!=='default') && isset($configData['contentLayout'])): ?>
    <div class="content-area-wrapper <?php echo e($configData['layoutWidth'] === 'boxed' ? 'container-xxl p-0' : ''); ?>">
      <div class="<?php echo e($configData['sidebarPositionClass']); ?>">
        <div class="sidebar">
          
          <?php echo $__env->yieldContent('content-sidebar'); ?>
        </div>
      </div>
      <div class="<?php echo e($configData['contentsidebarClass']); ?>">
        <div class="content-wrapper">
          <div class="content-body">
            
            <?php echo $__env->yieldContent('content'); ?>
          </div>
        </div>
      </div>
    </div>
    <?php else: ?>
    <div class="content-wrapper <?php echo e($configData['layoutWidth'] === 'boxed' ? 'container-xxl p-0' : ''); ?>">
      
      <?php if($configData['pageHeader'] == true): ?>
      <?php echo $__env->make('panels.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>

      <div class="content-body">

        
        <?php echo $__env->yieldContent('content'); ?>

      </div>
    </div>
    <?php endif; ?>

  </div>
  <!-- End: Content-->

  <?php if($configData['blankPage'] == false && isset($configData['blankPage'])): ?>
  <?php echo $__env->make('content/pages/customizer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->make('content/pages/buy-now', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>

  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>

  
  <?php echo $__env->make('panels/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  
  <?php echo $__env->make('panels/scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <script type="text/javascript">
    $(window).on('load', function() {
      if (feather) {
        feather.replace({
          width: 14,height: 14
        });
      }
    })
  </script>
</body>

</html>
<?php /**PATH C:\Users\96393\Desktop\y1s\erp_v1\resources\views/layouts/horizontalLayoutMaster.blade.php ENDPATH**/ ?>