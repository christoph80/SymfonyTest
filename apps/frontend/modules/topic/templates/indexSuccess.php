<h1>Topics List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Directive</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($topics as $topic): ?>
    <tr>
      <td><a href="<?php echo url_for('topic/show?id='.$topic->getId()) ?>"><?php echo $topic->getId() ?></a></td>
      <td><?php echo $topic->getTitle() ?></td>
      <td><?php echo $topic->getDirectiveId() ?></td>
      <td><?php echo $topic->getCreatedAt() ?></td>
      <td><?php echo $topic->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('topic/new') ?>">New</a>
