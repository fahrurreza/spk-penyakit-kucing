<!-- Divider -->
<hr class="my-4 md:min-w-full" />
<!-- Heading -->
<h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
    Admin Layout Pages
</h6>
<!-- Navigation -->

<ul class="md:flex-col md:min-w-full flex flex-col list-none">
    <li class="items-center">
        <a href="<?php echo e(url('/admin')); ?>" class="text-xs uppercase py-3 font-bold block <?php echo e(request()->is('admin') ? '  text-pink-500 hover:text-pink-600' : ' text-blueGray-700 hover:text-blueGray-500'); ?>">
            <i class="fas fa-tv mr-2 text-sm opacity-75"></i>
            Dashboard
        </a>
    </li>

    <li class="items-center">
        <a href="<?php echo e(url('/penyakit')); ?>" class="text-xs uppercase py-3 font-bold block <?php echo e(request()->is('penyakit') ? '  text-pink-500 hover:text-pink-600' : ' text-blueGray-700 hover:text-blueGray-500'); ?>">
            <i class="fas fa-tools mr-2 text-sm text-blueGray-300"></i>
            Penyakit
        </a>
    </li>

    <li class="items-center">
        <a href="<?php echo e(url('/gejala')); ?>" class="text-xs uppercase py-3 font-bold block <?php echo e(request()->is('gejala') ? '  text-pink-500 hover:text-pink-600' : ' text-blueGray-700 hover:text-blueGray-500'); ?>">
            <i class="fas fa-table mr-2 text-sm text-blueGray-300"></i>
            Gejala
        </a>
    </li>

    <li class="items-center">
        <a href="<?php echo e(url('/ct')); ?>" class="text-xs uppercase py-3 font-bold block <?php echo e(request()->is('ct') ? '  text-pink-500 hover:text-pink-600' : ' text-blueGray-700 hover:text-blueGray-500'); ?>">
            <i class="fas fa-table mr-2 text-sm text-blueGray-300"></i>
            Certainty Term
        </a>
    </li>

    <!-- <li class="items-center">
        <a href="<?php echo e(url('/rule')); ?>" class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
            <i class="fas fa-table mr-2 text-sm text-blueGray-300"></i>
            Rule
        </a>
    </li>

    <li class="items-center">
        <a href="<?php echo e(url('/rule_gejala')); ?>" class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
            <i class="fas fa-tools mr-2 text-sm text-blueGray-300"></i>
            Rule Gejala
        </a>
    </li>

    <li class="items-center">
        <a href="<?php echo e(url('/rule_penyakit')); ?>" class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
            <i class="fas fa-tools mr-2 text-sm text-blueGray-300"></i>
            Rule Penyakit
        </a>
    </li>

    <li class="items-center">
        <a href="<?php echo e(url('/setting')); ?>" class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
            <i class="fas fa-tools mr-2 text-sm text-blueGray-300"></i>
            Rule Base
        </a>
    </li> -->
    
</ul><?php /**PATH C:\xampp\htdocs\kucing\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>