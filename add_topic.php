<?php include 'header.php' ;
$con=mysqli_connect('localhost','root','','my4');
if (isset($_POST['topic'])&&($_POST['top'])) {
  $naam=$_POST['topic'];
  $jam=$_POST['top'];

$sql="insert into chapter (name,cat) values('$naam','$jam')";
$result=mysqli_query($con,$sql);

}
?>

<div class="video-menu" style="height: 70px;">
 <ul>
 <a href="teacher_dashboard.php"><li> sessions
  </li></a>
  <a href="my_upload.php"><li>
    My Uploads
  </li></a>
  <a href="my-notes.php"><li>
   Add doc file
  </li></a>
  <a href="add_topic.php"><li style="background: #555;">
  	Add Topic
  </li></a></ul></div>
    <form  method="POST">
     <div style="margin:100px 120px;">
     <select name="top" style="padding: 5px 4px;color:grey;border:solid; ">
     	<option value="1">autism</option>
     	<option value="2">apshia</option>
     	<option value="2">Intellectual Disability</option>
     	<option value="1">fluency disorder</option>
     </select>
     <input type="Text" name="topic" placeholder="Enter the Topic..." style="padding: 4px 5px;margin-left: 50px;width: 20em;border:3px solid rgba(85, 85, 85, 0.6);">
     <input type="Submit" name="submit" onclick="alert('Submitted Sucessefully')" style="padding: 4px 5px;margin-left: 50px;background-color: white;color: black;">
  </div></form>
