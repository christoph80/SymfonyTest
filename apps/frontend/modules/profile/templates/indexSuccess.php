<h1>Sf guard user profiles List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>User</th>
      <th>First name</th>
      <th>Last name</th>
      <th>Email</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sf_guard_user_profiles as $sf_guard_user_profile): ?>
    <tr>
      <td><a href="<?php echo url_for('profile/show?id='.$sf_guard_user_profile->getId()) ?>"><?php echo $sf_guard_user_profile->getId() ?></a></td>
      <td><?php echo $sf_guard_user_profile->getUserId() ?></td>
      <td><?php echo $sf_guard_user_profile->getFirstName() ?></td>
      <td><?php echo $sf_guard_user_profile->getLastName() ?></td>
      <td><?php echo $sf_guard_user_profile->getEmail() ?></td>
      <td><?php echo $sf_guard_user_profile->getCreatedAt() ?></td>
      <td><?php echo $sf_guard_user_profile->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('profile/new') ?>">New</a>
