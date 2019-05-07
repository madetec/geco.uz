<?php
/**
 * Created by Madetec-Solution.
 * Developer: Mirkhanov Z.S.
 */
$this->title = 'Паркинг - решение для города и для тебя! Парковки, паркинги и стоянки в Узбекистане';

use yii\helpers\Url; ?>

<div class="content-wrapper">
    <section class="hero-section">
        <h2 class="hidden">Slider Section</h2>
        <div class="container">
            <div class="row">

                <div class="col-sm-12">
                    <div class="rev_slider_wrapper">
                        <div class="fullscreen_slider rev_slider" data-arrows="false">


                            <ul>
                                <li data-transition="fade">
                                    <img src="/img/parking/about/slider.jpg" alt="slide1" data-bgfit="cover" data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="110" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>


                                    <div class="tp-caption WhiteTtl px40 tp-resizeme"
                                         data-x="middle" data-hoffset="15"
                                         data-y="middle" data-voffset="-27"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:-150px;opacity:0;s:1000;e:Power4.easeOut;"
                                         data-transform_out="opacity:0;s:500;s:500;"
                                         data-start="1300"
                                         data-responsive_offset="on">Любая парковка
                                    </div>



                                    <div class="tp-caption WhiteTtl px40 tp-resizeme"
                                         data-x="middle" data-hoffset="15"
                                         data-y="middle" data-voffset="27"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:100px;opacity:0;s:1000;e:Power4.easeOut;"
                                         data-transform_out="y:0;opacity:0;s:300;e:Power4.easeIn;"
                                         data-start="2000"
                                         data-responsive_offset="on"
                                    >"ПОД КЛЮЧ"
                                    </div>
                                </li>
                            </ul>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features-section">
        <div class="container">
            <div class="row pull-up">
                <div class="col-sm-3">
                    <div class="feature-md">
                        <a href="<?= Url::to(['services/compact']) ?>">
                            <img src="/img/parking/about/compact.png" alt="feature img">
                        </a>
                        <h5><a href="<?= Url::to(['services/compact']) ?>">Компактный паркинг</a></h5>
                        <p>Парковочный подъёмник обеспечивает 2 машино-места, расположенных одно над другим. Нижний автомобиль паркуется непосредственно на полу гаража.</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature-md">
                        <a href="<?= Url::to(['services/puzzle']) ?>">
                            <img src="/img/parking/about/puzzle.png" alt="feature img">
                        </a>
                        <h5><a href="<?= Url::to(['services/puzzle']) ?>">Пазловый паркинг</a></h5>
                        <p>Двухуровневый пазловый паркинг — это готовые модули вместимостью от 5 до 29 машино-мест, устроенных по принципу матри- цы с одной свободной ячейкой.</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature-md">
                        <a href="<?= Url::to(['services/tower']) ?>">
                            <img src="/img/parking/about/tower.png" alt="feature img">
                        </a>
                        <h5><a href="<?= Url::to(['services/tower']) ?>">Башенный паркинг</a></h5>
                        <p>Механизированная парковка башенного типа - это многоуровневая самонесущая конструкция, которая имеет центральный подъёмник лифтового типа с одно - или двухкоординатным манипулятором.</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature-md">
                        <a href="<?= Url::to(['services/rack']) ?>">
                            <img src="/img/parking/about/rack.png" alt="feature img">
                        </a>
                        <h5><a href="<?= Url::to(['services/rack']) ?>">Стеллажный паркинг</a></h5>
                        <p>Устроен по принципу автоматизированного склада, состоящего из стеллажа с ячейками для хранения автомобилей на поддонах и трёхкоординатного манипулятора, осуществляющего операции по постановке и выдаче автомобиля.</p>
                    </div>
                </div>
            </div>

            <div class="section-header">
                <h5 class="subtitle">Наш партнер</h5>
                <h2>ООО «Неопарк»</h2>
                <span><i></i></span>
                <p>Российский производитель многоярусных механизированных парковочных систем. Мы предлагаем комплексные решения по организации парковочного пространства.</p>
                <p>Наша компания обеспечивает полный цикл работ, связанных с проектированием и строительством любых парковок: от обычных плоскостных, до многоуровневых пандусных и сложных автоматизированных систем парковки. Мы выполняем полный комплекс работ от разработки проектной документации до изготовления, поставки, гарантийного и сервисного обслуживания. Наши парковочные решения обеспечивают существенную экономию площадей, остро дефицитную в условиях мегаполисов.</p>
            </div>

            <div class="features-row">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="feature-box">
                            <i class="icon icon-pin-2"></i>
                            <h5 class="title">ЭКОНОМИЯ МЕСТА</h5>
                            <p class="description">По сравнению с традиционными парковками.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="feature-box">
                            <i class="icon icon-shield"></i>
                            <h5 class="title">БЕЗОПАСНОСТЬ</h5>
                            <p class="description">Защита от краж и вандализма.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="feature-box">
                            <i class="icon icon-credit-cards-payment"></i>
                            <h5 class="title">АВТОМАТИЗАЦИЯ</h5>
                            <p class="description">выдачи автомобиля по электронной карте, время ожидания не более 2-3 минут.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="feature-box">
                            <i class="icon icon-Thumbup"></i>
                            <h5 class="title">CОПРОВОЖДЕНИЕ</h5>
                            <p class="description">Сервисное обслуживание.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="feature-box">
                            <i class="icon icon-temperature"></i>
                            <h5 class="title">АДАПТАЦИЯ</h5>
                            <p class="description">К любому климату</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="feature-box">
                            <i class="icon icon-Target"></i>
                            <h5 class="title">ПРОЕКТИРОВАНИЕ</h5>
                            <p class="description">Под конкретные здания и условия заказчика.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>


