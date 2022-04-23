<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>
  <?php $this->load->view("dependencies/style");?>
</head>
<body>
<div class="container">
        <h1></h1>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Başlık</th>
            <th scope="col">Kategori Adı</th>
            <th scope="col">Ekleyen</th>
            <th scope="col">Eylem</th>
          </tr>
        </thead>
        <?php
          $count = 0;
          foreach ($blogs->result() as $row) :
            $count++;
        ?>
          <tr>
            <th scope="row"><?php echo $count;?></th>
            <td><?php echo $row->title;?></td>
            <td><?php echo $row->category_title;?></td>
            <td><?php echo $row->author_firstname.' '.$row->author_lastname;?></td>
            <td>
              <a href="<?php echo site_url('blog/update/'.$row->id);?>" class="btn btn-sm btn-primary">Düzenle</a>
              <a href="<?php echo site_url('blog/delete/'.$row->id);?>" class="btn btn-sm btn-danger">Sil</a>    
            <td>
          </tr>
        <?php endforeach;?>
        </tbody>
      </table>
      <form action="blog/create" method="post">
      <button class="btn btn-primary" type="submit" >Ekle</button> 
    </form>
 
    </div>
    <?php $this->load->view("dependencies/scripts");?>
  
</body>
</html>
