<?php
  require('db.php');


            $sql = "SELECT
                    members.id,
                    members.fullname,
                    members.sex,
                    members.salary,
                    members.age
                  FROM
                   members
                  ;";
            $q = $pdo->query($sql);
            $q->execute();
            echo '<table class="responstable">';
            echo '<thead>
              <tr>
                <th>
                  ID
                </th>
                <th>
                  Name
                </th>
                <th>
                  Age
                </th>
                <th>
                  Gender
                </th>
                <th>
                  Salary
                </th>
              </tr>
            </thead>';
            while($r = $q->fetch(PDO::FETCH_OBJ)){
              echo '<tr>
                <td>
                  '.$r->id.'
                </td>
                <td>
                  '.$r->fullname.'
                </td>
                <td>
                  '.$r->age.'
                </td>
                <td>
                  '.sex($r->sex).'
                </td>
                <td>
                  '.$r->salary.'
                </td>
              </tr>';
            }
            echo '</table>';
          ?>
