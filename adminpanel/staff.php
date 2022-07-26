<?php
include 'header.php';
include 'yanmenu.php';
?>

<?php

if ($_GET['islem']=='sil' and @$_GET['id'])
{
   // $sql=$db->query('update hakkinda set aktifmi=0 where id="'.$_GET['id'].'"');
    $sql=$db->prepare('update staff_volunteers set isdeleted=1 where id=:id');
    $sql->execute(['id'=>$_GET['id']]);


}
$sql=$db->query('select * from staff_volunteers where isdeleted=0');
$events=$sql->fetchAll();
?>
  <div class="content-wrapper">


      <div class="box">
          <div class="box-header" style="float: right">
              <a href="staff_new.php" class="btn btn-success btn-xm">Add New</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                      <th>Name</th>
                      <th>Title</th>
                      <th>Picture</th>
                      <th>Link</th>
                      <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php

                  foreach ($events as $event) {
                      ?>
                      <tr>
                          <td><?= $event['name'] ?></td>
                          <td><?= $event['title'] ?></td>
                          <td><img src="../images/<?= $event['image'] ?>" width="100px"></td>
                          <td><?= $event['link'] ?></td>

                          <td>
                             <a href="staff.php?islem=sil&id=<?= $event['id'] ?>" class="btn btn-danger btn-xs">Delete</a>

                              <a href="staff_update.php?islem=guncelle&id=<?= $event['id'] ?>"
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
