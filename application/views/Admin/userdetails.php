<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="<?php echo base_url('Admin_assests/css/style.css'); ?>" />
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>

    </head>
    <body>

        <!--wrapper start-->
        <div class="wrapper">


            <!--header menu start-->
            <?php include ('topbar.php'); ?>
            <!--header menu end-->



            <!--sidebar start-->
           <?php include ('sidebar.php'); ?>
            <!--sidebar end-->


            <!--main container start-->
            <div class="main-container">
                <div class="card">

                     <center >
                     <table border="1" style="width: 100%;text-align: center; ">
                <caption style="padding-bottom: 20px"><strong>User Record List</strong></caption>
                    <tr>
                       <th style="text-align: center;">User Id</th>
                       <th style="text-align: center;">User Name</th>
                        
                        <th style="text-align: center;">User Email Id</th>
                          <th style="text-align: center;">User Address</th>
                        <th style="text-align: center;">User Phone Number</th>
                        <!-- <th style="text-align: center;">Profile Photo</th> -->
                        <!-- <th style="text-align: center;" colspan="2">Action</th> -->
                        <th style="text-align: center;">Action</th>
                    </tr>
                
                            <tbody>
                                <?php
                                     foreach($data as $row)
                                    {?>
                                     <tr>
                                        <td><?php echo $row->id ?></td>
                                        <td><?php echo $row->user_name ?></td>
                                        
                                        <td><?php echo $row->user_email ?></td>
                                        <td><?php echo $row->user_address ?></td>
                                        <td><?php echo $row->user_phone ?></td>
                                        <?php  
                                         if($row->block==0)
                                         {?>
                                            <td style="background-color: green"><a href="<?php echo base_url('Admin_dash/BlockUser')?>?id=<?php echo $row->id ?>"><strong>BLOCK</strong></a></td>

                                        <?php }
                                          else
                                          {?>
                                            <td style="background-color:red"><a href="<?php echo base_url('Admin_dash/UnBlockUser')?>?id=<?php echo $row->id ?>"><strong>BLOCKED</strong></a></td>

                                          <?php
                                      } ?>

                                        
                                        <!-- <td> <img src ="<?php echo $row->admin_file ?>"style="height: 60px;width: 60px;"></td> -->
                                        <!-- <td><a href="updaterecord?id=<?php echo $row->admin_id ?>">Edit</a></td> -->
                                        
                                    </tr>   
                                <?php }
                                     ?> 
                            </tbody>
                    </table>
                </center>
                    
                </div>
                
            </div>
            <!--main container end-->
        </div>
        <!--wrapper end-->

       <!-- javascript file****** -->
        <script src="<?php echo base_url('Admin_assests/javascript/main.js'); ?>"></script>

    </body>
</html>
                           