<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Product List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" integrity="sha512-5fsy+3xG8N/1PV5MIJz9ZsWpkltijBI48gBzQ/Z2eVATePGHOkMIn+xTDHIfTZFVb9GMpflF2wOWItqxAP2oLQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($product as $row): ?>
        <tr>
          <td> <?=$row['product_name'];?> </td>
          <td><?=$row['product_price'];?></td>
          <td><a class="btn" href="/product/edit/<?=$row['product_id'];?>">Edit</a></td>
        </tr>
      <?php endforeach;?>
      </tbody>
    </table>
    <a href="/product/add_new">Add New</a>
  </body>
</html>
