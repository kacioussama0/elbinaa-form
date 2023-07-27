<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700;1000&display=swap" rel="stylesheet">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>المخيم الإعلامي الطبعة الثانية | التسجيلات</title>
    <style>
        body {
            font-family: 'Cairo', sans-serif !important;
            height: 100vh;
            background-image: url("{{asset('bg.jpg')}}");
            background-size: cover;
            }
    </style>
    <link rel="shortcut icon" href="{{asset('logo.svg')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-PJsj/BTMqILvmcej7ulplguok8ag4xFTPryRq8xevL7eBYSmpXKcbNVuy+P0RMgq" crossorigin="anonymous">
    @livewireStyles
</head>
<body>

    <header class="bg-white py-2  shadow-sm">
        <div class="container d-flex align-items-center">
            <img src="{{asset('logo.svg')}}" alt="" style="width: 50px" class="me-3">
            <h6 class="fw-bolder m-0">المخيم الإعلامي الطبعة الثانية
                من 2 أوت إلى 6 أوت</h6>
        </div>
    </header>

    <main class="my-5 py-5">
        <div class="container pb-5">




                    <div class="card shadow-sm  bg-white rounded-4 ">
                        <div class="card-header   bg-transparent   text-center py-3">
                            <h3 class="fw-bolder mb-3">
                                استمارة التسجيل في ورشات المخيم الاعلامي
                            </h3>
                            <p class="text-muted text-center">مرحبا بكم أبناء حركتنا الأعزاء، يشرفنا انضمامكم للجامعة الصيفية لحركة البناء الوطني،</p>
                        </div>

                        <div class="card-body">
                            @if($is_end)
                                <div class="alert alert-danger">
                                    <h3 class="display-1 text-center">التسجيلات إنتهت</h3>
                                </div>
                            @else
                                <livewire:form/>
                            @endif
                        </div>
                    </div>
            </div>

    </main>





    @livewireScripts


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
