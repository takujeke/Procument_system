<?php
//fetch.php
if (isset($_POST["query"])) {
    $connect = mysqli_connect("localhost", "root", "", "ponai");
    $request = mysqli_real_escape_string($connect, $_POST["query"]);
    $query = "
  SELECT * FROM patients 
  WHERE 
  observations LIKE '%" . $request . "%' 
  OR patient_name LIKE '%" . $request . "%' 
  OR vital_inputs LIKE '%" . $request . "%' 
  OR nurse_other LIKE '%" . $request . "%' 
  OR condition_priority LIKE '%" . $request . "%' 
  OR date_stamp LIKE '%" . $request . "%' 
 ";
    $result = mysqli_query($connect, $query);
    $data = array();
    $html = '';
    $html .= '
  <table class=" table table-striped table-bordered table-responsive table-hover">
   <tr>
   <th>Patient Name</th>
   <th>Observations</th>
   
   <th>BP</th>
   <th>Weight</th>
   <th>Pulse</th>
   <th>Temp</th> 
                
   <th>Vital Inputs</th>
   <th>Other Information</th>
   <th>Condition</th>
   <th>Visit Date</th>
 

    <th></th>
   </tr>
  ';
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $data[] = $row["patient_name"];
            $data[] = $row["observations"];
            $data[] = $row["vital_inputs"];
            $data[] = $row["nurse_other"];
            $data[] = $row["condition_priority"];
            $data[] = $row["date_stamp"];
            $html .= '
   <tr>
    <td>' . $row["patient_name"] . '</td>
    <td>' . $row["observations"] . '</td>
    
    <td>' . $row["bp"] . '</td>
    <td>' . $row["weight"] . '</td>
    <td>' . $row["pulse"] . '</td>
    <td>' . $row["temp"] . '</td>
    
    <td>' . $row["vital_inputs"] . '</td>
    <td>' . $row["nurse_other"] . '</td>
    <td>' . $row["condition_priority"] . '</td>
    <td>' . $row["date_stamp"] . '</td>
	<td><a href="expand_patient1.php?id=' . $row['id'] . '" class="btn btn-success">Assess Patient</a></td>
   
   </tr>
   ';
        }
    } else {
        $data = 'No Data Found';
        $html .= '
   <tr>
    <td colspan="3">No Data Found</td>
   </tr>
   ';
    }
    $html .= '</table>';
    if (isset($_POST['typehead_search'])) {
        echo $html;
    } else {
        $data = array_unique($data);
        echo json_encode($data);
    }
}

?>