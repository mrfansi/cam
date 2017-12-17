<div class="container">
  <?php
    $action_detail  = base_url('manage/switch/detail/');
    $action_hapus   = base_url('manage/switch/hapus/');
  ?>

  <?php if(isset($berhasil)): ?>
  <div class="notification is-success">
    <?php echo $berhasil; ?>
  </div>
  <?php endif; ?>

  <?php if(isset($gagal)): ?>
  <div class="notification is-danger">
    <?php echo $gagal; ?>
  </div>
  <?php endif; ?>

  <?php if(isset($_SESSION['berhasil'])): ?>
  <div class="notification is-success">
    <?php echo $_SESSION['berhasil']; ?>
  </div>
  <?php endif; ?>

  <?php if(isset($_SESSION['gagal'])): ?>
  <div class="notification is-danger">
    <?php echo $_SESSION['gagal']; ?>
  </div>
  <?php endif; ?>

  <script type="text/javascript">
    var detil_action  = '<?php echo $action_detail; ?>';
    var hapus_action  = '<?php echo $action_hapus; ?>';

    function baru() {
      // add modal
      var modal = $('#modal-crud');
      var body = modal.find('div.modal-card > section');

      // show modal
      modal.addClass('is-active');

      // show body
      body.load( "<?php echo base_url('manage/switch/tambah'); ?> #post-data" );
    }

    function detil(data) {
      var detil = data;
      var id    = detil.attr('data');

      // add modal
      var modal = $('#modal-crud');
      var body = modal.find('div.modal-card > section');

      // show modal
      modal.addClass('is-active');

      // show body
      body.load( "<?php echo base_url('manage/switch/detail/'); ?>" + id + " #post-data" );
    }

    function hapus(data) {
      var hapus = data;
      var id    = hapus.attr('data');

      // add modal
      var del = $('#modal-delete');
      // add class
      del.addClass('is-active');
      // add atribut
      var target = del.find('form');
      target.attr('action', hapus_action + id);
    }

    function exp() {
      $('#data-table').tableExport({
        type: 'excel',
        ignoreColumn: [5,6],
        tableName: 'Switch',
        escape: false
      });
    }
  </script>

  <div class="field">
    <p class="control">
      <button type="button" class="button is-link" onclick="baru()">Buat Baru</button>
      <button type="button" class="button is-link">Import dari Excel</button>
      <button type="button" class="button is-link" onclick="exp()">Export ke Excel</button>
    </p>
  </div>

  <div class="field">
    <p class="control is-expanded">
      <input id="filter" class="input" type="text" name="filter" placeholder="Cari data Switch disini..." autofocus="yes">
    </p>
  </div>

  <div id="data">
    <table class="table is-striped is-narrow is-fullwidth is-hoverable" id="data-table">
      <thead>
        <tr>
          <th>Hostname</th>
          <th>IP Address</th>
          <th>Tipe</th>
          <th>Jenis</th>
          <th>POP</th>
          <th>Ping Status</th>
          <th>Opsi</th>
        </tr>
      </thead>

      <tbody>
        <?php if(isset($all_records) && $all_records != NULL ): ?>
        <?php foreach ($all_records as $data): ?>
          <tr <?= $data->status_switch == false ? 'class="is-down" id="data-row"' : '' ;?>>
            <td><?php echo $data->hostname_switch; ?></td>
            <td><?php echo $data->ip_addr_switch; ?></td>
            <td><?php echo $data->tipe_switch; ?></td>
            <td><?php echo $data->jenis_switch; ?></td>
            <td><?php echo $data->pop->nama_pop; ?></td>
            <td id="status" class="<?= $data->status_switch == false ? 'down' : 'up' ?>"><?= $data->status_switch == false ? 'Down' : 'Up'; ?></td>
            <td>
              <button class="button is-small is-info" data="<?php echo $data->kode_switch; ?>" onclick="detil($(this))">Lihat Detil</button>
              <button class="button is-small is-info" data="<?php echo $data->kode_switch; ?>">Terminal</button>
              <button class="button is-small is-info" data="<?php echo $data->kode_switch; ?>" onclick="hapus($(this))">Hapus</button>
              <button class="button is-small is-info" data="<?php echo $data->kode_switch; ?>">Log</button>
            </td>
          </tr>
        <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="8">Data tidak ada</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>

<div class="modal" id="modal-delete">
  <div class="modal-background"></div>
  <form class="modal-card" method="GET">
    <header class="modal-card-head">
      <p class="modal-card-title">Hapus</p>
      <button type="button" class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
      <p>Apakah yakin ingin menghapus data ini?</p>
    </section>
    <footer class="modal-card-foot">
      <button type="submit" class="button is-danger">Ok, Saya yakin</button>
      <button type="button" class="button">Tidak</button>
    </footer>
  </form>
</div>

<div class="modal" id="modal-crud">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Data Switch</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body"></section>
  </div>
  <button class="modal-close is-large" aria-label="close"></button>
</div>
<script type="text/javascript">
  $(document).ready(function(){

    var update = true;

    $(function() {
      setTimeout(function(){
        $('body > div.container > div.notification').fadeOut();
      }, 5000);
    });

    $("#filter").keyup(function () {
      //split the current value of searchInput
      var data = this.value.split(" ");
      //create a jquery object of the rows
      var jo = $("#data-table").find("tbody > tr");
      if (this.value == "") {
          // set update
          update = true;

          // show
          jo.show();
          return;
      }

      // set update
      update = false;

      //hide all the rows
      jo.hide();

      //Recusively filter the jquery object to get results.
      jo.filter(function (i, v) {
          var $t = $(this);
          for (var d = 0; d < data.length; ++d) {
              if ($t.is(":contains('" + data[d] + "')")) {
                  return true;
              }
          }
          return false;
      })

      //show the rows that match.
      .show();

    }).focus(function () {
        this.value = "";
        $(this).css({
            "color": "black"
        });
        $(this).unbind('focus');
    }).css({
        "color": "#C0C0C0"
    });

    
    $(function() {
      setInterval(function(){
        if (update) {
          $( "#data" ).load( "<?php echo base_url('manage/switch'); ?> #data-table" );
        }
      }, 10000); //refresh every 10 seconds
    });

    $(function() {
      var on = true;
      setInterval(function() {
          on = !on;
          if (on) {
              $('[id^="data-row"]').addClass('is-down');
          } else {
              $('[id^="data-row"]').removeClass('is-down');
          }
      }, 1000);
    });

    $(function() {
      $('#data-table > thead > tr > th').click(function(){
        update = false;
      });
    });
    
  });
</script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugin/jquery.sortelements.js'); ?>"></script>
<script type="text/javascript">
  $(document).ready(function() {
      var table = $('table');

      $('#data-table > thead > tr > th').each(function(){
        var th = $(this),
          thindex = th.index(),
          inverse = false;

        th.click(function(){
          table.find('td').filter(function(){
            return $(this).index() === thindex;
          }).sortElements(function(a, b){
            return $.text([a]) > $.text([b]) ? inverse ? -1 : 1 : inverse ? 1 : -1;
          }, function(){
            return this.parentNode;
          });

          inverse = !inverse;
        })
      });
    });
</script>