<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption:wght@400;700&display=swap">
    <link rel="stylesheet" href="css/normilize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <title>Clinic</title>
</head>

<body>

    <header class="header" id="header">

        <div class="container">
            <div class="header__top">
                <div class="header__burger"></div>

                <a class="header__logo-link" href="#header">
                    <svg class="header__logo" width="92" height="28" viewBox="0 0 92 28">
                        <path fill="#0DBC91" d="M18.213 27H0.401917V1.1333H5.87087V22.1962H18.213V27Z" />
                        <path fill="#0DBC91" d="M16.2582 14.0666C16.2582 11.948 16.5292 10.0511 17.0712 8.37597C17.6132 6.70079 18.3892 5.2966 19.3992 4.1634C20.4339 3.00555 21.6902 2.13102 23.1683 1.53978C24.6464 0.923904 26.3216 0.615967 28.1939 0.615967C30.1893 0.615967 31.9261 0.948538 33.4041 1.61368C34.9069 2.25419 36.1509 3.16568 37.1363 4.34816C38.1464 5.53063 38.8977 6.94714 39.3904 8.59768C39.9078 10.2482 40.1664 12.0712 40.1664 14.0666C40.1664 16.1852 39.8831 18.0821 39.3165 19.7573C38.7746 21.4325 37.9862 22.849 36.9516 24.0068C35.9169 25.14 34.6605 26.0146 33.1824 26.6304C31.7043 27.2217 30.0415 27.5173 28.1939 27.5173C26.1984 27.5173 24.4494 27.197 22.9466 26.5565C21.4685 25.8914 20.2245 24.9676 19.2144 23.7851C18.229 22.6026 17.49 21.1861 16.9973 19.5356C16.5046 17.885 16.2582 16.0621 16.2582 14.0666ZM22.0598 14.0666C22.0598 15.3477 22.1829 16.5178 22.4293 17.5771C22.6756 18.6364 23.0452 19.5479 23.5379 20.3116C24.0306 21.0753 24.6587 21.6665 25.4224 22.0853C26.2107 22.5041 27.1346 22.7135 28.1939 22.7135C30.14 22.7135 31.6551 22.0483 32.739 20.7181C33.8229 19.3878 34.3649 17.1706 34.3649 14.0666C34.3649 12.8349 34.2541 11.6894 34.0323 10.6301C33.8106 9.57076 33.4411 8.65927 32.9238 7.89559C32.4311 7.10727 31.7906 6.50371 31.0022 6.08492C30.2386 5.64149 29.3024 5.41978 28.1939 5.41978C26.2723 5.41978 24.7696 6.10955 23.6857 7.48911C22.6017 8.86867 22.0598 11.0612 22.0598 14.0666Z" />
                        <path fill="#0DBC91" d="M53.8596 13.4015H64.428V25.0045C63.8614 25.448 63.2332 25.8298 62.5434 26.1501C61.8783 26.4457 61.1639 26.7043 60.4002 26.9261C59.6611 27.1231 58.8974 27.271 58.1091 27.3695C57.3208 27.468 56.5448 27.5173 55.7811 27.5173C54.0074 27.5173 52.3446 27.2586 50.7926 26.7413C49.2652 26.224 47.9226 25.4233 46.7647 24.3394C45.6315 23.2308 44.7324 21.8266 44.0672 20.1268C43.4267 18.427 43.1065 16.407 43.1065 14.0666C43.1065 11.6278 43.5006 9.55844 44.2889 7.85863C45.0773 6.13419 46.0996 4.74232 47.356 3.68301C48.637 2.59908 50.0535 1.82308 51.6055 1.35502C53.1821 0.862317 54.7465 0.615967 56.2985 0.615967C57.8997 0.615967 59.3039 0.739141 60.511 0.98549C61.7428 1.2072 62.7035 1.42892 63.3933 1.65063L62.2478 6.19578C61.5826 5.97406 60.8313 5.7893 59.9937 5.64149C59.1561 5.49368 58.1091 5.41978 56.8527 5.41978C55.6949 5.41978 54.6356 5.5799 53.6748 5.90016C52.7141 6.19578 51.8765 6.68848 51.1621 7.37825C50.4477 8.06803 49.8934 8.96721 49.4992 10.0758C49.1051 11.1843 48.908 12.527 48.908 14.1036C48.908 15.631 49.1051 16.9366 49.4992 18.0205C49.8934 19.1045 50.423 20.0037 51.0882 20.7181C51.7779 21.4078 52.5663 21.9129 53.4531 22.2331C54.34 22.5534 55.2761 22.7135 56.2615 22.7135C56.9266 22.7135 57.5918 22.6396 58.2569 22.4918C58.9467 22.344 59.5256 22.1099 59.9937 21.7897V17.3184L53.8596 16.7272V13.4015Z" />
                        <path fill="#0DBC91" d="M67.5369 14.0666C67.5369 11.948 67.8079 10.0511 68.3498 8.37597C68.8918 6.70079 69.6678 5.2966 70.6778 4.1634C71.7125 3.00555 72.9689 2.13102 74.447 1.53978C75.9251 0.923904 77.6003 0.615967 79.4725 0.615967C81.4679 0.615967 83.2047 0.948538 84.6828 1.61368C86.1855 2.25419 87.4296 3.16568 88.415 4.34816C89.425 5.53063 90.1764 6.94714 90.6691 8.59768C91.1864 10.2482 91.4451 12.0712 91.4451 14.0666C91.4451 16.1852 91.1618 18.0821 90.5952 19.7573C90.0532 21.4325 89.2649 22.849 88.2302 24.0068C87.1955 25.14 85.9392 26.0146 84.4611 26.6304C82.983 27.2217 81.3201 27.5173 79.4725 27.5173C77.4771 27.5173 75.728 27.197 74.2253 26.5565C72.7472 25.8914 71.5031 24.9676 70.4931 23.7851C69.5077 22.6026 68.7686 21.1861 68.2759 19.5356C67.7832 17.885 67.5369 16.0621 67.5369 14.0666ZM73.3384 14.0666C73.3384 15.3477 73.4616 16.5178 73.7079 17.5771C73.9543 18.6364 74.3238 19.5479 74.8165 20.3116C75.3092 21.0753 75.9374 21.6665 76.7011 22.0853C77.4894 22.5041 78.4132 22.7135 79.4725 22.7135C81.4187 22.7135 82.9337 22.0483 84.0176 20.7181C85.1016 19.3878 85.6436 17.1706 85.6436 14.0666C85.6436 12.8349 85.5327 11.6894 85.311 10.6301C85.0893 9.57076 84.7197 8.65927 84.2024 7.89559C83.7097 7.10727 83.0692 6.50371 82.2809 6.08492C81.5172 5.64149 80.5811 5.41978 79.4725 5.41978C77.551 5.41978 76.0482 6.10955 74.9643 7.48911C73.8804 8.86867 73.3384 11.0612 73.3384 14.0666Z" />
                    </svg>
                </a>

                <div class="header__adress">
                    <span class="header__adress-city">Ростов-на-Дону</span>
                    <span class="header__adress-adress">ул. Ленина, 2Б</span>
                </div>

                <a class="header__phone" href="tel:+78630000000">+7(863) 000 00 00</a>

                <button class="header__signup-btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Записаться на прием</button>

            </div>
        </div>

        <div class="header__bot">
            <div class="container">
                <nav class="header__navigation">
                    <ul class="nav">

                        <li class="nav-item">
                            <a class="nav-link" href="#about">О клинике</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#services">Услуги</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Специалисты</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Цены</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Контакты</a>
                        </li>

                    </ul>
                    <button class="header__signup-btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Записаться на прием</button>
                </nav>
            </div>
        </div>

    </header>

    <section class="about" id="about">
        <div class="container">
            <div class="about__description">
                <h2 class="about__title">Многопрофильная клиника для детей и взрослых</h2>
                <p class="about__text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                </p>
            </div>
        </div>
    </section>





    <section class="services" id="services">



        <div class="slider-container service__slider">

            <div class="slider">

                <div class="slider__item">
                    <div class="slider__item-content">
                        <div class="slider__item-info">
                            <h3 class="slider__item-title">Check-UP</h3>
                            <span class="slider__item-gender">для мужчин</span>
                            <ul class="slider__item-list">
                                <li class="slider__list-item">Гормональный скрининг</li>
                                <li class="slider__list-item">Тестостерон</li>
                                <li class="slider__list-item">Свободный тестостерон</li>
                                <li class="slider__list-item">Глобулин, связывающий половые гормоны</li>
                            </ul>

                            <div class="slider__item-price">
                                <span class="slider__price-now">Всего 2800₽</span>
                                <span class="slider__price-before">3500₽</span>
                            </div>

                        </div>
                        <div class="slider__item-btns">
                            <button class="header__signup-btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#">Записаться</button>
                            <a class="slider__item-link" href="#">Подробнее</a>
                        </div>
                    </div>
                </div>


                <?php

                function createSliderItems($arr, $numb)
                {
                    $results = array();
                    for ($i = 0; $i <= $numb; $i++) {
                        $item =
                            '<div class="slider__item">
  <div class="slider__item-content">
      <div class="slider__item-info">
          <h3 class="slider__item-title">' . $arr[$i]['name'] . '</h3>
          <span class="slider__item-gender">' . $arr[$i]['email'] . '</span>
          <ul class="slider__item-list">
              <li class="slider__list-item">' . $arr[$i]['phone'] . '</li>
              <li class="slider__list-item">' . $arr[$i]['website'] . '</li>
              <li class="slider__list-item">' . $arr[$i]['website'] . '</li>
              <li class="slider__list-item">' . $arr[$i]['email'] . '</li>
          </ul>

          <div class="slider__item-price">
              <span class="slider__price-now">Всего 2800₽</span>
              <span class="slider__price-before">3500₽</span>
          </div>

      </div>
      <div class="slider__item-btns">
          <button class="header__signup-btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#">Записаться</button>
          <a class="slider__item-link" href="#">Подробнее</a>
      </div>
  </div>
</div>';
                        array_push($results, $item);
                    }
                    return $results;
                }

                $info = file_get_contents('https://jsonplaceholder.typicode.com/users');
                $info = json_decode($info, true);
                $item1 = createSliderItems($info, 3);
                for ($i = 1; $i <= 3; $i++)
                    echo $item1[$i];
                ?>

            </div>

            <div class="arrows">
                <span class="arrows__item">
                    <svg width="34" height="18" viewBox="0 0 34 18" fill="none">
                        <path d="M32.6718 7.67186H4.54493L9.20426 3.03512C9.72416 2.51768 9.72615 1.67678 9.20871 1.15689C8.69127 0.636925 7.8503 0.635 7.33041 1.15237L0.390691 8.05861C0.390226 8.05901 0.389894 8.05947 0.389496 8.05987C-0.129071 8.57731 -0.130731 9.42093 0.389363 9.94009C0.389828 9.94049 0.39016 9.94095 0.390558 9.94135L7.33028 16.8476C7.85011 17.3649 8.69107 17.3631 9.20858 16.8431C9.72602 16.3232 9.72402 15.4823 9.20413 14.9648L4.54493 10.3281H32.6718C33.4054 10.3281 34 9.7335 34 8.99998C34 8.26646 33.4054 7.67186 32.6718 7.67186Z" fill="#E1E1E1" />
                    </svg>
                </span>
                <div class="numbers__counter"></div>
                <span class="arrows__item">
                    <svg width="34" height="18" viewBox="0 0 34 18" fill="none">
                        <path d="M1.32817 7.67186H29.4551L24.7957 3.03512C24.2758 2.51768 24.2739 1.67678 24.7913 1.15689C25.3087 0.636925 26.1497 0.635 26.6696 1.15237L33.6093 8.05861C33.6098 8.05901 33.6101 8.05947 33.6105 8.05987C34.1291 8.57731 34.1307 9.42093 33.6106 9.94009C33.6102 9.94049 33.6098 9.94095 33.6094 9.94135L26.6697 16.8476C26.1499 17.3649 25.3089 17.3631 24.7914 16.8431C24.274 16.3232 24.276 15.4823 24.7959 14.9648L29.4551 10.3281H1.32817C0.594646 10.3281 4.57764e-05 9.7335 4.57764e-05 8.99998C4.57764e-05 8.26646 0.594646 7.67186 1.32817 7.67186Z" fill="#E1E1E1" />
                    </svg>
                </span>
            </div>
    </section>






    <footer class="footer">
        <div class="container">
            <footer class="footer__content">

                <a class="footer__logo-link" href="#header">
                    <svg class="footer__logo" width="92" height="28" viewBox="0 0 92 28">
                        <path fill="#FFFFFF" d="M18.213 27H0.401917V1.1333H5.87087V22.1962H18.213V27Z" />
                        <path fill="#FFFFFF" d="M16.2582 14.0666C16.2582 11.948 16.5292 10.0511 17.0712 8.37597C17.6132 6.70079 18.3892 5.2966 19.3992 4.1634C20.4339 3.00555 21.6902 2.13102 23.1683 1.53978C24.6464 0.923904 26.3216 0.615967 28.1939 0.615967C30.1893 0.615967 31.9261 0.948538 33.4041 1.61368C34.9069 2.25419 36.1509 3.16568 37.1363 4.34816C38.1464 5.53063 38.8977 6.94714 39.3904 8.59768C39.9078 10.2482 40.1664 12.0712 40.1664 14.0666C40.1664 16.1852 39.8831 18.0821 39.3165 19.7573C38.7746 21.4325 37.9862 22.849 36.9516 24.0068C35.9169 25.14 34.6605 26.0146 33.1824 26.6304C31.7043 27.2217 30.0415 27.5173 28.1939 27.5173C26.1984 27.5173 24.4494 27.197 22.9466 26.5565C21.4685 25.8914 20.2245 24.9676 19.2144 23.7851C18.229 22.6026 17.49 21.1861 16.9973 19.5356C16.5046 17.885 16.2582 16.0621 16.2582 14.0666ZM22.0598 14.0666C22.0598 15.3477 22.1829 16.5178 22.4293 17.5771C22.6756 18.6364 23.0452 19.5479 23.5379 20.3116C24.0306 21.0753 24.6587 21.6665 25.4224 22.0853C26.2107 22.5041 27.1346 22.7135 28.1939 22.7135C30.14 22.7135 31.6551 22.0483 32.739 20.7181C33.8229 19.3878 34.3649 17.1706 34.3649 14.0666C34.3649 12.8349 34.2541 11.6894 34.0323 10.6301C33.8106 9.57076 33.4411 8.65927 32.9238 7.89559C32.4311 7.10727 31.7906 6.50371 31.0022 6.08492C30.2386 5.64149 29.3024 5.41978 28.1939 5.41978C26.2723 5.41978 24.7696 6.10955 23.6857 7.48911C22.6017 8.86867 22.0598 11.0612 22.0598 14.0666Z" />
                        <path fill="#FFFFFF" d="M53.8596 13.4015H64.428V25.0045C63.8614 25.448 63.2332 25.8298 62.5434 26.1501C61.8783 26.4457 61.1639 26.7043 60.4002 26.9261C59.6611 27.1231 58.8974 27.271 58.1091 27.3695C57.3208 27.468 56.5448 27.5173 55.7811 27.5173C54.0074 27.5173 52.3446 27.2586 50.7926 26.7413C49.2652 26.224 47.9226 25.4233 46.7647 24.3394C45.6315 23.2308 44.7324 21.8266 44.0672 20.1268C43.4267 18.427 43.1065 16.407 43.1065 14.0666C43.1065 11.6278 43.5006 9.55844 44.2889 7.85863C45.0773 6.13419 46.0996 4.74232 47.356 3.68301C48.637 2.59908 50.0535 1.82308 51.6055 1.35502C53.1821 0.862317 54.7465 0.615967 56.2985 0.615967C57.8997 0.615967 59.3039 0.739141 60.511 0.98549C61.7428 1.2072 62.7035 1.42892 63.3933 1.65063L62.2478 6.19578C61.5826 5.97406 60.8313 5.7893 59.9937 5.64149C59.1561 5.49368 58.1091 5.41978 56.8527 5.41978C55.6949 5.41978 54.6356 5.5799 53.6748 5.90016C52.7141 6.19578 51.8765 6.68848 51.1621 7.37825C50.4477 8.06803 49.8934 8.96721 49.4992 10.0758C49.1051 11.1843 48.908 12.527 48.908 14.1036C48.908 15.631 49.1051 16.9366 49.4992 18.0205C49.8934 19.1045 50.423 20.0037 51.0882 20.7181C51.7779 21.4078 52.5663 21.9129 53.4531 22.2331C54.34 22.5534 55.2761 22.7135 56.2615 22.7135C56.9266 22.7135 57.5918 22.6396 58.2569 22.4918C58.9467 22.344 59.5256 22.1099 59.9937 21.7897V17.3184L53.8596 16.7272V13.4015Z" />
                        <path fill="#FFFFFF" d="M67.5369 14.0666C67.5369 11.948 67.8079 10.0511 68.3498 8.37597C68.8918 6.70079 69.6678 5.2966 70.6778 4.1634C71.7125 3.00555 72.9689 2.13102 74.447 1.53978C75.9251 0.923904 77.6003 0.615967 79.4725 0.615967C81.4679 0.615967 83.2047 0.948538 84.6828 1.61368C86.1855 2.25419 87.4296 3.16568 88.415 4.34816C89.425 5.53063 90.1764 6.94714 90.6691 8.59768C91.1864 10.2482 91.4451 12.0712 91.4451 14.0666C91.4451 16.1852 91.1618 18.0821 90.5952 19.7573C90.0532 21.4325 89.2649 22.849 88.2302 24.0068C87.1955 25.14 85.9392 26.0146 84.4611 26.6304C82.983 27.2217 81.3201 27.5173 79.4725 27.5173C77.4771 27.5173 75.728 27.197 74.2253 26.5565C72.7472 25.8914 71.5031 24.9676 70.4931 23.7851C69.5077 22.6026 68.7686 21.1861 68.2759 19.5356C67.7832 17.885 67.5369 16.0621 67.5369 14.0666ZM73.3384 14.0666C73.3384 15.3477 73.4616 16.5178 73.7079 17.5771C73.9543 18.6364 74.3238 19.5479 74.8165 20.3116C75.3092 21.0753 75.9374 21.6665 76.7011 22.0853C77.4894 22.5041 78.4132 22.7135 79.4725 22.7135C81.4187 22.7135 82.9337 22.0483 84.0176 20.7181C85.1016 19.3878 85.6436 17.1706 85.6436 14.0666C85.6436 12.8349 85.5327 11.6894 85.311 10.6301C85.0893 9.57076 84.7197 8.65927 84.2024 7.89559C83.7097 7.10727 83.0692 6.50371 82.2809 6.08492C81.5172 5.64149 80.5811 5.41978 79.4725 5.41978C77.551 5.41978 76.0482 6.10955 74.9643 7.48911C73.8804 8.86867 73.3384 11.0612 73.3384 14.0666Z" />
                    </svg>
                </a>

                <div class="footer__nav">
                    <ul class="nav">

                        <li class="nav-item">
                            <a class="nav-link" href="#about">О клинике</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#services">Услуги</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Специалисты</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Цены</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Контакты</a>
                        </li>

                    </ul>
                </div>

                <div class="footer__social">
                    <ul class="footer__social-list">
                        <li class="footer__social-item">
                            <a class="footer__social-link" href="#" target="_blank"></a>
                        </li>

                        <li class="footer__social-item">
                            <a class="footer__social-link" href="#" target="_blank"></a>
                        </li>

                        <li class="footer__social-item">
                            <a class="footer__social-link" href="#" target="_blank"></a>
                        </li>
                    </ul>
                </div>

            </footer>
        </div>
    </footer>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Записаться на приём</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="modal__form">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Ф.И.O.:</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="Иванов Иван Иванович" required>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Сообщение:</label>
                            <textarea class="form-control" rows="3" id="message-text" require>Например. Номер телефона: 8-900-222-12-34. Дата, время: 24.02.2022 - 15.45 . К какому специалисту, хотели бы записаться: Стоматолог-терапевт
                                </textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                            <button type="submit" class="btn btn-primary btn-submit">Отправить</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script src="js/slider.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>