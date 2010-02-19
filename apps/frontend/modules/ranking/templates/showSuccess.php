<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $ranking->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $ranking->getName() ?></td>
    </tr>
    <tr>
      <th>Icon:</th>
      <td><?php echo $ranking->getIcon() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $ranking->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $ranking->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('ranking/edit?id='.$ranking->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('ranking/index') ?>">List</a>
