<div class="container">

  <?php
    $action_detail  = base_url('manage/backbone/detail/');
    $action_hapus   = base_url('manage/backbone/hapus/');
    $action_tambah  = base_url('manage/backbone/tambah/');
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


  <div class="field">
    <p class="control">
      <a href="<?php echo $action_tambah; ?>" class="button is-link">Buat Link Baru</a>
    </p>
  </div>

  <nav class="level" style="margin-bottom: 5px;">
    <div class="level-left">
      <div class="level-item">
        <div class="field has-addons">
          <p class="control">
            <a class="button is-static">
              Tampilkan
            </a>
          </p>
          <p class="control">
            <div class="select">
              <select name="show_row">
                <option value="10">10</option>
                <option value="30">30</option>
                <option value="50">50</option>
                <option value="100">100</option>
              </select>
            </div>
          </p>
          <p class="control">
            <a class="button is-static">
              Halaman
            </a>
          </p>
        </div>
      </div>
    </div>

    <div class="level-right">
      <div class="level-item">
        <div class="field has-addons">
          <p class="control">
            <a class="button is-static">
              Filter
            </a>
          </p>
          <p class="control">
            <input class="input" type="text" name="filter">
          </p>
          
        </div>
      </div>
    </div>
  </nav>
  
  <table class="table is-bordered is-striped is-narrow is-fullwidth">
    <thead>
      <tr>
        <th>Nama Link</th>
        <th>Kapasitas</th>
        <th>IP Address</th>
        <th>TX Freq</th>
        <th>RX Freq</th>
        <th>Signal</th>
        <th>Ping Status</th>
        <th>Opsi</th>
      </tr>
    </thead>

    <tbody>
      <?php if(isset($all_records) && $all_records != NULL ): ?>
      <?php foreach ($all_records as $data): ?>
        <tr>
          <td><?php echo $data->nama_link; ?></td>
          <td><?php echo $data->kapasitas_link . ' Mbps'; ?></td>
          <td><?php echo $data->ip_addr_link; ?></td>
          <td><?php echo $data->txfreq_link; ?></td>
          <td><?php echo $data->rxfreq_link; ?></td>
          <td><?php echo $data->signal_link; ?></td>
          <td class="is-success">UP</td>
          <td>
            <a id="btn-detail" class="button is-small is-info" target="<?php echo $data->kode_link; ?>">Lihat Detil</a>
            <a id="btn-hapus" class="button is-small is-danger modal-button" data-target="modal-delete" target="<?php echo $data->kode_link; ?>">Hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
      <?php else: ?>

      <?php endif; ?>
    </tbody>
  </table>      
</div>
<div class="modal" id="modal-delete">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Hapus</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
      <p>Apakah yakin ingin menghapus data ini?</p>
    </section>
    <footer class="modal-card-foot">
      <button id="ya" class="button is-danger">Ya</button>
      <button id="tidak" class="button">Tidak</button>
    </footer>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    var detail_target = '<?php echo $action_detail; ?>';
    var hapus_target = '<?php echo $action_hapus; ?>';
    
    $('[id^="btn-hapus"]').click(function(e){
      // hold
      e.preventDefault();

      // get action
      var action = $(this).attr('target');

      // add attribute
      $('#ya').attr('target', action);
    });

    $('[id^="btn-detail"]').click(function(e){
      // hold
      e.preventDefault();

      // get action
      var action = $(this).attr('target');

      // call URL
      window.location = detail_target + action;
    });

    $('#ya').click(function(e){
      // hold
      e.preventDefault();

      // get action
      var action = $(this).attr('target');

      // call URL
      window.location = hapus_target + action;
    });

  });
</script>