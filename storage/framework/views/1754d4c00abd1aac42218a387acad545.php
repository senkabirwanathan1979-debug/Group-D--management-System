<?php $__env->startSection('title', 'Edit course'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-head"><div><h1>Edit <?php echo e($course->code); ?></h1><p><?php echo e($course->title); ?></p></div></div>
<div class="card">
    <form method="POST" action="<?php echo e(route('courses.update', $course)); ?>" novalidate>
        <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
        <?php echo $__env->make('courses._form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <div class="form-actions">
            <button class="btn" type="submit">Update course</button>
            <a class="btn btn-ghost" href="<?php echo e(route('courses.index')); ?>">Cancel</a>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\student-management-system\resources\views/courses/edit.blade.php ENDPATH**/ ?>