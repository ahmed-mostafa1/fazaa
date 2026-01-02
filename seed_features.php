<?php
use Illuminate\Contracts\Console\Kernel;
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$app->make(Kernel::class)->bootstrap();

use App\Models\Feature;

if (Feature::count() > 0) {
    echo "Features already populated.\n";
    exit;
}

$features = [
    [
        'title' => 'سرعة في الإنجاز',
        'icon' => 'fa-solid fa-bolt',
        'text' => 'لا داعي للانتظار في الطوابير، ننهي المعاملات بأقصى سرعة ممكنة.'
    ],
    [
        'title' => 'خصوصية وأمان',
        'icon' => 'fa-solid fa-user-shield',
        'text' => 'نضمن سرية بياناتك ومستنداتك وعدم مشاركتها مع أي طرف ثالث.'
    ],
    [
        'title' => 'أسعار تنافسية',
        'icon' => 'fa-solid fa-hand-holding-dollar',
        'text' => 'رسوم شفافة وواضحة مقدماً بدون أي مصاريف خفية.'
    ]
];

foreach ($features as $f) {
    Feature::create($f);
}

echo "Seeded " . count($features) . " features.\n";
