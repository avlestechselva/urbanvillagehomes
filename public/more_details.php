<?php
$profileID = isset($_GET['profileID']) ? $_GET['profileID'] : null;
if ($profileID) {
    $id = preg_replace('/[^a-zA-Z0-9_-]/', '', $profileID);
    header('Location: /property/' . $id . '/' . $id, true, 301);
    exit;
}
header('Location: /', true, 302);
exit;
