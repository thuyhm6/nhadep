@extends('layouts.admin')
@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="flex items-center flex-wrap justify-between gap20 mb-27">
            <h3>Categories</h3>
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
                    <div class="text-tiny">Categories</div>
                </li>
            </ul>
        </div>

        <div class="wg-box">
            <div class="flex items-center justify-between gap10 flex-wrap">
                <div class="wg-filter flex-grow">
                    <form class="form-search">
                        <fieldset class="name">
                            <input type="text" placeholder="Search here..." class="" name="name"
                                tabindex="2" value="" aria-required="true" required="">
                        </fieldset>
                        <div class="button-submit">
                            <button class="" type="submit"><i class="icon-search"></i></button>
                        </div>
                    </form>
                </div>
                <a class="tf-button style-1 w208" href="{{ route('admin.category.add') }}"><i class="icon-plus"></i>Add new</a>
            </div>
            <div class="wg-table table-all-user">
                <div class="table-responsive">
                    @if(Session::has('status'))
                        <p class="alert alert-success">{{ Session::get('status') }}</p> {{-- Chỗ này cũng cần lưu ý --}}
                    @endif
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Từ khóa SEO</th>
                                <th>mô tả SEO</th>
                                <th>Post</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td class="pname">
                                    <div class="image">
                                        <img src="{{ asset('uploads/categories') }}/{{ $category->image }}" alt="{{ $category->name }}" class="image">
                                    </div>
                                    <div class="name">
                                        <a href="#" class="">{{ $category->name }}</a>
                                    </div>
                                </td>
                                <td>{{ $category->meta_title }}</td>
                                <td>{{ $category->meta_description }}</td>
                                <td><a href="#" target="_blank">{{ $category->posts_count  }}</a></td>
                                <td>
                                    <div class="list-icon-function">
                                        <a href="{{ route('admin.categoryPost.edit',['id'=>$category->id]) }}"> {{-- Lưu ý đoạn này --}}
                                            <div class="item edit">
                                                <i class="icon-edit-3"></i>
                                            </div>
                                        </a>
                                        <form action="{{ route('admin.categoryPost.delete',['id'=>$category->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE') {{-- Lưu ý đoạn này --}}
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
                    {{ $categories->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        $(function(){
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