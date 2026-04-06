<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = 'AWS Services Company USA | Cloud Architecture & DevOps — ArtisticWebServices';
$page_description = 'Certified AWS partner offering cloud architecture, DevOps, serverless development, and AWS migration services. Trusted by 200+ USA businesses.';
$page_keywords = 'AWS services company USA, Amazon Web Services partner, AWS cloud migration, AWS DevOps, cloud architecture USA';
$page_canonical = 'https://artisticwebservices.com/services/aws-services';
$page_og_image = 'https://artisticwebservices.com/assets/images/resources/artisticwebservice w.png';
$page_breadcrumbs = [['name' => 'Services', 'url' => 'https://artisticwebservices.com/services.php'], ['name' => 'AWS Services', 'url' => 'https://artisticwebservices.com/services/aws-services.php']];
$page_service_schema = ['name' => 'AWS Cloud Services', 'description' => 'Cloud architecture, DevOps, serverless, and AWS migration services for USA businesses.'];
require_once __DIR__ . '/../includes/head.php';
$B = defined('SITE_BASE') ? SITE_BASE : '';
?>

<body>
<div class="page-wrapper">
<?php require_once __DIR__ . '/../includes/header.php'; ?>

<!-- Page content will go here -->

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
</div>
</body>
</html>
