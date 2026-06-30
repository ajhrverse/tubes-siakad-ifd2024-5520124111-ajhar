# Sistem Informasi Akademik (SIAKAD)

## Deskripsi Singkat

Sistem Informasi Akademik (SIAKAD) merupakan aplikasi berbasis web yang dikembangkan menggunakan **Laravel 13** dan **MySQL**. Aplikasi ini digunakan untuk membantu pengelolaan data akademik di perguruan tinggi, seperti data dosen, mahasiswa, mata kuliah, jadwal perkuliahan, serta pengambilan Kartu Rencana Studi (KRS) oleh mahasiswa.

Aplikasi menerapkan **Role Based Access Control (RBAC)** menggunakan package **Spatie Laravel Permission**, sehingga setiap pengguna memiliki hak akses sesuai dengan perannya, yaitu **Administrator** dan **Mahasiswa**.

---

# Teknologi yang Digunakan

- Laravel 13
- PHP 8
- MySQL
- Tailwind CSS
- Laravel Breeze
- Spatie Laravel Permission
- Railway (Deployment)

---

# Fitur Aplikasi

### Administrator

- Login
- Dashboard Admin
- CRUD Data Dosen
- CRUD Data Mahasiswa
- CRUD Data Mata Kuliah
- CRUD Data Jadwal
- Kelola Profil

### Mahasiswa

- Login
- Dashboard Mahasiswa
- Melihat Jadwal Perkuliahan
- Mengambil Mata Kuliah (KRS)
- Menghapus Mata Kuliah dari KRS
- Melihat Profil

---

# Penjelasan Singkat Masing-masing Halaman

## 1. Login

Halaman autentikasi pengguna. Pengguna masuk ke sistem menggunakan email dan password sesuai dengan role masing-masing.

---

## 2. Dashboard Administrator

Menampilkan informasi ringkas mengenai:

- Jumlah Dosen
- Jumlah Mahasiswa
- Jumlah Mata Kuliah
- Jumlah Jadwal

Dashboard digunakan sebagai halaman utama administrator.

---

## 3. Data Dosen

Halaman untuk mengelola data dosen.

Fitur:

- Menambah dosen
- Mengubah data dosen
- Menghapus dosen
- Melihat daftar dosen

---

## 4. Data Mahasiswa

Halaman untuk mengelola data mahasiswa.

Fitur:

- Menambah mahasiswa
- Mengubah data mahasiswa
- Menghapus mahasiswa
- Melihat daftar mahasiswa

---

## 5. Data Mata Kuliah

Halaman untuk mengelola data mata kuliah.

Fitur:

- Menambah mata kuliah
- Mengubah mata kuliah
- Menghapus mata kuliah
- Melihat daftar mata kuliah

---

## 6. Data Jadwal

Halaman yang digunakan administrator untuk mengatur jadwal perkuliahan.

Fitur:

- Menambah jadwal
- Mengubah jadwal
- Menghapus jadwal
- Melihat seluruh jadwal

---

## 7. Dashboard Mahasiswa

Halaman utama mahasiswa yang menampilkan:

- Informasi mahasiswa
- Jumlah mata kuliah yang telah diambil
- Jumlah jadwal
- Jadwal perkuliahan hari ini
- Menu cepat menuju halaman KRS dan Jadwal

---

## 8. Kartu Rencana Studi (KRS)

Mahasiswa dapat memilih mata kuliah yang akan diambil.

Fitur:

- Mengambil mata kuliah
- Menghapus mata kuliah yang telah dipilih
- Melihat daftar KRS

---

## 9. Jadwal Perkuliahan

Mahasiswa hanya dapat melihat jadwal perkuliahan yang telah dibuat oleh administrator tanpa memiliki hak untuk mengubah data.

---

## 10. Profil

Halaman yang digunakan pengguna untuk:

- Mengubah nama
- Mengubah email
- Mengubah password

---

# Akun Pengguna

## Administrator

**Email**

```
admin@siakad.com
```

**Password**

```
password
```

---

## Mahasiswa 1

**Email**

```
ahmad@mail.com
```

**Password**

```
password
```

---

## Mahasiswa 2

**Email**

```
budi@mail.com
```

**Password**

```
password
```

---

## Mahasiswa 3

**Email**

```
siti@mail.com
```

**Password**

```
password
```

---

# Demo Aplikasi

https://siakad-5520124111-production.up.railway.app/

---

# Repository GitHub

https://github.com/ajhrverse/tubes-siakad-ifd2024-5520124111-ajhar

---

# Pengembang

**Nama :** M. Permata Ajhar

**NIM :** 5520124111


