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
        <form id="add_category" class="form-horizontal" method="POST" action="{{url('/teachers/'.$teacher->id)}}"
        enctype="multipart/form-data">
        {{-- $user->user_type=='user' ? $user=User::where('id','$user->id')-where('user_type','user')->fisrt() : $washer=$user->user_type='washer';
        return $user; --}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <div class="card-body">
                            <h4 class="card-title">Update Teacher Data</h4>
                            <div class="form-group row">
                                <label for="title"
                                    class="col-sm-3 text-right control-label col-form-label">Name</label>
                                <div class="col-sm-9">
                                    {{-- <input type="hidden" name="id" value="{{ $question->id }}"> --}}
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Name" value="{{ $teacher->name ?? '' }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title"
                                    class="col-sm-3 text-right control-label col-form-label">Name</label>
                                <div class="col-sm-9">
                                    {{-- <input type="hidden" name="id" value="{{ $question->id }}"> --}}
                                    <input type="text" name="email" class="form-control" id="email"
                                        placeholder="Email" value="{{ $teacher->email ?? '' }}">
                                </div>



                            </div>
                            <div class="border-top">
                                <div class="card-body text-right">
                                    <input type="submit" class="btn btn-primary" value="Update Teacher"></button>
                                </div>
                            </div>
                </div>
            </div>
        </form>
        </div>
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
@endsection
