@extends('layouts.admin')
@section('content')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>All posts</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="{{ route('admin.index') }}">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">All posts</div>
                    </li>
                </ul>
            </div>

            <div class="wg-box">
                <div class="flex items-center justify-between gap10 flex-wrap">
                    <div class="wg-filter flex-grow">

                        {{-- form tìm kiếm mẫu nhà --}}
                        <form class="form-search" action="{{ route('admin.search') }}" method="GET">
                            <fieldset class="name">
                                <input type="text" placeholder="Search here..." class="" name="query"
                                    tabindex="2" value="{{ old('query') }}" aria-required="true" required>
                            </fieldset>
                            <div class="button-submit">
                                <button class="" type="submit"><i class="icon-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <a class="tf-button style-1 w208" href="{{ route('admin.post.add') }}"><i class="icon-plus"></i>Add
                        new</a>
                </div>
                <div class="table-responsive">
                    @if (Session::has('status'))
                        <p class="alert alert-success">{{ Session::get('status') }}</p> {{-- Chỗ này cũng cần lưu ý --}}
                    @endif
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Danh mục</th>
                                <th>Tiêu đề</th>
                                <th>Mô tả ngắn</th>
                                <th>Tác giả</th>
                                <th>Trạng thái</th>
                                <th>Ngày xuất bản</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $categories->name }}</td>
                                    <td class="pname">
                                        <div class="image">
                                            <img src="{{ asset('uploads/posts/' . $post->image) }}"
                                                alt="{{ $post->title }}" class="image">
                                        </div>
                                        <div class="name">
                                            <a href="{{ route('admin.post.view', ['id' => $post->id]) }}"
                                                class="body-title-2">{{ $post->title }}</a>
                                            <div class="text-tiny ">SEO: {{ $post->meta_title }}</div>
                                        </div>
                                    </td>
                                    <td>{{ $post->short_description }}</td>
                                    <td>{{ $post->author }}</td>
                                    <td>{{ $post->published == 0 ? 'Nháp' : 'Đã đăng' }}</td>
                                    <td>{{ $post->published_at }}</td>

                                    <td>
                                        <div class="list-icon-function">
                                            <a href="{{ route('admin.post.view', ['id' => $post->id]) }}"
                                                target="_blank">
                                                <div class="item eye">
                                                    <i class="icon-eye"></i>
                                                </div>
                                            </a>
                                            <a href="{{ route('admin.post.edit', ['id' => $post->id]) }}">
                                                <div class="item edit">
                                                    <i class="icon-edit-3"></i>
                                                </div>
                                            </a>
                                            <form action="{{ route('admin.post.delete', ['id' => $post->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="item text-danger delete">
                                                    <i class="icon-trash-2"></i>
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="divider"></div>
                <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">

                    {{ $posts->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function() {
            $(".delete").on('click', function(e) {
                e.preventDefault();
                var selectedForm = $(this).closest('form');
                swal({
                    title: "Are you sure?",
                    text: "You want to delete this record?",
                    type: "warning",
                    buttons: ["No!", "Yes!"],
                    confirmButonColor: "#dc3545"
                }).then(function(result) {
                    if (result) {
                        selectedForm.submit();
                    }
                });
            });
        });
    </script>
@endpush
