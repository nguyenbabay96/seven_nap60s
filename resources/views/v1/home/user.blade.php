<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<h2>Tài khoản</h2>
<table>
    <tr>
        <th>STT</th>
        <th>Tên tài khoản</th>
        <th>Mật khẩu</th>
        <th>Thời gian đăng nhập</th>
    </tr>
    @foreach($sql as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->taikhoan}}</td>
            <td>{{$item->matkhau}}</td>
            <td>{{$item->created_at}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
