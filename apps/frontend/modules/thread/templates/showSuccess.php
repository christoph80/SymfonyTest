<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $thread->getId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $thread->getTitle() ?></td>
    </tr>
    <tr>
      <th>Textbody:</th>
      <td><?php echo $thread->getTextbody() ?></td>
    </tr>
    <tr>
      <th>Content:</th>
      <td><?php echo $thread->getContentId() ?></td>
    </tr>
    <tr>
      <th>Topic:</th>
      <td><?php echo $thread->getTopicId() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $thread->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $thread->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('thread/edit?id='.$thread->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('thread/index') ?>">List</a>
