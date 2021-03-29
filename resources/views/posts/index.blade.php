
<link rel="icon" href="{{asset('favicon.ico') }}" type="image/x-icon"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<style>
    .pt-3-half {
        padding-top: 1.4rem;
    }
</style>

<div class="card">
    <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Nashi v Katowice Posts</h3>
    <div class="card-body">
        <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i
                      class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
            <table class="table table-bordered table-responsive-md table-striped text-center">
                <thead>
                <tr>
                    <th class="text-center">Title</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Show</th>
                    <th class="text-center">Destroy</th>
                    <th class="text-center">Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td class="pt-3-half" ><a href="{{route('posts.show', $post)}}">{{substr($post->title, 0, 50)}} ... </a></td>
                        <td class="pt-3-half" >{{$post->name}}</td>
                        <td class="pt-3-half" >{{ $post->email }}</td>
                        <td class="pt-3-half" >{{$post->status}}</td>
                        <td>
                            @if(Auth::check())
                                <a href="{{route('posts.show', $post)}}" class="text-indigo-600 hover:text-indigo-900 px-3">Show</a>
                            @endif
                        </td>
                        <td>
                            @if(Auth::check())
                                <form method="POST" action="{{route('posts.destroy', $post)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" href="">Delete</button>
                                </form>
                            @endif
                        </td>
                        <td >
                            @if(Auth::check())
                                <a href="{{route('posts.edit', $post)}}" class="text-indigo-600 hover:text-indigo-900 px-3">Edit</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Editable table -->

<script>
    const $tableID = $('#table');
    const $BTN = $('#export-btn');
    const $EXPORT = $('#export');

    const newTr = `
<tr class="hide">
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half" contenteditable="true">Example</td>
  <td class="pt-3-half">
    <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i></a></span>
    <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down" aria-hidden="true"></i></a></span>
  </td>
  <td>
    <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0 waves-effect waves-light">Remove</button></span>
  </td>
</tr>`;

    $('.table-add').on('click', 'i', () => {

        const $clone = $tableID.find('tbody tr').last().clone(true).removeClass('hide table-line');

        if ($tableID.find('tbody tr').length === 0) {

            $('tbody').append(newTr);
        }

        $tableID.find('table').append($clone);
    });

    $tableID.on('click', '.table-remove', function () {

        $(this).parents('tr').detach();
    });

    $tableID.on('click', '.table-up', function () {

        const $row = $(this).parents('tr');

        if ($row.index() === 0) {
            return;
        }

        $row.prev().before($row.get(0));
    });

    $tableID.on('click', '.table-down', function () {

        const $row = $(this).parents('tr');
        $row.next().after($row.get(0));
    });

    // A few jQuery helpers for exporting only
    jQuery.fn.pop = [].pop;
    jQuery.fn.shift = [].shift;

    $BTN.on('click', () => {

        const $rows = $tableID.find('tr:not(:hidden)');
        const headers = [];
        const data = [];

        // Get the headers (add special header logic here)
        $($rows.shift()).find('th:not(:empty)').each(function () {

            headers.push($(this).text().toLowerCase());
        });

        // Turn all existing rows into a loopable array
        $rows.each(function () {
            const $td = $(this).find('td');
            const h = {};

            // Use the headers from earlier to name our hash keys
            headers.forEach((header, i) => {

                h[header] = $td.eq(i).text();
            });

            data.push(h);
        });

        // Output the result
        $EXPORT.text(JSON.stringify(data));
    });
</script>
