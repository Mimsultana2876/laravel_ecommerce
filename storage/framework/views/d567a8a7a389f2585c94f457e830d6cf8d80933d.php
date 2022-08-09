;
<?php $__env->startSection('content'); ?>;
<table class="table">
    <thead>
        <tr>
            <th>S.N</th>
            <th>Category Name</th>
            <th>Parent Category Name</th>
            <th>Create Data</th>

        </tr>
    </thead>
    <tbody>
      
    <tr>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <td><?php echo e($key+1); ?></td>
        <td><?php echo e($categorie->name); ?></td>
        <td>
            <?php if($categorie->category_id): ?>
             <?php echo e($categorie->parent->name); ?>

            <?php else: ?>
            No parent category
            <?php endif; ?>
        </td>
        <td><?php echo e($categorie->created_at); ?></td>
        
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>



<?php $__env->stopSection(); ?>;
<?php echo $__env->make('admin.Layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravelEcommerce\demo\resources\views/admin/category/index.blade.php ENDPATH**/ ?>