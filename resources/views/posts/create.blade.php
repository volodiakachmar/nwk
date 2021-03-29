<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

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
                    <a class="btn btn-lg btn-success" href="../indeks/0/edit">Change indeks file<span class="glyphicon glyphicon-align-right"></span></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="row content">
            <div class="col-md-12">
                <form method="POST" action="{{route('posts.store')}}" class="row g-3 container-fluid" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <label for="validationDefault01" class="form-label">Title</label>
                        <input name="title" type="text" class="form-control" id="validationDefault01" placeholder='Enter title' required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Category</label>
                        <input name="category" type="text" class="form-control" id="validationDefault02" placeholder='Enter Category' required>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">description_1</label>
                        <textarea name="description_1" class="form-control" id="validationTextarea" placeholder='description_1' required></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">description_2</label>
                        <textarea name="description_2" class="form-control" id="validationTextarea" placeholder='description_2' required></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">description_3</label>
                        <textarea name="description_3" class="form-control" id="validationTextarea" placeholder='description_3' required></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">description_4</label>
                        <textarea name="description_4" class="form-control" id="validationTextarea" placeholder='description_4' required></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Under_photo_text</label>
                        <textarea name="under_photo_text" class="form-control" id="validationTextarea" placeholder='under_photo_text' required></textarea>
                    </div>
                    <div class="flex w-full jpx-3 mb-6 bg-grey-lighter justify-center">
                        <label class="w-30 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-grey">
                            <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                            </svg>
                            <span class="mt-2 text-base leading-normal">Select photo for title section</span>
                            <input type='file' name="image_1_title" class="hidden" />
                        </label>
                    </div>

                    <div class="flex w-full   jpx-3 mb-6 bg-grey-lighter justify-center">
                        <label class="w-30 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-grey">
                            <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                            </svg>
                            <span class="mt-2 text-base leading-normal">Select photo for below title section</span>
                            <input type='file' name="image_2_below_title" class="hidden" />
                        </label>
                    </div>
                    <div class="personal w-full border-t border-gray-400 pt-4">
                        <div class="submit">
                            <button type="submit"  class=" w-full bg-blue-600 shadow-lg text-white px-4 py-2 hover:bg-blue-700 mt-8 text-center font-semibold focus:outline-none">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

