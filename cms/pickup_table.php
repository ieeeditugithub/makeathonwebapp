<?php 
	foreach($list as $key => $value){  
		$time=time_slot_id($conn,$value['time_id']); 
?>
	<tr>
		<td><?php echo $value['id']; ?></td>
        <td>
			<a href="pickup_det.php?id=<?php echo $value['id']; ?>" target="_blank" /><?php echo $value['name']; ?></a>
		</td>
		<td><?php echo $value['date']." [".$time[0]['slot']."] ";?></td>
        <td><?php echo $value['pincode'];  ?></td>
	</tr>
<?php } ?>