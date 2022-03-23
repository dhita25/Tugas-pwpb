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
                <center><h4>Tambah Data Baru</h4></center>
            </div>
            <div class="panel-body">
                <form action="{{url('insert')}}" method="post">
                    <!-- kd_buku
                    <div class="form-group">
                        <label for="kd">kd Buku</label>
                        <input type="text" name="kd" id="kd" class="form-control" required="require">
                    </div> -->
                    <!-- judul buku -->
                    <div class="form-group">
                        <label for="judul">Judul Buku</label>
                        <input type="text" name="judul" id="judul" class="form-control">
                    </div>    
                    <!-- author -->
                    <div class="form-group">
                        <label for="author">Author</label>
                        <input type="text" name="author" id="author" class="form-control">
                    </div> 
                    <!-- penerbit -->
                    <div class="form-group">
                        <label for="penerbit">penerbit</label>
                        <input type="text" name="penerbit" id="penerbit" class="form-control">
                    </div> 
                    <!-- sipnosis -->
                    <div class="form-group">
                        <label for="sipnosis">sipnosis</label>
                        <input type="text" name="sipnosis" id="sipnosis" class="form-control">
                    </div>                 
                    <!-- <div class="form-group">
                        <textarea id="sipnosis" name="sipnosis" class="form-control"></textarea>
                    </div> -->
                    
                    <div class="form-group">
                        <input type="submit" name="send" id="send" value="Simpan" class="btn btn-success">{!!csrf_field()!!}                       
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>