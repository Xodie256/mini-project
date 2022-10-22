@extends('administrators.layouts.layout')

@section('admin-content')
    <section class="content ml-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Add
                                        Course Units</a></li>
                                
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <form class="form-horizontal" action="/reg4" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="cname" class="col-sm-2 col-form-label">Unit Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="cname" name="uname"
                                                    placeholder="Unit Name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="ucode" class="col-sm-2 col-form-label">Unit Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="ucode" name="ucode"
                                                    placeholder="Unit Code">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="uyear" class="col-sm-2 col-form-label">Acc Year</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="cname" name="uyear"
                                                    placeholder="Acc Year">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="sem" class="col-sm-2 col-form-label">Acc Semester</label>
                                            <div class="col-sm-10">
                                                <select name="sem" id="sem" class="form-control">
                                                    <option value="1">Semester 1</option>
                                                    <option value="2">Semester 2</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="user" class="col-sm-2 col-form-label">For Program</label>
                                            <div class="col-sm-10">
                                                <select name="program" id="program" class="form-control">
                                                    @foreach ($courses as $course)
                                                        <option value="{{ $course->id }}">{{ $course->cname }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="user" class="col-sm-2 col-form-label">Delivered By</label>
                                            <div class="col-sm-10">
                                                <select name="user_id" id="user_id" class="form-control">
                                                     @foreach ($users as $user)
                                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                                    @endforeach 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Add Course</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->

                                <!-- /.tab-pane -->


                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
