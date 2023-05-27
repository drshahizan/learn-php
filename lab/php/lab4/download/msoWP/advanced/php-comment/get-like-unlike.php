<?php
require_once ("db.php");

$commentId = $_POST['comment_id'];
$totalLikes = "No ";
$likeQuery = "SELECT sum(like_unlike) AS likesCount FROM tbl_like_unlike WHERE comment_id=".$commentId;
$resultLikeQuery = mysqli_query($conn,$likeQuery);
$fetchLikes = mysqli_fetch_array($resultLikeQuery,MYSQLI_ASSOC);
if(isset($fetchLikes['likesCount'])) {
    $totalLikes = $fetchLikes['likesCount'];
}

echo $totalLikes;
?>