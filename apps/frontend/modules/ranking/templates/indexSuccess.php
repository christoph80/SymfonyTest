<h1>Rankings List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Prts</th>
      <th>Icon</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($rankings as $ranking): ?>
    <tr>
      <td><a href="<?php echo url_for('ranking/show?id='.$ranking->getId()) ?>"><?php echo $ranking->getId() ?></a></td>
      <td><?php echo $ranking->getName() ?></td>
      <td><?php echo $ranking->getPrts() ?></td>
      <td><?php echo $ranking->getIcon() ?></td>
      <td><?php echo $ranking->getCreatedAt() ?></td>
      <td><?php echo $ranking->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('ranking/new') ?>">New</a>
