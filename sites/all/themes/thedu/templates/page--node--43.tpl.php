<?php
/**
 * @file
 Course ! landing page!
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
 
<section id="videoBG" data-img="<?php echo $base_url.'/'.drupal_get_path('theme', 'thedu'); ?>/img/hero0.jpg" class="hero herob2ackstretch main-content wrapper-dark text-center">

  <div class="hero-content">  

        <h1 class="ng-binding">Learn English online</h1>
        <h2 class="text-light ng-binding">With real teachers in live classes</h2>
        <ul>
            <!-- <li>
                <a widest="callToAction" class="btn btn-course-full btn-lg ng-binding" href="/english/courses"  >
                    SEE COURSES
                </a>
            </li> -->
            <li>
                <a widest="callToAction" class="btn btn-trial-full btn-lg" href="student/register" >
                    预约课程
                </a>
            </li>
        </ul>
        <p>
            <a class="how-it-works underline-white"   href="#advanced-features">为何我们能做得到</a><br>
            <a class="how-it-works"  style="font-size:30px;"  href="#advanced-features">↓</a>
        </p>
    </div>
</section>

<!--Video Section-->

</script>
<!--Video Section Ends Here-->
  <script type="text/javascript">
  jQuery('#videoBG').videoBG({
      mp4:"<?php echo $base_url.'/'.drupal_get_path('theme', 'thedu'); ?>/img/15-8-home-campaign-loop.mp4",
      // ogv:'assets/tunnel_animation.ogv',
      webm:"<?php echo $base_url.'/'.drupal_get_path('theme', 'thedu'); ?>/img/15-8-home-campaign-loop.webm",
      // poster:'assets/tunnel_animation.jpg',
      scale:true,
      zIndex:0
    });
  </script>

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
							<img   width="619" height="38" alt="" src="<?php echo $base_url.'/'.drupal_get_path('theme', 'thedu'); ?>/img/seen.png">
	        </div>
	        <hr>
			</div>

      <h1 class="blue-heading">来自全球优秀教师</h1>
      <h2>Analyze and share off your media wizardry!</h2>

      <div class="face-wall hidden-phone"><a class="staff-photo" href="http://www.linkedin.com/pub/aaron-webber/4/7a1/316" target="_blank" data-rel="tooltip" title="" data-original-title="Aaron Webber, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/fa/fa/fafaba373b10cf2767aecae879f9ff40.png" alt="Aaron Webber, Engineering"></a><a class="staff-photo" href="https://www.twitter.com/koomarr" target="_blank" data-rel="tooltip" title="" data-original-title="Abhijeet Kumar, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/3f/e8/3fe814ba3144aabbcbd64beb0631f5cc.png" alt="Abhijeet Kumar, Engineering"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Adrian Fine, City Outreach"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/01/44/0144b4f8d9faeb87099fb50a47cf17b7.png" alt="Adrian Fine, City Outreach"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Alex Karweit, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/5b/6d/5b6dc24f8b7ce7cea90a2091b1a58323.png" alt="Alex Karweit, Engineering"></a><a class="staff-photo" href="https://www.linkedin.com/in/alexewise" target="_blank" data-rel="tooltip" title="" data-original-title="Alex Wise, Neighborhood Operations"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/95/51/95518c5c42b750bcb70fa9ab93acd0d9.png" alt="Alex Wise, Neighborhood Operations"></a><a class="staff-photo" href="https://www.linkedin.com/in/alexakopelman" target="_blank" data-rel="tooltip" title="" data-original-title="Alexa Kopelman, Partnerships"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/58/86/588629ca6bb8e056b0dbbeebc3b0d29b.png" alt="Alexa Kopelman, Partnerships"></a><a class="staff-photo" href="https://www.linkedin.com/in/amoslstoltzfus" target="_blank" data-rel="tooltip" title="" data-original-title="Amos Stoltzfus, Partnerships"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/bc/9c/bc9c53492813ec59c15d2bb0faf6ec8b.png" alt="Amos Stoltzfus, Partnerships"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Ananth Chandrasekharan, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/6b/88/6b8879dafc3e7a99bec66d2756315aa8.png" alt="Ananth Chandrasekharan, Engineering"></a><a class="staff-photo" href="http://www.linkedin.com/in/annedreshfield" target="_blank" data-rel="tooltip" title="" data-original-title="Anne Dreshfield, Communications"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/f8/93/f89371164cd5271548fe93af13808a95.png" alt="Anne Dreshfield, Communications"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Anshu Das, Product"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/47/54/475459a268dbc5e8231bf1f269048bc1.png" alt="Anshu Das, Product"></a><a class="staff-photo" href="http://www.linkedin.com/in/bhuvanbamba/" target="_blank" data-rel="tooltip" title="" data-original-title="Bhuvan Bamba, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/4f/44/4f443a79aa39ba47e9f78e72f41359e0.png" alt="Bhuvan Bamba, Engineering"></a><a class="staff-photo" href="http://bobakesfandiari.com/" target="_blank" data-rel="tooltip" title="" data-original-title="Bobak Esfandiari, Neighborhood Operations"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/13/45/1345370ce9e41fab9a5a542ff63530da.png" alt="Bobak Esfandiari, Neighborhood Operations"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Brian Gorges, Neighborhood Operations"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/1c/e2/1ce22cc92444f78001a153b1792967d2.png" alt="Brian Gorges, Neighborhood Operations"></a><a class="staff-photo" href="http://www.linkedin.com/in/brianvanveen" target="_blank" data-rel="tooltip" title="" data-original-title="Brian Van Veen, Design"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/93/b4/93b4f9a4af459cd891d2046b8451f501.png" alt="Brian Van Veen, Design"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Bryce Rattner Keithley, Recruiting"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/1b/a0/1ba09707556dfa494207afc8a07581f4.png" alt="Bryce Rattner Keithley, Recruiting"></a><a class="staff-photo" href="https://www.linkedin.com/pub/carly-villareal/50/870/7b1" target="_blank" data-rel="tooltip" title="" data-original-title="Carly Villareal, Marketing"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/c3/b7/c3b7e348b55f89aa091cb4110f53551c.png" alt="Carly Villareal, Marketing"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Chuck Karish, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/83/cf/83cf1e1b54d8abb88e20c53834ae4070.png" alt="Chuck Karish, Engineering"></a><a class="staff-photo" href="http://cliffw.com/" target="_blank" data-rel="tooltip" title="" data-original-title="Cliff Williams, Design"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/57/80/5780c311ea7a37b0e139d2e39ab125f9.png" alt="Cliff Williams, Design"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Corina Waggoner, Neighborhood Operations"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/0e/85/0e851eaeef4f4585dd9954d045eedb5e.png" alt="Corina Waggoner, Neighborhood Operations"></a><a class="staff-photo" href="http://www.linkedin.com/in/craigdonato" target="_blank" data-rel="tooltip" title="" data-original-title="Craig Donato, Business Development"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/00/07/0007e45429a0c578bd7090a775f3b873.png" alt="Craig Donato, Business Development"></a><a class="staff-photo" href="http://www.linkedin.com/in/daisukefujiwara" target="_blank" data-rel="tooltip" title="" data-original-title="Daisuke Fujiwara, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/1c/96/1c96e96508b23e0a7271182579c01ff9.png" alt="Daisuke Fujiwara, Engineering"></a><a class="staff-photo" href="https://www.linkedin.com/in/daisytao" target="_blank" data-rel="tooltip" title="" data-original-title="Daisy Tao, Design"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/72/e9/72e9d18e7cd117ab99165d75bc81cc5f.png" alt="Daisy Tao, Design"></a><a class="staff-photo" href="https://www.linkedin.com/in/danclancy" target="_blank" data-rel="tooltip" title="" data-original-title="Dan Clancy, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/37/a3/37a3d38d08da001dad2d6d861834baf3.png" alt="Dan Clancy, Engineering"></a><a class="staff-photo" href="https://www.linkedin.com/in/danmasquelier" target="_blank" data-rel="tooltip" title="" data-original-title="Dan Masquelier, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/e3/5e/e35e40e64624a632ab2a97b8d4e6a5d3.png" alt="Dan Masquelier, Engineering"></a><a class="staff-photo" href="https://www.linkedin.com/in/daniellestyskal" target="_blank" data-rel="tooltip" title="" data-original-title="Danielle Styskal, Communications"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/15/74/157411b453a97599b0692ff701446aa0.png" alt="Danielle Styskal, Communications"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Dave Wise, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/8a/0d/8a0d13601df46ec3123d3b443594b935.png" alt="Dave Wise, Engineering"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="David Pape, Neighborhood Operations"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/cd/55/cd55d578a2bdcb1ef2d990a0ca6e8eea.png" alt="David Pape, Neighborhood Operations"></a><a class="staff-photo" href="http://www.linkedin.com/in/davidwiesen" target="_blank" data-rel="tooltip" title="" data-original-title="David Wiesen, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/74/2b/742b896c1fbf0f4cc9b4ec796c4c439d.png" alt="David Wiesen, Engineering"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Ed Everett, City Outreach"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/4f/54/4f54b6f9eaf869986dd21c58a92b0492.png" alt="Ed Everett, City Outreach"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Emily Schwartzman, Design"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/c0/b4/c0b4711b39228e34f4e4a602fde41f01.png" alt="Emily Schwartzman, Design"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Eric Yuan, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/8c/de/8cde692d6af0572fe6c03b139b19f89d.png" alt="Eric Yuan, Engineering"></a><a class="staff-photo" href="http://www.linkedin.com/pub/erica-fagin/66/454/b2b" target="_blank" data-rel="tooltip" title="" data-original-title="Erica Fagin, Neighborhood Operations"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/63/3a/633ac37ee63cf64df8aa3ac6080d727c.png" alt="Erica Fagin, Neighborhood Operations"></a><a class="staff-photo" href="http://www.linkedin.com/pub/gabe-chang/3/52a/b2b/" target="_blank" data-rel="tooltip" title="" data-original-title="Gabriel Chang, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/c4/04/c4043c853679b12188ffe8103e9a99db.png" alt="Gabriel Chang, Engineering"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Garrett Gonzales, Neighborhood Operations"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/10/ca/10caeb23eef23b4b75991511ca60c5bc.png" alt="Garrett Gonzales, Neighborhood Operations"></a><a class="staff-photo" href="http://www.linkedin.com/in/gsaca" target="_blank" data-rel="tooltip" title="" data-original-title="Gigi Saca, Recruiting"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/3f/a1/3fa18a8e77c822871d2cdee0e4483c9e.png" alt="Gigi Saca, Recruiting"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Gillian Bergeron, Marketing"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/8b/b5/8bb509863c77747ada428d093fb4d10a.png" alt="Gillian Bergeron, Marketing"></a><a class="staff-photo" href="http://www.linkedin.com/in/gordonstrause" target="_blank" data-rel="tooltip" title="" data-original-title="Gordon Strause, Neighborhood Operations"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/68/58/6858d632240a15c28a178696138f1a48.png" alt="Gordon Strause, Neighborhood Operations"></a><a class="staff-photo" href="https://www.linkedin.com/in/grantzhu/" target="_blank" data-rel="tooltip" title="" data-original-title="Grant Zhu, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/49/a9/49a97205b7cacce42e9c0513a9590105.png" alt="Grant Zhu, Engineering"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Greg James, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/de/5b/de5bde3e24af7255752f98c061b6258d.png" alt="Greg James, Engineering"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Griffin Okamoto, Data Science"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/dc/1d/dc1d23082d7723348d96e4a3f517e297.png" alt="Griffin Okamoto, Data Science"></a><a class="staff-photo" href="http://hairycow.name/" target="_blank" data-rel="tooltip" title="" data-original-title="Harry Kao, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/1c/bb/1cbbf8a22cce38206ec5e8b92ecbf938.png" alt="Harry Kao, Engineering"></a><a class="staff-photo" href="http://www.linkedin.com/in/hussammousa" target="_blank" data-rel="tooltip" title="" data-original-title="Hussam Mousa, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/ce/7e/ce7e8acc8c81c2aa2304ddc97a3927bd.png" alt="Hussam Mousa, Engineering"></a><a class="staff-photo" href="http://www.linkedin.com/in/jaywthomas" target="_blank" data-rel="tooltip" title="" data-original-title="Jay Thomas, Analytics"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/14/0d/140de27c31fa6ca11c4bb85f51524bee.png" alt="Jay Thomas, Analytics"></a><a class="staff-photo" href="http://www.linkedin.com/in/jeffreysharris" target="_blank" data-rel="tooltip" title="" data-original-title="Jeff Harris, Product"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/a2/ea/a2ea12870e26809d677379770e545c46.png" alt="Jeff Harris, Product"></a><a class="staff-photo" href="http://www.linkedin.com/in/jrobidoux" target="_blank" data-rel="tooltip" title="" data-original-title="Jeff Robidoux, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/2e/5c/2e5c4c05d17b84729adc9b05076f2313.png" alt="Jeff Robidoux, Engineering"></a><a class="staff-photo" href="http://www.linkedin.com/pub/jennifer-harding/15/388/77" target="_blank" data-rel="tooltip" title="" data-original-title="Jennifer Burke, Communications"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/a8/8f/a88f735a645abda79a8e7c963a0f51cb.png" alt="Jennifer Burke, Communications"></a><a class="staff-photo" href="http://www.linkedin.com/in/jinseoknam" target="_blank" data-rel="tooltip" title="" data-original-title="Jinseok Nam, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/b6/f1/b6f14010b84fad7c8c19f5ff1453e073.png" alt="Jinseok Nam, Engineering"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Joseph Porcelli, City Outreach"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/a1/40/a140f08a70b46ae169700581d497a5ba.png" alt="Joseph Porcelli, City Outreach"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Joseph Strizich, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/a6/59/a6590f82ac068a9caeed87f83f840ca1.png" alt="Joseph Strizich, Engineering"></a><a class="staff-photo" href="https://www.linkedin.com/pub/julie-podair/34/93b/177" target="_blank" data-rel="tooltip" title="" data-original-title="Julie Podair, Recruiting"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/cf/34/cf34b6bd155ddf5fd8f5a6add785b845.png" alt="Julie Podair, Recruiting"></a><a class="staff-photo" href="http://www.linkedin.com/pub/justine-fenwick/36/11b/804" target="_blank" data-rel="tooltip" title="" data-original-title="Justine Fenwick, City Outreach"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/5f/7e/5f7eb09360b2ecd6458e8558805f6d94.png" alt="Justine Fenwick, City Outreach"></a><a class="staff-photo" href="https://www.linkedin.com/in/justynharriman" target="_blank" data-rel="tooltip" title="" data-original-title="Justyn Harriman, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/44/cc/44cc5dd48c52a56913e54071a91aff4d.png" alt="Justyn Harriman, Engineering"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Karyn Gladstone, Neighborhood Operations"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/87/55/875557c7ffa18afde3acd3effe1c6156.png" alt="Karyn Gladstone, Neighborhood Operations"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Kathryn Hymes, Product"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/e5/bc/e5bcb7de07a24153efd5f2916e92cf97.png" alt="Kathryn Hymes, Product"></a><a class="staff-photo" href="https://www.linkedin.com/pub/kelli-ryan/7a/9b9/98" target="_blank" data-rel="tooltip" title="" data-original-title="Kelli Ryan, Recruiting"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/f2/e8/f2e8c4404468dbc11a04663ecc7d89ce.png" alt="Kelli Ryan, Recruiting"></a><a class="staff-photo" href="http://www.linkedin.com/in/kelseygrady" target="_blank" data-rel="tooltip" title="" data-original-title="Kelsey Grady, Communications"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/04/d2/04d240544da769049ebe99f42a3f87c7.png" alt="Kelsey Grady, Communications"></a><a class="staff-photo" href="https://www.linkedin.com/in/kevinborrows" target="_blank" data-rel="tooltip" title="" data-original-title="Kevin Borrows, Design"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/4c/76/4c76491263fc5fbb7b587b28e7ac8a9d.png" alt="Kevin Borrows, Design"></a><a class="staff-photo" href="http://www.linkedin.com/in/kevliu" target="_blank" data-rel="tooltip" title="" data-original-title="Kevin Liu, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/1e/2a/1e2ab45a60ad5f8fc01e766420cf712c.png" alt="Kevin Liu, Engineering"></a><a class="staff-photo" href="http://www.linkedin.com/in/kipkaehler" target="_blank" data-rel="tooltip" title="" data-original-title="Kip Kaehler, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/43/7b/437bd18b0a75d08cc20ac37a74b0a278.png" alt="Kip Kaehler, Engineering"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Lindsey Buich, Neighborhood Operations"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/b7/de/b7deeaeb9fb6bcf8a3baaa85c5d1bda3.png" alt="Lindsey Buich, Neighborhood Operations"></a><a class="staff-photo" href="https://www.linkedin.com/in/martincolaco" target="_blank" data-rel="tooltip" title="" data-original-title="Martin Colaco, Data Science"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/d4/9d/d49da5608fdc3e94fb43f1332fd8c44f.png" alt="Martin Colaco, Data Science"></a><a class="staff-photo" href="https://www.linkedin.com/pub/maryam-mohit/4/624/470" target="_blank" data-rel="tooltip" title="" data-original-title="Maryam Mohit, Product"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/9f/3a/9f3a747f7ea8346997e9aa6243ba64d8.png" alt="Maryam Mohit, Product"></a><a class="staff-photo" href="https://www.linkedin.com/pub/matt-flegal/0/a98/209" target="_blank" data-rel="tooltip" title="" data-original-title="Matt Flegal, Communications"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/a4/d7/a4d7d9b5e5fdc4f9e311a5d481de6765.png" alt="Matt Flegal, Communications"></a><a class="staff-photo" href="http://www.linkedin.com/in/matthewrizzojohnson" target="_blank" data-rel="tooltip" title="" data-original-title="Matt Johnson, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/74/b4/74b4cfb8dfa512f2ea745f93306f4b28.png" alt="Matt Johnson, Engineering"></a><a class="staff-photo" href="http://www.linkedin.com/pub/matt-terry/a/758/61b" target="_blank" data-rel="tooltip" title="" data-original-title="Matt Terry, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/5d/27/5d270b8978e1ec17c41a9bde0fa56096.png" alt="Matt Terry, Engineering"></a><a class="staff-photo" href="http://www.linkedin.com/pub/matt-wise/5/303/b69" target="_blank" data-rel="tooltip" title="" data-original-title="Matt Wise, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/46/de/46de491191c0dba398387a8feb2c28f0.png" alt="Matt Wise, Engineering"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Meredith Harris, Marketing"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/94/8b/948b9d7defba3dc450560eccadee2cd9.png" alt="Meredith Harris, Marketing"></a><a class="staff-photo" href="https://www.linkedin.com/pub/mike-grafton/0/633/488" target="_blank" data-rel="tooltip" title="" data-original-title="Mike Grafton, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/b3/f6/b3f6e4a10458123758138c5d1169c6e3.png" alt="Mike Grafton, Engineering"></a><a class="staff-photo" href="http://www.linkedin.com/in/mikhailsimin" target="_blank" data-rel="tooltip" title="" data-original-title="Mikhail Simin, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/53/ef/53efc376753eb128a9e0ed2ea78576cf.png" alt="Mikhail Simin, Engineering"></a><a class="staff-photo" href="http://www.linkedin.com/in/minnaking" target="_blank" data-rel="tooltip" title="" data-original-title="Minna King, Product"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/0c/cb/0ccb2f468a3a6f49204fe083bb3209df.png" alt="Minna King, Product"></a><a class="staff-photo" href="http://www.linkedin.com/pub/mitali-gala/58/7b4/1ba/" target="_blank" data-rel="tooltip" title="" data-original-title="Mitali Gala, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/f6/f7/f6f74a509c0deb627accef753b191419.png" alt="Mitali Gala, Engineering"></a><a class="staff-photo" href="http://www.linkedin.com/pub/morgan-hallmon/0/a77/236" target="_blank" data-rel="tooltip" title="" data-original-title="Morgan Hallmon, Product"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/e8/34/e834ddf0f41ccc30c538ab8cee4af467.png" alt="Morgan Hallmon, Product"></a><a class="staff-photo" href="https://www.linkedin.com/in/nasseem" target="_blank" data-rel="tooltip" title="" data-original-title="Nasim Farsinia, Data Science"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/74/08/7408baf2702c910b59f944f54a68ff0f.png" alt="Nasim Farsinia, Data Science"></a><a class="staff-photo" href="http://www.linkedin.com/in/niallohiggins" target="_blank" data-rel="tooltip" title="" data-original-title="Niall O'Higgins, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/72/bb/72bb007ca7962db588f3b31c9e15a899.png" alt="Niall O'Higgins, Engineering"></a><a class="staff-photo" href="https://www.linkedin.com/pub/nina-thompson/0/260/865" target="_blank" data-rel="tooltip" title="" data-original-title="Nina Thompson, Neighborhood Operations"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/1f/c4/1fc4a2c09b93392b99d74c68e93e2eb7.png" alt="Nina Thompson, Neighborhood Operations"></a><a class="staff-photo" href="http://www.linkedin.com/in/niravtolia" target="_blank" data-rel="tooltip" title="" data-original-title="Nirav Tolia, CEO"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/c9/e1/c9e16961ffb9cd82c77f01ed215d8f41.png" alt="Nirav Tolia, CEO"></a><a class="staff-photo" href="http://www.linkedin.com/pub/paco-vi%C3%B1oly/0/6a/1a2/en" target="_blank" data-rel="tooltip" title="" data-original-title="Paco Viñoly, Design"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/98/4a/984a8da52a2156150ec85fd10d8ece5c.png" alt="Paco Viñoly, Design"></a><a class="staff-photo" href="http://www.linkedin.com/pub/parker-ruhstaller/22/459/a66/" target="_blank" data-rel="tooltip" title="" data-original-title="Parker Ruhstaller, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/10/8d/108d732ff3fb5f8e8a08b9d987e8f576.png" alt="Parker Ruhstaller, Engineering"></a><a class="staff-photo" href="http://www.dailydoog.com" target="_blank" data-rel="tooltip" title="" data-original-title="Patrick Dugan, Design"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/90/ab/90abc1171b0da2415866dde6a5ec621e.png" alt="Patrick Dugan, Design"></a><a class="staff-photo" href="http://www.linkedin.com/in/paulhowe" target="_blank" data-rel="tooltip" title="" data-original-title="Paul Howe, Product"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/e9/ba/e9bade0af66375e71653051c56e9a4f8.png" alt="Paul Howe, Product"></a><a class="staff-photo" href="https://www.linkedin.com/in/pking" target="_blank" data-rel="tooltip" title="" data-original-title="Phil King, Design"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/24/65/2465ef1479f959132271fc8795e4af6e.png" alt="Phil King, Design"></a><a class="staff-photo" href="http://www.linkedin.com/in/pjanakiraman" target="_blank" data-rel="tooltip" title="" data-original-title="Prakash Janakiraman, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/6e/44/6e443903866b524305e7d0fc09c5538d.png" alt="Prakash Janakiraman, Engineering"></a><a class="staff-photo" href="http://www.linkedin.com/in/radhikapartha" target="_blank" data-rel="tooltip" title="" data-original-title="Radhika Partha, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/67/7c/677cd9ab998dd5504fc8f58226d7f324.png" alt="Radhika Partha, Engineering"></a><a class="staff-photo" href="https://www.linkedin.com/in/reginaldjmontilus" target="_blank" data-rel="tooltip" title="" data-original-title="Reggie Montilus, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/1d/35/1d350abb9957bc50ec0f33f3a8a032d6.png" alt="Reggie Montilus, Engineering"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Rishi Mukhopadhyay, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/44/af/44aff50821c40261a4b59a1e44b9c927.png" alt="Rishi Mukhopadhyay, Engineering"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Rob Mackenzie, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/d9/cb/d9cbaac07a781f2b8a2917f769fbdc11.png" alt="Rob Mackenzie, Engineering"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Robbie Turner, City Outreach"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/e0/5c/e05c52e8faac5f75eaa31cb8d6cc64c2.png" alt="Robbie Turner, City Outreach"></a><a class="staff-photo" href="http://www.linkedin.com/in/ryansims" target="_blank" data-rel="tooltip" title="" data-original-title="Ryan Sims, Design"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/db/00/db005f45f1dc2f815ab9f657866890d2.png" alt="Ryan Sims, Design"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Sam Yau, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/7c/ca/7cca8dc0ec40ae3c275270c57bb127d7.png" alt="Sam Yau, Engineering"></a><a class="staff-photo" href="http://www.linkedin.com/in/sarahleary" target="_blank" data-rel="tooltip" title="" data-original-title="Sarah Leary, Marketing"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/a4/36/a436e7c8d9291d9627fd58ce48a4bd94.png" alt="Sarah Leary, Marketing"></a><a class="staff-photo" href="http://www.linkedin.com/in/seanbromage" target="_blank" data-rel="tooltip" title="" data-original-title="Sean Bromage, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/6c/b2/6cb2dd2a87033cd75bb60d1cccb696fe.png" alt="Sean Bromage, Engineering"></a><a class="staff-photo" href="http://www.linkedin.com/in/snmcqueen" target="_blank" data-rel="tooltip" title="" data-original-title="Sean McQueen, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/78/3e/783e372cf50e89a8e6bf240f21e804d8.png" alt="Sean McQueen, Engineering"></a><a class="staff-photo" href="https://www.linkedin.com/pub/shane-kroll/4/547/5a2" target="_blank" data-rel="tooltip" title="" data-original-title="Shane Kroll, Neighborhood Operations"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/4f/20/4f20ba3e3edcc1c35e7bbc323f97d146.png" alt="Shane Kroll, Neighborhood Operations"></a><a class="staff-photo" href="http://www.linkedin.com/in/shuohua" target="_blank" data-rel="tooltip" title="" data-original-title="Sophie Zhou, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/ee/f1/eef1fd6b060e6dc7f7e53f6e81532bca.png" alt="Sophie Zhou, Engineering"></a><a class="staff-photo" href="http://www.linkedin.com/in/stevemostovoy" target="_blank" data-rel="tooltip" title="" data-original-title="Steve Mostovoy, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/f1/99/f1997d295b69501db6100140fbf76f0c.png" alt="Steve Mostovoy, Engineering"></a><a class="staff-photo" href="http://www.linkedin.com/in/includeme" target="_blank" data-rel="tooltip" title="" data-original-title="Tarun Kumar, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/4b/0f/4b0fad43a2d2ff3421906756341be88e.png" alt="Tarun Kumar, Engineering"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Theresa Burns, Neighborhood Operations"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/a2/f3/a2f3e197c79d3193674a50f7fe5c68c4.png" alt="Theresa Burns, Neighborhood Operations"></a><a class="staff-photo" href="http://www.linkedin.com/in/thomaspdonahoe" target="_blank" data-rel="tooltip" title="" data-original-title="Thomas Donahoe, Product"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/be/32/be32dfb95423acced99ea24762d35ea8.png" alt="Thomas Donahoe, Product"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Tim Wong, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/41/fe/41fe787a32fdd1236942917295dc8b95.png" alt="Tim Wong, Engineering"></a><a class="staff-photo" href="https://www.linkedin.com/in/poletiek" target="_blank" data-rel="tooltip" title="" data-original-title="Todd Poletiek, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/63/6c/636c043e9ac51611cb5b2cd03d2d98a1.png" alt="Todd Poletiek, Engineering"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Tyler Green, Neighborhood Operations"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/73/b0/73b0ef08149457535e017db3dc7715a6.png" alt="Tyler Green, Neighborhood Operations"></a><a class="staff-photo" href="https://www.linkedin.com/in/valeriecorahuffman" target="_blank" data-rel="tooltip" title="" data-original-title="Valerie Huffman Bauer, Finance"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/23/eb/23ebf498dd82f976b55102e3ff184993.png" alt="Valerie Huffman Bauer, Finance"></a><a class="staff-photo" href="http://www.linkedin.com/in/vkawadia" target="_blank" data-rel="tooltip" title="" data-original-title="Vikas Kawadia, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/a2/85/a285a3b774b80dcc06d9bf502b264558.png" alt="Vikas Kawadia, Engineering"></a><a class="staff-photo" href="https://www.linkedin.com/pub/vivek-karuturi/2b/163/905" target="_blank" data-rel="tooltip" title="" data-original-title="Vivek Karuturi, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/e8/c2/e8c2e6aa73090ae32acdeacd527c8424.png" alt="Vivek Karuturi, Engineering"></a><a class="staff-photo" href="http://wenbin.org" target="_blank" data-rel="tooltip" title="" data-original-title="Wenbin Fang, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/2c/91/2c91ee5a5801657b3ba80b641559cd08.png" alt="Wenbin Fang, Engineering"></a><a class="staff-photo" href="http://wesleymoy.com/nextdoor" target="_blank" data-rel="tooltip" title="" data-original-title="Wesley Moy, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/fe/8e/fe8ec89084d226f75926877d5b6d7fa5.png" alt="Wesley Moy, Engineering"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Wilson Chan, Finance"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/4e/4c/4e4c9160ee1964bc122989d08dfdd66b.png" alt="Wilson Chan, Finance"></a><!--/div-->
      <!--div class="face-wall hidden-phone"!--><a class="staff-photo" href="https://www.twitter.com/koomarr" target="_blank" data-rel="tooltip" title="" data-original-title="Abhijeet Kumar, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/3f/e8/3fe814ba3144aabbcbd64beb0631f5cc.png" alt="Abhijeet Kumar, Engineering"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Adrian Fine, City Outreach"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/01/44/0144b4f8d9faeb87099fb50a47cf17b7.png" alt="Adrian Fine, City Outreach"></a><a class="staff-photo" href="https://www.linkedin.com/in/alexewise" target="_blank" data-rel="tooltip" title="" data-original-title="Alex Wise, Neighborhood Operations"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/95/51/95518c5c42b750bcb70fa9ab93acd0d9.png" alt="Alex Wise, Neighborhood Operations"></a><a class="staff-photo" href="http://www.linkedin.com/in/annedreshfield" target="_blank" data-rel="tooltip" title="" data-original-title="Anne Dreshfield, Communications"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/f8/93/f89371164cd5271548fe93af13808a95.png" alt="Anne Dreshfield, Communications"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Brian Gorges, Neighborhood Operations"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/1c/e2/1ce22cc92444f78001a153b1792967d2.png" alt="Brian Gorges, Neighborhood Operations"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Bryce Rattner Keithley, Recruiting"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/1b/a0/1ba09707556dfa494207afc8a07581f4.png" alt="Bryce Rattner Keithley, Recruiting"></a><a class="staff-photo" href="https://www.linkedin.com/pub/carly-villareal/50/870/7b1" target="_blank" data-rel="tooltip" title="" data-original-title="Carly Villareal, Marketing"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/c3/b7/c3b7e348b55f89aa091cb4110f53551c.png" alt="Carly Villareal, Marketing"></a><a class="staff-photo" href="https://www.linkedin.com/in/daisytao" target="_blank" data-rel="tooltip" title="" data-original-title="Daisy Tao, Design"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/72/e9/72e9d18e7cd117ab99165d75bc81cc5f.png" alt="Daisy Tao, Design"></a><a class="staff-photo" href="https://www.linkedin.com/in/danmasquelier" target="_blank" data-rel="tooltip" title="" data-original-title="Dan Masquelier, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/e3/5e/e35e40e64624a632ab2a97b8d4e6a5d3.png" alt="Dan Masquelier, Engineering"></a><a class="staff-photo" href="https://www.linkedin.com/in/daniellestyskal" target="_blank" data-rel="tooltip" title="" data-original-title="Danielle Styskal, Communications"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/15/74/157411b453a97599b0692ff701446aa0.png" alt="Danielle Styskal, Communications"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Dave Wise, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/8a/0d/8a0d13601df46ec3123d3b443594b935.png" alt="Dave Wise, Engineering"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Emily Schwartzman, Design"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/c0/b4/c0b4711b39228e34f4e4a602fde41f01.png" alt="Emily Schwartzman, Design"></a><a class="staff-photo" href="http://www.linkedin.com/in/gsaca" target="_blank" data-rel="tooltip" title="" data-original-title="Gigi Saca, Recruiting"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/3f/a1/3fa18a8e77c822871d2cdee0e4483c9e.png" alt="Gigi Saca, Recruiting"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Gillian Bergeron, Marketing"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/8b/b5/8bb509863c77747ada428d093fb4d10a.png" alt="Gillian Bergeron, Marketing"></a><a class="staff-photo" href="http://www.linkedin.com/in/gordonstrause" target="_blank" data-rel="tooltip" title="" data-original-title="Gordon Strause, Neighborhood Operations"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/68/58/6858d632240a15c28a178696138f1a48.png" alt="Gordon Strause, Neighborhood Operations"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Greg James, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/de/5b/de5bde3e24af7255752f98c061b6258d.png" alt="Greg James, Engineering"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Griffin Okamoto, Data Science"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/dc/1d/dc1d23082d7723348d96e4a3f517e297.png" alt="Griffin Okamoto, Data Science"></a><a class="staff-photo" href="http://www.linkedin.com/in/jaywthomas" target="_blank" data-rel="tooltip" title="" data-original-title="Jay Thomas, Analytics"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/14/0d/140de27c31fa6ca11c4bb85f51524bee.png" alt="Jay Thomas, Analytics"></a><a class="staff-photo" href="http://www.linkedin.com/pub/jennifer-harding/15/388/77" target="_blank" data-rel="tooltip" title="" data-original-title="Jennifer Burke, Communications"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/a8/8f/a88f735a645abda79a8e7c963a0f51cb.png" alt="Jennifer Burke, Communications"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Joseph Strizich, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/a6/59/a6590f82ac068a9caeed87f83f840ca1.png" alt="Joseph Strizich, Engineering"></a><a class="staff-photo" href="https://www.linkedin.com/pub/julie-podair/34/93b/177" target="_blank" data-rel="tooltip" title="" data-original-title="Julie Podair, Recruiting"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/cf/34/cf34b6bd155ddf5fd8f5a6add785b845.png" alt="Julie Podair, Recruiting"></a><a class="staff-photo" href="https://www.linkedin.com/in/justynharriman" target="_blank" data-rel="tooltip" title="" data-original-title="Justyn Harriman, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/44/cc/44cc5dd48c52a56913e54071a91aff4d.png" alt="Justyn Harriman, Engineering"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Karyn Gladstone, Neighborhood Operations"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/87/55/875557c7ffa18afde3acd3effe1c6156.png" alt="Karyn Gladstone, Neighborhood Operations"></a><a class="staff-photo" data-rel="tooltip" title="" data-original-title="Kathryn Hymes, Product"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/e5/bc/e5bcb7de07a24153efd5f2916e92cf97.png" alt="Kathryn Hymes, Product"></a><a class="staff-photo" href="https://www.linkedin.com/pub/kelli-ryan/7a/9b9/98" target="_blank" data-rel="tooltip" title="" data-original-title="Kelli Ryan, Recruiting"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/f2/e8/f2e8c4404468dbc11a04663ecc7d89ce.png" alt="Kelli Ryan, Recruiting"></a><a class="staff-photo" href="http://www.linkedin.com/in/kelseygrady" target="_blank" data-rel="tooltip" title="" data-original-title="Kelsey Grady, Communications"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/04/d2/04d240544da769049ebe99f42a3f87c7.png" alt="Kelsey Grady, Communications"></a><a class="staff-photo" href="http://www.linkedin.com/in/kipkaehler" target="_blank" data-rel="tooltip" title="" data-original-title="Kip Kaehler, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/43/7b/437bd18b0a75d08cc20ac37a74b0a278.png" alt="Kip Kaehler, Engineering"></a><a class="staff-photo" href="https://www.linkedin.com/in/martincolaco" target="_blank" data-rel="tooltip" title="" data-original-title="Martin Colaco, Data Science"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/d4/9d/d49da5608fdc3e94fb43f1332fd8c44f.png" alt="Martin Colaco, Data Science"></a><a class="staff-photo" href="http://www.linkedin.com/pub/paco-vi%C3%B1oly/0/6a/1a2/en" target="_blank" data-rel="tooltip" title="" data-original-title="Paco Viñoly, Design"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/98/4a/984a8da52a2156150ec85fd10d8ece5c.png" alt="Paco Viñoly, Design"></a><a class="staff-photo" href="http://www.dailydoog.com" target="_blank" data-rel="tooltip" title="" data-original-title="Patrick Dugan, Design"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/90/ab/90abc1171b0da2415866dde6a5ec621e.png" alt="Patrick Dugan, Design"></a><a class="staff-photo" href="http://www.linkedin.com/in/paulhowe" target="_blank" data-rel="tooltip" title="" data-original-title="Paul Howe, Product"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/e9/ba/e9bade0af66375e71653051c56e9a4f8.png" alt="Paul Howe, Product"></a><a class="staff-photo" href="http://www.linkedin.com/in/pjanakiraman" target="_blank" data-rel="tooltip" title="" data-original-title="Prakash Janakiraman, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/6e/44/6e443903866b524305e7d0fc09c5538d.png" alt="Prakash Janakiraman, Engineering"></a><a class="staff-photo" href="http://www.linkedin.com/in/radhikapartha" target="_blank" data-rel="tooltip" title="" data-original-title="Radhika Partha, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/67/7c/677cd9ab998dd5504fc8f58226d7f324.png" alt="Radhika Partha, Engineering"></a><a class="staff-photo" href="http://www.linkedin.com/in/ryansims" target="_blank" data-rel="tooltip" title="" data-original-title="Ryan Sims, Design"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/db/00/db005f45f1dc2f815ab9f657866890d2.png" alt="Ryan Sims, Design"></a><a class="staff-photo" href="http://www.linkedin.com/in/sarahleary" target="_blank" data-rel="tooltip" title="" data-original-title="Sarah Leary, Marketing"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/a4/36/a436e7c8d9291d9627fd58ce48a4bd94.png" alt="Sarah Leary, Marketing"></a><a class="staff-photo" href="http://www.linkedin.com/in/snmcqueen" target="_blank" data-rel="tooltip" title="" data-original-title="Sean McQueen, Engineering"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/78/3e/783e372cf50e89a8e6bf240f21e804d8.png" alt="Sean McQueen, Engineering"></a><a class="staff-photo" href="https://www.linkedin.com/in/valeriecorahuffman" target="_blank" data-rel="tooltip" title="" data-original-title="Valerie Huffman Bauer, Finance"><img src="https://d3dqvga78raec5.cloudfront.net/staff_photos/23/eb/23ebf498dd82f976b55102e3ff184993.png" alt="Valerie Huffman Bauer, Finance"></a></div>
		</div>
	</div>
</div>

<!-- advanced-features -->
<div id="advanced-features">
      <div class="container">
        <h1 class="blue-heading">选择我们的理由</h1>
        <h2>Analyze and share off your media wizardry!</h2>
        <section class="row down">
          <section class="col-md-6 col-xs-12">
            <div class="col-md-2 col-xs-3">
              <img src="<?php  echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/mention/stats.svg">
            </div>
            <div class="col-md-10 col-xs-9">
              <h4>
                学会用自然的方法说英语
              </h4>
              <p>
                就像在现实生活中，你会用你的手机来听，说，读，写一样：你的潜意识会逐渐的吸收新的词汇并自然的表达出来！。
              </p>
            </div>
          </section>
          <section class="col-md-6 col-xs-12">
            <div class="col-md-2 col-xs-3">
              <img src="<?php  echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/mention/radar.svg">
            </div>
            <div class="col-md-10 col-xs-9">
              <h4>
                在现实生活中学习
              </h4>
              <p>
                有效的自然方法，鼓励开口，鼓励在不断练习与犯错中进步，轻松自然交流。
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
                ABC-China学校提供最优秀的外籍老师。
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
                无限制问题随时咨询
              </h4>
              <p>
                每当你有问题时！你可以在一天中的任何时间都问你喜欢的问题。
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
                黄金地段
              </h4>
              <p>
                我们处在文化氛围极度浓厚的五道口；被清华、北大、体大、地大、北语、北林、农大、北科、矿大、石油、北航，供莘莘学子暂时娱乐的“操场”；是一个文化部落；是聚集来自100多个不同国家人民的小地球村。
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


<!-- <div class="section"> -->
  <?php //include('price.php');?>
<!-- </div> -->
<?php include('float-consult.php');?>

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