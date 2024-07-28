$(document).ready(function() {
    <?php if(MSG != "") { ?>
        <?php echo "M.toast({html: '".MSG."'});"; ?>
        <?php $_SESSION['message'] = ""; ?>
    <?php } ?>
});