<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
   
<div class="container">
  <h1>Semua Film</h1>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <tr>
                        <th>No.</th>
                        <th>Nama Film</th>
                        <th>Cover</th>
                        <th>Genre</th>
                        <th>Duration</th>
                        <th>Action</th>
                    </tr>

                    <?php $i = 1; 
                    foreach ($data_film as $film): ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $film["nama_film"] ?></td>
                            <td><img src="/assets/cover/<?= $film["cover"] ?>" alt="Image" height="60" width="45"</td>
                            <td><?= $film["nama_genre"] ?></td>
                            <td><?= $film["duration"] ?></td>
                            <td>
                                <a href="" class="btn btn-success">Update</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    
                </table>
            </div>

        </div>
</div>

<?= $this->endSection() ?>