<section id="numbers">
  <?php
  $outstanding_numbers = get_field('outstanding_numbers');
  $total_items = count($outstanding_numbers);
  foreach ($outstanding_numbers as $index => $item) {
  ?>
    <div class="box__numbers">
      <span class="count__numbers">
        <?= $item['numbers'] ?>
      </span>
      <div>
        <span class="item__description__for">
          <?= $item['content'] ?>
        </span>
      </div>
    </div>
    <?php
    if ($index < $total_items - 1) {
    ?>
      <div class="line__horizontal__numbers"></div>
    <?php
    }
    ?>
  <?php } ?>
</section>