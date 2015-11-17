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
        <h2 class="text-light ng-binding">Your online English course for real life.</h2>
        <p style="font-size:1.5em;">真人外教互动课堂第一品牌</p>
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
							<span>成功企业</span>
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
			<h3>我们是国际资深语言学校，因此我们拥有...</h3>
			<ul>
				<li>ABC-ChinaEdu纯正英语学习系统</li>
				<li>全球认证师资，老师现场互动</li>
				<li>独家打造少儿英语在线课程体系</li>
				<li>个性化教材及学习计划，专人跟踪学习进度</li>
				<!-- <li>提供ABC-ChinaEdu英语能力认证等级证书</li> -->
			</ul>
		</div>
		<div class="intro">
			<h3>拥有20余年远程教育经验，因此我们...</h3>
			<ul>
				<li>拥有4000万成功教学案例 + 弹性的学习时间</li>
				<li>遍及200多个国家 + 自然的学习环境</li>
				<li>千余位专业外教 + 专业的本地学习顾问</li>
				<li>无论何时，无论何地，想学就学!</li>
			</ul>
		</div>
	</aside>
	<section class="col-sm-6">
		<div class="infoslide">
			
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
                <p>购买1000点券,学习时间：一个月 20课时/月 注册即送50点券.</p>
              </div>
              <div class="panel-footer">
                  <a class="btn btn-success addtocart" id="01month" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=474054236&site=qq&menu=yes&type=1">点击免费咨询</a>
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
                <p>购买3000点券,学习时间：3个月 20课时/月 注册即送50点券.</p>
              </div>
              <div class="panel-footer">
                  <a class="btn btn-success addtocart" id="03month" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=474054236&site=qq&menu=yes&type=2">点击免费咨询</a>
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
              	<p>购买6000点券,学习时间：6个月，送300点；注册即送50点券.</p>
              </div>
              <div class="panel-footer">
                  <a class="btn btn-success addtocart" id="06month" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=474054236&site=qq&menu=yes&type=3">点击免费咨询</a>
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
                  <p>购买10000点券,学习时间：12个月，送2000点；注册即送50点券.</p>
              </div>
              <div class="panel-footer">
                  <a class="btn btn-success addtocart" id="12month" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=474054236&site=qq&menu=yes&type=4">点击免费咨询</a>
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
    <h1 class="blue-heading">我们的服务</h1>
    <h2>一个全新的快乐和沉浸式英语学习世界</h2>
    <section class="row down img80">
      <section class="col-md-6">
        <div class="col-md-2 col-xs-3">
          <img src="<?php  echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/avatar/teens.jpg">
        </div>
        <div class="col-md-10 col-xs-9">
          <h4>
            <a href="http://www.britishcouncil.org/english">儿童及青少年英语</a>
          </h4>
          <p>通过我们的在线课程，让你的孩子在英语中有最好的开始，所有的课程专门为孩子设计的，乐趣，互动而且有效。</p>
        </div>
      </section>
      <section class="col-md-6">
        <div class="col-md-2 col-xs-3">
          <img src="<?php  echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/avatar/student.jpg">
        </div>
        <div class="col-md-10 col-xs-9">
          <h4>在校生英语</h4>
          <p>
           最大限度地提高您在学校的成绩，敢开口机会。我们有独特的定位，以帮助您获得您所需要的所有课程体系的等级。
          </p>
        </div>
      </section>
      <section class="col-md-6">
        <div class="col-md-2 col-xs-3">
          <img src="<?php  echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/avatar/workplace.jpg">
        </div>
        <div class="col-md-10 col-xs-9">
          <h4>
            职场专业英语
          </h4>
          <p>
            在全世界的商务语言中有效地沟通，充分发挥你的潜力。我们的商务英语有独特的学习方法，确保您的学习是实战性的运用。
          </p>
        </div>
      </section>
      <section class="col-md-6">
        <div class="col-md-2 col-xs-3">
          <img src="<?php  echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/avatar/companies.jpg">
        </div>
        <div class="col-md-10 col-xs-9">
          <h4>
            企业英语培训
          </h4>
          <p>
            为企业提供专属主题讲堂，根据企业需求开设课程，由资深外教顾问讲解，富有启发与趣味，学员能从讲堂中获得最全面、最实用的内容，全面提高公司整体文化氛围。
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
			<h3>架构于谷歌浏览器的ABC-ChinaEdu学习系统</h3>
			<p>使用Chrome浏览时，不仅可以充分利用Google的最先进的浏览器功能。而且ABC-ChinaEdu学习系统就是在Chrome下构建的，让您体验不一样的更智能的网络产品带的学习效果<a href="https://www.baidu.com/s?wd=chrome" target="_blank">下载</a></p>
		</article>
		<figure class="cbp-so-side cbp-so-side-right">
			<a href="https://www.baidu.com/s?wd=chrome" target="_blank"><img src="<?php echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/benefits-5-mobile_2x.png" alt="img01"></a>
		</figure>
	</section>
	<section class="cbp-so-section">
		<figure class="cbp-so-side cbp-so-side-left">
			<img src="<?php echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/industry_hospitality-transportation_solution.jpg" alt="img01">
		</figure>
		<article class="cbp-so-side cbp-so-side-right">
			<h3>我们拥有丰富的教学经验</h3>
			<p>在ABC-ChinaEdu您将会和世界顶尖的英语授课专家一起学习英语。我们已经有75年的教学经验，成功为来自100多个国家的上千万英语学习者，提高提高他们的英语技能和帮助他们建立信心。你可以通过我们的在线课程和教学软件在家里通过视频或者电话方式来学习英语。我们可以通过为您提供国际认可的能力测试来证明您的进步完全满足您的个性化学习需求。</p>
		</article>
	</section>
	<section class="cbp-so-section">
		<article class="cbp-so-side cbp-so-side-left">
			<h3>在ABC-China学英语</h3>
			<p>这就是我们的教学方式，网络视频随时随地学英语。</p>
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
			<h3>学会用自然的方法说英语</h3>
			<p>就像在现实生活中，你会用你的手机来听，说，读，写一样：你的潜意识会逐渐的吸收新的词汇并自然的表达出来！。</p>
		</article>
	</section>
	<section class="cbp-so-section">
		<article class="cbp-so-side cbp-so-side-left">
			<h3>在现实生活中学习</h3>
			<p>有效的自然方法，鼓励开口，鼓励在不断练习与犯错中进步，轻松自然交流。</p>
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
			<h3>改变你学习英语的方式！</h3>
			<p>24小时随时上课 在家灵活轻松无限制。</p>
		</article>
	</section>
</div>


<!-- advanced-features -->
<div id="advanced-features">
  <div class="container">
    <h1 class="blue-heading">中国区学员学习感受</h1>
    <h2>What are people saying about ABC-ChinaEdu?</h2>

		<div id="feature-7" class="row feature">
		  <div class="social-card twitter col-md-4">
		  	<a href="#" target="_blank">
		  		<div style="background-image:url('http://luxe.com/img/avatar_yuanzhang.jpg')" class="avatar"></div><br>@韩佳乐</a>
		  				<p>本人特别想感谢外教Nice老师，让我找到了说英语的信心，在课堂上不断给我以鼓励，每次上课后都会有详细的学习记录以纠正我的语法及句子错误，我们已经象好朋友一样，无所不谈，她负责任的态度太让我感动了!!!</p></div>
		  <div class="social-card twitter col-md-4">
		  	<a href="#" target="_blank">
		  		<div style="background-image:url('http://luxe.com/img/avatar_trishymitch.jpg')" class="avatar"></div><br>@鲍爱玉</a>
		  				<p>再次感谢感谢monika老师，从一开始的接触就用英语与我交流，从简单的单词开始接触，让我重新捡回学习英语的信心，在我的学习期间，monika老师会耐心的听我的录音，指出我的问题，非常感谢monika老师！ </p></div>
		  <div class="social-card twitter col-md-4">
		  	<a href="#" target="_blank">
		  		<div style="background-image:url('http://luxe.com/img/avatar_DocJCContreras.jpg')" class="avatar"></div><br>@陈然</a>
		  				<p>你好，我是黄豪妈妈，黄豪很喜欢现在这个男老师，聊的很高兴，谢谢！我觉得他现在语音进步很多了，和老师聊天的话题也多了，学了这么久，看到他进步了，我也很高兴，觉得选对了学校，也很感谢你们。</p></div>
		</div>
		<div id="feature-7" class="row feature">
			<div class="social-card twitter col-md-4">
				<a href="#" target="_blank">
					<div style="background-image:url('http://luxe.com/img/avatar_Raquelschair.jpg')" class="avatar"></div><br>@任嘉宇</a>
							<p>好的学习方法，的确会带来很不错的学习效果，ABC-ChinaEdu英语外教很有耐心，不仅有步骤一步一步的引导，而且更像朋友一样的分享课程。我的口语也提高了很多，正在学习中，期待。。加油！！！</p></div>
		  <div class="social-card twitter col-md-4">
		  	<a href="#" target="_blank">
		  		<div style="background-image:url('http://luxe.com/img/avatar_normanliang.jpg')" class="avatar"></div><br>@陆小丽</a>
		  				<p>在ABC-ChinaEdu学习以来，我的英语口语和听力有很大的提高，跟外国人交流起来也更自信了，我现在也渐渐也爱上英语了，计划长期在这里学习英语，感谢你们！!</p></div>
		  <div class="social-card twitter col-md-4">
		  	<a href="#" target="_blank">
		  		<div style="background-image:url('http://luxe.com/img/avatar_SahilRoyVerma.jpg')" class="avatar"></div><br>@黄豪</a>
		  				<p>我的英语本身就不好，我不知道我选择学习日常口语对于我这样词汇量极少然后语法不懂，单词不懂怎么运用的学员来说选择学习口语对不对，但是，我知道我现在比前更要喜欢英语了。 
    Ivy老师真的很不错的！</div>	  
		</div>
  </div>
</div>

<div id="float-consult" class="float-consult" style="margin-top: -62px; visibility: visible;">
  <div class="btn-group-vertical">
    <a class="btn btn-consult-default" href="http://wpa.qq.com/msgrd?v=3&uin=474054236&site=qq&menu=yes&type=left"  data-toggle="tooltip" data-placement="left" target="_blank" title="QQ客服" ><span class="fa fa-qq"></span></a>
		<a class="btn btn-consult-default" title="Skype"  data-toggle="tooltip" data-placement="left"><span class="fa fa-skype"></span></a>
    <a class="btn btn-consult-default trackedHover" title="关注微信"><span class="fa fa-wechat"></span></a>
		<a class="btn btn-consult-default" href="http://www.baidu.com/s?wd=chrome" target="_blank" data-toggle="tooltip" data-placement="left" title="Google浏览器支持"><span class="fa fa-chrome"></span></a>
    <a class="btn btn-consult-default" href="tel:13712345678" data-toggle="tooltip" data-placement="left" title="137-1234-5678"><span class="glyphicon glyphicon-earphone"></span></a>
    
  </div>
  <div class="qr hide">
  	<img src="http://combo.b.qq.com/store/src/themes/mpPortal/register/images/urCode.png">
  </div>
</div>

<!-- scroll effect end -->
<?php if(0):?>
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
<?php endif;?>
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