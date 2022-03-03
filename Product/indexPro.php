<?php
include_once "putdata.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form mua hàng</title>
</head>
<style>
        table {
            width: 500px;
            margin: auto;
            background: #ffca97;
        }

        td {
            pnuming: 10px;
        }

        .center {
            text-align: center;
            font-weight: bold;
            background: #ffa500;
            color: #ffffff;
        }

        input {
            width: 300px;
        }

        button {
            background: #34a853;
            border: none;
            pnuming: 10px 20px;
            font-weight: bold;
        }

        button:hover {
            cursor: pointer;
        }
    </style>
<body>
    <?php
        include "exc.php";
    ?>
    <?php error_reporting(0); ?>
	<form action="indexPro.php" method="post">
		<table>
			<tr>
				<td colspan="2"><h2>FORM MUA HÀNG</h2></td>
			</tr>	
			<tr>
				<td>Tên sản phẩm:</td>
				<td><input type="text" id="name" name="name"></td>
			</tr>
            <tr>
				<td> Mô tả:</td>
				<td><input type="text" id="des" name="des"></td>
			</tr>
			<tr>
				<td>Giá: </td>
				<td><input type="text" id="price" name="price"></td>
			</tr>
			<tr>
				<td>Số lượng: </td>
				<td><input type="text" id="num" name="num"></td>
			</tr>
			
			<tr>
				<td colspan="2" >
                        <center><button type="submit" name="submit">Thêm sản phẩm</button></center>
                    </td>
			</tr>
		</table>
	</form>
</body>
</html>