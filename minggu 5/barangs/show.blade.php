<!DOCTYPE html>
<html>
<head>
<title>CONTROL STRUKTUR PADA BLADE TEMPLATE</title>
</head>
<body>
@if (count($barangs)==1)
	<p>Jumlah Produk adalah satu</p>
@elseif(count($barangs)>1)
	<p><b>Perulangan dengan FOR</b></p>
	@for ($i = 0; $i < count($barangs); $i++)
			<p>{{ 'No :'.$i.' Nama Produk :'.$barangs[$i] }}</p>
	@endfor
	<hr>

	<p><b>Perulangan dengan FOREACH</b></p>
	@foreach ($barangs as $x => $v)
			<p>{{ 'No :'.$x.' Nama Produk :'.$v }}</p>
	@endforeach

	<hr>
	<p><b>Perulangan dengan WHILE</b></p>
	@php
		$no = 1;
	@endphp

	@while ($no<=5)
			<p>ini adalah perulangan ke {{ $no }}</p>
			@php
				$no++;
			@endphp
			@endwhile
	@else
		<p>Tidak Ada Data Produk</p>
	@endif

</body>
</html>



