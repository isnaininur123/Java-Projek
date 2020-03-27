<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Belajar</h1>
    </div>
    <ul class="list-group">
        <?php foreach ($belajar as $bljr) : ?>
            <li class="list-group-item"> <?= $bljr['nama']; ?>
                <a href="<?= base_url(); ?>admin/pesan_hapus/<?= $bljr['id']; ?>" class="badge badge-danger float-right" onclick=" return confirm('yakin ?');">Hapus</a>
                <a href="<?= base_url(); ?>admin/pesan_detail/<?= $bljr['id']; ?>" class="badge badge-primary float-right">Detail</a>
            </li>
        <?php endforeach; ?>
    </ul>

</div>
<!-- /.container-fluid -->