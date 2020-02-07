<?php $__env->startSection('title'); ?>
    <?php echo e(__('Profile')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form method="POST" action="<?php echo e(route('frontend.users.update')); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="form-group">
            <label><?php echo e(__('Name')); ?></label>
            <input type="text" name="name" class="form-control <?php echo e($errors->has('name') ? 'is-invalid' : ''); ?>" placeholder="<?php echo e(__('Name')); ?>" value="<?php echo e(old('name', $user->name)); ?>" required>
        </div>

        <div class="form-group">
            <label><?php echo e(__('Email')); ?></label>
            <input type="text" name="email" class="form-control <?php echo e($errors->has('email') ? 'is-invalid' : ''); ?>" placeholder="<?php echo e(__('Email')); ?>" value="<?php echo e(old('email', $user->email)); ?>" <?php echo e($user->profiles->isEmpty() ? 'required' : 'readonly'); ?>>
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i>
            <?php echo e(__('Save')); ?>

        </button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>