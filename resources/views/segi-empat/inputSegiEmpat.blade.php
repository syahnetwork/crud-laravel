
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<h1>Masukan Nilai Segi Empat</h1>

<!-- tampilkan pessan jika terjadi kesalahan -->
@if (count( $errors ) > 0)
 <div class="alert alert-danger">
   <strong>Terdapat beberapa kasalahan harus diperbaiki:</strong><br>
   {!! Html::ul($errors->all()) !!}
</div>
@endif

{!! Form::open(array('url' => 'segi-empat/hasil')) !!}

  <div class="row">

    <div class="form-group col-sm-6" >
        {!! Form::label('panjang', 'Panjang') !!}
        {!! Form::text('panjang',null, array('class' => 'form-control')) !!}
    </div>
  </div>
  <div class="row">


    <div class="form-group col-sm-6">
        {!! Form::label('lebar', 'Lebar') !!}
        {!! Form::text('lebar',null, array('class' => 'form-control')) !!}
    </div>
    </div>

 {!! Form::submit('Proses >>', array('class' => 'btn btn-primary')) !!}
 {!! Form::close() !!}
