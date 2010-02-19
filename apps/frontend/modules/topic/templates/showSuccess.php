<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $topic->getId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $topic->getTitle() ?></td>
    </tr>
    <tr>
      <th>Directive:</th>
      <td><?php echo $topic->getDirectiveId() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $topic->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $topic->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('topic/edit?id='.$topic->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('topic/index') ?>">List</a>
