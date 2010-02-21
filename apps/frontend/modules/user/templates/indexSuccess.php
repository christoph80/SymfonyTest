<!-- apps/frontend/modules/job/templates/indexSuccess.php -->

<h1>Users: <?php echo $users->count() ?></h1>
 
<div id="users">
  <table class="users">
   
   <thead class="heading">
    <tr>
      <th>Username</th>
      <th>Active Since</th>
      <th>Directive</th>
      <th>Ranking</th>
    </tr>
  </thead> 

   <?php foreach ($users as $i => $user): ?>
      <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
        <td class="name">
	  <a href="<?php echo url_for('user/show?id='.$user->getId()) ?>">
            <?php echo $user->getUsername() ?>
          </a>
	</td>
        <td class="details">
          <?php echo $user->getCreatedAt() ?>
        </td>
        <td class="directive"><?php echo $user->getDirective() ?></td>
        <td class="ranking"><?php echo $user->getRanking() ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>

<a href="<?php echo url_for('user/new') ?>">New</a>
