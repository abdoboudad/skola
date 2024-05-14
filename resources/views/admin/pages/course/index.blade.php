@extends('admin.layouts.layout')
@section('content')

<div class="card">
    <h5 class="card-header">Table Basic</h5>
    <div class="table-responsive overflow-visible text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>Project</th>
            <th>Client</th>
            <th>Users</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @forelse ($courses as $c)
            <tr>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $c->title }}</strong></td>
                <td>Albert Cook</td>
                <td>
                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Lilian Fuller" data-bs-original-title="Lilian Fuller">
                      <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Sophia Wilkerson" data-bs-original-title="Sophia Wilkerson">
                      <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                    </li>
                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Christina Parker" data-bs-original-title="Christina Parker">
                      <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
                    </li>
                  </ul>
                </td>
                <td><span class="badge bg-label-primary me-1">Active</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>
                    <div class="dropdown-menu" style="">
                      <a class="dropdown-item" href="{{ route('courses.edit',$c->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                      <a class="dropdown-item" href="{{ route('courses.show',$c->id) }}"><i class='bx bx-video-plus me-1'></i>Add Video</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                    </div>
                  </div>
                </td>
              </tr>
            @empty
                
            @endforelse
       
       
        </tbody>
      </table>
    </div>
  </div>

@endsection