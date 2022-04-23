<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->load->view("dependencies/style");?>
</head>
<body>
<div class="text-center">
    <h2 class="h3 mb-3 font-weight-normal">Yeni Hesap Oluşturunuz</h2>    
    <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>    
    <div class="regisFrm mt-5">
        <form action="" method="post" style="max-width:300px;margin:auto">
            <div class="form-group">
                <input type="text" name="first_name" placeholder="Adınız" class="form-control" value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" required>
                <?php echo form_error('first_name','<p class="help-block">','</p>'); ?>
            </div>
            <div class="form-group">
                <input type="text" name="last_name" placeholder="Soy Adınız" class="form-control" value="<?php echo !empty($user['last_name'])?$user['last_name']:''; ?>" required>
                <?php echo form_error('last_name','<p class="help-block">','</p>'); ?>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" class="form-control" value="<?php echo !empty($user['email'])?$user['email']:''; ?>" required>
                <?php echo form_error('email','<p class="help-block">','</p>'); ?>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Şifre" class="form-control" required>
                <?php echo form_error('password','<p class="help-block">','</p>'); ?>
            </div>
            <div class="form-group">
                <input type="password" name="conf_password" placeholder="Tekrar şifre" class="form-control" required>
                <?php echo form_error('conf_password','<p class="help-block">','</p>'); ?>
            </div>
      
      
            <div class="send-button btn btn-lg btn-primary btn-block">
                <input type="submit" name="signupSubmit" value="Hesap Oluştur">
            </div>
        </form>
        <p>Hesabınız var mı?<a href="<?php echo base_url('users/login'); ?>">Giriş Yapınız</a></p>
    </div>
</div>
    <?php $this->load->view("dependencies/scripts");?>   
</body>
</html>
