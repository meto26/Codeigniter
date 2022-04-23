<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->load->view("dependencies/style");?>
</head>

<body>
  <div class="container"> 
    
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Kategori Adı</th>
          <th scope="col">Eylem</th>          
        </tr>
       
      </thead>
      <?php
      $count = 0;
      foreach ($categories->result() as $row) :
        $count++;
      ?>
        <tr>
          <th scope="row"><?php echo $count; ?></th>
          <td><?php echo $row->title; ?></td>
          <td>
            <a href="<?php echo site_url('blogcategory/delete/' . $row->id); ?>" class="btn btn-sm btn-danger">Sil</a>

            <a href="<?php echo site_url('blogcategory/update/' . $row->id); ?>" class="btn btn-sm btn-success">Düzenle</a>

          <td>
        </tr>
      <?php endforeach; ?>
      </tbody>
      
    </table>
    <form action="blogcategory/create" method="post">
      <button class="btn btn-primary" type="submit" >Ekle</button> 
    </form>

  </div>
  <?php $this->load->view("dependencies/scripts");?>

</body>

</html>