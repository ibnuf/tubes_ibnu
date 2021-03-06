<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url()?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="<?php echo base_url()?>assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="<?php echo base_url()?>assets/img/logoSmanam.jpg" alt="" class="img-square" style="width:100px; height: 45px" />
                </a>
                <a class="navbar-brand" href="index.html">
                    <img src="<?php echo base_url()?>assets/img/tulisan.jpg" alt="" class="img-square" style="width:100px; height: 45px" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
              
                        
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a href="<?php echo site_url()?>/walikelas/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                               <div class="user-section-inner">
                                <img src="<?php echo base_url()?>assets/img/user.png" alt="">
                            </div>
                            <div class="user-info">
                                <div>Wali <strong>Kelas</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li>
                        <a href="<?php echo site_url()?>/walikelas/walas_page"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>                
                    
                    <li>
                        <a href="#"><i class="fa fa-ban fa-fw"></i>Kelola Pelanggaran Sikap<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                           <li>
                            <a href="<?php echo site_url()?>/walikelas/form_input_pelanggaran"><i class="fa fa-edit fa-fw"></i>Tambah Pelanggaran Sikap</a>
                           </li>
                            <li>
                                <a href="<?php echo site_url()?>/walikelas/data_pelanggaran_siswa"><i class="fa fa-table fa-fw"></i>Data Pelanggaran Sikap</a>
                            </li>
                            
                            </ul>
                        <!-- second-level-items -->
                    </li>
                    
                    
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i>Daftar Peraturan Sekolah<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo site_url()?>/walikelas/peraturan_kerapian"><i class="fa fa-table fa-fw"></i>Pelanggaran Kerapian</a>
                            </li>
                            <li>
                               <a href="<?php echo site_url()?>/walikelas/peraturan_kerajinan"><i class="fa fa-table fa-fw"></i>Pelanggaran Kerajinan</a>
                            </li>
                            <li>
                               <a href="<?php echo site_url()?>/walikelas/peraturanLaranganSiswa"><i class="fa fa-table fa-fw"></i>Larangan Siswa</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                     <li>
                        <a href="<?php echo site_url()?>/walikelas/dataSiswa"><i class="fa fa-files-o fa-fw"></i> Data Siswa </a>
                    </li> 
                                        
                        </ul>
                        <!-- second-level-items -->
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->

 
            <!--  page-wrapper -->
            <div id="page-wrapper">

                
                <div class="row">
                     <!--  page header -->
                    <div class="col-lg-12">
                        <h4 class="page-header">Data Siswa Aktif SMA Negeri 6 Surabaya</h4>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <form method="POST">
                            <select class="form-control" name="carikelas">
                                <option>--- Pilih Kelas ---</option>
                                <?php foreach ($list_kelas as $row) { ?>
                                    <option value="<?php echo $row->kelas?>"><?php echo $row->kelas?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <input type="submit" name="carikelass" class="btn btn-default" value="cari">
                            </form>
                        </div>
                    </div>
                     <tr>
                    
                    </form>
                      </tr>
                     <!-- end  page header -->
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <a href="<?php echo site_url()?>/bk/form_input_siswa"><i class="fa fa-plus fa-fw"></i>Tambah Data Siswa</a>
                                       <thead>
                                            <tr style="font-family: Cambria,"Times New Roman",serif;>
                                                <th>No</th>
                                                <th>Tahun Ajaran</th>
                                                <th>NIS Siswa</th>
                                                <th>Nama siswa</th>
                                                <th>Kelas</th>
                                                <th>Jenis kelamin</th>
                                                <th>Alamat siswa</th>
                                                <th>No Hp</th>
                                                <th>Wali Kelas</th>
                                                <th><em class="fa fa-cog"></em></th>
                                                 </tr>
                                        </thead>
                                          <tbody>    
                                            
                                            <?php
                                            $nomer=1;   
                                            foreach($list_data->result()as $row) { ?>
                                            <tr class="odd gradeX" style="font-family: Cambria,"Times New Roman",serif;>
                                                <td><?php echo $nomer;?></td>
                                                <td><?php echo $row->tahunAjaran;?></td>
                                                <td><?php echo $row->idSiswa;?></td>
                                                <td><?php echo $row->namaSiswa;?></td>
                                                <td><?php echo $row->kelasSiswa; ?></td>                 
                                                <td><?php echo $row->jenisKelamin; ?></td>                 
                                                <td><?php echo $row->alamatSiswa; ?></td>                 
                                                <td><?php echo $row->noHpSiswa; ?></td>  
                                                <td><?php echo $row->waliKelas; ?></td>  
                                               
                                                 <td align="center">
                                                 <?php echo anchor('/bk/updateSiswa/'.$row->idSiswa,
                                                '<em class="fa fa-pencil" title="Edit Data Siswa"></em>'); ?>                                           
                                               <p>                  
                                                </td>
                                         </tr>
                                    <?php $nomer++;} ?>
                                       <tbody> 
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                </div>
                
                        </div>
                        <!--  end  Context Classes  -->
                    </div>
                </div>
            </div>
            <!-- end page-wrapper -->

        </div>
        <!-- end wrapper -->

        <!-- Core Scripts - Include with every page -->
        <script src="<?php echo base_url()?>assets/plugins/jquery-1.10.2.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/bootstrap/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/pace/pace.js"></script>
        <script src="<?php echo base_url()?>assets/scripts/siminta.js"></script>
        <!-- Page-Level Plugin Scripts-->
        <script src="<?php echo base_url()?>assets/plugins/dataTables/jquery.dataTables.js"></script>
        <script src="<?php echo base_url()?>assets/plugins/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });

           

        </script>

    </body>

    </html>
