<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
 global $base_url; 
?>
<?php include('special_header.php');?>

<section id="hero"  data-img="<?php echo $base_url.'/'.drupal_get_path('theme', 'thedu'); ?>/img/hero.jpg" class="hero herobackstretch main-content wrapper-dark text-center">
    <div class="hero-content">
        <h1 class="ng-binding">英语在线教育</h1>
        <h2 class="text-light ng-binding">真人外教互动课堂第一品牌</h2>
        <ul>
            <li>
            <?php
            	echo l('课程体系','node/43',array('attributes'=>array('class'=>array('btn btn-course-full btn-lg'))));
            ?>
            </li>
            <li>
            <?php
            	echo l('立刻体验','student/register',array('attributes'=>array('class'=>array('btn btn-trial-full btn-lg'))));
            ?>
            </li>
        </ul>


			
				<!-- <p class="rw-sentence-IE">Wow you can learn English!</p> -->


        <!-- <p> -->
	        <!-- <section class="rw-wrapper">
	        	<span class="rw-sentence">
							<div class="rw-words rw-words-1">
									<span>Astonishingly</span>
									<span>Yes</span>
									<span>Wow</span>
									<span>Amazingly</span>
									<span>Incredibly</span>
									<span>Trust us</span>
							</div>
						</span>You can learn English like this !
					</section> -->
            <!-- <a class="how-it-works underline-white" href="/english/how-it-works">
             这样学习英语一定行！
						</a> -->
        <!-- </p> -->
    </div>
</section>
<div class="section-share">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 dale_text_center">
					<div class="share-wrap">
							<span>分享学习体验</span>
	            <ul>
	                <li class="sinaWeibo tips" title="分享到新浪微博"></li>
	                <li class="weixin tips" title="分享到微信"></li>
	                <li class="tenWeibo tips" title="分享到QQ空间"></li>
	                <li class="douban tips" title="分享到豆瓣"></li>
	                <li class="renren tips" title="分享到人人"></li>
	            </ul>
							<span>合作企业</span>
							<img   width="619" height="38" alt="" src="<?php echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/seen.png">
	        </div>
	        <hr>
			</div>
		</div>
	</div>
</div>
<div class="section-slide container">
	<aside class="col-sm-6" role="complementary">
		<div class="intro">
			<h3>我们是国际资深语言学校，因此...</h3>
			<ul>
				<li>ABC纯正英语学习系统</li>
				<li>全球认证师资，老师现场互动</li>
				<li>独家打造少儿英语在线课程体系</li>
				<li>个性化教材及学习计划，专人跟踪学习进度</li>
				<li>提供英语能力认证等级证书（证书说明页) from A1 to C2</li>
			</ul>
		</div>
		<div class="intro">
			<h3>拥有20余年远程教育经验，因此...</h3>
			<ul>
				<li>弹性的学习时间</li>
				<li>隐私的学习环境</li>
				<li>专业的学习顾问</li>
				<li>无论何时，无论何地，想学就学!</li>
			</ul>
		</div>
	</aside>
	<section class="col-sm-6">
		<div class="infoslide">
			<!-- <img style='' src="http://d1gcwknxgmteff.cloudfront.net/version-2578/images/Main/Frontend/Home/offerings/1.jpg"> -->
		</div>
	</section>

</div>

<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
      	<div class="priceheader">
      		<h2>我们提供多种套餐供您选择</h2>
      	</div>
      </div>
    </div>
		<div class="row">
			<div class="col-lg-3">
          <div class="panel panel-primary">
              <div class="panel-heading">
                <p class="plan-title">
                  <span class="plan-name">初级套餐</span>
                  <br>
                  <span>
                    <span class="the-price">
                      <span class="number">1000</span>
                    </span>
                    <span class="month byMonth"><span class="glyphicon glyphicon-tint"></span></span>
                  </span>
                </p>
              </div>
              <div class="panel-body">
              	<ul>
              		<li>赠送点券<span class="badge">50点</span></li>
              		<li>获得点券1050点</li>
              		<li>学习时间1个月</li>
              		<li>赠送课时1节</li>
              	</ul>
                <p>购买1000点券可学习一个月 20课时/月 注册即送50点券 每上一节课 消费 50点 .</p>
              </div>
              <div class="panel-footer">
                  <span class="btn btn-success trackedLink" href="http://wpa.qq.com/msgrd?v=3&uin=474054236&site=qq&menu=yes&type=1">点击免费咨询</span>
              </div>
          </div>
      </div>
      <div class="col-lg-3">
          <div class="panel panel-green">
              <div class="panel-heading">
                  <p class="plan-title">
                  <span class="plan-name">成长套餐</span>
                  <br>
                  <span>
                    <span class="the-price">
                      <span class="number">3000</span>
                    </span>
                    <span class="month byMonth"><span class="glyphicon glyphicon-tint"></span></span>
                  </span>
                </p>
              </div>
              <div class="panel-body">
                  
              	<ul>
              		<li>赠送点券<span class="badge">150点</span></li>
              		<li>获得点券3300点</li>
              		<li>学习时间3个月</li>
              		<li>赠送课时3节</li>
              	</ul>
                <p>购买3000点券可学习3个月 20课时/月 注册即送50点券 每上一节课 消费 50点 .</p>
              </div>
              <div class="panel-footer">
                  <span class="btn btn-success trackedLink" href="http://wpa.qq.com/msgrd?v=3&uin=474054236&site=qq&menu=yes&type=2">点击免费咨询</span>
              </div>
          </div>
          <!-- /.col-lg-4 -->
      </div>
      <div class="col-lg-3">
          <div class="panel panel-yellow">
              <div class="panel-heading price-corner">
              		<i class="corner">
                    <i class='priceciblcok'></i>
                    <p class="price-corner-p">
                      热 销 hot
                    </p>
                  </i>
                  <p class="plan-title">
                  <span class="plan-name">提升套餐</span>
                  <br>
                  <span>
                    <span class="the-price">
                      <span class="number">6000</span>
                    </span>
                    <span class="month byMonth"><span class="glyphicon glyphicon-tint"></span></span>
                  </span>
                </p>
              </div>
              <div class="panel-body">
                  <ul>
              		<li>赠送点券<span class="badge">300点</span></li>
              		<li>获得点券6300点</li>
              		<li>学习时间6个月</li>
              		<li>赠送课时6节</li>
              	</ul>
              	<p>购买6000点券，学习6个月，送300点 注册即送50点券 每上一节课 消费 50点 .</p>
              </div>
              <div class="panel-footer">
                  <span class="btn btn-success trackedLink" href="http://wpa.qq.com/msgrd?v=3&uin=474054236&site=qq&menu=yes&type=3">点击免费咨询</span>
              </div>
          </div>
          <!-- /.col-lg-4 -->
      </div>
      <div class="col-lg-3">
          <div class="panel panel-red">
              <div class="panel-heading">
                  <p class="plan-title">
                  <span class="plan-name">高级套餐</span>
                  <br>
                  <span>
                    <span class="the-price">
                      <span class="number">10000</span>
                    </span>
                    <span class="month byMonth"><span class="glyphicon glyphicon-tint"></span></span>
                  </span>
                </p>
              </div>
              <div class="panel-body">
                  <ul>
              		<li>赠送点券<span class="badge">2000点</span></li>
              		<li>获得点券12000点</li>
              		<li>学习时间12个月</li>
              		<li>赠送课时40节</li>
              	</ul>
                  <p>购买10000点券，学习12个月，送2000点 注册即送50点券 每上一节课 消费 50点 .</p>
              </div>
              <div class="panel-footer">
                  <span class="btn btn-success trackedLink" href="http://wpa.qq.com/msgrd?v=3&uin=474054236&site=qq&menu=yes&type=4">点击免费咨询</span>
              </div>
          </div>
          <!-- /.col-lg-4 -->
      </div>

		</div>
		<div class="row">
        <div id="basic-plan">
          <div class="title">
            <p>私人定制</p>
          </div>
          <div class="body">
					  <span style="margin-right:170px;">企业培训?&nbsp;国际学校?&nbsp;国际交流?</span>
					  <span class="i-phone">
					  	<span class="glyphicon glyphicon-earphone"></span>
					    <a href="tel:+86 (010) 568-9834">+86 (010) 568-9834</a>
					  </span>
					  <span class="i-mail">
					  	<span class="fa fa-send-o"></span>
					    <a href="mailto:sales@abc-chinaedu.com">sales@abc-chinaedu.com</a>
					  </span>
					</div>
        </div>
      </div>
	</div>
</div>

<!-- advanced-features -->
<div id="advanced-features">
  <div class="container">
    <h1 class="blue-heading">Collaborative Features</h1>
    <h2>Involve your coworkers in social media monitoring</h2>
    <section class="row down">
      <section class="col-md-6">
        <div class="col-md-2 col-xs-3">
          <img src="<?php  echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/mention/share.svg">
        </div>
        <div class="col-md-10 col-xs-9">
          <h4>
            Share your alerts with your team
          </h4>
          <p>
            Get collaborative on shared alerts with real-time management across devices. mention makes it easy for any size team to stay in the know about their brand.
          </p>
        </div>
      </section>
      <section class="col-md-6">
        <div class="col-md-2 col-xs-3">
          <img src="<?php  echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/mention/task.svg">
        </div>
        <div class="col-md-10 col-xs-9">
          <h4>
            Assign Tasks to the right people
          </h4>
          <p>
            Quickly share and react. Send a technical question to your Tech Team, a sales question to your Sales Team, and get everyone in on the Community Management game. 
          </p>
        </div>
      </section>
      <section class="col-md-6">
        <div class="col-md-2 col-xs-3">
          <img src="<?php  echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/mention/list.svg">
        </div>
        <div class="col-md-10 col-xs-9">
          <h4>
            Track your team's progress
          </h4>
          <p>
            With Mention's Task List and Activity Feed, you'll never be in the dark when it comes to knowing who's done what. 
          </p>
        </div>
      </section>
      <section class="col-md-6">
        <div class="col-md-2 col-xs-3">
          <img src="<?php  echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/mention/workflow.svg">
        </div>
        <div class="col-md-10 col-xs-9">
          <h4>
            Jumpstart your workflow
          </h4>
          <p>
            Work smarter. Easily add new team members, grant access only to those who need it, and speed up your social media presence while protecting your information.
          </p>
        </div>
      </section>
    </section>
  </div>
</div>
<!-- advanced-features -->

<!-- scroll effect begin -->
<div id="cbp-so-scroller" class="cbp-so-scroller">
	<section class="cbp-so-section">
		<article class="cbp-so-side cbp-so-side-left">
			<h3>体验更智能的网络</h3>
			<p><a href="https://www.baidu.com/s?wd=chrome" target="_blank">点击下载</a>使用Chrome浏览时，可以充分利用Google的功能。将Chrome与Google结合使用时，您不仅可以获得相关度更高的查询建议，还可以利用各种Google产品（包括语音搜索和Google即时）的功能。启用Google即时</p>
		</article>
		<figure class="cbp-so-side cbp-so-side-right">
			<img src="<?php echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/benefits-5-mobile_2x.png" alt="img01">
		</figure>
	</section>
	<section class="cbp-so-section">
		<figure class="cbp-so-side cbp-so-side-left">
			<img src="<?php echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/industry_hospitality-transportation_solution.jpg" alt="img01">
		</figure>
		<article class="cbp-so-side cbp-so-side-right">
			<h3>Plum caramels</h3>
			<p>Lollipop powder danish sugar plum caramels liquorice sweet cookie. Gummi bears caramels gummi bears candy canes cheesecake sweet roll icing dragée. Gummies jelly-o tart. Cheesecake unerdwear.com candy canes apple pie halvah chocolate tiramisu.</p>
		</article>
	</section>
	<section class="cbp-so-section">
		<article class="cbp-so-side cbp-so-side-left">
			<h3>Marzipan gingerbread</h3>
			<p>Soufflé bonbon jelly cotton candy liquorice dessert jelly bear claw candy canes. Pudding halvah bonbon marzipan powder. Marzipan gingerbread sweet jelly.</p>
		</article>
		<figure class="cbp-so-side cbp-so-side-right">
			<img src="<?php echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/icon-write-mac.png" alt="img01">
		</figure>
	</section>
	<section class="cbp-so-section">
		<figure class="cbp-so-side cbp-so-side-left">
			<img src="<?php echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/bg-callrecorder.jpg" alt="img01">
		</figure>
		<article class="cbp-so-side cbp-so-side-right">
			<h3>Carrot cake</h3>
			<p>Sesame snaps sweet wafer danish. Chupa chups carrot cake icing donut halvah bonbon. Chocolate cake candy marshmallow pudding dessert marzipan jujubes sugar plum.</p>
		</article>
	</section>
	<section class="cbp-so-section">
		<article class="cbp-so-side cbp-so-side-left">
			<h3>Pudding lollipop</h3>
			<p>Chupa chups pudding lollipop gummi bears gummies cupcake pie. Cookie cotton candy caramels. Oat cake dessert applicake. Sweet roll tiramisu sweet roll sweet roll.</p>
		</article>
		<figure class="cbp-so-side cbp-so-side-right">
			<img src="<?php echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/crsample.jpg" alt="img01">
		</figure>
	</section>
	<section class="cbp-so-section">
		<figure class="cbp-so-side cbp-so-side-left">
			<img src="<?php echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/industry_hospitality-transportation_solution.jpg" alt="img01">
		</figure>
		<article class="cbp-so-side cbp-so-side-right">
			<h3>Soufflé bonbon</h3>
			<p>Cake cotton candy lollipop. Cake croissant cheesecake candy sugar plum icing apple pie wafer. Pie sugar plum tiramisu tiramisu pie fruitcake candy icing. Candy icing gummies gummies cheesecake brownie lemon drops chocolate gingerbread.</p>
		</article>
	</section>
</div>


<!-- advanced-features -->
<div id="advanced-features">
  <div class="container">
    <h1 class="blue-heading">Collaborative Features</h1>
    <h2>WHAT ARE PEOPLE SAYING ABOUT ABC-CHINA?</h2>

		<div id="feature-7" class="row feature">
		  <div class="social-card twitter col-md-4"><a href="https://twitter.com/ns0n/status/530459592808230912" target="_blank"><div style="background-image:url('http://luxe.com/img/avatar_ns0n.jpg')" class="avatar"></div><br>@ns0n</a><p><a class="tweet-url username" href="https://twitter.com/luxevalet" data-screen-name="luxevalet" target="_blank" rel="nofollow">@luxevalet</a> just dropped off my car with a valet for the first time. Right in the middle of FiDi in SF. so cool!!!</p></div>
		  <div class="social-card twitter col-md-4"><a href="https://twitter.com/trishymitch/status/526810218949140480" target="_blank"><div style="background-image:url('http://luxe.com/img/avatar_trishymitch.jpg')" class="avatar"></div><br>@trishymitch</a><p>20 min early to appt in SF cuz I didn't have to park! Used Luxe Valet. Need to park in SF? Try them! <a href="http://www.luxe.com" target="_blank" rel="nofollow">http://www.luxe.com</a>  <a href="https://twitter.com/#!/search?q=%23luxevalet" title="#luxevalet" class="tweet-url hashtag" target="_blank" rel="nofollow">#luxevalet</a></p></div>
		  <div class="social-card twitter col-md-4"><a href="https://twitter.com/rsarver/status/532225376014331906" target="_blank"><div style="background-image:url('http://luxe.com/img/avatar_rsarver.jpg')" class="avatar"></div><br>@rsarver</a><p>I keep hearing more and more good stories about <a class="tweet-url username" href="https://twitter.com/LuxeValet" data-screen-name="LuxeValet" target="_blank" rel="nofollow">@LuxeValet</a>. They're onto something...</p></div>
		</div>
		<div id="feature-7" class="row feature">
			<div class="social-card twitter col-md-4"><a href="https://twitter.com/Raquelschair/status/527896193662476288" target="_blank"><div style="background-image:url('http://luxe.com/img/avatar_Raquelschair.jpg')" class="avatar"></div><br>@Raquelschair</a><p>Just used <a class="tweet-url username" href="https://twitter.com/luxevalet" data-screen-name="luxevalet" target="_blank" rel="nofollow">@luxevalet</a> for the first time and I'm obsessed. That just made my commute into the city a little easier! Love! Check them out!</p></div>
		  <div class="social-card twitter col-md-4"><a href="https://twitter.com/normanliang/status/527976247650164736" target="_blank"><div style="background-image:url('http://luxe.com/img/avatar_normanliang.jpg')" class="avatar"></div><br>@normanliang</a><p>Thanks <a class="tweet-url username" href="https://twitter.com/luxevalet" data-screen-name="luxevalet" target="_blank" rel="nofollow">@luxevalet</a> for the pickup and dropoff in SF. Great service!</p></div>
		  <div class="social-card twitter col-md-4"><a href="https://twitter.com/SahilRoyVerma/status/528263832875962368" target="_blank"><div style="background-image:url('http://luxe.com/img/avatar_SahilRoyVerma.jpg')" class="avatar"></div><br>@SahilRoyVerma</a><p><a class="tweet-url username" href="https://twitter.com/luxevalet" data-screen-name="luxevalet" target="_blank" rel="nofollow">@luxevalet</a> is freaking legit. Thanks for making it so easy!</p></div>	  
		</div>
  </div>
</div>
<style type="text/css">
	.social-card {
    display: block;
    width: 370px;
    width: 30%;
    height: 350px;
    margin: 30px 15px 0;
    padding: 0;
    outline: #f6f7f7 solid 2px;
    float: left;
    text-align: center
}

.social-card .avatar {
    display: inline-block;
    position: relative;
    margin: 50px 0 0;
    width: 90px;
    height: 90px;
    background-size: cover;
    border-radius: 50%
}

.social-card a,.social-card p,.social-card p a {
    font: 18px/24px HelveticaNeue-Light,"Helvetica Neue",Verdana,geneva,sans-serif;
    font-weight: 200
}

.social-card>a {
    font-weight: 500;
    font-size: 16px
}

.social-card p {
    position: relative;
    width: 78%;
    margin: 24px auto 0
}

.social-card p a {
    color: #0096ec;
    text-transform: none
}
.social-card.twitter {
    background: url(http://luxe.com/img/bg_twitter.png) top left/75px 75px no-repeat #fff;
}
</style>

<div id="float-consult" class="float-consult" style="margin-top: -62px; visibility: visible;">
  <div class="btn-group-vertical">
    <a class="btn btn-consult-default" href="http://wpa.qq.com/msgrd?v=3&uin=474054236&site=qq&menu=yes&type=left"  data-toggle="tooltip" data-placement="left" target="_blank" title="QQ客服" ><span class="fa fa-qq"></span></a>
		<a class="btn btn-consult-default" title="Skype"  data-toggle="tooltip" data-placement="left"><span class="fa fa-skype"></span></a>
    <a class="btn btn-consult-default" title="关注微信"><span class="fa fa-wechat"></span></a>
		<a class="btn btn-consult-default" href="http://www.baidu.com/s?wd=chrome" target="_blank" data-toggle="tooltip" data-placement="left" title="Google浏览器支持"><span class="fa fa-chrome"></span></a>
    <a class="btn btn-consult-default" href="tel:13712345678" data-toggle="tooltip" data-placement="left" title="137-1234-5678"><span class="glyphicon glyphicon-earphone"></span></a>
    
  </div>
  <div class="qr hide">
  	<img src="http://combo.b.qq.com/store/src/themes/mpPortal/register/images/urCode.png">
  </div>
</div>

<!-- scroll effect end -->
<div class="container">

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#page-header -->

  <div class="row">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section<?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>
</div>
</div>

<?php include('special_footer.php');?>

<?php if(!user_is_logged_in()): ?>
<!-- begin olark code -->
<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('8506-544-10-4211');/*]]>*/</script><noscript><a href="https://www.olark.com/site/8506-544-10-4211/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
<!-- end olark code -->
<?php endif;?>