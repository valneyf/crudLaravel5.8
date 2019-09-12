<?php $__env->startSection('content'); ?>
    <h1>Showing Task <?php echo e($task->title); ?></h1>

    <div class="jumbotron text-center">
        <p>
            <strong>Task Title:</strong> <?php echo e($task->title); ?> <br>
            <strong>Description:</strong> <?php echo e($task->description); ?>

        </p>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/crudLaravel/resources/views/tasks/show.blade.php ENDPATH**/ ?>