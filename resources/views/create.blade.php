
@section('content')  
<!DOCTYPE html>
<html>
  
<head>
    <title>Criar contato</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.scss')}}">
        <script src="{{asset('js/app.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Criar Contato
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="/register">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Nome</label>
          <input 
              type="text" 
              id="fullName" 
              name="fullName" 
              class="form-control @error('fullName') is-invalid  @enderror"
              value="{{old('fullName')}}"
          >
        @error('fullName')
        <span class='invalid-feedback' role='alert'>
            {{$message}}
        </span>
        @enderror
        </div>
        
        <div class="form-group">
          <label for="exampleInputEmail1">Telefone</label>
          <input 
              type="text"  
              id="phoneNumber" 
              name="phoneNumber" 
              class="form-control @error('phoneNumber') is-invalid  @enderror"
          >
        </input>
              @error('phoneNumber')
              <span class='invalid-feedback' role='alert'>
                  {{$message}}
              </span>
              @enderror
        </div>
        <button type="submit" class="btn btn-primary form-control">Submit</button>
      </form>
    </div>
    
      @section('content-list')
        @endsection
      @yield('content-list')
  </div>

</div> 
</body>
</html>

@endsection  

@yield("content")