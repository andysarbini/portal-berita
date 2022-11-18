@extends('layouts.default')

@section('content')
    
<div class="panel-header bg-primary-gradient">
	
</div>
<div class="page-inner mt--5">
	
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Playlist Video {{ $playlist->judul_playlist }}</div>
                        <a href="{{ route('playlist.index') }}" class="btn btn-warning btn-sm ml-auto">Back</a>
					</div>
				</div>
				<div class="card-body">
					<form action="{{ route('playlist.update', $playlist->id) }}" method="post" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="judul">Playlist Video</label>
                            <input type="text" name="judul_playlist" value="{{ $playlist->judul_playlist }}" class="form-control" id="text" placeholder="judul playlist">
                        </div>
                        <div class="form-group">
                            <label for="body">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" id="editor1" >{{ $playlist->deskripsi }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            
                            <select name="is_active" class="form-control" id="">
                                <option value="1" {{ $playlist->is_active =='1' ? 'selected' : '' }}>Publish</option>
                                <option value="0" {{ $playlist->is_active =='0' ? 'selected' : '' }}>Draft</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar Playlist</label>
                            <input type="file" name="gambar_playlist" class="form-control">
                            <br>
                            <label for="gambar">Gambar saat ini</label><br>
                            <img src=" {{ asset('uploads/' . $playlist->gambar_playlist) }}" width="100" alt="" srcset="">
                        </div>
                        

                        <div class="form-group">
                            <button class="btn btn-primary btn-sm" type="submit">Save</button>
                            <button class="btn btn-primary btn-sm" type="reset">Reset</button>
                        </div>
                    </form>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
