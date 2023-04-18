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
        <?php if(Auth::user()->position == "Administrator"): ?>
        <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold<?php echo e(request()->is('criteria') ? ' text-gray-800' : ''); ?> transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="<?php echo e(url('/criteria')); ?>">
            <svg class="w-5 h-5"
                aria-hidden="true"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
            </svg>
            <span class="ml-4">Kriteria</span>
            </a>
        </li>
        </ul>
        <ul>
        <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold<?php echo e(request()->is('bobot') ? ' text-gray-800' : ''); ?> transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="<?php echo e(url('/bobot')); ?>">
            <svg
                class="w-5 h-5"
                aria-hidden="true"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                ></path>
            </svg>
            <span class="ml-4">Nilai Bobot</span>
            </a>
        </li>
        <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold<?php echo e(request()->is('tayangan') ? ' text-gray-800' : ''); ?> transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="<?php echo e(url('/tayangan')); ?>">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>
                </svg>
            <span class="ml-4">Tayangan</span>
            </a>
        </li>
        <?php endif; ?>

        <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold<?php echo e(request()->is('matrik', 'proses1', 'proses2', 'hasil_bobot_prioritas', 'hasil', 'home', '/') ? ' text-gray-800' : ''); ?> transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="<?php echo e(url('/matrik')); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
            </svg>
            <span class="ml-4">Matrik dan Hasil</span>
            </a>
        </li>

        </ul>
        <?php if(Auth::user()->position == "Administrator"): ?>
        <div class="px-6 my-6">
        <a class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" href="<?php echo e(url('/user')); ?>">
            Create account <span class="ml-2" aria-hidden="true">+</span>
        </a>
        </div>
        <?php endif; ?>

    </div>
</aside>
<!-- Mobile sidebar --><?php /**PATH C:\xampp\htdocs\tv\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>