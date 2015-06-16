<?php include('includes/header.php'); ?>
	<form role="form"  enctype="multipart/form-data" method="post" action="register.php">    
    <div class="form-group">
        <label for="name">Name*</label>
        <input name="name" type="text" class="form-control" placeholder="Enter name!">
    </div>
    <div class="form-group">
        <label for="email">Email*</label>
        <input name="email" type="email" class="form-control" placeholder="Enter email!">
    </div>    
    <div class="form-group">
        <label for="username">Choose username*</label>
        <input name="username" type="text" class="form-control" placeholder="Enter username!">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input name="password" type="password" class="form-control" placeholder="Enter password!">
    </div>
    <div class="form-group">
        <label for="password2">Confirm password</label>
        <input name="password2" type="password" class="form-control" placeholder="Re-enter password!">
    </div>        
    <div class="form-group">
        <label for="password2">Upload Avatar</label>
        <input name="avatar" type="file" class="form-control" placeholder="Re-enter password!">
        <p class="help-block"></p>
    </div>        
    <div class="form-group">
        <label for="about">About me</label>
        <textarea class="form-control" name="about" id="about" cols="80" rows="10" placeholder="Tell us about yourself"></textarea>
        <script>
            CKEDITOR.replace( 'about' );
        </script>
    </div>        
    <div class="form-group">
        <input class="btn btn-success" name="register" type="submit" value="Register">
        <input class="btn btn-warning" name="warning" type="submit" value="Cancel">
        <input class="btn btn-danger" name="danger" type="submit" value="Return">
    </div>
</form>
<?php include('includes/footer.php'); ?>