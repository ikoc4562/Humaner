<?php
include 'header.php';
include 'yanmenu.php';
?>

<?php

if ($_GET['islem']=='sil' and @$_GET['id'])
{
   // $sql=$db->query('update hakkinda set aktifmi=0 where id="'.$_GET['id'].'"');
    $sql=$db->prepare('update blogs set is_deleted=1 where id=:id');
    $sql->execute(['id'=>$_GET['id']]);


}
$sql=$db->query('select * from blogs where is_deleted=0');
$events=$sql->fetchAll();
?>
  <div class="content-wrapper">


      <div class="box">
          <div class="box-header" style="float: right">
              <a href="blogs_new.php" class="btn btn-success btn-xm">Add New</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                      <th>Title</th>
                      <th>Picture</th>
                      <th>Date</th>
                      <th>Author</th>
                      <th>Tags</th>
                      <th>Text</th>
                      <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php

                  foreach ($blogs as $blog) {
                      ?>
                      <tr>

                          <td><?= $blog['title'] ?></td>
                          <td><img src="../images/<?= $blog['picture'] ?>" width="100px"></td>
                          <td><?= $blog['date'] ?></td>
                          <td> <?= $blog['author'] ?></td>
                          <td> <?= $blog['tags'] ?></td>
                          <td> <?= $blog['text'] ?></td>

                          <td>
                             <a href="events.php?islem=sil&id=<?= $blog['id'] ?>" class="btn btn-danger btn-xs">Delete</a>

                              <a href="events_update.php?islem=guncelle&id=<?= $blog['id'] ?>"
                                 class="btn btn-primary btn-xs">Update</a>


                          </td>
                      </tr>
                      <?php
                  }
                  ?>
                  </tbody>
              </table>
          </div>
          <!-- /.box-body -->
      </div>


  </div>
<?php
include 'footer.php';
?>
