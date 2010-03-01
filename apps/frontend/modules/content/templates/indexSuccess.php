<h1>Contents List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Shortdesc</th>
      <th>Longdesc</th>
      <th>Type</th>
      <th>Link</th>
      <th>User</th>
      <th>Directive</th>
      <th>Fullaccess</th>
      <th>Prevaccess</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($contents as $content): ?>
    <tr>
      <td><a href="<?php echo url_for('content/show?id='.$content->getId()) ?>"><?php echo $content->getId() ?></a></td>
      <td><?php echo $content->getName() ?></td>
      <td><?php echo $content->getShortdesc() ?></td>
      <td><?php echo $content->getLongdesc() ?></td>
      <td><?php echo $content->getType() ?></td>
      <td><?php echo $content->getLink() ?></td>
      <td><?php echo $content->getUserId() ?></td>
      <td><?php echo $content->getDirectiveId() ?></td>
      <td><?php echo $content->getFullaccessId() ?></td>
      <td><?php echo $content->getPrevaccessId() ?></td>
      <td><?php echo $content->getCreatedAt() ?></td>
      <td><?php echo $content->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="http://localhost:8080/frontend_dev.php/sfFLVPlayerTest" target="_self">Video Demo</a>

<a href="<?php echo url_for('content/new') ?>">New</a>
