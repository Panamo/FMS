</div>
<footer class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
	<div class="container">
		<p class="navbar-text navbar-right">
        <a class="navbar-link" href="https://github.com/AoLab/">Panamo</a> &copy; 2016
		</p>
	</div>
</footer>

<!-- jQuery -->
{!! Html::script('js/jquery.js') !!}

<!-- Bootstrap Core JavaScript -->
{!! Html::script('js/bootstrap.min.js') !!}

<!-- Vue.js Thanks to Pooya -->
{!! Html::script('js/vue.min.js') !!}

<!-- 18.20 specific javascripts -->
<!-- Pages specific javascripts -->
@hasSection('js')
<script src=@yield('js')></script>
@endif

</body>
</html>
