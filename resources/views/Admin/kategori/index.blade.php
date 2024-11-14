<div class="row p-2">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                
                <h5><b>{{ $title }}</b></h5>
            
                <a href="/admin/kategori/create" class="btn btn-dark mb-2 float-end" style="background-color: #9468bd; color: white;"><i class="fas fa-plus"></i> Tambah </a>
                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($kategori as $item)
                        
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="/admin/kategori/{{ $item->id }}/edit" class="btn btn-info btn-sm" style="background-color: #20c997; color: white;"><i class="fas fa-edit "> Edit </i></a>
                                {{-- <a href="" class="btn btn-info btn-sm"><i class="fas fa-trash "></i></a> --}}
                                <form action="/admin/kategori/{{ $item->id }}" method="POST">
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