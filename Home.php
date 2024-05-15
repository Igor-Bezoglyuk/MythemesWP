<?php
/*
Template Name: Home
*/
?>
<!--Код РнР для подключения шаблона к Wordpress, его можно подключить к как шаблон страницы  через админку.
Заходите создаёте страницу, и там появится справа список шаблонов.Если вы хотите сделать этот шаблон главной страницей то зайдите в (настройки/Чтение/Ставим галочку статическая страница и выбираем главную страницу шаблон Home-->
<? get_header();/*Подключает шапку, файл header.php*/?>

<section id="Content" style="background: url('<? the_field('Title_block_Background'); ?>') no-repeat 100% 15%/68%;">
      <style>
         #Content::before {
         content: "";
         background: -webkit-gradient(linear, left top, right top, from(<? the_field('Title_block_gradient1'); ?>) , color-stop(<? the_field('Title_block_gradient2'); ?>) , to(rgba(90, 45, 26, 0)));
         background: -o-linear-gradient(left, <? the_field('Title_block_gradient1'); ?> , <? the_field('Title_block_gradient2'); ?> , rgba(90, 45, 26, 0));
         background: linear-gradient(90deg, <? the_field('Title_block_gradient1'); ?> , <? the_field('Title_block_gradient2'); ?> , rgba(90, 45, 26, 0));
      }
      </style>
      <div class="container-fluid">
         <div class="Content-block row justify-content-center align-items-center">
            <div class="Content-blocks col-3">
               <div class="Content-blocks-info">
                  <h3 class="Content-info-title">
                     <? the_field('Title_block_titletext'); ?>
                  <style>
                       .Content-blocks-info h3::before {
                          content: "<? the_field('Tilte_block_podtext'); ?>";
                          position: absolute;
                          top: 0;
                          right: 50%;
                          font-family: Bad Script;
                          font-size: 3vw;
                          font-weight: 400;
                          color: #c196a5;
                          -webkit-transform: translate(55%, -115%) rotate3d(117, -64, 12, 55deg) scale(1.3);
                          transform: translate(55%, -115%) rotate3d(117, -64, 12, 55deg) scale(1.3);
                        }
                  </style>   
                  </h3>
               </div>
            </div>
            
            <div class="Content-blocks col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-6">
               <div class="Content-blocks-img">
                  <img src="<? bloginfo('template_url') ?>/assets/img/Women-profile.png" alt="Profile_img">
               </div>
            </div>
         </div>
      </div>
   </section>

   <section id="About" style="background: <? the_field('About_block_background'); ?>;">
        <div class="container  pb-5">
            <div class="About-block row justify-content-center  pb-5 ">

               <div class="About-blocks p-0 col-xxl-5 col-xl-5 col-lg-6 col-md-8 col-sm-10">
                   <div class="About-blocks-img">
                       <img src="<? the_field('About_block_img'); ?>" alt="About_img">
                       <style>
                        .About-blocks-img::before {
                           border: solid 5px <? the_field('About_block_border_img'); ?>;
                       }
                       </style>
                   </div>
               </div>

               <div class="About-blocks info-About p-5 col-xxl-5 col-xl-5 col-lg-6 col-md-8 col-sm-10">
                 <div class="About-blocks-info">
                  <h3 class="About-blocks-title"><? the_field('About_block_title'); ?></h3>
                  <p class="About-blcks-text"><? the_field('About_block_text'); ?></p>
                  <ul class="About-block-spisok">
                     <li>- Помогаю определить цель преображения;</li>
                     <li>- Формирую твой индивидуальный стиль, а не копирую шаблоны;</li>
                     <li>- Никогда не навязываю то, что тебе не близко;</li>
                     <li>- Учитываю твой образ жизни;</li>
                     <li>- Работаю как онлайн, так и офлайн;</li>
                  </ul>
                  <p class="About-blcks-text">Я помогу найти твой индивидуальный стиль, и обрести уверенность в себе.</p>
                 </div> 
               </div>
            </div>
        </div>
   </section>

   <section id="Gallery">
      <div class="container-fluid p-0">
         <div class="Gallery-block row justify-content-center m-0 pt-1 pb-1">

              <div class="Gallery-blocks col-3">
                 <div class="Galllery-blocks-img G-img-1">
                  <img class="Gallery-img-1" src=" <? the_field('Gallary_block_img_1'); ?>" alt="Gallery_img">
                 </div>
              </div>

              <div class="Gallery-blocks col-3">
               <div class="Galllery-blocks-img G-img-2">
                <img class="Gallery-img-2" src="<? the_field('Gallary_block_img_2'); ?>" alt="Gallery_img">
               </div>
            </div>

            <div class="Gallery-blocks col-3">
               <div class="Galllery-blocks-img G-img-3">
                <img class="Gallery-img-3" src="<? the_field('Gallary_block_img_3'); ?>" alt="Gallery_img">
               </div>
            </div>

            <div class="Gallery-blocks col-3">
               <div class="Galllery-blocks-img G-img-4">
                <img class="Gallery-img-4" src="<? the_field('Gallary_block_img_4'); ?>" alt="Gallery_img">
               </div>
            </div>

            <div class="Gallery-blocks col-3">
             <div class="Galllery-blocks-img G-img-5">
              <img class="Gallery-img-5" src="<? the_field('Gallary_block_img_5'); ?>" alt="Gallery_img">
             </div>
          </div>

          <div class="Gallery-blocks col-3">
             <div class="Galllery-blocks-img G-img-6">
              <img class="Gallery-img-6" src="<? the_field('Gallary_block_img_6'); ?>" alt="Gallery_img">
             </div>
          </div>

          <div class="Gallery-blocks col-3">
            <div class="Galllery-blocks-img G-img-7">
             <img class="Gallery-img-7" src="<? the_field('Gallary_block_img_7'); ?>" alt="Gallery_img">
            </div>
         </div>

         <div class="Gallery-blocks col-3">
          <div class="Galllery-blocks-img G-img-8">
           <img class="Gallery-img-8" src="<? the_field('Gallary_block_img_8'); ?>" alt="Gallery_img">
          </div>
       </div>

       <div class="Gallery-blocks col-3">
          <div class="Galllery-blocks-img G-img-9">
           <img class="Gallery-img-9" src="<? the_field('Gallary_block_img_9'); ?>" alt="Gallery_img">
          </div>
       </div>

       <div class="Gallery-blocks col-3">
         <div class="Galllery-blocks-img G-img-10">
          <img class="Gallery-img-10" src="<? the_field('Gallary_block_img_10'); ?>" alt="Gallery_img">
         </div>
      </div>

      <div class="Gallery-blocks col-3">
       <div class="Galllery-blocks-img G-img-11">
        <img class="Gallery-img-11" src="<? the_field('Gallary_block_img_11'); ?>" alt="Gallery_img">
       </div>
    </div>

    <div class="Gallery-blocks col-3">
       <div class="Galllery-blocks-img G-img-12">
        <img class="Gallery-img-12" src="<? the_field('Gallary_block_img_12'); ?>" alt="Gallery_img">
       </div>
    </div>
         </div>
      </div>

      <div class="Gallery-modal">
         <div class="Gallery-modal-window ">
            <span class="Gallery-close">⛌</span>
            <div class="Galleery-modal-img">
                
            </div>
         </div>
      </div>

      <div class="Gallery-link-block row pt-4 pb-4">
          <div class="Gallery-blocks-link">
              <a class="Gallery-link" href="https://instagram.com/your_stylist_foralloccasions?igshid=YmMyMTA2M2Y="><button class="Gallery-btn btn"><img class="Gallery-img-link-white" src="<? the_field('Gallery-img-link-white-button'); ?>" alt="gallery_link_icon"><? the_field('gallery-button-text'); ?></button></a>
          </div>
      </div>
   </section>

   <section id="Prise">
       <div class="container-fluid pt-5 pb-5">
          <h3 class="Prise-title"><? the_field('prise-title'); ?></h3>
         <div class="Prise-block row justify-content-center flex-wrap pt-5 pb-5">

            <div class="Prise-blocks col-xxl-4 col-xl-5 col-lg-6 col-md-7 col-sm-8">
               <ul class="Prise-blocks-list">
                   <li class="Prise-li-1"><? the_field('serveses_text_1'); ?><span class="Prise-serves"><? the_field('prise_1'); ?></span></li>
                   <li class="Prise-li-1"><? the_field('Serveses_Text_2'); ?><span class="Prise-serves"><? the_field('Prise_2'); ?></span></li>
                   <li class="Prise-li-2"><? the_field('Serveses_Text_3'); ?><span class="Prise-serves"><? the_field('Prise_3'); ?></span></li>
                   <li class="Prise-li-3"><? the_field('Serveses_Text_4'); ?><span class="Prise-serves"><? the_field('Prise_4'); ?></span></li>
                   <li class="Prise-li-4"><? the_field('Serveses_Text_5'); ?> <span class="Prise-serves"><? the_field('Prise_5'); ?></span></li>
                   <li class="Prise-li-5"><? the_field('Serveses_Text_6'); ?><span class="Prise-serves"><? the_field('Prise_6'); ?> <i></i></span></li>
                   <li class="Prise-li-6"><? the_field('Serveses_Text_7'); ?><span class="Prise-serves"><? the_field('Prise_7'); ?></span></li>
               </ul>
            </div>

            <div class="Prise-blocks p-0 col-xxl-4 col-xl-5 col-lg-6 col-md-7 col-sm-8" style="background: #ffebd5; border-radius:15px">
               <div class="Prise-blocks-img">
                  <img src="<? the_field('prise_block_image'); ?>" alt="About_img"> 
               </div>
            </div>

         </div>
   </section>

   <section id="Serveses">
       <div class="container-fluid pt-5 pb-5">
            <h3 class="Serveses-title mt-3 mb-5">Услуги</h3>
           <div class="Serveses-block row justify-content-center">

              <div class="Serveses-blocks  col-xxl-3 col-xl-3 col-lg-4 col-md-5 col-sm-6">
                <div class="Serveses-blocks-img">
                <img class="Serveses-img-1" src="img/Razbor_garderoba.jpg" alt="Гардероб">
                </div>
                <div class="Serveses-blocks-info">
                <h6 class="Serveses-blocks-title">Разбор гардероба</h6>
                <p class="Serveses-blocks-text">В каком случае вам нужна услуга Разбор гардероба со стилистом?</p>
                 <button class="Serveses-btn btn Open-Serveses-1" type="button">Подробнее..</button>
                </div>
              </div>

              <div class="Serveses-blocks  col-xxl-3 col-xl-3 col-lg-4 col-md-5 col-sm-6">
               <div class="Serveses-blocks-img">
               <img class="Serveses-img-2" src="img/Sbor_vesey.jpg" alt="Сбор вещей">
               </div>
               <div class="Serveses-blocks-info">
               <h6 class="Serveses-blocks-title">Сбор капсул</h6>
               <p class="Serveses-blocks-text">Что такое капсула и для чего она нужна?</p>
                <button class="Serveses-btn btn Open-Serveses-2" type="button">Подробнее..</button>
              </div>
              </div>

             <div class="Serveses-blocks  col-xxl-3 col-xl-3 col-lg-4 col-md-5 col-sm-6">
               <div class="Serveses-blocks-img">
               <img class="Serveses-img-3" src="img/konultasia_styly.jpg" alt="Консультация">
               </div>
               <div class="Serveses-blocks-info">
               <h6 class="Serveses-blocks-title">Консультация по стилю</h6>
               <p class="Serveses-blocks-text">Зачем нужна консультация по стилю?</p>
                <button class="Serveses-btn btn Open-Serveses-3" type="button">Подробнее..</button>
             </div>
             </div>

             <div class="Serveses-blocks  col-xxl-3 col-xl-3 col-lg-4 col-md-5 col-sm-6">
               <div class="Serveses-blocks-img">
               <img class="Serveses-img-4" src="img/online-shopping.jpg" alt="Шоппинг онлайн">
               </div>
               <div class="Serveses-blocks-info">
               <h6 class="Serveses-blocks-title">Шопинг онлайн</h6>
               <p class="Serveses-blocks-text">Что это за услуга?</p>
                <button class="Serveses-btn btn Open-Serveses-4" type="button">Подробнее..</button>
               </div>
             </div>

             <div class="Serveses-blocks  col-xxl-3 col-xl-3 col-lg-4 col-md-5 col-sm-6">
               <div class="Serveses-blocks-img">
              <img class="Serveses-img-5" src="img/shopping.jpg" alt="Шоппинг">
              </div>
              <div class="Serveses-blocks-info">
              <h6 class="Serveses-blocks-title">Шопинг офлайн </h6>
              <p class="Serveses-blocks-text">Что это за услуга?</p>
               <button class="Serveses-btn btn Open-Serveses-5" type="button">Подробнее..</button>
             </div>
            </div>

            <div class="Serveses-blocks  col-xxl-3 col-xl-3 col-lg-4 col-md-5 col-sm-6">
              <div class="Serveses-blocks-img">
              <img class="Serveses-img-6" src="img/Style_book.jpg" alt="Style Book">
              </div>
              <div class="Serveses-blocks-info">
              <h6 class="Serveses-blocks-title">Составление Style Book’а</h6>
              <p class="Serveses-blocks-text">Что такое Style Book?</p>
               <button class="Serveses-btn btn Open-Serveses-6" type="button">Подробнее..</button>
              </div>
            </div>

           </div>

           <div class="Serveses-modal row">
               <div class="Serveses-window col-xxl-5 col-xl-6 col-lg-7 col-md-9 col-sm-10">
                   <div class="Serveses-window-block pt-3 pb-3 row justify-content-between align-items-center">
                     <div class="Serveses-modal-blocks col-2">
                        <div class="Serveses-modal-blocks-img">
                           <img src="img/L.png" alt="Serrveses_modal_img">
                        </div>
                      </div>
                      
                      <div class="Serveses-modal-blocks-close ">
                        <span class="Close-Modal">⛌</span>
                      </div>
                   </div>

                   <div class="Serveses-modal-info row">
                     
                   </div>
               </div>
           </div>
       </div>
   </section>

   <section id="Contacts">
        <div class="conteiner pt-5 pb-5">
           <div class="Contacts-block row justify-content-center pt-5 pb-5">
               <div class="Contacts-blocks-form col-xxl-4 col-xl-5 col-lg-6 col-md-7 col-sm-8">
                  <form class="Contacts-form" name="form" method="POST" action="ph/Mail.php">
                      <input class="Contacts-input" type="text" name="text" required placeholder="Ф.И.О">
                      <input class="Contacts-input" type="email" name="email"  placeholder="Ваше почта:">
                      <input class="Contacts-input" type="number" name="phone"required placeholder="Ваш телефон:">
                      <textarea class="Contacts-textarea" name="message" placeholder="Сообщение:"></textarea>
                      <button class="Contacts-btn btn" name="Knopka" type="submit">Отправить</button>
                  </form>
               </div>
               <div class="Contacts-blocks-information col-xxl-3 col-xl-4 col-lg-5 col-md-5 col-sm-8 ">
                  <div class="Contacts-blocks-info">
                     <h3 class="Contacts-blocks-info-title">Контакты</h3>
                     <p class="Contacts-blocks-info-text">Связь со мной</p>
                  </div>
                  <div class="Contacts-blocks-info-flex">
                     <div class="Contacts-infos">
                        <img src="img/Phone-icon.png" alt="Adres">
                        <a href="tel:+79147253940">8-914-725-39-40</a>
                     </div>
                     <div class="Contacts-infos">
                        <a class="Contants-link-soc" href="https://t.me/+79147253940"><img src="img/icon-top-telegram.png" alt="Телеграм"></a>
                        <a class="Contants-link-soc" href="https://wa.me/+79147253940"><img src="img/icon-top-whatsapp.png" alt="Ватсап"></a>
                        <a class="Contants-link-soc" href="https://instagram.com/your_stylist_foralloccasions?igshid=YmMyMTA2M2Y="><img src="img/Icon-instagram-white.png" alt="Ватсап"></a>
                     </div>
                  </div>
               </div>
           </div>
        </div>
   </section>
   
   <? get_footer();/*Подключает подвал, файл fotter.php*/?>
