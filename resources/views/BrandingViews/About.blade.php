
<div class="">
    @foreach($companyAbout as $data)
        {{$data->image}}
        {{$data->content}}
        {{$data->vision}}
        {{$data->mission}}
        {{$data->value}}
    @endforeach

</div>

