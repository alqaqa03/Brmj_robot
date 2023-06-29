<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/vendors/bootstrap/css/bootstrap.min.css">
    <script src="./assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            أضف روبوتك
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">روبوت عام</a></li>
                            <li><a class="dropdown-item" href="#">روبوت خاص</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <table class="table table-dark text-center shadow">
                    <tr class="table-warning">
                        <th>المجموعه ألأولى</th>
                        <th>المجموعه الثانيه</th>
                    </tr>
                    <tr>
                        <td class="orange">
                            <img src="assets/images/faheem.png" alt="" width="100px">
                            <ul>
                                <li>فهيم</li>
                                <li>أذكى حاسوب في الوجود</li>
                            </ul>
                        </td>
                        <td>
                            <img src="assets/images/sportsman.png" alt="" width="100px">
                            <ul>
                                <li>الرياضي</li>
                                <li>متخصص في توجيه الاعبين</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="assets/images/coder.png" alt="" width="100px">
                            <ul>
                                <li>المبرمج</li>
                                <li>متخصص في علوم الحاسوب</li>
                            </ul>
                        </td>
                        <td class="orange">
                            <img src="assets/images/chemist.png" alt="" width="100px">
                            <ul>
                                <li>الكيميائي</li>
                                <li>متخصص في علوم الكيمياء</li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-4">
                <form class="text-dirction">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">البريد الإلكتروني</label>
                        <input name="email" type="email" class="form-control text-dirction" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="أدخل البريد">
                        <div id="emailHelp" class="form-text text-light">لن نقوم بمشاركة بريدك مع أحد</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">كلمة المرور</label>
                        <input name="password" type="password" class="form-control text-dirction" id="exampleInputPassword1" placeholder="كلمة المرور">
                    </div>
                    <div class="d-grid gap-2">
                    <input type="submit" class="btn btn-outline-warning btn-sm" value="دخول"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script></script>
</body>

</html>