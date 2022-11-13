@extends('layouts.main')

@section('content')
    <h5 class="title-head mt-0">Телефонный справочник</h5>
    <div class="telsp">
        <ul class="telsp-nav">
            <li class="active">
                <a href="#">Работники</a>
            </li>
            <li>
                <a href="#">Подразделения</a>
            </li>
            <li>
                <a href="#">Организации</a>
            </li>
            <li>
                <a href="#">Совет директоров</a>
            </li>
            <li>
                <a href="#">Справки</a>
            </li>
        </ul>
        <div class="search-form">
            <input type="text" placeholder="Иван Петров">
            <button class="btn-standard">Найти</button>
        </div>
    </div>
@endsection