@extends('layout.mainlayout')

@section('content')

<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Страница не найдена!</h1>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="error-page-wrapper">
                    <p>Извините. Страница, которую вы ищете, отсутствует или никогда не существовала</p>
                    <p><a href="{{ route('index') }}">На главную</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection