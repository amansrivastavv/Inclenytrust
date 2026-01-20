<?php
// download.php

// 1. Get the Publication ID
$id = $_GET['id'] ?? null;

if (!$id) {
    die("Error: No file specified.");
}

// 2. Load the Publications Data
$file_path = __DIR__ . '/assets/data/publications.json';
if (!file_exists($file_path)) {
    die("Error: Data file not found.");
}

$start_data = file_get_contents($file_path);
$publications = json_decode($start_data, true);

// 3. Find the matching publication
$pub = null;
foreach ($publications as $p) {
    if ($p['id'] === $id) {
        $pub = $p;
        break;
    }
}

if (!$pub || empty($pub['pdf_url'])) {
    die("Error: Publication or file not found.");
}

$file_url = $pub['pdf_url'];

// 4. Validate URL (Basic check)
if (!filter_var($file_url, FILTER_VALIDATE_URL)) {
    die("Error: Invalid file URL.");
}

// 5. Fetch and Serve the File
// We use curl to fetch the remote file headers first to confirm it exists
$ch = curl_init($file_url);
curl_setopt($ch, CURLOPT_NOBODY, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$data = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($http_code !== 200) {
    die("Error: Remote file could not be accessed (HTTP $http_code).");
}

// 6. Set Headers to Force Download
$filename = basename($file_url);
// Clean filename if needed
$filename = preg_replace('/[^a-zA-Z0-9\._-]/', '', $filename);
if (empty($filename)) {
    $filename = 'document.pdf';
}

header('Content-Description: File Transfer');
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');

// 7. Stream the file
// Use readfile if allow_url_fopen is on, otherwise use curl
if (ini_get('allow_url_fopen')) {
    readfile($file_url);
} else {
    $ch = curl_init($file_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, false); // Write directly to output buffer
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_exec($ch);
    curl_close($ch);
}
exit;
?>