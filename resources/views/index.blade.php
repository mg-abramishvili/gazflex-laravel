@extends('layouts.main')

@section('content')
    <h5 class="title-head mt-0">Новости</h5>
    <div class="index-news">
        <div class="index-news-item-big">
            <a href="#">
                <div class="index-news-item-big-image" style="background-image: url(/img/news-6884-27199.jpg);"></div>
                <p>«ОДК-УМПО» представляет на Петербургском международном газовом форуме индустриальный двигатель АЛ-31СТ</p>
                <span>15 сентября</span>
            </a>
        </div>
        <div class="index-news-items-small">
            <div class="index-news-item">
                <a href="#">
                    <span><i>24</i> авг</span>
                    <p>ООО «Газпром трансгаз Уфа» – в числе лучших обучающих организаций по охране труда</p>
                </a>
            </div>
            <div class="index-news-item">
                <a href="#">
                    <span><i>23</i> авг</span>
                    <p>СМИ о газовом рынке (обзор публикаций 22.08.2022)</p>
                </a>
            </div>
            <div class="index-news-item">
                <a href="#">
                    <span><i>22</i> авг</span>
                    <p>В деревню Тутагачево Балтачевского района пришел газ</p>
                </a>
            </div>
            <div class="index-news-item">
                <a href="#">
                    <span><i>18</i> авг</span>
                    <p>ООО «Газпром трансгаз Уфа» – в числе лучших обучающих организаций по охране труда</p>
                </a>
            </div>
            <div class="index-news-item">
                <a href="#">
                    <span><i>15</i> авг</span>
                    <p>СМИ о газовом рынке (обзор публикаций 22.08.2022)</p>
                </a>
            </div>
            <div class="index-news-item">
                <a href="#">
                    <span><i>12</i> августа</span>
                    <p>В деревню Тутагачево Балтачевского района пришел газ</p>
                </a>
            </div>
        </div>
        <div class="index-news-more-button">
            <a href="/novosti">Все новости &rarr;</a>
        </div>
    </div>

    <div class="index-poll">
        <p>
            <strong>Опрос</strong>
            Какая информация нужна и важна?
        </p>
        <div class="index-poll-button">
            <a href="#" class="btn btn-standard">Участвовать</a>
        </div>
    </div>

    <h5 class="title-head mt-0">Фотогалерея</h5>
    <div class="index-galleries">
        <div class="index-galleries-item">
            <a href="#">
                <div class="index-galleries-item-image" style="background-image: url(/img/galleries-57-1613.jpg);"></div>
                <p>
                    <small>30.06.2021</small>
                    Детский конкурс рисунков Службы корпоративной защиты «Я рисую этот мир»
                </p>
            </a>
        </div>
        <div class="index-galleries-item">
            <a href="#">
                <div class="index-galleries-item-image" style="background-image: url(/img/galleries-56-1596.jpg);"></div>
                <p>
                    <small>30.06.2021</small>
                    Детский конкурс рисунков Службы корпоративной защиты «Я рисую этот мир»
                </p>
            </a>
        </div>
        <div class="index-galleries-item">
            <a href="#">
                <div class="index-galleries-item-image" style="background-image: url(/img/galleries-54-1580.jpg);"></div>
                <p>
                    <small>30.06.2021</small>
                    Детский конкурс рисунков Службы корпоративной защиты «Я рисую этот мир»
                </p>
            </a>
        </div>
        <div class="index-galleries-item">
            <a href="#">
                <div class="index-galleries-item-image" style="background-image: url(/img/galleries-51-1486.jpg);"></div>
                <p>
                    <small>30.06.2021</small>
                    Детский фотоконкурс Службы корпоративной защиты «Счастливые моменты лета»
                </p>
            </a>
        </div>
        <div class="index-galleries-more-button">
            <a href="/galleries">Все фотоальбомы &rarr;</a>
        </div>
    </div>
@endsection