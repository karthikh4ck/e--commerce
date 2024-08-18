<!DOCTYPE html>
<html>
<?php
include ("adminpartials/session.php");
include ("adminpartials/head.php");
?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php
    include ("adminpartials/header.php");
    include ("adminpartials/aside.php");
    ?>

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control Panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home </a> </li>
                <li class="active">Categories</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-sm-3">
                </div>

                <div class="col-sm-6">
                    <form role="form" action="cathandler.php" method="post" enctype="multipart/form-data">
                        <h1>Categories</h1>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" placeholder="Enter Category Name" id="name" name="name">
                            </div>
                            
                        <div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>
                    <div class="col-sm-3">
                    </div>
                </div>
            </section>
        </div>
                <?php
                    include ("adminpartials/footer.php");
                ?>
    </body>


</html>
