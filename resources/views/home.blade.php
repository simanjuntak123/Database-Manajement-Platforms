@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
<link rel="stylesheet" href="../assets/plugins/morrisjs/morris.min.css" />
<!-- Custom Css -->
<link rel="stylesheet" href="../resources/assets/css/main.css">
<link rel="stylesheet" href="../resources/assets/css/color_skins.css">

</head>
<body class="theme-cyan">

<nav class="navbar">
    <ul class="nav navbar-nav navbar-left">
        <li class="float-right">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="mega-menu"><i class="zmdi zmdi-power"></i></a>
        </li>
    </ul>
</nav>
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info m-b-20">
                    <div class="image"><a href="profile.html"><img src="../assets/images/profile_av.jpg" alt="User"></a></div>
                    <div class="detail">
                        <a> {{ Auth::user()->name }}</a>
                    </div>
                </div>
            </li>


        </ul>
    </div>
</aside>

  <section class="content home">
      <div class="block-header">
          <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12">
                  <h2>Dashboard</h2>
                  <ul class="breadcrumb p-l-0 p-b-0 ">
                      <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Database</a></li>
                      <li class="breadcrumb-item active">Dashboard</li>
                  </ul>
              </div>
          </div>
      </div>
      <div class="container">
          <div class="row clearfix">
              <div class="col-lg-11 col-md-12">
                  <div class="card">
                      <div class="header">
                          <h2><strong>Datasets</strong> </h2>
                      </div>
                      <div class="body">
                        <div class="table-responsive">
                          <table class="table m-b-0">
                            <thead>
                              <tr>
                                <td>Id</td>
                                <td>File Name</td>
                                <td>Create at</td>
                              </tr>
                            </thead>

                          </table>
                        </div>
                      </div>

                  </div>
              </div>
          </div>
      </div>
      <div class="container-fluid">
          <form action="" method="POST" enctype="multipart/form-data">
             @csrf
                <div class="col-md-11">
                  <input type="file" name="file" class="form-control">
                  <button type="submit" class="btn btn-success">Upload</button>
                 </div>
          </form>
      </div>
  </section>
</body>
</html>
@endsection
