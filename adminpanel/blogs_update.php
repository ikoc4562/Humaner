<?php
include 'header.php';
include 'yanmenu.php';
?>
<?php

$sql=$db->prepare ('select * from blogs where id=:id');
$sql->execute(['id'=>$_GET['id']]);
$events=$sql->fetchAll();

if (@$_POST['isGuncelle'])
{
    if (@$_FILES['fotograf']['name']<>'')
    {
        $hedef = "../images/";
        $kaynak1 = $_FILES["fotograf"]["tmp_name"];
        $resim1 = $_FILES["fotograf"]["name"];
        $rtipi1 = $_FILES["fotograf"]["type"];
        $rboyut1 = $_FILES["fotograf"]["size"];
        $ruzanti1 	= substr($resim1, -4);
        $yeniad1	= substr(uniqid(md5(rand())), 0,15);
        $resim = $yeniad1.'.'.$ruzanti1;
        @move_uploaded_file($kaynak1, $hedef . '/' . $resim);
        $sql=$db->prepare('update blogs set title=:title,author=:author,is_deleted=:is_deleted,picture=:resim,date=:dates,tags=:tags,text=:text where id=:id');
        $sql->execute(['title'=>$_POST['title'],'is_deleted'=>0,'id'=>$_GET['id'],'resim'=>$resim ,'author'=>$_POST['author'],'dates'=>$_POST['dates'],'tags'=>$_POST['tags'],'text'=>$_POST['text']]);

    }
    else
    {
        $sql=$db->prepare('update blogs set title=:title,author=:author,date=:dates,is_deleted=:is_deleted,tags=:tags,text=:text where id=:id');
        $sql->execute(['title'=>$_POST['title'],'id'=>$_GET['id'],'is_deleted'=>0,'author'=>$_POST['author'],'dates'=>$_POST['dates'],'tags'=>$_POST['tags'],'text'=>$_POST['text']]);

    }
    ?>
    <meta http-equiv="refresh" content="0; url=events.php" />
    <?php

}
?>

  <div class="content-wrapper">


      <div class="box box-primary">
          <div class="box-header with-border">
              <h3 class="box-title">Add New Blog</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form method="post" enctype="multipart/form-data">
              <input type="hidden" value="1" name="isGuncelle">
              <div class="box-body">
                  <div class="form-group">
                      <label for="exampleInputEmail1">title</label>
                      <input type="text" class="form-control" name="title" value="<?=$events[0]['title']?>">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Author</label>
                      <input type="text" class="form-control" name="author" value="<?=$events[0]['author']?>">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">dates </label>
                      <input type="datetime-local" class="form-control" name="dates" value="<?=$events[0]['dates']?>">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Tags</label>
                      <input type="text" class="form-control" name="tags" value="<?=$events[0]['tags']?>">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">text</label>
                      <textarea id="editor1" name="text">
                          <?=$events[0]['text']?>
                      </textarea>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputFile">Resim</label>
                      <input type="file" id="fotograf" name="fotograf">
                      <img src="../images/<?=$events[0]['picture']?>" width="100px">
                  </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </form>
      </div>



  </div>
<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
</script>
<?php
include 'footer.php';
?>
