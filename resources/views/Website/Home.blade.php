@extends('Website.layout.layout')

@section('Header-background')
    <!-- Header-background-markup -->
    <div class="header-bg relative home-slide">
        <!-- Placeholder images go here -->
        <div class="item">
            <img src="{{asset("")}}" alt="">
        </div>
        <div class="item">
            <img src="{{asset("")}}" alt="">
        </div>
        <div class="item">
            <img src="{{asset("")}}" alt="">
        </div>
        <div class="item">
            <img src="{{asset("")}}" alt="">
        </div>
    </div>
@endsection

@section('main-sec')
<div class="space-100"></div>
<!-- Mainmenu-markup-end -->
<!-- Header-jumbotron -->
<div class="space-100"></div>
<div class="header-text">
    <div class="container">
        <div class="row wow fadeInUp">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 text-center">
                <div class="jumbotron">
                    <h1 class="text-white">Magic Digital Library</h1>
                    <p class="text-white">An Automated And Digital Way Of Maintaining Libraries</p>
                </div>
                <div class="title-bar white">
                    <ul class="list-inline list-unstyled">
                        <li><i class="icofont icofont-square"></i></li>
                        <li><i class="icofont icofont-square"></i></li>
                    </ul>
                </div>
                <div class="space-40"></div>
            </div>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="0.5s">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <div class="panel">
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="book">
                                <form action="{{ route('search.result') }}" method="POST">
                                    @csrf
                                    <div class="input-group">
                                        <input type="text" class="form-control" autocomplete="off" placeholder="Enter what you are looking for">
                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-primary"><i class="icofont icofont-search-alt-2"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="space-100"></div>
<!-- Header-jumbotron-end -->
@endsection

@section('content')
<div class="space-80"></div>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center">
            <h2><strong>Department</strong></h2>
            <div class="space-20"></div>
            <div class="title-bar blue">
                <ul class="list-inline list-unstyled">
                    <li><i class="icofont icofont-square"></i></li>
                    <li><i class="icofont icofont-square"></i></li>
                </ul>
            </div>
            <div class="space-30"></div>
            <p>Most popular department to get your file faster</p>
        </div>
    </div>
    <div class="space-60"></div>
    <div class="row text-center" style="padding-top: 1em;">
        @foreach ($departments as $department)
        <div class="justify col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-delay="0.1s">
            <div class="category-item well blue text-center">
                <div class="category_icon">
                    <i class="icofont icofont-book"></i>
                </div>
                <div class="space-20"></div>
                <div class="title-bar">
                    <ul class="list-inline list-unstyled">
                        <li><i class="icofont icofont-square"></i></li>
                    </ul>
                </div>
                <div class="space-20"></div>
                {{-- <a href="{{ route('search.result.category', ['department_id' => $department->id]) }}">{{ $department->department_name }}</a> --}}
                <a href="{{ route('search.result.filterID', ['department', $department->id]) }}" class="btn btn-link" style="text-decoration: none;">{{ $department->department_name }}</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
