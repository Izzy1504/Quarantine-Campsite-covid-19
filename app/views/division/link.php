<?php
function generateDynamicLink($currentPath, $pageName) {
    // Danh sách các trang cần xử lý đặc biệt
    $specialPages = ['room', 'patient', 'login', 'index', 'infor'];

    // Kiểm tra xem trang hiện tại có trong danh sách trang đặc biệt không
    $isSpecialPage = in_array($pageName, $specialPages);

    // Tách các phần của đường dẫn
    $pathParts = explode('/', trim($currentPath, '/'));

    // Kiểm tra và điều hướng đường dẫn
    if ($isSpecialPage) {
        // Nếu là trang đặc biệt và không phải là trang home, thì chuyển hướng về page/page.php
        $pathParts[] = $pageName;
        $pathParts[] = $pageName . '.php';
    } else {
        // Ngược lại, giữ nguyên đường dẫn
        $pathParts[] = $pageName . '.php';
    }

    // Xây dựng lại đường dẫn từ các phần đã xử lý
    $resultPath = '/' . implode('/', $pathParts);

    return $resultPath;
}

$currentPath = $_SERVER['REQUEST_URI'];

// Loại bỏ tên file trang hiện tại để có đường dẫn cơ sở
$basePath = rtrim(dirname($currentPath), '/\\');

$roomLink = generateDynamicLink($currentPath, $basePath, 'room');
$patientLink = generateDynamicLink($currentPath, $basePath, 'patient');
$loginLink = generateDynamicLink($currentPath, $basePath, 'login');
$indexLink = generateDynamicLink($currentPath, $basePath, 'index');
$inforLink = generateDynamicLink($currentPath, $basePath, 'infor');
?>
