@extends('layouts.master_admin')
@section('css')
@endsection
@section('content')
<!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                @if(count($schedules) != 0)
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Schedules</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Teacher</th>
                                                <th>Class</th>
                                                <th>Subject</th>
                                                <th>Time</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($schedules as $schedule)
                                            <tr>
                                                <td>{{$schedule->teacher->name?? ""}}</td>
                                                <td>{{$schedule->class->title ?? ""}}</td>
                                                <td>{{$schedule->subject->title ?? ""}}</td>
                                                <td>{{$schedule->duration ?? ""}}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <div>
                                                            <a href="schedule/{{$schedule->id}}/edit" class="btn btn-success"><i class="fas fa-pencil-alt" aria-hidden="true"></i> View Schedule</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                No schedules Create Yet....
                @endif
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
            <!-- ============================================================== -->
@endsection
@section('js')

@endsection
