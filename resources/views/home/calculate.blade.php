@extends('layouts.app')
@section('title', 'Tính chi phí')
@section('content')

    <div class="container py-4 col-md-6">
        <div class="card shadow">
            <div class="card-header bg-danger  text-center">
                <h5 class="text-white">TÍNH CHI PHÍ THI CÔNG</h5>
            </div>
            <div class="card-body">
                <form id="design-cost-form">
                    <div class="row g-3">
                        <!-- Loại nhà -->
                        <div class="col-md-6 position-relative">
                            <label class="form-label">Loại nhà</label>
                            <select name="loai_nha" class="form-select form-select-lg border border-dark rounded-pill pe-5"
                                style="padding: 14px 22px; font-size: 1.5rem" required>
                                <option value=""> Chọn loại công trình </option>
                                <option value="A">Nhà phố</option>
                                <option value="B">Biệt thự</option>
                                <option value="C">Nhà cấp 4</option>
                                <option value="D">Nhà kinh doanh</option>
                            </select>

                        </div>

                        <!-- Chi phí mỗi m² sàn -->
                        <div class="col-md-6 position-relative">
                            <label class="form-label">Chi phí mỗi m² sàn</label>
                            <select name="don_gia" class="form-select form-select-lg border border-dark rounded-pill pe-5"
                                style="padding: 14px 22px; font-size: 1.5rem" required>
                                <option value=""> Chọn chi phí m² sàn </option>
                                <option value="5500000">5.500.000 VND/m²</option>
                                <option value="6000000">6.000.000 VND/m²</option>
                                <option value="6500000">6.500.000 VND/m²</option>
                            </select>
                        </div>

                        <div class="row g-3 mt-4">
                            <!-- Chiều rộng -->
                            <div class="col-md-4 ">
                                <label class="form-label">Chiều rộng (m)</label>
                                <div class="dropdown w-100 position-relative dropdown-input">
                                    <input type="number" name="rong" id="input-rong"
                                        class="form-control rounded-pill border border-dark pe-5"
                                        placeholder="nhập chiều rộng..." min="1" autocomplete="off" required>
                                    <button class="btn position-absolute end-0 top-0 h-100 px-3 border-0 bg-transparent"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-chevron-down text-muted"></i>
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

                            <!-- Chiều dài -->
                            <div class="col-md-4 ">
                                <label class="form-label">Chiều dài (m)</label>
                                <div class="dropdown w-100 position-relative dropdown-input">
                                    <input type="number" name="dai" id="input-dai"
                                        class="form-control rounded-pill border border-dark pe-5"
                                        placeholder="nhập chiều dài..." min="1" autocomplete="off" required>
                                    <button class="btn position-absolute end-0 top-0 h-100 px-3 border-0 bg-transparent"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-chevron-down text-muted"></i>
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

                            <!-- Số tằng -->
                            <div class="col-md-4 ">
                                <label class="form-label">Số tằng</label>
                                <div class="dropdown w-100 position-relative dropdown-input">
                                    <input type="number" name="so_tang" id="input-so_tang"
                                        class="form-control rounded-pill border border-dark pe-5"
                                        placeholder="nhập số tằng..." min="1" autocomplete="off" required>
                                    <button class="btn position-absolute end-0 top-0 h-100 px-3 border-0 bg-transparent"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-chevron-down text-muted"></i>
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
                        </div>

                    </div>

                    <div class="text-center mt-4 py-3 ">
                        <button type="submit" class="btn btn-success px-5 py-2 rounded-pill shadow-sm"
                            style="height: 45px; font-size: 1.5rem;">
                            Tính chi phí
                        </button>
                    </div>
                </form>

                <div id="result" class="mt-4 alert alert-info d-none"></div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Xử lý dropdown để vừa nhập vào và vừa chọn giá trị
        // $(document) để chắc chắn rằng trang đã được tải xong 
        
        $(document).ready(function() {
            $('.dropdown-input .dropdown-menu .dropdown-item').on('click', function(e) {
                e.preventDefault();

                const val = $(this).data('value');
                const dropdown = $(this).closest('.dropdown-input');
                const input = dropdown.find('input');
                input.val(val);

                const toggle = dropdown.find('[data-bs-toggle="dropdown"]')[0];
                const dropdownInstance = bootstrap.Dropdown.getInstance(toggle);
                if (dropdownInstance) {
                    dropdownInstance.hide();
                }
            });

            // TÍnh chi phí
            document.getElementById('design-cost-form').addEventListener('submit', function(e) {
                e.preventDefault();

                const form = e.target;
                const loaiNha = form.loai_nha.value;
                const donGia = parseFloat(form.don_gia.value);
                const dai = parseFloat(form.dai.value);
                const rong = parseFloat(form.rong.value);
                const soTang = parseInt(form.so_tang.value);

                if (dai <= 0 || rong <= 0 || soTang <= 0) {
                    return alert("❌ Vui lòng nhập số dương hợp lệ cho chiều dài, chiều rộng và số tầng.");
                }

                const dienTich = dai * rong * soTang;
                const tongChiPhi = dienTich * donGia;

                const resultDiv = document.getElementById('result');
                resultDiv.classList.remove('d-none');
                resultDiv.innerHTML = `
        <h5> Diện tích sàn: <strong>${dienTich}</strong> m²</h5>
        <h5> Tổng chi phí thiết kế: <strong>${tongChiPhi.toLocaleString()} VND</strong></h5>
        <p class="text-danger mt-2">⚠️ Chi phí được tính toán là giá tham khảo, có thể phát sinh thêm trong quá trình thi công!</p>
    `;
            });
        });
    </script>

@endsection
