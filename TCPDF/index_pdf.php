<form method="POST" action="../TCPDF/pdf.php">
<input type="#" value="Create">
<input type="submit" name="pdf" id="pdf" value="PDF">
</form>
<table border="3">
    <tr>
        <th>dept_no</th>
        <th>dept_name</th>
    </tr>
<?php
include 'connect.php';
$select = "SELECT * FROM dept";
    $query = mysqli_query($conn, $select);
while($row = mysqli_fetch_array($query)){
?>
<tr>
    <td><?php echo $row['dept_no']; ?> </td>
    <td><?php echo $row['dept_name']; ?></td>
</tr>
<?php
}
?>

</table>









