<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <form action="/save" method="post">
        <label>ProductName</label>
        <input type="text" name="ProductName" placeholder="ProductName"> 
        <br>
        <label>ProductQuantity</label>
        <input type="text" name="Quantity" placeholder="Quantity">
        <br>
        <label>ProductPrice</label>
        <input type="text" name="Price" placeholder="Price"> 
        <br>
        <input type="submit" value="save"> 
    </form>

    <h1>Product Info</h1>
    <table border="1">
        <tr>
            <th>ProductName</th>
            <th>ProductQuantity</th>
            <th>ProductPrice</th>
            <th>Action</th>
            
        </tr>
        <?php foreach ($product as $pr): ?>
            <tr>
                <td><?= $pr['ProductName'] ?></td>
                <td><?= $pr['Quantity'] ?></td>
                <td><?= $pr['Price'] ?></td>
                <td><a href="/edit/<?= $pr['id'] ?>">Update</a>
                    <a href="/Delete/<?= $pr['id'] ?>">Delete</a> 
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>  