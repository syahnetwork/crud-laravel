<!-- resources/views/kota/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>

  @extends('default')
  @section('content')
  <br>
  <div class="row">
    <div class="col-lg-12 margin-tb">



    <div class="pull-left">
      <h2 class="fa fa-check-square-o text-center" style="font-size:28px;">Tabel Rekaman Kota</h2>
    </div>
    <div class="pull-right">
      <a href="{{route('kota.create')}}" class="btn btn-primary btn-xs">Tambah</a>

    </div>
    </div>
  </div>

  <!-- show any messages -->
  @if(Session::has('message'))
  <div class="alert alert-info">{{Session::get('message')}}

  </div>
  @endif

  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>ID Provinsi</th>
        <th>Nama Kota</th>
        <th>Action</th>
      </tr>
    </thead>

      <tbody>
        @foreach($kota as $key=>$value)
        <tr>
          <td>{{$value->id}}</td>
          <td>{{$value->id_propinsi}}</td>
          <td>{{$value->nama_kota}}</td>
          <td>
            <form class="" action="{{route('kota.destroy',$value->id)}}" method="post">
              {{csrf_field()}}
              {{method_field('DELETE')}}
              <!-- error sampe sini -->
              <a href="{{route('kota.edit',$value->id)}}" <button class="btn btn-sm btn-primary">Edit</button></a>
              <button onclick="return confirm('yakin ingin menghapus kota : {{$value->nama_kota}}..........?')" class="btn btn-sm btn-danger">Delete</button>

            </form>
          </td>
        </tr>
        @endforeach
      </tbody>

  </table>
  <?php echo str_replace('/?','?',$kota->render()); ?>
  @endsection

</body>
</html>
