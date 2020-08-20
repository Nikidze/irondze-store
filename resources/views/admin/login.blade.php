<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Войти в админку</title>
        <link href="/admin/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Вход</h3></div>
                                    <div class="card-body">
                                        <form action="{{ route('admin.login') }}" method="POST">
                                        @csrf
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Логин</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="text" name="login" placeholder="Введите логин" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Пароль</label>
                                                <input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Введите пароль" />
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary">Вход</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="/admin/js/scripts.js"></script>
    </body>
</html>