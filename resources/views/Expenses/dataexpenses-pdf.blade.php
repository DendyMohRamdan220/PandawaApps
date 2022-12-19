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

    <h1>Data Expenses</h1>

    <table id="customers">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Item Name</th>
            <th scope="col">Price</th>
            <th scope="col">Employees</th>
            <th scope="col">Purchased From</th>
            <th scope="col">Purchased Date</th>
            <th scope="col">Created at</th>
        </tr>
        @php
            $no = 1;
        @endphp
        @foreach ($data as $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->item_name }}</td>
                <td>{{ $row->price }}</td>
                <td>{{ $row->user->name }}</td>
                <td>{{ $row->purchase_from }}</td>
                <td>{{ $row->purchase_date }}</td>
                <td>{{ $row->created_at->isoFormat('D MMM Y') }}</td>
        @endforeach
    </table>

</body>

</html>
