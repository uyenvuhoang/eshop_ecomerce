<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Mail Support</title>
</head>

<style>
    .container {
        padding: 5%;
    }

    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
        vertical-align: top;
        border-color: #dee2e6;
        border-collapse: collapse
    }
    td{
        padding: 10px;
    }
   
    .card-header{
        padding: 0.3rem 0;
    }
    .text-center {
        text-align: center !important;
    }

    .text-white {
        color: #fff !important;
    }
</style>

<body>
    <div class="container mt-5 mx-auto">
        <div class="card-header" style="background: #7859DF">
            <h2 class="text-center text-white">Support message</h2>
        </div>
        <table class="table table-bordered" border="1">
            <tr>
                <td><strong>Name: </strong></td>
                <td> {{ $data['name'] ?? 'name' }}</td>
            </tr>
            <tr>
                <td><strong>Email: </strong></td>
                <td>{{ $data['email'] ?? 'email' }}</td>
            </tr>
            <tr>
                <td><strong>Phone: </strong></td>
                <td>{{ $data['phone'] ?? 'phone' }}</td>
            </tr>
            <tr>
                <td><strong>Message: </strong></td>
                <td>{{ $data['message'] ?? 'message' }}</td>
        </table>
        </tr>
    </div>

</html>
