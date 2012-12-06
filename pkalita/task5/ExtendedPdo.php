<?php
    class ExtednedPdo extends PDO
    {
        public function __construct($connection, $login, $password)
        {
            parent::__construct($connection, $login, $password);
        }
        
        public function Insert($table, array $values)
        {
			$statemnt = $this->prepare('insert into '.$table.' ('.implode(array_keys($values), ", ").') values (:'.implode(array_keys($values), ", :").')');

			foreach($values as $key=>$value)
			{
				$statemnt->bindValue(':'.$key, $value);
			}
			//var_dump($statemnt);
            $statemnt->execute();
        }
		
        public function UpdateById($table, array $values, $id)
        {
            $query = 'update '.$table.' SET ';

            foreach($values as $key=>$value)
            {
                $query .= $key.' = :'.$key.', ';
            }

            $query = substr_replace($query ,"",-2);
            $query .= ' where ID = :uid';

            $statemnt = $this->prepare($query);

            foreach($values as $key=>$value)
            {
                $statemnt->bindValue(':'.$key, $value);
            }

            $statemnt->bindValue(':uid', $id);

            $statemnt->execute();
        }
    }
?>