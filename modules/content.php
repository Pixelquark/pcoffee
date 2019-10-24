<?php ?>
<?php if (isset($_SESSION['loggedin'])){ ?>
<div class="contentContainer">

  <!-- LOOP START -->
  <div class="postContainer">
    <table class="postTable">
      <tr class="tableRow rowHeader">
          <th class="tableHeader firstCell"><small>ID</small></th>
          <th class="tableHeader"><small>Date</small></th>
          <th class="tableHeader"><small>Summary</small></th>
          <th class="tableHeader"><small>Author</small></th>
          <th class="tableHeader">
            <form class="" action="index.html" method="post">
              <button type="button" name="button">
                <img src="assets/addpost.png" alt="">
              </button>
              <!-- <button type="button" name="button">
                <img src="assets/editpost.png" alt="">
              </button> -->
              <button type="button" name="button">
                <img src="assets/registeruser.png" alt="">
              </button>
            </form>
          </th>
          <!-- <th class="tableHeader"><small>Status</small></th> -->
          <th class="tableHeader lastCell"><small>GitHub Link</small></th>
      </tr>
      <!-- for every postTag in DB -->
      <?php foreach ($works as $work) { ?>
        <tr class="tableRow">
          <td id="<?php echo $work['w_id'] ?>" class="tableCell"><small><?php echo $work['w_id'] ?></small></td>
          <td class="tableCell"><?php echo date('d/m/Y', $work['w_date']) ?></td>
          <td class="tableCell"><?php echo $work['w_summary'] ?></td>
          <td class="tableCell"><small><?php echo $work['w_author'] ?></small></td>
          <?php if (isset($_SESSION['loggedin'])){ ?>
          <td class="tableCell">
            <form class="" action="index.html" method="post">
              <!-- <button type="button" name="button">
                <img src="assets/editpost.png" alt="">
              </button> -->
              <a href="#">
                <button type="button" name="button">
                  <img src="assets/removepost.png" alt="">
                </button>
              </a>
            </form>
          </td>
          <?php }?>
          <td class="tableCell"><a href="<?php echo $work['w_git'] ?>" target="_blank">See github</a></td>
        </tr>
    <?php } ?>
  </table>

  </div>
  <!-- LOOP END -->

</div>

<?php }?>
<?php  ?>
