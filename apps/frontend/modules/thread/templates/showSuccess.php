<h1><?php echo $thread->getTitle() ?></h1>

<table>
  <tbody>
    <tr>
      <th>Textbody:</th>
      <td><?php echo $thread->getTextbody() ?></td>
    </tr>
    <tr>
      <th>User:</th>
      <td><?php echo $thread->getUserId() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $thread->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<h1>Replies</h1>

<hr />

<a href="<?php echo url_for('thread/edit?id='.$thread->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('thread/index') ?>">List</a>
