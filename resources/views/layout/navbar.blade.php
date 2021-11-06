<div class="d-flex flex-column vh-100 p-3 text-white bg-dark" style="width: 250px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-4">Menu</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item py-2">
            <a href="/app" class="nav-link {{ $title === 'Menu' ? 'active' : '' }}" aria-current="page">
                <i class="fal fa-house"></i><span class="ms-3 d-none d-sm-inline">Home</span>
            </a>
        </li>
        <li class="nav-item py-2">
            <a href="{{ route('gudang.index') }}" class="nav-link align-middle {{ $title === 'Gudang' ? 'active' : '' }}">
                <i class="fal fa-warehouse"></i><span class="ms-3 d-none d-sm-inline">Gudang</span>
            </a>
        </li>
        <li class="nav-item py-2">
            <a href="{{ route('barang.index') }}" class="nav-link align-middle {{ $title === 'Barang' ? 'active' : '' }}">
                <i class="fal fa-box"></i><span class="ms-3 d-none d-sm-inline">Barang</span>
            </a>
        </li>
    </ul>
    <hr>
    <div>
        <a href="#" class="d-flex align-items-center text-white text-decoration-none">
            <strong> Copyright by mrwinataa ©</strong>
        </a>
    </div>
</div>
