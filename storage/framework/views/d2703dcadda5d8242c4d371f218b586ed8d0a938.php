

<?php $__env->startSection('content'); ?>
<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Form Penilaian Tayangan <?php echo e($tayangan->tayangan); ?>

        </h2>

        <form action="<?php echo e(url('input')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="tayangan_id" value="<?php echo e($tayangan->id); ?>">
            <?php $__currentLoopData = $criterias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $criteria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <input type="hidden" name="criteria_id[]" value="<?php echo e($criteria->id); ?>">
            <label class="block mt-4 py-2 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                    <?php echo e($criteria->criteria); ?>

                </span>
                <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="bobot_id[]">
                    <option disabled selected>Pilih...</option>
                    <?php $__currentLoopData = $bobots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bobot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($bobot->bobot); ?>"><?php echo e($bobot->deskripsi); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </label>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <button type="submit" class="px-3 py-1 mt-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Submit
            </button>
        </form>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tv\resources\views/tayangan/form.blade.php ENDPATH**/ ?>