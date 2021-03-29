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
                <form method="POST" action="{{route('praca.store')}}" class="row g-3 container-fluid" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <label for="validationDefault01" class="form-label">Miasto</label>
                        <input name="miasto" type="text" class="form-control" id="validationDefault01" placeholder='Enter miasto' required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Stawka</label>
                        <input name="stawka" type="text" class="form-control" id="validationDefault02" placeholder='Enter stawka' required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Stanowisko</label>
                        <input name="stanowisko" type="text" class="form-control" id="validationDefault02" placeholder='Enter stanowisko' required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Nazwa agencji lub firmy</label>
                        <input name="nazwa_agencji_firmy" type="text" class="form-control" id="validationDefault02" placeholder='Enter nazwa_agencji_firmy' required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">O pracy</label>
                        <textarea name="o_pracy" class="form-control" id="validationTextarea" placeholder='Enter o_pracy' required></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Mieszkanie</label>
                        <input name="mieszkanie" type="text" class="form-control" id="validationDefault02" placeholder='Enter mieszkanie' required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Telefon</label>
                        <input name="telefon" type="text" class="form-control" id="validationDefault02" placeholder='Enter telefon' required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Typ umowy</label>
                        <input name="typ_umowy" type="text" class="form-control" id="validationDefault02" placeholder='Enter typ_umowy' required>
                    </div>

                    <div class="flex w-full jpx-3 mb-6 bg-grey-lighter justify-center">
                        <label class="w-30 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-grey">
                            <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                            </svg>
                            <span class="mt-2 text-base leading-normal">Select photo for title section</span>
                            <input type='file' name="work_link" class="hidden" />
                        </label>
                    </div>

                    <div class="col-md-6">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

