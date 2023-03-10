# [ARCAVIDIA](arcavidia.my.id)
Website pendaftaran lomba yang dibuat untuk memenuhi Tugas Besar ARC 2023.

## Fitur
1. Registrasi akun peserta
2. Login akun peserta
3. Reset password akun peserta
4. Dashboard peserta
5. Login akun admin
6. Dashboard admin
7. Update akun peserta
8. Delete akun peserta

## Cara menjalankan aplikasi
1. Install [XAMPP](https://www.apachefriends.org/download.html)
2. Clone repository ini pada folder htdocs (ex: C:\xampp\htdocs)
3. Jalankan XAMPP, start module Apache dan MySQL
2. Import database dari arcavidia_1_0.sql ke [phpMyAdmin](localhost/phpmyadmin)
3. Akses website melalui http://localhost/ARCAVIDIA/home/

## Pembagian Tugas
1. [Auralea Alvinia Syaikha | 19622294](https://github.com/auraleaas) (membuat halaman home)
2. [Yusuf Ardian Sandi | 19622054](https://github.com/Yusufarsan) (membuat front-end sistem login dan register)
3. [Sa'ad Abdul Hakim | 19622131](https://github.com/saadabha) (membuat back-end sistem login, register, forget password)
4. [Muhammad Fadhli | 16522081](https://github.com/Shadepar) (membuat halaman dashboard peserta)
5. [Muhammad Dava Fathurrahman | 19622160](https://github.com/mdavaf17) (membuat sistem admin, membuat sistem kode OTP, dan deploy ke hosting)

## Screenshot Website

![homepage.png](https://i.ibb.co/WkxGQVQ/image.png)

![registerpage.png](https://i.ibb.co/SKVYt8p/image.png)

![registerpage.png](https://i.ibb.co/kDmQWqj/image.png)

![loginpage.png](https://i.ibb.co/hK0YzJ6/image.png)

![forgetpage.png](https://i.ibb.co/MhKjkxr/image.png)

![dashboardpeserta.png](https://i.ibb.co/6gs3b4R/image.png)

![dashboardadmin.png](https://i.ibb.co/yRWZMzy/image.png)

![viewpeserta.png](https://i.ibb.co/XxzbxTd/image.png)

![updatepeserta.png](https://i.ibb.co/hLv5yYv/image.png)

## Published
https://arcavidia.my.id

#### Catatan:
1. Akun admin didaftarkan manual (insert ke database) dengan enkripsi php password_hash
