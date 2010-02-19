<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $directive->getId() ?></td>
    </tr>
    <tr>
      <th>District:</th>
      <td><?php echo $directive->getDistrict() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $directive->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $directive->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('directive/edit?id='.$directive->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('directive/index') ?>">List</a>
