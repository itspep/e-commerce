<?php
include('../includes/connect.php');
if(isset($_POST['insert_cat'])){
    $category_title=$_POST['cat_title'];

    //query to select data from the database
    $select_query="SELECT * FROM categories WHERE category_title='$category_title'";
    $select_result=mysqli_query($conn, $select_query);
    $number=mysqli_num_rows($select_result);
    if($number>0){
        echo "<script>alert('This category is present inside the database')</script>";
    }else{
    $insert_query="INSERT INTO categories (category_title) VALUES ('$category_title')";
    $result=mysqli_query($conn, $insert_query);
    if($result){
        echo "<script>alert('category has been inserted successfully!')</script>";
}
}}
?>
<h2 class="text-center">Insert Categories</h2>

<form action=""method="post" class="mb-2">
<div class="input-group mb-2 w-90">
    <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
    <input type="text" class="form-control" name="cat_title" placeholder="Insert Categories"
    aria-label="Categories" aria-describedby="basic-addon1">
    
</div>

<div class="input-group w-10 mb-2 m-auto">
    <input type="submit" class=" border-0 p-2 m-auto bg-info" name="insert_cat" 
    value="Insert Categories">
</div>
</form>