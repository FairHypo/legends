@extends('layout.mainlayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Панель</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Вы авторизованы! Тут появится всякая фигня по управлению профилем, загрузка аватарочки и т.д.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
