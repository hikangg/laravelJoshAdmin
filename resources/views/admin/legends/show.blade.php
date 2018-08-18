@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
legend
@parent
@stop

@section('content')
<section class="content-header">
    <h1>Legends</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>legends</li>
        <li class="active">legends</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    legend {{ $legend->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $legend->id }}</td></tr>
                     <tr><td>string</td><td>{{ $legend['string'] }}</td></tr>
					<tr><td>string</td><td>{{ $legend['string'] }}</td></tr>
					<tr><td>text</td><td>{{ $legend['text'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</div>
@stop