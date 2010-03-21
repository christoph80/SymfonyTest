<h1>Forum</h1>
<hr />

    <?php foreach ($topics as $topic): ?>
    
    <h1>
	Topic: <?php echo $topic->getTitle()?> 
        <a href="<?php echo url_for('thread/new?topic_id='.$topic->getId()) ?>"> [Neuer Thread] </a>
    </h1>	

    <table class="threads">

      <!--
      <thead>
       <tr>
        <th>Title</th>
        <th>Autor</th>
        <th>Updated at</th>
       </tr>
      </thead>
      -->

      <tbody>	 
      <?php foreach ($topic->getTopicThreads() as $i => $thread): ?>
         <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
           <td class="Title">
             <?php echo link_to($thread->getTitle(),'selected-thread',$thread) ?>
           </td>
	   <td class="User">
             <?php echo "MUSS NOCH" ?>
           </td>
           <td class="Zugriff">
               <?php echo $thread->getUpdatedAt() ?>
           </td>
         </tr>
       <?php endforeach; ?>
      </tbody>
    </table>
    
  <?php endforeach; ?>

  <hr />

  <a href="<?php echo url_for('topic/new') ?>">Neues Topic</a>
