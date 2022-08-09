<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <!-- Meta, title, CSS, favicons, etc. -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Gentelella Alela! | </title> 

      <!-- Bootstrap -->
      <link href="<?php echo e(asset('admin_them/vendors/bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
      <!-- Font Awesome -->
      <link href="<?php echo e(asset('admin_them/vendors/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
      <!-- NProgress -->
      <link href="<?php echo e(asset('admin_them/vendors/nprogress/nprogress.css')); ?>" rel="stylesheet">
      <!-- Animate.css -->
      <link href="<?php echo e(asset('admin_them/vendors/animate.css/animate.min.css')); ?>" rel="stylesheet">

      <!-- Custom Theme Style -->
      <link href="<?php echo e(asset('admin_them/build/css/custom.min.css')); ?>" rel="stylesheet">
    </head>

    <body class="login">
      <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
          <div class="animate form login_form">
            <section class="login_content">
                    <?php if($errors->any()): ?>
                    <div class= "alert alert-danger">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>
                    
                  <form action="<?php echo e(route('admin.makeLogin')); ?>" method="post">
                      <h1>Login Form</h1>
                      <?php echo csrf_field(); ?>
                      <div>
                      <input type="text" class="form-control" name="email" placeholder="Enter Your Email" required="" />
                      </div>
                      <div>
                      <input type="password" class="form-control" name="password" placeholder="Enter Your Password" required="" />
                      </div>
                      <div>
                      
                      <input type="submit" class="btn btn-success" >
                      
                      </div>

                      
                  </form>
            </section>
          </div>

          <div id="register" class="animate form registration_form">
            <section class="login_content">
              <form>
                <h1>Create Account</h1>
                <div>
                  <input type="email" class="form-control" placeholder="Email" required="" />
                </div>
                <div>
                  <input type="password" class="form-control" placeholder="Password" required="" />
                </div>
                <div>
                  <a class="btn btn-default submit" href="index.html">Submit</a>
                </div>

                <div class="clearfix"></div>

                <div class="separator">
                  <p class="change_link">Already a member ?
                    <a href="#signin" class="to_register"> Log in </a>
                  </p>

                  <div class="clearfix"></div>
                  <br />

                  <div>
                    <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                    <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                  </div>
                </div>
              </form>
            </section>
          </div>
        </div>
      </div>
    </body>
</html>   
<?php /**PATH D:\laravelEcommerce\demo\resources\views/admin/login.blade.php ENDPATH**/ ?>