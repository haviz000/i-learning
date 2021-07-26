<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						      <th>#</th>
						      <th>Kode</th>
						      <th>Nama Mata Kuliah</th>
						      <th>Kelas</th>
						      <th>SKS</th>
						      <th>Nilai</th>
						    </tr>
						  </thead>
						  <tbody>
						  @foreach($nilai as $value)
						    <tr>
						      <th scope="row">1</th>
						      <td>CCSU210</td>
						      <td>internet of thing</td>
						      <td> 	KJ002</td>
						      <td>3</td>
						      <td>{{ $value->nilaiIot}}</td>
						     </tr>
						     <tr>
						      <th scope="row">2</th>
						      <td>GGH889</td>
						      <td>Data Warehouse</td>
						      <td>KJ001</td>
						      <td>3</td>
						      <td>{{ $value->nilaiDw}}</td>
						      </tr>
						      <tr>
						      <th scope="row">3</th>
						      <td>CFD456</td>
						      <td>Network</td>
						      <td>KJ001</td>
						      <td>3</td>
						      <td>{{ $value->nilaiNetwork}}</td>
						      </tr>
						      @endforeach
</tbody>
</table>
</div>
