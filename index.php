<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>【演習問題】PHP</title>
        <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body>
    <h1>問題1</h1>
    <table>
      <?php for($i = 1; $i <= 9; $i++){ ?>
        <tr>
          <?php for($j = 1; $j <= 9; $j++){ ?>
            <td><?php echo $i * $j; ?></td>
          <?php } ?>
        </tr>
      <?php } ?>
    </table>
  </body>
</html>
