<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cost Report</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            width: 90%;
            margin: 20px auto;
        }
        h1 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .horizontal-line {
            border-top: 1px solid #ddd;
            margin-bottom: 20px;
        }
        .filters {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin-bottom: 20px;
        }
        .filters label {
            margin-right: 10px;
            font-weight: bold;
        }
        .filters select, .filters input {
            padding: 10px;
            margin-right: 20px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            flex: 1;
            min-width: 100px;
        }
        .filters button {
            padding: 10px 20px;
            background-color: #f0ad4e;
            border: none;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            margin-bottom: 10px;
        }
        .filters button:hover {
            background-color: #ec971f;
        }
        .export-button {
            padding: 10px 20px;
            background-color: #f0ad4e;
            border: none;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            margin-bottom: 10px;
        }
        .export-button:hover {
            background-color: #ec971f;
        }
        .table-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            flex-wrap: wrap;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        td a {
            color: #f0ad4e;
            text-decoration: none;
        }
        td a:hover {
            text-decoration: underline;
        }
        .pagination {
            margin: 10px 0;
        }
        .pagination a {
            color: #f0ad4e;
            text-decoration: none;
            margin-right: 5px;
        }
        .pagination a:hover {
            text-decoration: underline;
        }
        .total-row {
            font-weight: bold;
        }
        @media (max-width: 768px) {
            .filters {
                flex-direction: column;
                align-items: flex-start;
            }
            .filters select, .filters input, .filters button {
                margin-right: 0;
                margin-bottom: 10px;
                width: 100%;
            }
            .table-header {
                flex-direction: column;
                align-items: flex-start;
            }
            .export-button {
                order: -1;
                margin-bottom: 10px;
                width: 100%;
            }
            .pagination {
                width: 100%;
                text-align: left;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cost Report</h1>
        <div class="horizontal-line"></div>
        <div class="filters">
            <label for="adnet">Adnet</label>
            <select id="adnet">
                <option value="SMD">SMD</option>
                <option value="LIG">LIG</option>
                <option value="ADC">ADC</option>
                <option value="REA">REA</option>
                <option value="MARVEL">MARVEL</option>
                <option value="KEN">KEN</option>
                <option value="ADCUSTA">ADCUSTA</option>
                <option value="PRT">PRT</option>
                <option value="MBP">MBP</option>
                <option value="TFC">TFC</option>
            </select>
            <label for="date-based-on">Date Based On</label>
            <input type="date" id="date-based-on">
            <label for="date-range">Date Range</label>
            <input type="text" id="date-range" placeholder="Date Range">
            <button type="button">Submit</button>
        </div>
        <div class="table-header">
            <div class="pagination">
                <a href="#">1</a>, <a href="#">2</a>, <a href="#">3</a> > [234 Rows]
            </div>
            <button class="export-button" type="button">Export as XLS</button>
        </div>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Adnet</th>
                    <th colspan="2">Conversion</th>
                    <th colspan="2">Cost</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $totalConversion1 = 0;
                    $totalConversion2 = 0;
                    $totalCost1 = 0;
                    $totalCost2 = 0;
                @endphp
                @foreach ($reports as $index => $report)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td><a href='cost-report-detail/{{ $report->adnet }}'>{{ $report->adnet }}</a></td>
                    <td>{{ $report->conversion1 }}</td>
                    <td>{{ $report->conversion2 }}</td>
                    <td>${{ $report->cost1 }}</td>
                    <td>${{ $report->cost2 }}</td>
                </tr>
                @php
                    $totalConversion1 += $report->conversion1;
                    $totalConversion2 += $report->conversion2;
                    $totalCost1 += $report->cost1;
                    $totalCost2 += $report->cost2;
                @endphp
                @endforeach
                <tr class="total-row">
                    <td colspan="2" style="text-align: center">Total</td>
                    <td>{{ $totalConversion1 }}</td>
                    <td>{{ $totalConversion2 }}</td>
                    <td>${{ $totalCost1 }}</td>
                    <td>${{ $totalCost2 }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>