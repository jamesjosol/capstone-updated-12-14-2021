@section('mytitle', '| User\'s Profile')
    
@extends('layouts.app')

@section('content')

<div class="wrapper">
	
    @include('component.user-sidebar')

    <div class="dashboard-content">
        <div class="text">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        {!! Form::open(["route" => "user.updateprofile", 'method' => 'patch', 'enctype'=>"multipart/form-data"]) !!}
                        @include('items.edit-user-profile-form')
                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        let btn = document.querySelector("#btn-menu");
        let sidebar = document.querySelector(".sidebar");
        let searchBtn = document.querySelector(".bx-search");

        btn.onclick = function(){
            sidebar.classList.toggle("active");
        }
        searchBtn.onclick = function(){
            sidebar.classList.toggle("active");
        }
        
    </script>

</div>
@endsection