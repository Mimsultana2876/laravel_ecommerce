;
<?php $__env->startSection('content'); ?>;
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Design <small>different form elements</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <form method="post" action="<?php echo e(route('category.store')); ?>"  id="demo-form2"  class="form-horizontal form-label-left">
                        <?php echo csrf_field(); ?>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="name"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Subcategory oF <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select   name="category_id"  class="form-control col-md-7 col-xs-12">
                              <option value="">No Subcategory</option>
                              <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($categorie->id); ?>"><?php echo e($categorie->name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         
                        
                          <input type="submit" value="submit" class="btn btn-success">
            
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
<?php $__env->stopSection(); ?>;
<?php echo $__env->make('admin.Layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravelEcommerce\demo\resources\views/admin/category/add.blade.php ENDPATH**/ ?>