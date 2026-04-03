<?php
$serverSoftware = $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown';
$documentRoot = $_SERVER['DOCUMENT_ROOT'] ?? 'Unknown';
$requestUri = $_SERVER['REQUEST_URI'] ?? 'Unknown';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apache Test Application</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f5f7fb;
      color: #1f2937;
    }
    .container {
      max-width: 720px;
      margin: 40px auto;
      padding: 24px;
      background: #ffffff;
      border: 1px solid #e5e7eb;
      border-radius: 10px;
      box-shadow: 0 10px 24px rgba(0, 0, 0, 0.06);
    }
    h1 {
      margin-top: 0;
      color: #0f766e;
    }
    .ok {
      padding: 10px 12px;
      border-radius: 8px;
      background: #ecfdf5;
      border: 1px solid #10b981;
      color: #065f46;
      font-weight: 600;
    }
    code {
      background: #f3f4f6;
      padding: 2px 6px;
      border-radius: 4px;
    }
    ul {
      line-height: 1.9;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Apache Test Application</h1>
    <p class="ok">Success: This page is running through Apache and PHP.</p>

    <ul>
      <li><strong>Server Software:</strong> <?php echo htmlspecialchars($serverSoftware, ENT_QUOTES, 'UTF-8'); ?></li>
      <li><strong>Document Root:</strong> <?php echo htmlspecialchars($documentRoot, ENT_QUOTES, 'UTF-8'); ?></li>
      <li><strong>Request URI:</strong> <?php echo htmlspecialchars($requestUri, ENT_QUOTES, 'UTF-8'); ?></li>
      <li><strong>Server Time:</strong> <?php echo date('Y-m-d H:i:s'); ?></li>
    </ul>

    <p>If you can see this page at <code>http://localhost/php/resturent_project/test-app.php</code>, your test application is deployed on Apache.</p>
  </div>
</body>
</html>
