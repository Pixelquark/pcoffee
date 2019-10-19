<?php ?>
<div class="contentContainer">

  <!-- LOOP START -->
  <div class="postContainer">
    <table class="postTable">
      <tr class="tableRow rowHeader">
          <th class="tableHeader firstCell"><small>ID</small></th>
          <th class="tableHeader"><small>Date</small></th>
          <th class="tableHeader"><small>Summary</small></th>
          <th class="tableHeader"><small>Author</small></th>
          <th class="tableHeader"><small>Status</small></th>
          <th class="tableHeader lastCell"><small>GitHub Link</small></th>
      </tr>
      <?php foreach ($works as $work) { ?>
        <tr class="tableRow">
          <!-- for every postTag in DB -->
          <td class="tableCell"><small><?php echo $work['w_id'] ?></small></td>
          <td class="tableCell"><?php echo date('d/m/Y', $work['w_date']) ?></td>
          <td class="tableCell"><?php echo $work['w_summary'] ?></td>
          <td class="tableCell"><?php echo $work['w_author'] ?></td>
          <td class="tableCell"><?php echo $work['w_status'] ?></td>
          <td class="tableCell"><a href="<?php echo $work['w_git'] ?>" target="_blank">Version 1.0</a></td>
        </tr>
    <?php } ?>
  </table>

  </div>
  <!-- LOOP END -->

</div>

<?php  ?>
