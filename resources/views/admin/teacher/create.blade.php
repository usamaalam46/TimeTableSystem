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
                <form id="add_category" class="form-horizontal"  method="POST" action="{{url('/teachers')}}" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                                {{ csrf_field() }}
                                <div class="card-body">
                                    <h4 class="card-title">Add Teacher</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Teacher</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name"class="form-control" id="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="email"class="form-control" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <div class="card-body text-right">
                                            <input type="submit" class="btn btn-primary" value="Add Teacher"></button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                </form>
                <div class="modal fade" id="answerModal" tabindex="-1" role="dialog" aria-labelledby="answerModal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Add Answer</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="text" id="answer" name="answer"class="form-control" id="title" placeholder="Answer">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="cono1" class=" text-right control-label col-form-label"><input type="checkbox" id="is-correct" name="is_correct"/> Mark as Correct </label>
                                    </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" onclick="addQuestionOption(document.getElementById('answer').value);"><i class="feather icon-plus-circle mr-25"></i>Add</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>


                  </div>
                  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="answerModal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Add Answer</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <h1 class="text-center text-lg"><i class="ficon feather icon-x-circle text-danger"></i>
                            </h1>
                            <p>Are you sure you want to delete it?
                            </p>
                          </div>
                        <div class="modal-footer">
                            <button type="button" id="" value="" onclick="deleteQuestionOption(this)" class="btn btn-danger delete-btn">Yes</button>
                        </div>
                      </div>
                    </div>


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
