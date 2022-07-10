<?

require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');

echo json_encode([
    'status'  => true,
    'message' => 'Hello World from ajax.php',
]);
