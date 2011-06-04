<section id="items" class="box">
  <header>
    <h2><?php echo __('Last actualities') ?></h2>
  </header>

  <section class="boxContent">
    <table>
      <tbody>
        <?php foreach($actus as $actu): ?>
        <tr>
          <td class="item"><?php echo $actu->getTitle() ?></td>
          <td class="action"><a href="<?php echo url_for('peanut_actu_edit', array('id' => $actu->getId())) ?>"><?php echo __('Edit') ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

  </section>

</section>