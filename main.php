<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="look.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet">
    <title>ЖФС.РФ</title>
</head>
<body>
    <header>
            <div class = "top-bar">
                <div class = "container">
                    Заглушка бла бла бла
                </div>
            </div>
            <nav class = "nav main-nav">
                <div class = "container">
                    <ul class = "main-links">
                        <li><a class = "nav-link" href="main.php" id = "first">ГЛАВНАЯ</a></li>
                        <li><a class = "nav-link" href="#">ПРОДУКЦИЯ</a></li>
                        <li><a class = "nav-link" href="#">ДОСТАВКА</a></li>
                        <li><a class = "nav-link" href="#">КОНТАКТЫ</a></li>
                        <li><a class = "nav-link" href="#">СЕРТИФИКАТЫ</a></li>
                        <li class = "registr"><a href="">ВХОД</a></li>
                        <li class = "registr"><a href="">РЕГИСТРАЦИЯ</a></li>  
                    </ul>
                </div>
            </nav>
    </header>
    <div class = "slideshow">
            <img id = "first-img" class = "slide-img" src="http://жмс.рф/wa-data/public/photos/15/00/15/15.1140x0.png" alt="">
            <img class = "slide-img" src="http://жмс.рф/wa-data/public/photos/19/00/19/19.1140x0.png" alt="">
    </div>  
    </div>
    <div class = "middle-bar">
    </div>
    <div class = "container">
        <div class = "main-part">
            <div class = "sidebar">
                <div class = "left-sidebar">
                    <ul class = "sidebar-menu">
                        <li class = "sidebar-option">Биопрепараты</li>
                        <li class = "sidebar-option">Биопрепараты</li>
                        <li class = "sidebar-option">Биопрепараты</li>
                        <li class = "sidebar-option">Биопрепараты</li>
                        <li class = "sidebar-option">Биопрепараты</li>
                        <li class = "sidebar-option">Биопрепараты</li>
                        <li class = "sidebar-option">Биопрепараты</li>
                        <li class = "sidebar-option">Биопрепараты</li>
                        <li class = "sidebar-option">Биопрепараты</li>
                        <li class = "sidebar-option">Биопрепараты</li>
                        <li class = "sidebar-option">Биопрепараты</li>
                        <li class = "sidebar-option">Биопрепараты</li>
                    </ul>
                </div>
                <div class = "tag-cloud">
                    <?php
                        for($i = 0; $i < 50; $i++):?>
                            <h5 class = "tag">Tag <?php echo $i?></h5>,
                    <?php endfor;?>
                </div>
            </div>
            
            <div class = "site-content">
                <div class = "note">
                    <h1 class = "notation">ЛИДЕРЫ ЭТОГО ДНЯ</h1>
                </div>
                <div class = "content">
                    <?php
                        for($i = 0; $i < 4; $i++):?>
                            <div class = "chem-thumbnail">
                                <img class = "chem-img" src="https://img.freepik.com/free-vector/chemistry-design-concepts_1284-3956.jpg?size=338&ext=jpg" alt="">
                                <div class = "chem-desc">
                                    <p class = "">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                </div>
                            </div>  
                    <?php endfor;?>
                </div>
                <div class = "note">
                    <h1 class = "notation">ЛИДЕРЫ СЕЗОНА</h1>
                </div>
                <div class = "content-grid">
                    <?php
                        for($i = 0; $i < 4; $i++):?>
                            <div class = "chem-thumbnail-grid">
                                <img class = "chem-img" src="https://img.freepik.com/free-vector/chemistry-design-concepts_1284-3956.jpg?size=338&ext=jpg" alt="">
                                <div class = "chem-desc">
                                    <p class = "">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                </div>
                            </div>  
                    <?php endfor;?>
                    <div class = "champion">
                        <img class = "chem-img" src="https://img.freepik.com/free-vector/chemistry-design-concepts_1284-3956.jpg?size=338&ext=jpg" alt="">
                        <div class = "chem-desc">
                            <p class = "">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                        <div><h4 class = "reward">ХИТ!</h4></div>
                    </div>
                </div>
                <div class = "note">
                    <h1 class = "notation">НАШИ НОВИНКИ</h1>
                </div>
                <div class = "content">
                    <?php
                        for($i = 0; $i < 4; $i++):?>
                            <div class = "chem-thumbnail">
                                <img class = "chem-img" src="https://img.freepik.com/free-vector/chemistry-design-concepts_1284-3956.jpg?size=338&ext=jpg" alt="">
                                <div class = "chem-desc">
                                    <p class = "">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                </div>
                            </div>  
                    <?php endfor;?>
                </div>
            </div>
        </div>   
    </div>
    <footer>
        <div class = "footer">
            <div class = "footer-item">
                Следите за нашими новостями:
                <ul class = "social">
                    <li><a href="#">Y</a></li>
                    <li><a href="#">Y</a></li>
                    <li><a href="#">Y</a></li>
                    <li><a href="#">Y</a></li>
                </ul>
            </div>
            <div class = "footer-item">
                <h5>Свяжитесь с нами:</h5>
                <ul>
                    <li>+7 495 789-52-08</li>
                    <li>+7 967-102-20-26</li>
                    <li>+7 495 789-52-08</li>
                </ul>
                <p>Email: a2842425@yandex.ru</p>
                <p>Пн—Пт 09:00—20:00</p>
            </div>
            <div class = "footer-item">
                <h5>Наш адрес:</h5>
                <p>125599, г. Москва</p>
                <p>ул. Ижорская</p>
                <p>д. 8, стр.2</p>
            </div>
        </div>
    </footer>
</body>
<script src="app.js"></script>
</html>