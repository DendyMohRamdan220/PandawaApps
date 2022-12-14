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

    <h1>Data Proposal</h1>

    <table id="customers">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Lead Name</th>
            <th scope="col">Service type</th>
            <th scope="col">Total</th>
            <th scope="col">Created at</th>
            <th scope="col">Valid till</th>
            <th scope="col">Status</th>
        </tr>
        @php
            $no = 1;
        @endphp
        @foreach ($data as $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->proposal_name }}</td>
                <td>{{ $row->leads->leads_name }}</td>
                <td>{{ $row->products->name }}</td>
                <td>{{ $row->total }}</td>
                <td>{{ $row->created_at->isoFormat('D MMM Y') }}</td>
                <td>{{ $row->valid_till }}</td>
                <td>{{ $row->status }}</td>
            </tr>
        @endforeach
    </table>

</body>

</html>
