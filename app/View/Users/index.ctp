<h2>ユーザー一覧</h2>

<table>

<th>No</th>
<th>名前</th>
<th>備考</th>
<th>操作</th>
</tr>

<?php foreach($userData as $data): ?>

<tr>
<td><?php echo h($data['User']['id']); ?></td>
<td><?php echo h($data['User']['name']); ?></td>
<td><?php echo nl2br(h($data['User']['description'])); ?></td>
<td>
<?php
  echo $this->Html->link('編集' ,
    array('action' => 'edit', $data['User']['id']));
?>
    
<?php
  echo $this->Html->link('削除' ,
    array('action' => 'delete', $data['User']['id']));
?>
</td>
</tr>


<?php endforeach; ?>

</table>
<div>
<?php echo $this->Html->link('新規追加', array('action' => 'add')); ?><br />
<?php echo $this->Html->link('Topへ', array('controller' => 'my_pages', 'action' => 'index')); ?>

</div>