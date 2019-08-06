@extends('layouts.simple')

@section('content')
<!-- Hero -->
<!-- Main Container -->
<main id="main-container">

    <!-- Page Content -->
    <div class="bg-image" style="background-image: url({{ asset('/media/photos/bg_hero.jpg') }});">
        <div class="hero bg-primary-dark-op">
            <div class="hero-inner">
                <div class="content content-full text-center">
                    <h1 class="display-4 font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInDown">Job Finder</h1>
                    <h2 class="font-w400 text-white-op mb-50 invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="250">Where do you live?</h2>
                    <div class="row justify-content-center">
                        <div class="col col-lg-auto">
                            {{-- <div class="block rounded bg-white-op">
                                <div class="block-content block-content-full"> --}}
                                    <form class="form-inline" action="{{ route('toSkill') }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger" name="state" value="prev">Previous</button>
                                        <input type="text" class="form-control bg-white py-10 px-10 mb-2 ml-sm-2 mr-sm-2 mb-sm-0" placeholder="Jakarta, Surabaya..." name="location" value="{{ isset($location)? $location : "" }}">
                                        <input type="hidden" name="job" value="{{ $job }}">
                                        <button type="submit" class="btn btn-primary" name="state" value="next">Next</button>
                                    </form>
                                {{-- </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->

</main>
<!-- END Main Container -->
</div>
<!-- END Page Container -->
@endsection
