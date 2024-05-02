<?php require '../tpl/header.php'; ?><br>
<div class="main">
    <div class="main-container">
        <div class="main-profile">
            <div class="main-profile-title">
                <h2>Егоров Артем Андреевич</h2>
                <p>09.03.04 Программная инженерия, Очная, Институт математики и компьютерных технологий(Школа)</p><br>
                <a href="login.php">Выход из аккаунта</a>
            </div><br>

            <div class="main-profile-infoAccount">
                <div class="main-profile-card">
                    <div class="main-profile-img"><img src="../assets/img/card/avatar_profile.png" alt=""></div>
                    <div class="main-profile-txt">
                        <p>Логин</p>
                        <p>Дата рождения:</p>
                        <p>Пол:</p>
                        <p>Электронная почта ДВФУ:</p>
                        <p>Внутренний телефон:</p>
                        <p>Личный адрес:</p>
                    </div>
                    <div class="main-profile-infoTxt">
                        <p>egorov.aandr</p>
                        <p>13.12.2005</p>
                        <p>Мужской</p>
                        <p>PisunBobra228@gmail.com</p>
                        <p>-</p>
                        <p>VseeschePisunBobra228@gmail.com</p>
                    </div>
                </div>

                <div class="main-profile-dashboard main-profile-infoAccount">
                    <h3>Статистика посещения форумов</h3>
                    <div class="dashboard-container">
                        <div class="dashboard-cell">
                            <div class="main-profile-infoAccount">
                                <div class="legend-container">
                                    <div class="dot-point-cont">
                                        <div class="dot-point" style="--color:var(--cl-green)"></div>
                                    </div>
                                    <p>Учёба и Академическая Помощь</p>
                                    <h3>32</h3>
                                </div>
                                <div class="legend-container">
                                    <div class="dot-point-cont">
                                        <div class="dot-point" style="--color:var(--cl-blue)"></div>
                                    </div>
                                    <p>Студенческий Ум</p>
                                    <h3>54</h3>
                                </div>
                                <div class="legend-container">
                                    <div class="dot-point-cont">
                                        <div class="dot-point" style="--color:var(--cl-grey)"></div>
                                    </div>
                                    <p>Объявления Университета</p>
                                    <h3>5</h3>
                                </div>
                                <div class="legend-container">
                                    <div class="dot-point-cont">
                                        <div class="dot-point" style="--color:var(--cl-black)"></div>
                                    </div>
                                    <p>Студенческая жизнь</p>
                                    <h3>78</h3>
                                </div>
                                <div class="legend-container">
                                    <div class="dot-point-cont">
                                        <div class="dot-point" style="--color:var(--cl-orange)"></div>
                                    </div>
                                    <p>Общие вопросы и обсуждения</p>
                                    <h3>41</h3>
                                </div>
                                <div class="legend-container">
                                    <div class="dot-point-cont">
                                        <div class="dot-point" style="--color:var(--cl-red)"></div>
                                    </div>
                                    <p>Творчество и Хобби</p>
                                    <h3>5</h3>
                                </div>
                                <div class="legend-container">
                                    <div class="dot-point-cont">
                                        <div class="dot-point" style="--color:var(--cl-purple)"></div>
                                    </div>
                                    <p>Общие вопросы и обсуждения</p>
                                    <h3>29</h3>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-cell">
                            <div class="circle-container">
                                <div class="graph-label-container">
                                </div>
                                <div id="cirle_graph_&01" class="graph" title="Статистика">
                                    <!-- Круговая диаграмма -->
                                </div>
                            </div>                        
                        </div>
                        <div class="dashboard-cell">
                            <div class="statistic-container">
                                <p style="padding-bottom: 20px">Общее количество заданных вами вопросов:</p>
                                <h1>25</h1>
                            </div>
                            <div class="statistic-container">
                                <p style="padding-bottom: 20px">Общее количество посещённых форумов:<p>
                                <h1>244</h1>
                            </div>
                            <div class="statistic-container">
                                <p style="padding-bottom: 20px">Количество часов на форумах</p>
                                <h1>64ч.</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<script src="../assets/js/dashboard.js"></script>