

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Products</div>

                <div class="card-body">
                    <form action="<?php echo e(url('product/update')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="product_category_id" value="<?php echo e($product->product_category_id); ?>">
                        <div class="form-group">
                        <label>Product Category Name</label>
                        <input type="text" class="form-control" name="product_category_name" value="<?php echo e($product->product_category_name); ?>">
                        <small class="text-danger"><?php echo e($errors->first('product_category_name')); ?></small>
                        </div>

                        <div class="form-group">
                            <label>Product Description</label>
                            <textarea class="form-control" name="product_category_description" value="<?php echo e($product->product_category_description); ?>"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="update">
                        </div>
    

                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\assignment\resources\views/edit_product_category.blade.php ENDPATH**/ ?>