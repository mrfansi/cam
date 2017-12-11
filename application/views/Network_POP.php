<div class="container">
  <?php
    $action_detail  = base_url('manage/pop/detail/');
    $action_hapus   = base_url('manage/pop/hapus/');
    $action_map     = base_url('manage/pop/map/'); 
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
      <a href="pop/tambah" class="button is-link modal-button">Buat POP Baru</a>
      <a href="pop/map_all" class="button is-link modal-button" type="button" data-target="modal-map">Network Map</a>
    </p>
  </div>

  <!-- <nav class="level" style="margin-bottom: 5px;">
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
  </nav> -->

  <div class="field has-addons">
    <p class="control">
      <a class="button is-static">
        Filter
      </a>
    </p>
    <p class="control is-expanded">
      <input class="input" type="text" name="filter" placeholder="..." autofocus="yes">
    </p>
  </div>
  
  <table class="table is-bordered is-striped is-narrow is-fullwidth is-hoverable">
    <thead>
      <tr>
        <th>Nama POP</th>
        <th>Jenis Gedung</th>
        <th>Tinggi Tower</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Opsi</th>
      </tr>
    </thead>

    <tbody>
      <?php if(isset($all_records) && $all_records != NULL ): ?>
      <?php foreach ($all_records as $data): ?>
        <tr>
          <td><?php echo $data->nama_pop; ?></td>
          <td><?php echo $data->jenis_gedung_pop; ?></td>
          <td><?php echo $data->tinggi_tower_pop . ' Meter'; ?></td>
          <td><?php echo $isi = $data->latitude_pop == '' ? '(kosong)' : $data->latitude_pop ?></td>
          <td><?php echo $isi = $data->longitude_pop == '' ? '(kosong)' : $data->longitude_pop ?></td>
          <td>
            <a id="btn-detail" class="button is-small is-info" target="<?php echo $data->kode_pop; ?>">Lihat Detil</a>
            <a id="btn-map" class="button is-small is-info" target="<?php echo $data->kode_pop; ?>">Map</a>
            <a id="btn-hapus" class="button is-small is-danger modal-button" data-target="modal-delete" target="<?php echo $data->kode_pop; ?>">Hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
      <?php else: ?>
        <tr>
          <td colspan="8">Data tidak ada</td>
        </tr>
      <?php endif; ?>
    </tbody>
    <!-- <tfoot>
      <tr>
        <th>Total Data</th>
      </tr>
    </tfoot> -->
  </table>  

  <!-- <nav class="pagination" role="navigation" aria-label="pagination">
    <a class="pagination-previous" title="This is the first page" disabled>Previous</a>
    <a class="pagination-next">Next page</a>
    <ul class="pagination-list">
      <li>
        <a class="pagination-link is-current" aria-label="Page 1" aria-current="page">1</a>
      </li>
      <li>
        <a class="pagination-link" aria-label="Goto page 2">2</a>
      </li>
      <li>
        <a class="pagination-link" aria-label="Goto page 3">3</a>
      </li>
    </ul>
  </nav> -->
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
    var map_target    = '<?php echo $action_map; ?>';
    var hapus_target = '<?php echo $action_hapus; ?>';
    
    $('[id^="btn-hapus"]').click(function(e){
      // hold
      e.preventDefault();

      // get action
      var action = $(this).attr('target');

      // add attribute
      $('#ya').attr('target', action);
    });


    $('[id^="btn-map"]').click(function(e){
      // hold
      e.preventDefault();

      // get action
      var action = $(this).attr('target');

      // call URL
      window.location = map_target + action;
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

