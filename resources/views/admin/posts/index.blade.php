<x-admin-master>
    @section('content')
    <h1>Nuevooooo</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Crated At</th>
                            <th>Updated At</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Crated At</th>
                            <th>Updated At</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->post_image}}</td>
                            <td>{{$post->created_at->diffForHumans()}}</td>
                            <td>{{$post->updated_at->diffForHumans()}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection
</x-admin-master>