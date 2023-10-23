<div class="scroll-sidebar">
    @if(auth()->guard('admin')->check())
    <nav class="sidebar-nav">
        <ul id="sidebarnav" class="p-t-30">
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('pelanggan.index') }}" aria-expanded="false"><i class="fas fa-users"></i><span class="hide-menu">Pelanggan</span></a></li>
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('bus.index') }}" aria-expanded="false"><i class="mdi mdi-bus"></i><span class="hide-menu">Bus</span></a></li>
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('trayek.index') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Trayek</span></a></li>
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('tiket.index') }}" aria-expanded="false"><i class="fas fa-ticket-alt"></i><span class="hide-menu">Tiket</span></a></li>
        </ul>
    </nav>
    @elseif(auth()->guard('pelanggan')->check())
    <nav class="sidebar-nav">
        <ul id="sidebarnav" class="p-t-30">
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('trayek.index') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Order Tiket</span></a></li>
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('tiket.index') }}" aria-expanded="false"><i class="fas fa-ticket-alt"></i><span class="hide-menu">Tiket Pelanggan</span></a></li>
        </ul>
    </nav>
    @endif
</div>
