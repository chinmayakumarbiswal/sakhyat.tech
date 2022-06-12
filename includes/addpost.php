<?php
require('database.php');
if(isset($_POST['addpost'])){
    $ptitle=mysqli_real_escape_string($db,$_POST['post_title']);
    $pcontent=mysqli_real_escape_string($db,$_POST['post_content']);
    $pcategory=$_POST['post_category'];
    $query="INSERT INTO posts (title,content,category_id) VALUES('$ptitle','$pcontent',$pcategory)";
    $run=mysqli_query($db,$query);

    $post_id=mysqli_insert_id($db);
    $image_name=$_FILES['post_image']['name'];
    $image_tmp=$_FILES['post_image']['tmp_name'];

    echo $image_name;
    echo $image_tmp;

    if(move_uploaded_file($image_tmp,"../images/$image_name")){
        $query="INSERT INTO images (post_id,image) VALUES('$post_id','$image_name')";
        $run=mysqli_query($db,$query);
    }

    header('location:../adminlogin/index.php');
}

?>