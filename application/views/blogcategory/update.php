<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <?php $this->load->view("dependencies/style");?>
</head>
<body>
<div class="container">
      <h1>Kategori Düzenle</h1>
        <div class="col-md-6 offset-md-3">
        <form action="<?php echo site_url('blogcategory/update');?>" method="post">
          <div class="form-group">
            <label>Kategori Adı</label>
            <input type="hidden" name="id" value="<?php echo $category->id ?>">
            <input type="text" class="form-control" value="<?php echo $category->title ?>" name="title" placeholder="Kategori Adı">
          </div>
          
          <input type="submit" name="categorySubmit" class="btn btn-primary" value="Kaydet">
        </form>
      </div>
    </div>
    <?php $this->load->view("dependencies/scripts");?>
</body>
</html>
