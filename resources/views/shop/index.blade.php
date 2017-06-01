@extends('layouts.master')
@section('slider')
<!-- main-slider -->
		<ul id="demo1">
			<li>
				<img src="{{ URL::to('images/11.jpg')}}" alt="" />
				<!--Slider Description example-->
				<div class="slide-desc">
					<h3>Buy Rice Products Are Now On Line With Us</h3>
				</div>
			</li>
			<li>
				<img src="{{ URL::to('images/22.jpg')}}" alt="" />
				  <div class="slide-desc">
					<h3>Whole Spices Products Are Now On Line With Us</h3>
				</div>
			</li>
			
			<li>
				<img src="{{ URL::to('images/44.jpg')}}" alt="" />
				<div class="slide-desc">
					<h3>Whole Spices Products Are Now On Line With Us</h3>
				</div>
			</li>
		</ul>
	<!-- //main-slider -->
@endsection
@section('content')
<h1>My Shopping cart</h1>
@endsection