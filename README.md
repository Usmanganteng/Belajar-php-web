<b>POINT UTAMA</b>
---
> #### KENAPA PHP WEB
> - Mudah dipelajari : PHP adalah bahasa yang bagus untuk pemula, karena ada banyak sumber daya yang tersedia untuk membantu Anda menguasainya.
> - Sangat populer : PHP adalah salah satu bahasa yang paling banyak digunakan dalam pengembangan web, yang berarti semakin banyak orang yang menggunakannya.
> - Open-source : PHP adalah sumber terbuka dan tersedia tanpa biaya.
> - Serbaguna : PHP dapat digunakan untuk apa saja.
> - Terintegrasi dengan teknologi web : PHP terintegrasi dengan baik dengan teknologi web lainnya, seperti HTML, CSS, dan JavaScript, menjadikannya pilihan populer bagi pengembang web.
---
> #### PHP WEB
> -  Web adalah kumpulan informasi yang dapat diakses melalui internet, bukan internet itu sendiri.
> -  Web server merupakan aplikasi yang menyimpan dan menyampaikan isi informasi web.
> -  Web hosting disediakan oleh penyedia data center untuk menyimpan website.
> -  Domain digunakan sebagai alias alamat IP untuk mempermudah mengakses website.
> -  Web browser mengubah bahasa mesin dari web server menjadi tampilan visual yang bisa dipahami oleh pengguna.
---
> #### CARA KERJA PHP WEB
> -  Cara kerja PHP web melibatkan tiga pihak utama: web browser, web server, dan kode program PHP.
---
> #### PHP DEVELOPMENT SERVER
> -  PHP Development Server digunakan untuk mempermudah proses development aplikasi web PHP, bukan untuk dijalankan di web hosting.
> -  Untuk menjalankan PHP Development Server, cukup gunakan perintah ```php -S localhost:port```.
>
> Berikut ketika berhasil menginput kodenya :
>
> ```
> $ cd /path/to/your/php/files
> $ php -S localhost:800
> ```
---
> #### MENJALANKAN PHP WEB HELLO WORLD
> -  Membuat halaman web sederhana dengan PHP mirip dengan membuatnya menggunakan PHP dasar, namun outputnya dirender di browser.
> -  Pembuatan halaman "Hello World" menggunakan PHP sangat sederhana, cukup akses localhost dengan file PHP yang telah dibuat.
>
> Tampilan php web hello world :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/f5bab7f1-d376-48e3-bc7b-aad9ea6e8de8)
>
> Tampilan http request dan response :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/92639630-4479-4564-95b1-92339e3a8c15)
---
> #### PHP INFO
> - PHP info adalah fitur untuk mengecek versi PHP dan ekstensi yang aktif, dapat diakses melalui browser dengan membuat file ```phpinfo.php``` dan memanggil fungsi ```phpinfo()```.
>
> Berikut kode php info :
>
> ```
> <?php
> phpinfo()
> ;?>
> ```
> 
> Berikut tampilan php info :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/144b753f-3bc6-4c75-be42-5e2cba52f4c0)
---
> #### INTEGRASI DENGAN HTML
> - Integrasi PHP dengan HTML memungkinkan pembuatan web dinamis, di mana kode PHP dapat dimasukkan di dalam kode HTML dengan menggunakan tag ```<?php ?>```.
> - Penggunaan PHP dalam HTML dapat disingkat dengan langsung memasukkan variabel atau data ke dalam HTML menggunakan sintaks ```<?= ?>```, menghindari penggunaan ```echo``` atau ```print```.
> - PHP dapat mengintegrasikan tag HTML, CSS, dan JavaScript dengan baik.
>
> Berikut kode integrasi dengan html :
> ```
> <!DOCTYPE html>
> <html>
> <head><title><?php echo "Welcome to My Website"; ?></title>
> </head>
> <body>
> <h1>Selamat datang, <?php echo "Visitor"; ?>!</h1>
> <p>Ini adalah contoh HTML dan PHP yang diintegrasikan. </p>
> <?php
>    $nomor = 1;
>    $array_buah = array("Apel", "Jeruk", "Mangga", "Pisang");
>
>   foreach($array_buah as $buah){
>     echo "<p>$nomor. $buah</p>";
>     $nomor++;
>   }
>   ?>
> </body>
> </html>
> ```
---
> #### $_SERVER
> - Di PHP, terdapat global variable bernama $_SERVER
> - Variabel global server dalam PHP berisi informasi tentang request masuk, seperti header HTTP.
> - Global variable server mengikuti spesifikasi RFC 3875 dan berisi banyak informasi, seperti query-string dan alamat remote.
>
> Berikut kode menampilkan isi $_SERVER :
>
> ```
> <html>
>  <head>
>    <title>Document</title>
>  </head>
>    <body>
>      <h1>$_SERVER</h1>
>          <table border="1">
>              <?php foreach ($_SERVER as $key => $value) { ?> 
>                      <tr>
>                        <td><?= $key ?></td>
>                        <td><?= $value ?></td>
>                      </tr>
>             <?php } ?>
>          </table>
>   </body>
>  </html>
>  ```
> Berikut tampilan isi $_SERVER :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/02eff704-a639-4bf4-88f8-d417dd161430)
---
> #### QUERY PARAMETER
> - Penggunaan query parameter dalam URL memungkinkan pengiriman informasi tambahan dari client ke server secara dinamis.
---
> #### $_get
> - Global variable $_GET dalam PHP berisi data dari query parameter yang dikirimkan oleh client.
>
> Berikut kode $_get :
>
> ```
> <?php
>
> $say = "Hello " . $_GET['name'];
> ?>
> <html>
> <head>
>    <title>Document</title>
> </head>
> <body>
>     <h1><?= $say ?></h1>
> </body>
> </html>
> ```
---
> #### CROSS SITE SCRIPTING
> - Cross-site scripting (XSS) adalah celah keamanan yang bisa dimanfaatkan oleh penyerang dengan mengirimkan skrip melalui query parameter.
> - Cross-site scripting (XSS) adalah masalah keamanan serius yang terjadi ketika kode JavaScript berbahaya disisipkan ke dalam halaman web, yang dapat menyebabkan pencurian sesi pengguna yang login.
>
---
> #### CARA MENCEGAH CROSS SITE SCRIPTING
> - Untuk mencegah Cross-site scripting, gunakan fungsi htmlspecialchars() untuk merubah tag HTML menjadi karakter-karakter yang aman.
>
> Berikut kode untuk mencegah xss :
>
> ```
> <?php
> 
> $say = "Hello " . htmlspecialchars($_GET['name']);
> ?>
> <html>
> <head>
>     <title>Document</title>
> </head>
> <body>
>     <h1><?= $say ?></h1>
> </body>
> </html>
> ```
---
> #### FORM POST
> - Ketika menggunakan formulir HTML, hindari metode GET default dan gunakan metode POST untuk mengirim data ke server untuk menghindari menyimpan data sensitif di URL.
>
> #### $_POST
> - $_POST adalah global variable yang berisikan data array yang dikirim dari client ke server dalam bentuk form post.
>
> Berikut kode form post :
>
> ```
> <!DOCTYPE html>
>  <html lang="en">
>  <head>
>      <meta charset="UTF-8">
>      <meta name="viewport" content="width=device-width, initial-scale=1.0">
>      <title>Document</title>
>  </head>
>  <body>
>      <form action="Post.php" method="post">
>          <label for=""> First name :
>          <input type="text" name="first_name">
>       </label>
>        <br>
>        <label for=""> last name :
>            <input type="text" name="last_name">
>        </label>
>        <br>
>        <input type="submit" value="Register">
>    </form>
>  </body>
>  </html>
>  ```
> 
> Berikut kode menerima form post :
>
> ```
> <html>
>  <head>
>    <title>Document</title>
>  </head>
>  <body>
>     <table>
>         <tr>
>            <td>First Name :</td>
>            <td><?= $_POST['first_name']?></td>
>        </tr>
>        <tr>
>            <td>last name :</td>
>            <td><?= $_POST['last_name']?></td>
>        </tr>
>    </table>
>  </body>
>  </html>
> ```
---
> #### HEADER
> - Header dalam HTTP request dan response menyimpan informasi tambahan di luar URL, yang bisa dikirimkan oleh klien atau dibuat oleh server. Semua header dikonversi menjadi huruf besar dan spasi diganti menjadi underscore.
>
> Berikut kode menangkap header :
>  ```
>  <?php
>
>  $client = $_SERVER['HTTP_CLIENT_NAME'];
>
>  echo "Hello $client";
> ```
---
> #### MENAMBAH HEADER RESPONSE
> - Tambahan informasi dalam HTTP response dapat ditambahkan melalui header, seperti versi aplikasi atau informasi waktu server.
> - Header dalam PHP harus ditambahkan sebelum rendering konten HTML untuk mematuhi spesifikasi HTTP.
> - HTTP header tidak sensitif terhadap huruf besar-kecil, namun disarankan untuk konsisten dalam penggunaan.
---
> ### REDIRECT
> - Redirect dari satu halaman ke halaman lain bisa dilakukan dengan mengirimkan header ```Location``` dalam respons HTTP.
>
> Berikut kode redirect :
>
> ```
> <?php
> header('Location: /infophp.php');
> exit();
> ```
---
> #### SESSION
> - Session digunakan untuk menyimpan informasi klien di server, memungkinkan server menjadi stateful dalam interaksi dengan klien.
> - Ketika menggunakan session dalam PHP untuk proses login, informasi login dapat disimpan di sisi server dan dikirimkan kembali ke browser untuk disimpan.
>
> #### MEMASTIKAN FITUR SESSION DI PHP
> - Pastikan PHP yang diinstal mendukung fitur session; periksa dokumentasi PHP untuk memastikan session supportnya.
>
> #### $_SESSION
> - Gunakan global variable $_SESSION untuk menyimpan data session di PHP.
> - Gunakan ```session_start()``` untuk memulai session sebelum mengakses atau mengubah data session.
>
> Berikut kode menjalankan session form login :
>
> ```
><?php
> session_start();
>
> if ($_SESSION['login'] == true){
>    header('Location: /session/member.php');
>    exit();
> };
>
>    $error = "";
>    if ($_SERVER['REQUEST_METHOD'] == "POST") {
>        if ($_POST['username'] == 'aldizar' && $_POST['password'] = 'aldizar'){
>            $_SESSION['login'] = true;
>            $_SESSION['username_login'] = 'ai   dizar';
>            header('Location: /session/member.php');
>            exit();
>        }else {
>            $error = "login gagal";
>        }
>    }
> ?>
>
> <html>
> <body>
>     <?php if($error !=""){?>
>        <h2><?= $error ?></h2>
>    <?php } ?>
>    <form action="/session/login.php" method="post">
>        <label> Username :
>            <input type="text" name="username">
>        </label>
>        <br>
>        <label> Password :
>            <input type="password" name="pssword">
>        </label>
>        <br>
>        <input type="submit" name="Login">
>    </form>
>  </body>
> </html>
> ```
> 
> Berikut kode form logout :
> ```
> <?php
>
>session_start();
>session_destroy();
>
>header('Location: /session/login.php');
>exit();
>```
> 
> Berikut kode form member :
>```
><?php
>
>session_start();
>
>if($_SESSION['login'] != true) {
>    header('Location: /session/login.php');
>    exit();
>}
>
>$say = "Hello " . $_SESSION['username_login'];
>?>
>
><html>
>    <body>
>        <h1><?= $say ?></h1>
>        <a href="/session/logout.php">Logout</a>
>    </body>
></html>
>
---
> #### MASALAH DENGAN PHP SESSION
> - Penting untuk memahami masalah yang terkait dengan penggunaan session dalam PHP, seperti masalah dengan penyimpanan file session di server yang berbeda dan kinerja yang lambat saat menyimpan data besar dalam session.
---
> #### COOKIE
> - Cookie adalah data yang dikirimkan oleh server dan disimpan di browser untuk mengirim informasi ke server tanpa keterlibatan tampilan halaman.
> - Disarankan untuk mengatur atribut ```HttpOnly``` pada cookie menjadi ```true``` agar tidak dapat diakses oleh JavaScript, mengurangi risiko serangan cross-site scripting (XSS).
> - Hatilah dalam penggunaan cookie, hindari menyimpan terlalu banyak data di dalamnya karena semua data akan dikirim dalam setiap permintaan HTTP, yang dapat memperlambat kinerja.
---
> #### SESSION DAN COOKIE
> - Session ID dalam PHP disimpan di dalam Cookie dan digunakan sebagai identifier untuk file session di server.
> - PHP session ID disimpan di Cookie dan digunakan untuk mengakses file session di server, menjadikannya erat terkait dengan Cookies.
---
> ### UPLOAD FILE
> - PHP memungkinkan upload file dari client ke server dengan mudah menggunakan global variable ```$_FILES```.
> - File yang diupload secara otomatis disimpan di folder temporary di server dan dihapus setelah request selesai untuk menghindari penumpukan.
>
> #### $_FILES
>
> Berikut kode untuk menggunakan variable $_files :
>
> ![image](https://github.com/mTakku/php-web/assets/145539342/3d98c5f6-d842-421f-842c-10885e468f37)
>
> Berikut kode form upload :
>
> ```
> <html>
> <body>
> 
> <h1>Form Upload</h1>
> <form action="upload.php" method="post" enctype="multipart/form-data">
>    <label> File :
>        <input type="file" name="upload_file">
>    </label>
>    <input type="submit" value="Upload">
> </form>
> </body>
> </html>
>```
> Berikut kode menerima file upload :
>
> ```
> <?php
> if($_SERVER['REQUEST_METHOD'] == "POST"){
>    $file_name = $_FILES['upload_file']['name'];
>    $file_type = $_FILES['upload_file']['type'];
>    $file_size = $_FILES['upload_file']['size'];
>    $file_tmp_name = $_FILES['upload_file']['tmp_name'];
>    $file_error = $_FILES['upload_file']['error'];
>}
>?>
>```
> #### MEMINDAHKAN FILE UPLOAD
> -  PHP menyediakan fungsi ```move_uploaded_file()``` untuk memindahkan file yang di-upload ke lokasi tujuan setelah di-upload.
> -  Dalam PHP, kita bisa memindahkan file dari satu lokasi ke lokasi lain menggunakan fungsi ```move_uploaded_file()```.
>
> Berikut kode memindahkan file upload :
>```
><?php
> if($_SERVER['REQUEST_METHOD'] == "POST"){
>    $file_name = $_FILES['upload_file']['name'];
>    $file_type = $_FILES['upload_file']['type'];
>    $file_size = $_FILES['upload_file']['size'];
>    $file_tmp_name = $_FILES['upload_file']['tmp_name'];
>    $file_error = $_FILES['upload_file']['error'];
>
>    move_uploaded_file($file_tmp_name, __DIR__ . '/file/' . $file_name );
>}
>?>
>```
--- 
> #### DOWNLOAD FILE
> - Saat membuat web, kadang kadang kita butuh mengembalikan content berupa file yang butuh didownload oleh client
> - Sebenarnya, kita bisa langsung megakses file tersebut melalui URL, namun kita kita mau, kita juga bisa menggunakan PHP untuk membuat content dalam bentuk file dan memaksa client untuk mendownloadnya.
> - Header HTTP ```content-disposition``` dapat digunakan untuk memaksa browser untuk mengunduh file daripada menampilkannya.
> - Untuk memaksa unduhan file, gunakan header ```content-disposition: attachment``` dan tentukan nama file dengan benar.
>
> Berikut kode download file di php :
>
> ```
> <?php
>
>if(isset($_GET['key']) && $_GET['key'] == 'rahasia'){
>    header('Content-Disposition: attachment; filename="Boneka..PNG"');
>    header('Content-Type: image/jpeg');
>    readfile(__DIR__ . '/file/boneka.PNG');
>    exit();
> }else{
>   echo "Invalid Key";
>}
>```
---

<p align="center" >
  <b>PERTANYAAN DAN CATATAN TAMBAHAN</b>
</p>

> - tidak ada

---

<p align="center" >
  <b>KESIMPULAN</b>
</p>

---

> - video ini fokus pada pengembangan fitur PHP pada website.
