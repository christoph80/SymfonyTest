<h1>Users List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Directive</th>
      <th>Username</th>
      <th>Password</th>
      <th>Regkey</th>
      <th>Role</th>
      <th>Ranking</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user): ?>
    <tr>
      <td><a href="<?php echo url_for('user/show?id='.$user->getId()) ?>"><?php echo $user->getId() ?></a></td>
      <td><?php echo $user->getDirectiveId() ?></td>
      <td><?php echo $user->getUsername() ?></td>
      <td><?php echo $user->getPassword() ?></td>
      <td><?php echo $user->getRegkey() ?></td>
      <td><?php echo $user->getRole() ?></td>
      <td><?php echo $user->getRankingId() ?></td>
      <td><?php echo $user->getCreatedAt() ?></td>
      <td><?php echo $user->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('user/new') ?>">New</a>
