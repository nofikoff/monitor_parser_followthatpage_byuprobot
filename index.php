<?php
$fileURL = 'https://kyivobl.tax.gov.ua/data/files/253906.RAR';
$pageURL = 'https://kyivobl.tax.gov.ua/byudjetni-rahunki/';

echo "Анализ $pageURL на предмет смены ссылки на файл<br>\n";


$content = file_get_contents($pageURL);
if (preg_match('~<strong>1\. <a href="([^"]+)">~', $content, $d)) {

    if ($d[1] !== '/data/files/253906.RAR') {
        echo "Ура. Ссылка изменилась новая " . $d[1];
    } else {
        echo "К сожалению нового файла нет, старый " . $d[1];
    }

} else {
    echo "Не могу прочитать страницу";

}

// Определяем и выводим Last-Modified создания файла
$headers = get_headers($fileURL, 1);
$date = "Error";
//echo "<pre>"; print_r($headers); echo "</pre>";
if ($headers && (strpos($headers[0], '200') !== FALSE)) {
    $time = strtotime($headers['Last-Modified']);
    $date = date("d-m-Y H:i:s", $time);
}
echo '<br>Last-Modified : ' . $date . '<br>';
