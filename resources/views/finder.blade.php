@extends('layouts.backend')
@section('content')
<!-- Page Content -->
<div class="content">
    @if (isset($displays))
    @foreach ($displays as $data)
    <div class="block block-rounded js-appear-enabled animated fadeIn" data-toggle='appear' data-offset="-200">
        <div class="block-header bg-info">
            <h3 class="block-title">{{ $data->job->name }}</h3>
        </div>
        <div class="block-content">
            <p>
               <i class="fa fa-building pl-3 pr-2"></i><span class="sidebar-mini-hide">{{ $data->organization->name }}</span>
               <i class="si si-pointer pl-3 pr-2"></i><span class="sidebar-mini-hide">@foreach ($data->locations as $element)
                   {{$element->name}},
                   @endforeach
               </span>
               <i class="fa fa-tag pl-3 pr-2"></i><span class="sidebar-mini-hide">{{ $data->type->name }}</span>
           </p>
           <div id="accordion" role="tablist" aria-multiselectable="true">
            <div class="block block-bordered block-rounded mb-2">
                <div class="block-header" role="tab" id="accordion_h1">
                    <a class="font-w600" data-toggle="collapse" data-parent="#accordion" href="#accordion_q1" aria-expanded="true" aria-controls="accordion_q1">Minimum Qualification</a>
                </div>
                <div id="accordion_q1" class="collapse show" role="tabpanel" aria-labelledby="accordion_h1" data-parent="#accordion">
                    <div class="block-content">
                        <ul>
                            @foreach ($data->qualifications as $element)
                            <li>{{ $element->description }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="block block-bordered block-rounded mb-2">
                <div class="block-header" role="tab" id="accordion_h2">
                    <a class="font-w600" data-toggle="collapse" data-parent="#accordion" href="#accordion_q2" aria-expanded="true" aria-controls="accordion_q2">Preffered Qualification</a>
                </div>
                <div id="accordion_q2" class="collapse" role="tabpanel" aria-labelledby="accordion_h2" data-parent="#accordion">
                    <div class="block-content">
                       <ul>
                        @foreach ($data->preffereds as $element)
                        <li>{{ $element->description }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="block block-bordered block-rounded mb-2">
            <div class="block-header" role="tab" id="accordion_h3">
                <a class="font-w600" data-toggle="collapse" data-parent="#accordion" href="#accordion_q3" aria-expanded="true" aria-controls="accordion_q3">About</a>
            </div>
            <div id="accordion_q3" class="collapse" role="tabpanel" aria-labelledby="accordion_h3" data-parent="#accordion">
                <div class="block-content">
                    <p>{{ $data->about }}</p>
                </div>
            </div>
        </div>
        <div class="block block-bordered block-rounded mb-2">
            <div class="block-header" role="tab" id="accordion_h4">
                <a class="font-w600" data-toggle="collapse" data-parent="#accordion" href="#accordion_q4" aria-expanded="true" aria-controls="accordion_q4">Responsibilities</a>
            </div>
            <div id="accordion_q4" class="collapse" role="tabpanel" aria-labelledby="accordion_h4" data-parent="#accordion">
                <div class="block-content">
                    @foreach ($data->responsibilities as $element)
                    <li>{{ $element->description }}</li>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="block block-bordered block-rounded">
            <div class="block-header" role="tab" id="accordion_h5">
                <a class="font-w600" data-toggle="collapse" data-parent="#accordion" href="#accordion_q5" aria-expanded="true" aria-controls="accordion_q5">1.5 Accordion Title</a>
            </div>
            <div id="accordion_q5" class="collapse" role="tabpanel" aria-labelledby="accordion_h5" data-parent="#accordion">
                <div class="block-content">
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endforeach
@else
<div class="content">
 <h2 class="content-heading"> Sorry
     <small>No Data Found</small>
 </h2>
 <div class="row">
     <div class="col-md-12">
         <a href="#" class="block block-link--shadow">
          <div class="block-content text-center">
            <div class="py-20">
                <p class="h1 text-danger font-w600 mb-10">No Data Found</p>
                <p class="font-size-lg">Error Page</p><p>
                </p></div>
            </div>
        </a>
    </div>
</div>
</div>
@endif

</div>
<!-- END Page Content -->
@endsection


