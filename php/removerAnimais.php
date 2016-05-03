<?php
$con = mysqli_connect("localhost","root","","projetorenzo");
$sql = "DELETE FROM Animais WHERE id=".$_REQUEST['id'];

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}

?>
