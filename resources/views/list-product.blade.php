<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hi</h1>
    <table border="1">
        <thead>
            <tr>ID</tr>
            <tr>Name</tr>
        </thead>
        <tbody>
            <?php foreach($products as $value): ?>
              <tr>
                  <td><?= $value['id'] ?> </td>
                 <td><?= $value['name'] ?> </td>
              </tr>
              <?php endforeach; ?>
        </tbody>

    </table>
</body>
</html>
