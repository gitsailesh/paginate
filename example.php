<?php
require_once("Pager.php");

$total_records = 100; //total records that you want to show as paginated
$page = $_GET['page'];
$pager = new Pager;
echo $pager->showLinks("http://example.com/posts.php", $page, $total_records, 10, 2);