<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel - <?php echo $__env->yieldContent('title'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/css/all.css" >
    <script src="https://use.fontawesome.com/c947a54df6.js"></script>
</head>
<body data-page-id="<?php echo $__env->yieldContent('data-page-id'); ?>">

    <?php echo $__env->make('includes.admin-sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="off-canvas-content admin_title_bar" data-off-canvas-content>
    <!-- Your page content lives here -->
    <div class="title-bar">
        <div class="title-bar-left">
            <button class="menu-icon hide-for-large" type="button" data-open="offCanvas"></button>
            <span class="title-bar-title"><img src="/images/alimeystore.jpg" alt="Rithya" title="Admin"></span>
        </div>
    </div>
    
    <?php echo $__env->yieldContent('content'); ?>
</div>

<script async src="/js/all.js"></script>
</body>
</html>

