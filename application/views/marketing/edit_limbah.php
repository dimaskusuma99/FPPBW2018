
<!DOCTYPE html>
<html>
<?php  $this->load->view('marketing/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php $this->load->view('marketing/header') ?>
  <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- search form -->

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url('dashboard')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-bell"></i> <span>Request</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url('request_limbah')?>"><i class="fa fa-circle-o"></i> Request Limbah</a></li>
            <li><a href="<?php echo base_url('request_batako')?>"><i class="fa fa-circle-o"></i> Request Batako</a></li>
          </ul>
        </li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Request
      </h1>
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
        <form action="<?php echo base_url('request_limbah/update')?>" method="post">
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
                    <select type="text" name="provinsi" id="provinsi" required="required" placeholder="Provinsi" value="<?php echo $u->provinsi ?>">
                      <option value='0'>--Pilih Provinsi--</option>
                      <?php 
                      foreach ($provinsi as $prov) {
                        echo "<option value='$prov[id]'>$prov[name]</option>";}?>
                    </select>
                    <select type="text" name="kabupaten" id="kabupaten-kota" required="required" placeholder="Kabupaten" value="<?php echo $u->kabupaten ?>"/>
                      <option value='0'>--Pilih Kabupaten--</option>
                    </select>
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

<?php $this->load->view('marketing/footer') ?>
</body>
</html>

