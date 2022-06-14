<!DOCTYPE html>
<html lang="en" class="h-100">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Login</title>
        <!-- Favicon icon -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/select2/css/select2.min.css')); ?>">
        <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('assets/images/favicon.png')); ?>">
        
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    </head>
    
    <body class="h-100">
        <!--*******************
              Preloader start
          ********************-->
          <div id="preloader" style="z-index: -1; position:relative;">
              <div class="sk-three-bounce">
                  <div class="sk-child sk-bounce1"></div>
                  <div class="sk-child sk-bounce2"></div>
                  <div class="sk-child sk-bounce3"></div>
              </div>
          </div>
          <!--*******************
          Preloader end
          ********************-->
                    <div class="authincation h-100">
                        <div class="container h-100">
                            <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-md-6 shadow-lg p-3 mb-5 bg-white">
                        <div class="authincation-content">
                            <div class="row no-gutters">
                                <div class="col-xl-12 mt-2">
                                <a class="p-3 text-light" href="<?php echo e(route('login')); ?>">back</a>
                                    <div class="auth-form">
                                        <div class="text-center mb-2">
                                            <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('assets/images/logo-full.png')); ?>" alt=""></a>
                                        </div>
                                        <h4 class="text-center mb-4 text-white">Masuk Sebagai Admin</h4>
                                        <form action="<?php echo e(route ('admin.login.post')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <div class="form-group">
                                            <label for="email" class="mb-1 text-white"><strong>Email</strong></label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email" value="<?php echo e(old('email')); ?>" style="color:grey;" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="mb-1 text-white"><strong>Password</strong></label>
                                            <input type="password" name="password" id="password" class="form-control mb-4" placeholder="Masukkan Password" required>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Masuk</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <script src="<?php echo e(asset('assets/vendor/global/global.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/custom.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/deznav-init.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/select2/js/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins-init/select2-init.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\sentracom_projek\resources\views/login/loginadmin.blade.php ENDPATH**/ ?>