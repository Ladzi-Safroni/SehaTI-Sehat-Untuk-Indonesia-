@extends ('layout.app')

@section ('header')
     <!--header sectiom start--> 
     <header class="sticky"> 
        <a href="#" class="logo"><h1><span class="fas fa-shield-virus"></span> Seha<span>TI.</span></h1></a>

        <div id="menu" class="fas fa-bars"></div>

        <nav class="navbar">
            <ul class="navbar ">
                <li><a class="active" href="#home">Home</a></li>
                <li><a href="#about">Tentang Vaksinasi</a></li>
                <li><a href="#proses">Proses </a></li>
                <li><a href="#peta">Persebaran</a></li>
                <li><a href="#kipi">KIPI</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <!--header sectiom ends-->
@endsection

@section ('content')
        <!--Content sectiom start--> 
        <!--home sectiom start-->
        <section class="home" id="home">

        <div class="content">

            <h3><span>COVID-19 Alert</span></h3>
            <h1>COVID-19 Vaccine To Prevent Corona Virus</h1>
            <p>Marilah kita lindungi diri kita dan keluarga serta orang sekitar dengan berpartisipasi mengikuti vaksinasi Covid-19.</p>
            <a href="{{ route('register') }}" class="btn">Pendaftaran Vaksin</a>   
        </div>

        <div class="image">
            <img src="image/home.svg" alt="">
        </div>

        </section>
        <!--home sectiom ends-->

        <!-- about section starts  -->

        <section class="about" id="about">

        <div class="container">

            <div class="row align-items-center flex-wrap-reverse">

                <div class="col-md-6 content">
                    <h3>Apa itu <span> Vaksinasi Covid-19?</span>   </h3>
                    
                    <p>Vaksinasi Covid-19 merupakan salah satu upaya pemerintah Indonesia dalam menangani masalah Covid-19. Vaksinasi Covid-19 bertujuan untuk menciptakan kekebalan kelompok (herd immunity) agar masyarakat menjadi lebih produktif dalam menjalankan aktivitas kesehariannya.</p>
                    <p>Kelompok prioritas penerima vaksin adalah penduduk yang berdomisili di Indonesia yang berusia ≥ 18 tahun. Kelompok penduduk berusia di bawah 18 tahun dapat diberikan vaksinasi apabila telah tersedia data keamanan vaksin yang memadai dan persetujuan penggunaan pada masa darurat (emergency use authorization) atau penerbitan nomor izin edar (NIE) dari Badan Pengawas Obat dan Makanan.</p>
                </div>

                <div class="col-md-6">
                    <img src="image/img-vaksin.svg" class="w-100" alt="">
                </div>

            </div>
        </div>

        </section>
        <div class="container2">

        <div class="image">
            <img class="img-fluid" src="https://corona.jakarta.go.id/img/logo/img-vaksin-doctor.svg" alt="">
        </div>

        <div class="d-none d-lg-block col-md-6"style="padding-top: 170px;padding-bottom: 170px;">
                <h3>Kenapa Harus Vaksin Covid-19?</h3> 
                <h5>Vaksin akan merangsang pembentukan kekebalan terhadap penyakit tertentu pada tubuh seseorang.</h5>
                <p>Setelah divaksin, tubuh akan mengingat virus atau bakteri pembawa penyakit, mengenali dan tahu cara melawannya.</p>
                <p>Vaksinasi tidak hanya bertujuan untuk memutus rantai penularan penyakit, tetapi juga dalam jangka panjang untuk mengeliminasi bahkan membasmi penyakit itu sendiri.</p>  
                <p>Apabila seseorang tidak menjalani vaksinasi, maka ia tidak akan memiliki kekebalan spesifik terhadap suatu penyakit.</p>    
                </div>
                <div class="d-lg-none col-md-6" style="padding-bottom: 70px;">
                    <h5>Vaksin akan merangsang pembentukan kekebalan terhadap penyakit tertentu pada tubuh seseorang.</h5>
                    <p>Setelah divaksin, tubuh akan mengingat virus atau bakteri pembawa penyakit, mengenali dan tahu cara melawannya.</p>
                    <p>Vaksinasi tidak hanya bertujuan untuk memutus rantai penularan penyakit, tetapi juga dalam jangka panjang untuk mengeliminasi bahkan membasmi penyakit itu sendiri.</p>
                    <p>Apabila seseorang tidak menjalani vaksinasi, maka ia tidak akan memiliki kekebalan spesifik terhadap suatu penyakit.</p>
                </div>
            </div>
        </div>
        </div>

        </div>
        <!--Prevent section start-->
        <section class="prevent" id="prevent">

        <div class="row">

            <div class="image">
                <img src="image/dont-img.png" alt="">
            </div>

            <div class="content">
                <h1 class="heading">Hal <span>Yang Tidak Boleh</span> Usai Vaksin Covid-19</h1>
                <p>Terdapat beberapa hal yang tidak boleh dilakukan sebelum dan sesudah vaksin yakni :</p>
                <ul>
                    <li>Mengabaikan Petunjuk atau Larangan Dokter yang Berkaitan Dengan Komorbit</li>
                    <li>Menekan dan Memijat Lokasi Bekas Suntikan</li>
                    <li>Mengabaikan Protokol Kesehatan 5M</li>
                </ul>
            </div>

        </div>

        <div class="row">

            <div class="content">
                <h1 class="heading">Hal <span>Yang Boleh</span> Usai Vaksin Covid-19</h1>
                <p>Melansir Kementrian Kesehatan, sejumlah hal ini boleh dilakukan sebelum dan sesudah vaksin yakni :</p>
                <ul>
                    <li>Minum Paracetamol Jika Demam atau pegal-pegal setelah vaksin </li>
                    <li>Mencukupi Kebutuhan Nutrisi</li>
                    <li>Istirahat Yang Cukup Sebelum Vaksinasi</li>
                    <li>Tetap Beraktifitas dan Mematuhi Protokol Kesehatan 5M</li>
                </ul>
            </div>

            <div class="image">
                <img src="image/do-img.png" alt="">
            </div>

        </div>

        </section>
        <!--Prevent section end-->
        <!-- about section ends -->

        <!--proses vaksinasi section starts-->
        <section class="proses" id="proses">
        <h3>Proses Vaksinasi</h3>
            <div class="container"> 
                <div class="hero">
                    <div class="review-box">
                            <div class="card">
                                <div class="profile">
                                    <img src="image/v1.png">
                                </div>
                                <div>
                                    <p>Datang sesuai jadwal yang sudah didaftarkan di web sehaTI dengan membawa e-Voucher dan KTP</p>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="hero">
                    <div class="review-box">
                        <div class="card">
                            <div class="profile">
                                <img src="image/v2.png">
                            </div>
                            <div>
                                <p>Registrasi untuk pengecekan calon penerima vaksin sudah terdaftar atau belum, dan proses verifikasi data dalam sistem vaksinasi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero">
                    <div class="review-box">
                        <div class="card">
                            <div class="profile">
                                <img src="image/v3.png">
                            </div>
                            <div>
                                <p>Pemeriksaan kesehatan berupa cek tensi darah & suhu tubuh sebelum vaksinasi, dan dilakukan proses screening </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="container">
                <div class="hero">
                    <div class="review-box">
                        <div class="card">
                            <div class="profile">
                                <img src="image/v4.png">
                            </div>
                            <div>
                                <p>Apabila lolos tahap pemeriksaan kesehatan, proses vaksinasi dilakukan </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero">
                    <div class="review-box">
                        <div class="card">
                            <div class="profile">
                                <img src="image/v5.png">
                            </div>
                            <div>
                                <p>Observasi selama 30 menit</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero">
                    <div class="review-box">
                        <div class="card">
                            <div class="profile">
                                <img src="image/v6.png">
                            </div>
                            <div>
                                <p>Vaksinasi selesai dilakukan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--proses  section ends-->

        <!--peta sectiom start-->
        <section class="peta" id="peta">
        <div class="here2">
            <h1>Persebaran Peta</h1>
            <h2>Covid-19 dan Vaksinasi</h2>
        </div>   
        <div class="peta-img">
            <img src="image/peta.png" alt="">
        </div>    
        </section>
        <!--peta sectiom end-->

        <!--proses KiPi starts-->
        <section class="kipi" id="kipi">
        <div class="here">
        <h1>KIPI</h1>
        <h2>Kejadian Ikutan Pasca Imunisasi</h2>

        <div class="container1">
            <div class="indicator">
                <span class="btn1 active"></span>
                <span class="btn1"></span>
                <span class="btn1"></span>
                <span class="btn1"></span>
            </div>
            <div class="testimonial1">
                <div class="slide-row" id="slide">
                    <div class="slide-col">
                        <div class="user-text">
                            <h3>Apa itu KIPI?</h3>
                            <p>
                                Kejadian Ikutan Pasca Imunisasi (KIPI) merupakan semua kejadian medik yang terjadi setelah imunisasi, 
                                menjadi perhatian dan diduga berhubungan dengan imunisasi.
                            </p>
                        </div>
                        <div class="user-img">
                            <img src="image/kipi0.png" alt="">
                        </div>
                    </div>
                    <div class="slide-col">
                        <div class="user-text">
                            <p>
                                Secara umum, efek samping yang timbul dapat beragam pada umumnya ringan dan bersifat sementara, 
                                dan tidak selalu ada, serta bergantung pada kondisi tubuh. 
                                Efek seperti demam dan nyeri otot atau kemerahan pada bekas suntikan adalah hal yang wajar namun tetap perlu dimonitor.
                            </p>
                        </div>
                        <div class="user-img">
                            <img src="image/kipi1.png" alt="">
                        </div>
                    </div>
                    <div class="slide-col">
                        <div class="user-text">
                            <p>
                                Manfaat vaksin jauh lebih besar dibandingkan risiko sakit karena terinfeksi bila tidak divaksin.
                            </p>
                        </div>
                        <div class="user-img">
                            <img src="image/kipi2.png" alt="">
                        </div>
                    </div>
                    <div class="slide-col">
                        <div class="user-text">
                            <p>
                                Apabila terjadi Kejadian Ikutan Pasca Imunisasi (KIPI), dapat dilaporkan kepada Fasyankes tempat pemberian vaksinasi, 
                                kemudian akan ditindaklanjuti oleh focal point yang ada di masing-masing Dinas Kesehatan dan dikaji oleh 
                                Komite Pengkajian dan Penanggulangan KIPI yang ada di setiap daerah maupun Nasional.
                            </p>
                        </div>
                        <div class="user-img">
                            <img src="image/kipi3.png" alt="">
                        </div>
                    </div>
                </div>
            </div> 

        <script>
            var btn = document.getElementsByClassName("btn1");
            var slide = document.getElementById("slide");

            btn[0].onclick = function(){
                slide.style.transform = "translateX(0px)";
                for(i=0;1<4;i++){
                    btn1[i].classList.remove("active");
                }
                this.classList.add("active");
            }
            btn[1].onclick = function(){
                slide.style.transform = "translateX(-800px)";
                for(i=0;1<4;i++){
                    btn1[i].classList.remove("active");
                }
                this.classList.add("active");
            }
            btn[2].onclick = function(){
                slide.style.transform = "translateX(-1600px)";
                for(i=0;1<4;i++){
                    btn1[i].classList.remove("active");
                }
                this.classList.add("active");
            }
            btn[3].onclick = function(){
                slide.style.transform = "translateX(-2400px)";
                for(i=0;1<4;i++){
                    btn1[i].classList.remove("active");
                }
                this.classList.add("active");
            }
        </script>
        </div>
        </section>
        <!--proses slider ends-->

        <!-- scroll top  -->
        <a href="#home" class="scroll-top">
        <img src="image/scroll.png" alt="">
        </a>


@endsection





@section ('footer')
     <!--footer sectiom start--> 
     <footer class="contact" id="contact">
        <div class="main-content">
        <div class="left box">
            <h2>Tentang Kami</h2>
            <div class="content">
            <p>sehaTI adalah web yang digunakan untuk membantu masyarakat dalam memudahkan proses pendaftaran vaksin COVID-19.</p>
            <div class="social">
                <a href="#"><span class="fab fa-facebook-f"></span></a>
                <a href="#"><span class="fab fa-twitter"></span></a>
                <a href="#"><span class="fab fa-instagram"></span></a>
                <a href="#"><span class="fab fa-youtube"></span></a>
            </div>
            </div>
        </div>

        <div class="center box">
            <h2>Alamat</h2>
            <div class="content">
            <div class="place">
                <span class="fas fa-map-marker-alt"></span>
                <span class="text">Jl. Ir. H Juanda No.198, Tonatan, Ponorogo, Jawa Timur </span>
            </div>
            <div class="phone">
                <span class="fas fa-phone-alt"></span>
                <span class="text">+088-019876154</span>
            </div>
            <div class="email">
                <span class="fas fa-envelope"></span>
                <span class="text">sehaTI@gmail.com</span>
            </div>
            </div>
        </div>

        <div class="right box">
            <h2>Contact us</h2>
            <div class="content">
            <form action="#">
                <div class="email">
                <div class="text">Email *</div>
                <input type="email" required>
                </div>
                <div class="msg">
                <div class="text">Message *</div>
                <textarea rows="2" cols="25" required></textarea>
                </div>
                <div class="btn2">
                <button type="submit">Send</button>
                </div>
            </form>
            </div>
        </div>
        </div>
        <div class="bottom">
        <center>
            <strong>Copyright &copy; 2021 <a href="#">Sistem Informasi Pendaftaran Vaksinasi</a>.</strong>
            All rights reserved.<br><b>TEAM 6</b> Version
        </center>
        </div>
    </footer>
    <!--proses footer ends-->
@endsection