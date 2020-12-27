<header><h2><?php
// while($row = mysqli_fetch_array($data["sv"])){
//     echo $row["user_name"];
// }
$mangSV = json_decode($data["sv"]);
foreach($mangSV as $msv){
?>
<li class="list-group">
    <a href="#">
        <?php echo $msv->user_name ?>
    </a>
</li>
<?php    
}
?>
<a href="./Register">Register</a>
</h2></header>