<?php if(session('success')): ?>
    <div class="alert alert-success" role="status"><?php echo e(session('success')); ?></div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="alert alert-error" role="alert"><?php echo e(session('error')); ?></div>
<?php endif; ?>

<?php if($errors->any()): ?>
    <div class="alert alert-error" role="alert">
        <div>
            <strong>Please fix the following:</strong>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($message); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH C:\student-management-system\resources\views/partials/flash.blade.php ENDPATH**/ ?>