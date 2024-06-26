<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>SJK Pathology Employee ID Card</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            /* background-color: #f0f0f0; */
        }

        .card {
            width: 317px;
            height: 201px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 8px;
            margin: 10px auto;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            border: 2px solid #24aff1;
            border-bottom: 5px solid #1371ff;
        }

        .card-header img {
            width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card-content {
            display: flex;
            justify-content: space-between;
        }

        .card-content img {
            width: 35%;
            border-radius: 10px;
            border: 1px solid #57b3e9;
            float: left;
        }

        .card-content table {
            width: 62%;
            float: right;
        }

        .card-content table tr td {
            padding: 0px;
        }

        .card-footer img {
            width: 100%;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .card-footer {
            padding-top: 30%;
        }

        #ICARD table,
        #ICARD p,
        #ICARD h2 {
            font-size: 11px;
            margin: 0;
            line-height: 12px;
            font-weight: 400;
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="card-header">
            <img src="upload/sjk_logo/logo-header.png" alt="pathology-logo" style="height:58px;">
        </div>
        <div class="card-content" id="ICARD">
            <img src="upload/staff_images/{{ $staffPrintIdcard->photo }}" alt="staff-image" width="55px"
                height="90px">
            <table>
                <tr>
                    <td><strong>Name:</strong></td>
                    <td>{{ $staffPrintIdcard->name }}</td>
                </tr>
                <tr>
                    <td><strong>Employee ID:</strong></td>
                    <td>{{ $staffPrintIdcard->reg_number }}</td>
                </tr>
                <tr>
                    <td><strong>Department:</strong></td>
                    <td>{{ $staffPrintIdcard->staff->department->department_name }}</td>
                </tr>
                <tr>
                    <td><strong>Position:</strong></td>
                    <td>{{ $staffPrintIdcard->staff->designation->designation_name }}</td>
                </tr>
                <tr>
                    <td><strong>Mobile No.:</strong></td>
                    <td>{{ $staffPrintIdcard->phone }}</td>
                </tr>
                <tr>
                    <td><strong>Issued Date:</strong></td>
                    <td>{{ $staffPrintIdcard->doj }}</td>
                </tr>
            </table>
        </div>
        <div class="card-footer">
            <img src="upload/sjk_logo/qr.jpg" alt="Barcode Footer"
                style="width: 120px; height: 40px; float: left; border: 1px solid #57b3e9;">
            <img src="upload/sjk_logo/sign.png" alt="sign" style="float: right; width: 120px; height: 40px;">
        </div>
    </div>
</body>

</html>
