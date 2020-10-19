<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <title>蝦皮購物</title>
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    {{-- Fontawesome --}}
    <script src="https://kit.fontawesome.com/0063e16539.js" crossorigin="anonymous"></script>

</head>

<body>
    <!--  導覽列  -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ff4d4d;">
        <a class="navbar-brand text-light" href="{{ url('/') }}">
            <img src="https://imgur.com/96KPoBb.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
            蟹皮購物
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @if (Route::has('login'))
                @auth
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">買家中心<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">賣家中心</a>
                        </li>
                    </ul>
                @endif
                @endif
                <form class="form-inline my-2 my-lg-0 mr-auto">
                    <input class="form-control mr-sm-2" type="search" placeholder="搜尋商品" aria-label="Search">
                    <button class="btn btn-success my-2 my-sm-0" type="submit">搜尋</button>
                </form>
                <ul class="navbar-nav ml-auto">
                    @if (Route::has('login'))
                        @auth
                            {{-- 下拉式選單顯示個人資訊+登出 --}}
                            <li class="nav-item align-self-center mr-2">
                                <div class="dropdown">
                                    <a href="#" id="imageDropdown" data-toggle="dropdown">
                                        <img src="https://i.imgur.com/VPXZx2I.jpg" alt="Profile" style="width:40px; height:40px; border-radius:50%;">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <label class="dropdown-item disabled">Your name</label>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">個人資訊</a>
                                        <a class="dropdown-item" href="{{ url('/logout/') }}">登出</a>
                                      </div>
                                  </div>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="btn btn-success mr-2" href="{{ route('login') }}">登入</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    @csrf
                                    <a class="btn btn-primary" href="{{ route('register') }}">註冊</a>
                                </li>
                            @endif
                        @endif
                        @endif
                    </ul>
                </div>
            </nav>
