<h1>Replys List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Textbody</th>
      <th>Thread</th>
      <th>User</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($replys as $reply): ?>
    <tr>
      <td><a href="<?php echo url_for('reply/show?id='.$reply->getId()) ?>"><?php echo $reply->getId() ?></a></td>
      <td><?php echo $reply->getTextbody() ?></td>
      <td><?php echo $reply->getThreadId() ?></td>
      <td><?php echo $reply->getUserId() ?></td>
      <td><?php echo $reply->getCreatedAt() ?></td>
      <td><?php echo $reply->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('reply/new') ?>">New</a>
