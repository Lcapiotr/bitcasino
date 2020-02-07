

<?php $__env->startSection('title'); ?>
    <?php echo e(__('My games')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if($games->isEmpty()): ?>
        <div class="alert alert-info" role="alert">
            <?php echo e(__('There are no games yet.')); ?>

        </div>
    <?php else: ?>
        <table class="table table-hover table-stackable">
            <thead>
            <tr>
                <th><?php echo e(__('ID')); ?></th>
                <th><?php echo e(__('Game')); ?></th>
                <th class="text-right"><?php echo e(__('Bet')); ?></th>
                <th class="text-right"><?php echo e(__('Win')); ?></th>
                <th><?php echo e(__('Result')); ?></th>
                <th class="text-right">
                    <i class="fas fa-arrow-down"></i>
                    <?php echo e(__('Played')); ?>

                </th>
                <th>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td data-title="<?php echo e(__('ID')); ?>">
                        <?php echo e($game->id); ?>

                    </td>
                    <td data-title="<?php echo e(__('Game')); ?>">
                        <?php echo e($game->title); ?>

                    </td>
                    <td data-title="<?php echo e(__('Bet')); ?>" class="text-right">
                        <?php echo e($game->_bet); ?>

                    </td>
                    <td data-title="<?php echo e(__('Win')); ?>" class="text-right">
                        <?php echo e($game->_win); ?>

                    </td>
                    <td data-title="<?php echo e(__('Result')); ?>">
                        <?php echo e($game->gameable->result); ?>

                    </td>
                    <td data-title="<?php echo e(__('Played')); ?>" class="text-right">
                        <?php echo e($game->updated_at->diffForHumans()); ?>

                        <span data-balloon="<?php echo e($game->updated_at); ?>" data-balloon-pos="up">
                            <i class="far fa-clock" ></i>
                        </span>
                    </td>
                    <td class="text-right">
                        <a href="<?php echo e(route('frontend.history.verify', $game)); ?>" class="btn btn-primary btn-sm"><?php echo e(('Verify')); ?></a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            <?php echo e($games->links()); ?>

        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>