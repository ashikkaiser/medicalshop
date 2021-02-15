@extends('backend.layouts.main')
@section('title', 'Categories')
@section('content')
    <div class="contentbar">
        <div class="row">
            <div class="col-md-4">

                @include('backend.category.create')
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="display table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->name }}</td>
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
@section('script')
    @include('backend.category.scripts')
    <script>
        $(document).ready(function() {
            /* -- Table - Datatable -- */
            $('#datatable').DataTable({
                responsive: true
            });
            // var table = $('#datatable-buttons').DataTable({
            //     lengthChange: false,
            //     responsive: true,
            //     buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            // });
            // table.buttons().container().appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
        });

    </script>
@endsection
