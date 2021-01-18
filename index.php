<h2>Анализ сайтов налоговой в областях на предмет смены ссылки и Last-Modified на файлы реквизитов 2021</h2>
Не путай дату ЗАРУЗКИ (появления) файла на сайте и дату МОДИФИКАЦИИ файла.
Скрипт определяет дату модификации файла, а загрузить его на сайт могут на неколько часов позже.
Дату появления/загрузки файла на сайтах налоговой -
скрипт не отслеживает.<br><br>
<?php
$list_regions = [
    [
        'name' => 'Киевская область',
        'pageURL' => 'https://kyivobl.tax.gov.ua/okremi-storinki/arhiv2/447490.html',
        'fileURL' => 'https://kyivobl.tax.gov.ua/data/material/000/352/447490/Rahunki_DB_Kievska.xls',
        'fileDate' => '18-01-2021 08:39:41',

        'fileURL2' => 'https://kyivobl.tax.gov.ua/data/material/000/352/447490/Rahunki_MB_Kievska.xlsx',
        'fileDate2' => '18-01-2021 08:33:15',
    ],

    [
        'name' => 'Киев',
        'pageURL' => 'https://kyiv.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://kyiv.tax.gov.ua/data/files/254174.xls',
        'fileDate' => '16-01-2021 09:25:59',
    ],

    [
        'name' => 'Винница',
        'pageURL' => 'http://vin.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://vin.tax.gov.ua/data/material/000/351/446417/DB_2021_na_KIEV_1401.xlsx',
        'fileDate' => '14-01-2021 11:28:02',
        'fileURL2' => 'https://vin.tax.gov.ua/data/material/000/351/446417/mb_2021_na_kiev_0501.xlsx',
        'fileDate2' => '06-01-2021 12:03:16',
    ],

    [
        'name' => 'Чернигов',
        'pageURL' => 'http://ch.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://ch.tax.gov.ua/data/files/253945.xls',
        'fileDate' => '30-12-2020 08:17:53',
    ],
    [
        'name' => 'Черновцы',
        'pageURL' => 'https://cv.tax.gov.ua/okremi-storinki/arhiv/446286.html',
        'fileURL' => 'https://cv.tax.gov.ua/data/material/000/351/446286/Dodatok_1_derzh_24.xls',
        'fileDate' => '18-01-2021 08:09:14',

        'pageURL2' => 'https://cv.tax.gov.ua/okremi-storinki/arhiv/446289.html',
        'fileURL2' => 'https://cv.tax.gov.ua/data/material/000/351/446289/Dodatok_2_mists_24.xls',
        'fileDate2' => '15-01-2021 14:31:39',
    ],
    [
        'name' => 'Черкассы',
        'pageURL' => 'http://ck.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://ck.tax.gov.ua/data/material/000/010/67220/16012021.xlsx',
        'fileDate' => '16-01-2021 15:56:11',
    ],
    [
        'name' => 'Хмельницкий',
        'pageURL' => 'http://km.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://km.tax.gov.ua/data/files/254202.xls',
        'fileDate' => '05-01-2021 16:56:42',
        'fileURL2' => 'https://km.tax.gov.ua/data/files/254203.xls',
        'fileDate2' => '05-01-2021 16:56:57',
    ],
    [
        'name' => 'Херсон',
        'pageURL' => 'http://kherson.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://kherson.tax.gov.ua/data/files/254206.xls',
        'fileDate' => '06-01-2021 14:30:31',
    ],
    [
        'name' => 'Харьков',
        'pageURL' => 'http://kh.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://kh.tax.gov.ua/data/files/254147.xls',
        'fileDate' => '13-01-2021 16:14:11',
    ],
    [
        'name' => 'Тернополь',
        'pageURL' => 'http://tr.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://tr.tax.gov.ua/data/material/000/351/446350/Ternopil_DB_20210116101207449.xls',
        'fileDate' => '16-01-2021 10:12:15',
        'fileURL2' => 'https://tr.tax.gov.ua/data/material/000/351/446350/Ternopil_MB_20210116101136227.xls',
        'fileDate2' => '16-01-2021 10:11:36',
    ],
    [
        'name' => 'Сумы',
        'pageURL' => 'http://sumy.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://sumy.tax.gov.ua/data/files/254204.xlsx',
        'fileDate' => '13-01-2021 13:55:34',
    ],
    [
        'name' => 'Ровно',
        'pageURL' => 'http://rv.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://rv.tax.gov.ua/data/files/254185.xls',
        'fileDate' => '16-01-2021 12:00:10',
        'fileURL2' => 'https://rv.tax.gov.ua/data/files/254184.xls',
        'fileDate2' => '16-01-2021 11:59:49',
    ],
    [
        'name' => 'Полтава',
        'pageURL' => 'http://poltava.tax.gov.ua/byudjetni-rahunki/',
        // Полтава долбоебы
        //'fileURL' => 'https://kh.tax.gov.ua/data/files/254091.xls',
        'fileURL' => 'https://kh.tax.gov.ua/data/files/254176.xls',
        'fileDate' => '16-01-2021 09:55:59',
    ],
    [
        'name' => 'Одесса',
        'pageURL' => 'http://od.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'http://od.tax.gov.ua/data/files/253928.xls',
        'fileDate' => '06-01-2021 11:55:44',
    ],
    [
        'name' => 'Николаев',
        'pageURL' => 'http://mk.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://mk.tax.gov.ua/data/files/254177.xls',
        'fileDate' => '16-01-2021 10:27:47',
        'fileURL2' => 'https://mk.tax.gov.ua/data/files/254189.xls',
        'fileDate2' => '16-01-2021 14:41:35',
    ],
    [
        'name' => 'Львов',
        'pageURL' => 'http://lv.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://lv.tax.gov.ua/data/files/254188.xls',
        'fileDate' => '16-01-2021 14:00:15',
    ],
    [
        'name' => 'Луганск',
        'pageURL' => 'http://lg.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://lg.tax.gov.ua/data/files/253927.xls',
        'fileDate' => '16-01-2021 10:16:35',
    ],
    [
        'name' => 'Кировоград',
        'pageURL' => 'http://kr.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://kr.tax.gov.ua/data/material/000/281/365160/DB_1601_20210116132149337.zip',
        'fileDate' => '16-01-2021 13:21:49',
    ],
    [
        'name' => 'Ивано-Франковск',
        'pageURL' => 'http://if.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://if.tax.gov.ua/data/material/000/351/446397/Rahunki_vano_Frank_vska_oblast.xls',
        'fileDate' => '16-01-2021 16:22:39',
    ],
    [
        'name' => 'Запорожье',
        'pageURL' => 'http://zp.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://zp.tax.gov.ua/data/normativ/000/003/74954/Rahunki_2021_DB_MB_20210118145927466.xls',
        'fileDate' => '06-01-2021 14:47:17',
    ],
    [
        'name' => 'Закарпатье',
        'pageURL' => 'http://zak.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://zak.tax.gov.ua/data/files/254201.xls',
        'fileDate' => '16-01-2021 16:01:17',
    ],
    [
        'name' => 'Житомир',
        'pageURL' => 'http://zt.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://zt.tax.gov.ua/data/material/000/353/448876/sayt_DB_2021_2.xls',
        'fileDate' => '06-01-2021 09:35:04',
        'fileURL2' => 'https://zt.tax.gov.ua/data/material/000/353/448876/sayt_MB_2021_1.xls',
        'fileDate2' => '06-01-2021 09:35:09',
    ],
    [
        'name' => 'Донецк',
        'pageURL' => 'http://dn.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://dn.tax.gov.ua/data/material/000/331/414335/18_01_2021rahunki_05.xls',
        'fileDate' => '11-01-2021 15:17:20',
    ],
    [
        'name' => 'Днепр',
        'pageURL' => 'http://dp.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://dp.tax.gov.ua/data/files/254181.xls',
        'fileDate' => '16-01-2021 10:58:07',
    ],
    [
        'name' => 'Волынь',
        'pageURL' => 'http://vl.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'http://vl.tax.gov.ua/data/files/254168.xlsx',
        'fileDate' => '16-01-2021 08:11:52',
    ],

];
$botAlert = 0;
foreach ($list_regions as $list_region) {
    print_check($list_region);
    echo "<hr>\n";
}
if ($botAlert) echo "<br>uptimerobot.com ALERT";
echo "<br><br><br><br><br><br><br><br><br><br>";


function print_check($region)
{
    echo "<strong>{$region['name']} <a href='{$region['pageURL']}'>{$region['pageURL']}</a></strong><br>\n";
    if (!$region['fileURL']) {
        echo "не указан адрес файла<br>\n";
        return;
    }

    $content = file_get_contents($region['pageURL']);
    checkOneFile($content, $region['fileURL'], $region['fileDate']);

    // у неокторых два файла надо чекать
    if (!empty($region['fileURL2'])) {
        // кейс когда второй файл лежит на отдельной хтмл странице
        if (isset($region['pageURL2'])) {
            $content = file_get_contents($region['pageURL2']);
            echo "<br><strong><a href='{$region['pageURL2']}'>{$region['pageURL2']}</a></strong><br>\n";
        }
        checkOneFile($content, $region['fileURL2'], $region['fileDate2']);
    }
}

function checkOneFile($content, $file, $fileDate)
{
    global $botAlert;

    if (!strpos($content, parse_url($file)['path'])) {
        echo "<br><font color=red>  !! эта ссылка теперь отсуствует на странице налоговой' {$file} : </font>\n";
        $botAlert = 1;
    }
    // Определяем и выводим Last-Modified создания файла
    $headers = get_headers($file, 1);
    $date = "Error";
    $time = 0;
    if ($headers && (strpos($headers[0], '200') !== FALSE)) {
        $time = strtotime($headers['Last-Modified']);
        $date = date("d-m-Y H:i:s", $time);
    }
    echo "<br> <a href='{$file}'>{$file}</a> файл изменен : <strong>$date</strong><br>";
    if ($fileDate && $date !== 'Error' && $fileDate !== $date) {
        echo "<font color=red>  !! Дата модификации файла изменилась - старая была {$fileDate}<br></font>\n";
        $botAlert = 1;
    } else if ((time() - $time) < 172800) echo "<font color=red>Прошло меньше 2х суток с момента модификации файла<br></font>\n";


}
