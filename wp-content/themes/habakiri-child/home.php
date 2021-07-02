<?php
/**
 * Version    : 1.1.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 30, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<?php get_header(); ?>


<?php get_template_part( 'modules/page-header' ); ?>


<div class="sub-page-contents head-search">
	<div class="container">
		<div class="row">
			<div class="head-search">

				<h2>フリーワード検索</h2>

				<form method="get" action="#" class="search_container">
					<input type="text" size="25" placeholder="キーワード検索">
					<input type="submit" value="&#xf002">
				</form>

			</div> 
		</div><!-- end .row -->
	</div><!-- end .container -->

</div><!-- end .sub-page-contents -->

<div class="sub-page-contents ad-top">

	<div class="container">

		<?php get_template_part( 'slider' ); ?>

	</div><!-- //container -->

</div><!-- end .sub-page-contents -->

<div class="sub-page-contents search_btn">

	<div class="container">

		<ul>
			<li class="col-xs-4 big-title-one"><img src="<?php echo get_template_directory_uri(); ?>/images/kikai-on.png"></li>
			<li class="col-xs-4 big-title-two"><img src="<?php echo get_template_directory_uri(); ?>/images/shuhen-on.png"></li>
			<li class="col-xs-4 big-title-three"><img src="<?php echo get_template_directory_uri(); ?>/images/maker-on.png"></li>
		</ul>

	</div><!-- //container -->	
</div>


<div class="sub-page-contents search_main">

	<div class="container">

		<div class="easy-search">
			<h2>かんたん検索</h2>

			<div class="search-machine">

				<div class="search-machine-inner">
					<div class="search-machine-l col-xs-6">
						<div class="search-machine-l-in">

							<h3>①大分類を選んでください</h3>

							<div class="machine-area">

								<ul>
									<li id="machine-list-one" class='secList'>工作機械</li>
									<li id="machine-list-two" class='secList'>プレス機</li>
									<li id="machine-list-three" class='secList'>板金機械</li>
									<li id="machine-list-four" class='secList'>測定器</li>
									<li id="machine-list-five" class='secList'>ロボット</li>
									<li id="machine-list-six" class='secList'>コンプレッサー</li>
									<li id="machine-list-seven" class='secList'>溶接機</li>
									<li id="machine-list-eight" class='secList'>その他機械</li>
									
									
								</ul>
							
							</div><!-- //machine-area -->


							<div class="shuhen-area">


								<ul>
									
									<li id="machine-list-ten" class='secList'>ツーリング</li>
									<li id="machine-list-eleven" class='secList'>治工具類</li>
									<li id="machine-list-twelve" class='secList'>測定器具</li>
									<li id="machine-list-thirteen" class='secList'>テーブル</li>
									
								</ul>

							</div><!-- //shuhen-area -->


						</div>
					</div>	
					<div class="search-machine-r col-xs-6">
						
						<div class="search-machine-r-in">
							
							<div class="search-machine-r-in-in middleclass-top">
								<h3>①を選択してください</h3>
							</div>

							<div class="search-machine-r-in-in middleclass-second">
								<h3>②中分類を選んでください</h3>

								<ul class="machine-list-one section">
									<li>旋　盤</li>
									<li>マシニングセンタ</li>
									<li>NCフライス盤</li>
									<li>NC研削盤</li>
									<li>歯車加工機</li>
									<li>放電加工機</li>
									<li>その他</li>
								</ul>

								<ul class="machine-list-two section">
									<li>電動プレス</li>
									<li>電動門型プレス</li>
									<li>油圧プレス</li>
									<li>鍛造プレス</li>
									<li>鍛造プレス</li>
									<li>鍛造プレス</li>
									<li>エアプレス</li>
									<li>その他</li>
								</ul>

								<ul class="machine-list-three section">
									<li>レーザー加工機</li>
									<li>プラズマ加工機</li>
									<li>ガス切断機</li>
									<li>ブレスブレーキ（ベンダ）</li>
									<li>シャーリング</li>
									<li>ベンディングロール</li>
									<li>板金機械、その他</li>
								</ul>

								<ul class="machine-list-four section">
									<li>三次元測定機</li>
									<li>画像測定機</li>
									<li>表面粗さ・輪郭形状測定</li>
									<li>プリセッター</li>
									<li>真円度測定器</li>
								</ul>

								<ul class="machine-list-five section">
									<li>工作機械用ロボット</li>
									<li>プレス用ロボット</li>
									<li>溶接ロボット</li>
								</ul>


								<ul class="machine-list-six section">
									<li>エアコンプレッサー</li>
								</ul>

								<ul class="machine-list-seven section">
									<li>溶接機</li>
								</ul>

								<ul class="machine-list-eight section">
									<li>溶接機</li>
								</ul>

								<ul class="machine-list-nine section">
									<li>CADCAM</li>
								</ul>

								<ul class="machine-list-ten section">
									<li>ツーリング</li>
								</ul>

								<ul class="machine-list-eleven section">
									<li>治具工具類</li>
								</ul>

								<ul class="machine-list-twelve section">
									<li>測定器具</li>
								</ul>

								<ul class="machine-list-thirteen section">
									<li>測定器具</li>
								</ul>

								

							</div>
						</div>

					</div>
				</div>		
			</div><!-- //search-machine	 -->



		</div><!-- //easy-search -->

		<div class="search_list">

			<div class="search_list_head">
				
				<div class="search_list_head_l col-xs-6">

					<div class="search_list_machine_select search_list_head_l_select">
						<select>
							<option value="1">年式を選択1</option>
							<option value="2">年式を選択2</option>
						</select>
					</div>	
					<div class="search_list_maker_select search_list_head_l_select">
						<select>
							<option value="1">年式を選択1</option>
							<option value="2">年式を選択2</option>
						</select>
					</div>	
				</div>
				
				<div class="search_list_head_r col-xs-6">
					<div class="search_list_head_r_in">
						<form method="get" action="#" class="search_list_head_r_key">
						<input type="text" size="25" placeholder="キーワード検索">
						<input type="submit" value="">
						</form>
					</div>	
				</div>

			</div>

			<div class="search_list_table">
				
				<table>
					<thead>
						<tr>
							<th class="img">画像</th>
							<th class="tdname">種類</th>
							<th class="maker">メーカー</th>
							<th class="model">型式</th>
							<th class="">主な使用</th>
							<th class="buttons reset">WEBサイト</th>
						</tr>
					</thead>
					
					<tbody>

						<tr class="machine">
				
							<td class="img">
								<div class="img_area">
									<img src="img/1.jpg">
								</div>
							</td>
							<td class="tdname">
								<a href="machine.html">NC旋盤
							</td>
							<td class="maker">
								AMADA WASINOアマダワシノ
							</td>
							<td class="model">
								G07-F
							</td>
							
							<td class="">
								<div>寸法:550×900×790mm BT50用 20本、40用 24本 計44本収納 取っ手&amp;キャスター付 内容と現品に相違がある場合は、現品を優先させて…</div>
							</td>
						
							
							<td class="button">
								<a href=""><i class="fa fa-share-square-o" aria-hidden="true"></i></a>
								
							</td>
						</tr>
			<!-- machine -->
					</tbody>	
				</table>	

			</div>
			
			

		</div><!-- //search_list -->



		

	</div><!-- //container -->	
	

</div><!-- //search_main -->








<?php get_footer(2); ?>
