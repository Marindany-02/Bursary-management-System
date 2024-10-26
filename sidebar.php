<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div id="user-section">
                    <div><img src="images/avatar.png"></div>
                    <b><?php $name = ISSET($_SESSION['firstname']) ? $_SESSION['firstname']:"";echo $name?></b>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="home.php" style="color:#ffffff;font-weight:bold"><i class="fa fa-files-o fa-fw"></i> Bursaries</a>
            </li>
            <li>
                        <a href="usermanage.php" ><i class="fa fa-users fa-fw"></i> Users Management</a>
            </li>
            <li>
                <a href="applicants.php"><i class="fa fa-users fa-fw"></i> Applicants</a>
            </li>
            
            <li>
                <a href="sms.php"><i class="fa fa-send fa-fw"></i> SMS</a>
            </li>
            <li>
                    <a href="Reports.php"><i class="fa fa-files-o fa-fw"></i> Reports</a>
            </li>
            
            <li>
                <a href="#"><i class="fa fa-cog fa-fw"></i> Settings<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="adminAcc.php">Account</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                    
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>