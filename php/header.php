
<body>
    <div id="wrapper">
        
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div text-center">
                            <img src="img/admin-p.png" class="img" />
                            <h5 style="color:white;"><?php echo $_SESSION['rainbow_name'];?></h5>
                        </div>

                    </li>


                    <li>
                        <a class="<?php if($page=='dashboard'){ echo 'active-menu';}?>" href="index.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
					
					 <li>
                        <a class="<?php if($page=='student'){ echo 'active-menu';}?>" href="student.php"><i class="fa fa-users "></i>Customers Management</a>
                    </li>

                    <li>
                        <a class="<?php if($page=='inact'){ echo 'active-menu';}?>" href="inactivestd.php"><i class="fa fa-toggle-off "></i>In-Active Customers</a>
                    </li>

                    <li>
                        <a class="<?php if($page=='grade'){ echo 'active-menu';}?>" href="grade.php"><i class="fa fa-th-large"></i>Actions</a>
                    </li>
                    
					<li>
                        <a class="<?php if($page=='fees'){ echo 'active-menu';}?>" href="fees.php"><i class="fa fa-money "></i>Payment Section</a>
                    </li>
					 <li>
                        <a class="<?php if($page=='report'){ echo 'active-menu';}?>" href="report.php"><i class="fa fa-file-pdf-o "></i>Report Section</a>
                    </li>
					
					 
					
					<li>
                        <a class="<?php if($page=='setting'){ echo 'active-menu';}?>" href="setting.php"><i class="fa fa-cogs "></i>Account Setting</a>
                    </li>
					
					 <li>
                        <a href="logout.php"><i class="fa fa-power-off "></i>Logout</a>
                    </li>
					
			
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->