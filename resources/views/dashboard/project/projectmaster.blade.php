@extends('dashboard.app')
@section('title', 'project')
@section('content')


<div class="row">
    <div class="col-lg-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
            </div> {{-- card header --}}
            <div class="card-body">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $a = 1 ; ?>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $a++; }}</td>
                            <td>{{ $item->nama; }}</td>
                            <td>
                                <a class="btn btn-primary" onclick="show('{{ $item->id}}')"><i class="fas fa-folder-open"></i></a>
                                @admin
                                <a class="btn btn-success" href="{{ route('createproject.create' ,$item->id)  }}"><i class="fas fa-plus"></i></a>
                                @endadmin
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div> {{-- card body --}}
        </div> {{-- card --}}
    </div> {{-- col-lg-6 --}}
    <div class="col-lg-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Project Siswa</h6>
            </div> {{-- card header --}}
            <div class="card-body" style="text-align: center" id="project">
               Tidak ada project yang bisa di tampilkan
            </div> {{-- card body --}}
        </div> {{-- card --}}
    </div> {{-- col-lg-6 --}}
</div> {{-- row --}}

<script>
    function show(id){
        $.get('/dashboard/project/'+id ,function(data){
            $('#project').html(data)
        })
    }
</script>



@endsection
