<!-- Сообщаем браузеру как стоит обрабатывать эту страницу -->
<!DOCTYPE html>
<!-- Оболочка документа, указываем язык содержимого -->
<html lang="ru">
	<!-- Заголовок страницы, контейнер для других важных данных (не отображается) -->
	<head>
		<!-- Заголовок страницы в браузере -->
		<title>AviVideo&PhotoV2</title>
		<!-- Подключаем CSS -->
		<link href="css\bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css" />
		<!-- Кодировка страницы -->
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
		<!-- подключаем js -->
		<!-- <script src="js/bootstrap.bundle.min.js"></script> -->
		<!-- <script> scr="js/modalvideo.js"</script> -->
		<!-- <style>
			html { overflow:  hidden; }
		</style> -->
	</head>
<!-- Отображаемое тело страницы -->
	<body>

		<header class="header_border sticky-top"> 		
			<!-- шапка -->	
			<div class="header-top header container-fluid">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<nav class="col-sm-8 col-md-6 col-lg-4 col-xl-3 col-xll-2 d-flex justify-content-between">
							<a href="#" class="d-flex justify-content-center align-items-center" >

									<svg class="arrow-svg" width="21" height="21" fill="currentColor" viewBox="0 0 30 30.000001">
										<path d="M 13.496094 2.597656 C 10.730469 2.804688 8.210938 3.941406 6.230469 5.875 C 3.625 8.414062 2.375 12.011719 2.839844 15.625 C 3.414062 20.140625 6.601562 23.902344 10.976562 25.234375 C 14.359375 26.265625 18.125 25.652344 20.992188 23.613281 C 24.515625 21.101562 26.347656 16.9375 25.804688 12.675781 C 25.230469 8.15625 22.042969 4.394531 17.667969 3.0625 C 16.304688 2.660156 14.914062 2.503906 13.496094 2.601562 Z M 14.378906 9.773438 C 14.96875 9.832031 15.265625 9.925781 15.398438 10.097656 C 15.433594 10.144531 15.488281 10.261719 15.523438 10.359375 C 15.589844 10.5625 15.59375 10.792969 15.550781 12.527344 C 15.523438 13.609375 15.539062 13.945312 15.628906 14.183594 C 15.726562 14.460938 15.960938 14.585938 16.164062 14.480469 C 16.347656 14.382812 16.777344 13.914062 17.058594 13.492188 C 17.707031 12.53125 18.101562 11.789062 18.574219 10.640625 C 18.671875 10.414062 18.800781 10.261719 18.933594 10.226562 C 18.984375 10.210938 19.742188 10.199219 20.667969 10.195312 L 22.308594 10.191406 L 22.449219 10.25 C 22.632812 10.304688 22.714844 10.429688 22.695312 10.621094 C 22.695312 10.980469 22.320312 11.722656 21.675781 12.625 C 21.585938 12.75 21.253906 13.195312 20.933594 13.613281 C 20.230469 14.535156 20.078125 14.75 19.972656 14.976562 C 19.835938 15.257812 19.871094 15.492188 20.082031 15.765625 C 20.140625 15.84375 20.453125 16.15625 20.769531 16.460938 C 21.65625 17.3125 22.058594 17.757812 22.386719 18.246094 C 22.621094 18.601562 22.714844 18.859375 22.675781 19.085938 C 22.65625 19.207031 22.535156 19.355469 22.394531 19.425781 C 22.230469 19.511719 21.976562 19.527344 20.582031 19.546875 L 19.261719 19.5625 L 19.046875 19.492188 C 18.503906 19.3125 18.140625 19.007812 17.316406 18.054688 C 16.859375 17.527344 16.519531 17.265625 16.285156 17.265625 C 16.070312 17.265625 15.789062 17.550781 15.679688 17.910156 C 15.597656 18.148438 15.570312 18.335938 15.542969 18.75 C 15.515625 19.246094 15.457031 19.355469 15.15625 19.480469 C 15.046875 19.53125 13.683594 19.546875 13.324219 19.507812 C 12.601562 19.429688 11.933594 19.199219 11.269531 18.8125 C 10.304688 18.25 9.714844 17.742188 9.082031 16.9375 C 7.984375 15.53125 7.234375 14.335938 6.324219 12.535156 C 5.976562 11.832031 5.558594 10.925781 5.492188 10.707031 C 5.425781 10.484375 5.519531 10.300781 5.738281 10.230469 C 5.8125 10.207031 6.234375 10.195312 7.191406 10.179688 L 8.539062 10.167969 L 8.695312 10.226562 C 8.941406 10.320312 9.042969 10.445312 9.214844 10.851562 C 9.359375 11.195312 10.136719 12.753906 10.378906 13.191406 C 10.628906 13.628906 10.890625 14 11.121094 14.214844 C 11.402344 14.492188 11.527344 14.558594 11.726562 14.542969 C 11.894531 14.527344 11.9375 14.488281 12.042969 14.261719 C 12.296875 13.714844 12.335938 11.867188 12.109375 11.140625 C 11.980469 10.726562 11.785156 10.570312 11.246094 10.453125 C 11.152344 10.433594 11.152344 10.398438 11.238281 10.273438 C 11.445312 9.976562 11.816406 9.832031 12.523438 9.773438 C 12.910156 9.742188 14.058594 9.738281 14.375 9.773438 Z M 14.378906 9.773438 ">
									</svg> 

							</a>
							<a href="#" class="d-flex justify-content-center align-items-center">
								
									<svg class="arrow-svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
										<path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
									</svg>
								
							</a>
							<a href="#" class="d-flex justify-content-center align-items-center">
								
									<svg class="arrow-svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
										<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
									</svg>
								
							</a>
							<a href="#" class="d-flex justify-content-center align-items-center">
								
									<svg class="arrow-svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
										<path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
									</svg>
								
							</a>

						</nav>
					</div>
				</div>
			</div>
			
			<nav class="navbar navbar-expand-md navbar-light" style="background-color: #FFFFFF;">
				<div class="container container-md-fluid">
					<a href="#" class="navbar-brand d-flex align-items-center col col-xll-4 col-xl-4 col-lg-5 col-md-6 col-sm-10 col-xs-10">
						<img class="w-100" src="img\шапка.jpg" alt="птица">
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
						aria-controls="navbarContent" aria-expanded="false">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarContent">
						<ul class="navbar-nav text-center">
							<li class="nav-item active" aria-current="page">
								<a href="#" class="h2 nav-link-custom border-button1">
									О себе
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="h2 nav-link-custom border-button1">
									Портфолио
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="h2 nav-link-custom border-button1">
									Отзывы
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="h2 nav-link-custom border-button1">
									Цены
								</a>
							</li>
						</ul>
					</div>
				</div>
				
			</nav>

		</header>
	
	<main>
<!-- карусель -->
		<div class="carousel slide" id="carouselExampleControls" data-bs-ride="carousel" >
			
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="img\1642637697_56-phonoteka-org-p-fon-gori-65гора1.jpg" alt="">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img\babd0a70c6b6118c75bbc443e23fe05dгора2.jpg" alt="">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img\1650916784_40-vsegda-pomnim-com-p-krasivie-gori-mira-foto-44гора3.jpg" alt="">
				</div> 
				
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Предыдущий</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Следующий</span>
			</button>
			
		</div>

		<div class="container">
			<div class="row">
				<div class="d-flex justify-content-center align-items-center">
					<h1 class="h1 my-5 brandtexth1">
						Занимаюсь съёмкой видеоклипов в Новосибирске больше 10 лет
					</h1>
				</div>
<!-- О себе	-->
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6">
					<img class="w-100" src="img\Маша осень (239).JPG" alt="">
				</div>
				
				<div class="col-xl-6 col-lg-6">
					<h2 class="my-3 d-flex justify-content-center align-items-center">
						О себе
					</h2>

					<h4 class="d-flex justify-content-center align-items-center">
						Под гипертекстом ("hypertext") понимаются ссылки, которые 
						соединяют веб-страницы друг с другом либо в пределах одного 
						веб-сайта, либо между веб-сайтами. Ссылки являются фундаментальным 
						аспектом Веба. Загружая контент в Интернет и связывая его со страницами, 
						созданными другими людьми, 
						вы становитесь активным участником Всемирной паутины.	
					</h4>															
				</div>

				
			</div>	
			
		</div>
<!-- Портфолио-->	
<div class="background_video">
	<div class="container-fluid">
		<div>
			<h2 class="mt-5 d-flex justify-content-center align-items-center">
				Портфолио
			</h2>
		</div>
	</div>
			
			<div>
				<div class="row">
					<div>
						<h3 class="my-3 d-flex justify-content-center align-items-center">
							Семейная история 
						</h3>
					</div>			
				</div>	


				
				<div class="row d-flex col-xxl-12 portfolio-Shooting_events-flex_video-background">
					<div class="my-3 col-xxl-4 col-xl-4 col-lg-2 portfolio-Shooting_events-flex_video">
						<div class="portfolio-Shooting_events-video" data-src="https://www.youtube.com/embed/6jyjrOncLd4?autoplay=1"> 
							 <!-- видео_Shooting_events_1 -->
						</div>
					</div>
					<div class="my-3 col-xxl-4 col-xl-4 col-lg-2 portfolio-Shooting_events-flex_video">
						<div class="portfolio-Shooting_events-video" data-src="https://www.youtube.com/embed/6jyjrOncLd4?autoplay=1"> 
							<!-- видео_Shooting_events_1 -->
						</div>
					</div>
				</div>
				
			</div>	
			<div>
				<div class="row">
					<div>
						<h3 class="my-3 d-flex justify-content-center align-items-center">
							Выписки и клипы 
						</h3>
					</div>			
				</div>	


				
				<div class="row d-flex col-xxl-12 portfolio-Shooting_events-flex_video-background">
					<div class="my-3 col-xxl-4 col-xl-4 col-lg-2 portfolio-Shooting_events-flex_video">
						<div class="portfolio-Shooting_events-video" data-src="https://www.youtube.com/embed/6jyjrOncLd4?autoplay=1"> 
							<!-- видео_Shooting_events_1 -->
						</div>
					</div>
					<div class="my-3 col-xxl-4 col-xl-4 col-lg-2 portfolio-Shooting_events-flex_video">
						<div class="portfolio-Shooting_events-video" data-src="https://www.youtube.com/embed/6jyjrOncLd4?autoplay=1"> 
							<!-- видео_Shooting_events_1 -->
						</div>
					</div>
				</div>
				
			</div>			 

</div>	

<!-- отзывы -->
				<div class="container">
					<h2 class="my-5 d-flex justify-content-center align-items-center">
						Отзывы
					</h2>
				</div>

				<div class="container">
					<div class="row d-flex justify-content-center">
								<img src="img\Yura.jpg" alt="Юра-Отзыв" class="Feedback_row mb-3 w-50">
							<div class="col-md-12 col-lg-8">
								<h3 class="h3">
									Юрий Ватолин
								</h3>
								<h4 class="h4">
									Музыкант, автор песен, проект "Lo.Krain".
								</h4>
								<p class="h6">
									В этом году мне очень повезло и я выиграл съемку клипа у Маши! В итоге это лето прошло в работе над клипом. 
									За что я ей очень благодарен, так как по условиям должно было быть всего два часа съёмок и само обсуждение идеи. 
									Маша отнеслась к этому очень ответственно и выделила больше времени на все это, чтобы сделать серьезную работу. 
									Машу я знаю давно и поэтому могу оценить прогресс, которого она добилась в своей работе. Я увидел как профессионально она подходит к съемкам. 
									От проработки идеи и написания раскадровки, до поиска локаций и продумывания освещения. 
									Также монтаж клипа был на ней и после просмотра исходников, я убедился, что она хорошо умеет находить лучшие дубли и здорово чувствует музыку! Маша спасибо!
									
								</p>
							</div>	
					</div>
					
				    <div class="row d-flex my-5 justify-content-center">
									<img src="img\Maxim_B.jpg" alt="Юра-Отзыв" class="Feedback_row mb-3 w-50 col-4">
								<div class="col-md-12 col-lg-8">
									<h3 class="h3">
										Максим Бубновский
									</h3>
									<h4 class="h4">
										Президент НКО Ротаракт клуб.
									</h4>
									<p class="h6">
										С Машей я знаком давно, и не устаю быть ей благодарным за её профессиональные навыки! 
										Видел многие её фотоотчёты с разных мероприятий, они потрясающие. 
										Первое сделанное видео я лицезрел аж в 2015 году! А это стаж!
										После этого Маша помогала мне в видеомонтаже и фотоотчётах с крупных благотворительных мероприятий городского уровня. 
										По запросу в видео было передано то настроение, какое нужно. Возможность диктора, который говорит на фоне видео, тоже помню, неожиданно порадовала меня! 
										Видео было сделано в срок, видео качественное, кто смотрел его после мероприятия, все были довольны! Цену за работу Маша не загибает. 
										Объективно, профессионализм стоит денег, но не космических - в этом, я считаю, золотая середина соблюдена. 
										Ещё раз поблагодарю и при случае обязательно обращусь снова!
									</p>
								</div>	
						</div>						
				</div>	
		
<section class="for-video pt-5 text-center">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-6 mb-4">
				<!-- ссылка превью https://img.youtube.com/vi/идентификатор/sddefault.jpg -->
				<a class="video-btn" href="#" data-bs-toggle="modal" data-bs-target="#video-modal" data-video="6jyjrOncLd4">
					<img src="img\sddefault-prev_promo.jpg" class="w-100" alt="pic">
				</a>
			</div>
		</div>
	</div>
</section>

<div class="modal fade" id="video-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="ratio ratio-16x9">
                <div id="player"></div>
            </div>
        </div>
    </div>
</div>


<!-- <script>
	var tag = document.createElement('script');

	tag.src = "https://www.youtube.com/iframe_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

	var player;
	
	$('#video-modal').on('shown.bs.modal', function (event) {
	

		let button = $(event.relatedTarget),
			video = button.data('video');

		console.log(button);

		player = new YT.Player('player', {
			videoI: 'M7lc1UVf-VE', 
			events: {
				'onReady': onPlayerReady,
			}
		});
	})

	function onPlayerReady(event) {
		event.targget.playVideo();
	}

</script> -->



<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/app.js"></script>
<!-- <script>
	body.onload(page.refresh)
</script> -->

</main>		
</body>

</html>
 