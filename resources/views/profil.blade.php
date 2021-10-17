<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Profil Kristina Yuliana</title>
        <link rel="stylesheet" href="css/stylesheet.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
   
        <div class="profile">
        <div class="wrapper_profile">
            
            <p align="center"><font face="Lucida Calligraphy" color="black" size="8">WELCOME TO MY PROFILE</font></p>
          <p align="center"><font face="Courier New" color="black" size="5">Website Ini Dibuat Untuk Memenuhi Tugas UTS Pemrograman Basis Data</font></p>
          </div>
 <p align="center"><font face="Courier New" color="white" size="5">.</font></p>
 </body>
                <div class="photo_name">
                    <img src="img/kris.jpeg" width="290" height="240" style="border-radius: 90%;" style="text-align: center;">
                    <h1>Kristina Yuliana</h1><header style="text-align: right;">
                </div>
                <div class="detail_profile">
                    <h3>NIM</h3>
                    <p>19050974054</p>
                    <h3>JURUSAN</h3>
                    <p>TEKNIK INFORMATIKA</p>
                    <h3>PRODI</h3>
                    <p>S1 PENDIDIKAN TEKNOLOGI INFORMASI</p>
                    <h3>ASAL UNIVERSITAS</h3>
                    <p>UNIVERSITAS NEGERI SURABAYA</p>
                    <h3>EMAIL</h3>
                    <p>kristina.19054@mhs.unesa.ac.id</p>
        
        <div class="hobby">
        
        <h3>Hobby Saya</h3>
            <ul class="flex_box">
                <li>
                <img src="img/baca.jpg">
                    <h4>Belajar</h4>
                    <p>Belajar adalah salah satu kewajiban dan hobi saya sebagai Mahasiswa</p>
                </li>
                <li>
                <img src="img/masak.jpg">
                    <h4>Memasak</h4>
                    <p>Memasak adalah hobi dan moodbooster bagi saya</p>
                </li>
                <li>
                <img src="img/travelling.jpg">
                    <h4>Jalan-Jalan</h4>
                    <p>Saya hobi jalan-jalan bersama teman/keluarga ketika memiliki waktu luang</p>
                </li>  
        
           
        <div class="educations">
            <h3>Riwayat Pendidikan</h3>
            <div class="container">
                <div class="edu_left">
                    <h4>Sekolah Dasar</h4>
                    <p>2006-2012 SDN Negeri Kapuran</p>
                </div>
                <div class="edu_right">
                    <h4>Sekolah Menengah Pertama</h4>
                    <p>2013 - 2016 SMP Negeri 1 Badegan</p>
                </div>
                <div class="edu_left">
                    <h4>Sekolah Menengah Atas</h4>
                    <p>2016 - 2019 SMA Negeri 1 Bdegan</p>
                </div>
                <div class="edu_right">
                    <h4>Perguruan Tinggi</h4>
                    <p>2019- Sekarang Teknik Informatika Uiversitas Negeri Surabaya</p>
                </div>
      
                </div>
        </ul>
            
            <div class="educations">
                <div class="container">
                <a class="navbar-brand" face="Courier New"  color="black" size="7"href="contact">TAMBAHKAN KOMENTAR</a>
                <table class="table table-striped mt-4">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Nama</th>
                                <th>Komentar</th>
                                <th>Waktu Komentar</th>
                            </tr>
                        </thead>
                    <tbody>
                        @forelse ($komentarses as $komentar)
                        <tr>
                            <th>{{$loop->iteration}}</th>
                            <td>{{$komentar->nama}}</td>
                            <td>{{$komentar->coment}}</td>
                            <td>{{$komentar->created_at}}</td>
                        </tr>
                        @empty
                            <td colspan="6" class="text-center">Tidak ada data...</td>
                        @endforelse
                    </tbody>
                </div>
            </div>

        <ul>

        
</body>
</html>