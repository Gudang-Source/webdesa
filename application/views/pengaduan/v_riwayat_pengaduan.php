<style media="screen">
/* .card{
transition: 0.5s;
}

.form-control, .card{
border: 2px solid black;
}

*{
font-weight: bold;
} */
.btn{
  text-transform: capitalize;
  font-family: "Roboto",sans-serif;
  font-weight: bold;
}


</style>
<section id="get-started" class="padd-section wow fadeInUp">
  <div class="container">
    <div class="section-title text-center">
      <h2>Riwayat Pengaduan</h2>
      <!-- <p class="separator" style="">Isi data dibawah dengan sebenar-benarnya.</p> -->
    </div>
    <div class="row">
      <div class="col-md-12">
        <?php echo form_open_multipart(base_url("admin/guru_mapel/proses/"),array('class' => 'form-horizontal')); ?>
        <div class="card wow fadeInUp" id="get-started" style="visibility: visible; animation-name: fadeInUp;">
          <ul class="nav nav-tabs" id="pills-tab" role="tablist">
            <li class="nav-item">
              <!-- <a class="nav-link active" id="pills-satu-tab" data-toggle="pill" href="#pills-satu" role="tab" aria-controls="pills-satu" aria-selected="true">Riwayat Pengaduan</a> -->
            </li>
          </ul>
          <br>
          <div class="tab-content" id="pills-tabContent">
            <!-- Tab 1 -->
            <div class="tab-pane fade show active" id="pills-satu" role="tabpanel" aria-labelledby="pills-satu-tab">
              <div class="col-md-12 pb-3 pr-5 pl-5 table-responsive">
                <table id="rwytpengaduan" class="table table-striped table-borderless" style="width:100%">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Kode</th>
                      <th>Judul</th>
                      <th>Bidang</th>
                      <th>Kategori</th>
                      <th>Uraian</th>
                      <th>Tgl Buat</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; foreach ($pengaduan as $p): ?>
                      <tr>
                        <td><?=$i++?></td>
                        <td><?=$p->id_pengaduan?></td>
                        <td><a href="<?=base_url("pengaduan/detail/$p->id_pengaduan")?>"><?=$p->judul?></a></td>
                        <td><?=$p->bidang?></td>
                        <td><?=$p->kategori?></td>
                        <td><?=$p->uraian?></td>
                        <td><?=$p->tgl_pengaduan?></td>
                        <td class="badge badge-info"><?php $cont->cek_status($p->status);?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
// (function ($) {
//   $.fn.replaceClass = function (pFromClass, pToClass) {
//     return this.removeClass(pFromClass).addClass(pToClass);
//   };
// }(jQuery));
//
// function pindah(num){
//   $('#pills-tab li:nth-child('+num+') a').replaceClass('disabled','enabled');
//   $('#pills-tab li:nth-child('+num+') a').tab('show');
//   $('#pills-tab li a').replaceClass('enabled','disabled');
// }
$(document).ready(function() {
  $('#rwytpengaduan').DataTable();
} );
</script>
