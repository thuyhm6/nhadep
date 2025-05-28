
<style>
     .text-muted  {
        display: none !important;
    }
</style>
<div class="row g-4">
    @forelse ($houses as $house)
        <div class="col-md-3 py-2">
            <div class="project-card  bg-white">
                <div class="ratio ratio-1x1">
                    <a href="{{ route('detailProduct', $house->slug) }}">
                        <img src="{{ asset('uploads/products/' . $house->image) }}" alt="{{ $house->name }}"
                            class="img-fluid rounded w-100 h-100">
                </div>
                <div class="p-2 fw-semibold text-dark text-center">{{ $house->name }}</div>
                </a>
            </div>
        </div>
    @empty
        <div class="col-12 text-center py-4">
            <p class="text-dark">Không tìm thấy kết quả phù hợp.</p>
        </div>
    @endforelse
</div>

<nav id="panigate" class="py-4 d-flex justify-content-center" >
    {!! str_replace('pagination', 'pagination pagination-lg', $houses->withQueryString()->onEachSide(1)->links('pagination::bootstrap-5')->toHtml()) !!}
</nav>


{{-- <nav class="py-4 d-flex justify-content-center">
    {!! str_replace('pagination', 'pagination pagination-lg', $houses->withQueryString()->links('pagination::simple-bootstrap-5')->toHtml()) !!}
</nav> --}}





