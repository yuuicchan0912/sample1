<h1>サンプルアプリ1</h1>
<h2>問い合わせフォーム</h2>

<?php echo $this->Form->create('Contact'); ?>

<?php echo $this->Form->input('name'); ?>

<?php echo $this->Form->input('email'); ?>

<?php echo $this->Form->input('mtr_sex_id' , array('type' => 'radio', 'options' => $sexList)); ?>

<?php echo $this->Form->input('mtr_age_id' , array('type' => 'select', 'options' => $ageList)); ?>

<?php echo $this->Form->input('title'); ?>

<?php echo $this->Form->input('content' , array('type' => 'textarea')); ?>

<?php echo $this->Form->input('MtrFavolite.MtrFavolite' , array('multiple' => 'checkbox', 'options' => $favoliteList)); ?>

<?php echo $this->Form->input('confirmed' , array('type' => 'hidden', 'value' => false)); ?>

<?php echo $this->Form->end('　確認　'); ?>
