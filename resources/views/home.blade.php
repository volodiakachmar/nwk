
@extends('layouts.app')
<link rel="icon" href="{{asset('favicon.ico') }}" type="image/x-icon"/>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div role="group" aria-label="Basic example">
                            <button onclick="relocate_write_article()" type="button" class="btn btn-secondary">Написать статью</button>
                            <button onclick="relocate_write_work()" type="button" class="btn btn-secondary">Написать вакансию</button>
                            <button onclick="relocate_write_event()" type="button" class="btn btn-secondary">Написать собитие</button>
                            <button onclick="relocate_write_indeks()" type="button" class="btn btn-secondary">Индекс файл</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    function relocate()
    {
        location.href = "{{asset("/")}}";
    }
    function relocate_write_article()
    {
        location.href = "{{asset("posts/create")}}";
    }
    function relocate_write_work()
    {
        location.href = "{{asset("praca/create")}}";
    }
    function relocate_write_event()
    {
        location.href = "{{asset("events/create")}}";
    }
    function relocate_write_indeks()
    {
        location.href = "{{asset("indeks/update")}}";
    }
</script>

