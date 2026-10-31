<?php $__env->startSection('title', 'Change role'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-head"><div><h1>Change role</h1><p><?php echo e($user->name); ?> · <?php echo e($user->email); ?></p></div></div>

<div class="card" style="max-width:520px">
    <form method="POST" action="<?php echo e(route('users.update', $user)); ?>" novalidate>
        <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
        <label for="role">Role</label>
        <select id="role" name="role" required class="<?php echo e($errors->has('role') ? 'is-invalid' : ''); ?>">
            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($role->name); ?>" <?php if(old('role', $user->roleName()) === $role->name): echo 'selected'; endif; ?>><?php echo e(ucfirst($role->name)); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <?php $__errorArgs = ['role'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="field-error"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <div class="form-actions">
            <button class="btn" type="submit">Save role</button>
            <a class="btn btn-ghost" href="<?php echo e(route('users.index')); ?>">Cancel</a>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\student-management-system\resources\views/users/edit.blade.php ENDPATH**/ ?>