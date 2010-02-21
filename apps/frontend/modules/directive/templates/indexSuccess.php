<h1>Directives List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Misc</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($directives as $directive): ?>
    <tr>
      <td><a href="<?php echo url_for('directive/show?id='.$directive->getId()) ?>"><?php echo $directive->getId() ?></a></td>
      <td><?php echo $directive->getName() ?></td>
      <td><?php echo $directive->getMisc() ?></td>
      <td><?php echo $directive->getCreatedAt() ?></td>
      <td><?php echo $directive->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('directive/new') ?>">New</a>
