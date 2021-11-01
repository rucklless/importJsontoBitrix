<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

\Bitrix\Main\UI\Extension::load("ui.vue");
?>
<!DOCTYPE html>
	<html lang="ru">
	<head>
		<title><?$APPLICATION->ShowTitle();?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
		<script
				src="https://code.jquery.com/jquery-3.5.1.min.js"
				integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
				crossorigin="anonymous"></script>
		<link rel="stylesheet" href="/local/templates/tiggra/assets/mobile-menu/mmenu.css">
		<link rel="stylesheet" href="/local/templates/tiggra/assets/owl/owl.carousel.css">
		<script src="https://use.fontawesome.com/f204cde431.js"></script>
		<?$APPLICATION->ShowHead();?>
	</head>
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
		<div id="page">
			<div class="header">
				<div class="container-fix">
					<div class="header-top">
						<div class="container">
							<div class="row wrapper">
								<div class="d-lg-none">
									<a href="#mmenu" class="mmenu-buttom"><span></span></a>
								</div>
								<div class="phone col">
									<?$APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"",
										Array(
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "inc",
											"EDIT_TEMPLATE" => "",
											"PATH" => "/includes/phone-top.php"
										)
									);?>
								</div>
								<div class="work col fix-none">
									<?$APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"",
										Array(
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "inc",
											"EDIT_TEMPLATE" => "",
											"PATH" => "/includes/timework-top.php"
										)
									);?>
								</div>
								<div class="justify-content-end">
									<ul class="second-menu">
										<li><a href="/basket">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M14.0315 13.1643C14.355 12.9056 14.8269 12.958 15.0857 13.2815C15.3444 13.6049 15.292 14.0769 14.9685 14.3357L12.4746 16.3308C12.3459 16.4361 12.1816 16.4994 12.0025 16.5L12.0001 16.5L11.9937 16.5C11.8177 16.4985 11.6561 16.4364 11.5288 16.3335L9.03151 14.3357C8.70806 14.0769 8.65562 13.6049 8.91438 13.2815C9.17313 12.958 9.6451 12.9056 9.96855 13.1643L11.2501 14.1896V10.75C11.2501 10.3358 11.5858 10 12.0001 10C12.4143 10 12.7501 10.3358 12.7501 10.75V14.1895L14.0315 13.1643Z"/>
													<path fill-rule="evenodd" clip-rule="evenodd" d="M7 2.25C5.48122 2.25 4.25 3.48122 4.25 5V19C4.25 20.5188 5.48122 21.75 7 21.75H17C18.5188 21.75 19.75 20.5188 19.75 19V8.1979C19.75 7.83178 19.6352 7.47488 19.4217 7.17745L16.4085 2.97955C16.0798 2.52157 15.5506 2.25 14.9868 2.25H7ZM5.75 5C5.75 4.30964 6.30964 3.75 7 3.75H14.25V8.14705C14.25 8.56126 14.5858 8.89705 15 8.89705H18.25V19C18.25 19.6904 17.6904 20.25 17 20.25H7C6.30964 20.25 5.75 19.6904 5.75 19V5Z"/>
												</svg>

												<!--i class="fa fa-list-alt"></i-->
											</a></li>
										<li><a href="/kp">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M19.1477 5.25H5.33514L4.15497 3.1346C4.0225 2.89715 3.7719 2.75 3.5 2.75H2C1.58579 2.75 1.25 3.08579 1.25 3.5C1.25 3.91421 1.58579 4.25 2 4.25H3.0596L4.22429 6.33765L6.91037 12.2809L6.91312 12.2869L7.14971 12.8104L4.45287 15.687C4.25895 15.8939 4.19825 16.1924 4.29599 16.4585C4.39372 16.7247 4.63317 16.913 4.91486 16.9452L7.37299 17.2261C10.4477 17.5775 13.5524 17.5775 16.627 17.2261L19.0852 16.9452C19.4967 16.8981 19.7922 16.5264 19.7452 16.1148C19.6981 15.7033 19.3264 15.4078 18.9149 15.4549L16.4567 15.7358C13.4952 16.0742 10.5048 16.0742 7.54331 15.7358L6.56779 15.6243L8.54717 13.513C8.56632 13.4925 8.5841 13.4713 8.60052 13.4494L9.35334 13.5474C10.4083 13.6847 11.4746 13.7116 12.5351 13.6277C15.0086 13.4321 17.301 12.2551 18.9015 10.3591L19.4795 9.67425C19.499 9.65125 19.517 9.62711 19.5335 9.60194L20.6109 7.96009C21.3745 6.79633 20.5397 5.25 19.1477 5.25ZM8.65627 11.944C8.49086 11.9225 8.34823 11.8175 8.27858 11.666L8.27725 11.6631L6.05674 6.75H19.1477C19.3466 6.75 19.4658 6.9709 19.3567 7.13716L18.3042 8.74123L17.7552 9.39152C16.4132 10.9814 14.4909 11.9683 12.4169 12.1324C11.4603 12.208 10.4984 12.1837 9.54688 12.0599L8.65627 11.944Z"/>
													<path d="M6.5 18.5C5.67157 18.5 5 19.1716 5 20C5 20.8284 5.67157 21.5 6.5 21.5C7.32843 21.5 8 20.8284 8 20C8 19.1716 7.32843 18.5 6.5 18.5Z" />
													<path d="M16 20C16 19.1716 16.6716 18.5 17.5 18.5C18.3284 18.5 19 19.1716 19 20C19 20.8284 18.3284 21.5 17.5 21.5C16.6716 21.5 16 20.8284 16 20Z" />
												</svg>


												<!--i class="fa fa-shopping-cart"></i-->
											</a></li>
										<li class="d-none d-lg-inline fix-none"><a href="#">О компании</a></li>
										<li class="d-none d-lg-inline"><a href="#">Контакты</a></li>
										<li class="d-none d-lg-inline"><a href="#" class="lk">Войти</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="header-middle">
						<div class="container">
							<div class="row wrapper">
								<div class="logo"><a href="/">
										<picture><source srcset="/local/templates/tiggra/img/logo.webp" type="image/webp"><img src="/local/templates/tiggra/img/logo.png" alt="TiGRRA"></picture></a>
								</div>
								<div class="slogan d-none d-md-flex  fix-none">
									<?$APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"",
										Array(
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "inc",
											"EDIT_TEMPLATE" => "",
											"PATH" => "/includes/slogan.php"
										)
									);?>
								</div>
								<div class="search form-placeholder">
									<form action="#" >
										<div class="row">
											<div class="input-block col-12">
												<div class="input-wrap">
													<input id="topSearchString" name="topSearchString" type="text" class="search-string form-control input" placeholder=" ">
													<div class="cut"></div>
													<label for="topSearchString" class="placeholder">Я хочу заказать</label>
												</div>
												<div class="button-wrap">
													<button class="">Найти</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="header-bottom">
						<div class="container">
							<div class="catalog-menu">
								<div class="row">
									<div class="col-12 col-lg-10">
										<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"main-menu-mm",
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "4",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "main",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "main-menu-mm"
	),
	false
);?>
									</div>
									<div class="col-2 d-none d-lg-flex social fix-none">
										<ul>
											<li><a href="/">
													<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="vk" class="svg-inline--fa fa-vk fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M545 117.7c3.7-12.5 0-21.7-17.8-21.7h-58.9c-15 0-21.9 7.9-25.6 16.7 0 0-30 73.1-72.4 120.5-13.7 13.7-20 18.1-27.5 18.1-3.7 0-9.4-4.4-9.4-16.9V117.7c0-15-4.2-21.7-16.6-21.7h-92.6c-9.4 0-15 7-15 13.5 0 14.2 21.2 17.5 23.4 57.5v86.8c0 19-3.4 22.5-10.9 22.5-20 0-68.6-73.4-97.4-157.4-5.8-16.3-11.5-22.9-26.6-22.9H38.8c-16.8 0-20.2 7.9-20.2 16.7 0 15.6 20 93.1 93.1 195.5C160.4 378.1 229 416 291.4 416c37.5 0 42.1-8.4 42.1-22.9 0-66.8-3.4-73.1 15.4-73.1 8.7 0 23.7 4.4 58.7 38.1 40 40 46.6 57.9 69 57.9h58.9c16.8 0 25.3-8.4 20.4-25-11.2-34.9-86.9-106.7-90.3-111.5-8.7-11.2-6.2-16.2 0-26.2.1-.1 72-101.3 79.4-135.6z"></path></svg>
												</a></li>
											<li><a href="/">
													<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
												</a></li>
											<li><a href="/">
													<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" class="svg-inline--fa fa-twitter fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
												</a></li>
											<li><a href="/">
													<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
												</a></li>
										</ul>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="content">
				<?if($APPLICATION->GetCurPage() != "/"):?>
					<div class="container">
						<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "template", Array(
							),
								false
							);?>

						<?$APPLICATION->AddBufferContent('ShowCondTitle');?>

				<?endif;?>