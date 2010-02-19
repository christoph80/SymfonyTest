<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $content->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $content->getName() ?></td>
    </tr>
    <tr>
      <th>Shortdesc:</th>
      <td><?php echo $content->getShortdesc() ?></td>
    </tr>
    <tr>
      <th>Longdesc:</th>
      <td><?php echo $content->getLongdesc() ?></td>
    </tr>
    <tr>
      <th>Type:</th>
      <td><?php echo $content->getType() ?></td>
    </tr>
    <tr>
      <th>Link:</th>
      <td><?php echo $content->getLink() ?></td>
    </tr>
    <tr>
      <th>User:</th>
      <td><?php echo $content->getUserId() ?></td>
    </tr>
    <tr>
      <th>Directive:</th>
      <td><?php echo $content->getDirectiveId() ?></td>
    </tr>
    <tr>
      <th>Fullaccess:</th>
      <td><?php echo $content->getFullaccessId() ?></td>
    </tr>
    <tr>
      <th>Prevaccess:</th>
      <td><?php echo $content->getPrevaccessId() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $content->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $content->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('content/edit?id='.$content->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('content/index') ?>">List</a>
