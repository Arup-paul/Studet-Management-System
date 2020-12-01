
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
    <style>
        .skin-blue .main-header .navbar {
           background-color: #222d32;
          }
          .skin-blue .main-header .logo {
            background-color: #222d32;
          }
          .main-footer {
             background: #222d32;
             color: #ecf0f5;
             }
    </style>

    @stack('css')
</head>

<body class="  sidebar-mini">

    <section class="content-header">
        <h1>
            Teacher Print
        </h1>
        <div class="pull-right">
            <button type="button" class="btn btn-info"><i class="fa fa-print" onclick="window.print()"></i> Print</button>
        </div>
   </section>

    <div class="wrapper">
            <table class="table table-striped" style="margin-left: 8px;">
               <thead>
                   <h3 style="text-align: center;font-size:bold;font-width:30px;font-weight:600;"> <b style="color:red;">Teacher </b> {!! $teacher->first_name!!} {!! $teacher->last_name!!} </h3>

                <tr>
                       <td>
                        <img src="{{asset('images/teacher_images/'.$teacher['image']) }}" width="50px" height="50" class="rounded-circle" style="border-radius: 50%; vertical-align:middle;" alt="">
                       </td>
                    </tr>
                        <tr><th scope="col">Full Name</th> <td>{!! $teacher->first_name!!} {!! $teacher->last_name!!}</td> </tr>
                       <tr><th scope="col">Nationality</th> <td>{!! $teacher->nationality!!}  </td> </tr>
                       <tr><th scope="col">Date of Birth</th> <td>{!! $teacher->dob!!}  </td> </tr>
                       <tr><th scope="col">Gender</th> <td>{!! $teacher->gender!!}  </td> </tr>
                       <tr><th scope="col">Mobile Number</th> <td>{!! $teacher->phone!!}  </td> </tr>
                       <tr><th scope="col">Address</th> <td>{!! $teacher->address!!}  </td> </tr>
                       <tr><th scope="col">Passport</th> <td>{!! $teacher->passport!!}  </td> </tr>
                       <tr><th scope="col">Status</th> <td> @if($teacher->status == 0) Single
                    @elseif($teacher->status == 1) Married @endif </td> </tr>

               </thead>
            </table>
        </div>


    </div>





    <!-- jQuery 3.1.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>

    @stack('scripts')
</body>
</html>
