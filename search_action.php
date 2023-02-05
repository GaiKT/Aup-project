<?php

    require_once 'connect.php';

    if (isset($_POST['query'])) {
        $inputText = $_POST['query'];
        $sql = "SELECT * FROM test WHERE id_card LIKE :id_card";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['id_card' => '%' . $inputText . '%' ]);
        $result = $stmt->fetchAll();

        if ($result) {
            foreach($result as $row) {
                echo '<a class="list-group-item list-group-item-action border-1">' . $row['id_card'] . '</a>';
            }
        } else {
            echo '<p class="list-group-item border-1">No record.</p>';
        }
    }

?>