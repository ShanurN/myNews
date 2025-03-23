<div class="row">
    @foreach($news as $item)
        <div class="col-md-6 mb-4">
            <div class="card">
                <img src="storage/{{ $item->image }}" class="card-img-top" alt="{{ $item->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    <p class="card-text">{{ Str::limit($item->description, 100) }}</p>
                    <a href="{{ route('news.shows', $item->id) }}" class="btn btn-primary">Читать далее</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="d-flex justify-content-center">
    {!! $news->links() !!}
</div>
