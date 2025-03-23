@extends('layouts.app')

@section('content')
    <h2 class="text-center my-3">Новости</h2>
    <div id="news-container">
        @include('news.partials.news_list')
    </div>
@endsection

@section('scripts')
<script>
$(document).on('click', '.pagination a', function(event) {
    event.preventDefault();
    var page = $(this).attr('href').split('page=')[1];
    fetch_data(page);
});

function fetch_data(page) {
    $.ajax({
        url: "/news?page=" + page,
        success: function(data) {
            $('#news-container').html(data);
        }
    });
}
</script>
@endsection
