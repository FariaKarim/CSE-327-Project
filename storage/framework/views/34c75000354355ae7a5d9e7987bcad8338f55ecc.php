<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            
            <?php if(Auth::user()->hasRole('brta')): ?>
            <li class="header">BRTA</li>
              <li class="treeview">
          <a href="#">
            <i class="fa fa-car"></i> <span>Vehicles</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo e(route('regVehicles')); ?>"><i class="fa fa-circle-o"></i>Registered</a></li>
            <li><a href="<?php echo e(route('vehicles')); ?>"><i class="fa fa-circle-o"></i>Unregistered</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Drivers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo e(route('regDrivers')); ?>"><i class="fa fa-circle-o"></i>Registered</a></li>
            <li><a href="<?php echo e(route('drivers')); ?>"><i class="fa fa-circle-o"></i>Unregistered</a></li>
          </ul>
        </li>
            
           
            <li class="treeview">
                <a href="#"><i class='fa fa-cog'></i> <span>Settings</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo e(route('deactivate.user')); ?>">Deactivate User</a></li>
                    <li><a href="<?php echo e(route('assign.role')); ?>">Assign Role to User</a></li>
                   
                </ul> 
            </li>
           
          
            <?php endif; ?>

            
            <?php if(Auth::user()->hasRole('user')): ?>
            
            <?php endif; ?>

            
            <?php if(Auth::user()->hasRole('malik')): ?>
            <li class="header">VEHICLE OWNER</li>
            <li><a href="<?php echo e(route('all.vehicles')); ?>"><i class="fa fa-car"></i>All Vehicles</a></li>
            <li><a href="<?php echo e(route('RVehicles')); ?>"><i class="fa fa-calendar"></i>Daily Registered Vehicles</a></li>
            <?php endif; ?>

            
            <?php if(Auth::user()->hasRole('driver')): ?>
            <li class="header">DRIVER</li>
            <li><a href="<?php echo e(route('dInfo')); ?>"><i class="fa fa-book"></i> <span>Driver Section</span></a></li>
            <?php endif; ?>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
