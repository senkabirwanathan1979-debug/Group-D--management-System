<?php $__env->startSection('title', 'Students'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-head">
    <div>
        <h1>Students</h1>
        <p><?php echo e($students->total()); ?> student(s) on record.</p>
    </div>
    <div style="display:flex;gap:.6rem;flex-wrap:wrap">
        <form method="GET" action="<?php echo e(route('students.index')); ?>" class="search">
            <input type="text" name="search" value="<?php echo e($search); ?>" placeholder="Search name, number, email">
            <button class="btn btn-ghost" type="submit">Search</button>
        </form>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create students')): ?>
            <a class="btn" href="<?php echo e(route('students.create')); ?>">+ Add student</a>
        <?php endif; ?>
    </div>
</div>

<div class="card">
    <div class="table-wrap">
        <table>
            <thead>
                <tr><th>Number</th><th>Name</th><th>Email</th><th>Courses</th><th></th></tr>
            </thead>
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><span class="tag"><?php echo e($student->student_number); ?></span></td>
                    <td><?php echo e($student->full_name); ?></td>
                    <td><?php echo e($student->email); ?></td>
                    <td><?php echo e($student->courses_count); ?></td>
                    <td>
                        <div class="actions">
                            <a class="btn btn-ghost btn-sm" href="<?php echo e(route('students.show', $student)); ?>">View</a>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit students')): ?>
                                <a class="btn btn-ghost btn-sm" href="<?php echo e(route('students.edit', $student)); ?>">Edit</a>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete students')): ?>
                                <form method="POST" action="<?php echo e(route('students.destroy', $student)); ?>" class="inline"
                                      onsubmit="return confirm('Delete <?php echo e(addslashes($student->full_name)); ?>? Their registrations will also be removed.')">
                                    <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                            <?php endif; ?>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr><td colspan="5" class="empty">No students found.</td></tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
    <?php echo e($students->links()); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\student-management-system\resources\views/students/index.blade.php ENDPATH**/ ?>