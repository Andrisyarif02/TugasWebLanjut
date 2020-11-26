<html>
<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    
</head>
<body>
    <style type="text/css">
       .table1 {
            font-family: sans-serif;
            color: #444;
            border-collapse: collapse;
            width: 50%;
            border: 1px solid #f2f5f7;
        }

        .table1 tr th{
            background: #35A9DB;
            color: #fff;
            font-weight: normal;
        }

        .table1, th, td {
            padding: 8px 20px;
        }

        .table1 tr:hover {
            background-color: #f5f5f5;r;
        }

        .table1 tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    }
    </style>
    <center>
        <h5>Laporan Data User</h4>
    </center>
    <table class='table1'>
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
                <td><img width="100px" src="{{ public_path('storage/'.$b->image)}}" ></td>
                <td>{{$b->email}}</td>
                <td>{{$b->roles}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
