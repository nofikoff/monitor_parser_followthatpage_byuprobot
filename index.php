<h2>Анализ сайтов налоговой в областях на предмет смены ссылки и Last-Modified на файлы реквизитов 2021</h2>
Не путай дату ЗАРУЗКИ (появления) файла на сайте и дату МОДИФИКАЦИИ файла.
Скрипт определяет дату модификации файла, а загрузить его на сайт могут на неколько часов позже.
Дату появления/загрузки файла на сайтах налоговой -
скрипт не отслеживает.<br><br>
<?php
$list_regions = [
    [
        'pageURL' => 'https://kyivobl.tax.gov.ua/okremi-storinki/arhiv2/447490.html',
        'fileURL' => 'https://kyivobl.tax.gov.ua/data/material/000/352/447490/Rahunki_DB_Kievska.xls',
        'fileDate' => '06-01-2021 14:42:45',

        'fileURL2' => 'https://kyivobl.tax.gov.ua/data/material/000/352/447490/Rahunki_MB_Kievska.xlsx',
        'fileDate2' => '06-01-2021 14:42:45',
    ],

    [
        'pageURL' => 'https://kyiv.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://kyiv.tax.gov.ua/data/files/254074.xls',
        'fileDate' => '06-01-2021 13:58:14',
    ],

    [
        'pageURL' => 'http://vin.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://vin.tax.gov.ua/data/material/000/351/446417/DB_2021_na_KIEV_1401.xlsx',
        'fileDate' => '14-01-2021 11:28:02',
        'fileURL2' => 'https://vin.tax.gov.ua/data/material/000/351/446417/mb_2021_na_kiev_0501.xlsx',
        'fileDate2' => '06-01-2021 12:03:16',
    ],

    [
        'pageURL' => 'http://ch.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://ch.tax.gov.ua/data/files/253945.xls',
        'fileDate' => '30-12-2020 08:17:53',
    ],
    [
        'pageURL' => 'https://cv.tax.gov.ua/okremi-storinki/arhiv/446286.html',
        'fileURL' => 'https://cv.tax.gov.ua/data/material/000/351/446286/Dodatok_1_derzh_24.xls',
        'fileDate' => '06-01-2021 12:13:23',

        'pageURL2' => 'https://cv.tax.gov.ua/okremi-storinki/arhiv/446289.html',
        'fileURL2' => 'https://cv.tax.gov.ua/data/material/000/351/446289/Dodatok_2_mists_24.xls',
        'fileDate2' => '06-01-2021 12:32:13',
    ],
    [
        'pageURL' => 'http://ck.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://ck.tax.gov.ua/data/material/000/010/67220/01012021.xls',
        'fileDate' => '24-12-2020 14:40:36',
    ],
    [
        'pageURL' => 'http://km.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://km.tax.gov.ua/data/files/254035.xlsx',
        'fileDate' => '05-01-2021 16:56:42',
        'fileURL2' => 'https://km.tax.gov.ua/data/files/254036.xlsx',
        'fileDate2' => '05-01-2021 16:56:57',
    ],
    [
        'pageURL' => 'http://kherson.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://kherson.tax.gov.ua/data/files/254078.xls',
        'fileDate' => '06-01-2021 14:30:31',
    ],
    [
        'pageURL' => 'http://kh.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://kh.tax.gov.ua/data/files/254147.xls',
        'fileDate' => '13-01-2021 16:14:11',
    ],
    [
        'pageURL' => 'http://tr.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://tr.tax.gov.ua/data/material/000/351/446350/Ternopil_DB.xls',
        'fileDate' => '06-01-2021 10:51:47',
        'fileURL2' => 'https://tr.tax.gov.ua/data/material/000/351/446350/Ternopil_MB.xls',
        'fileDate2' => '06-01-2021 10:52:49',
    ],
    [
        'pageURL' => 'http://sumy.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://sumy.tax.gov.ua/data/files/254115.xlsx',
        'fileDate' => '13-01-2021 13:55:34',
    ],
    [
        'pageURL' => 'http://rv.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://rv.tax.gov.ua/data/files/254053.xls',
        'fileDate' => '06-01-2021 11:03:30',
        'fileURL2' => 'https://rv.tax.gov.ua/data/files/254054.xls',
        'fileDate2' => '06-01-2021 11:04:15',
    ],
    [
        'pageURL' => 'http://poltava.tax.gov.ua/byudjetni-rahunki/',
        // Полтава долбоебы
        //'fileURL' => 'https://kh.tax.gov.ua/data/files/254091.xls',
        'fileURL' => 'https://kh.tax.gov.ua/data/files/254091.xls',
        'fileDate' => '11-01-2021 15:45:13',
    ],
    [
        'pageURL' => 'http://od.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'http://od.tax.gov.ua/data/files/253928.xls',
        'fileDate' => '06-01-2021 11:55:44',
    ],
    [
        'pageURL' => 'http://mk.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://mk.tax.gov.ua/data/files/254024.xls',
        'fileDate' => '04-01-2021 14:56:13',
        'fileURL2' => 'https://mk.tax.gov.ua/data/files/254029.xls',
        'fileDate2' => '05-01-2021 10:58:19',
    ],
    [
        'pageURL' => 'http://lv.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://lv.tax.gov.ua/data/files/254042.xlsx',
        'fileDate' => '06-01-2021 08:49:47',
    ],
    [
        'pageURL' => 'http://lg.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://lg.tax.gov.ua/data/files/253927.xls',
        'fileDate' => '14-01-2021 13:59:00',
    ],
    [
        'pageURL' => 'http://kr.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://kr.tax.gov.ua/data/material/000/281/365160/DB_0301.zip',
        'fileDate' => '06-01-2021 13:10:34',
    ],
    [
        'pageURL' => 'http://if.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://if.tax.gov.ua/data/material/000/351/446397/Rahunki_vano_Frank_vska_oblast.xls',
        'fileDate' => '06-01-2021 09:30:22',
    ],
    [
        'pageURL' => 'http://zp.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://zp.tax.gov.ua/data/normativ/000/003/74954/rahunki_2021_utoch_ok1.xls',
        'fileDate' => '06-01-2021 14:47:17',
    ],
    [
        'pageURL' => 'http://zak.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://zak.tax.gov.ua/data/files/254151.xlsx',
        'fileDate' => '14-01-2021 09:47:20',
    ],
    [
        'pageURL' => 'http://zt.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://zt.tax.gov.ua/data/material/000/351/446386/DB_2021.xls',
        'fileDate' => '06-01-2021 09:35:04',
        'fileURL2' => 'https://zt.tax.gov.ua/data/material/000/351/446386/MB_2021.xls',
        'fileDate2' => '06-01-2021 09:35:09',
    ],
    [
        'pageURL' => 'http://dn.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://dn.tax.gov.ua/data/material/000/331/414335/11_01_2021rahunki_05.xls',
        'fileDate' => '11-01-2021 15:17:20',
    ],
    [
        'pageURL' => 'http://dp.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'https://dp.tax.gov.ua/data/files/254099.xls',
        'fileDate' => '12-01-2021 14:36:18',
    ],
    [
        'pageURL' => 'http://vl.tax.gov.ua/byudjetni-rahunki/',
        'fileURL' => 'http://vl.tax.gov.ua/data/files/254044.xlsx',
        'fileDate' => '06-01-2021 08:58:41',
    ],

];
foreach ($list_regions as $list_region) {
    print_check($list_region);
    echo "<hr>\n";
}

function print_check($region)
{
    echo "<strong><a href='{$region['pageURL']}'>{$region['pageURL']}</a></strong><br>\n";
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
    if (!strpos($content, parse_url($file)['path'])) {
        echo "<br><font color=red>  !! эта ссылка теперь отсуствует на странице налоговой' {$file} : </font>\n";
    } else {
        //сылка на файл не изменилась
    }
    // Определяем и выводим Last-Modified создания файла
    $headers = get_headers($file, 1);
    $date = "Error";
    if ($headers && (strpos($headers[0], '200') !== FALSE)) {
        $time = strtotime($headers['Last-Modified']);
        if ((time()-$time) < 172800) echo "<font color=red>Прошло меньше 2х суток с момента модификации файла<br></font>\n";
        $date = date("d-m-Y H:i:s", $time);
    }
    echo "<br> <a href='{$file}'>{$file}</a> файл изменен : <strong>$date</strong><br>";
    if ($fileDate && $date !== 'Error' && $fileDate !== $date)
        echo "<font color=red>  !! Дата модификации файла изменилась - старая была {$fileDate}<br></font>\n";

}
