<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Chat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body{
            position: relative;
            height: 100vh;
        }
        header, footer{
            background-color: green;
        }
        footer{
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <?php require_once "./mvc/views/blocks/header.php" ?>
    <section>
    <?php require_once "./mvc/views/pages/".$data["page"].".php"; ?>
    </section>
    <?php require_once "./mvc/views/blocks/footer.php" ?>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="./public/js/main.js"></script>
</body>
</html>