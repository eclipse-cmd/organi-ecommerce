<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Login | Organi admin</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=2.9.1">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=2.9.1">
</head>

<body class="nk-body bg-white npc-default pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">

                        <div class="card">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content text-center">
                                        <h4 class="nk-block-title">Sign-In</h4>
                                        <div class="nk-block-des">
                                            <p>Access the Admin panel using your email and password.</p>
                                        </div>
                                    </div>
                                </div>

                                @if (session('error'))
                                    <div style="background-color: #DD4B2B; height: 40px; color: white; padding-top: 5px "
                                        class="text-center">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <form action="{{ route('admin.login.auth') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="email">Email</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input type="email" name="email" class="form-control form-control-lg"
                                                id="email" placeholder="Enter your email" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-control-wrap">
                                            <label class="form-label" for="password">Password</label>
                                            <input type="password" class="form-control form-control-lg" id="password"
                                                name="password" placeholder="Enter your password">
                                        </div>

                                        <div class="form-label-group" style="float: right; margin-top: 2px">
                                            <a class="link link-primary link-sm" style="margin-top: 13px"
                                                href="">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Sign in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=2.9.1"></script>
    <script src="./assets/js/scripts.js?ver=2.9.1"></script>

</body>

</html>
