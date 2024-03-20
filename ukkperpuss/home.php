<h1 class="mt-4">Digital Library</h1>
<ol     class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Harap mengisi data untuk meminjam buku!</li>
</ol>
<div class="row">
 
 <div class="col-md-3 col-sm-12 mb-3">
 <div class="card">
 <img src="gambarkategori.jpg" class="card-img-top" alt="..." width="30" height="200">
 
 <div class="card-body">
 <div class="card-title"><h4>Total Kategori</h4></div>
 </div>
 
 <div class="card-footer">
    <a href="?page=kategori" class="card-link">Lihat</a>
    </div>
    </div>
    </div>
 
 <div class="col-md-3 col-sm-6 mb-3">
 <div class="card">
 <img src="gambartotalbuku.jpg" class="card-img-top" alt="..." width="30" height="200">
 
 <div class="card-body">
 <div class="card-title"><h4>Total Buku</h4></div>
 </div>
 
 <div class="card-footer">
 <a href="?page=buku" class="card-link">Lihat</a>
 </div>
 </div>
 </div>
 
 <div class="col-md-3 col-sm-6 mb-3">
 <div class="card">
 <img src="gambartotalulasan.jpg" class="card-img-top" alt="..." width="30" height="200">
 
 <div class="card-body">
 <div class="card-title"><h4>Total Ulasan</h4></div>
 </div>
 
 <div class="card-footer">
 <a href="?page=ulasan" class="card-link">Lihat</a>
 </div>
 </div>
 </div>

 <div class="col-md-3 col-sm-6 mb-3">
 <div class="card">
 <img src="gambarpenggunaperpus.jpg" class="card-img-top" alt="..." width="30" height="200">
 
 <div class="card-body">
 <div class="card-title"><h4>Total Pengguna</h4></div>
 </div>
 
 <div class="card-footer">
 <a href="?page=peminjaman" class="card-link">Lihat</a>
 </div>
 </div>
 </div>
 
</div>
<div class="card">
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <td width="200">Nama</td>
                <td width="1">:</td>
                <td><?php echo $_SESSION['user']['nama']; ?></td>
            </tr>
            <tr>
                <td width="200">Level User</td>
                <td width="1">:</td>
                <td><?php echo $_SESSION['user']['level']; ?></td>
            </tr>
            <tr>
                <td width="200">Tanggal Login</td>
                <td width="1">:</td>
                <td><?php echo date('d-m-y'); ?></td>
            </tr>
        </table>
    </div>
</div>