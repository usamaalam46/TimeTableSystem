@extends('layouts.master_admin')
@section('css')

@endsection
@section('content')
<!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <form id="add_category" class="form-horizontal"  method="POST" action="{{url('/schedule/'.$schedule->teacher_id)}}" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                                {{ csrf_field() }}
                                <div class="card-body">
                                    <h4 class="card-title">Schedule Class</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Teacher</label>
                                        <div class="col-sm-9">
                                            <select name="teacher" id="teacher" class="form-control">
                                                <option value="">Select Teacher</option>
                                                @foreach ($teachers as $teacher)
                                                <option value="{{$teacher->id}}" @if ($schedule->teacher_id==$teacher->id)
                                                    selected="selected"
                                                @endif>{{$teacher->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Class</label>
                                        <div class="col-sm-9">

                                            <select name="class" id="class" class="form-control">
                                                <option value="">Select Class</option>
                                                @foreach ($classes as $class)
                                                <option value="{{$class->id}}" @if ($schedule->class_id==$class->id)
                                                    selected="selected"
                                                @endif>{{$class->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Class</label>
                                        <div class="col-sm-9">

                                            <select name="subject" id="subject" class="form-control">
                                                <option value="">Select Subject</option>
                                                @foreach ($subjects as $subject)
                                                <option value="{{$subject->id}}" @if ($schedule->subject_id==$subject->id)
                                                    selected="selected"
                                                @endif>{{$subject->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Start Time</label>
                                        <div class="col-sm-9">
                                            <input type="time" name="start_time"class="form-control datetimepicker" value="{{$schedule->start_time}}" id="start_time" placeholder="Start Time">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">End Time</label>
                                        <div class="col-sm-9">
                                            <input type="time" name="end_time"class="form-control datetimepicker" value="{{$schedule->end_time}}" id="end_time" placeholder="End Time">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <div class="card-body text-right">
                                            <input type="submit" class="btn btn-primary" value="Update Schedule Class"></button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                </form>
                <!-- editor -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->

@endsection
@section('js')
<script>

</script>
@endsection
