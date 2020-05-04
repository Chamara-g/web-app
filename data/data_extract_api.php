<?php 

if(isset($_POST['option'])){

	if( $_POST['password'] == 'abc123' ){

	require_once '../db/connection.php';	
	$data = array();

		if($_POST['option_name'] == 'contact_list'){

			$sql = "SELECT user_ID, user_name, user_email, subject, message FROM contact_us_tb";
			
			$result = mysqli_query($connection, $sql);

			if ($result->num_rows > 0) {
			    // output data of each row
				while ($row = mysqli_fetch_assoc($result)) {
				    // Generate the output in desired format
				    $data[] = $row;
				}
			} else {

			}


		header('Content-Type: application/json');
		echo json_encode($data);
			
		$connection->close();

		}
		if($_POST['option_name'] == 'subscribe_list'){

			$sql = "SELECT user_ID, user_name, user_email FROM subscribe_list_tb";
			
			$result = mysqli_query($connection, $sql);
			$data = array();

			if ($result->num_rows > 0) {
			    // output data of each row
				while ($row = mysqli_fetch_assoc($result)) {
				    // Generate the output in desired format
				    $data[] = $row;
				}
			} else {

			}

		header('Content-Type: application/json');
		echo json_encode($data);
			
		$connection->close();

		}

	}

}

 ?>