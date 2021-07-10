@extends('layouts.admin.app')   

@section('styles')
<link href="{{asset('datatables.min.css')}}" rel="stylesheet">
<script src="{{asset('datatables.min.js')}}"></script>
@endsection
@section('content')   

<table id="example" class="display table" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Action</th>
             
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>
                    <a href="http://" class="mb-2 mr-2 btn-transition btn btn-outline-info">Edit</a>
                    <a href="http://" class="mb-2 mr-2 btn-transition btn btn-outline-danger">Delete</a>
                </td>
             
            </tr>
           
           
</tbody>
</table>
              
@endsection
@section('scripts')


<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endsection

