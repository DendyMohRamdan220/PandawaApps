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

    <h1>Data Projects</h1>

    <table id="customers">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Project Name</th>
            <th scope="col">Employee</th>
            <th scope="col">Deadline</th>
            <th scope="col">Client</th>
            <th scope="col">Status</th>
        </tr>
        @php
            $no = 1;
        @endphp
        @foreach ($data as $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->projectname }}</td>
                <td>{{ $row->user->name }}</td>
                <td>{{ $row->deadline }}</td>
                <td>{{ $row->user_id1 }}</td>
                <td>{{ $row->status }}</td>
        @endforeach
    </table>

</body>

</html>
