<?php if($paginator->hasPages()): ?>
    <nav class="pagination" role="navigation" aria-label="Pagination">
        <?php if($paginator->onFirstPage()): ?>
            <span class="page disabled">&laquo; Prev</span>
        <?php else: ?>
            <a class="page" href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev">&laquo; Prev</a>
        <?php endif; ?>

        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(is_string($element)): ?>
                <span class="page disabled"><?php echo e($element); ?></span>
            <?php endif; ?>

            <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $paginator->currentPage()): ?>
                        <span class="page active"><?php echo e($page); ?></span>
                    <?php else: ?>
                        <a class="page" href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php if($paginator->hasMorePages()): ?>
            <a class="page" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next">Next &raquo;</a>
        <?php else: ?>
            <span class="page disabled">Next &raquo;</span>
        <?php endif; ?>
    </nav>
<?php endif; ?>
<?php /**PATH C:\student-management-system\resources\views/vendor/pagination/custom.blade.php ENDPATH**/ ?>