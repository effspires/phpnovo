<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/logo.png">
    <title><?php echo $this->e($title)?></title>
    <?php echo $this->section('css')?>
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen, projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <?php $this->insert('partials/header')?>
    <main>
        <?php echo $this->section('content')?>
    </main>
    <?php $this->insert('partials/footer')?>
    <?php echo $this->section('js')?>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/default.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            <?php if(MSG != "") { ?>
                <?php echo "M.toast({html: '".MSG."'});"; ?>
                <?php $_SESSION['message'] = ""; ?>
            <?php } ?>
        });
    </script>
</body>
</html>