<html>
<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>
    <style type="text/css">
        table tr td,
        table tr th{
        font-size: 9pt;
        }
    </style>
    <center>
        <h5>Laporan User</h4>
    </center>
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>Name</th>
                <th>Profil</th>
                <th>Email</th>
                <th>Roles</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($users as $b)
            <tr>
                <td>{{$b->name}}</td>
                <td><img width="200px" src="{{ public_path('storage/'.$b->image)}}" ></td>
                <td>{{$b->email}}</td>
                <td>{{$b->roles}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
