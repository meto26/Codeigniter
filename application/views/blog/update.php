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
        <h1>Blog Düzenle</h1>
          <div class="col-md-6 offset-md-3">
          <form action="<?php echo site_url('blog/update');?>" method="post">
          <input type="hidden" name="id" value="<?php echo $blog->id ?>">
            <div class="form-group">
              <label>Başlık</label>
              <input type="text" class="form-control" value="<?php echo $blog->title; ?>" name="title" placeholder="Başlık">
            </div>
            <div class="form-group">
              <label>İçerik</label>
              <textarea name="text"  class="form-control" cols="30" rows="10"><?php echo $blog->text; ?></textarea>
            </div>
        
            <div class="form-group">
            <label>Kategori</label>
            <?php  foreach ($categories->result() as $row) :  ?>
              <div class="radio">
                <label><input type="radio" name="category_id" <?php if($blog->category_id == $row->id): echo 'checked'; endif;  ?> value="<?php echo $row->id;?>"><?php echo $row->title;?></label>
              </div>
              <?php endforeach;?>
            </div>
            <input type="submit" name="blogSubmit" class="btn btn-primary" value="Kaydet">
          </form>
        </div>
      </div>
      <?php $this->load->view("dependencies/scripts");?>
</body>
</html>