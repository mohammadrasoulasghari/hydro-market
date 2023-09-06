<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ساخت یک برند جدید </title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container-form">
        <h2>ساخت یک برند جدید </h2>
        <form action="{{ route('brands.store') }}" method="POST"> <!-- اکشن فرم به فایل پردازشی خود تغییر دهید -->
                 @csrf
            <div class="form-group-form">
                <label for="name">نام:</label>
                <input type="text" id="name" name="name" placeholder="نام خود را وارد کنید" required>
            </div>
            <div class="form-group-form">
                <label for="picture_url">آدرس عکس:</label>
                <input type="text" id="picture_url" name="picture_url" placeholder="آدرس عکس را وارد کنید" required>
            </div>
            <button type="submit">ارسال</button>
        </form>
    </div>
</body>
</html>
