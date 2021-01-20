<?php include 'header.php';
    include 'connect.php' ?>
<div class="video-menu" style="height: 70px;">
 <ul>
 <a href="teacher_dashboard.php"><li> SESSIONS
  </li></a>
  <a href="my_upload.php"><li>
    My Uploads
  </li></a>
  <a href="my-notes.php"><li style="background: #555";>
   Add doc
  </li></a>
  <a href="add_topic.php"><li>
    Add Topic
  </li></a>
  </ul>

</div>
      <div class="dashboard">
      <center>
        <h2>Autism</h2>
      <?php
      $micro = "select * from chapter where cat =1";
      $result_micro = $conn->query($micro);
      while ($row_micro = $result_micro->fetch_assoc()) {
        ?>
          <a href="note.php"><div style="background: url(images/micro.jpg); color: #555;" class="chapter"><?php echo $row_micro['name']; ?></div></a>
          <?php
          }?>
      </center>
      <div class="clearfix"> </div>
      </div>
    
      <div class="dashboard">
      <center>
        <h2>fluency disorder</h2>
      <?php
      $micro = "select * from chapter where cat = 2";
      $result_micro = $conn->query($micro);
      while ($row_micro = $result_micro->fetch_assoc()) {
        ?>
          <a href="note.php"><div style="background: #015ba1;" class="chapter"><?php echo $row_micro['name']; ?></div></a>
     <?php
     }?> 
     </center>
      </div>
      <?php include 'footer.php' ?>





