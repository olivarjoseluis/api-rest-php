<?php
$allowResourceTypes = [
  'books',
  'authors',
  'genres'
];

$resourceType = $_GET['resource_type'];

if (!in_array($resourceType, $allowResourceTypes)) {
  die;
}

$books = [
  1 => ['title' => 'Book number one', 'id_author' => 2, 'id_gender' => 3],
  2 => ['title' => 'Book number two', 'id_author' => 3, 'id_gender' => 4],
  3 => ['title' => 'Book number there', 'id_author' => 4, 'id_gender' => 5],
  4 => ['title' => 'Book number four', 'id_author' => 5, 'id_gender' => 6]
];

header('Content-Type: application/json');
$resourceId = array_key_exists('resource_id', $_GET) ? $_GET['resource_id'] : '';

switch (strtoupper($_SERVER['REQUEST_METHOD'])) {
  case 'GET':
    if (empty($resourceId)) {
      echo json_encode($books);
    } else {
      if (array_key_exists($resourceId, $books)) {
        echo json_encode($books[$resourceId]);
      }
    }

    break;
  case 'POST':
    # code...
    break;
  case 'PUT':
    # code...
    break;
  case 'DELETE':
    # code...
    break;
}
