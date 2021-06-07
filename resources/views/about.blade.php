@extends('layouts.app')
@section('title', 'About US')
@section('data-page-id', 'about')

@section('content')

	<div class="home">
	<div class="text-center">
		<div class="row">

		<div> <img src="/images/alimeystore.jpg" alt="Alimey Store"> </div>
			<br>
		<h1>ABOUT US</h1>
		<hr>
			<div> <img src="/images/sliders/slide1.jpg" alt="Alimey Store"> </div>

		<span>Responsibilities</span> <br>


		<div>
		<h6>AlimeyStore has established values ​​that are fundamental to
		Its business that provides customers with goods and services in a timely manner to meet customer needs and is responsible for resolving customer issues professionally.</h6>
		<hr>
		</div>
	<div class="hos">
		<div> <img src="/images/sliders/slide2.jpg" alt="Alimey Store"> </div>
		<span> Honesty</span> <br>
	</div>

	<div class="sib">
		<h6> Honesty is a valuable principle that maintains a high ethical basis in all company practices and resolves all concerns with integrity, honesty and virtue.</h6> <br>
		<hr>
	</div>
	<div class="exc">
		<span> Excellence</span> <br>
	</div>
		<div class="cell">
		<h6>Excellence in the quality of the company's work To achieve excellence is reflected in the quality of the solutions that the company develops for customers and the value that customers receive from the company's products and services.</h6>
	<hr>
	</div>


		<div class="page">
	<span> Location</span> <br><br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d3882.009738888431!2d103.86250217629659!3d13.349670199999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d13.3497159!2d103.8638453!4m5!1s0x31101767059b61c9%3A0x78ce828969dbb3f2!2sTL%20Air%20Express%2C%20Krong%20Siem%20Reap!3m2!1d13.3592196!2d103.88080509999999!5e0!3m2!1skm!2skh!4v1622797799149!5m2!1skm!2skh" width="1000" height="400" style="border:0" allowfullscreen="" loading="lazy"></iframe>
			<h1>Address: WatBo Village, Salakomroek Commune, Siem Reap City, Siem Reap Province </h1>
		<hr>
	</div>

		<div class="feed">

			<form action="/" class="login_form">
				<h1 style="color:white;">Feedback</h1>
      <div class="form-left-decoration"></div>
      <div class="form-right-decoration"></div>
      <div class="circle"></div>
      <div class="form-inner">
        <input type="text" placeholder="Username">
        <input type="email" placeholder="Email">
        <textarea placeholder="Message..." rows="5"></textarea>
        <button type="submit" class="button">Submit</button>
      </div>
    </form>

	</div>
<hr>
	<div>
		<span>CONTACT</span>
		<br>
		<h2></h2>
			<h2>069 215 092</h2>
			<h2>099 245 511</h2>


		<div>
			<span>FOLLOW US</span>
			<br>
			<a href="https://www.facebook.com/AlimeyExpress" ><img src="https://img.icons8.com/nolan/96/facebook-new.png"/></a>
		</div>
		<hr>
		<style>
			span, h1{
					font-size: 24px;
    				color: #ff4400;
    				position: relative;
    				font-weight: bold;
			}
			span{
				 text-decoration-line: underline;
 				 text-decoration-style: solid;
			}

		</style>
		</div>
		</div>
@stop
