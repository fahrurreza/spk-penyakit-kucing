<!-- Desktop sidebar -->
<aside
    class="z-20 flex-shrink-0 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block"
    >
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a
        class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
        href="#"
        >
        SPK Siaran TV Anak
        </a>
        <ul class="mt-6">

        <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold<?php echo e(request()->is('matrik', 'proses1', 'proses2', 'hasil_bobot_prioritas', 'hasil', 'home', '/') ? ' text-gray-800' : ''); ?> transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="<?php echo e(url('/matrik')); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
            </svg>
            <span class="ml-4">Matrik dan Hasil</span>
            </a>
        </li>

        </ul>

    </div>
</aside>
<!-- Mobile sidebar --><?php /**PATH C:\xampp\htdocs\tv\resources\views/userlayouts/sidebar.blade.php ENDPATH**/ ?>