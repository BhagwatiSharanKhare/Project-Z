<?php
include_once "../../system/library/application.php";
include_once "../../system/library/class.messages.php";
include_once "../../system/manager/department-manager.php";
include_once "../../system/manager/issue-manager.php";
<<<<<<< HEAD
=======
//include_once "../includes/sidebar.php";


$app = new Application();
$app->check_admin_login();

>>>>>>> 63c23683bfde01517a41badd3cb5b9936ffed8c6
$msg=new Messages();
$department=new departmentManager();
$issue=new issueManager();
?>
--------------------------------Issues----------------------------------<br>
<?php
$msg->display('all');
?>
<br>

<br>
<<<<<<< HEAD

<?php include_once "../includes/navbar.php"; ?>
<div class="row dboard-body">
  <?php include_once "../includes/sidebar.php"; ?>
  <div class="col-lg-10 col-md-9 col-lg-offset-2 col-md-offset-3">
  <h3>List of Issues</h3>
  <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>S.No.</th>
                <th>Dept Name</th>
                <th>issue title</th>
                <th>issue Description</th>
                <th>issue Image</th>
                <th>issue status</th>
                <th>Issue submitted on</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $issue_list=$issue->getAllIssue();
          $i=0;
          foreach($issue_list as $list){
              $i++;
              ?>
              <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $list['dept_name'];?></td>
                  <td><?php echo $list['issue_title'];?></td>
                  <td><?php echo $list['issue_desc'];?></td>
                  <td><?php echo "image will come here";?></td>
                  <td><?php echo $list['issue_status'];?></td>
                  <td><?php echo $list['added_on'];?></td>
                  <td><a href="<?php echo ADMIN_BASE_URL;?>views/issue/issue-view.php?issue_id=<?php echo $list['issue_id'];?>"><!--View More--></a><br>
                      <a href="<?php echo ADMIN_BASE_URL;?>system/controller/news-controller.php?action=deleteNews&news_id=<?php echo $list['news_id']?>"><!--Update Stauts--></a></td>
              </tr>
          <?php
          }
          ?>
        </tbody>
    </table>
  </div>

</div>
=======
List of Issues
<table border="1">
    <thead>
    <tr>
        <th>Sl No.</th>
        <th>Dept Name</th>
        <th>issue title</th>
        <th>issue Description</th>
        <th>issue Image</th>
        <th>issue status</th>
        <th>Issue submitted on</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $issue_list=$issue->getAllIssue();
    $i=0;
    foreach($issue_list as $list){
        $i++;
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $list['dept_name'];?></td>
            <td><?php echo $list['issue_title'];?></td>
            <td><?php echo $list['issue_desc'];?></td>
            <td><?php echo "image will come here";?></td>
            <td><?php echo $list['issue_status'];?></td>
            <td><?php echo $list['added_on'];?></td>
            <td><a href="<?php echo ADMIN_BASE_URL;?>views/issues/issue-view.php?issue_id=<?php echo $list['issue_id'];?>"><!--View More-->view</a><br>
                <a href="<?php echo ADMIN_BASE_URL;?>system/controller/issue-controller.php?action=deleteIssue&del_issue_id=<?php echo $list['issue_id']?>">delete<!--Update Stauts--></a></td>
        </tr>
    <?php
    }
    ?>
    </tbody>
</table>
>>>>>>> 63c23683bfde01517a41badd3cb5b9936ffed8c6
