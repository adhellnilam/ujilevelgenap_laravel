@extends('layouts.db')

@section('contentadmin')
<div class="container-fluid">
  
    <div class="modal fade" id="addProjectSidebar">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Project</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label class="text-black font-w500">Project Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-black font-w500">Deadline</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-black font-w500">Client Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary">CREATE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, welcome back!</h4>
                <span>Element</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add User</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form  method="POST" action="/dbadmin-simpaneditgurubk/{{ $guru->id}}" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Name</label>
                                    <input name="name" type="text" class="form-control" placeholder="name" value="{{ $guru->name}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>nipd</label>
                                    <input name="nipd" type="text" class="form-control" placeholder="nipd" value="{{ $guru->nipd}}">
                                </div>
                              
                                    <div class="form-group col-md-12">
                                        <label>user id</label>
                                        <select name="user_id" class="form-control default-select" id="maapel">
                                            <option value="{{ $guru->userid->id }}" selected>{{ $guru->userid->name }}
                                                @foreach ($userid as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                        </select>
                                    </div>
                            
                                <div class="form-group col-md-12">
                                    <label>ttl</label>
                                    <input name="ttl" type="date" class="form-control" placeholder="ttl" value="{{ $guru->ttl}}">
                                </div>
                            </div>

                            

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>gender</label>
                                    <select name="gender" id="inputState" class="form-control default-select">
                                        <option value="pria" {{ $guru->gender === 'pria' ? 'selected' : '' }}>pria</option>
                                        <option value="wanita" {{ $guru->gender === 'wanita' ? 'selected' : '' }}>wanita</option>
                                    </select>

                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection