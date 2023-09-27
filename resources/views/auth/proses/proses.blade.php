@extends('app')
@section('sidebar')
    <!-- Side Bar -->
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-white" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0 text-center" href="{{ route('home') }}">
                <img src="{{ asset('assets/img/local/logo5.png') }}" class="navbar-brand-img" alt="main_logo">
            </a>
            </div>
            <hr class="horizontal dark mt-0">
            <div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('home') }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>shop </title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(0.000000, 148.000000)">
                                    <path class="color-background opacity-6" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                                    <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                                </g>
                                </g>
                            </g>
                            </g>
                        </svg>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  active" href="{{ route('admin_proses') }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>document</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                    <g transform="translate(154.000000, 300.000000)">
                                    <path class="color-background opacity-6" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"></path>
                                    <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                                    </g>
                                </g>
                                </g>
                            </g>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Proses</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="{{ url('admin/user') }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>office</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                <g id="office" transform="translate(153.000000, 2.000000)">
                                    <path class="color-background opacity-6" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"></path>
                                    <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                                </g>
                                </g>
                            </g>
                            </g>
                        </svg>
                        </div>
                        <span class="nav-link-text ms-1">User</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/stock') }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>credit-card</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                    <path class="color-background opacity-6" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"></path>
                                    <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                                </g>
                            </g>
                            </g>
                        </svg>
                        </div>
                        <span class="nav-link-text ms-1">Stock</span>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="{{ url('admin/profile') }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>customer-support</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                    <g transform="translate(1.000000, 0.000000)">
                                    <path class="color-background opacity-6" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                                    <path class="color-background" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                                    <path class="color-background" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                                    </g>
                                </g>
                                </g>
                            </g>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Profile</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidenav-footer mx-3">
            <a class="btn bg-gradient-primary mt-5 w-100" href="{{ route('logout') }}">Log out</a>
        </div>
    </aside>
    <!-- End Side Bar -->
@endsection
    
@section('navbar')
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="{{ url('admin/dashboard') }}">Admin</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Proses</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Proses</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <ul class="navbar-nav justify-content-end me-5">
                        <div class="d-flex py-1">
                            <div class="my-auto">
                                <img src="../assets/img/local/profil.png" class="avatar avatar-sm  me-3 mt-1">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="text-sm font-weight-normal mb-1">
                                    <span class="font-weight-bold"> {{ Auth::user()->name }} </span> 
                                </h6>
                                <p class="text-xs text-secondary mb-0 ">
                                    <i class="fa fa-solid fa-circle" style="color: #82d616;"></i>
                                    Online
                                </p>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </a>
            </li>
            
        </div>
    </nav>
    <!-- End Navbar -->
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Gas</p>
                                <h5 class="font-weight-bolder mb-0">
                                {{ $total_gas }}
                                <span class="text-black text-sm font-weight-bolder">gas</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="fa fa-solid fa-fire opacity-10" style="color: #ffffff;"></i>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Kurir Tersedia</p>
                                <h5 class="font-weight-bolder mb-0">
                                {{ $kurir_tersedia }}
                                <span class="text-black text-sm font-weight-bolder">kurir</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="fa fa-solid fa-truck opacity-10" style="color: #ffffff;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Pesanan Masuk</p>
                                <h5 class="font-weight-bolder mb-0">
                                {{ $pesanan_masuk }}
                                <span class="text-black text-sm font-weight-bolder">pesanan</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="fa fa-solid fa-clipboard-list opacity-10" style="color: #ffffff;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Pesanan Selesai</p>
                                <h5 class="font-weight-bolder mb-0">
                                {{ $pesanan_selesai }}
                                <span class="text-black text-sm font-weight-bolder">pesanan</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="fa fa-solid fa-clipboard-check opacity-10" style="color: #ffffff;"></i>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        {{-- Tabel konfirmasi pembayaran --}}
        <div class="container mt-5">
            <div class="card bg-white">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col">
                            <h4 class="card-title">Konfirmasi Pembayaran</h4>
                        </div>
                        <div class="col-9 pt-1">
                            <span class="card-title">
                                <a class="me-3">( {{ $pesanan_masuk }} )</a>
                                <i type="button" id="icon_konfirmasiPembayaran" class="fa fa-solid fa-angle-down" style="color: #252f40;" onclick="toggleTable('konfirmasiPembayaran')"></i>
                                    {{-- @if ($adaDataBaru)
                                        <i class="fa fa-solid fa-circle" style="color: #ea0606;"></i>
                                    @endif --}}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-body px-0 pt-0 pb-2" style="min-height: 50px;">
                        <div class="table-responsive p-0" style="max-height: 300px; overflow-y: auto;">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Id Pesanan</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Tgl. Pesanan</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Pemesanan</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Jumlah Gas</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Tgl. Pembayaran</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Bukti Pembayaran</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Status</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Konfirmasi</th>
                                    </tr>
                                </thead>
                                @foreach ($pembayaran as $transaksi)  
                                <form action="{{ route('update_pembayaran', $transaksi->id_transaksi) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <tbody id="konfirmasiPembayaran" style="display: none;">
                                        <tr class="text-dark">
                                            <td class="align-middle text-sm text-center">{{ $transaksi->resi_transaksi }}</td>
                                            <td class="align-middle text-sm text-center">{{ $transaksi->tanggal_transaksi }}</td>
                                            <td class="align-middle text-sm text-center" style="white-space: pre-wrap; word-wrap: break-word; max-width: 100px;">{{ $transaksi->agen->name }}</td>
                                            <td class="align-middle text-sm text-center">{{ $transaksi->jumlah_transaksi }} Gas</td>
                                            <td class="align-middle text-sm text-center">
                                                @if ($transaksi->pembayaran->tanggal_pembayaran === null)
                                                    Belum Dibayar
                                                @else
                                                    {{ $transaksi->pembayaran->tanggal_pembayaran }}
                                                @endif
                                            </td>
                                            <td class="align-middle text-sm text-center">
                                                @if ($transaksi->pembayaran->bukti_pembayaran === null)
                                                    Belum Dibayar
                                                @else
                                                    {{ $transaksi->pembayaran->bukti_pembayaran }}
                                                @endif
                                            </td>
                                            <td class="align-middle text-sm text-center">
                                                <select class="mb-3 form-control" id="status_pembayaran" name="status_pembayaran">
                                                    <option value="Belum Bayar" {{ $transaksi->pembayaran->status_pembayaran === 'Belum Bayar' ? 'selected' : '' }}>Belum Bayar</option>
                                                    <option value="Sudah Bayar" {{ $transaksi->pembayaran->status_pembayaran === 'Sudah Bayar' ? 'selected' : '' }}>Sudah Bayar</option>
                                                </select>
                                            </td>  
                                            <td class="align-middle text-center ">
                                                <button class="btn bg-gradient-success btn-icon btn-sm ps-3">
                                                    <span> <i class="fa fa-solid fa-paper-plane me-3" style="color: #ffffff;"></i></span>
                                                    Konfirmasi
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Tabel proses pesanan --}}
        <div class="container mt-5">
            <div class="card bg-white">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col">
                            <h4 class="card-title">Pesanan Diproses</h4>
                        </div>
                        <div class="col-9 pt-1 me-6">
                            <span class="card-title">
                                <a class="me-3">( {{ $pesanan_diproses }} )</a>
                                <i type="button" id="icon_pesananDiproses" class="fa fa-solid fa-angle-down" style="color: #252f40;" onclick="toggleTable('pesananDiproses')"></i>
                                {{-- @if ($adaDataBaru)
                                    <i class="fa fa-solid fa-circle" style="color: #ea0606;"></i>
                                @endif --}}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-body px-0 pt-0 pb-2" style="min-height: 50px;">
                        <div class="table-responsive p-0" style="max-height: 300px; overflow-y: auto;">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Id Pesanan</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Tgl. Pesanan</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Pemesanan</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Jumlah Gas</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Alamat Pesanan</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Kurir</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Truck</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Kirim Pesanan</th>
                                    </tr>
                                </thead>
                                @foreach ($proses as $transaksi)
                                <form action="{{ route('update_dikirim', $transaksi->id_transaksi) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <tbody id="pesananDiproses" style="display: none;">
                                        <tr class="text-dark">
                                            <td class="align-middle text-sm text-center">{{ $transaksi->resi_transaksi }}</td>
                                            <td class="align-middle text-sm text-center">{{ $transaksi->tanggal_transaksi }}</td>
                                            <td class="align-middle text-sm text-center" style="white-space: pre-wrap; word-wrap: break-word; max-width: 100px;">{{ $transaksi->agen->name }}</td>
                                            <td class="align-middle text-sm text-center">{{ $transaksi->jumlah_transaksi }} Gas</td>
                                            @foreach ($lokasi_proses as $lokasi)
                                            <td class="align-middle text-sm " style="white-space: pre-wrap; word-wrap: break-word; max-width: 100px;">{{ $transaksi->agen->alamat }}</td>
                                            @endforeach
                                            <td class="align-middle text-sm text-center">
                                                <select class="mb-3 form-control" id="name" name="name">
                                                    <option value="Belum Memilih" {{ is_null($transaksi->pengiriman->id_kurir) ? 'selected' : '' }}>
                                                        Belum Memilih
                                                    </option>
                                                    @foreach ($kurirs as $kurir)
                                                        <option value="{{ $kurir }}" {{ $transaksi->pengiriman->id_kurir == $kurir ? 'selected' : '' }}>
                                                            {{ $kurir }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>                                                                            
                                            <td class="align-middle text-sm text-center">
                                                <select class="mb-3 form-control" id="plat_truck" name="plat_truck">
                                                    <option value="Belum Memilih" {{ is_null($transaksi->pengiriman->id_truck) ? 'selected' : '' }}>
                                                        Belum Memilih
                                                    </option>
                                                    @foreach ($trucks as $truck)
                                                        <option value="{{ $truck }}" {{ $transaksi->pengiriman->id_truck == $truck ? 'selected' : '' }}>
                                                            {{ $truck }}
                                                        </option>
                                                    @endforeach
                                                </select>                                               
                                            </td>                                        
                                            <td class="align-middle text-center ">
                                                <button type="submit" class="btn bg-gradient-success btn-icon btn-sm ps-3">
                                                    <span> <i class="fa fa-solid fa-paper-plane me-3" style="color: #ffffff;"></i></span>
                                                    Kirim
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Tabel dikirim --}}
        <div class="container mt-5">
            <div class="card bg-white">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col">
                            <h4 class="card-title">Pesanan Dikirim</h4>
                        </div>
                        <div class="col-9 pt-1 me-6">
                            <span class="card-title">
                                <a class="me-3">( {{ $pesanan_dikirim }} )</a>
                                <i type="button" id="icon_pesananDikirim" class="fa fa-solid fa-angle-down" style="color: #252f40;" onclick="toggleTable('pesananDikirim')"></i>
                                {{-- @if ($adaDataBaru)
                                    <i class="fa fa-solid fa-circle" style="color: #ea0606;"></i>
                                @endif --}}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-body px-0 pt-0 pb-2" style="min-height: 50px;">
                        <div class="table-responsive p-0" style="max-height: 300px; overflow-y: auto;">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Id Pesanan</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Tgl. Pesanan</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Pemesanan</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Jumlah Gas</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Alamat Pesanan</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Kurir</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Truck</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Cek Pesanan</th>
                                    </tr>
                                </thead>
                                @foreach ($dikirim as $transaksi)
                                <tbody id="pesananDikirim" style="display: none;">
                                    <tr class="text-dark">
                                        <td class="align-middle text-sm text-center">{{ $transaksi->resi_transaksi }}</td>
                                        <td class="align-middle text-sm text-center">{{ $transaksi->tanggal_transaksi }}</td>
                                        <td class="align-middle text-sm text-center" style="white-space: pre-wrap; word-wrap: break-word; max-width: 100px;">{{ $transaksi->agen->name }}</td>
                                        <td class="align-middle text-sm text-center">{{ $transaksi->jumlah_transaksi }} Gas</td>
                                        @foreach ($lokasi_dikirim as $lokasi)
                                        <td class="align-middle text-sm " style="white-space: pre-wrap; word-wrap: break-word; max-width: 100px;">{{ $transaksi->agen->alamat }}</td>
                                        @endforeach
                                        <td class="align-middle text-sm text-center">{{ $transaksi->pengiriman->kurir->name }}</td>                                        
                                        <td class="align-middle text-sm text-center">{{ $transaksi->pengiriman->truck->plat_truck }}</td>                                        
                                        <td class="align-middle text-center ">
                                            <button type="button" class="btn bg-gradient-warning btn-icon btn-sm ps-3" data-bs-toggle="modal" data-bs-target="#cek-status">
                                                <span> <i class="fa fa-solid fa-info me-3" style="color: #ffffff;"></i></span>
                                                Cek Status
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Tabel selesai --}}
        <div class="container mt-5">
            <div class="card bg-white">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col">
                            <h4 class="card-title">Pesanan Selesai</h4>
                        </div>
                        <div class="col-9 pt-1 me-6">
                            <span class="card-title">
                                <a class="me-3">( {{ $pesanan_selesai }} )</a>
                                <i type="button" id="icon_pesananSelesai" class="fa fa-solid fa-angle-down" style="color: #252f40;" onclick="toggleTable('pesananSelesai')"></i>
                                {{-- @if ($adaDataBaru)
                                    <i class="fa fa-solid fa-circle" style="color: #ea0606;"></i>
                                @endif --}}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-body px-0 pt-0 pb-2" style="min-height: 0px;">
                        <div class="table-responsive p-0" style="max-height: 300px; overflow-y: auto;">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Id Pesanan</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Tgl. Pesanan</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Pemesanan</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Jumlah Gas</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Alamat Pesanan</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Kurir</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Truck</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Cek Pesanan</th>
                                    </tr>
                                </thead>
                                @foreach ($diterima as $transaksi)
                                <tbody id="pesananSelesai" style="display: none;">
                                    <tr class="text-dark">
                                        <td class="align-middle text-sm text-center">{{ $transaksi->resi_transaksi }}</td>
                                        <td class="align-middle text-sm text-center">{{ $transaksi->tanggal_transaksi }}</td>
                                        <td class="align-middle text-sm text-center" style="white-space: pre-wrap; word-wrap: break-word; max-width: 100px;">{{ $transaksi->agen->name }}</td>
                                        <td class="align-middle text-sm text-center">{{ $transaksi->jumlah_transaksi }} Gas</td>
                                        @foreach ($lokasi_dikirim as $lokasi)
                                        <td class="align-middle text-sm " style="white-space: pre-wrap; word-wrap: break-word; max-width: 100px;">{{ $transaksi->agen->alamat }}</td>
                                        @endforeach
                                        <td class="align-middle text-sm text-center">{{ $transaksi->pengiriman->kurir->name }}</td>                                        
                                        <td class="align-middle text-sm text-center">{{ $transaksi->pengiriman->truck->plat_truck }}</td>                                        
                                        <td class="align-middle text-center ">
                                            <button type="button" class="btn bg-gradient-warning btn-icon btn-sm ps-3" data-bs-toggle="modal" data-bs-target="#cek-status">
                                                <span> <i class="fa fa-solid fa-info me-3" style="color: #ffffff;"></i></span>
                                                Cek Status
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Modal Status-->
    <div class="row">
        <div class="col-md-4">
            <div class="modal fade" id="cek-status" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h6 class="modal-title text-uppercase" id="modal-title-default">Status</h6>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <li class="text-dark mb-3">Kurir melanjutkan perjalan
                            <br><span class="text-secondary ms-4 text-xs">Tanggal: 18-09-2023</span>
                        </li>
                        <li class="text-dark mb-3">Kurir sedang ngopi
                            <br><span class="text-secondary ms-4 text-xs">Tanggal: 18-09-2023</span>
                        </li>
                        <li class="text-dark mb-3">Gas sedang di pick up
                            <br><span class="text-secondary ms-4 text-xs">Tanggal: 18-09-2023</span>
                        </li>
                    </div>
                    <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!--Modal Riwayat-->
    <div class="row">
        <div class="col-md-4">
            <div class="modal fade" id="cek-riwayat" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h6 class="modal-title text-uppercase" id="modal-title-default">Riwayat</h6>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <li class="mb-3 text-dark">Gas sudah sampai di lokasi anda  
                            <br><span class="text-secondary ms-4 text-xs">Tanggal: 18-09-2023</span></li>
                        <li class="mb-3 text-dark">Gas sedang dalam perjalan menuju lokasi anda 
                            <br><span class="text-secondary ms-4 text-xs">Tanggal: 17-09-2023</span></li>
                        <li class="mb-3 text-dark">Gas sedang transit di Madiun 
                            <br><span class="text-secondary ms-4 text-xs">Tanggal: 17-09-2023</span></li>
                        <li class="mb-3 text-dark">Gas sudah sampai di Jalan 
                            <br><span class="text-secondary ms-4 text-xs">Tanggal: 17-09-2023</span></li>
                        <li class="mb-3 text-dark">Gas sedang di pick up 
                            <br><span class="text-secondary ms-4 text-xs">Tanggal: 16-09-2023</span></li>
                    </div>
                    <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
    </div>

    {{-- Script show hide table --}}
    <script>
        // Fungsi untuk mengubah status tampilan tabel
        function toggleTable(tableId) {
            var table = document.getElementById(tableId);
            var iconId = 'icon_' + tableId; // Membuat ID ikon yang sesuai

            var icon = document.getElementById(iconId); // Mengambil elemen ikon berdasarkan ID ikon yang sesuai

            if (table && icon) {
                if (table.style.display === 'none') {
                    table.style.display = 'table-row-group';
                    if (icon.classList) {
                        icon.classList.remove('fa-angle-down');
                        icon.classList.add('fa-angle-up');
                    }
                    // Simpan status terbuka ke localStorage
                    localStorage.setItem(tableId + '_status', 'open');
                } else {
                    table.style.display = 'none';
                    if (icon.classList) {
                        icon.classList.remove('fa-angle-up');
                        icon.classList.add('fa-angle-down');
                    }
                    // Simpan status tertutup ke localStorage
                    localStorage.setItem(tableId + '_status', 'closed');
                }
            }
        }

        // Fungsi ini akan dipanggil saat halaman dimuat
        window.onload = function () {
            // Loop melalui semua tabel yang ingin Anda pertahankan statusnya
            var tablesToPersist = ['konfirmasiPembayaran', 'pesananDiproses', 'pesananDikirim', 'pesananSelesai']; // Gantilah dengan ID tabel yang sesuai
            for (var i = 0; i < tablesToPersist.length; i++) {
                var tableId = tablesToPersist[i];
                var tableStatus = localStorage.getItem(tableId + '_status');
                var table = document.getElementById(tableId);
                var iconId = 'icon_' + tableId; // Membuat ID ikon yang sesuai
                var icon = document.getElementById(iconId); // Mengambil elemen ikon berdasarkan ID ikon yang sesuai

                if (tableStatus === 'open') {
                    if (table && icon) {
                        table.style.display = 'table-row-group';
                        if (icon.classList) {
                            icon.classList.remove('fa-angle-down');
                            icon.classList.add('fa-angle-up');
                        }
                    }
                }
            }
        }

    </script>
    

@endsection