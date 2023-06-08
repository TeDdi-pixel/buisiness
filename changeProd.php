<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">

    <header class="header">

        <div class="header__top">
            <div class="header__wrapper">
                <a href="index.html" class="header__logo">
                    <img src="img/Logo.svg" alt="logo" id="header__logo">
                    <!--<svg
              width="161"
              height="48"
              viewBox="0 0 161 48"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0 29.9496L14.6642 48L15.1241 42.2521L0 29.9496Z"
                fill="#D8332E"
              ></path>
              <path
                d="M0.919708 28.1849L15.1241 42.2522L0 29.9496L0.919708 28.1849Z"
                fill="#B5242E"
              ></path>
              <path
                d="M29.3283 29.9496L15.1239 42.2521L14.6641 48L29.3283 29.9496Z"
                fill="#F9412F"
              ></path>
              <path
                d="M24.5766 29.3445L29.3284 29.9495L15.124 42.252L24.5766 29.3445Z"
                fill="#D8332E"
              ></path>
              <path
                d="M24.6277 20.4202L23.708 27.2773L24.5766 29.3445L29.3284 29.9496L24.6277 20.4202Z"
                fill="#B5242E"
              ></path>
              <path
                d="M16.2995 29.5463L14.9199 37.8656L23.7082 27.2773L16.2995 29.5463Z"
                fill="#F9412F"
              ></path>
              <path
                d="M24.6273 20.4202L23.7076 27.2773L16.2988 29.5462L24.6273 20.4202Z"
                fill="#D8332E"
              ></path>
              <path
                d="M6.0293 17.7479L14.9198 37.8656L16.2994 29.5462L6.0293 17.7479Z"
                fill="#D8332E"
              ></path>
              <path
                d="M6.0293 17.7478L16.2994 29.5462L12.314 17.4453L6.0293 17.7478Z"
                fill="#B5242E"
              ></path>
              <path
                d="M14.6643 0L6.0293 17.7479L12.314 17.4454L14.6643 0Z"
                fill="#F9412F"
              ></path>
              <path
                d="M14.6638 0L12.3135 17.4454L16.5543 10.9916L14.6638 0Z"
                fill="#D8332E"
              ></path>
              <path
                d="M14.6641 0L16.5546 10.9916L22.4305 15.9328L14.6641 0Z"
                fill="#B5242E"
              ></path>
              <path
                d="M2.14648 25.6134L9.45305 31.0588L7.10269 25.4117L2.14648 25.6134Z"
                fill="#D8332E"
              ></path>
              <path
                d="M4.85451 20.1177L7.10269 25.4118L2.14648 25.6135L4.85451 20.1177Z"
                fill="#B5242E"
              ></path>
              <path
                d="M45.0148 24.2941C45.0148 24.5462 44.8615 24.6975 44.606 24.6975H40.4673C40.2119 24.6975 40.0586 24.5462 40.0586 24.2941V7.45378C40.0586 7.20168 40.2119 7.05042 40.4673 7.05042H44.606C44.8615 7.05042 45.0148 7.20168 45.0148 7.45378V24.2941Z"
                fill="#1E1E1E"
              ></path>
              <path
                d="M66.1169 9.47058C66.1169 9.72268 65.9637 9.87394 65.7082 9.87394H58.9637V24.2941C58.9637 24.5462 58.8104 24.6975 58.5549 24.6975H54.4162C54.1607 24.6975 54.0075 24.5462 54.0075 24.2941V9.87394H47.314C47.0586 9.87394 46.9053 9.72268 46.9053 9.47058V7.45378C46.9053 7.20168 47.0586 7.05042 47.314 7.05042H65.7593C66.0148 7.05042 66.168 7.20168 66.168 7.45378V9.47058H66.1169Z"
                fill="#1E1E1E"
              ></path>
              <path
                d="M72.5551 17.7899C72.5551 18.042 72.4018 18.1933 72.1463 18.1933H64.7886C64.5332 18.1933 64.3799 18.042 64.3799 17.7899V16.9328C64.3799 16.6807 64.5332 16.5294 64.7886 16.5294H72.1463C72.4018 16.5294 72.5551 16.6807 72.5551 16.9328V17.7899Z"
                fill="#1E1E1E"
              ></path>
              <path
                d="M93.1975 10.2773C93.3507 10.4286 93.4018 10.5798 93.4018 10.8319V14.4622L96.1099 15.7731C96.3142 15.8739 96.4164 16.0252 96.4164 16.2773V21.7227C96.4164 21.9244 96.3653 22.0756 96.2121 22.2269L93.9128 24.4958C93.7595 24.6471 93.6062 24.6975 93.3507 24.6975H75.1099C74.65 24.6975 74.3945 24.4454 74.3945 23.9412V7.80672C74.3945 7.30252 74.65 7.05042 75.1099 7.05042H89.3142C89.6208 7.05042 89.8252 7.15125 90.0296 7.35294L93.1975 10.2773ZM87.9858 9.92436C87.8836 9.82352 87.6792 9.72268 87.4748 9.72268H79.7595C79.4529 9.72268 79.2996 9.87394 79.2996 10.2269V14.5126H89.5697V11.6891C89.5697 11.5378 89.5186 11.3865 89.3653 11.2353L87.9858 9.92436ZM90.1318 16.3277H79.3507V21.521C79.3507 21.8235 79.504 22.0252 79.8106 22.0252H90.0807C90.234 22.0252 90.3361 21.9748 90.4383 21.8739L91.5624 20.8151C91.6646 20.7143 91.7157 20.563 91.7157 20.4118V17.2857C91.7157 17.1849 91.6646 17.084 91.5624 17.0336L90.1318 16.3277Z"
                fill="#1E1E1E"
              ></path>
              <path
                d="M103.365 19.8067C103.365 19.958 103.416 20.1092 103.57 20.2101L105.154 21.6723C105.307 21.8235 105.46 21.8739 105.665 21.8739H114.504C114.76 21.8739 114.913 22.0252 114.913 22.2773V24.2941C114.913 24.5462 114.76 24.6975 114.504 24.6975H102.803C102.497 24.6975 102.292 24.5966 102.088 24.395L98.6647 21.2185C98.5114 21.0672 98.4092 20.8655 98.4092 20.6639V7.45378C98.4092 7.20168 98.5625 7.05042 98.8179 7.05042H102.957C103.212 7.05042 103.365 7.20168 103.365 7.45378V19.8067Z"
                fill="#1E1E1E"
              ></path>
              <path
                d="M137.088 9.67227C137.292 9.87395 137.394 10.0756 137.394 10.3782V21.4202C137.394 21.6723 137.292 21.9244 137.088 22.1261L134.584 24.4958C134.431 24.6471 134.226 24.7479 133.971 24.7479H119.869C119.613 24.7479 119.409 24.6471 119.256 24.4958L116.752 22.1261C116.548 21.9244 116.445 21.7227 116.445 21.4202V10.3277C116.445 10.0756 116.548 9.82353 116.752 9.62185L119.256 7.2521C119.409 7.10084 119.613 7 119.869 7H133.971C134.226 7 134.431 7.10084 134.584 7.2521L137.088 9.67227ZM131.161 9.92437C131.007 9.77311 130.854 9.72269 130.65 9.72269H123.139C122.934 9.72269 122.781 9.77311 122.628 9.92437L121.453 11.0336C121.35 11.1345 121.248 11.2857 121.248 11.4874V20.2101C121.248 20.4118 121.299 20.563 121.453 20.6639L122.628 21.7731C122.781 21.9244 122.934 21.9748 123.139 21.9748H130.65C130.854 21.9748 131.007 21.9244 131.161 21.7731L132.336 20.7143C132.438 20.6134 132.54 20.4622 132.54 20.2605V11.5378C132.54 11.3361 132.489 11.1849 132.336 11.084L131.161 9.92437Z"
                fill="#1E1E1E"
              ></path>
              <path
                d="M160.336 8.05882C160.336 8.15967 160.285 8.31092 160.234 8.41176L155.482 14.563L160.898 23.3361C160.949 23.437 161 23.5882 161 23.7899V24.2941C161 24.5966 160.847 24.7479 160.591 24.7479H156.555C156.402 24.7479 156.248 24.6471 156.146 24.4958L151.19 16.3277H144.292V24.3445C144.292 24.5966 144.139 24.7479 143.883 24.7479H139.745C139.489 24.7479 139.336 24.5966 139.336 24.3445V7.45378C139.336 7.20168 139.489 7.05042 139.745 7.05042H143.883C144.139 7.05042 144.292 7.20168 144.292 7.45378V13.958H151.139L156.044 7.2521C156.146 7.10084 156.299 7 156.453 7H159.927C160.183 7 160.336 7.15126 160.336 7.40336V8.05882Z"
                fill="#1E1E1E"
              ></path>
              <path
                d="M41.06 40H41.85V33H41.06V40ZM43.9002 40H44.6902V33.72H48.3702V33H43.9002V40ZM49.7888 40H50.5788V37.53H52.2788C53.7688 37.53 55.0288 36.75 55.0288 35.24C55.0288 33.84 53.9888 33 52.4088 33H49.7888V40ZM50.5788 36.81V33.73H52.3488C53.4788 33.73 54.2288 34.25 54.2288 35.25C54.2288 36.19 53.4688 36.81 52.3088 36.81H50.5788ZM59.7185 40.12C61.8485 40.12 63.2985 38.43 63.2985 36.5C63.2985 34.55 61.8685 32.88 59.7385 32.88C57.6085 32.88 56.1585 34.57 56.1585 36.5C56.1585 38.45 57.5885 40.12 59.7185 40.12ZM59.7385 39.39C58.1385 39.39 56.9785 38.09 56.9785 36.5C56.9785 34.89 58.1185 33.61 59.7185 33.61C61.3185 33.61 62.4785 34.91 62.4785 36.5C62.4785 38.11 61.3385 39.39 59.7385 39.39ZM64.9646 40H68.0746C69.6046 40 70.6146 39.29 70.6146 38.09C70.6146 37.11 69.9446 36.63 69.1146 36.38C69.6646 36.14 70.2246 35.67 70.2246 34.76C70.2246 34.29 70.0646 33.92 69.7746 33.62C69.3846 33.22 68.7446 33 67.9446 33H64.9646V40ZM65.7446 39.29V36.82H67.9546C69.1746 36.82 69.8146 37.26 69.8146 38.02C69.8146 38.82 69.1546 39.29 68.0946 39.29H65.7446ZM65.7446 36.12V33.71H67.8746C68.8746 33.71 69.4246 34.16 69.4246 34.85C69.4246 35.69 68.7646 36.12 67.8146 36.12H65.7446ZM72.1814 40H72.9514L77.1214 34.19V40H77.9014V33H77.1514L72.9714 38.81V33H72.1814V40ZM79.8767 40H80.6467L84.8167 34.19V40H85.5967V33H84.8467L80.6667 38.81V33H79.8767V40ZM82.7867 32.42C83.5467 32.42 84.0967 31.9 84.2167 31.19L83.6767 31.08C83.5567 31.51 83.2767 31.78 82.7867 31.78C82.2967 31.78 82.0167 31.51 81.8967 31.08L81.3567 31.19C81.4767 31.9 82.0267 32.42 82.7867 32.42ZM90.5701 40H91.3601V38.12L92.8501 36.61L95.5401 40H96.5301L93.4001 36.06L96.4001 33H95.3801L91.3601 37.18V33H90.5701V40ZM101.008 40.12C103.138 40.12 104.588 38.43 104.588 36.5C104.588 34.55 103.158 32.88 101.028 32.88C98.8976 32.88 97.4476 34.57 97.4476 36.5C97.4476 38.45 98.8776 40.12 101.008 40.12ZM101.028 39.39C99.4276 39.39 98.2676 38.09 98.2676 36.5C98.2676 34.89 99.4076 33.61 101.008 33.61C102.608 33.61 103.768 34.91 103.768 36.5C103.768 38.11 102.628 39.39 101.028 39.39ZM106.254 40H107.024V34.34L109.574 38.08H109.614L112.164 34.33V40H112.954V33H112.154L109.604 36.82L107.054 33H106.254V40ZM114.935 40H115.725V33.72H119.665V40H120.455V33H114.935V40ZM122.095 35.72H122.525L123.335 33.05V33H122.395L122.095 35.72ZM130.386 40.12C132.366 40.12 133.716 38.52 133.716 36.49C133.716 34.46 132.386 32.88 130.406 32.88C128.556 32.88 127.256 34.29 127.096 36.12H125.676V33H124.886V40H125.676V36.84H127.096C127.236 38.71 128.516 40.12 130.386 40.12ZM130.406 39.4C128.946 39.4 127.896 38.13 127.896 36.5C127.896 34.85 128.926 33.6 130.386 33.6C131.846 33.6 132.906 34.87 132.906 36.5C132.906 38.15 131.866 39.4 130.406 39.4ZM137.235 40H138.035V33.72H140.385V33H134.885V33.72H137.235V40ZM141.869 40H146.979V39.28H142.659V36.83H146.479V36.11H142.659V33.72H146.929V33H141.869V40ZM148.568 40H149.358V37.53H151.058C152.548 37.53 153.808 36.75 153.808 35.24C153.808 33.84 152.768 33 151.188 33H148.568V40ZM149.358 36.81V33.73H151.128C152.258 33.73 153.008 34.25 153.008 35.25C153.008 36.19 152.248 36.81 151.088 36.81H149.358Z"
                fill="#292B31"
              ></path>
            </svg>-->
                </a>
                <div class="header__search" >
                <input type="search" placeholder="Уведіть ID товара(Наприклад: 5)" id="search"/>
            <span class="header__btn">
              <button type="button" class="btn btn-lg" onclick="searchProd()">
                <svg
                  id="searchIMG"
                  width="20"
                  height="20"
                  viewBox="0 0 20 20"
                  fill="#e07bab"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M8.42105 16.8421C10.2895 16.8417 12.104 16.2162 13.5758 15.0653L18.2032 19.6926L19.6916 18.2042L15.0642 13.5768C16.2158 12.1049 16.8417 10.2899 16.8421 8.42105C16.8421 3.7779 13.0642 0 8.42105 0C3.77789 0 0 3.7779 0 8.42105C0 13.0642 3.77789 16.8421 8.42105 16.8421ZM8.42105 2.10526C11.9042 2.10526 14.7368 4.93789 14.7368 8.42105C14.7368 11.9042 11.9042 14.7368 8.42105 14.7368C4.93789 14.7368 2.10526 11.9042 2.10526 8.42105C2.10526 4.93789 4.93789 2.10526 8.42105 2.10526Z"
                    fill="#e07bab"
                  ></path>
                </svg>
              </button>
            </span>
          </div>
                <div class="header__icons">
                <div id="userDiv"></div>

                    <button id="button-sign" class="header__sign">
                        <p id="enter-btn">Увійти</p>
                        <svg id="login-pic" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.0002 0.200012C7.3002 0.200012 0.200195 7.30001 0.200195 16C0.200195 24.7 7.3002 31.8 16.0002 31.8C24.7002 31.8 31.8002 24.7 31.8002 16C31.8002 7.30001 24.7002 0.200012 16.0002 0.200012ZM16.0002 2.20001C23.6002 2.20001 29.8002 8.40001 29.8002 16C29.8002 19 28.8002 21.8 27.2002 24.1C26.3002 20.2 23.4002 17.1 19.7002 15.8C20.8002 14.8 21.4002 13.4 21.4002 11.9C21.4002 9.00001 19.0002 6.60001 16.1002 6.60001C13.2002 6.60001 10.8002 9.00001 10.8002 11.9C10.8002 13.4 11.5002 14.8 12.5002 15.8C8.8002 17 5.9002 20.2 5.0002 24.1C3.4002 21.8 2.4002 19.1 2.4002 16C2.2002 8.40001 8.4002 2.20001 16.0002 2.20001ZM12.7002 11.9C12.7002 10.1 14.2002 8.60001 16.0002 8.60001C17.8002 8.60001 19.3002 10.1 19.3002 11.9C19.3002 13.7 17.8002 15.2 16.0002 15.2C14.2002 15.2 12.7002 13.7 12.7002 11.9ZM6.6002 26C6.9002 21.1 11.0002 17.2 16.0002 17.2C21.0002 17.2 25.1002 21.1 25.4002 26C22.9002 28.3 19.6002 29.7 16.0002 29.7C12.4002 29.8 9.10019 28.3 6.6002 26Z" fill="#777E90"></path>
                        </svg>
                    </button>
                    <a href="basket.html"><button class="header__basket">
                            <p>Кошик</p>

                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.9 17C24.3 17 24.6 16.8 24.8 16.4L31.9 5C32 4.7 32 4.3 31.8 4C31.6 3.7 31.3 3.5 31 3.5H14.1C13.5 3.5 13.1 3.9 13.1 4.5C13.1 5.1 13.5 5.5 14.1 5.5H29.4L23.3 15H11.4L5.1 0.6C4.9 0.2 4.6 0 4.2 0H1C0.4 0 0 0.4 0 1C0 1.6 0.4 2 1 2H3.5L9.7 16L6.8 20.6C6.6 20.9 6.7 21.3 6.8 21.6C6.9 21.9 7.3 22 7.7 22H27.8C28.4 22 28.8 21.6 28.8 21C28.8 20.4 28.4 20 27.8 20H9.3L11.4 17H23.9Z" fill="#777E90"></path>
                                <path d="M9.4001 24.5C7.3001 24.5 5.6001 26.2 5.6001 28.3C5.6001 30.4 7.3001 32 9.4001 32C11.5001 32 13.2001 30.3 13.2001 28.2C13.2001 26.1 11.4001 24.5 9.4001 24.5ZM9.4001 30C8.4001 30 7.6001 29.2 7.6001 28.2C7.6001 27.2 8.4001 26.4 9.4001 26.4C10.4001 26.4 11.2001 27.2 11.2001 28.2C11.2001 29.2 10.3001 30 9.4001 30Z" fill="#777E90"></path>
                                <path d="M25 24.5C22.9 24.5 21.2 26.2 21.2 28.3C21.2 30.4 22.9 32 25 32C27.1 32 28.7999 30.3 28.7999 28.2C28.7999 26.1 27.1 24.5 25 24.5ZM25 30C24 30 23.2 29.2 23.2 28.2C23.2 27.2 24 26.4 25 26.4C26 26.4 26.7999 27.2 26.7999 28.2C26.7999 29.2 26 30 25 30Z" fill="#777E90"></path>
                            </svg>
                            <div class="basket__dropdown">У кошику порожньо!</div>
                        </button></a>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="header__wrapper">
                <nav class="header__menu">
                    <ul>
                        <li><a href="index.html" class="header__link">Головна</a></li>
                        <li><a href="contact.html" class="header__link">Контакти</a></li>
                        <li><a href="devices.html" class="header__link">Категорії</a></li>
                        <!--<li><a href="admin.php" id="admin-panel">админка</a></li>-->
                    </ul>
                </nav>
                <div id="burger" class="burger-btn"><span></span></div>
            </div>
        </div>
            <div class="header__bottom admin-header">
            <div class="header__wrapper">
                <nav class="header__menu">
                    <ul>
                        <li><a href="changeCategory.php" class="header__link">Редагувати категорії</a></li>
                        <li><a href="changeCharacteristics.php" class="header__link">Редагувати характеристики</a></li>
                        <li><a href="changeValues.php" class="header__link">Редагувати значення характ.</a></li>
                    </ul>
                </nav>
                <div id="burger" class="burger-btn"><span></span></div>
            </div>
    </header>
    </div>

    <div id="sign" class="popup-consultation">
        <div class="popup-consultation__body">
            <div class="popup-consultation__content tabs">
                <div class="popup-consultation__top t-btn-container">
                    <h2 class="popup-consultation__title t-btn" data-name="profile">
                        Вхід
                    </h2>
                    <h2 class="popup-consultation__title t-btn" data-name="messages">
                        Реєстрація
                    </h2>
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#C1D0CC" id="close-consultation" class="bi bi-x-circle popup-consultation__close" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </div>
                <div class="t-panel-container">
                    <div class="t-panel profile active">
                        <!-- First tab panel content  -->
                        <form action="back/login.php" id="sign-in">
                            <div class="popup-consultation__input">
                                <input type="text" name="login" required class="sign-in-form__input" />
                                <label for="login">Name</label>
                            </div>
                            <div class="popup-consultation__input">
                                <input type="password" name="password" required class="sign-in-form__input" />
                                <label for="password">Password</label>
                            </div>
                            <input type="submit" class="button" />
                        </form>
                    </div>
                    <div class="t-panel messages">
                        <form action="" id="reg-form">
                            <div class="popup-consultation__input">
                                <input type="text" name="login" required class="reg-form__input" />
                                <label for="login">Name</label>
                            </div>
                            <div class="popup-consultation__input">
                                <input type="password" name="password" required class="reg-form__input" />
                                <label for="password">Password</label>
                            </div>
                            <div class="popup-consultation__input">
                                <input type="email" name="email" required class="reg-form__input" />
                                <label for="email">E-mail</label>
                            </div>
                            <input type="submit" class="button" />
                        </form>
                        <!-- Second tab panel content  -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
    <ul class="breadcrumb">
          <li><a href="index.html">Головна</a></li>
          <li>
            <span>&nbsp;/</span>
            <strong href="">Адмін-панель</strong>
          </li>
        </ul>
        <h2 class="title title_margin">Адмін-панель</h2>
    <main>
    
            
    <!--<a href="changeCategory.php" class="admin-panel__navigation">Повернутися</a>-->
<div class="admin-panel">
                <div class="panel__wrapper">
                    <h1 class="admin-panel__title">Створити Продукт</h1>
                    <form id="addProductForm" action="back/addProdAdmin.php" method="POST" class="admin-panel__form">
                        <div class="admin-panel__wrapper">
                        <label for="name" class="admin-panel__label">Ім'я:</label>
                        <input class="admin-panel__input"type="text" id="name" name="name" required>
                        </div>
                        
                        <div class="admin-panel__wrapper">
                        <label for="price" class="admin-panel__label">Ціна</label>
                        <input class="admin-panel__input" type="text" id="price" name="price" required>
                        </div>
                        <div class="admin-panel__wrapper">
                        <label for="image_link" class="admin-panel__label">Шлях до картанки:</label>
                        <input  class="admin-panel__input" type="text" id="image_link" name="image_link" required>
                        </div>
                        <div class="admin-panel__wrapper">
                        <label for="category_id" class="admin-panel__label">Категорія:</label>
                        <select class="admin-panel__input" id="category_id" name="category_id">
                            <option value="" selected disabled>Оберіть категорію</option>
                            <?php
                            require_once 'back/env.php';
                            $mysqli = new mysqli("localhost", $GLOBALS['db_user'], $GLOBALS['db_pass'], $GLOBALS['db_name']);
                            $result = $mysqli->query("SELECT * FROM categories");
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                            }
                            ?>
                        </select>
                        </div>
                        <div class="admin-panel__wrapper">
                        <button type="submit" name="add_product" id="sendBTN" class="admin-panel__button">Створити</button>
                        <div id="responseMsg1"> </div>
                        </div>
                    </form>
                </div>



                
                <div class="panel__wrapper">
                    <h1 class="admin-panel__title">Змінити Продукт</h1>
                    <form id="updateProductForm" action="back/updateProdAdmin.php" method="POST" class="admin-panel__form">
                        <label for="id" class="admin-panel__label">ID продукту:</label>
                        <select id="id" name="id" class="admin-panel__input">
                            <option value="" selected disabled>Оберіть назву</option>
                            <?php
                            select();
                            ?>
                        </select>

                        <label for="name" class="admin-panel__label">Нове ім'я:</label>
                        <input type="text" id="name" name="name" class="admin-panel__input">

                        <label for="price" class="admin-panel__label">Нова ціна:</label>
                        <input type="text" id="price" name="price" class="admin-panel__input">

                        <label for="image_link" class="admin-panel__label">Новий шлях:</label>
                        <input type="text" id="image_link" name="image_link" class="admin-panel__input">

                        <button type="submit" class="admin-panel__button" name="update_product" id="sendBTN">Змінити</button>
                        <div id="responseMsg3"></div>
                    </form>
                </div>



                <div class="panel__wrapper">
                    <h1 class="admin-panel__title">Видалити продукт</h1>
                    <form id="deleteProductForm" action="back/deleteProdAdmin.php" method="POST" class="admin-panel__form">
                        <label for="id" class="admin-panel__label">ID продукту:</label>
                        <select id="id" name="id" class="admin-panel__input">
                            <option value="" selected disabled >Оберіть назву</option>
                            <?php
                            function select()
                            {
                                require_once 'back/env.php';
                                $mysqli = new mysqli("localhost", $GLOBALS['db_user'], $GLOBALS['db_pass'], $GLOBALS['db_name']);
                                $result = $mysqli->query("SELECT * FROM products");
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                                }
                            }
                            select();
                            ?>
                        </select>
                        <button type="submit" name="delete_product" id="sendBTN" class="admin-panel__button">Видалити</button>
                        <div id="responseMsg2"></div>
                    </form>
                </div>

            </div>

        </div>
        </div>
    </main>
    <div class="btn-up btn-up_hide"></div>
    <div>
    <div class="container">
    <footer class="footer">
        <div class="footer__wrapper">
            <div class="footer__block">
                <h5 class="footer__title">Меню</h5>
                <ul>
                    <li><a href="" class="footer__text">Усі пк</a></li>
                    <li><a href="" class="footer__text">Ігрові пк</a></li>
                    <li><a href="" class="footer__text">Збірка пк</a></li>
                    <li><a href="" class="footer__text">Категорії</a></li>
                </ul>
            </div>
            <div class="footer__block">
                <h5 class="footer__title">Покупцеві</h5>
                <ul>
                    <li><a href="" class="footer__text">Умови оплати</a></li>
                    <li><a href="" class="footer__text">Сервісне обслуговування</a></li>
                    <li><a href="" class="footer__text">Політика повернення</a></li>
                    <li><a href="" class="footer__text">Умови доставки</a></li>
                </ul>
            </div>
            <div class="footer__block">
                <h5 class="footer__title">Інформація</h5>
                <ul>
                    <li><a href="" class="footer__text">Про компанію</a></li>
                    <li><a href="" class="footer__text">Встановлюючі документи</a></li>
                    <li><a href="" class="footer__text">ПОЛІТИКА КОНФІДЕНЦІЙНОСТІ</a></li>
                    <li><a href="" class="footer__text">Договір публічної оферти</a></li>
                </ul>
            </div>
            <div class="footer__block">
                <h5 class="footer__title">Зв’язатися з нами</h5>
                <span class="footer__text">м. Київ Олекси Тихого, 49А</span>
                <a href="" class="footer__text">support@it-blok.com.ua</a>
                <a href="" class="footer__text">0 800 751 710</a>
                <div class="footer__social">
                    <a href="">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 28C21.732 28 28 21.732 28 14C28 6.26801 21.732 0 14 0C6.26801 0 0 6.26801 0 14C0 21.732 6.26801 28 14 28Z" fill="#E4E4E4"></path>
                            <path d="M17.2375 5.98828H10.7625C8.13203 5.98828 5.98828 8.13203 5.98828 10.7625V17.243C5.98828 19.8734 8.13203 22.0172 10.7625 22.0172H17.243C19.8734 22.0172 22.0172 19.8734 22.0172 17.243V10.7625C22.0117 8.12656 19.8734 5.98828 17.2375 5.98828ZM20.3984 17.2375C20.3984 18.982 18.982 20.3984 17.2375 20.3984H10.7625C9.01797 20.3984 7.60156 18.982 7.60156 17.2375V10.7625C7.60156 9.01797 9.01797 7.60156 10.7625 7.60156H17.243C18.9875 7.60156 20.4039 9.01797 20.4039 10.7625L20.3984 17.2375Z" fill="#292B31"></path>
                            <path d="M14 9.85461C11.7141 9.85461 9.85474 11.714 9.85474 13.9999C9.85474 16.2859 11.7141 18.1452 14 18.1452C16.286 18.1452 18.1454 16.2859 18.1454 13.9999C18.1454 11.714 16.286 9.85461 14 9.85461ZM14 16.532C12.6 16.532 11.468 15.3999 11.468 13.9999C11.468 12.5999 12.6 11.4679 14 11.4679C15.4 11.4679 16.5321 12.5999 16.5321 13.9999C16.5321 15.3999 15.4 16.532 14 16.532Z" fill="#292B31"></path>
                        </svg>
                    </a>
                    <a href="">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 28C21.732 28 28 21.732 28 14C28 6.26801 21.732 0 14 0C6.26801 0 0 6.26801 0 14C0 21.732 6.26801 28 14 28Z" fill="#E4E4E4"></path>
                            <path d="M17.5196 14.5474H15.0215V23.6994H11.2366V14.5474H9.43652V11.331H11.2366V9.24967C11.2366 7.76127 11.9436 5.4306 15.0552 5.4306L17.8588 5.44233V8.56437H15.8246C15.4909 8.56437 15.0217 8.73108 15.0217 9.44108V11.334H17.8503L17.5196 14.5474Z" fill="#292B31"></path>
                        </svg>
                    </a>
                    <a href="">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="14" cy="14" r="14" fill="#E4E4E4"></circle>
                            <path d="M21.6703 9.8777C21.4859 9.14349 20.9455 8.56475 20.2602 8.36704C19.0081 8 13.9998 8 13.9998 8C13.9998 8 8.99169 8 7.73962 8.35305C7.0675 8.55063 6.51391 9.14362 6.32947 9.8777C6 11.2188 6 14 6 14C6 14 6 16.7952 6.32947 18.1223C6.51404 18.8564 7.05432 19.4353 7.73974 19.633C9.00487 20 14 20 14 20C14 20 19.0081 20 20.2602 19.647C20.9456 19.4494 21.4859 18.8705 21.6705 18.1364C21.9999 16.7952 21.9999 14.0141 21.9999 14.0141C21.9999 14.0141 22.0131 11.2188 21.6703 9.8777Z" fill="#292B31"></path>
                            <path d="M13 17L17 14L13 11V17Z" fill="#E4E4E4"></path>
                        </svg>
                    </a>
                    <a href="">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 28C21.732 28 28 21.732 28 14C28 6.26801 21.732 0 14 0C6.26801 0 0 6.26801 0 14C0 21.732 6.26801 28 14 28Z" fill="#E4E4E4"></path>
                            <path d="M6.40623 13.6967L19.9046 8.49216C20.5311 8.26583 21.0782 8.645 20.8752 9.59233L20.8764 9.59116L18.5781 20.419C18.4077 21.1867 17.9516 21.3733 17.3134 21.0117L13.8134 18.4322L12.1252 20.0585C11.9386 20.2452 11.7811 20.4027 11.4194 20.4027L11.6679 16.8408L18.1546 10.9807C18.4369 10.7322 18.0916 10.5922 17.7194 10.8395L9.70323 15.8865L6.24756 14.8085C5.4974 14.5705 5.48106 14.0583 6.40623 13.6967Z" fill="#292B31"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="footer__block footer__last-block">
                <!--<img src="img/footer__logo.png" alt="" class="footer__logo">-->
                <p class="footer__text">"Наша компанія продає нові комп'ютери оптом та в роздріб!" </p>
                <a href="" class="button">Відгуки наших покупців</a>
            </div>
            <p class="footer__pow">© 2006 - 2023 Ігрові девайси топ</p>
        </div>
    </footer>
    </div>

    <script src="js/findProd.js"></script>
    <script src="js/pop-up.js"></script>
    <script src="js/admin.js"></script>
</body>

</html>