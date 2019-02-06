<link rel="stylesheet"
href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<h1>Masukan Nilai Segi Empat</h1>

<!-- tampilkan pesan jika terjadi kesalahan -->
@if(count($errors)>0)
<div class="alert alert-danger">
  <strong>Terdapat beberapa kesalahan harus diperbaiki:</strong><br>
  {!!Html::ul($errors->all())!!}

</div>
@endif

{!!Form::open(array('url'=>'segi-empat/hasil'))!!}
<div class="form-group">
{!!Form::label('panjang','Panjang')!!}
{!!Form::text('panjang',null,array('class'=>'form-control'))!!}
</div>
<div class="form-group">
  {!!Form::label('lebar','Lebar')!!}
  {!!Form::text('lebar',null,array('class'=>'form-control'))!!}

</div>

{!!Form::submit('Proses>>',array('class'=>'btn btn-primary'))!!}
{!!Form::close()!!}
