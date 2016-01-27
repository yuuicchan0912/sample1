<h2>ユーザーの削除</h2>

<table>

<tr>
<th>ユーザー名</th>
<td><?php echo h($this->data['User']['name']);?></td>
</tr>

<tr>
<th>備考</th>
<td><?php echo nl2br(h($this->data['User']['description']));?></td>
</tr>

</table>

<?php echo $this->Form->create('User' , array('type' => 'delete'));?>
<?php echo $this->Form->input('id' , array('type' => 'hidden'));?>
<?php echo $this->Form->end('削除');?>