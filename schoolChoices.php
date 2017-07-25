<?php 

  $con = mysqli_connect("localhost:3307","root","munna2755", "vtc") or die(mysql_error());
 //mysqli_select_db('vtc') or die(mysql_error());
$sql = "SELECT * FROM registeredSchools";
$result=mysqli_query($con , $sql);

 ?> 
 <body>
<script type="text/javascript">
function sendValue(value)
{
    var parentId = <?php echo json_encode($_GET['id']); ?>;
    window.opener.updateValue(parentId, value);
    window.close();
}
</script>
<style>
body {background-image: url("bk.jpg");
background-color: #cccccc;}
th {
	
font-weight: 900;
    color: #ffffff;
    background: #ea6153;
}

table {
  margin: 0 0 0 0;
  width: 100%;
  box-shadow: 0 1px 3px rgba(0,0,0,0.2);
  display: table;
  @media screen and (max-width: 580px);
display: block; }
	
	tr:nth-child(odd) {
    background-color: #148F77;
}

tr:nth-child(even) {
    background-color: #A3E4D7;
}
	
	
	</style>

 <form name="selectform"> 
<p style="text-align: center; font-weight: bold"> List Of schools </p>
                <table> 
                    <tr> 
                        <th>PIN</th>                       
                        <th>&nbsp;</th>  
                        <th>Name</th> 
						<th>Class</th>
                        <th>City</th> 
                        <th>Address</th> 
                        <th>Monthly fee</th> 
						<th>Contact</th>
                    </tr> 
<?php 
   while($rows=mysqli_fetch_array($result)){
?> 
                    <tr> 
                        <td><?php echo $rows['PIN']; ?></td> 
                        <td><input type=button value="Select" onClick="sendValue('<?php echo $rows['PIN']; ?>')" /></td> 
                        <td><?php echo $rows['Name']; ?></td> 
                        <td><center><?php echo $rows['Class']; ?></td> 
                        <td><center><?php echo $rows['City']; ?></td> 
						<td><center><?php echo $rows['Address']; ?></td> 
                        <td><center><?php echo $rows['MonthlyFee']; ?></td> 
                        <td><center><?php echo $rows['Contact']; ?></td>
                    </tr>                                    

<?php 
    } 
?> 
                    </table> </form></body>