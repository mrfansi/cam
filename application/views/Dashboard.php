<div id="data">
	<div class="container" id="data-dashboard">
		<div class="tile is-ancestor has-text-centered">
		    <div class="tile is-parent">
		      <article class="tile is-child notification is-link">
		        <p class="title"><?php echo $pop; ?></p>
		        <p class="subtitle">Total POP</p>
		      </article>
		    </div>
		    <div class="tile is-parent">
		      <article class="tile is-child notification is-link">
		        <p class="title"><?php echo $backbone; ?></p>
		        <p class="subtitle">Total Backbone</p>
		      </article>
		    </div>
		    <div class="tile is-parent">
		      <article class="tile is-child notification is-link">
		        <p class="title"><?php echo $vlan; ?></p>
		        <p class="subtitle">Total VLAN</p>
		      </article>
		    </div>
		    <div class="tile is-parent">
		      <article class="tile is-child notification is-link">
		        <p class="title"><?php echo $switch; ?></p>
		        <p class="subtitle">Total Switch</p>
		      </article>
		    </div>
		    <div class="tile is-parent">
		      <article class="tile is-child notification is-link">
		        <p class="title"><?php echo $router; ?></p>
		        <p class="subtitle">Total Router</p>
		      </article>
		    </div>
		</div>


		<table class="table is-narrow is-fullwidth is-hoverable" id="data-table">
		    <thead>
		   		<tr>
		   			<th colspan="7" class="has-text-centered">Link Backbone Down</th>
		   		</tr>
				<tr>
					<th>Nama Link</th>
					<th>Kapasitas</th>
					<th>IP Address</th>
					<th>TX Freq</th>
					<th>RX Freq</th>
					<th>Signal</th>
					<th>Ping Status</th>
				</tr>
		    </thead>

		    <tbody>
		    	<?php if(isset($bb_downs) && $bb_downs != NULL): ?>
		    	<?php foreach ($bb_downs as $bb): ?>
		    		<tr>
		    			<td><?php echo $bb->nama_link; ?></td>
		    			<td><?php echo $bb->kapasitas_link . ' Mbps'; ?></td>
		    			<td><?php echo $bb->ip_addr_link; ?></td>
		    			<td><?php echo $bb->txfreq_link; ?></td>
		    			<td><?php echo $bb->rxfreq_link; ?></td>
		    			<td><?php echo $bb->signal_link; ?></td>
		    			<td class="down"><?= $bb->status_link == false ? 'Down' : 'Up'; ?></td>
		    		</tr>
		    	<?php endforeach; ?>
		    	<?php else: ?>
		    		<tr>
		    			<td colspan="7" class="has-text-centered">Tidak ada Backbone Down</td>
		    		</tr>
		    	<?php endif; ?>
		    </tbody>
		</table>

		<table class="table is-narrow is-fullwidth is-hoverable" id="data-table">
			<thead>
				<tr>
					<th colspan="5" class="has-text-centered">Switch Down</th>
				</tr>
				<tr>
				  <th>Hostname</th>
				  <th>IP Address</th>
				  <th>Tipe</th>
				  <th>Jenis</th>
				  <th>Ping Status</th>
				</tr>
			</thead>

			<tbody>
				<?php if(isset($sw_downs) && $sw_downs != NULL ): ?>
				<?php foreach ($sw_downs as $sw): ?>
				  <tr>
				    <td><?php echo $sw->hostname_switch; ?></td>
				    <td><?php echo $sw->ip_addr_switch; ?></td>
				    <td><?php echo $sw->tipe_switch; ?></td>
				    <td><?php echo $sw->jenis_switch; ?></td>
				    <td class="down"><?= $sw->status_switch == false ? 'Down' : 'Up'; ?></td>
				  </tr>
				<?php endforeach; ?>
				<?php else: ?>
				<tr>
				    <td colspan="5" class="has-text-centered">Tidak ada Switch Down</td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>

		<table class="table is-narrow is-fullwidth is-hoverable" id="data-table">
			<thead>
				<tr>
					<th colspan="5" class="has-text-centered">Router Down</th>
				</tr>
				<tr>
				  <th>Hostname</th>
				  <th>IP Address</th>
				  <th>Tipe</th>
				  <th>Jenis</th>
				  <th>Ping Status</th>
				</tr>
			</thead>

			<tbody>
				<?php if(isset($rt_downs) && $rt_downs != NULL ): ?>
				<?php foreach ($rt_downs as $rt): ?>
				  <tr>
				    <td><?php echo $rt->hostname_switch; ?></td>
				    <td><?php echo $rt->ip_addr_switch; ?></td>
				    <td><?php echo $rt->tipe_switch; ?></td>
				    <td><?php echo $rt->jenis_switch; ?></td>
				    <td class="down"><?= $rt->status_switch == false ? 'Down' : 'Up'; ?></td>
				  </tr>
				<?php endforeach; ?>
				<?php else: ?>
				<tr>
				    <td colspan="5" class="has-text-centered">Tidak ada Router Down</td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		setInterval(function(){
	        $( "#data" ).load( "<?php echo base_url('home'); ?> #data-dashboard" );
	    }, 3000); //refresh every 2 seconds
	});
</script>