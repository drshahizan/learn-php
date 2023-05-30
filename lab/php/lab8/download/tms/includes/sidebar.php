        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-virus"></i>
                </div>
                <div class="sidebar-brand-text mx-3">COVID19-TMS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
<?php if($_SESSION['aid']):?>


     <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

    <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Phlebotomist</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="add-phlebotomist.php">Add</a>
                         <a class="collapse-item" href="manage-phlebotomist.php">Manage</a>
                    </div>
                </div>
            </li>


     <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-virus"></i>
                    <span>Testing</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="new-test.php">New</a>
                        <a class="collapse-item" href="assigned-test.php">Assigned</a>
                        <a class="collapse-item" href="ontheway-samplecollection-test.php">On the Way for<br /> Sample Collection</a>
                         <a class="collapse-item" href="sample-collected-test.php">Sample Collected</a>
                           <a class="collapse-item" href="samplesent-lab-test.php">Sent to lab</a>
                            <a class="collapse-item" href="reportdelivered-test.php">Report Delivered</a>
 <a class="collapse-item" href="all-test.php">All Tests</a>
                    </div>
                </div>
            </li>
   <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseThree">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Report</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="bwdates-report-ds.php">B/w Dates Report</a>
                         <a class="collapse-item" href="search-report.php">Search Report</a>
                        </div>
                </div>
            </li>

<?php else:    ?>          
         
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="live-test-updates.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                COVID19 Testing
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Testing</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="new-user-testing.php">New User</a>
                        <a class="collapse-item" href="registered-user-testing.php">Registered User</a>
                    </div>
                </div>
            </li>
 <li class="nav-item">
                <a class="nav-link" href="patient-search-report.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Test Report</span></a>
            </li>
         
<li class="nav-item active">
                <a class="nav-link" href="login.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Admin</span></a>
            </li>

<?php endif;    ?>          

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->