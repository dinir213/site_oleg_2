<?php
// Определяем язык клиента на основе HTTP_ACCEPT_LANGUAGE
$clientLanguage = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

// Функция для определения поддерживаемых языков вашего сайта (поменяйте на свои)
function isSupportedLanguage($language)
{
    $supportedLanguages = ['es', 'ru']; // Поддерживаемые языки на вашем сайте
    return in_array($language, $supportedLanguages);
}

// Если язык клиента поддерживается, используем соответствующие фразы
if (isSupportedLanguage($clientLanguage)) {
    if ($clientLanguage === 'es') {
        $header_p = "Siga el enlace en el botón";
        
        $first_video_h3 = "Características increíbles próximamente.";
        $first_video_p = "Quam quisque id diam vel quam elementum pulvinar. Ut etiam sit amet nisl purus in mollis nunc. Odio morbi quis commodo odio aenean sed adipiscing diam donec.";
        $second_video_h3 = "Características increíbles próximamente.";
        $second_video_p = "Quam quisque id diam vel quam elementum pulvinar. Ut etiam sit amet nisl purus in mollis nunc. Odio morbi quis commodo odio aenean sed adipiscing diam donec.";
        $third_video_h3 = "Características increíbles próximamente.";
        $third_video_p = "Quam quisque id diam vel quam elementum pulvinar. Ut etiam sit amet nisl purus in mollis nunc. Odio morbi quis commodo odio aenean sed adipiscing diam donec.";
        
        $footer_h2 = "La primera versión del sitio";
        $footer_p = "Sentimientos y sentimientos increíblemente maravillosos después de visitar el sitio";

        $button = "Ve";
    } elseif ($clientLanguage === 'ru') {
        $header_p = "Перейти по ссылке в кнопке";
        
        $first_video_h3 = "Удивительные возможности, которые скоро появятся.";
        $first_video_p = "Quam quisque id diam vel quam elementum pulvinar. Ut etiam sit amet nisl purus in mollis nunc. Odio morbi quis commodo odio aenean sed adipiscing diam donec.";
        $second_video_h3 = "Удивительные возможности, которые скоро появятся.";
        $second_video_p = "Quam quisque id diam vel quam elementum pulvinar. Ut etiam sit amet nisl purus in mollis nunc. Odio morbi quis commodo odio aenean sed adipiscing diam donec.";
        $third_video_h3 = "Удивительные возможности, которые скоро появятся.";
        $third_video_p = "Quam quisque id diam vel quam elementum pulvinar. Ut etiam sit amet nisl purus in mollis nunc. Odio morbi quis commodo odio aenean sed adipiscing diam donec.";
        
        $footer_h2 = "Первая версия сайта";
        $footer_p = "Безумно прекрасные ощущения и чувства после посещения сайта";

        $button = "Перейти";

    }
} else {
    // Если язык не поддерживается, используем английские фразы
        $header_p = "Follow the link in the button";
        
        $first_video_h3 = "Amazing features coming soon.";
        $first_video_p = "Quam quisque id diam vel quam elementum pulvinar. Ut etiam sit amet nisl purus in mollis nunc. Odio morbi quis commodo odio aenean sed adipiscing diam donec.";
        $second_video_h3 = "Amazing features coming soon.";
        $second_video_p = "Quam quisque id diam vel quam elementum pulvinar. Ut etiam sit amet nisl purus in mollis nunc. Odio morbi quis commodo odio aenean sed adipiscing diam donec.";
        $third_video_h3 = "Amazing features coming soon.";
        $third_video_p = "Quam quisque id diam vel quam elementum pulvinar. Ut etiam sit amet nisl purus in mollis nunc. Odio morbi quis commodo odio aenean sed adipiscing diam donec.";
        
        $footer_h2 = "The first version of the site";
        $footer_p = "Insanely wonderful feelings and feelings after visiting the site";

        $button = "Go";
}

?>