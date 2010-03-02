<h1>Threads List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Textbody</th>
      <th>Content</th>
      <th>Topic</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($threads as $thread): ?>
    <tr>
      <td><a href="<?php echo url_for('thread/show?id='.$thread->getId()) ?>"><?php echo $thread->getId() ?></a></td>
      <td><?php echo $thread->getTitle() ?></td>
      <td><?php echo $thread->getTextbody() ?></td>
      <td><?php echo $thread->getContentId() ?></td>
      <td><?php echo $thread->getTopicId() ?></td>
      <td><?php echo $thread->getCreatedAt() ?></td>
      <td><?php echo $thread->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('thread/new') ?>">New</a>
