<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<link rel="icon" href="{{asset('favicon.ico') }}" type="image/x-icon"/>

<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                    <tr>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Title
                        </th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Author
                        </th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Status
                        </th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">

                        </th>
                        <th class="px-6 py-3 bg-gray-50"></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($indeks as $indek)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-12 w-12">
                                        <img class="h-13 w-13 rounded-full" src="" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-xl leading-5 font-medium text-gray-900">
                                            <a href="{{route('indeks.show', $indek)}}">{{substr($indek->header_reklamacja, 0, 50)}} ... </a>
                                        </div>
                                        <div class="text-lg leading-5 text-gray-500">

                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap">
                                <div class="text-sm leading-5 text-gray-900">{{$indek->header_block_1}}</div>
                                <div class="text-sm leading-5 text-gray-500">{{ $indek->header_block_2 }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  active
                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">

                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                @if(Auth::check())
                                    <a href="{{route('indeks.show', $indek)}}" class="text-indigo-600 hover:text-indigo-900 px-3">Show</a>
                                @endif
                                @if(Auth::check())
                                    <a href="{{route('indeks.edit', $indek)}}" class="text-indigo-600 hover:text-indigo-900 px-3">Edit</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    <!-- More rows... -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



