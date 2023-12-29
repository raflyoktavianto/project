<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Varela Round', sans-serif;
            margin: 0;
            padding: 0;
            color: #e9ecef; /* Light text color */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #F0FFFF; /*background color */
        }

        .card {
            width: 80%;
            max-width: 400px;
            background-color: #6495ED; /*  background color */
            color: #e9ecef;
            margin: auto;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none; /* Remove the outline */
        }

        .card-header {
            background-color: #6495ED; /* Cornflower Blue header color */
            color: #e9ecef; /* Light text color */
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            padding: 15px;
        }

        .form-control {
            border: 1px solid #495057;
            border-radius: 15px;
            margin-bottom: 10px;
            color: #e9ecef;
            background-color: #DCDCDC; /*  background color for input */
        }

        .btn-primary {
            background-color: #E6E6FA; /* Light Purple button color */
            border-color: #778899;
            color: #778899;
            border-radius: 15px;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #E6E6FA; /* Slightly darker on hover */
            border-color: #E6E6FA;
        }
    </style>
</head>
<body>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container mt-4">
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            Data Mahasiswa
        </div>
        <div class="card-body">
            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('save')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" id="nim" name="nim" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="nama">NAMA</label>
                    <input type="text" id="nama" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="umur">UMUR</label>
                    <input type="text" id="umur" name="umur" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="alamat">ALAMAT</label>
                    <textarea name="alamat" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="email">EMAIL</label>
                    <input type="text" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="foto">Upload Foto</label>
                    <input type="file" id="foto" name="foto" class="form-control-file">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
