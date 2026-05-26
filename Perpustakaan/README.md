Nama    : Naufal Setyabagas Alifian
NIM     : 60324033
Kelas   : Pemprograman Web B
## Deskripsi
Project tugas Laravel mengenai migration tabel kategori, seeder, accessor, dan scope pada model Buku dan Anggota.

---

## Fitur

### Tugas 1
- Migration tabel `kategori`
- Model `Kategori`
- Seeder data kategori:
  - Programming
  - Database
  - Web Design
  - Networking
  - Data Science

### Tugas 2

#### Model Buku
Accessor:
- status_stok_badge
- tahun_label

Scope:
- stokMenipis()
- hargaRange()
- terbaru()

#### Model Anggota
Accessor:
- status_badge
- kategori_usia

Scope:
- jenisKelamin()
- terdaftarBulanIni()

---

## Cara Menjalankan

```bash
composer install
php artisan migrate
php artisan db:seed
php artisan serve