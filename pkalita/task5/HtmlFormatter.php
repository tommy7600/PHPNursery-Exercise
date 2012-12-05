<?php

    class HtmlFormatter
    {
        public static function usersTable($users, $roles)
        {
            $result ='<div class="span12">
            <div class="well"><table class="table table-bordered">
                                      <thead>
                                          <tr>
                                              <th>ID</th>
                                              <th>Imie</th>
                                              <th>Nazwisko</th>
                                              <th>PESEL</th>
                                              <th>Adres zamieszkania</th>
                                              <th>Kod pocztowy</th>
                                              <th>Telefon</th>
                                              <th>Email</th>
                                              <th>Data dodania</th>
                                              <th>Rola</th>
                                              <th>OPCJE</th>
                                          </tr>
                                      </thead>
                                      <tbody>';
            foreach($users as $user)
            {
                $result .= '<tr>';
                $result .=  '<td>'.$user->getId().'</td>';
                $result .=  '<td>'.$user->getImie().'</td>';
                $result .=  '<td>'.$user->getNazwisko().'</td>';
                $result .=  '<td>'.$user->getPesel().'</td>';
                $result .=  '<td>'.$user->getAdres_zamieszkania().'</td>';
                $result .=  '<td>'.$user->getKod_pocztowy().'</td>';
                $result .=  '<td>'.$user->getTelefon().'</td>';
                $result .=  '<td>'.$user->getEmail().'</td>';
                $result .=  '<td>'.$user->getData_dodania().'</td>';
                $result .=  '<td>'.$roles[$user->getRole_id()]->getNazwa().'</td>';
                $result .=  '<td>
                            <div class="btn-group">
                                <a class="btn btn-small" href="UpdateUser.php?userId='.$user->getId().'"><i class="icon-pencil"></i></a>
								<a class="btn btn-small" href="index.php?action=1&userId='.$user->getId().'"><i class="icon-remove-circle"></i></a>
                            </div>
                    </td>
                </tr>';
            }
            
            $result .= '</tbody></table>
                        <a class="btn btn-large btn-primary" href="AddUser.php">Add user</a></div></div>';
            return $result;
        }
    }

?>
