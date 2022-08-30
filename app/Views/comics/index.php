<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="mt-2">Daftar Komik</h1>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Sampul</th>
            <th scope="col">Judul</th>
            <th scope="col">Penulis</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($comics as $comic) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><img src="/img/<?= $comic['cover']; ?>" alt="<?= $comic['title']; ?>" class="cover_img"></td>
              <td><?= $comic['title']; ?></td>
              <td><?= $comic['author']; ?></td>
              <td><?= $comic['publisher']; ?></td>
              <td>
                <a href="#" class="btn btn-info">Detail</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>