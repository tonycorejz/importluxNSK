<?php require "db.php"; $material = R::findOne('materials', 'id = 1'); require "header.php";?>
  <body>
    <nav id="navigation" class="navbar navbar-expand-lg fixed-top navbar-light">
      <div class="container d-flex flex-column flex-md-row flex-nowrap">
        <a id="logo" class="navbar-brand" href="#"><img src="./img/logo.png"></a>
        <div class="container d-flex flex-row-reverse justify-content-between">
            
            <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="d-flex align-items-center h_cont">
              <img class="mr-2" src="./img/phone-call-header.png" alt="">
              <div class="d-flex flex-column justify-content-center"><p class="mb-0"><a href="tel:+79293045553">8 929 304-55-53</a></p><p class="text-nowrap mb-0"><a class="text-nowrap" href="tel:+79994522090" target="_blank">8 999 452-20-90</a></p></div>
            </div>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="nav justify-content-left">
              <li class="nav-item">
                <a class="nav-link active scroll-to pl-0" href="#about_us">О нас</a>
              </li>
              <li class="nav-item">
                <a class="nav-link scroll-to" href="#partners">Партнерам</a>
              </li>
              <li class="nav-item">
                <a class="nav-link scroll-to" href="#stuffs">Товары</a>
              </li>
              <li class="nav-item">
                <a class="nav-link scroll-to" href="#contacts">Контакты</a>
              </li>
            </ul>
            </div>
        </div>
      </div>
    </nav>
    <section class="section_1 align-items-center">
      <div class="container">
        <div class="row  justify-content-center justify-content-md-end">
          <div class="col-12 col-md-11 d-flex flex-column flex-md-row align-items-center col-lg-9 col-xl-7"><img src="./img/logo1.png" class="" style="width:180px;"><h1 class="display-2 text-center text-md-right">ИМПОРТ ЛЮКС НСК</h1></div>
        </div>
        <div class="row  justify-content-center justify-content-md-end">
          <div class="col-12 col-md-8 col-lg-7 d-flex flex-column align-items-center  align-items-md-end"><p class="text-center text-md-right">ЧАЙ, КОФЕ, ОРЕХИ И СУХОФРУКТЫ ИЗ ИНДИИ, ИРАНА И ДРУГИХ СТРАН С ДОСТАВКОЙ ПО НОВОСИБИРСКУ И ВСЕЙ РОССИИ</p>
            <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#price_modal">ПОЛУЧИТЬ ПРАЙС ЛИСТ</button></div>
            <div class="modal fade" style="color:black;" id="price_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle1" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Получить прайс лист</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form id="priceForm">
                      <div class="form-group">
                        <label for="name">Имя</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Имя" required>
                      </div>
                      <div class="form-group">
                        <label for="phone">Телефон</label>
                        <input type="phone" class="form-control" id="phone_2" name="phone" class="phone_inp" placeholder="+7 (999) 999-99-99" required>
                      </div>
                      <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="mail@ya.ru" required>
                      </div>
                      <div class="form-group">
                        <label for="tovar">Какой товар интересует?</label>
                        <input type="text" class="form-control" id="tovar" name="tovar" placeholder="Название товара">
                      </div>
                      <div class="form-group">
                        <label for="v_tovar">Какой объём товара?</label>
                        <input type="text" class="form-control" id="v_tovar" name="v_tovar" placeholder="Объём товара">
                      </div>
                      <div class="form-group">
                        <label for="city">Город</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="Название вашего города">
                      </div>
                      <button type="submit" id="submit_frm_2" class="btn btn-primary btn-lg">Отправить</button>
                      <label class="form-check-label" for="submit_frm_2">Нажимая на кнопку, вы даете согласие на обработку своих персональных данных и соглашаетесь с <a href="https://importluxnsk.ru/psogl/psogl.html">Пользовательским соглашением</a></a></label>
                    </form>
                </div>
              </div>
            </div>
        </div>
      </div>
      
    </section>
    <section id="about_us" class="section_2">
      <div class="container py-5">
        <div class="row d-flex flex-column justify-content-center mb-5">
          <h1>Почему выгодно с нами работать?</h1>
          <hr class="polosochka">
        </div>
        <div class="row height_100"></div>
        <div class="row justify-content-center justify-content-md-between">
          
            <div class="row-4 row-lg mb-lg-3">
              <div class="card align-items-center" style="width: 18rem;">
                <img class="card-img-top" src="./img/1-icon.png" alt="Card image cap">
                <div class="card-body text-center">
                  <h5 class="card-title">Поставки без посредников.</h5>
                  <p class="card-text">Прямые поставки из Индии, Ирана и других стран</p>
                </div>
              </div>

            </div>
            <div class="row-4 row-lg mb-lg-3">
              <div class="card align-items-center" style="width: 18rem;">
                <img class="card-img-top" src="./img/2-icon.png" alt="Card image cap">
                <div class="card-body text-center">
                  <h5 class="card-title">Лояльная система оплаты.</h5>
                  <p class="card-text">Возможность выбрать систему оплаты</p>
                </div>
              </div>
            </div>
            <div class="row-4 row-lg mb-lg-3">
              <div class="card align-items-center" style="width: 18rem;">
                <img class="card-img-top" src="./img/3-icon.png" alt="Card image cap">
                <div class="card-body text-center">
                  <h5 class="card-title">Доставка/Самовывоз.</h5>
                  <p class="card-text">Доставка/самовывоз по Новосибирску и РФ</p>
                </div>
              </div>
            </div>
            <div class="row-4 row-lg mb-lg-3">
              <div class="card align-items-center" style="width: 18rem;">
                <img class="card-img-top" src="./img/4-icon.png" alt="Card image cap">
                <div class="card-body text-center">
                  <h5 class="card-title">Разная фасовка.</h5>
                  <p class="card-text">Фасовка от 100 грамм до 50-ти килограмм</p>
                </div>
              </div>
            </div>
            <div class="row-4 row-lg mb-lg-3">
              <div class="card align-items-center" style="width: 18rem;">
                <img class="card-img-top" src="./img/5-icon.png" alt="Card image cap">
                <div class="card-body text-center">
                  <h5 class="card-title">Эксклюзивные сорта чая и кофе.</h5>
                  <p class="card-text">Эксклюзивный товар для Российского рынка</p>
                </div>
              </div>
            </div>
            <div class="row-4 row-lg mb-lg-3">
              <div class="card align-items-center" style="width: 18rem;">
                <img class="card-img-top" src="./img/6-icon.png" alt="Card image cap">
                <div class="card-body text-center">
                  <h5 class="card-title">Весь товар сертифицирован</h5>
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
          
          <div class="col-12  d-flex justify-content-center mt-2">
            <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#main_modal">УЗНАТЬ ПОДРОБНЕЕ</button>
          </div>
        </div>
      </div>
    </section>
    <section id="partners" class="section_3">
      <div class="container py-5">
        <div class="row d-flex flex-column align-items-end justify-content-end mb-4">
          <h1 class="text-right">Становитесь нашими партнерами и<br>получайте эксклюзивные скидки,<br>бонусы и выгодные предложения</h1>
          <hr class="polosochka">
        </div>
        <div class="row justify-content-between align-items-center">
          <div class="col-12 col-md-6 mb-5 mb-md-0"><img src="./img/sotr.webp" class="w-100" alt="Сотрудничество с нами"></div>
          <div class="col-12 col-md-5">
            <form id="partnersForm">
              <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Имя" required>
              </div>
              <div class="form-group">
                <label for="phone">Телефон</label>
                <input type="phone" class="form-control" id="phone" name="phone" class="phone_inp" placeholder="+7 (999) 999-99-99" required>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Ваш вопрос</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="txt" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="city">Город</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Новосибирск" required>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="Физ. Лицо" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Физ. Лицо
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="Юр. Лицо">
                <label class="form-check-label" for="exampleRadios2">
                  Юр. Лицо
                </label>
              </div>
              
              <button type="submit" id="submit_frm_1" class="btn btn-primary btn-lg">Стать партнером</button>
              <label class="form-check-label" for="submit_frm_1">Нажимая на кнопку, вы даете согласие на обработку своих персональных данных и соглашаетесь с <a href="https://importluxnsk.ru/psogl/psogl.html">Пользовательским соглашением</a></a></label>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="section_4">
      <div class="container py-5">
        <div class="row d-flex flex-column justify-content-start mb-0">
          <h1 class="text-left">Чтобы купить здесь и сейчас, нужно<br>выполнить всего 4 шага</h1>
          <hr class="polosochka">
        </div>
        <div class="row height_100"></div>
        <div class="row justify-content-between align-items-center">
          <div class="d-flex flex-column justify-content-start align-items-start">
            <div class="media">
              <img class="align-self-end mr-3" src="./img/1.png" alt="Generic placeholder image">
              <div class="media-body d-flex align-self-end">
                <h5 class="mt-0">Выбрать понравившийся товар</h5>
                </div>
            </div>
            <div class="media">
              <img class="align-self-end mr-3" src="./img/2.png" alt="Generic placeholder image">
              <div class="media-body d-flex align-self-end">
                <h5 class="mt-0">Перейти по ссылке в основной каталог</h5>
                </div>
            </div>
            <div class="media">
              <img class="align-self-end mr-3" src="./img/3.png" alt="Generic placeholder image">
              <div class="media-body d-flex align-self-end">
                <h5 class="mt-0">Оплатить товар</h5>
                </div>
            </div>
            <div class="media">
              <img class="align-self-end mr-3" src="./img/4.png" alt="Generic placeholder image">
              <div class="media-body d-flex align-self-end">
                <h5 class="mt-0">Оформить доставку</h5>
                </div>
            </div>
          </div>
          <img class="s_4_img" src="./img/sec4.webp" alt="">
        </div>
        
      </div>
    </section>
    <section id="stuffs" class="section_5">
      <div class="container py-5">
        <div class="d-flex flex-column align-items-center mb-5">
          <h1 class="text-center">Наши товары</h1>
          <hr class="polosochka">
        </div>
        <div class="row justify-content-around">
          <div class="card">
            <div class="card-img-top_my c_b_1"></div>
            <div class="card-body">
              <h5 class="card-title">Сухофрукты</h5>
              <p class="card-text"></p>
              <!-- Button trigger modal -->
                    <button type="button" class="btn mb-2 more_btn" data-toggle="modal" data-target="#fruits">
                      Подробнее
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="fruits" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Сухофрукты</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <?php echo nl2br($material->suh);?>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                            <button type="button" onclick="window.location.href = 'https://nutraj.ru/suhofrukty/';" class="btn chck_btn">Перейти на сайт</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal -->
              <a href="https://nutraj.ru/suhofrukty/" class="btn chck_btn">Перейти на сайт</a>
            </div>
          </div>
          <div class="card">
            <div class="card-img-top_my c_b_2"></div>
            <div class="card-body">
              <h5 class="card-title">Орехи</h5>
              <p class="card-text"></p>
              <!-- Button trigger modal -->
                    <button type="button" class="btn mb-2 more_btn" data-toggle="modal" data-target="#nuts">
                      Подробнее
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="nuts" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Орехи</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <?php echo nl2br($material->oreh);?>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                            <button type="button" onclick="window.location.href = 'https://nutraj.ru/orehi_i_semechki/';" class="btn chck_btn">Перейти на сайт</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal -->
              <a href="https://nutraj.ru/orehi_i_semechki/" class="btn chck_btn">Перейти на сайт</a>
            </div>
          </div>
          <div class="card">
            <div class="card-img-top_my c_b_3"></div>
            <div class="card-body">
              <h5 class="card-title">Чай и Кофе</h5>
              <p class="card-text"></p>
              <!-- Button trigger modal -->
                    <button type="button" class="btn mb-2 more_btn" data-toggle="modal" data-target="#tea_cofee">
                      Подробнее
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="tea_cofee" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Чай и Кофе</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <?php echo nl2br($material->chai);?>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                            <button type="button" onclick="window.location.href = 'https://nutraj.ru/chay_i_kofe/';" class="btn chck_btn">Перейти на сайт</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal -->
              <a href="https://nutraj.ru/chay_i_kofe/" class="btn chck_btn">Перейти на сайт</a>
            </div>
          </div>
          <div class="card">
            <div class="card-img-top_my c_b_4"></div>
            <div class="card-body">
              <h5 class="card-title">Специи</h5>
              <p class="card-text"></p>
              <!-- Button trigger modal -->
                    <button type="button" class="btn mb-2 more_btn" data-toggle="modal" data-target="#spices">
                      Подробнее
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="spices" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Специи</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <?php echo nl2br($material->specii);?>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                            <button type="button" onclick="window.location.href = 'https://nutraj.ru/specii_i_pryanosti/';" class="btn chck_btn">Перейти на сайт</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal -->
              <a href="https://nutraj.ru/specii_i_pryanosti/" class="btn chck_btn">Перейти на сайт</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="contacts" class="section_6">
      <div class="container py-5">
        <div class="d-flex flex-column align-items-end mb-5">
          <h1 class="text-right">Мы рады сотрудничеству!<br>Доставка осуществляется по всей России</h1>
          <hr class="polosochka">
        </div>
        <div class="row flex-column flex-md-row">
          <div class="col d-flex flex-column justify-content-between align-items-start">
            <p class="mb-5">Возможна отправка любой транспортной компанией.<br><br></p>
            <div class="col d-flex flex-column">
              <div class="row">
                <div class="col-2"><img class="w-50" src="./img/phone-call.png" alt=""></div>
                <div class="col-9"><p class="mb-0"><a class="text-nowrap" href="tel:+79293045553" target="_blank">8 929 304-55-53</a></p><p><a class="text-nowrap" href="tel:+79994522090" target="_blank">8 999 452-20-90</a></p></div>
              </div>
              <div class="row">
                <div class="col-2"><img class="w-50" src="./img/location.png" alt=""></div>
                <div class="col-9"><p><a class="text-xs-nowrap" href="https://yandex.ru/maps/-/CCUMz-QghD" target="_blank">Новосибирск, Россия, 630001,<br> Сухарная улица, 35к4, офис 319</a></p></div>
              </div>
              <div class="row mb-1">
                  <a href="https://api.whatsapp.com/send?phone=79628228282" target="_blank"><img src="./img/whatsapp.png"></a><a href="https://instagram.com/import_luxensk?igshid=1jzykvknwjo3" target="_blank"><img class="ml-2" src="./img/instagram.png"></a>
              </div>
              <div class="row mb-2">
                  <a href="mailto:importluxnsk@yandex.ru">importluxnsk@yandex.ru</a>
              </div>
            </div>
            <button type="button" class="btn btn-lg mb-2" data-toggle="modal" data-target="#main_modal">Свяжитесь с нами</button>
          </div>
          <div class="col"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2285.886763189296!2d82.86471131619767!3d55.045199980370086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42dfe469536b89df%3A0xa5d0b2ed89e1bccf!2z0YPQuy4g0KHRg9GF0LDRgNC90LDRjywgMzXQujQsIDMxOSwg0J3QvtCy0L7RgdC40LHQuNGA0YHQuiwg0J3QvtCy0L7RgdC40LHQuNGA0YHQutCw0Y8g0L7QsdC7LiwgNjMwMDAx!5e0!3m2!1sru!2sru!4v1614342178249!5m2!1sru!2sru" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe><!--<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7df8545d6d915aef814ffe17286965f0649c7711eccdd3d78272ab8ecec02aff&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>--></div>
        </div>
      </div>
    </section>
    <div class="modal fade" id="main_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle1">Связаться с нами</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="defForm">
              <div class="form-group">
                <label for="name_1">Имя</label>
                <input type="text" class="form-control" id="name_1" name="name" placeholder="Имя" required>
              </div>
              <div class="form-group">
                <label for="phone_1">Телефон</label>
                <input type="phone" class="form-control" id="phone_1" name="phone" class="phone_inp" placeholder="+7 (999) 999-99-99" required>
              </div>
              <div class="form-group">
                <label for="email_1">E-mail</label>
                <input type="email" class="form-control" id="email_1" name="email" placeholder="mail@ya.ru" required>
              </div>
              <button type="submit" id="submit_frm_3" class="btn btn-primary btn-lg">Отправить</button>
              <label class="form-check-label" for="submit_frm_3">Нажимая на кнопку, вы даете согласие на обработку своих персональных данных и соглашаетесь с <a href="https://importluxnsk.ru/psogl/psogl.html">Пользовательским соглашением</a></a></label>
            </form>
              </div>
      </div>
    </div>
<?php require "footer.php";?>