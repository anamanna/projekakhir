@extends('admin.base')

@section('title','Manajemen Sampah')

@section('app','Managemen Sampah')



@section('content')
<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Sampah</h4>
                <form class="form pt-3" action="{{ url('/storesampah') }}">
                    @csrf
                    <div class="form-group">
                        <label>Nama</label>
                        <div class="input-group">
                            <input class="form-control" type="text" name="nama">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <div class="input-group">
                            <input class="form-control" type="text" name="harga">
                        </div>
					</div>
					<div class="form-group">
                        <label>Deskripsi</label>
                        <div class="input-group">
                            <input class="form-control" type="text" name="deskripsi">
                        </div>
					</div>
					<div class="form-group">
                        <label>Gambar</label>
                        <div class="input-group">
                            <input class="form-control" type="file" name="gambar">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
	</div>
	
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Data Tahun Ajaran</h4>
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered display" style="width:100%">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
                            <th>Harga Per Kilo </th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
					@foreach($dataSampah as $key=>$sampah) 
						<tr>
							<td>{{$key+1}}</td>
							<td>{{$sampah->nama}}</td>
							<td>{{$sampah->harga_per_kilo}}</td>
							<td>{{$sampah->deskripsi}}</td>
							<td>{{$sampah->gambar}}</td>
							<td>	
								<a href="{{url('/editsampah/'.$sampah->id)}}" class="btn btn-primary">Edit</a>
								<a href="{{url('/destroysampah/'.$sampah->id)}}" class="btn btn-danger">Delete</a>
							</td>
						</tr>	
					@endforeach	
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



@section('add_js')
	<script>
		$('#datatable').DataTable({
			responsive: true,
			columnDefs: [
				{searchable: false,orderable: false,targets: [0]}
			]
		});
	</script>
@endsection

