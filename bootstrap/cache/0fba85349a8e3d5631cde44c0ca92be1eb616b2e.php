<?php $__env->startSection('title', 'Homepage'); ?>
<?php $__env->startSection('data-page-id', 'home'); ?>

<?php $__env->startSection('content'); ?>
    <br><br><br>
    <div class="h1 text-center">
        <p><strong>ABOUT US</strong></p>
        </div>
        <div class="small text-center">
            <p><small> is your only trusted company to buy products from, every purchases from us is a big saving.</small></p>
            <img src="/images/sliders/slide_1.jpg" alt="Alimey Store">
        </div>

    <div class="h1 text-center">
        <p>SERVICES</p>
        </div>
        <div class="small text-center">
             <p>Alimey also providing derlivery services overseas.</p>
            <img src="/images/sliders/slide_3.jpg" alt="Alimey Store">
        </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>