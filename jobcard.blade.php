<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>بطاقة عمل / Job Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <div class="container border rounded p-4">
        <h2 class="text-center mb-4">بطاقة عمل / Job Card</h2>
        <form method="POST" action="/generate-pdf">
            @csrf
            <div class="mb-3">
                <label class="form-label">اسم العميل / Client Name</label>
                <input type="text" class="form-control" name="client_name">
            </div>
            <div class="mb-3">
                <label class="form-label">رقم اللوحة / Plate Number</label>
                <input type="text" class="form-control" name="plate_number">
            </div>
            <div class="mb-3">
                <label class="form-label">تاريخ الاستلام / Received Date</label>
                <input type="date" class="form-control" name="received_date">
            </div>
            <div class="mb-3">
                <label class="form-label">الوصف / Job Description</label>
                <textarea class="form-control" name="job_description" rows="3"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">إنشاء PDF / Generate PDF</button>
            </div>
        </form>
    </div>
</body>
</html>