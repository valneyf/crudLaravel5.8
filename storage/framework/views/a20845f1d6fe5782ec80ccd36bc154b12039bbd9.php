<?php $__env->startSection('content'); ?>
    <?php if(Session::has('message')): ?>
        <div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
    <?php endif; ?>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Task Title</th>
                <th scope="col">Task Description</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($task->id); ?></th>
                    <td><a href="/tasks/<?php echo e($task->id); ?>"><?php echo e($task->title); ?></a></td>
                    <td><?php echo e($task->description); ?></td>
                    <td><?php echo e($task->created_at->toFormattedDateString()); ?></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic Example">
                            <a href="<?php echo e(URL::to('tasks/' . $task->id . '/edit')); ?>">
                                <button type="button" class="btn btn-warning">Edit</button>
                            </a>&nbsp;
                            <form action="<?php echo e(url('tasks', [$task->id])); ?>" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </div>
                    </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/crudLaravel/resources/views/tasks/index.blade.php ENDPATH**/ ?>