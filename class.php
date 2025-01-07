<?php 

require 'function.php';
require 'cek.php';

?> 



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Class</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">FIKI</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
           
            <!-- Navbar-->
            
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav" >
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-house"></i></div>
                                Home
                            </a>
                            <a class="nav-link" href="student.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></i></div>
                                Student
                            </a>
                            <a class="nav-link" href="teacher.php">
                                <div class="sb-nav-link-icon"><i class="fa-regular fa-user"></i></i></div>
                                Teacher
                            </a>
                            <a class="nav-link" href="class.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-landmark"></i></i></div>
                                Class
                            </a>
                            <a class="nav-link" href="modul.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Modul
                            </a>
                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                    </div>
                            <a class="nav-link" href="logout.php">
                                Logout
                            </a>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content" style="background:  rgb(197, 193, 172)">
                <main>
                    <div class="container-fluid">
                        <h1>Class</h1>
                        <ol class="breadcrumb">
                           
                        </ol>
                       
                        <div class="card mb-3">
                        <div class="card" style="background:  rgb(197, 193, 172)">
                                <div class="card-header text-white" style="background:  rgb(54, 63, 71)">
                                    Class
                                </div>
                                
                                <div class="card-body">
                                    <!-- Awal modal -->
                                         <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah" style="background:  rgb(92, 103, 112)">
                                        Tambah Class
                                        </button>
                                        <div class="datatable-dropdown">
                                            <label>
                                                <select class="datatable-selector">
                                                    <option value="5">5</option>
                                                    <option value="10" selected>10</option>
                                                    <option value="15">15</option>
                                                    <option value="20">20</option>
                                                    <option value="25">25</option>
                                                </select>
                                                entries per page
                                            </label>

                                        </div>
                                       
                                    <table class="table table-bordered table-striped table-hover" style="border-color:  rgb(54, 63, 71)">
                                        <tr style="text-align: center; background:  rgb(121, 131, 140)"">
                                            <th>NO</th>
                                            <th>Teacher Id</th>
                                            <th>Nama</th>
                                            <th>Class List</th>
                                            <th>Schedule</th>
                                            <th>Modul</th>
                                            <th>Aksi</th>
                                        </tr>

                                        <?php

                                        $no = 1;
                                        $tampil = mysqli_query($conn, "SELECT * FROM class ORDER by class_id DESC");
                                        while ($data = mysqli_fetch_array($tampil)):

                                       
                                        ?>

                                        <tr style="text-align: center">
                                            <td><?= $no++ ?></td>
                                            <td><?= $data['teacher_id'] ?></td>
                                            <td><?= $data['nama'] ?></td>
                                            <td><?= $data['class_list'] ?></td>
                                            <td><?= $data['schedule_id'] ?></td>
                                            <td><?= $data['modul_id'] ?></td>
                                           
                                            <td>
                                                <a href="0" class="btn " style="background: rgb(160, 177, 193)" data-bs-toggle="modal" data-bs-target="#modalUbaah<?= $no ?>">Ubah</a>
                                                <a href="0" class="btn" style="background: rgb(82, 115, 146)" data-bs-toggle="modal" data-bs-target="#modalHaapus<?= $no ?>">Hapus</a>
                                            </td>
                                        </tr>

                                        <!-- Awal Ubah -->
                                        <div class="modal fade" id="modalUbaah<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data Class</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form method="POST" action="crud.php">
                                            <input type="hidden" name="class_id" value="<?= $data['class_id'] ?>">
                                            <div class="modal-body">
                                                
                                                <div class="mb-3">
                                                <label class="form-label">Teacher</label>
                                                <input type="text" class="form-control" name="tteacher" value="<?= $data['teacher_id'] ?>"
                                                placeholder="Masukan Nama Class">
                                                </div>

                                                <div class="mb-3">
                                                <label class="form-label">Nama</label>
                                                <input type="text" class="form-control" name="tnama" value="<?= $data['nama'] ?>"
                                                placeholder="Masukan Nama Class">
                                                </div>

                                                <div class="mb-3">
                                                <label class="form-label">Class List</label>
                                                <input type="text" class="form-control" name="tclasslist" value="<?= $data['class_list'] ?>"
                                                placeholder="Masukan Classnya">
                                                </div>

                                                <div class="mb-3">
                                                <label class="form-label">Schedule</label>
                                                <input type="text" class="form-control" name="tschedule" value="<?= $data['schedule_id'] ?>"
                                                placeholder="Masukan Nama Class">
                                                </div>

                                                <div class="mb-3">
                                                <label class="form-label">Modul</label>
                                                <input type="text" class="form-control" name="tmodul" value="<?= $data['modul_id'] ?>"
                                                placeholder="Masukan Nama Class">
                                                </div>

                                                
                                            </div>
                                            <div class="modal-footer">
                                                  <button type="submit" class="btn btn-primary" name="bubaah">Ubah</button>
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>                                              
                                             </div>
                                             </form>
                                            </div>
                                         </div>
                                        </div>
                                         <!-- Ahir ubah -->

                                          <!--Awal Hapus-->
                                          <div class="modal fade" id="modalHaapus<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi Hapus Data</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form method="POST" action="crud.php">
                                            <input type="hidden" name="class_id" value="<?= $data['class_id'] ?>">
                                            <div class="modal-body">

                                            <h5> Apakah anda yakin akan menghapus data ini? <br>
                                            <span class="text-danger"><?= $data['class_list'] ?></span>
                                            </h5>
                                                

                                            </div>
                                            <div class="modal-footer">
                                                  <button type="submit" class="btn btn-primary" name="bhaapus">Ya, Hapus saja!</button>
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>                                              
                                             </div>
                                             </form>
                                            </div>
                                         </div>
                                        </div>
                                        <!--Ahir Hapus-->



                                        <?php endwhile; ?>
                                    </table>
                                       

                                        <!-- Awal Tambah -->
                                        <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data Student</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form method="POST" action="crud.php">
                                            <div class="modal-body">
                                                
                                                <div class="mb-3">
                                                <label class="form-label">Teacher</label>
                                                <input type="text" class="form-control" name="tteacher" placeholder="Masukan Id Teacher ">
                                                </div>

                                                <div class="mb-3">
                                                <label class="form-label">Nama</label>
                                                <input type="text" class="form-control" name="tnama" placeholder="Masukan Nama Teacher ">
                                                </div>

                                                <div class="mb-3">
                                                <label class="form-label">Class</label>
                                                <select class="form-select" name="tclasslist">
                                                    <option></option>
                                                    <option value="Futsal">Futsal</option>
                                                    <option value="Sepak Bola">Sepak Bola</option>
                                                    <option value="Bolla Volly">Bolla Volly</option>
                                                    <option value="Basket">Basket</option>
                                                    <option value="Renang">Renang</option>
                                                </select>
                                                </div>

                                                <div class="mb-3">
                                                <label class="form-label">Schedule</label>
                                                <input type="text" class="form-control" name="tschedule" placeholder="Masukan Id Schedule ">
                                                </div>

                                                <div class="mb-3">
                                                <label class="form-label">Modul</label>
                                                <input type="text" class="form-control" name="tmodul" placeholder="Masukan Id Modul ">
                                                </div>
                        
                                            </div>
                                            <div class="modal-footer">
                                                  <button type="submit" class="btn btn-primary" name="bsimpaan">Simpan</button>
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>                                              
                                             </div>
                                             </form>
                                            </div>
                                         </div>
                                        </div>
                                         <!-- Ahir Tambah -->

                                </div>

                                <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item ">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true" style="background:  rgb(197, 193, 172)">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#" style="background:  rgb(197, 193, 172)">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#" style="background:  rgb(197, 193, 172)">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#" style="background:  rgb(197, 193, 172)">3</a></li>
                                    <li class="page-item">
                                    <a class="page-link" href="#" style="background:  rgb(197, 193, 172)">Next</a>
                                    </li>
                                </ul>
                                </nav>



                             </div>
                         
                        </div>
                    </div>
                </main>
               
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
