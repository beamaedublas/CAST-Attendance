@extends('pages.base')

@section('content')

@if (session('info'))
<div class="alert alert-success">{{session('info')}}</div>  
@endif

<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
    <a href="{{url('/attendance/create')}}" class="btn btn-primary me-md-2" type="button">
        Add New Attendance
    </a>
</div>

<center>
    <div class="table">
        <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Event Title</th>
                <th>Status</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach($attendances as $attendance): ?>

                <tr>
                    <td>{{$attendance->student->full_name}}</td>
                    <td>{{$attendance->event->title}}</td>
                    <td>{{$attendance->status}}</td>
                    <td class="text-center">
                        <a href="{{url('attendance/'.$attendance->id)}}" class="btn-btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                        </svg>
                    </td>

                </tr>

                <?php endforeach; ?>
        </tbody>
    </div>

</center>
    @endsection
</body>
</html>