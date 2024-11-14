<div class="container-fluid pt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <h5><b>{{ $title }}</b></h5>
                    <a href="/admin/user/create" class="btn btn-dark float-end " style="background-color: #9468bd; color: white;"><i class="fas fa-plus"></i> Tambah </a>

                    <table class="table mt-1">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Opsi</th>
                        </tr>

                        @foreach ($user as $item)
                            
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <div class="d-flex">
                                <a href="/admin/user/{{ $item->id }}/edit" class="btn btn-info btn-sm" style="background-color: #20c997; color: white;"><i class="fas fa-edit "> Edit </i></a>
                                {{-- <a href="" class="btn btn-info btn-sm"><i class="fas fa-trash "></i></a> --}}
                                <form action="/admin/user/{{ $item->id }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm ml-1"><i class="fas fa-trash "> Delete </i></button>
                                </form>
                            </div>

                            </td>
                        </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
