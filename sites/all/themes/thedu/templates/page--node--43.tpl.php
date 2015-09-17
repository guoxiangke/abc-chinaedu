<?php
/**
 * @file
 landing page!
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

<!-- Warming Up -->
 
<!--Video Section-->
<style type="text/css">
.jumbotron-bg{
  max-height: 577px;
}
</style> 

</script>
<!--Video Section Ends Here-->

  <div class="pattern-overlay">
  
        <video class="jumbotron-bg jumbotron-video-full">
            <source src="<?php echo $base_url.'/'.drupal_get_path('theme', 'thedu'); ?>/img/15-8-home-campaign-loop.webm">
            <source src="<?php echo $base_url.'/'.drupal_get_path('theme', 'thedu'); ?>/img/15-8-home-campaign-loop.mp4">
        </video>

 
  </div>
<section data-img="<?php echo $base_url.'/'.drupal_get_path('theme', 'thedu'); ?>/img/hero0.jpg" class="hero herobackstretch main-content wrapper-dark text-center">

  <div class="hero-content">  

        <h1 class="ng-binding">Learn English online</h1>
        <h2 class="text-light ng-binding">With real teachers in live classes</h2>
        <ul>
            <li>
                <a widest="callToAction" class="btn btn-course-full btn-lg ng-binding" href="/english/courses"  >
                    SEE COURSES
                </a>
            </li>
            <li>
                <a widest="callToAction" class="btn btn-trial-full btn-lg ng-binding" href="/english/trial-class/tcb" >
                    BOOK A TRIAL CLASS
                </a>
            </li>
        </ul>
        <p>
            <a class="how-it-works underline-white ng-binding" ui-sref="lingoda.main.section.howItWorks" onclick="dataLayer.push({'event': 'button-how_it_works-click'});" href="/english/how-it-works">See how it works</a>
        </p>
    </div>
</section>
<div class="section-share">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 dale_text_center">
					<div class="share-wrap">
							<span>Share Us</span>
	            <ul>
	                <li class="sinaWeibo tips" title="分享到新浪微博"></li>
	                <li class="weixin tips" title="分享到微信"></li>
	                <li class="tenWeibo tips" title="分享到QQ空间"></li>
	                <li class="douban tips" title="分享到豆瓣"></li>
	                <li class="renren tips" title="分享到人人"></li>
	            </ul>
							<span>As seen ON</span>
							<img   width="619" height="38" alt="" src="<?php echo $base_url.'/'.drupal_get_path('theme', 'thedu'); ?>/img/seen.png">
	        </div>
	        <hr>
			</div>
		</div>
	</div>
</div>

<!-- advanced-features -->
<div id="advanced-features">
      <div class="container">
        <h1 class="blue-heading">Analytics and Advanced Features</h1>
        <h2>Analyze and share off your media wizardry!</h2>
        <section class="row down">
          <section class="col-md-6 col-xs-12">
            <div class="col-md-2 col-xs-3">
              <img src="<?php  echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/mention/stats.svg">
            </div>
            <div class="col-md-10 col-xs-9">
              <h4>
                Visualize your online presence
              </h4>
              <p>
                Get a snapshot of your mentions by source, language, and over a selected period of time. Compare yourself to your competitors by viewing multiple alert statistics at once.
              </p>
            </div>
          </section>
          <section class="col-md-6 col-xs-12">
            <div class="col-md-2 col-xs-3">
              <img src="<?php  echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/mention/radar.svg">
            </div>
            <div class="col-md-10 col-xs-9">
              <h4>
                Get more signal, less noise
              </h4>
              <p>
                Get rid of the noise coming from spam, or from people with the same name as you. Easily find important mentions and quickly get their tone.
              </p>
            </div>
          </section>
        </section>
        <section class="row down">
          <section class="col-md-6">
            <div class="col-md-2 col-xs-3">
              <img src="<?php  echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/mention/files.svg">
            </div>
            <div class="col-md-10 col-xs-9">
              <h4>
                Put your data to good use
              </h4>
              <p>
                Get a snapshot of your mentions by source, language, and over a selected period of time. Generate reports and export data to compare yourself with your competitors.
              </p>
            </div>
          </section>
          <section class="col-md-6">
            <div class="col-md-2 col-xs-3">
              <img src="<?php  echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/mention/time.svg">
            </div>
            <div class="col-md-10 col-xs-9">
              <h4>
                Benefit from unlimited history
              </h4>
              <p>
                With a Mention Growth or Company account, you'll always have access to your alert's history for as long as you keep the alert. Dive back into the past to analyze a peak, measure your success.
              </p>
            </div>
          </section>
        </section>

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
</div><!-- section end -->

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
</div><!-- float-consult end -->

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