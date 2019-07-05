@component('mail::message')
    <h1 class="font-weight-bold">Заявка  с сайта green:</h1><br>
    <h2>Имя: {{$data['name']}}</h2><br>
    <h2>Email: {{$data['email']}}</h2><br>
    <h2>Тема: {{$data['theme']}}</h2><br>
    <h2>Сообщение</h2>
    {{$data['message']}}

@endcomponent
