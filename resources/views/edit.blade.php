<!DOCTYPE html>
<html>
<head>
    <title>CRUD Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <center><h4>Edit Buku</h4></center>
            </div>
            <div class="panel-body">
                <form action="{{url('update', $data->kd_buku)}}" method="post">
                    <!-- <input type="hidden" name="id" id="id" value="{{$data->id}}"> -->
                    <div class="form-group">
                        <label for="kd_buku">kd_Buku</label>
                        <input type="text" name="kd_buku" id="kd_buku" value="{{$data->kd_buku}}" class="form-control" >
                    <!-- judul buku -->
                    <div class="form-group">
                        <label for="judul">judul Buku</label>
                        <input type="text" name="judul" id="judul" value="{{$data->Judul}}" class="form-control">
                    </div>    
                    <!-- Author -->
                    <div class="form-group">
                        <label for="author">author</label>
                        <input type="text" name="author" id="author" value="{{$data->Author}}" class="form-control">
                    </div>   
                    <!-- sipnosis -->
                    <div class="form-group">
                        <label for="sipnosis">sipnosis Buku</label>
                        <input type="text" name="sipnosis" id="sipnosis" value="{{$data->Sipnosis}}" class="form-control">
                    </div>         
                    <!-- penerbit -->
                    <div class="form-group">
                        <label for="penerbit">penerbit</label>
                        <input type="text" name="penerbit" id="penerbit" value="{{$data->Penerbit}}" class="form-control">
                    </div>  
                    <div class="form-group">
                        <input type="submit" name="send" id="send" value="Simpan" class="btn btn-success">{!!csrf_field()!!}                       
                    </div>
            </div>
        </div>
    </div>
</body>
</html>