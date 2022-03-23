<!DOCTYPE html>
<html>
<head>
    <title>CRUD Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>CRUD Laravel</h4>
            </div>
            <div class="panel-body">
                    <!-- <input type="hidden" name="id" id="id" value="{{$data->id}}"> -->
                    <div class="form-group">
                        <label for="kode">kd Buku</label>
                        <input type="text" name="kd" id="kd" value="{{$data->kd_buku}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul Buku</label>
                        <input type="text" name="judul" id="judul" value="{{$data->Judul}}" class="form-control" readonly>
                    </div>                    
                    <div class="form-group">    
                        <label for="author">author</label>    
                        <input type="text" name="author" id="author" value="{{$data->Author}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">    
                        <label for="sipnosis">sipnosis</label>    
                        <input type="text" name="sipnosis" id="sipnosis" value="{{$data->Sipnosis}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">    
                        <label for="penerbit">penerbit</label>    
                        <input type="text" name="penerbit" id="penerbit" value="{{$data->Penerbit}}" class="form-control" readonly>
                    </div>
                    <form action="{{url('back')}}" method="get">
                        <div class="form-group">
                            <input type="submit" value="Back" class="btn btn-success">
                        </div>
                    </form>
            </div>
        </div>
    </div>
</body>
</html>