<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="#" class="nav_logo">
                <img class="nav_logo-icon" src="<?= base_url('assets/img/logo.png') ?>" alt="" srcset=""><span
                    class="nav_logo-name">Berkah Laundry</span>
            </a>
            <div class="nav_list">
                <a href="<?= base_url('admin/dasboard') ?>" class="nav_link"> <i class='bx bx-grid-alt nav_icon'></i>
                    <span class="nav_name">Dashboard</span> </a>
                <a href="<?= base_url('admin/user') ?>" class="nav_link active"> <i class='bx bx-user nav_icon'></i>
                    <span class="nav_name">Admin</span> </a>
                <a href="<?= base_url('admin/member') ?>" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span
                        class="nav_name">Member</span> </a>
                <a href="<?= base_url('admin/paket') ?>" class="nav_link">
                    <ion-icon name="briefcase-outline" class="nav_icon"></ion-icon><span class="nav_name">Paket</span>
                </a>
                <a href="<?= base_url('admin/transaksi') ?>" class="nav_link">
                    <ion-icon name="cart-outline" class="nav_icon"></ion-icon> <span class="nav_name">Transaksi</span>
                </a>
                <a href="<?= base_url('admin/laporan') ?>" class="nav_link">
                    <ion-icon name="reader-outline"></ion-icon> <span class="nav_name">Laporan</span>
                </a>
            </div>
        </div>
        <a href="<?= base_url('logout') ?>" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                class="nav_name">Sign Out</span> </a>
    </nav>
</div>
<!--Container Main start-->
<div class="height-100 bg-light">
    <div class="card px-3 shadow-sm">
        <table class="table table-striped table-hover">
            <div class="table_header">
                <p>Pengaturan Admin</p>
                <div class="">
                    <button class="add_new" id="myBtn" data-bs-toggle="modal" data-bs-target="#ModalTambah">+ Tambah
                        Data</button>
                </div>
            </div>
            <thead class="bg-cyan">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nama Pengguna</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telp</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($user as $us) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $us['nama'] ?></td>
                        <td><?= $us['username'] ?></td>
                        <td><?= $us['email'] ?></td>
                        <td><?= $us['notelp'] ?></td>
                        <td>
                            <a class="btn btn-sm btn-edit" href="<?= base_url('admin/user/ubah/' . $us['id_user']) ?>"
                                id="btnEdit">Edit</a>
                            <a class="btn btn-sm btn-danger tombol-hapus"
                                href="<?= base_url('admin/user/hapusUser/' . $us['id_user']) ?>">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="d-flex justify-content-between align-items-center">
            <span class="text-cyan1 text-capitalize mb-3">Menampilkan 1 dari <?= $total_rows ?> data</span>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>
<!--Container Main end-->

<!-- Modal Tambah -->
<div class="modal fade" id="ModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content" style=" border:none!important;">
            <div class="modal-body">
                <h4 class="text-center">Tambah Admin</h4>
                <hr>
                <form action="<?= base_url('admin/user/tambah') ?>" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Nama Pengguna</label>
                        <input type="text" class="form-control" id="username" name="username"
                            placeholder="Masukkan Username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Masukkan Password" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="telp" class="form-label">Telp</label>
                        <input type="text" class="form-control" id="telp" name="telp" placeholder="Masukkan Telp"
                            required>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="button" class=" btn btn-back" data-bs-dismiss="modal"
                            aria-label="Close">Batal</button>
                        <button class="btn btn-edit" data-bs-dismiss="modal">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Tambah End -->