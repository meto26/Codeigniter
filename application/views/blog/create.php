<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php $this->load->view("dependencies/style");?>
</head>
<body>
  
  <div class="container">
        <h1>Blog Ekle</h1>        
          <div class="col-md-6 offset-md-3">
          <form action="<?php echo site_url('blog/save');?>" method="post">
            <div class="form-group">
              <label>Başlık</label>
              <input type="text" class="form-control" name="title" placeholder="Başlık">
            </div>
            <div class="form-group">
              <label>İçerik</label>
              <textarea name="text"  class="form-control" cols="30" rows="10"></textarea>
            </div>
        
            <div class="form-group">
            <label>Kategori</label>
            <?php  foreach ($categories->result() as $row) :  ?>
              <div class="radio">
                <label><input type="radio" name="category_id" value="<?php echo $row->id;?>"><?php echo $row->title;?></label>
              </div>
              <?php endforeach;?>
            </div>
            <button type="submit" class="btn btn-primary">Ekle</button>
          </form>
        </div>
      </div>
      <?php $this->load->view("dependencies/scripts");?>
</body>
</html>