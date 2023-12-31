<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NRX Studio</title>
    <link href="https://fonts.googleapis.com/css?family=Heebo:400,700|Oxygen:700" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/style.css">
    <script src="https://unpkg.com/scrollreveal@4.0.5/dist/scrollreveal.min.js"></script>
	<?php 
	require ('some_file.php');
	require ('server/language.php');
	require ('server/create.php');
	?>
</head>
<body class="is-boxed has-animations">
	
    <div class="body-wrap boxed-container">
        <header class="site-header text-light">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
                            <a href="#">
								<img class="header-logo-image" width="50px" src="src/images/124-1245916_a-definitive-ranking-of-emoji-that-can-be-used-to-represent-banana.svg" alt="Logo">
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="hero text-center text-light">
				<!-- <div class="hero-bg"></div>
				<div class="hero-particles-container">
					<canvas id="hero-particles"></canvas>
				</div> -->
                <div class="container-fluid">
                    <div class="hero-inner">
						<div class="hero-copy full-screen">
							<div class="full-screen__body">
								<h1 class="hero-title mt-0 full-screen__title">NRX Studio</h1>
								<p class="hero-paragraph full-screen__text"><?php echo $header_p; ?></p>
								<p class="time"><?php echo $ip ?></p>	
								
								<div class="hero-cta">
									<a class="button button-primary button-wide-mobile" href="https://www.sheer.com/nrxstudio">Перейти</a>
								</div>
							</div>
	                        <video preload="auto" loop muted autoplay class="full-screen__video">
								<source src="src/videos/intro.webm" type="video/webm">
								<source src="src/videos/intro.mp4" type="video/mp4">
							</video>
	                        
						</div>
						<!-- <div class="mockup-container">
							
							<div class="mockup-box">
								<div class="container-video">
									<video preload="metadata" controls loop class="mockup-video">
										<source src="src/videos/block.webm" type="video/webm">
										<source src="src/videos/block.mp4" type="video/mp4">
									</video>
									<div class="hero-cta">
										<a class="button button-primary button-wide-mobile" href="https://www.sheer.com/nrxstudio">Перейти</a>
									</div>
								</div>
							</div>
							
							
						</div> -->
                    </div>
                </div>
            </section>

			<section class="features-extended section">
                <div class="features-extended-inner section-inner">
					<div class="features-extended-wrap">
						<div class="container">
							<div class="feature-extended">
								<div class="feature-extended-image">
									
									<video preload="metadata" controls loop poster="dist/images/First_preview.png" class="feature-extended__video">
										<source src="src/videos/ul/FIRST.webm" type="video/webm">
										<source src="src/videos/ul/FIRST.mp4" type="video/mp4">
									</video>	
								</div>
								<div class="feature-extended-body is-revealing">
									<h3 class="mt-0 mb-16"><?php echo $first_video_h3; ?></h3>
									<p class="m-0"><?php echo $first_video_p; ?></p>
									<div class="hero-cta">
										<a class="button button-primary button-wide-mobile feature-extended__button" href="https://www.sheer.com/nrxstudio">Перейти</a>
									</div>
								</div>
							</div>
							
							<div class="feature-extended">
								<div class="feature-extended-image">
									<video preload="metadata" controls loop poster="dist/images/Second_preview_new.png" class="feature-extended__video">
										<source src="src/videos/ul/SECOND.webm" type="video/webm">
										<source src="src/videos/ul/SECOND.mp4" type="video/mp4">
									</video>
								</div>
								<div class="feature-extended-body is-revealing">
									<h3 class="mt-0 mb-16"><?php echo $second_video_h3; ?></h3>
									<p class="m-0"><?php echo $second_video_p; ?></p>
									<div class="hero-cta">
										<a class="button button-primary button-wide-mobile feature-extended__button" href="https://www.sheer.com/nrxstudio">Перейти</a>
									</div>
								</div>
							</div>
							<div class="feature-extended">
								<div class="feature-extended-image">
									
									<video preload="metadata" controls loop poster="dist/images/Third_preview.png" class="feature-extended__video">
										<source src="src/videos/ul/THIRD.webm" type="video/webm">
										<source src="src/videos/ul/THIRD.mp4" type="video/mp4">
									</video>									</div>
								<div class="feature-extended-body is-revealing">
									<h3 class="mt-0 mb-16"><?php echo $third_video_h3; ?></h3>
									<p class="m-0"><?php echo $third_video_p; ?></p>
									<div class="hero-cta">
										<a class="button button-primary button-wide-mobile feature-extended__button" href="https://www.sheer.com/nrxstudio">Перейти</a>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
            </section>
        </main>
		
		<script>
			
    		// Функция для отправки времени пребывания на сервер с помощью AJAX
			function sendTimeSpent(timeSpent) {
			var xhr = new XMLHttpRequest();
			xhr.open("POST", "record_time.php", true);
			xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhr.onreadystatechange = function() {
				if (xhr.readyState === 4 && xhr.status === 200) {
				console.log(xhr.responseText); // Вывести ответ от сервера в консоль (опционально)
				}
			};
			xhr.send("timeSpent=" + timeSpent);
			}

			// Записать время входа пользователя при загрузке страницы
			var entryTime = new Date().getTime();

			// Записать время выхода пользователя при закрытии страницы или навигации на другую страницу
			// window.addEventListener('beforeunload', function(event) {
			// var exitTime = new Date().getTime();
			// var timeSpent = exitTime - entryTime;
			// sendTimeSpent(timeSpent); // Отправить время пребывания на сервер
			// event.preventDefault();
			// event.returnValue = ''; // Некоторые браузеры требуют возврат значения из обработчика
			// });
			window.onbeforeunload = function() {
			var exitTime = new Date().getTime();
			var timeSpent = exitTime - entryTime;
			sendTimeSpent(timeSpent); // Отправить время пребывания на сервер
			};
 		</script>

		<footer class="site-footer">
			<div class="footer-particles-container">
				<canvas id="footer-particles"></canvas>
			</div>
			<div class="site-footer-top">
				<section class="cta section text-light">
					<div class="container-sm">
						<div class="cta-inner section-inner">
							<div class="cta-header text-center">
								<h2 class="section-title mt-0"><?php echo $footer_h2; ?></h2>
								<p class="section-paragraph"><?php echo $footer_p; ?></p>
								<div class="cta-cta">
									<a class="button button-primary button-wide-mobile" href="https://www.sheer.com/nrxstudio">Перейти</a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<div class="site-footer-bottom">
				<div class="container">
					<div class="site-footer-inner">
						<div class="brand footer-brand">
							<a href="#">
								<img src="src/images/124-1245916_a-definitive-ranking-of-emoji-that-can-be-used-to-represent-banana.svg" width="50px" alt="Venus logo">
							</a>
						</div>
						<!-- <ul class="footer-links list-reset">
							<li>
								<a href="#">Contact</a>
							</li>
							<li>
								<a href="#">About us</a>
							</li>
							<li>
								<a href="#">FAQ's</a>
							</li>
							<li>
								<a href="#">Support</a>
							</li>
						</ul> -->
						<!-- <ul class="footer-social-links list-reset">
							<li>
								<a href="#">
									<span class="screen-reader-text">Facebook</span>
									<svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z" fill="#FFF"/>
									</svg>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="screen-reader-text">Twitter</span>
									<svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
										<path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z" fill="#FFF"/>
									</svg>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="screen-reader-text">Google</span>
									<svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z" fill="#FFF"/>
									</svg>
								</a>
							</li>
						</ul> -->
						<div class="footer-copyright">
							<div>&copy; 2023 NECHIPORENKO, all rights reserved </div>
							
						</div>
					</div>
				</div>
			</div>
        </footer>
    </div>

    <script src="dist/js/main.min.js"></script>
</body>
</html>
