
@extends('admin.layouts.main')
@section('content')
  <div class="content" style="margin-top: 60px">
    <div class="row">
      <div class="col-lg-6 col-md-6 text-center">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-category">Total Users</h5>
            <h4 class="card-title">{{ $users->count() }}</h4>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 text-center">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-category">Users Today</h5>
            <h4 class="card-title">{{ $users_today->count() }}</h4>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title" style="float: left">Users</h4>
              <a href="#" class="btn btn-success" style="float: right">Add New</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      #
                    </th>
                    <th>
                      Name
                    </th>
                    <th>
                      Email
                    </th>
                    <th>
                      Hatching Date
                    </th>
                    <th>
                      Action
                    </th>
                    {{-- <th>
                      TopUp
                    </th> --}}
                  </thead>
                  <tbody>
                    @foreach ($users as $key => $item)
                    <tr>
                      <td>
                        {{ $key + 1 }}
                      </td>
                      <td>
                        {{ $item->name }}
                      </td>
                      <td>
                        {{ $item->email }}
                      </td>
                      <td>
                        {{ $item->date }}
                      </td>
                      <td>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
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
  </div>
@endsection
