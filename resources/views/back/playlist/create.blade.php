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
						<div class="card-title">Form Playlist Video</div>
                        <a href="{{ route('artikel.index') }}" class="btn btn-warning btn-sm ml-auto">Back</a>
					</div>
				</div>
				<div class="card-body">
					<form action="{{ route('playlist.store') }}" method="post" enctype="multipart/form-data">

                        @csrf
                        
                        <div class="form-group">
                            <label for="judul">Playlist Video</label>
                            <input type="text" name="judul_playlist" class="form-control" id="text" placeholder="judul playlist">
                        </div>
                        <div class="form-group">
                            <label for="body">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" id="editor1" ></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="gambar">Gambar Playlist</label>
                            <input type="file" name="gambar_playlist" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="is_active" class="form-control" id="">
                                <option value="1">Publish</option>
                                <option value="0">Draft</option>
                            </select>
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
