<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<link rel="icon" href="{{asset('favicon.ico') }}" type="image/x-icon"/>
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


<!-- component -->
<div class="bg-gray-200 min-h-screen pt-2 font-mono my-16">
    <div class="container mx-auto">
        <div class="inputs w-full max-w-2xl p-6 mx-auto">
            <h2 class="text-2xl text-gray-900">Edit article</h2>
            <form method="POST" action="{{route('posts.update', $post)}}"  class="mt-6 border-t border-gray-400 pt-4">
                @csrf
                @method('PATCH')
                <div class='flex flex-wrap -mx-3 mb-6'>
                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-text-1'>Title</label>
                        <input name="title" value="{{$post->title}}" class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='text' placeholder='Enter title'  required>
                    </div>

                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-text-1'>Category</label>
                        <input name="category" value="{{$post->category}}" class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='text' placeholder='Enter title'>
                    </div>

                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' >Description_1</label>
                        <textarea name="description_1" class='bg-gray-100 rounded-md border leading-normal resize-none w-full h-20 py-2 px-3 shadow-inner border border-gray-400 font-medium placeholder-gray-700 focus:outline-none focus:bg-white'>{{$post->description_1}}</textarea>
                    </div>

                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' >Description_2</label>
                        <textarea name="description_2" class='bg-gray-100 rounded-md border leading-normal resize-none w-full h-20 py-2 px-3 shadow-inner border border-gray-400 font-medium placeholder-gray-700 focus:outline-none focus:bg-white'>{{$post->description_2}}</textarea>
                    </div>

                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' >Description_3</label>
                        <textarea name="description_3" class='bg-gray-100 rounded-md border leading-normal resize-none w-full h-20 py-2 px-3 shadow-inner border border-gray-400 font-medium placeholder-gray-700 focus:outline-none focus:bg-white'>{{$post->description_3}}</textarea>
                    </div>

                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' >Description_4</label>
                        <textarea name="description_4" class='bg-gray-100 rounded-md border leading-normal resize-none w-full h-20 py-2 px-3 shadow-inner border border-gray-400 font-medium placeholder-gray-700 focus:outline-none focus:bg-white'>{{$post->description_4}}</textarea>
                    </div>

                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' >Under photo desciption</label>
                        <textarea name="under_photo_text" class='bg-gray-100 rounded-md border leading-normal resize-none w-full h-20 py-2 px-3 shadow-inner border border-gray-400 font-medium placeholder-gray-700 focus:outline-none focus:bg-white'>{{$post->under_photo_description}}</textarea>
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
                            <button type="submit"  class=" w-full bg-blue-600 shadow-lg text-white px-4 py-2 hover:bg-blue-700 mt-8 text-center font-semibold focus:outline-none ">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
