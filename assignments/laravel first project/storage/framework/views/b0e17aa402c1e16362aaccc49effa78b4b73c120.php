

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Products</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            
                            <td>Category_Name</td>
                            <td>Category_Description</td>
                            <td>Status</td>
                            <td>Action</td>
                        </thead>
                        <tbody>
                           <?php if($products->isNotEmpty()): ?> 
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    
                                    <td><?php echo e($product->product_category_name); ?></td>
                                    <td><?php echo e($product->product_category_description); ?></td>
                                    <td><?php echo e($product->product_category_status); ?></td>
                                    <td><a href="<?php echo e(url('product/edit')); ?>/<?php echo e($product->product_category_id); ?>" class="btn btn-primary">Update</a>
                                        <a href="<?php echo e(url('product/delete')); ?>/<?php echo e($product->product_category_id); ?>" class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <form action="<?php echo e(url('product/store')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                        <label>Product Category Name</label>
                        <input type="text" class="form-control" name="product_category_name" value="<?php echo e(old('product_category_name')); ?>">
                        <small class="text-danger"><?php echo e($errors->first('product_category_name')); ?></small>
                        </div>

                        <div class="form-group">
                            <label>Product Description</label>
                            <textarea class="form-control" name="product_category_description"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="Submit">
                        </div>
    

                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\assignment\resources\views/product.blade.php ENDPATH**/ ?>