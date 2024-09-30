			
				<div class="clearfix">
					<ul class="tab">
						<li><a href="javascript:void(0)" id="tab1"><span>公司治理</span></a></li>
						<li class="current"><a href="javascript:void(0)" id="tab2"><span>公司辦法</span></a></li>
						<li><a href="javascript:void(0)" id="tab3"><span>前十大股東名單</span></a></li>
					</ul>
				</div>
				<div id="principle">
				<h3 class="title">公司辦法</h3>
				<ul class="pdf">
					<li><a href="http://www.ares.com.tw/files/pdf/公司章程_1050622-1.pdf" rel="external">公司章程</a></li>
					<li><a href="http://www.ares.com.tw/files/pdf/資金貸與他人作業程序_1050622.pdf" rel="external">資金貸與他人作業程序</a></li>
					<li><a href="http://www.ares.com.tw/files/pdf/p03.pdf" rel="external">集團企業特定公司及關係人交易作業程序</a></li>
					<li><a href="http://www.ares.com.tw/files/pdf/取得或處分資產處理程序1050622.pdf" rel="external">取得或處分資產處理程序</a></li>
					<li><a href="http://www.ares.com.tw/files/pdf/p05.pdf" rel="external">股東會議事規則</a></li>
					<li><a href="http://www.ares.com.tw/files/pdf/背書保證作業程序_1050622.pdf" rel="external">背書保證作業程序</a></li>
					<li><a href="http://www.ares.com.tw/files/pdf/p07.pdf" rel="external">董事及監察人選舉辦法</a></li>
					<li><a href="http://www.ares.com.tw/files/pdf/p08.pdf" rel="external">董事會議事規範</a></li>
					<li><a href="http://www.ares.com.tw/files/pdf/p09.pdf" rel="external">買回股份轉讓員工辦法</a></li>
				</ul>
				</div>
<script type="text/javascript">
	$(function(){
		$('#tab1').click(function(){
			$('.main_content').html("載入中...");
			$.ajax({
				url: 'content/page1.php',
				type: "GET",
				dataType: 'html',
				success: function(html) {
                    $('.main_content').html(html); 
                },
                error: function(html) {
                    $('.main_content').html("載入失敗"); 
                }
			})
		});
		$('#tab3').click(function(){
            $('.main_content').html("載入中...");
            $.ajax({
                url: 'content/page3.php',
                type: "GET",
                dataType: 'html',
                success: function(html) {
                    $('.main_content').html(html); 
                },
                error: function(html) {
                    $('.main_content').html("載入失敗"); 
                }

            })
        });
		$('.pdf a[rel="external"]').before('<img src="/img/pdf.png" alt="">');
	})
</script>