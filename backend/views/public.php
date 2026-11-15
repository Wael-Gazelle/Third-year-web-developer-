<?php
    $is_image = $url == '/public/image';
    $is_info = $url == '/public/info';
?>

<h1>public</h1>

<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link <?= $is_image ? "active" : "" ?>" href="/public/image">
        Image
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?= $is_info ? "active" : "" ?>" href="/public/info">
        Information
    </a>
  </li>
</ul>

<?php if ($is_image) { ?>
    <?php require "../views/public_image.php"; ?>
<?php } elseif ($is_info) { ?>
    <?php require "../views/public_info.php"; ?>
<?php } ?>