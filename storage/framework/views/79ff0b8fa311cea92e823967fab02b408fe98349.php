 <!-- sidebar menu -->
 <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
            <h3>General</h3>
            <ul class="nav side-menu">
            <li><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa fa-home"></i> Dashboard <span class="fa fa-chevron-down"></span></a>
            
            </li>
            
            <li class="active"><a><i class="fa fa-home"></i> Category Manager <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: block;">
                      <li ><a href="<?php echo e(route('category.list')); ?>">List</a></li>
                      
                      <li><a href="<?php echo e(route('category.create')); ?>">Create</a></li>
                    </ul>
                  </li>
        </div>
       
         <!-- /menu footer buttons -->
         <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo e(route('admin.logout')); ?>">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                    </div>
                    <!-- /menu footer buttons -->
            </div>
        </div>
        

    </div>
    <!-- /sidebar menu -->
<?php /**PATH D:\laravelEcommerce\demo\resources\views/admin/Layout/sidebar.blade.php ENDPATH**/ ?>