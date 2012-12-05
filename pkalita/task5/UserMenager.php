<?php
    class UserMenager
    {
        public static function GetUsers($pdo)
        {
            $statement = $pdo->prepare('SELECT * FROM users');
            $statement->execute();

            $users = array();


            while($temp = $statement->fetch(PDO::FETCH_ASSOC))
            {
                $tempUserEntity = new User($temp['ID'], 
                                $temp['role_id'], 
                                $temp['imie'], 
                                $temp['nazwisko'], 
                                $temp['PESEL'], 
                                $temp['adres_zamieszkania'], 
                                $temp['kod_pocztowy'], 
                                $temp['telefon'], 
                                $temp['email'], 
                                $temp['data_dodania']);
                $users[$tempUserEntity->getId()] = $tempUserEntity;
            }

            return $users;
        }

        public static function GetRoles($pdo)
        {
                $statement = $pdo->prepare('SELECT * FROM roles');
                $statement->execute();

                $roles = array();

                while($temp = $statement->fetch(PDO::FETCH_ASSOC))
                {
                        $tempRoleEntity = new Role($temp['ID'], 
                                        $temp['Nazwa'], 
                                        $temp['Opis']);
                        $roles[$tempRoleEntity->getId()] = $tempRoleEntity;
                }

                return $roles;
        }

        public static function AddUser($user, $pdo)
        {
                if(self::ValidateUserData($user))
                {
                        $pdo->Insert('users', $user->toArray());
                }
        }

        private static function ValidateUserData($user)
        {
            if (!preg_match('/^[0-9]{11}$/', $user->getPesel())) 
            {
                return false;
            }
            
            if (filter_var($user->getEmail(), FILTER_VALIDATE_EMAIL)) 
            {
                return true;
            }
            
            return true;
        }

        public static function DeleteUserById($userId, $pdo)
        {
                $statemnt = $pdo->prepare('delete from users where ID='.$userId.';');

    $statemnt->execute();
        }

        public static function GetUserById($id, $pdo)
        {
                $statemnt = $pdo->prepare('select * from users where ID='.$id.';');
    $statemnt->execute();

                if($temp = $statemnt->fetch(PDO::FETCH_ASSOC))
                {
                        $user = new User($temp['ID'], 
                                        $temp['role_id'], 
                                        $temp['imie'], 
                                        $temp['nazwisko'], 
                                        $temp['PESEL'], 
                                        $temp['adres_zamieszkania'], 
                                        $temp['kod_pocztowy'], 
                                        $temp['telefon'], 
                                        $temp['email'], 
                                        $temp['data_dodania']);
                }

                return $user;
        }

        public static function UpdateUserById($fields, $pdo, $id)
        {
                $pdo->UpdateById('users', $fields, $id);
        }
    }
?>
