<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Output & Processing</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: white;
            padding: 16px 32px;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 16px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        main {
            padding: 32px;
            margin-bottom: 60px;
        }
        h2 {
            margin-bottom: 12px;
        }
        table {
            border-collapse: collapse;
            width: 300px;
            margin-bottom: 40px;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px 16px;
            text-align: left;
        }
        th {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>

    <header>
        <h1>Table Output & Processing</h1>
    </header>

    <main>
        <h2>Table 1</h2>
        <table>
            <thead>
                <tr>
                    <th>Index #</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rows as $row)
                <tr>
                    <td>{{ $row['index'] }}</td>
                    <td>{{ $row['value'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <h2>Table 2</h2>
        <table>
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                @foreach($table2 as $item)
                <tr>
                    <td>{{ $item['category'] }}</td>
                    <td>{{ $item['value'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>

    <footer>
        <p>Mulah Sdn Bhd &mdash; Software Engineering Internship Assessment</p>
    </footer>

</body>
</html>