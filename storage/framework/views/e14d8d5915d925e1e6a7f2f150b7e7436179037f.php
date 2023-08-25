

<?php $__env->startSection('title', 'Specific Post'); ?>

<?php $__env->startSection('content'); ?>

    <div class="post">
        <h2>Dummy Post Title</h2>
        <img src="<?php echo e(asset('storage/images/default.png')); ?>"/>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur nesciunt consequatur repudiandae culpa eius consectetur harum dicta. Rem minus autem iste, deleniti id voluptatibus ducimus esse eveniet, incidunt distinctio aliquam.</p>
        <a href="<?php echo e(url('/posts/1')); ?>">Read more</a>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel Projects\Workshop1\resources\views/show.blade.php ENDPATH**/ ?>