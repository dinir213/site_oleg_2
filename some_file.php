<?php
require_once 'server/connect.php'
?>
<?php
function detectBotAndReferer() {
    function isBotIpAddress($ipAddress) {
        // Ваша логика для проверки IP-адреса бота
    }
    
    function getRequestCountFromIpAddress($ipAddress, $minutes) {
        // Ваша логика для получения количества запросов от IP-адреса за указанное количество минут
        return 120;
    }
    
    function getDomainFromReferer($referer) {
        if (strpos($referer, 'http') === 0) {
            $refererParts = parse_url($referer);
            if ($refererParts !== false && isset($refererParts['host'])) {
                return $refererParts['host'];
            }
        }
        return null;
    }
    
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $ipAddress = $_SERVER['REMOTE_ADDR'];
    $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
    
    // Проверка юзер-агента
    if(isset($userAgent)){
        if ( preg_match('/abacho|accona|AddThis|AdsBot|ahoy|AhrefsBot|AISearchBot|alexa|altavista|anthill|appie|applebot|arale|araneo|AraybOt|ariadne|arks|aspseek|ATN_Worldwide
        |Atomz|baiduspider|baidu|bbot|bingbot|bing|Bjaaland|BlackWidow|BotLink|bot|boxseabot|bspider|calif|CCBot|ChinaClaw|christcrawler|CMC\/0\.01|combine|confuzzledbot|contaxe|CoolBot
        |cosmos|crawler|crawlpaper|crawl|curl|cusco|cyberspyder|cydralspider|dataprovider|digger|DIIbot|DotBot|downloadexpress|DragonBot|DuckDuckBot|dwcp|EasouSpider|ebiness|ecollector
        |elfinbot|esculapio|ESI|esther|eStyle|Ezooms|facebookexternalhit|facebook|facebot|fastcrawler|FatBot|FDSE|FELIX IDE|fetch|fido|find|Firefly|fouineur|Freecrawl|froogle|gammaSpider
        |gazz|gcreep|geona|Getterrobo-Plus|get|girafabot|golem|googlebot|\-google|grabber|GrabNet|griffon|Gromit|gulliver|gulper|hambot|havIndex|hotwired|htdig|HTTrack|ia_archiver|iajabot
        |IDBot|Informant|InfoSeek|InfoSpiders|INGRID\/0\.1|inktomi|inspectorwww|Internet Cruiser Robot|irobot|Iron33|JBot|jcrawler|Jeeves|jobo|KDD\-Explorer|KIT\-Fireball|ko_yappo_robot
        |label\-grabber|larbin|legs|libwww-perl|linkedin|Linkidator|linkwalker|Lockon|logo_gif_crawler|Lycos|m2e|majesticsEO|marvin|mattie|mediafox|mediapartners|MerzScope|MindCrawler
        |MJ12bot|mod_pagespeed|moget|Motor|msnbot|muncher|muninn|MuscatFerret|MwdSearch|NationalDirectory|naverbot|NEC\-MeshExplorer|NetcraftSurveyAgent|NetScoop|NetSeer|newscan\-online
        |nil|none|Nutch|ObjectsSearch|Occam|openstat.ru\/Bot|packrat|pageboy|ParaSite|patric|pegasus|perlcrawler|phpdig|piltdownman|Pimptrain|pingdom|pinterest|pjspider|PlumtreeWebAccessor
        |PortalBSpider|psbot|rambler|Raven|RHCS|RixBot|roadrunner|Robbie|robi|RoboCrawl|robofox|Scooter|Scrubby|Search\-AU|searchprocess|search|SemrushBot|Senrigan|seznambot|Shagseeker
        |sharp\-info\-agent|sift|SimBot|Site Valet|SiteSucker|skymob|SLCrawler\/2\.0|slurp|snooper|solbot|speedy|spider_monkey|SpiderBot\/1\.0|spiderline|spider|suke|tach_bw|TechBOT
        |TechnoratiSnoop|templeton|teoma|titin|topiclink|twitterbot|twitter|UdmSearch|Ukonline|UnwindFetchor|URL_Spider_SQL|urlck|urlresolver|Valkyrie libwww\-perl|verticrawl|Victoria
        |void\-bot|Voyager|VWbot_K|wapspider|WebBandit\/1\.0|webcatcher|WebCopier|WebFindBot|WebLeacher|WebMechanic|WebMoose|webquest|webreaper|webspider|webs|WebWalker|WebZip|wget|whowhere
        |winona|wlm|WOLP|woriobot|WWWC|XGET|xing|yahoo|YandexBot|YandexMobileBot|yandex|yeti|Zeus/i', $userAgent)) {
            return $userAgent_indicator = true;
            }
        } else {
            return $userAgent_indicator = false;

        }
    
    if (strpos($userAgent, 'bot') !== false || strpos($userAgent, 'crawl') !== false) {
        // Это, вероятно, бот
        // Дополнительные действия, если это бот
        // Например:
        // logBotActivity($ipAddress, $userAgent);
    }
    
    // Проверка IP-адреса
    if (isBotIpAddress($ipAddress)) {
        // Это, вероятно, бот
        // Дополнительные действия, если это бот
        // Например:
        // blockBotAccess($ipAddress);
    }
    
    // Проверка частоты запросов
    $requestsPerMinute = getRequestCountFromIpAddress($ipAddress, 1);
    if ($requestsPerMinute > 100) {
        // Это, вероятно, бот
        // Дополнительные действия, если это бот
        // Например:
        // redirectBotTraffic($ipAddress);
    }
    
    // Проверка HTTP_REFERER и получение названия домена
    $domain = getDomainFromReferer($referer);
    if ($domain !== null) {
        // echo "Suspicious bot referred from domain: " . $domain;
    }
}

// Вызов функции для выполнения всех проверок
detectBotAndReferer();
?>


<?php
// Файл save_time_spent.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем данные о времени пребывания
    $timeSpent = $_POST['timeSpent'];
    
    // Открываем или создаем .txt файл для записи данных
    $file = fopen('time_spent.txt', 'a'); // 'a' означает режим записи, добавляющий данные в конец файла
    
    // Записываем данные о времени пребывания в .txt файл
    fwrite($file, $timeSpent . PHP_EOL); // PHP_EOL обеспечивает перевод строки для каждой записи
    
    // Закрываем файл
    fclose($file);
    
    // Ответ для клиента (JavaScript)
    echo json_encode(['message' => 'Данные о времени пребывания успешно сохранены на сервере.']);
}
?>

