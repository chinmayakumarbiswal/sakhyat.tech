<?php
    function getCategory($db,$id)
    {
        $query="SELECT * FROM category WHERE id=$id";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data['name'];
    }


    function getImagesByPost($db,$post_id){
        $query="SELECT * FROM images WHERE post_id=$post_id";
        $run=mysqli_query($db,$query);
        $data=mysqli_fetch_assoc($run);
        return $data['image'];
    }
?>