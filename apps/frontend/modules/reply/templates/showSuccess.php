<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $reply->getId() ?></td>
    </tr>
    <tr>
      <th>Textbody:</th>
      <td><?php echo $reply->getTextbody() ?></td>
    </tr>
    <tr>
      <th>Thread:</th>
      <td><?php echo $reply->getThreadId() ?></td>
    </tr>
    <tr>
      <th>User:</th>
      <td><?php echo $reply->getUserId() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $reply->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $reply->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('reply/edit?id='.$reply->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('reply/index') ?>">List</a>
