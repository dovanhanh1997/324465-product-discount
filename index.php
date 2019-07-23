<!DOCTYPE HTML>
<html>
<head>
    <title>Product Discount Caculator</title>
    <link rel="stylesheet" href="my.css">
</head>
<body>
<div id="content">
    <h1>Product Discount Caculator</h1>
    <form action="display_discount.php" method="post">
        <div id="data">
            <label>Product Description</label>
            <input type="text" name="description"/><br/>
            <label>List Price</label>
            <input type="number" name="price"/><br/>
            <label>Discount Percent</label>
            <input type="number" name="discount_percent"/>(%)<br/>
        </div>
        <div id="button">
            <label>&nbsp</label>
            <input type="submit" name="submit" value="Caculate Discout"/>
        </div>
    </form>
</div>
</body>
</html>