<?php
   function showdetails($standard,$rollno)
   {

  include('dbcon.php');

   $sql="SELECT * FROM `student` WHERE `rollno`='$rollno' AND  `standard` ='$standard'";
   $result=mysqli_query($con,$sql);


    if (mysqli_num_rows($result)>0)
    {
        $data=mysqli_fetch_assoc($result);
        ?>
        <table border="1" style="width:50%;  margin-top:20px" align="center">
    <tr>
        <th colspan="3">Student Details</th>
    </tr>
    <tr>
    <td rowspan="5"><img src="dataimg/<?php echo $data['image']; ?>" style="max-height:150px; max-width:120px; padding-left:30px;" /></td>
        <th>Roll No</th>
        <td><?php echo $data['rollno'];  ?></td>
    </tr>
    <tr>
        <th>Name</th>
        <td><?php echo $data['name'];  ?></td>
    </tr>
    <tr>
        <th>Standard</th>
        <td><?php echo $data['standard'];  ?></td>
    </tr>
    
    <tr>
        <th>City</th>
        <td><?php echo $data['city'];  ?></td>
    </tr>
</table>
<?php

    }
    else

    {
        echo "<script>alert('NO Student Found.');</script>";
}
}

?>