@include('inc.header')

<div class="main">

    <div class='success-box'>

        <div class='text-message'>Благодарим Ви! Вашият глас беше записан.</div>

    </div>

    <div class="container">
@yield('content')
    </div>
</div>
@include('inc.footer')