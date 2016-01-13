	</div><!-- container -->

<div class="clear"></div>

<footer>
	<div class="footerbg">
		<div class="container">
			<nav class="footer_nav">
				<ul>
					<li><a href="">About Us Link/リンク</a></li>
					<li><a href="">Contact Us Link/お問い合わせ</a></li>
					<li><a href="">Terms of Service/サイトの利用方法</a></li>
					<li><a href="">Privacy Policy/プライバシーポリシー</a></li>
					<li><a href="">Site Map/サイトマップ</a></li>
					<li><a href="">Address and Phone Number</a></li>
				</ul>
			</nav>
<small>COPYRIGHT(C) FLORIST YASUSU , 2116 ALL RIGHT RESERVED.</small>
		</div><!-- container -->
	</div><!-- footerbg -->
</footer>

</div><!-- wrapper -->
<script>
$(function(){
// 	if (window.matchMedia('(max-width: 480px)').matches){
// 		$(".toggle_nav_i").click(function(){
// 			$("nav.header_nav div.container_mt0").slideToggle();
// 		});
// 	}
	menu_height = $(window).height();
	$("nav.header_nav div.container_mt0").css("height", menu_height + "px");

	$(".toggle_nav_i").click(function(){
		$(this).addClass("appearbtn");
		$("nav.header_nav div.container_mt0").addClass("appear");
		$(".menushade").css("display","block");
	});
	$("i.smartphone.fa.fa-times").click(function(){
		$(".toggle_nav_i").removeClass("appearbtn");
		$("nav.header_nav div.container_mt0").removeClass("appear");
		$(".menushade").css("display","none");
	});
	$(".menushade").click(function(){
		$(".toggle_nav_i").removeClass("appearbtn");
		$("nav.header_nav div.container_mt0").removeClass("appear");
		$(".menushade").css("display","none");
	});
});

$(window).resize(function(){
	menu_height = $(window).height();
	$("nav.header_nav div.container_mt0").css("height", menu_height + "px");

	$(".toggle_nav_i").click(function(){
		$(this).addClass("appearbtn");
		$("nav.header_nav div.container_mt0").addClass("appear");
	});
	$("i.smartphone.fa.fa-times").click(function(){
		$(".toggle_nav_i").removeClass("appearbtn");
		$("nav.header_nav div.container_mt0").removeClass("appear");
	});
	$(".menushade").click(function(){
		$(".toggle_nav_i").removeClass("appearbtn");
		$("nav.header_nav div.container_mt0").removeClass("appear");
		$(".menushade").css("display","none");
	});
});
</script>
</body>
</html>