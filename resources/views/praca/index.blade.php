
<link rel="icon" href="{{asset('favicon.ico') }}" type="image/x-icon"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<style>
    .pt-3-half {
        padding-top: 1.4rem;
    }
</style>

<div class="card">
    <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Nashi v Katowice Praca</h3>
    <div class="card-body">
        <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i
                      class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
            <table class="table table-bordered table-responsive-md table-striped text-center">
                <thead>
                <tr>
                    <th class="text-center">stanowisko</th>
                    <th class="text-center">stawka w zł</th>
                    <th class="text-center">nazwa agencji lub firmy</th>
                    <th class="text-center">telefon</th>
                    <th class="text-center">show</th>
                    <th class="text-center">destroy</th>
                    <th class="text-center">edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($works as $work)
                <tr>
                    <td class="pt-3-half" contenteditable="true"><a href="{{route('praca.show', $work)}}">{{ $work->stanowisko }}</a></td>
                    <td class="pt-3-half" contenteditable="true">{{$work->stawka}}</td>
                    <td class="pt-3-half" contenteditable="true">{{$work->nazwa_agencji_firmy}}</td>
                    <td class="pt-3-half" contenteditable="true">{{$work->telefon}}</td>
                    <td>
                        @if(Auth::check())
                            <a href="{{route('praca.show', $work)}}" class="text-indigo-600 hover:text-indigo-900 px-3">Show</a>
                        @endif
                    </td>
                    <td>
                        @if(Auth::check())
                            <form method="POST" action="{{route('praca.destroy', $work)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" href="">Delete</button>
                            </form>
                        @endif
                    </td>
                    <td >
                        @if(Auth::check())
                            <a href="{{route('praca.edit', $work)}}" class="text-indigo-600 hover:text-indigo-900 px-3">Edit</a>
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