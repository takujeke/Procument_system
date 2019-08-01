<?php
//fetch.php
if(isset($_POST["query"]))
{
 $connect = mysqli_connect("localhost","root","","procument");
 $request = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM supplier 
  WHERE so_name LIKE '%".$request."%' 
  OR patient_name LIKE '%".$request."%' 
  OR patient_dob LIKE '%".$request."%' 
  OR me_name LIKE '%".$request."%' 
  OR member_num LIKE '%".$request."%' 
  OR date_stamp LIKE '%".$request."%'
 ";
 $result = mysqli_query($connect, $query);
 $data =array();
 $html = '';
 $html .= '
  <table class=" table table-striped table-bordered table-responsive table-hover">
   <tr>
   <th>Medical Insurance</th>
   <th>Patient Name</th>
   <th>Patient DOB</th>  
   <th>Member Name</th>     
   <th>Member Number</th>
   <th>Visit Date</th>
 

    <th></th>
   </tr>
  ';
 if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {
   $data[] = $row["so_name"];
   $data[] = $row["patient_name"];
   $data[] = $row["patient_dob"];
   $data[] = $row["me_name"];
   $data[] = $row["member_num"];
   $data[] = $row["date_stamp"];
   $html .= '
   <tr>
    <td>'.$row["so_name"].'</td>
    <td>'.$row["patient_name"].'</td>
    <td>'.$row["patient_dob"].'</td>
    <td>'.$row["me_name"].'</td>
    <td>'.$row["member_num"].'</td>
    <td>'.$row["date_stamp"].'</td>
	<td><a href="expand_patient.php?id='.$row['id'].'" class="btn btn-success">Triage Patient</a></td>
   
   </tr>
   ';
  }
 }
 else
 {
  $data = 'No Data Found';
  $html .= '
   <tr>
    <td colspan="3">No Data Found</td>
   </tr>
   ';
 }
 $html .= '</table>';
 if(isset($_POST['typehead_search']))
 {
  echo $html;
 }
 else
 {
  $data = array_unique($data);
  echo json_encode($data);
 }
}

?>