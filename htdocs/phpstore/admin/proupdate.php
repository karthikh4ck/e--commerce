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
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-sm-3">
                </div>

                <div class="col-sm-6">
                    <form role="form" action="proupdatehandler.php" method="post" enctype="multipart/form-data">
                        
                        <?php
                            $newid=$_GET['up_id'];

                            include ('../partials/connect.php');

                            $sql="SELECT id,name,price,picture,description,cat_id FROM PRODUCTS WHERE id='$newid'";

                            $results=$connect->query($sql);
                            $final=$results->fetch_assoc();

                        ?>
                        
                        
                        <h1>Products</h1>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" placeholder="Enter Product Name"
                                value="<?php 
                                    echo $final['name'];
                                ?>
                                "
                                 id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" placeholder="Price" id="price"
                                value="<?php 
                                    echo $final['price'];
                                ?>
                                "
                                 name="price">
                            </div>
                            <div class="form-group">
                                <label for="picture">File Input</label>
                                <input type="file" id="picture" 
                                value="<?php 
                                    echo $final['picture'];
                                ?>
                                "
                                 name="file">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" rows="10"  
                                
                                 id="description" name="description">
                                 <?php 
                                    echo $final['description'];
                                ?>
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select  id="category" name="category"
                                value="<?php 
                                    echo $final['cat_id'];
                                ?>
                                ">
                                    <?php
                                    include("../partials/connect.php");
                                    $cat="SELECT * FROM  categories";
                                    $results=mysqli_query($connect,$cat);
                                    while($row=mysqli_fetch_assoc($results)){
                                        echo "<option value=".$row['ID'].">".$row['NAME']."</option>";
                                        // echo "<option>test</option>";
                                    }

                                    
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div>
                            <input type="hidden" name="form_id" value="<?php 
                                    echo $final['id'];
                                ?>
                                "
                                >
                            <button type="submit" class="btn btn-primary" name="update">Update</button>
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
