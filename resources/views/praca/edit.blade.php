<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="icon" href="{{asset('favicon.ico') }}" type="image/x-icon"/>

<style>
    .button-wrapper .btn {
        margin: 20px 0px;
    }
    .button-wrapper {
        display: flex;
        flex-flow: column wrap;
        justify-content: space-around;
    }
    a.btn>span.glyphicon {
        margin-left: 12px;
    }
    @media (min-width: 520px) {
        .button-wrapper {
            align-items: center;
            flex-flow: row wrap;
            -ms-flex-flow: row wrap;
            -webkit-flex-flow: row wrap;
        }
        .btn-container-center>a.btn {
            margin-left: 12px;
            margin-right: 12px;
        }
        .btn-container-center>a.btn:first-of-type {
            margin-left: 0;
        }
        .btn-container-center>a.btn:last-of-type {
            margin-right: 0;
        }
        .btn-container-left>a.btn {
            margin-left: 12px;
            margin-right: 12px;
        }
        .btn-container-left>a.btn:first-of-type {
            margin-left: 0;
        }
        .btn-container-left>a.btn:last-of-type {
            margin-right: 0;
        }
        .btn-container-right>a.btn {
            margin-left: 12px;
            margin-right: 12px;
        }
        .btn-container-right>a.btn:first-of-type {
            margin-left: 0;
        }
        .btn-container-right>a.btn:last-of-type {
            margin-right: 0;
        }
        .btn-container-stretch>a.btn {
            margin-left: 12px;
            margin-right: 12px;
        }
        .btn-container-stretch>a.btn:first-of-type {
            margin-left: 0;
        }
        .btn-container-stretch>a.btn:last-of-type {
            margin-right: 0;
        }
        .btn-fill-space .btn {
            margin: 20px;
            flex-grow: 1;
            transition-duration: 0.2s;
        }
        .btn-fill-space .btn:hover {
            flex-grow: 1.6;
        }
    }
</style>

<div class="container">
    <div class="row">
        <div class="row content">
            <div class="col-md-12">
                <div class="button-wrapper btn-fill-space">
                    <a class="btn btn-lg btn-success" href="{{route('posts.create')}}">Create article<span class="glyphicon glyphicon-align-right"></span></a>
                    <a class="btn btn-lg btn-success" href="{{route('events.create')}}">Create event<span class="glyphicon glyphicon-align-right"></span></a>
                    <a class="btn btn-lg btn-success" href="{{route('indeks.create')}}">Change indeks file<span class="glyphicon glyphicon-align-right"></span></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="row content">
            <div class="col-md-12">
                <form method="POST" action="{{route('praca.update', $work)}}" class="row g-3 container-fluid" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="col-md-6">
                        <label for="validationDefault01" class="form-label">Miasto</label>
                        <input value="{{$work->miasto}}" name="miasto" type="text" class="form-control" id="validationDefault01" placeholder='Enter miasto' required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Stawka</label>
                        <input value="{{$work->stawka}}" name="stawka" type="text" class="form-control" id="validationDefault02" placeholder='Enter stawka' required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Stanowisko</label>
                        <input value="{{$work->stanowisko}}" name="stanowisko" type="text" class="form-control" id="validationDefault02" placeholder='Enter stanowisko' required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Nazwa agencji lub firmy</label>
                        <input value="{{$work->nazwa_agencji_firmy}}" name="nazwa_agencji_firmy" type="text" class="form-control" id="validationDefault02" placeholder='Enter nazwa_agencji_firmy' required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">O pracy</label>
                        <textarea name="o_pracy" class="form-control" id="validationTextarea" placeholder='Enter o_pracy' required>{{$work->o_pracy}}</textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Mieszkanie</label>
                        <input value="{{$work->mieszkanie}}" name="mieszkanie" type="text" class="form-control" id="validationDefault02" placeholder='Enter mieszkanie' required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Telefon</label>
                        <input value="{{$work->telefon}}" name="telefon" type="text" class="form-control" id="validationDefault02" placeholder='Enter telefon' required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Typ umowy</label>
                        <input value="{{$work->typ_umowy}}" name="typ_umowy" type="text" class="form-control" id="validationDefault02" placeholder='Enter typ_umowy' required>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


