@extends('layouts.back-end.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
                        <div class="card">
                            <h5 class="card-header">Contents</h5>
                            <div class="table-responsive text-nowrap">
                                <a href="{{route('category.create')}}" class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
                              <table class="table mt-4">
                                <thead class="table-light">
                                  <tr>
                                    <th>Id</th>
                                    <th>Comment</th>
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                    <th>Actions</th>
                                  </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                  <tr>
                                  
                                  
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
</div>
@endsection