<?php

require_once 'database.php';
require_once 'util.php';

$db = new Database;
$util = new Util;

if (isset($_POST['add'])){
    $fname = $util->testInput($_POST['fname']);
    $lname = $util->testInput($_POST['lname']);
    $email = $util->testInput($_POST['email']);
    $phone = $util->testInput($_POST['phone']);

    if ($db->insert($fname, $lname, $email, $phone)){
        echo $util->showMessage('success', 'insert Completed');
    }
    else {
        echo  $util->showMessage('danger', 'something went wrong!!!');
    }
}

if (isset($_GET['read'])) {
    $users = $db->read();
    $output = '';
    if ($users) {
        foreach ($users as $user) {
            $output .= '<tr>
                        <th>' . $user['id'] . '</th>
                        <th>' . $user['first_name'] . '</th>
                        <th>' . $user['last_name'] . '</th>
                        <th>' . $user['email'] . '</th>
                        <th>' . $user['phone'] . '</th>
                        <th>
                            <a href="#" id="' . $user['id'] . '" class="btn btn-success btn-sm rounded-pill py-0 editLink" 
                                                                 data-bs-toggle="modal"
                                                                 data-bs-target="#editUser">Edit</a>
                            <a href="#" id="' . $user['id'] . '"class="btn btn-danger btn-sm rounded-pill py-0 deleteLink">Delete</a>
                        </th>
                    </tr>';
        }
        echo $output;

    } else {
        echo '<tr>
            <td colspan="6">
              NO USERS
            </td>
          </tr>';
    }
}

if (isset($_GET['edit'])) {
    $id = $_GET['id'];

    $user = $db->readOne($id);
    echo json_encode($user);
}

if (isset($_POST['update'])) {
    $id = $util->testInput($_POST['id']);
    $fname = $util->testInput($_POST['fname']);
    $lname = $util->testInput($_POST['lname']);
    $email = $util->testInput($_POST['email']);
    $phone = $util->testInput($_POST['phone']);

    if ($db->update($id, $fname, $lname, $email, $phone)) {
        echo $util->showMessage('success', 'update Completed');
    } else {
        echo $util->showMessage('danger', 'something went wrong!!!');
    }
}

    if (isset($_GET['delete'])) {
        $id = $_GET['id'];

        if ($db->delete($id)){
            echo $util->showMessage('info', 'Delete Completed');
        }
        else {
            echo  $util->showMessage('danger', 'something went wrong!!!');
        }
    }

?>

