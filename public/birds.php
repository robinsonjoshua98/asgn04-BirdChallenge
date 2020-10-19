<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Inventory'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <h2>Small Sampling of WNC Birds</h2>
    </div>

    <table id="inventory">
      <tr>
        <th>Common Name</th>
        <th>Habitat</th>
        <th>Food</th>
        <th>Conservation Level</th>
        <th>Backyard Tips</th>
      </tr>

      <?php
$parser = new ParseCSV(PRIVATE_PATH . '/wnc-birds.csv');
$bird_array = $parser->parse();
// echo '<pre>';
// print_r($bird_array);
// echo '</pre>';
//exit();
?>
<?php foreach($bird_array as $args) { ?>
<?php $bird = new Bird($args); ?>
<tr>
<td><?php echo $bird->common_name; ?></td>
<td><?= $bird->habitat; ?></td>
<td><?= $bird->food; ?></td>
<td><?php echo $bird->conservation_level(); ?></td>
<td><?= $bird->backyard_tips ; ?></td>
</tr>
<?php } ?>

    </table>
  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
