1. Tujuan Proyek
Objektif
Aplikasi ini dirancang untuk memudahkan pengelolaan inventaris barang dalam perusahaan. Sistem ini bertujuan untuk menyediakan cara yang efisien bagi perusahaan dalam mencatat, memantau, dan melaporkan stok barang yang ada. Aplikasi ini juga mendukung pencatatan transaksi barang yang masuk dan keluar, termasuk pengelolaan stok, harga, dan kategori produk.

Latar Belakang

Manajemen persediaan barang yang baik sangat penting untuk kelancaran operasi bisnis perusahaan. Seiring berkembangnya perusahaan dan meningkatnya jumlah produk, sistem pengelolaan inventaris yang efektif dan efisien menjadi sangat dibutuhkan. Aplikasi ini diharapkan dapat membantu dalam pengelolaan data barang, termasuk proses pemasukan dan pengeluaran barang secara terorganisir.

2. Fitur Utama
Untuk Pengelola (Admin/Pengguna Utama)
Pengelolaan Barang

Admin dapat menambah, mengubah, atau menghapus barang dengan informasi seperti:
Nama barang
Kategori barang
Deskripsi barang
Harga barang
Stok yang tersedia
Data barang dapat disinkronkan dengan sistem utama atau disimpan secara lokal pada perangkat jika tidak ada koneksi internet.

Pencatatan Transaksi
Admin dapat mencatat transaksi barang yang masuk atau keluar dari sistem, baik itu pembelian, penjualan, atau pengembalian barang.
Informasi yang dicatat meliputi:
Nama produk yang terlibat
Jumlah produk yang dipindahkan
Total harga transaksi
Tanggal transaksi
Nama dan informasi pengirim atau penerima barang

Laporan Inventaris

Admin dapat membuat laporan terkait status stok barang, termasuk:
Barang dengan stok terbatas
Barang yang telah habis
Barang yang perlu pemesanan ulang
Laporan juga mencakup nilai total stok barang berdasarkan harga satuan.
Untuk Pengguna (Staf Operasional / Pembeli Internal)
Melihat Katalog Barang

Pengguna dapat melihat daftar barang yang tersedia, dengan informasi yang mencakup:
-Nama barang
-Harga satuan
-Stok yang tersedia
-Kategori
Deskripsi singkat
Memesan Barang
Pengguna dapat memesan barang yang diperlukan untuk kegiatan operasional (jika pengelolaan internal).
Barang yang dipesan akan dicatat oleh sistem, termasuk jumlah yang diminta dan alasan pemesanan.

3. Persyaratan Fungsional
Sistem Login
Akses Berdasarkan Peran:
Admin: Dapat mengelola data barang, memproses transaksi, membuat laporan, dan mengelola pengaturan sistem.
Pengguna: Dapat melihat daftar barang dan membuat pemesanan internal jika diperlukan.
Pengaturan & Tampilan Produk dan Transaksi
Admin:
Dapat mengatur katalog barang, mencatat transaksi masuk/keluar barang, serta memproses pengembalian barang.
Dapat menghasilkan laporan mengenai status stok barang dan transaksi yang telah dilakukan.
Pengguna:
Dapat melihat barang yang tersedia dan melakukan pemesanan untuk keperluan internal atau operasional perusahaan.

4. Persyaratan Non-Fungsional
Kegunaan

Antarmuka aplikasi harus sederhana dan intuitif, memungkinkan admin untuk dengan mudah menambah, mengubah, atau menghapus barang, serta mencatat transaksi.
Pengguna (staf operasional) harus dapat dengan mudah melihat daftar barang dan memesan barang yang dibutuhkan.
Keamanan

Pengelolaan data barang dan transaksi harus dilindungi dengan sistem autentikasi pengguna berbasis peran.
Data transaksi dan informasi terkait barang harus dilindungi dengan enkripsi untuk menjaga kerahasiaan dan integritas data.
Kinerja
Aplikasi harus dapat memproses transaksi dan memuat data barang dengan cepat, terutama saat ada banyak transaksi atau data barang yang terlibat.

5. Model, Migrasi, Resource, dan Data Awal yang Dibutuhkan
Model Data
Products (Barang)
Menyimpan informasi produk yang dikelola, seperti nama barang, harga, stok, kategori, dan deskripsi. Produk yang dikelola bisa berupa barang dagangan atau perlengkapan operasional perusahaan.

Transactions (Transaksi)
Menyimpan informasi transaksi barang yang masuk atau keluar. Transaksi ini bisa berupa pembelian barang, penjualan barang, atau pemindahan barang antar gudang.

Orders (Pesanan)
Menyimpan data pesanan barang yang dibuat oleh pengguna internal (staf) untuk keperluan operasional atau pembelian ulang barang.