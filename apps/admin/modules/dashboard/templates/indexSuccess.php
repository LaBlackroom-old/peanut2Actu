<?php use_helper('Date') ?>

<section id="dashboard">
  <header class="clearfix">
    <h1><?php echo __('Hi ') . $sf_user->getGuardUser() . __('!') ?></h1>
    <p>
      <?php echo __('Today') ?>, <?php echo __('we are the') ?> <?php echo format_date(date('D'), 'dddd dd MMMM yyyy') ?>. 
      
      <?php if($weather): ?>
        <?php echo __('It make') ?> <?php echo $weather['temp_c'] ?>°C (<?php echo $weather['condition'] ?>) <?php echo __('at') ?> 
        <?php echo peanutConfig::get('meteo') ?>.
      <?php endif; ?>
    </p>
  </header>
  
  <section id="content" class="clearfix">
    
    <?php include_component('dashboard', 'count') ?>
    
    <?php include_component('dashboard', 'users') ?>
    <?php include_component('dashboard', 'items') ?>
    <?php include_component('dashboard', 'actus') ?>
    <?php include_component('dashboard', 'analytics') ?>
    <?php include_component('dashboard', 'feed') ?>
    
  </section>
  
</section>