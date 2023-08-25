

<?php $__env->startSection('title', 'Posts'); ?>

<?php $__env->startSection('content'); ?>

    <h1>Latest Posts</h1>
    <p>4 posts were found. Create post <a href="<?php echo e(url('/posts/create')); ?>">here</a></p>
    
    <?php echo $__env->make('show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel Projects\Workshop1\resources\views/posts.blade.php ENDPATH**/ ?>