<!DOCTYPE html>
<html>
<head>
   <meta charset="<? bloginfo('charset') ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Stylist Anna Lekhmus</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link  rel="shortcut icon" type="image/png" href="<? bloginfo('template_url') ?>/assets/img/Icon-site-style.png">
   <?php wp_head(); ?>
</head>
<body>

   <header>
      <div class="Header-top">
      <div class="container ps-0 pe-0">
         <div class="Header-top-block row justify-content-between align-items-center text-center">
            <div class="Header-top-blocks col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4">
               <a class="Header-top-phone" href="tel:<? the_field('Phone_number_Tel'); ?>"><? the_field('phone-number'); ?></a>
            </div>

            <div class="Header-top-blocks-row col-3">
               <div class="Header-top-blocks-info">
                  <a class="Header-top-Soc-links" href="https://t.me/+79147253940"><img src="<? the_field('Header_top_icon_telegram'); ?>" alt=""></a>
                  <a class="Header-top-Soc-links" href="https://wa.me/+79147253940"><img src="<? the_field('Header_top_icon_watsapp'); ?>" alt=""></a>
                  <a class="Header-top-Soc-links" href="https://instagram.com/your_stylist_foralloccasions?igshid=YmMyMTA2M2Y="><img src="<? the_field('Header_top_icon_instagram'); ?>" alt=""></a>
               </div>
            </div>
         </div>
      </div>
      </div>

      <div class="container-fluid">
         <nav class="Header-block row justify-content-between align-items-center">

            <div class="Header-blocks col-3">
               <div class="Header-blocks-img">
                  <? the_custom_logo() ?> <!--Добавляет Логотип через админку-->
               </div>
            </div>

            <div class="Header-blocks Header-blocks-hidden col-xxl-5 col-xl-6 col-lg-7 col-md-8 col-sm-9">
               <? //Функция подключения меню созданого в админке
                 wp_nav_menu( [
                  'theme_location'  => 'Menu', // пишем название меню которое вы назвали в файле function.php register_nav_menu( 'Menu', 'Меню' );
                  'menu'            => '',
                  'container'       => 'null',//контейнер пустой или если хотите создайте  прописав тег nav или  div э то когда у вас в коде меню без контейнера
                  'menu_class'      => 'Header-Menu',// Пишем класс вашего меню который вы ему задавали в теге ul стили
                  'menu_id'         => '', //Айдишник меню иногда задают  на него стили 
               ] );
               ?>
               <!--<ul class="Header-Menu">
                  <li class="Menu-li"><a class="Menu-link" href="#Content">Главная</a></li>
                  <li class="Menu-li"><a class="Menu-link" href="#About">Обо мне</a></li>
                  <li class="Menu-li"><a class="Menu-link" href="#Prise">Прайс</a></li>
                  <li class="Menu-li"><a class="Menu-link" href="#Serveses">Услуги</a></li>
                  <li class="Menu-li"><a class="Menu-link" href="#Contacts">Контакты</a></li>
               </ul>-->
            </div>
            
            <div class="Header-blocks-open col-3">
               <span class="Open">☰</span>
            </div>

         </nav>
         
         <div id="Header-Phone">
           <div class="container-fluid header-phone-color">
           <div class="header-phone-block row justify-content-between align-items-center ps-0">    
             <div class="header-phone-blocks col-2">
               <div class="Header-phone-blocks-img">
                 <? the_custom_logo() ?>
               </div>
             </div>
             
             <div class="header-phone-blocks-close ">
               <span class="Close">⛌</span>
             </div>
           </div>
         </div>

           <div class="header-phone-info row flex-column align-content-end text-end">
            <div class="Header-phone-blocks col-5">
              <ul class="Phone-menu">
               <li><a href="#Content">Главная</a></li>
               <li><a href="#About">Обо мне</a></li>
               <li><a href="#Prise">Прайс</a></li>
               <li><a href="#Serveses">Услуги</a></li>
               <li><a href="#Contacts">Контакты</a></li>
              </ul>
            </div>

              <div class="Header-phone-blocks col-5 mt-5">
               <div class="Header-phone-blocks-info">
                  <a class="Header-phone-nomber" href="tel:<? the_field('headerphone_phone-number_tel'); ?>"><? the_field('headerphone_phone-number'); ?></a>
               </div>
               <div class="Header-phone-blocks-soc-links">
                  <a class="Header-phone-Soc-links" href="https://t.me/+79147253940"><img src="<? the_field('headerphone_icon_telegram'); ?>" alt=""></a>
                  <a class="Header-phone-Soc-links" href="https://wa.me/+79147253940"><img src="<? the_field('headerphone_icon_whatsapp'); ?>" alt=""></a>
                  <a class="Header-phone-Soc-links" href="https://instagram.com/your_stylist_foralloccasions?igshid=YmMyMTA2M2Y="><img src="<? the_field('headerphone_icon_instagram'); ?>" alt=""></a>
               </div>
              </div>

           </div>
         </div>

      </div>
   </header>
