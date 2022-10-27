<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cравнение</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="big-table">
		<table style="table-layout: fixed; width: 900px; margin: auto;" , border="0" ;>
			<thead>
				<tr>
					<th width="10px"></th>
					<th width="10px">true</th>
					<th width="10px">false</th>
					<th width="10px">1</th>
					<th width="10px">0</th>
					<th width="10px">-1</th>
					<th width="10px">"1"</th>
					<th width="10px">null</th>
					<th width="10px">"php"</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td style="background-color: #f5f5f5;"><strong>true</strong></td>
					<td class="true"><?php echo var_dump(true === true); ?></td>
					<td><?php echo var_dump(true === false); ?></td>
					</td>
					<td><?php echo var_dump(true === 1); ?></td>
					<td> <?php echo var_dump(true === 0); ?> </td>
					<td><?php echo var_dump(true === -1); ?></td>
					<td><?php echo var_dump(true === "1"); ?></td>
					<td><?php echo var_dump(true === null); ?></td>
					<td><?php echo var_dump(true === "php"); ?></td>
				</tr>
				<tr>
					<td style="background-color: #f5f5f5;"><strong>false</strong></td>
					<td><?php echo var_dump(false === true); ?></td>
					<td class="true"><?php echo var_dump(false === false); ?></td>
					<td><?php echo var_dump(false === 1); ?></td>
					<td><?php echo var_dump(false === 0); ?></td>
					<td><?php echo var_dump(false === -1); ?></td>
					<td><?php echo var_dump(false === "1"); ?></td>
					<td><?php echo var_dump(false === null); ?></td>
					<td><?php echo var_dump(false === "php"); ?></td>
				</tr>
				<tr>
					<td style="background-color: #f5f5f5;"><strong>1</strong></td>
					<td><?php echo var_dump(1 === true); ?></td>
					<td><?php echo var_dump(1 === false); ?></td>
					<td class="true"><?php echo var_dump(1 === 1); ?></td>
					<td><?php echo var_dump(1 === 0); ?></td>
					<td><?php echo var_dump(1 === -1); ?></td>
					<td><?php echo var_dump(1 === "1"); ?></td>
					<td><?php echo var_dump(1 === null); ?></td>
					<td><?php echo var_dump(1 === "php"); ?></td>
				</tr>
				<tr>
					<td style="background-color: #f5f5f5;"><strong>0</strong></td>
					<td><?php echo var_dump(0 === true); ?></td>
					<td><?php echo var_dump(0 === false); ?></td>
					<td><?php echo var_dump(0 === 1); ?></td>
					<td class="true"><?php echo var_dump(0 === 0); ?></td>
					<td><?php echo var_dump(0 === -1); ?></td>
					<td><?php echo var_dump(0 === "1"); ?></td>
					<td><?php echo var_dump(0 === null); ?></td>
					<td><?php echo var_dump(0 === "php"); ?></td>
				</tr>
				<tr>
					<td style="background-color: #f5f5f5;"><strong>-1</strong></td>
					<td><?php echo var_dump(-1 === true); ?></td>
					<td><?php echo var_dump(-1 === false); ?></td>
					<td><?php echo var_dump(-1 === 1); ?></td>
					<td><?php echo var_dump(-1 === 0); ?></td>
					<td class="true"><?php echo var_dump(-1 === -1); ?></td>
					<td><?php echo var_dump(-1 === "1"); ?></td>
					<td><?php echo var_dump(-1 === null); ?></td>
					<td><?php echo var_dump(-1 === "php"); ?></td>
				</tr>
				<tr>
					<td style="background-color: #f5f5f5;"><strong>"1"</strong></td>
					<td><?php echo var_dump("1" === true); ?></td>
					<td><?php echo var_dump("1" === false); ?></td>
					<td><?php echo var_dump("1" === 1); ?></td>
					<td><?php echo var_dump("1" === 0); ?></td>
					<td><?php echo var_dump("1" === -1); ?></td>
					<td class="true"><?php echo var_dump("1" === "1"); ?></td>
					<td><?php echo var_dump("1" === null); ?></td>
					<td><?php echo var_dump("1" === "php"); ?></td>
				</tr>
				<tr>
					<td style="background-color: #f5f5f5;"><strong>null</strong></td>
					<td><?php echo var_dump(null === true); ?></td>
					<td><?php echo var_dump(null === false); ?></td>
					<td><?php echo var_dump(null === 1); ?></td>
					<td><?php echo var_dump(null === 0); ?></td>
					<td><?php echo var_dump(null === -1); ?></td>
					<td><?php echo var_dump(null === "1"); ?></td>
					<td class="true"><?php echo var_dump(null === null); ?></td>
					<td><?php echo var_dump(null === "php"); ?></td>
				</tr>
				<tr>
					<td style="font-size: 16px; white-space: nowrap; background-color: #f5f5f5;"><strong>"php"</strong></td>
					<td><?php echo var_dump("php" === true); ?></td>
					<td><?php echo var_dump("php" === false); ?></td>
					<td><?php echo var_dump("php" === 1); ?></td>
					<td><?php echo var_dump("php" === 0); ?></td>
					<td><?php echo var_dump("php" === -1); ?></td>
					<td><?php echo var_dump("php" === "1"); ?></td>
					<td><?php echo var_dump("php" === null); ?></td>
					<td class="true"><?php echo var_dump("php" === "php"); ?></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="big-table-second">
		<table style="table-layout: fixed; width: 900px; margin: auto; margin-top: 100px;" , border="0" ;>
			<thead>
				<tr>
					<th width="10px"></th>
					<th width="10px">true</th>
					<th width="10px">false</th>
					<th width="10px">1</th>
					<th width="10px">0</th>
					<th width="10px">-1</th>
					<th width="10px">"1"</th>
					<th width="10px">null</th>
					<th width="10px">"php"</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td style="background-color: #f5f5f5;"><strong>true</strong></td>
					<td><?php echo var_dump(true == true); ?></td>
					<td><?php echo var_dump(true == false); ?></td>
					</td>
					<td><?php echo var_dump(true == 1); ?></td>
					<td> <?php echo var_dump(true == 0); ?> </td>
					<td><?php echo var_dump(true == -1); ?></td>
					<td><?php echo var_dump(true == "1"); ?></td>
					<td><?php echo var_dump(true == null); ?></td>
					<td><?php echo var_dump(true == "php"); ?></td>
				</tr>
				<tr>
					<td style="background-color: #f5f5f5;"><strong>false</strong></td>
					<td><?php echo var_dump(false == true); ?></td>
					<td><?php echo var_dump(false == false); ?></td>
					<td><?php echo var_dump(false == 1); ?></td>
					<td><?php echo var_dump(false == 0); ?></td>
					<td><?php echo var_dump(false == -1); ?></td>
					<td><?php echo var_dump(false == "1"); ?></td>
					<td><?php echo var_dump(false == null); ?></td>
					<td><?php echo var_dump(false == "php"); ?></td>
				</tr>
				<tr>
					<td style="background-color: #f5f5f5;"><strong>1</strong></td>
					<td><?php echo var_dump(1 == true); ?></td>
					<td><?php echo var_dump(1 == false); ?></td>
					<td><?php echo var_dump(1 == 1); ?></td>
					<td><?php echo var_dump(1 == 0); ?></td>
					<td><?php echo var_dump(1 == -1); ?></td>
					<td><?php echo var_dump(1 == "1"); ?></td>
					<td><?php echo var_dump(1 == null); ?></td>
					<td><?php echo var_dump(1 == "php"); ?></td>
				</tr>
				<tr>
					<td style="background-color: #f5f5f5;"><strong>0</strong></td>
					<td><?php echo var_dump(0 == true); ?></td>
					<td><?php echo var_dump(0 == false); ?></td>
					<td><?php echo var_dump(0 == 1); ?></td>
					<td><?php echo var_dump(0 == 0); ?></td>
					<td><?php echo var_dump(0 == -1); ?></td>
					<td><?php echo var_dump(0 == "1"); ?></td>
					<td><?php echo var_dump(0 == null); ?></td>
					<td><?php echo var_dump(0 == "php"); ?></td>
				</tr>
				<tr>
					<td style="background-color: #f5f5f5;"><strong>-1</strong></td>
					<td><?php echo var_dump(-1 == true); ?></td>
					<td><?php echo var_dump(-1 == false); ?></td>
					<td><?php echo var_dump(-1 == 1); ?></td>
					<td><?php echo var_dump(-1 == 0); ?></td>
					<td><?php echo var_dump(-1 == -1); ?></td>
					<td><?php echo var_dump(-1 == "1"); ?></td>
					<td><?php echo var_dump(-1 == null); ?></td>
					<td><?php echo var_dump(-1 == "php"); ?></td>
				</tr>
				<tr>
					<td style="background-color: #f5f5f5;"><strong>"1"</strong></td>
					<td><?php echo var_dump("1" == true); ?></td>
					<td><?php echo var_dump("1" == false); ?></td>
					<td><?php echo var_dump("1" == 1); ?></td>
					<td><?php echo var_dump("1" == 0); ?></td>
					<td><?php echo var_dump("1" == -1); ?></td>
					<td><?php echo var_dump("1" == "1"); ?></td>
					<td><?php echo var_dump("1" == null); ?></td>
					<td><?php echo var_dump("1" == "php"); ?></td>
				</tr>
				<tr>
					<td style="background-color: #f5f5f5;"><strong>null</strong></td>
					<td><?php echo var_dump(null == true); ?></td>
					<td><?php echo var_dump(null == false); ?></td>
					<td><?php echo var_dump(null == 1); ?></td>
					<td><?php echo var_dump(null == 0); ?></td>
					<td><?php echo var_dump(null == -1); ?></td>
					<td><?php echo var_dump(null == "1"); ?></td>
					<td><?php echo var_dump(null == null); ?></td>
					<td><?php echo var_dump(null == "php"); ?></td>
				</tr>
				<tr>
					<td style="font-size: 16px; white-space: nowrap; background-color: #f5f5f5;"><strong>"php"</strong></td>
					<td><?php echo var_dump("php" == true); ?></td>
					<td><?php echo var_dump("php" == false); ?></td>
					<td><?php echo var_dump("php" == 1); ?></td>
					<td><?php echo var_dump("php" == 0); ?></td>
					<td><?php echo var_dump("php" == -1); ?></td>
					<td><?php echo var_dump("php" == "1"); ?></td>
					<td><?php echo var_dump("php" == null); ?></td>
					<td><?php echo var_dump("php" == "php"); ?></td>
				</tr>
			</tbody>
		</table>
	</div>

</body>

</html>