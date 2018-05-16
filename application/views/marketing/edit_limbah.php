
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WPLI</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().''?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>"/>
   <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/order.css">

  <?php
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }

    ?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php $this->load->view('marketing/v_header') ?>
  <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- search form -->

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="header">Menu Utama</li>
        <li class="">
          <a href="<?php echo base_url().'marketing/dashboard'?>">
            <i class="fa fa-home"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-bell"></i>
            <span>Request</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'marketing/request_limbah'?>"><i class="fa fa-trash"></i> Limbah</a></li>
            <li><a href="<?php echo base_url().'marketing/request_batako'?>"><i class="fa fa-cubes"></i> Batako</a></li>
          </ul>
        </li>

        <li>
          <a href="<?php echo base_url().'administrator/logout'?>">
            <i class="fa fa-sign-out"></i> <span>Sign Out</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Request</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
 <!-- Form isian custommer limbah B3-->
  <section class="contact section-wrapper" id="contact">
    <div class="container">
      <div class="row">
        <?php foreach($limbah as $u){ ?>
        <form action="<?php echo base_url('marketing/request_limbah/update')?>" method="post">
          <h1>Form Permintaan Customer Limbah B3</h1>
            <div class="contentform">
              <div id="sendmessage"> Your message has been sent successfully. Thank you. </div>
                <div class="leftcontact">
                  <div class="form-group">
                    <p>Id Order Limbah:<span>*</span></p>
                    <span class="icon-case"><i class="fa fa-info"></i></span>
                    <input type="text" name="id_order_limbah" id="id_order_limbah" required="required" value="<?php echo $u->id_order_limbah ?>" />
                    <div class="validation"></div>
                   </div>
                  <div class="form-group">
                    <p>Nama Perusahaan :<span>*</span></p>
                    <span class="icon-case"><i class="fa fa-building-o"></i></span>
                    <input type="text" name="nama_perusahaan" id="nama_perusahaan" required="required" value="<?php echo $u->nama_perusahaan ?>"/>
                    <div class="validation"></div>
                   </div>
                  <div class="form-group">
                    <p>Jenis Perusahaan : <span>*</span></p>
                    <span class="icon-case"><i class="fa fa-info"></i></span>
                    <select type="text" name="jenis_perusahaan" id="jenis_perusahaan" required="required" value="<?php echo $u->jenis_perusahaan ?>"/>
                      <option value="CV"> CV </option>
                      <option value="PT"> PT </option>
                      <option value="RS"> RS </option>
                      <option value="klinik"> klinik</option>
                    </select>
                  <div class="validation"></div>
                </div>
                  <div class="form-group">
                    <p>Alamat Lengkap Perusahaan : <span>*</span></p>
                    <span class="icon-case"><i class="fa fa-home"></i></span>
                    <input type="text" name="alamat_perusahaan" id="alamat_perusahaan" required="required" value="<?php echo $u->alamat_perusahaan ?>"/>
                    <input type="text" name="provinsi" id="provinsi" required="required" placeholder="Provinsi" value="<?php echo $u->provinsi ?>">
                    <input type="text" name="kabupaten" id="kabupaten-kota" required="required" placeholder="Kabupaten" value="<?php echo $u->kabupaten ?>"/>
                  <div class="validation"></div>
                </div>
                  <div class="form-group">
                  <p>Kode Pos :<span>*</span></p>
                  <span class="icon-case"><i class="fa fa-map-marker"></i></span>
                    <input type="text" name="kode_pos" id="kode_pos" required="required" value="<?php echo $u->kode_pos ?>"/>
                  <div class="validation"></div>
                </div>
              </div>
                <div class="rightcontact">
                  <div class="form-group">
                  <p>E-mail :<span>*</span></p>
                  <span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                    <input type="email" name="email" id="email" required="required" value="<?php echo $u->email ?>"/>
                  <div class="validation"></div>
                </div>
                  <div class="form-group">
                  <p>Jenis Limbah :<span>*</span></p>
                  <span class="icon-case"><i class="fa fa-filter  "></i></span>
                    <select type="text" name="jenis_limbah" id="jenis_limbah" required="required" value="<?php echo $u->jenis_limbah ?>"/>
                      <option value="padat"> Padat </option>
                      <option value="cair"> Cair</option>
                  </select>
                      <div class="validation"></div>
                  </div>

                  <div class="form-group">
                  <p>Nomor Tlp/HP : <span>*</span></p>
                  <span class="icon-case"><i class="fa fa-phone"></i></span>
                  <input type="text" name="no_telp" id="no_telp" required="required" value="<?php echo $u->no_telp ?>"/>
                    <div class="validation"></div>
                  </div>

                  <div class="form-group">
                  <p>Fax : <span>*</span></p>
                  <span class="icon-case"><i class="fa fa-fax"></i></span>
                  <input type="text" name="fax" id="fax" required="required" value="<?php echo $u->fax ?>"/>
                    <div class="validation"></div>
                  </div>

                  <div class="form-group">
                  <p>Keterangan <span></span></p>
                  <span class="icon-case"><i class="fa fa-comments-o"></i></span>
                  <textarea name="keterangan" id="keterangan" rows="14" value="<?php echo $u->keterangan ?>"/></textarea>
                    <div class="validation"></div>
                  </div>

                  <div class="form-group">
                  <p>Status : <span>*</span></p>
                  <span class="icon-case"><i class="fa fa-bell"></i></span>
                  <select type="text" name="status" id="status" required="required" value="<?php echo $u->jenis_status ?>"/>
                      <option value="On Process"> On Process</option>
                      <option value="Done"> Done </option>
                    </select>
                    <div class="validation"></div>
                  </div>

                  </div>
                  </div>

                  <button type="submit" class="bouton-contact">Update</button>
                  </form>
                  <?php } ?>
    </section>
    <!-- /.content -->
  </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2018 WPLI.</strong> All rights reserved.
  </footer>


  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js'?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.js'?>"></script>
  <!-- /.content-wrapper -->
<!-- page script -->
    <script type="text/javascript">
    $(function(){

    $.ajaxSetup({
    type:"POST",
    url: "<?php echo base_url('select/ambil_data') ?>",
    cache: false,
    });

    $("#provinsi").change(function(){

    var value=$(this).val();
    if(value>0){
    $.ajax({
    data:{modul:'kabupaten',id:value},
    success: function(respond){
    $("#kabupaten-kota").html(respond);
    }
    })
    }

    });

    $("#kabupaten-kota").change(function(){
    });

    });
  </script>

<script type="text/javascript">
  function deleted(param){
    var proc = window.confirm("Are you sure delete this data?");
      if(proc){
        document.location='<?php echo base_url('request_batako/hapus/')?>'+param;
      }
  }
</script>

</body>
</html>
