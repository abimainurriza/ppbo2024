<?php 

require_once 'vendor/autoload.php';

use App\Admin\Dosen;

$dian = new Dosen(198411132015041001, "Dian Prawira", "Jln.Purnama", 62111111, "0013118405");
$dian->mengajar();