<?php

class TopicTable extends Doctrine_Table
{

	public function getWithThreads()
        {
                $q = $this->createQuery('c')
		  ->leftJoin('c.TopicThread t');
                return $q->execute();
        }

}
