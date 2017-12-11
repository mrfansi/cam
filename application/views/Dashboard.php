<div class="container">
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
	        <p class="title">0</p>
	        <p class="subtitle">Total Switch</p>
	      </article>
	    </div>
	    <div class="tile is-parent">
	      <article class="tile is-child notification is-link">
	        <p class="title">0</p>
	        <p class="subtitle">Total Router</p>
	      </article>
	    </div>
	</div>


	<table class="table is-bordered is-striped is-narrow is-fullwidth is-hoverable" id="data-table">
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
	    	<?php foreach ($downs as $down): ?>
	    		<tr>
	    			<td><?php echo $down->nama_link; ?></td>
	    			<td><?php echo $down->kapasitas_link; ?></td>
	    			<td><?php echo $down->ip_addr_link; ?></td>
	    			<td><?php echo $down->txfreq_link; ?></td>
	    			<td><?php echo $down->rxfreq_link; ?></td>
	    			<td><?php echo $down->signal_link; ?></td>
	    			<td class="is-danger"><?php echo $down->status_link; ?></td>
	    		</tr>
	    	<?php endforeach; ?>
	    </tbody>
	</table>
</div>