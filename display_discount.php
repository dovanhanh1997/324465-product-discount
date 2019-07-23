<!DOCTYPE HTML>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" href="my.css">
</head>
<body>
<div id="content">
    <h1>Product Discount Calculator</h1>
    <table>
        <tr>
            <td class="name" colspan="1"><label>Product Description:</label></td>
            <td><span><?php echo $_POST['description']; ?></span></td>
        </tr>
        <tr>
            <td class="name" colspan="1"><label>Price</label></td>
            <td><span>$<?php echo $_POST['price']; ?></span></td>
        </tr>
        <tr>
            <td class="name" colspan="1"><label>Discount Percent</label></td>
            <td><span><?php echo $_POST['discount_percent']; ?>%</span></td>
        </tr>
        <tr>
            <td class="name" colspan="1"><label>Discount Amount</label></td>
            <td><span><?php $discountPrice = $_POST['price'] * $_POST['discount_percent'] * 0.01;
                    echo $discountPrice; ?></span></td>
        </tr>
        <tr>
            <td class="name" colspan="1"><label>Discount Price</label></td>
            <td><span><?php echo $_POST['price'] - $discountPrice; ?></span></td>
        </tr>

    </table>
</div>
</body>
</html>