# <p align="center" style="margin-bottom: 0px;">LibraBox</p>
## <p align="center" style="margin-top: 0;">Penjualan, Penyewaan dan Tukar tambah buku</p>

<p align="center">
  <img src="LOGO-UNSULBAR.png" width="300" alt="Deskripsi gambar" />
</p>

### <p align="center">Azisah Rahmawati Yusuf</p>
### <p align="center">D0223520</p></br>
### <p align="center">Framework Web Based</p>
### <p align="center">2025</p>

---
## Role dan Fitur
### 1. Admin

| Fitur | 
| ----------- |
| Kelola Pengguna | 
| Kelola Buku | 
| Kelola Transaksi | 

### 2. Penjual

| Fitur | 
| ----------- | 
| Tambah buku | 
| edit buku | 
| Kelola Transaksi pembeli.  |  

### 3.Pembeli 
| Fitur | 
| ----------- | 
| Cari buku | 
| Beli/Sewa/Tukar tambah buku | 
| lihat riwayat  | 

---
## Tabel-tabel database beserta field dan tipe datanya

### 1. Tabel ```{users}```
| Field | Tipe Data | Keterangan |
| ----------- | ----------- | ----------- |
| id | INT(PK) | Primary Key |
| nama | VARCHAR(100) | Nama User |
| email | VARCHAR(100) | Email Unik |
| password | VARCHAR(255) | Password |
| created_at | TIMESTAMP | Waktu dibuat |


### 2. Tabel ```{Buku}```
| Field | Tipe Data | Keterangan |
| ----------- | ----------- | ----------- |
| id | INT(PK) | Primary Key |
| Title  | VARCHAR(100) | Judul buku |
| author  | VARCHAR(100) | nama Penulis buku  |
| deskripsi | teks  | Deskripsi buku  |
| kategori  | VARCHAR(100) | Kategori(Novel,Komik dll)|
| harga  | Decimal(10,2) | Harga buku |
| stock  | int | Stok buku |
| user_id | INT(FK) | Relasi ke ```{users.id}``` |
| created_at | TIMESTAMP | Waktu dibuat |

### 3. Tabel ```{Transaksi}```
| Field | Tipe Data | Keterangan |
| ----------- | ----------- | ----------- |
| id | INT(PK) | Primary Key |
| user_id | INT(FK) | Relasi ke ```{users.id}``` |
| type_transaksi  | ENUM | beli','sewa','tukar_tambah' |
| totak_harga | Decimal(10,2) | Total harga yang dibayar |
| status  | ENUM | 'pending','done','cancel' |
| tanggal_mulai  | DATE | sewa : Tanggal mulai |
| tanggal_selesai |DATE  | sewa : Tanggal selesai |
| old_book_title | varchar(50)  | Judul buku lama untuk tukar tambah  |
| old_book_kondisi |teks | Kondisi buku lama untuk tukar tambah  |
| selisi_harga | Decimal(10,2) | Selisih harga untuk buku tukar tambah  |
| created_at | TIMESTAMP | Waktu dibuat |

### 4. Tabel ```{transaksi_items}```
| Field | Tipe Data | Keterangan |
| ----------- | ----------- | ----------- |
| id | INT(PK) | Primary Key |
| tansaksi_id | INT(FK) | Relasi ke ```{transaksi.id}``` |
| buku_id | INT(FK) | Relasi ke ```{buku.id}``` |
| jumlah_buku | int |jumlah buku  |
| harga_pada_waktu | Decimal(10,2) | harga perbuku |
| created_at | TIMESTAMP | Waktu dibuat |


### 5. Tabel ```{rating}```
| Field | Tipe Data | Keterangan |
| ----------- | ----------- | ----------- |
| id | INT(PK) | Primary Key |
| user_id | INT(FK) | Relasi ke ```{user.id}``` |
| buku_id | INT(FK) | Relasi ke ```{buku.id}``` |
| rating  | int (1-5) | skor ulasan |
| komen  | teks | komentar ulasan |
| created_at | TIMESTAMP | Waktu dibuat |


---
## Jenis relasi dan tabel yang berelasi
| Tabel Asal | Tabel Tujuan | Jenis Relasi | Keterangan |
| ----------- | ----------- | ----------- | ----------- |
| ```users.buku_id``` | ```buku.id``` | one to many| satu user (penjual) bisa menjual banyak buku |
| ```users.transaksi_id``` | ```transaksi.id``` | one to many| satu user (pembeli/penyewa) bisa melakukan banyak transaksi |
| ```transaksi.items_id``` | ```items.id``` | one to many| satu transaksi bisa mencakup banyak buku |
| ```buku.transaksi_id``` | ```transksi.id``` | one to many| satu buku bisa muncul di banyak transaksi |
| ```users.rating_id``` | ```rating.id``` | one to many| satu user bisa memberikan banyak rating  |
| ```buku.rating_id``` | ```rating.id``` | one to many| satu buku bisa menerima banyak ulasan |