<?php
function push(PDO $db, int $status, string $statusMessage)
{
    $query = "INSERT INTO results_requests (
      status, 
      status_message
    ) VALUES (
      ?,
      ?
    );
    ";

    $stmt = $db->prepare($query);
    $stmt->execute([$status, $statusMessage]);
}
