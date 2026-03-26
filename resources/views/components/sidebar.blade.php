<!-- ======== sidebar-nav start =========== -->

<aside class="sidebar-nav-wrapper">
  <div class="navbar-logo d-flex justify-content-center align-items-center">
    <a href="{{route('dashboard')}}">
      <img src="{{asset('assets/images/logo/logokoperasi-removebg-preview.png')}}" alt="logo"  width="100"/>
    </a>
  </div>
  <nav class="sidebar-nav">
    <ul>
      <li class="nav-item nav-item-has-children">
        <a
          href="#0"
          data-bs-toggle="collapse"
          data-bs-target="#ddmenu_1"
          aria-controls="ddmenu_1"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pie-chart-fill" viewBox="0 0 16 16">
            <path d="M15.985 8.5H8.207l-5.5 5.5a8 8 0 0 0 13.277-5.5zM2 13.292A8 8 0 0 1 7.5.015v7.778zM8.5.015V7.5h7.485A8 8 0 0 0 8.5.015"/>
          </svg>
          </span>
          <span class="text">Dashboard</span>
        </a>
        <ul id="ddmenu_1" class="collapse">
          <li>
            <a href="{{route('dashboard')}}" class="active"> Beranda </a>
          </li>
        </ul>
      </li>
      <li class="nav-item nav-item-has-children">
        <a
          href="#0"
          class="collapsed"
          data-bs-toggle="collapse"
          data-bs-target="#ddmenu_2"
          aria-controls="ddmenu_2"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="icon">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M11.8097 1.66667C11.8315 1.66667 11.8533 1.6671 11.875 1.66796V4.16667C11.875 5.43232 12.901 6.45834 14.1667 6.45834H16.6654C16.6663 6.48007 16.6667 6.50186 16.6667 6.5237V16.6667C16.6667 17.5872 15.9205 18.3333 15 18.3333H5.00001C4.07954 18.3333 3.33334 17.5872 3.33334 16.6667V3.33334C3.33334 2.41286 4.07954 1.66667 5.00001 1.66667H11.8097ZM6.66668 7.70834C6.3215 7.70834 6.04168 7.98816 6.04168 8.33334C6.04168 8.67851 6.3215 8.95834 6.66668 8.95834H10C10.3452 8.95834 10.625 8.67851 10.625 8.33334C10.625 7.98816 10.3452 7.70834 10 7.70834H6.66668ZM6.04168 11.6667C6.04168 12.0118 6.3215 12.2917 6.66668 12.2917H13.3333C13.6785 12.2917 13.9583 12.0118 13.9583 11.6667C13.9583 11.3215 13.6785 11.0417 13.3333 11.0417H6.66668C6.3215 11.0417 6.04168 11.3215 6.04168 11.6667ZM6.66668 14.375C6.3215 14.375 6.04168 14.6548 6.04168 15C6.04168 15.3452 6.3215 15.625 6.66668 15.625H13.3333C13.6785 15.625 13.9583 15.3452 13.9583 15C13.9583 14.6548 13.6785 14.375 13.3333 14.375H6.66668Z" />
              <path
                d="M13.125 2.29167L16.0417 5.20834H14.1667C13.5913 5.20834 13.125 4.74197 13.125 4.16667V2.29167Z" />
            </svg>
          </span>
          <span class="text">Manajemen Beranda</span>
        </a>
        <ul id="ddmenu_2" class="collapse dropdown-nav">
          <li>
            <a href="{{route('slider')}}"> Slider / Banner </a>
          </li>
          {{-- <li>
            <a href="blank-page.html"> Tentang </a>
          </li> --}}
          <li>
            <a href="{{route('service')}}"> Layanan Koperasi </a>
          </li>
        </ul>
      </li>
      <li class="nav-item nav-item-has-children">
        <a
          href="#0"
          class="collapsed"
          data-bs-toggle="collapse"
          data-bs-target="#ddmenu_3"
          aria-controls="ddmenu_3"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
            </svg>
          </span>
          <span class="text">Profil Koperasi</span>
        </a>
        <ul id="ddmenu_3" class="collapse dropdown-nav">
          <li>
            <a href="{{route('history')}}"> Sejarah </a>
          </li>
          <li>
            <a href="{{route('visimisi')}}"> Visi & Misi </a>
          </li>
          <li>
            <a href="{{route('profile')}}"> Profil </a>
          </li>
          <li>
            <a href="{{route('structre')}}"> Struktur Organisasi </a>
          </li>
        </ul>
      </li>
      <span class="divider"><hr /></span>
      <li class="nav-item nav-item-has-children">
        <a
          href="#0"
          class="collapsed"
          data-bs-toggle="collapse"
          data-bs-target="#ddmenu_4"
          aria-controls="ddmenu_4"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
            </svg>
          </span>
          <span class="text"> Keangggotaan </span>
        </a>
        <ul id="ddmenu_4" class="collapse dropdown-nav">
          <li>
            <a href="{{route('condition')}}"> Syarat Keanggotaan </a>
          </li>
          <li>
            <a href="{{route('benefit')}}"> Manfaat Keanggotaan </a>
          </li>
          {{-- <li>
            <a href="cards.html"> Daftar Anggota  </a>
          </li>
          <li>
            <a href="typography.html"> Pendaftaran Anggota </a>
          </li> --}}
        </ul>
      </li>
      <li class="nav-item nav-item-has-children">
        <a
          href="#0"
          class="collapsed"
          data-bs-toggle="collapse"
          data-bs-target="#ddmenu_55"
          aria-controls="ddmenu_55"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase-fill" viewBox="0 0 16 16">
            <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5"/>
            <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85z"/>
          </svg>
          </span>
          <span class="text">Layanan Koperasi</span>
        </a>
        <ul id="ddmenu_55" class="collapse dropdown-nav">
          <li>
            <a href="{{route('service.view')}}"> List Layanan </a>
          </li>
        </ul>
      </li>
      <span class="divider"><hr /></span>

      <li class="nav-item">
        <a href="notification.html">
          <span class="icon">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M10.8333 2.50008C10.8333 2.03984 10.4602 1.66675 9.99999 1.66675C9.53975 1.66675 9.16666 2.03984 9.16666 2.50008C9.16666 2.96032 9.53975 3.33341 9.99999 3.33341C10.4602 3.33341 10.8333 2.96032 10.8333 2.50008Z" />
              <path
                d="M17.5 5.41673C17.5 7.02756 16.1942 8.33339 14.5833 8.33339C12.9725 8.33339 11.6667 7.02756 11.6667 5.41673C11.6667 3.80589 12.9725 2.50006 14.5833 2.50006C16.1942 2.50006 17.5 3.80589 17.5 5.41673Z" />
              <path
                d="M11.4272 2.69637C10.9734 2.56848 10.4947 2.50006 10 2.50006C7.10054 2.50006 4.75003 4.85057 4.75003 7.75006V9.20873C4.75003 9.72814 4.62082 10.2393 4.37404 10.6963L3.36705 12.5611C2.89938 13.4272 3.26806 14.5081 4.16749 14.9078C7.88074 16.5581 12.1193 16.5581 15.8326 14.9078C16.732 14.5081 17.1007 13.4272 16.633 12.5611L15.626 10.6963C15.43 10.3333 15.3081 9.93606 15.2663 9.52773C15.0441 9.56431 14.8159 9.58339 14.5833 9.58339C12.2822 9.58339 10.4167 7.71791 10.4167 5.41673C10.4167 4.37705 10.7975 3.42631 11.4272 2.69637Z" />
              <path
                d="M7.48901 17.1925C8.10004 17.8918 8.99841 18.3335 10 18.3335C11.0016 18.3335 11.9 17.8918 12.511 17.1925C10.8482 17.4634 9.15183 17.4634 7.48901 17.1925Z" />
            </svg>
          </span>
          <span class="text">Notifikasi</span>
        </a>
      </li>
    </ul>
  </nav>
</aside>
<div class="overlay"></div>
<!-- ======== sidebar-nav end =========== -->
