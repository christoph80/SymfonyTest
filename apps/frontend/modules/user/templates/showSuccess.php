<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $user->getId() ?></td>
    </tr>
    <tr>
      <th>Directive:</th>
      <td><?php echo $user->getDirectiveId() ?></td>
    </tr>
    <tr>
      <th>Username:</th>
      <td><?php echo $user->getUsername() ?></td>
    </tr>
    <tr>
      <th>Password:</th>
      <td><?php echo $user->getPassword() ?></td>
    </tr>
    <tr>
      <th>Regkey:</th>
      <td><?php echo $user->getRegkey() ?></td>
    </tr>
    <tr>
      <th>Role:</th>
      <td><?php echo $user->getRole() ?></td>
    </tr>
    <tr>
      <th>Ranking:</th>
      <td><?php echo $user->getRankingId() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $user->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $user->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('user/edit?id='.$user->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('user/index') ?>">List</a>
