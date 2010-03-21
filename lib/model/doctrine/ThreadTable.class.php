<?php

class ThreadTable extends Doctrine_Table
{

	public function getThreads(Doctrine_Query $q = null)
	{
  		if (is_null($q))
  		{
    			$q = Doctrine_Query::create()
      			  ->from('Thread t');
  		}
 
  		$q->addOrderBy('t.updated_at DESC');
 
  		return $q->execute();
	}		

}
