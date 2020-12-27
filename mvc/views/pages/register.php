<h2>Register</h2>

<form action="./Register/UserRegister" method="POST">
  <div class="mb-3">
    <label class="form-label">Username</label>
    <input type="text" class="form-control" name="username" id="username">
    <div id="messageUn"></div>
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" name="btn-register" class="btn btn-primary">Register</button>
</form>

<?php if(isset($data["result"])){
?>
<h3><?php 
if($data["result"] == "true"){
  echo "Đăng ký thành công";
}
else{
  echo "Đăng ký thất bại";
}
?></h3>
<?php
}

?>