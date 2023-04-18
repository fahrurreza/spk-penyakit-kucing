<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Windmill Dashboard</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?php echo e(asset('css/tailwind.output.css')); ?>" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="<?php echo e(asset('js/init-alpine.js')); ?>"></script>
  </head>
  <body>
    <?php echo $__env->yieldContent('content'); ?>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\tv\resources\views/layouts/app.blade.php ENDPATH**/ ?>