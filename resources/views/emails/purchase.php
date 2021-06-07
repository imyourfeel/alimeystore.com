<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <div style="width: 600px; padding: 15px; margin: 0 auto;">

        <div style="text-align: center; width: 200px; margin:  0 auto;">
            <img style="height: 50px; width: 50px;" src="https://i.ibb.co/q7t57dJ/alimeystore-icon.jpg" alt="alimeystore-icon" border="0">
        </div>

        <h2 style="color: #d23600;">Hello <?= user()->fullname ?>,</h2>
        <p>Your order confirmation details: <span style="color: #0b97c4;">
                #<?= $data['order_no'] ?>
            </span>
        </p>

        <table cellspacing="5" cellpadding="5" border="0" width="600" style="border: 1px solid #0a0a0a;">
            <tr style="background-color: #d23600; color: #ffffff;">
                <th style="text-align: left;">Product Name</th><th>Unit Price</th><th>Quantity</th>
                <th>Total</th>
            </tr>
            <?php foreach ($data['product'] as $item): ?>
                <tr>
                    <td width="400"><?= $item['name'] ?></td>
                    <td width="100">$ <?= $item['price'] ?></td>
                    <td width="50"><?= $item['quantity'] ?></td>
                    <td width="50">$<?= $item['total'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <h4>Total Amount: $ <?= $data['total'] ?></h4>

        <h2>We hope to see you again.</h2>
        <h3>Thank you</h3>
        <h4>Alimey Store</h4>
    </div>
</body>
</html>

