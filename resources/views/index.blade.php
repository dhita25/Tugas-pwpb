
<!DOCTYPE html>
<html>
<head>
    <title>LIST BUKU</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <center> <h4>DATA BUKU</h4> </center>
            </div>
            <div class="panel-body">
                <table border="1" cellpadding="5" cellspacing="0" class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th>Kode Buku</th>
                            <th>Judul</th>
                            <th>author</th>
                            <th>penerbit</th>
                            <th>sipnosis</th>
                            <th>aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $key => $d)
                        <tr>
                            <td>{{ $d->kd_buku }}</td>
                            <td>{{ $d->Judul }}</td>
                            <td>{{ $d->Author }}</td>
                            <td>{{ $d->Penerbit }}</td>
                            <td>{{ $d->Sipnosis }}</td>
                            <td>
                                <a href="{{url('read',array($d->kd_buku))}}">Read</a>
                                <a href="{{url('delete',array($d->kd_buku))}}">Delete</a>
                                <a href="{{url('edit',array($d->kd_buku))}}">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <center>
                <form action="{{url('create')}}" method="get">
                    <div class="form-group">
                        <input type="submit" name="new" id="new" value="Entry Baru" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>