<?php
$content = '<table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Pesel</th>
                        <th>Role</th>
                        <th>Date registered</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>';
foreach ($resource As $key => $value) {
    $content .= '<tr>
                        <td class="center">' . $value["u_name"] . '</td>
                        <td class="center">' . $value["u_surname"] . '</td>
                        <td class="center">' . $value["u_address"] . '</td>
                        <td class="center">' . $value["u_email"] . '</td>
                        <td class="center">' . $value["u_pesel"] . '</td>
                        <td class="center">' . $value["r_name"] . '</td>
                        <td class="center">' . $value["u_add_date"] . '</td>
                        <td class="center">
                            <a class="btn btn-info" href="index.php?action=edit&id=' . $value["u_id"] . '">
                            <i class="icon-edit icon-white"></i>
                            Edit
                            </a>
                            <a class="btn btn-danger" href="index.php?action=delete&id=' . $value["u_id"] . '">
                            <i class="icon-trash icon-white"></i>
                            Delete
                            </a>
                        </td>
                    </tr>';
}
$content .= '</tbody>
                </table>';