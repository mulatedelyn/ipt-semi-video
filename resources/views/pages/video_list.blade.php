@extends('layouts.app')
@section('content')

<div class="container mt-1">
    <table class="table border table-striped">
        <thead class="bg-primary">
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Duration</th>
            <th scope="col">Rating</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($video as $list)
                <tr>
                    <td>{{ $list->title }}</td>
                    <td>{{ $list->description }}</td>
                    <td>{{ $list->duration }}</td>
                    <td>{{ $list->rating }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>

</div>




@endsection
