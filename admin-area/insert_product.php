<?php
include('../includes/connect.php');
if(isset($_POST['insert_product'])){
    $product_title=$_POST['product_title'];
    $product_description=$_POST['product_description'];
    $product_keywords=$_POST['product_keywords'];
    $product_category=$_POST['product_categories'];
    $product_brands=$_POST['product_brands'];
    $product_price=$_POST['product_price'];
    //accessing images
    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    $product_image3=$_FILES['product_image3']['name'];
    //accessing image tmp name
    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];
    $temp_image3=$_FILES['product_image3']['tmp_name'];
    $product_status='true';

    //checking empty conditions
    if($product_title=="" or $product_description=="" or $product_keywords==""
     or $product_category=="" or $product_brands=="" or $product_price=="" or $product_image1==""
     or $product_image2=="" or $product_image3==""){
        echo "<script>alert('please fill all available fields')</script>";
        exit();
     }else{
        move_uploaded_file($temp_image1,"product_images/$product_image1");
        move_uploaded_file($temp_image2,"product_images/$product_image2");
        move_uploaded_file($temp_image3,"product_images/$product_image3");

        //insert query
        $insert_query="INSERT INTO products(product_title, product_description, product_keywords, category_id,
        brand_id, product_image1, product_image2, product_image3, product_price, date, status) 
        VALUES('$product_title', '$product_description', '$product_keywords', '$product_category', '$product_brands',
        '$product_image1', '$product_image2', '$product_image3', '$product_price', NOW(), '$product_status')";
        $result_query=mysqli_query($conn, $insert_query);
        if($result_query){
            echo "<script>alert('Successfully inserted the products')</script>";
        }
     }
     //product price
    
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin Dashboard</title>
     <!--bootsrap css link-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
     rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
     crossorigin="anonymous">
    <!--font awsome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--css file-->
    <link href="style.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class=text-center>Insert Products</h1>
        <!--form-->
        <form action="" method="post" enctype="multipart/form-data">
            <!--title-->
            <div class="form-outlne mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" 
                placeholder="Enter product title" required autocomplete="off">
            </div>
            <!--description-->
            <div class="form-outlne mb-4 w-50 m-auto">
                <label for="product_description" class="form-label">Product description</label>
                <input type="text" name="product_description" id="product_description" class="form-control" 
                placeholder="Enter product description" required autocomplete="off">
            </div>
             <!--keywords-->
             <div class="form-outlne mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Product keywords</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control" 
                placeholder="Enter product keywords" required autocomplete="off">
            </div>
            <!--categories-->
             <div class="form-outlne mb-4 w-50 m-auto">
                <select name="product_categories" id="" class="form-select">
                    <option value="">Select a Category</option>
                    <?php
                        $select_query="select * from categories";
                        $result_query=mysqli_query($conn, $select_query);
                        while($row=mysqli_fetch_assoc($result_query)){
                            $category_title=$row['category_title'];
                            $category_id=$row['category_id'];
                            echo "<option value='$category_id'>$category_title</option>";
                        }

?>
                </select>
            </div>
            <!--brands-->
            <div class="form-outlne mb-4 w-50 m-auto">
                <select name="product_brands" id="" class="form-select">
                    <option value="">Select a Brand</option>
                    <?php
                        $select_query="select * from brands";
                        $result_query=mysqli_query($conn, $select_query);
                        while($row=mysqli_fetch_assoc($result_query)){
                            $brand_title=$row['brand_title'];
                            $brand_id=$row['brand_id'];
                            echo "<option value='$brand_id'>$brand_title</option>";
                        }

?>
                </select>
            </div>
               <!--image 1-->
               <div class="form-outlne mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control">
            </div>
                 <!--image 2-->
                 <div class="form-outlne mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product image 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control">
            </div>
                 <!--image 3-->
                 <div class="form-outlne mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Product image 3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control">
            </div>
                <!--price-->
                <div class="form-outlne mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" 
                placeholder="Enter product price" required autocomplete="off">
            </div>
             <!--submit button-->
             <div class="form-outlne mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Product" >
            </div>
        </form>
    </div>
    
</body>
</html>