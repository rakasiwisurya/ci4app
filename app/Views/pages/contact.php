<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h1>Contact Us</h1>

      <?php foreach ($location as $loc) : ?>
        <ul>
          <li><?= $loc['type']; ?></li>
          <li><?= $loc['address']; ?></li>
          <li><?= $loc['city']; ?></li>
        </ul>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>