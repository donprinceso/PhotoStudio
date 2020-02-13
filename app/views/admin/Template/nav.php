<nav class=" nav-wrapper indigo fixed">
    <a href="#" class="white-text brand-logo">Photo Studio</a>
    <ul id="mobile-nav" class=" hide-on-med-and-down right">
        <li><a href="<?php echo SITE_URL."/Dashboard/account" ?>">
            <!-- <?php if(!$_SESSION['email']){
                Redirect::to('dashboard/login');
            }else{
                echo $_SESSION['email'];
            } ?> -->
        </a></li>
        <li><a href="<?php echo SITE_URL."/dashboard/logout" ?>">Log out</a></li>
    </ul>
    <a href="#!" data-target="dropdown2" class=" dropdown-trigger sidenav-trigger right"><i class=" material-icons">menu</i></a>
    <a href="#!" data-target="sidenav-left" class=" sidenav-trigger left"><i class=" material-icons">menu</i></a>
    
</nav>
<ul class=" dropdown-content" id="dropdown2">
            <li><a href="">Account</a></li>
            <li><a href="">Log out</a></li>
</ul>
