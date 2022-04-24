<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->load->view("dependencies/style");?>
</head>
<body>
<div class="text-center">
    <h2 class="h3 mb-3 font-weight-normal">Hesabınıza Giriş Yapınız</h2>    
    <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>
    <style>
        input[type=email]{
            border-bottom-left-radius:5px ;
            border-bottom-right-radius:5px ;
        }
        input[type=submit] {
                       
            background: none;
            border: 0;
        }
    </style>
	
    
    <div class="regisFrm mt-5">
        <form action="" method="post" style="max-width:300px;margin:auto">
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" class="form-control" required="">
                <?php echo form_error('email','<p class="help-block">','</p>'); ?>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Şİfre" class="form-control" required="">
                <?php echo form_error('password','<p class="help-block">','</p>'); ?>
            </div><br>
            <div class="send-button btn btn-lg btn-primary btn-block">
                <input type="submit" name="loginSubmit"  value="Giriş Yapınız" >
            </div>           
        </form>
        <p>Hesabınız yok mu?<a href="<?php echo base_url('users/registration'); ?>">Kayıt Ol</a></p>
    </div>
</div>
    <?php $this->load->view("dependencies/scripts");?>
</body>
</html>
