

<?php $__env->startSection('content'); ?>
<div class="container-fluid">               
    <form method="post" action="/docter">
        <?php echo csrf_field(); ?>
        <div class="modal-body">
            <div class="form-group row">
                <label for="dokter" class="col-sm-2 col-form-label">Nama Lengkap Dokter</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?php $__errorArgs = ['docter'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="dokter" name="docter" placeholder="dokter">
                    <div class="invalid-feedback">
                        Tidak Boleh Kosong
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a class="btn btn-warning" href="<?php echo e(url('docter')); ?>"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
            <button type="submit" class="btn btn-primary"> <i class="fas fa-save"></i> Post</button>
        </div>
    </form>
</div>
<!-- /.container-fluid -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\login\resources\views/docter/create.blade.php ENDPATH**/ ?>