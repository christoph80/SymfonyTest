<h1>Pages List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Shortdesc</th>
      <th>Textbody</th>
      <th>Has content</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($pages as $page): ?>
    <tr>
      <td><a href="<?php echo url_for('page/show?id='.$page->getId()) ?>"><?php echo $page->getId() ?></a></td>
      <td><?php echo $page->getTitle() ?></td>
      <td><?php echo $page->getShortdesc() ?></td>
      <td><?php echo $page->getTextbody() ?></td>
      <td><?php echo $page->getHasContent() ?></td>
      <td><?php echo $page->getCreatedAt() ?></td>
      <td><?php echo $page->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('page/new') ?>">New</a>
