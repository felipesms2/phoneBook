

@extends('create')


@section('content-list')
<div class="container">
<table class="table text-center">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>




@foreach ($person as $item)
    
<tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->fullName}}</td>
      <td>{{$item->phoneNumber}}</td>
      <td>
        <form method="post">
            @csrf
            
            <button class='btn btn-sm btn-primary'><i data-feather="edit"></i></button>
            <button class='btn btn-sm btn-danger'><i data-feather="trash-2"></i></button>
        </form>
      </td>
    </tr>
@endforeach
</tbody>
</table>
<script>
      feather.replace()
</script>
</div>
@endsection



