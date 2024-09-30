
	<div class="clearfix">
        <ul class="tab">
            <li><a href="javascript:void(0)" id="tab1"><span>公司治理</span></a></li>
            <li><a href="javascript:void(0)" id="tab2"><span>公司辦法</span></a></li>
            <li class="current"><a href="javascript:void(0)" id="tab3"><span>前十大股東名單</span></a></li>
        </ul>
    </div>
    <h3 class="title">前十大股東名單</h3>
    <div class="clearfix">
        <table>
            <thead>
                <tr>
                    <td><strong>主要股東名稱</strong></td>
                    <td><strong>持  有  股  數</strong></td>
                    <td><strong>持  股  比  例</strong></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>余宏揚</td>
                    <td>3,282,449</td>
                    <td>6.95%</td>
                </tr>
                <tr class="alt_row">
                    <td>神通電腦股份有限公司</td>
                    <td>1,486,409</td>
                    <td>3.15%</td>
                </tr>
                <tr>
                    <td>宏宜投資股份有限公司</td>
                    <td>1,214,546</td>
                    <td>2.57%</td>
                </tr>
                <tr class="alt_row">
                    <td>林聖懿</td>
                    <td>689,090</td>
                    <td>1.46%</td>
                </tr>
                <tr>
                    <td>王三光</td>
                    <td>615,000</td>
                    <td>1.30%</td>
                </tr>
                <tr class="alt_row">
                    <td>陳健邦</td>
                    <td>600,000</td>
                    <td>1.27%</td>
                </tr>
                <tr>
                    <td>楊仲祥</td>
                    <td>592,000</td>
                    <td>1.25%</td>
                </tr>
                <tr class="alt_row">
                    <td>宋祥榮</td>
                    <td>426,352</td>
                    <td>0.90%</td>
                </tr>
                <tr>
                    <td>吳宗霖</td>
                    <td>400,000</td>
                    <td>0.85%</td>
                </tr>
                <tr class="alt_row">
                    <td>許淑英</td>
                    <td>390,000</td>
                    <td>0.83%</td>
                </tr>
            </tbody>
        </table>
        <br>
        <sup>
            主要股東名單：<br>
            股權比例達 5% 以上之股東或股權比例占前10名之股東名稱、持股數額及比例。
        </sup>
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
		$('#tab2').click(function(){
			$('.main_content').html("載入中...");
			$.ajax({
				url: 'content/page2.php',
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
	})
</script>