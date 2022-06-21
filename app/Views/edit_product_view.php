<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Edit Product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css"
        integrity="sha512-5fsy+3xG8N/1PV5MIJz9ZsWpkltijBI48gBzQ/Z2eVATePGHOkMIn+xTDHIfTZFVb9GMpflF2wOWItqxAP2oLQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
      <form action="/product/update" method="post">
        <input type="text" name="product_name" id="name" value="<?=$product->product_name;?>">
        <input type="text" name="product_price" id="price" value="<?=$product->product_price;?>">
        <input type="hidden" name="product_id" value="<?=$product->product_id;?>">
        <input type="submit" value="Update">
      </form>
    </div>
</body>

</html>
