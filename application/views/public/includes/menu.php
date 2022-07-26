<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><?php echo $title; ?></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <!--
            <li><a href="#">Page 1</a></li>
            <li><a href="#">Page 2</a></li>
            -->
        </ul>
        <ul class="nav navbar-nav navbar-right">
            
            <?php if ($admin_link): ?>
            <li><a href="<?php echo site_url('admin'); ?>"><span class="glyphicon glyphicon-cog"></span> Admin</a></li>            
            <?php endif; ?>

            <?php if ($logout_link): ?>            
            <li><a href="<?php echo site_url('auth/logout/public'); ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            
            <?php else: ?>
            <li><a href="<?php echo site_url('auth/login'); ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <?php endif; ?>

        </ul> 
    </div>
</nav>