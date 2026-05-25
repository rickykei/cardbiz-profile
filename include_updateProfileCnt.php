<?php
$dbclient = new MongoDB\Client($mongourl);

// 取得 user_agent & ip
$user_agent = $_SERVER['HTTP_USER_AGENT'] ?? '';
$ip = $_SERVER["HTTP_CF_CONNECTING_IP"] ?? $_SERVER["REMOTE_ADDR"] ?? '';

// ==============================
// ✅ 核心：過濾所有 bot / crawler 不寫入
// ==============================
$is_bot = preg_match('/bot|crawler/i', $user_agent);

// 如果是機器人、或空值、或必要欄位空 -> 不寫入
if (
    $is_bot || 
    empty($sig) || 
    empty($company_id) || 
    empty($user_agent)
) {
    if ($debug) echo "🚫 機器人或無效請求，不記錄";
    return;
}

// 時間 (正確 UTC 時間)
$utcdatetime = new MongoDB\BSON\UTCDateTime();

// 選擇資料庫與集合
$db = $dbclient->selectDatabase("cardbiz_db");
$collectionVcf = $db->selectCollection("profile_counters");

// 寫入資料
$insertOneResult = $collectionVcf->insertOne([
    'staff_id'    => $sig,
    'company_id'  => $company_id,
    'ip'          => $ip,
    'user_agent'  => $user_agent,
    'createdAt'   => $utcdatetime,
    'updatedAt'   => $utcdatetime
]);

// Debug 模式
if ($debug) {
    echo "✅ 記錄成功\n";
    echo "sig = " . $sig . "\n";
    echo "ip = " . $ip . "\n";
    echo "user_agent = " . $user_agent . "\n";
    printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());
    var_dump($insertOneResult->getInsertedId());
}
?>