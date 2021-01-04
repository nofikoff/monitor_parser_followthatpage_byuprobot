<?php
$list_regions = [
    [
        'fileURL' => 'https://kyivobl.tax.gov.ua/data/files/253906.RAR',
        'pageURL' => 'https://kyivobl.tax.gov.ua/byudjetni-rahunki/',
        'pageRegexp' => '~<strong>1\. <a href="([^"]+)">~',
    ],

    [
        'fileURL' => 'https://kyivobl.tax.gov.ua/data/files/253906.RAR',
        'pageURL' => 'https://kyivobl.tax.gov.ua/byudjetni-rahunki/',
        'pageRegexp' => '~<strong>1\. <a href="([^"]+)">~',
    ],

];
foreach ($list_regions as $list_region) {
    print_check($list_region);
    echo "<hr>\n";
}

function print_check($region)
{
    echo "Анализ {$region['pageURL']} на предмет смены ссылки на файл<br>\n";


    $content = file_get_contents($region['pageURL']);
    if (preg_match($region['pageRegexp'], $content, $d)) {

        // ищем старую ссылку вида /data/files/253906.RAR
        if ($d[1] !== str_replace('https://kyivobl.tax.gov.ua', '', $region['fileURL'])) {
            echo "Ура. Ссылка изменилась новая " . $d[1];
        } else {
            echo "К сожалению нового файла нет, старый " . $d[1];
        }

    } else {
        echo "Не могу прочитать страницу";
    }

// Определяем и выводим Last-Modified создания файла
    $headers = get_headers($region['fileURL'], 1);
    $date = "Error";
//echo "<pre>"; print_r($headers); echo "</pre>";
    if ($headers && (strpos($headers[0], '200') !== FALSE)) {
        $time = strtotime($headers['Last-Modified']);
        $date = date("d-m-Y H:i:s", $time);
    }
    echo '<br> ' . $region['fileURL'] . ' last-Modified : ' . $date . '<br>';
}
