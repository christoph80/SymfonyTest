<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $sf_guard_user_profile->getId() ?></td>
    </tr>
    <tr>
      <th>User:</th>
      <td><?php echo $sf_guard_user_profile->getUserId() ?></td>
    </tr>
    <tr>
      <th>First name:</th>
      <td><?php echo $sf_guard_user_profile->getFirstName() ?></td>
    </tr>
    <tr>
      <th>Last name:</th>
      <td><?php echo $sf_guard_user_profile->getLastName() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $sf_guard_user_profile->getEmail() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $sf_guard_user_profile->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $sf_guard_user_profile->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('profile/edit?id='.$sf_guard_user_profile->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('profile/index') ?>">List</a>
