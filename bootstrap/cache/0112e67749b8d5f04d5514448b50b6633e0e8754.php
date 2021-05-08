<?php $__env->startSection('title', 'Register Free Account'); ?>
<?php $__env->startSection('data-page-id', 'auth'); ?>

<?php $__env->startSection('content'); ?>
    <div class="auth" id="auth">
        <section class="register_form">
            <div class="row">
                <div class="small-12 medium-7 medium-centered">
                    <h2 class="text-center"style="color: #000fff">Registration Form</h2>
                    <p>Please fill in this form to create an account.</p>
                    <?php echo $__env->make('includes.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <form action="/register" method="post">
                        <label for="fullname" class="fa fa-address-book icon" > FULL NAME</label>
                        <input type="text" name="fullname" placeholder="eg: John Doe"
                        value="<?php echo e(\App\Classes\Request::old('post', 'fullname')); ?>">
                        <label for="email" class="fa fa-envelope icon" > EMAIL ADDRESS</label>
                        <input type="text" name="email" placeholder="eg: youremail@example.com"
                               value="<?php echo e(\App\Classes\Request::old('post', 'email')); ?>">
                        <label for="username" class="fa fa-user-circle-o icon" > USERNAME</label>
                        <input type="text" name="username" placeholder="eg: username"
                               value="<?php echo e(\App\Classes\Request::old('post', 'username')); ?>">
                        <label for="password" class="fa fa-unlock-alt icon" > PASSWORD</label>
                        <input type="password" name="password" placeholder="eg: Password777">
                        <label for="address" class="fa fa-home icon" > ADDRESS</label>
                        <textarea name="address" placeholder="eg: Siem Reap, Cambodia"><?php echo e(\App\Classes\Request::old('post', 'username')); ?></textarea>
                        <input type="hidden" name="token" value="<?php echo e(\App\Classes\CSRFToken::_token()); ?>">
                        <button class="button float-right">Register</button>
                    </form>
                    <p>Already Registered? <a href="/login">Login Here</a> </p>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>