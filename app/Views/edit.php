<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    
    <!-- Display any validation errors here (if needed) -->
    <?php if (session()->has('errors')): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach (session('errors') as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    <?php endif ?>

    <!-- Display success message (if needed) -->
    <?php if (session()->has('success')): ?>
        <div class="alert alert-success">
            <?= session('success') ?>
        </div>
    <?php endif ?>

    <!-- Create the update form with pre-filled data -->
    <form method="post" action="<?= base_url('product/edit/' . $product['id']) ?>">
        <!-- CSRF token for security -->
        <?= csrf_field() ?>

        <label for="ProductName">Product Name:</label>
        <input type="text" name="ProductName" value="<?= old('ProductName', $product['ProductName']) ?>"><br>

        <label for="ProductQuantity">Product Quantity:</label>
        <input type="number" name="ProductQuantity" value="<?= old('ProductQuantity', $product['ProductQuantity']) ?>"><br>

        <label for="ProductPrice">Product Price:</label>
        <input type="text" name="ProductPrice" value="<?= old('ProductPrice', $product['ProductPrice']) ?>"><br>

        <input type="submit" value="Update Product">
    </form>

    <a href="<?= base_url('product') ?>">Back to Product List</a>
</body>
</html>
