@include('includes.head')
	
@include('includes.header')		

		<!-- Sidebar -->
		@include('includes.sidebar')
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				@yield('content')
			</div>
			{{-- footer --}}
		@include('includes.footer')

		</div>		
	</div>
	<!--   Core JS Files   -->
	@include('includes.js')
	@include('sweetalert::alert')
</body>
</html>