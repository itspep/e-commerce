<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!--bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
     rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
     crossorigin="anonymous">
     <!--font awsome link-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!--css file-->
     <link href="../style.css" rel="stylesheet">
     <style>
        .admin_image{
    width: 100px;
    object-fit: contain; 
}
        .footer{
            position: absolute;
            bottom: 0;
        }
     </style>
</head>
<body>
    <!--navbar-->
    <div class="container-fluid"></div>
        <!--first child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/logo.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
        <!--second child-->
        <div class="bg-light p-2">
            <h3 class="text-center">Manage Details</h3>
        </div>
        <!--third child-->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-3">
                    <a href="#"><img src="../images/vegetables.png" alt="" class="admin_image"></a>
                    <p class="text-light text-center">Pep</p>
                </div>
                <div class="button text-center">
                    <button><a href="" class="nav-link text-light bg-info m-1 p-1">Insert Products</a></button>
                    <button><a href="" class="nav-link text-light bg-info m-1 p-1">View Products</a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-info m-1 p-1">Insert Categories</a></button>
                    <button><a href="" class="nav-link text-light bg-info m-1 p-1">View Categories</a></button>
                    <button><a href="index.php?insert_brand" class="nav-link text-light bg-info m-1 p-1">Insert Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info m-1 p-1">View Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info m-1 p-1">All Orders</a></button>
                    <button><a href="" class="nav-link text-light bg-info m-1 p-1">All payments</a></button>
                    <button><a href="" class="nav-link text-light bg-info m-1 p-1">List Users</a></button>
                    <button><a href="" class="nav-link text-light bg-info m-1 p-1">Log Out</a></button>
                </div>
            </div>
        </div>
</div>



<!--fourth child-->
<div class="container my-3">
    <?php
    if(isset($_GET['insert_category'])){
        include('insert_categories.php');
    }
    if(isset($_GET['insert_brand'])){
        include('insert_brands.php');
    }
    ?>
</div>

<!--footer-->
<div class="bg-info p-3 text-center footer">
    <p>All rights reserved &copy; Designed by Pep-<script>document.write(new Date().getFullYear());</script></p>
</div>
    </div>

 <!--bootstrap js link-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
    crossorigin="anonymous"></script>
</body>
</html>