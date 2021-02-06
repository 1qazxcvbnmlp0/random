<div class="">
    <ul>
        @foreach($companyJob as $data)
            <ls>{{$data->job_type}}</ls>
            <ls>{{$data->job_title}}</ls>
            <ls>{{$data->job_location}}</ls>
            <ls>{{$data->post_time}}</ls>

        @endforeach
    </ul>

</div>
