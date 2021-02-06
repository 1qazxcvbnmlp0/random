<div class="">
    @foreach($companyReview as $data)
        {{$data->reviewer_id}}
        {{$data->reviewer_name}}
        {{$data->reviewer_rate}}
        {{$data->review_date}}
        {{$data->content}}
    @endforeach


</div>
