<html>
<head>
<title>Latihan Ajax</title>
{{HTML::style('assets/css/bootstrap.css')}}
{{HTML::script('assets/js/jquery-1.10.2.js')}}
{{HTML::script('assets/js/bootstrap.js')}}

<script>
$(function(){
   $("#hitung").click(function(){
   var alas=$("#alas").val();
   var tinggi=$("#tinggi").val();
  // alert(alas);

$.ajax({
  url:"{{URL::to('/form/hasil2')}}",
  type:"POST",
  data:"alas="+alas+"&tinggi="+tinggi,
  success:function(html){
       $("#tampil").html(html);
    }
   })
   })
})
</script>

</head>
<body>
<div class="container">
<legend>Menghitung Luas Segitiga</legend>
<div id="tampil"></div>
<div class="form-horizontal">
<div class="form-group">
<label class="col-lg-2 control-label">Alas</label>
<div class="col-lg-3">
<input class="form-control" type="text" id="alas">
</div>
</div>

<div class="form-group">
<label class="col-lg-2 control-label">Tinggi</label>
<div class="col-lg-3">
<input class="form-control" type="text" id="tinggi">
</div>
</div>

<div class="form-group well">
<label class="col-lg-2 control-label"></label>

<div class="col-lg-3">
<button class="btn btn-primary" id="hitung">Hitung </button>
</div>

</div>
</div>
</div>
</body>
</html>
