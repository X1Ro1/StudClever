<?php require 'tpl/header.php'; ?>

    <div class="main">
        <div class="main-container">
            <div class="main-inner">
                <div class="main-swiper">

                    <div class="slider-container">
                        <div class="slider">
                            <img src="assets/img/banner/1.png" alt="Image 1" class="slide">
                            <img src="assets/img/banner/2.png" alt="Image 2" class="slide">
                            <img src="assets/img/banner/3.png" alt="Image 3" class="slide">
                            <img src="assets/img/banner/4.png" alt="Image 4" class="slide">
                        </div>
                        <button class="prev" onclick="prevSlide()">&#10094;</button>
                        <button class="next" onclick="nextSlide()">&#10095;</button>
                    </div>

                </div><br>

                <div class="main-cards">
                    <!-- Форумы -->
                    <div class="main-card">
                        <div class="main-card-forum">
                            <div class="main-card-h3">
                                <h3>Форум</h3>
                            </div><br>
    
                            <div class="main-card-link">
                                <a href="forum/forum.php">Программирование</a>
                                <a href="forum/forum.php">Флудилка</a>
                                <a href="forum/forum.php">Высшая математика</a>
                                <a href="forum/forum.php">Юриспруденция</a>
                                <a href="forum/forum.php">Гуманитарные науки</a>
                            </div><br><br>
    
                            <div class="main-card-btn">
                                <a href="forum/forum.php">Перейти в форумы</a>
                            </div>
                        </div>
                    </div>

                    <!-- ДЗ -->
                    <div class="main-card">
                        <div class="div main-card-homework">
                            <div class="main-card-h3">
                                <h3>Дом. задания</h3>
                            </div><br>
    
                            <div class="main-card-HW">

                                <div class="main-card-cards">
                                    <h2>Матанализ</h2><br>
                                    <div class="main-card-cards_card">
                                        <div class="main-card-cards_card_card">
                                            <p>Выучить таблицу интегралов.</p>
                                        </div>
                                        
                                    </div>
                                </div>
    
                                <div class="main-card-cards">
                                    <h2>Матанализ</h2><br>
                                    <div class="main-card-cards_card">
                                        <div class="main-card-cards_card_card">
                                            <p>Выучить таблицу интегралов.</p>
                                        </div>
                                        
                                    </div>
                                </div>

                                
                            </div>
                            
                            <br><br>
    
                            <div class="main-card-btn">
                                <a href="homework.php">Перейти в домашнее задание</a>
                            </div>
                        </div>
                    </div>

                    <!-- Конспекты -->
                    <div class="main-card">
                        <div class="div main-card-conspect">
                            <div class="main-card-h3">
                                <h3>Конспекты</h3>
                            </div><br>
    
                            <div class="main-card-link">
                                <a href="conspect.php">ОАиП</a>
                                <a href="conspect.php">Проектирование и разработка веб-приложений</a>
                                <a href="conspect.php">Элементы высшей математики</a>
                                <a href="conspect.php">Основы проектирования баз данных</a>
                                <a href="conspect.php">Компьютерные сети</a>
                            </div><br><br>
    
                            <div class="main-card-btn">
                                <a href="conspect.php">Перейти в конспектам</a>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ -->
                    <div class="main-card">
                        <div class="div main-card-faq">
                            <div class="main-card-h3">
                                <h3>FAQ</h3>
                            </div><br>
    
                            <div class="main-card-link">
                                <a href="FAQ.php">Что такое Stud Clever?</a>
                                <a href="FAQ.php">Как я могу найти информацию о мероприятиях, проходящих в университете?</a>
                                <a href="FAQ.php">Какие услуги доступны на сайте-помощнике студента ДВФУ?</a>
                                <a href="FAQ.php">Могу ли я получить доступ к своему расписанию занятий через сайт?</a>
                                <a href="FAQ.php">Как я могу получить помощь или консультацию по учебным вопросам?</a>
                            </div><br><br>
    
                            <div class="main-card-btn">
                                <a href="FAQ.php">Найти ответ</a>
                            </div>
                        </div>
                    </div>  
                </div>

            </div>
        </div>
    </div><br>

    <?php require 'tpl/footer.php'; ?>
    
</body>
</html>

<script src="assets/js/swiper.js"></script>