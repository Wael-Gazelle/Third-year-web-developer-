<?php
$is_image = $url == '/military/image';
$is_info  = $url == '/military/info';
?>

<h1>military</h1>

<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link <?= $is_image ? "active" : "" ?>" href="/military/image">
        Image
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?= $is_info ? "active" : "" ?>" href="/military/info">
        Information
    </a>
  </li>
</ul>

<?php if ($is_image) { ?>
    <?php require "../views/military_image.php"; ?>
<?php } elseif ($is_info) { ?>
    <?php require "../views/military_info.php"; ?>
<?php } ?>