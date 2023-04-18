<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="<?php echo e(asset('img/favicon.ico')); ?>" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('img/apple-icon.png')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('styles/tailwind.css')); ?>" />
    <title>Diagnosa Penyakit Kucing</title>
  </head>
  <body class="text-blueGray-700 antialiased">
    <?php echo $__env->make('app.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
      <div class="relative md:ml-64 bg-blueGray-50">
      <?php echo $__env->make('app.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="px-4 md:px-10 mx-auto w-full -m-24">
          <?php echo $__env->yieldContent('content'); ?>
          <?php echo $__env->make('app.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
      </div>
    </div>
  </body>
  <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
  <script>
    /* Make dynamic date appear */
    (function () {
      if (document.getElementById("get-current-year")) {
        document.getElementById(
          "get-current-year"
        ).innerHTML = new Date().getFullYear();
      }
    })();
    /* Function for opning navbar on mobile */
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
    /* Function for dropdowns */
    function openDropdown(event, dropdownID) {
      let element = event.target;
      while (element.nodeName !== "A") {
        element = element.parentNode;
      }
      Popper.createPopper(element, document.getElementById(dropdownID), {
        placement: "bottom-start",
      });
      document.getElementById(dropdownID).classList.toggle("hidden");
      document.getElementById(dropdownID).classList.toggle("block");
    }
  </script>
</html><?php /**PATH C:\xampp\htdocs\kucing\resources\views/app/master.blade.php ENDPATH**/ ?>