<?php if(isset($_SESSION['is_logged_in'])) : ?>

<?php require_once('top1.php'); ?>
<?php Messages::display(); ?>
<?php require($view); ?>

<?php require_once('footer1.php'); ?>


<?php else : ?>
<?php require_once('top.php'); ?>
<br>

<?php require($view); ?>

<?php require_once('foot.php'); ?>
 <?php endif; ?>