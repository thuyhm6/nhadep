@extends('layouts.app')
@section('title', 'Mẫu nhà đẹp')
@section('content')
    <style>
        .filter-box {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        .project-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            transition: transform .2s ease;
        }

        .project-card:hover {
            transform: scale(1.02);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .project-card img {
            object-fit: cover;
            height: 180px;
        }

        .sidebar-category a {
            display: block;
            padding: 10px 15px;
            border-left: 3px solid transparent;
            color: #333;
            text-decoration: none;
        }

        .sidebar-category a.active,
        .sidebar-category a:hover {
            background: #e9f1ff;
            border-left-color: #D9042F;
            font-weight: bold;
        }
    </style>

    <div class="container py-4 ">
        <div class="mx-auto d-flex justify-content-center" style="max-width: 1200px;">
            {{-- <!-- Sidebar -->
            <div class="col-md-2">
                <div class="sidebar-category bg-white rounded p-3 shadow-sm">
                    <h6 class="fw-bold py-3 text-center text-danger">CÁC MẪU NHÀ</h6>
                    @foreach ($categories as $category)
                        <a href="#" data-category="{{ $category->slug }}"
                            class="category-link {{ request('category') == $category->slug ? 'active' : '' }}">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>
            </div> --}}


            <!-- Main -->
            <div class="col-md-10">
                <form id="filterForm" class="filter-box mb-4 p-4" method="GET">
                    <div class="row g-3">

                        <div class="col-12 col-md-12">
                            <input type="text" name="keyword" value="{{ request('keyword') }}"
                                class="form-control form-control-lg border border-dark rounded-pill"
                                placeholder="Tìm tên mẫu nhà...">
                        </div>

                        <div class="col-6 col-md-4 position-relative dropdown-input">
                            <select name="mau_nha" style="padding: 14px 22px;"
                                class="form-select form-select-lg border border-dark rounded-pill pe-5">
                                <option value="">Chọn mẫu nhà</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->slug }}"
                                        {{ request('mau_nha') == $category->slug ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-6 col-md-4 position-relative">
                            <select name="phong_cach" style="padding: 14px 22px;"
                                class="form-select form-select-lg border border-dark rounded-pill pe-5">
                                <option value="">Chọn phong cách</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->slug }}"
                                        {{ request('phong_cach') == $brand->slug ? 'selected' : '' }}>
                                        {{ $brand->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-6 col-md-4">
                            <div class="dropdown w-100 position-relative dropdown-input">
                                <input type="number" name="floors"
                                    class="form-control form-control-lg border border-dark rounded-pill"
                                    placeholder="Số tầng" min="1">
                                <button class="btn position-absolute end-0 top-0 h-100 px-3 border-0 bg-transparent "
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu w-50">
                                    <li><a class="dropdown-item" href="#" data-value="1">1 tầng</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="2">2 tầng</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="3">3 tầng</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="4">4 tầng</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="5">5 tầng</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="6">6 tầng</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 ">
                            <div class="dropdown w-100 position-relative dropdown-input">
                                <input type="number" name="bedrooms"
                                    class="form-control form-control-lg border border-dark rounded-pill"
                                    placeholder="Số phòng" min="1">
                                <button class="btn  position-absolute end-0 top-0 h-100 px-3 border-0 bg-transparent "
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu w-50">
                                    <li><a class="dropdown-item" href="#" data-value="1">1 phòng</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="2">2 phòng</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="3">3 phòng</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="4">4 phòng</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="5">5 phòng</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="6">6 phòng</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-6 col-md-4">
                            <div class="dropdown w-100 position-relative dropdown-input">
                                <input type="number" name="facade_width"
                                    class="form-control form-control-lg border border-dark rounded-pill"
                                    placeholder="Chiều rộng (m)" min="1">
                                <button class="btn  position-absolute end-0 top-0 h-100 px-3 border-0 bg-transparent "
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu w-50">
                                    <li><a class="dropdown-item" href="#" data-value="5">5 mét</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="10">10 mét</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="15">15 mét</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="20">20 mét</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="25">25 mét</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="30">30 mét</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-6 col-md-4">
                            <div class="dropdown w-100 position-relative dropdown-input">
                                <input type="number" name="depth_length"
                                    class="form-control form-control-lg border border-dark rounded-pill"
                                    placeholder="Chiều dài (m)" min="1">

                                <button class="btn  position-absolute end-0 top-0 h-100 px-3 border-0 bg-transparent"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu w-50">
                                    <li><a class="dropdown-item" href="#" data-value="5">5 mét</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="10">10 mét</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="15">15 mét</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="20">20 mét</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="25">25 mét</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="30">30 mét</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-12 text-center pt-2">
                            <button type="submit" class="btn btn-danger w-auto px-5 py-2 rounded-pill shadow-sm"
                                style="height: 45px; font-size: 1.5rem;">
                                Tìm kiếm
                            </button>

                        </div>
                    </div>
                </form>


                <!-- List AJAX -->
                <div id="ajaxResults">
                    @include('home.house-list', ['houses' => $houses])

                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            function fetchResults(url) {
                $.ajax({
                    url: url,
                    type: 'GET',
                    data: $('#filterForm').serialize(),
                    success: function(data) {
                        $('#ajaxResults').html(data);
                        window.history.pushState({}, '', url);
                    },
                    error: function() {
                        alert('Lỗi khi tải dữ liệu');
                    }
                });
            }

            $('#filterForm').on('submit', function(e) {
                e.preventDefault();

                const selectedSlug = $('select[name="mau_nha"]').val();

                const dataArray = $(this).serializeArray()
                    .filter(item => item.name !== 'mau_nha' && item.value !== '')
                    .map(item => [item.name, item.value]);

                const query = new URLSearchParams(dataArray).toString();
                const targetUrl = `/mau-nha/${selectedSlug || ''}${query ? '?' + query : ''}`;

                fetchResults(targetUrl);
            });

            $('.dropdown-input .dropdown-menu .dropdown-item').on('click', function(e) {
                e.preventDefault();
                const val = $(this).data('value');
                const dropdown = $(this).closest('.dropdown-input');
                const input = dropdown.find('input');
                input.val(val);

                const toggle = dropdown.find('[data-bs-toggle="dropdown"]')[0];
                const dropdownInstance = bootstrap.Dropdown.getInstance(toggle);
                if (dropdownInstance) dropdownInstance.hide();
            });
        });
    </script>
@endsection
