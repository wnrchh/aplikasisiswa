

    <!-- loader -->
    <div id="loader">
        <img src="assets/img/loading-icon.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            <img src="assets/img/logoo2.png" alt="logo" class="logo">
        </div>
        <div class="right">
            <a href="" class="headerButton">
                <ion-icon class="icon" name="notifications-outline"></ion-icon>
                <span class="badge badge-danger">4</span>
            </a>
        </div>
    </div>
    <!-- * App Header -->


    <!-- App Capsule -->
    <div id="appCapsule">

        <!-- Wallet Card -->
        <div class="section wallet-card-section pt-1">
            <div class="wallet-card">
                <!-- Balance -->
                <div class="balance">
                    <div class="left">
                        <h1 class="title"><?=$this->session->userdata('active_user')->name?></h1>
                        <h4><?=$kelas_siswa?></h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- Wallet Card -->

        


        <!-- Tugas -->
        <div class="section mt-4">
            <div class="section-heading">
                <h2 class="title">Tugas</h2>
            </div>
            <div class="transactions">


<?php  foreach ($data_tugas as $key => $value){?>  

                <!-- item -->
                <a href="" class="item">
                    <div class="detail">
                        <div>
                            <strong><?=$value->mata_pelajaran?></strong>
                            <p><?=$value->tugas?></p>
                            <p><?=$value->deadline?></p>
                        </div>
                    </div>
                </a>
                <!-- * item -->

<?php } ?>
                
            </div>
        </div>
        <!-- * Tugas -->

        <!-- News -->
        <div class="section full mt-4 mb-3">
            <div class="section-heading padding">
                <h2 class="title">Berita</h2>
                <a href="" class="link">View All</a>
            </div>

            <!-- carousel multiple -->
            <div class="carousel-multiple splide">
                <div class="splide__track">
                    <ul class="splide__list">




 <?php  foreach ($data_berita as $key => $value){

                    if(strlen($value->foto) > 10){
                        $obj = json_decode($value->foto);
                        $foto = $obj['0']->{'file_thumbnail'};
                    }else{
                        $foto = base_url().'assets/images/default.jpg';                   
                    }






?>                  
    


                        <li class="splide__slide">   
                                <div class="blog-card">
                                    <img src="<?=$foto?>" alt="image" class="imaged w-100" style="height: 150px; width: auto;">
                                    <div class="text">
                                        <h4 class="title"><?=$value->judul?></h4>
                                    </div>
                                </div>
                        </li>

    <?php } ?>


                    </ul>
                </div>
            </div>
            <!-- * carousel multiple -->

        </div>
        <!-- * News -->

        <!-- Event -->
        <div class="section full mt-4 mb-3">
            <div class="section-heading padding">
                <h2 class="title">Event</h2>
                <a href="" class="link">View All</a>
            </div>

            <!-- carousel multiple -->
            <div class="carousel-multiple splide">
                <div class="splide__track">
                    <ul class="splide__list">

<?php  foreach ($data_event as $key => $value){

                    if(strlen($value->foto) > 10){
                        $obj = json_decode($value->foto);
                        $foto = $obj['0']->{'file_thumbnail'};
                    }else{
                        $foto = base_url().'assets/images/default.jpg';                   
                    }

?>          

                        <li class="splide__slide">
                            <div class="blog-card">
                                <img src="<?=$foto?>" alt="image" class="imaged w-100" style="height: 150px; width: auto;">
                                <div class="text">
                                    <h4 class="title"><?=$value->judul?></h4>
                                </div>
                            </div>
                        </li>

<?php } ?>

                    </ul>
                </div>
            </div>
            <!-- * carousel multiple -->

        </div>
        <!-- * Event -->

        <!-- Gallery -->
        <div class="section full mt-4 mb-3">
            <div class="section-heading padding">
                <h2 class="title">Gallery</h2>
                <a href="" class="link">View All</a>
            </div>

            <!-- carousel multiple -->
            <div class="carousel-multiple splide">
                <div class="splide__track">
                    <ul class="splide__list">

<?php foreach ($data_gallery as $key => $value) { 

                    if(strlen($value->foto) > 10){
                        $obj = json_decode($value->foto);
                        $foto = $obj['0']->{'file_thumbnail'};
                    }else{
                        $foto = base_url().'assets/images/default.jpg';                   
                    }

                    ?>

                        <li class="splide__slide">
                            <div class="blog-card">
                                <img src="<?=$foto?>" alt="image" class="imaged w-100" style="height: 150px;width: auto;">
                            </div>
                        </li>

<?php } ?>
            
                    </ul>
                </div>
            </div>
            <!-- * carousel multiple -->

        </div>
        <!-- * Gallery -->


    </div>
    <!-- * App Capsule -->


 

    <!-- App Sidebar -->
    <div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <!-- profile box -->
                    <div class="profileBox pt-2 pb-2">
                        <div class="image-wrapper">
                            <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="imaged  w36">
                        </div>
                        <div class="in">
                            <strong><?=$this->session->userdata('active_user')->name?></strong>
                            <div class="text-muted"><?=$this->session->userdata('active_user')->email?></div>
                        </div>
                        <a href="#" class="btn btn-link btn-icon sidebar-close" data-bs-dismiss="modal">
                            <ion-icon name="close-outline"></ion-icon>
                        </a>
                    </div>
                    <!-- * profile box -->
<br>            
                    <!-- menu -->
                    <ul class="listview flush transparent no-line image-listview">
                        <li>
                            <a href="<?=base_url()?>beranda" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Beranda
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>jadwal" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="list-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Jadwal
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>nilai" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="document-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Nilai
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>akademik" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="book-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Akademik
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>settings" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="settings-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Settings
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- * menu -->

                    <ul class="listview flush transparent no-line image-listview">
                        <li>
                            <a href="<?=base_url()?>login" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="log-out-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Log out
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- * App Sidebar -->

