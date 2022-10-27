<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<title>Таблица сравнения</title>
	<link rel="stylesheet" href="style.css" />
</head>

<body>
	<?php

    ?>
	<table border="1" cellspacing="2" cellpadding="2">
		<thead>
			<tr>
				<td><strong>A</strong></td>
				<td><strong>B</strong></td>
				<td><strong>!A</strong></td>
				<td><strong>A || B</strong></td>
				<td><strong>A && B</strong></td>
				<td><strong>A xor B</strong></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>0</td>
				<td>0</td>
				<td><?php $a = 0;
                    echo !$a ?></td>
				<td><?php
                    $b = 0;
                    $c = + ($a || $b);
                    echo $c;
                    ?></td>
				<td><?php
                    $a = 0;
                    $b = 0;
                    $c = + ($a && $b);
                    echo $c;
                    ?></td>
				<td>
					<?php
                    $a = 0;
                    $b = 0;
                    $c = + ($a xor $b);
                    echo $c;
                    ?>
				</td>
			</tr>
			<tr>
				<td>0</td>
				<td>1</td>
				<td><?php echo !$a ?></td>
				<td><?php
                    $b = 1;
                    $c = + ($a || $b);
                    echo $c
                    ?></td>
				<td>
					<?php
                    $a = 0;
                    $b = 1;
                    $c = + ($a && $b);
                    echo $c;
                    ?>
				</td>
				<td>
					<?php
                    $a = 0;
                    $b = 1;
                    $c = + ($a xor $b);
                    echo $c;
                    ?>
				</td>
			</tr>
			<tr>
				<td>1</td>
				<td>0</td>
				<td><?php echo $a ?></td>
				<td><?php
                    $b = 0;
                    $a = 1;
                    $c = + ($a || $b);
                    echo $c
                    ?></td>
				<td>
					<?php
                    $a = 1;
                    $b = 0;
                    $c = + ($a && $b);
                    echo $c;
                    ?>
				</td>
				<td><?php
                    $a = 1;
                    $b = 0;
                    $c = + ($a xor $b);
                    echo $c;
                    ?></td>
			</tr>
			<tr>
				<td>1</td>
				<td>1</td>
				<td><?php echo $a ?></td>
				<td><?php
                    $a = 1;
                    $b = 1;
                    $c = + ($a || $b);
                    echo $c
                    ?></td>
				<td>
					<?php
                    $a = 1;
                    $b = 1;
                    $c = + ($a && $b);
                    echo $c;
                    ?>
				</td>
				<td>
					<?php
                    $a = 1;
                    $b = 1;
                    $c = + ($a xor $b);
                    echo $c;
                    ?>
				</td>
			</tr>
		</tbody>
	</table>

</body>

</html>