<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Student Mangagement System</title>
</head>
<body>
@include('navbar')

<div class="row header-container justify-content-center">
    <div class="header">
        <h1>Student Management System</h1>
    </div>
</div>
    @if ($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
        <section class="col-md-7">
            @include('studentslist')
        </section>
    </div>
    </div>

    @elseif ($layout == 'create')
    <div class="container-fluid mt-4">
        <div class="row">
        <section class="col">
            @include('studentslist')
        </section>
        <section class="col-md-5">

            <div class="card mb-3">
                <img src="{{ asset('img/2.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Enter the information of new student</h5>


        <form action="{{url('/store')}}" method="POST">
            @csrf
                <div class="form-group">
                    <label>CNE</label>
                    <input class="form-control" type="text" name="cne" placeholder="Enter cne">
                </div>
                <div class="form-group">
                    <label>First Name</label>
                    <input class="form-control" type="text" name="firstName" placeholder="Enter Your First Name">
                </div>
                <div class="form-group">
                    <label>Second Name</label>
                    <input class="form-control" type="text" name="secondName" placeholder="Enter Your Second Name">
                </div>
                <div class="form-group">
                    <label>Age</label>
                    <input class="form-control" type="text" name="age" placeholder="Enter Your Age">
                </div>
                <div class="form-group">
                    <label>Speciality</label>
                    <input class="form-control" type="text" name="speciality" placeholder="Enter Your Specilaity">
                </div>

                    <input class="btn btn-info" type="submit"  value="Save">
                    <input class="btn btn-warning" type="reset"  value="Reset">

            </form>
            </div>
            </div>
        </section>
    </div>
    </div>

    @elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
        <section class="col">
            @include('studentslist')
        </section>
        <section class="col"></section>
    </div>
    </div>

    @elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
        <section class="col">
            @include('studentslist')
        </section>
        <section class="col-md-5">
            <div class="card mb-3">
                <img src="{{ asset('img/2.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Update information of student</h5>


            <form action="{{url('/update/'.$student->id)}}" method="POST">
                @csrf
                    <div class="form-group">
                        <label>CNE</label>
                    <input value="{{ $student->cne}}" class="form-control" type="text" name="cne" placeholder="Enter cne">
                    </div>
                    <div class="form-group">
                        <label>First Name</label>
                        <input value="{{ $student->firstName}}" class="form-control" type="text" name="firstName" placeholder="Enter Your First Name">
                    </div>
                    <div class="form-group">
                        <label>Second Name</label>
                        <input value="{{ $student->secondName}}" class="form-control" type="text" name="secondName" placeholder="Enter Your Second Name">
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input value="{{ $student->age}}" class="form-control" type="text" name="age" placeholder="Enter Your Age">
                    </div>
                    <div class="form-group">
                        <label>Speciality</label>
                        <input value="{{ $student->speciality}}" class="form-control" type="text" name="speciality" placeholder="Enter Your Specilaity">
                    </div>
                    <br>
                        <input class="btn btn-info" type="submit"  value="Update">
                        <input class="btn btn-warning" type="reset"  value="Reset">

                </form>
                </div>
            </div>
        </section>
    </div>
    </div>
    @endif

    <footer></footer>
</body>
</html>
