<div id ="yurt"></div>
<main>

<h2>
The Yurts at Pacific Trails
</h2>


<dl>

<dt>What is a yurt?</dt>
<dd>Our luxury yurts are permanent structures four feet off the ground. Each yurt has canvas walls, a wooden floor, and a roof dome that be opened.</dd>


<dt>How are the yurts furnished?</dt>
<dd>Each yurt is furnished with a queen-size bed with down quilt and gas-fired stove. The luxury camping experience also includes electricity and a sink with hot and cold running water. Shower and restroom facilities are located in the lodge.</dd>


<dt>What should I bring?</dt>
<dd>Bring a sense of adventure and some time to relax! Most guests aslo pack comfortable walking shoes and plan to dress for changing weather with layers and clothing.</dd>

</dl>

<h3>Yurt Packages</h3>

<p>A variety of luxury yurt packages are available.   Choose a package below and contact us to begin
   your reservation. We're happy to build a custom
   package just for you.
</p>

<table>
<tr>
<th>Package Name</th>
<th>Descriptions</th>
<th>Nights</th>
<th>Cost Per Person</th>
</tr>
<?php
if($fetch_data->num_rows() > 0)
{
	foreach($fetch_data->result() as $row)
	{
?>
	<tr>
		<td><?php echo $row->packageid; ?></td>
		<td><?php echo $row->packagedesc; ?></td>
		<td><?php echo $row->nights; ?></td>
		<td><?php echo $row->cost; ?></td>
	</tr>
	<?php
	}
}

else{
	?>
}		<tr>
			<td colspan ="4">no data found</td>
			</tr>
<?php
}
?>

</table>
</main>

<div id="contact">