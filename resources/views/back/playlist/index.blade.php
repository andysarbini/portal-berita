@extends('layouts.default')

@section('content')
    
<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		
	</div>
</div>
<div class="page-inner mt--5">
	
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Data Playlist</div>
                        <a href="{{ route('playlist.create') }}" class="btn btn-primary btn-sm ml-auto"> <i class="fas fa-plus"></i> Tambah</a>
					</div>
				</div>
				<div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-primary">
                            {{ Session('success')}}
                        </div>
                    @endif
					<div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Playlist Video</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($playlist as $row)    
                                    <tr>
                                        <td>{{ $row->id }}</td>
                                        <td>{{ $row->judul_playlist }}</td>
                                        <td>{{ $row->slug }}</td>
                                        {{-- nama function -> nama kolom --}}
                                        <td>{{ $row->users->name }}</td> 
                                        <td>
                                            @if ($row->is_active == '1')
                                                Active
                                            @else
                                                Draft
                                            @endif
                                        </td>
                                        <td>
                                            <img src="{{ asset('uploads/' . $row->gambar_playlist) }}" width="100" alt="" srcset="">
                                        </td>
                                        <td>
                                            <a href="{{ route('playlist.edit', $row->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-pen"></i></a>
                                            <form action="{{ route('playlist.destroy', $row->id) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">Data kosong</td>
                                    </tr>
                                @endforelse
                                
                            </tbody>
                        </table>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
