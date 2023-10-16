@include('layout.header',['title' => 'Halaman Fakultas'])
<h2>Fakultas</h2>
<!-- <ul>
    @foreach ($fakultas as $item)
    <li>{{$item}}</li>
    @endforeach
</ul> -->

<ul>
    @if(count($fakultas) > 0)
        @foreach($fakultas as $item)
        <li>{{ $item }} </li>
       @endforeach
    @else
    <li>
    Belum Ada Data
    </li>
    @endif

</ul>
@include('layout.footer')