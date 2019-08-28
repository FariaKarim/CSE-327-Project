<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="<?php echo e(url('/dashboard')); ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>RoadFox</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>RoadFox</b> </span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                
                <li class="dropdown">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">Form</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo e(route('driver.licence')); ?>">Driver Licence</a></li>
                        <li><a href="<?php echo e(route('vehicle.registration')); ?>">Vehicle Registration</a></li>
                    </ul>
                </li>
                <?php if(Auth::guest()): ?>
                    <li><a href="<?php echo e(url('/login')); ?>"><?php echo e(trans('adminlte_lang::message.login')); ?></a></li>
                <?php else: ?>
                    <li><a href="<?php echo e(url('/logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a></li>
                    <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="GET" style="display: none;">                        
                        <?php echo e(csrf_field()); ?>

                        <input type="submit" value="logout" style="display: none;">
                    </form>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header>

