<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>

    <h1>Data Payments</h1>

    <table id="customers">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Invoice Number</th>
            <th scope="col">Project</th>
            <th scope="col">Amount</th>
            <th scope="col">Paid On</th>
        </tr>
        @php
            $no = 1;
        @endphp
        @foreach ($data as $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->payments_number }}</td>
                <td>{{ $row->select_project }}</td>
                <td>{{ $row->amount }}</td>
                <td>{{ $row->paid_on }}</td>
        @endforeach
    </table>

</body>

</html>
