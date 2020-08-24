<div class="sidebar">
                <div class="sidebar-menu">
                    <center class="profile">
                        <img src="<?php echo $_SESSION['admin_file'] ;?>" alt=''>
                        <p><?php echo $_SESSION['admin_name'] ?></p>
                    </center>
                    <li class="item">
                        <a href="<?php echo base_url('Admin_dash/admindashboard')  ?>" class="menu-btn">
                            <i class="fas fa-desktop"></i><span>Dashboard</span>
                        </a>
                    </li>


                    <!-- collapseble button -->


                    <li class="item" id="profile">
                          <button class="collapsible menu-btn"><i class="fas fa-user-circle"></i><span>Admin Profile</span></button>
                        <div class="content sub-menu">
                            
                            <a href="<?php echo base_url('Admin_dash/viewrecordofadmin') ?>"><i class="fas fa-address-card"></i><span>Admin Info</span></a>
                        </div>
                    </li>    

                    <li class="item" id="user-details">
                          <button class="collapsible menu-btn"><i class="fas fa-user-circle"></i><span>User Details</span></button>
                        <div class="content sub-menu">
                            
                            <a href="<?php echo base_url('Admin_dash/displayrecordofuser') ?>"><i class="fas fa-address-card"></i><span>User Info</span></a>
                        </div>
                    </li>  

                    <li class="item" id='products' >
                         <button class="collapsible menu-btn" ><i class="fas fa-utensils"></i><span>Prodcuts</span></button>
                   <div class="content sub-menu">
                            <a href="#"><i class="fas fa-image"></i><span>Products Add</span></a>
                            <a href="#"><i class="fas fa-image"></i><span>Products Details</span></a>
                                   
                   </div>
                    </li>

                    <li class="item" id="orders">
                          <button class="collapsible menu-btn"><i class="fas fa-user-circle"></i><span>Orders</span></button>
                        <div class="content sub-menu">
                            
                            <a href="#"><i class="fas fa-address-card"></i><span>Order Details</span></a>
                        </div>
                    </li>
                    <li class="item" id="messages">
                       <button class="collapsible menu-btn"><i class="fas fa-envelope"></i><span>Messages</span></button>   
                        
                        <div class="content sub-menu">
                            <a href="<?php echo base_url('/#messages');?>"><i class="fas fa-envelope"></i><span>New</span></a>
                            <a href="#"><i class="fas fa-envelope-square"></i><span>Sent</span></a>
                            <a href="#"><i class="fas fa-exclamation-circle"></i><span>Spam</span></a>
                        </div>
                    </li>


                    <li class="item" id="settings">
                        
                            <button class="collapsible menu-btn"><i class="fas fa-cog"></i><span>Settings</span></button>
                    
                        <div class="content sub-menu">
                            <a href="#"><i class="fas fa-lock"></i><span>Password</span></a>
                            
                        </div>
                    </li>

                    <li class="item">
                        <a href="#" class="menu-btn">
                            <i class="fas fa-info-circle"></i><span>About</span>
                        </a>
                    </li>
                </div>
            </div>