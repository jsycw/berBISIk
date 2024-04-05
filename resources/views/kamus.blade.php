@extends('layout/layout')

@section('title', 'Kamus')

<body>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/kamusPage.css') }}">
</body>

    @section('content')
    <div>
        <form action="{{ route('kamus.huruf') }}">
            <button type="submit" class="btnksg">HURUF</button>
            <label for="" class="btnfull">KATA DAN KALIMAT</label>
        </form>

        
        {{-- <button class="btnksg">KATA DAN KALIMAT</button> --}}
        
    </div>
    
    <h2 class="judul">PENCARIAN KATA ATAU KALIMAT</h2>

    <div class="searchcontainer">
        <form action="" method="GET">
            <div class="search-box">
                <input class="search" name="keyword" type="text"
                    placeholder="Masukkan Kata atau Kalimat"
                    id="input-word"/>
                <button id="search-btn" class="btnsearch">Cari</button>
            </div>
        </form>
    
            <div class="result" id="result">
                @if(isset($kamusCari) && count($kamusCari) > 0)
                    <p class="res">Bahasa Isyarat dari</p>
                    <div class="container1">
                        @foreach ($kamusCari as $kata)
                            <div class="kotak">
                            <img src="{{ asset($kata->picture) }}" alt="{{ $kata->word }}">
                                <div class="boxkata">
                                    <p>{{ $kata->word }}</p>
                                </div>            
                            </div>
                        @endforeach                      
                    </div>
                {{-- {{ $kamusCari }} --}}
                {{-- ini kayaknya pake ini --}}
                @endif
            </div>     
    </div>

    <div>
        <h2 class="katadsr">KATA DASAR BAHASA ISYARAT</h2>
        <div class="kata-dasar">
            <div class="container1">
                @foreach ($daftarKamus as $kata)
                <div class="kotak">
                    <img src="{{ asset($kata->picture) }}" alt="{{ $kata->word }}">
                    <div class="boxkata">
                        <p>{{ $kata->word }}</p>
                    </div>     
                </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- <div>
        <h2 class="katadsr">KATA DASAR BAHASA ISYARAT</h2>
        <div class = "kata-dasar">
            <div class="container1">
                <div class="kotak">
                    <img src="{{ asset('assets/halo.png') }}" alt="halo">
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/hari.png') }}" alt="hari">
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/aku.png') }}" alt="aku">
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/teman-teman.png') }}" alt="teman-teman">
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/tuli.png') }}" alt="tuli">
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/selamat.png') }}" alt="selamat">
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/ind.png') }}" alt="ind">
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/bhsisyarat.png') }}" alt="bhsisyarat">
                </div>
                <div class="kotak">
                <img src="{{ asset('assets/disabilitas.png') }}" alt="disabilitas">
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/semua.png') }}" alt="semua">
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/inter.png') }}" alt="inter">
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/tepuk.png') }}" alt="tepuk">
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/untuk.png') }}" alt="untuk">
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/orang.png') }}" alt="orang">
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/tema.png') }}" alt="tema">
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/ucap.png') }}" alt="ucap">
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/tahun.png') }}" alt="tahun">
                </div>
                <div class="kotak">
                    <img src="{{ asset('assets/perempuan.png') }}" alt="perempuan">
                </div>
            </div>
            
        </div>
    </div> --}}

@endsection