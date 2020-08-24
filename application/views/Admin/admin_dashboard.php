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
                    <center><p>Admin Dashborad</p></center>
                </div>
               
            </div>
            <!--main container end-->


        </div>
        <!--wrapper end-->


        <!-- javascript file****** -->
        <script src="<?php echo base_url('Admin_assests/javascript/main.js'); ?>"></script>

        

    </body>
</html>
                           