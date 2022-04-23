<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php $this->load->view("dependencies/style"); ?>
</head>

<body>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Hoşgeldiniz <?php echo $user['first_name']; ?>!</th>
                    <th scope="col">İsim: </b><?php echo $user['first_name'] . ' ' . $user['last_name']; ?></th>
                    <th scope="col">E-mail: </b><?php echo $user['email']; ?></th>
                    <th scope="col "><button class="btn btn-danger" a href="<?php echo base_url('users/logout'); ?>" class="logout">Çıkış</button></th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="container">
    <form action="/Codeigniter/blog" method="post">
        <button class="btn btn-primary" type="submit">Yazılar</button>
    </form><br>
    <form action="/Codeigniter/blog/create" method="post">
        <button class="btn btn-primary" type="submit">Yazı Ekle</button>
    </form><br>   
    <form action="/Codeigniter/blogcategory" method="post">
        <button class="btn btn-primary" type="submit">Kategoriler</button>
    </form><br>
    <form action="/Codeigniter/blogcategory/create" method="post">
        <button class="btn btn-primary" type="submit">Kategori Ekle</button>
    </form>
    
    </div>
    </div>
    </div>

    <?php $this->load->view("dependencies/scripts"); ?>
</body>

</html>