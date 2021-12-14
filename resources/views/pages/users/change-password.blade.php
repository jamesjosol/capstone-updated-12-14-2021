@section('mytitle', '| Change Password')
    
@extends('layouts.app')

@section('content')

<div class="wrapper">
	
    @include('component.user-sidebar')

    <div class="dashboard-content">
        <div class="text">
            <div class="container-fluid">
                <a href="/">Dashboard</a> /                
                <?php $link = "" ?>
                @for($i = 1; $i <= count(Request::segments()); $i++)
                    @if($i < count(Request::segments()) & $i > 0)
                    <?php $link .= "/" . Request::segment($i); ?>
                    <a href="<?= $link ?>">{{ ucwords(str_replace('-',' ',Request::segment($i)))}}</a>
                    @else {{ucwords(str_replace('-',' ',Request::segment($i)))}}
                    @endif
                @endfor
                <div class="row">

                    <div class="col-md-4 offset-md-4 mt-5">

                        @include('items.change-pass-form')

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