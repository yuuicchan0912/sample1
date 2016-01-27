<h2>ユーザーの<?php echo $isEdit ? '編集' : '新規追加' ;?></h2><!--trueの場合は編集、falseの場合は新規追加-->

<?php echo $this->Form->create('User'); ?>

<?php echo $this->Form->input('name'); ?>

<?php echo $this->Form->input('description'); ?>

<?php
if($isEdit)://編集の場合
  echo $this->Form->input('id' , array('type' => 'hidden'));
endif;
?>
<?php echo $this->Form->end($isEdit ? '修正' : '追加'); ?>
