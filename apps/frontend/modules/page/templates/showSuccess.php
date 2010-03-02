<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $page->getId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $page->getTitle() ?></td>
    </tr>
    <tr>
      <th>Shortdesc:</th>
      <td><?php echo $page->getShortdesc() ?></td>
    </tr>
    <tr>
      <th>Textbody:</th>
      <td><?php echo $page->getTextbody() ?></td>
    </tr>
    <tr>
      <th>Has content:</th>
      <td><?php echo $page->getHasContent() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $page->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $page->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('page/edit?id='.$page->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('page/index') ?>">List</a>
