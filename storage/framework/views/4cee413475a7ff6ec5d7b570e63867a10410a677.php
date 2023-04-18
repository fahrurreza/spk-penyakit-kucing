

<?php $__env->startSection('content'); ?>
<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Pemberian Nilai Bobot Setiap Kriteria
        </h2>

        <?php if(session('status')): ?>
        <div class="my-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline"><?php echo e(session('status')); ?></span>
        </div>
        <?php endif; ?>
        <?php if(session('error')): ?>
        <div class="my-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">OoopS!</strong>
            <span class="block sm:inline"><?php echo e(session('error')); ?></span>
        </div>
        <?php endif; ?>
        <!-- CTA -->

        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Tayangan</th>
                            <?php $__currentLoopData = $data['criteria']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $criteria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <th class="px-4 py-3"><?php echo e($criteria->criteria); ?></th>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <?php $__currentLoopData = $data['tayangan']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tayang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3"><?php echo e($tayang->tayangan); ?></td>
                            <?php $__currentLoopData = $data['criteria']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $criteria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td class="px-4 py-3">
                                <form action="<?php echo e(url('hasil')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <center>
                                    <select name="nilai[]">
                                        <?php $__currentLoopData = $data['bobot']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bobot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($bobot->bobot); ?>"><?php echo e($bobot->deskripsi); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </center>
                            </td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php for ($i = 0; $i < count($data['nilai']); $i++): ?>
                            <input type="hidden" name="k[]" value="<?php echo e($data['nilai'][$i]); ?>">
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
            <div  class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
        </div>
    </div>
    
    <button type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
        Hasil Akhir
    </button>
    </form>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tv\resources\views/matrik/matrik.blade.php ENDPATH**/ ?>