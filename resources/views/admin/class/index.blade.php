@extends('admin.layout')

@section('content')
    <div class="card border-2 mt-4 ">

        <div class="card-header">
            <h5 class="card-title pt-2">
                Classes
                <a href="{{ route('class.create') }}" class="btn btn-success float-end rounded-0">Add
                    Class</a>
            </h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Classes</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($class as $classes)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $classes->name }}</td>
                            <td>
                                <a href="{{ route('class.edit', $classes->id) }}"
                                    class="btn btn-warning text-white rounded-0">Update</a>
                                <a href="{{ route('class.delete', $classes->id) }}"
                                    class="btn btn-danger rounded-0">Delete</a>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection

{{-- <script type="text/javascript">

    // $(function () {
    
    //     var start_date = moment().subtract(1, 'M');
    
    //     var end_date = moment();
    
    //     $('#daterange span').html(start_date.format('MMMM D, YYYY') + ' - ' + end_date.format('MMMM D, YYYY'));
    
    //     $('#daterange').daterangepicker({
    //         startDate : start_date,
    //         endDate : end_date
    //     }, function(start_date, end_date){
    //         $('#daterange span').html(start_date.format('MMMM D, YYYY') + ' - ' + end_date.format('MMMM D, YYYY'));
    
    //         table.draw();
    //     });
    
        var table = $('#daterange_table').DataTable({
            processing : true,
            serverSide : true,
            ajax : {
                url : "{{ route('users.index') }}",
                data : function(data){
                    data.from_date = $('#daterange').data('daterangepicker').startDate.format('YYYY-MM-DD');
                    data.to_date = $('#daterange').data('daterangepicker').endDate.format('YYYY-MM-DD');
                }
            },
            columns : [
                {data : 'id', name : 'id'},
                {data : 'name', name : 'name'},
                {data : 'email', name : 'email'},
                {data : 'created_at', name : 'created_at'}
            ]
        });
    
    // });
    
    </script> --}}
