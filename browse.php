<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type");

include_once '../config/database.php';

$database = new Database();
$db = $database->getConnection();

$category = isset($_GET['category']) ? $_GET['category'] : '';
$search = isset($_GET['search']) ? $_GET['search'] : '';

$query = "SELECT d.*, u.full_name as user_name 
          FROM donations d 
          JOIN users u ON d.user_id = u.id 
          WHERE d.status = 'available'";

if(!empty($category) && $category != 'all') {
    $query .= " AND d.category = :category";
}

if(!empty($search)) {
    $query .= " AND d.item_name LIKE :search";
}

$query .= " ORDER BY d.created_at DESC";

$stmt = $db->prepare($query);

if(!empty($category) && $category != 'all') {
    $stmt->bindParam(':category', $category);
}

if(!empty($search)) {
    $search_param = "%$search%";
    $stmt->bindParam(':search', $search_param);
}

$stmt->execute();
$donations = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode(array("success" => true, "donations" => $donations));
?>