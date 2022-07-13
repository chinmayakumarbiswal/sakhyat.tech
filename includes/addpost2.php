<?php
$IAM_KEY = 'YOUR KEY';
$IAM_SECRET = 'YOUR SECRET KEY';
$bucket = 'YOUR BUCKET NAME';


require 'vendor/autoload.php';
use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

$s3 = new S3Client([
    'version' => 'latest',
    'region'  => 'ap-south-1',
    'credentials' => [
        'key' => $IAM_KEY,
        'secret' => $IAM_SECRET
    ]
]);




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

    try {
        // Upload data.
        $result = $s3->putObject([
            'Bucket' => $bucket,
            'Key'    => $image_name,
            'SourceFile' => $image_tmp,
            'ACL' => 'public-read'
        ]);
    
        // Print the URL to the object.
    } catch (S3Exception $e) {
        echo $e->getMessage() . PHP_EOL;
    }    
    
    if($result){
        $query="INSERT INTO images (post_id,image) VALUES('$post_id','$image_name')";
        $run=mysqli_query($db,$query);
    }

   // header('location:../adminlogin/index.php');
}

?>
