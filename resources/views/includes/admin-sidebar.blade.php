<!-- Side bar -->
<div class="off-canvas position-left reveal-for-large nav" id="offCanvas" data-off-canvas>
    
    <h3> Welcome Admin </h3>
    
    <div class="image-holder text-center">
        <img src="/images/rithya2.jpg" alt="Rithya" title="Admin">
        <p>{{ user()->fullname }}</p>
    </div>
    
       <ul class="vertical menu">
        <li><a href="/admin"><i class="fa fa-area-chart fa-fw" aria-hidden="true"></i>&nbsp; Dashboard</a></li>
        <li><a href="/users"><i class="fa fa-users fa-fw" aria-hidden="true"></i>&nbsp; Users</a></li>
        <li><a href="/admin/product/create"><i class="fa fa-plus fa-fw" aria-hidden="true"></i>&nbsp; Add Product</a></li>
        <li><a href="/admin/products"><i class="fa fa-tasks fa-fw" aria-hidden="true"></i>&nbsp; Manage Products</a></li>
        <li><a href="/admin/product/categories"><i class="fa fa-folder-open fa-fw" aria-hidden="true"></i> &nbsp;Categories</a></li>
        <li><a href="/admin/transactions/orders"><i class="fa fa-cart-arrow-down fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;Orders</a></li>
        <li><a href="/admin/transactions/payments"><i class="fa fa-dollar fa-fw" aria-hidden="true"></i>&nbsp; Payments</a></li>
        <li><a href="/logout"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>&nbsp; Logout</a></li>
    </ul>
   
</div>
<!-- end Side bar -->
