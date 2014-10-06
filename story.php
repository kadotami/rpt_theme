<?php
/*
Template Name: Story
*/
?>

<?php get_header(); ?>

<div class="story-main story-block">
  <div class="story-contents main-contents">
    <div class='title-image story-title'>
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/title/story.png">
    </div>
    <h3 class="fontM main-sub-title blue-sub-title">謎を解き、城下町の秘密をのぞこう</h3>
    <p class="fontEL">
      山間の国道9号線を走り続けると、<br>突然現れる鳥居が出迎える。<br>
      秘境、津和野町。<br>山の中にぽっかり空いた穴に広がる城下町。<br>
      ここにはひっそりとたくさんの秘密が<br>ちりばめられています。<br>
    </p>
    <p class="fontEL">
      アナタには新人探偵として、<br>この秘境の謎を解き明かしてもらいます。<br>
      ゲームのようなまるっきりの異世界と<br>いつもの生活のあいだくらい。<br>
      普段とちょっとだけルールの違う、<br>おかしな山奥の非日常へようこそ。<br>
    </p>
  </div>
  <div class="story-back-image">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/story/main_back.png">
  </div>
</div>

<div class="story-link-area">
  <h5 class="fontEL">新人探偵のアナタが解き明かす、2つの謎めいた物語</h5>
  <ul class="story-link">
    <li><a href="#story-one"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/story/main_link1.png"></a></li>
    <li><a href="#story-two"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/story/main_link2.png"></a></li>
    <div class="clear-both"></div>
  </ul>
</div>

<div id="story-one" class="story-block">
  <div class="story-contents sub-contents">
    <div class='story-title-image story-one-title'>
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/story/1_title.png">
    </div>
    <p class="lead-sentence fontL">
      何でもないよくある田舎町。「おやすみ」と布団に潜り込む。
      嫌な予感も不気味な感じも何もない、いつもの夜だった。
    </p>
    <table class="story-detail-block">
      <tr>
        <td>
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/story/1_pic1.png">
        </td>
        <td class="fontEL">
          ある深夜、謎のメールを受信する。
          「津和野の大きなうねりを記録して欲しい」という謎めいた依頼。
          「水を追いかけろ」という謎のヒントでしめくくられてい
          る。
          添付には、地図と暗号。
        </td>
      </tr>
    </div>
    <table class="story-detail-block">
      <tr>
        <td>
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/story/1_pic2.png">
        </td>
        <td class="fontEL">
          どうやら、本当に調査の実力がある者に、
          その大きなうねりとやらの情報を教えるつもりらしい。
          丁寧に、情報が暗号化されている。
          暗号によって隠された津和野のうねりとは？
          津和野と水とは？
        </td>
      </tr>
    </table>
    <h3 class="fontL font-lighter">秘境と水の物語を解き明かそう</h3>
  </div>
  <div class="story-bottom-area">
    <ul class="bottom-menu">
      <li><a href="/about"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/bottom_button/to_about"></a></li>
      <li><a href="/ticket"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/bottom_button/to_ticket"></a></li>
      <div class="clear-both"></div>
    </ul>
  </div>
  <div class="story-back-image">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/story/1_back.png">
  </div>
</div>

<div id="story-two" class="story-block font-white">
  <div class="story-contents sub-contents">
    <div class='story-title-image story-two-title'>
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/story/2_title.png">
    </div>
    <p class="lead-sentence fontL">
      私の愛する静かな城下町。この町と運命をともにして死ぬ。
      ところがその日常が、アイツたちの出現で崩れつつある。
    </p>
    <table class="story-detail-block">
      <tr>
        <td>
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/story/2_pic1.png">
        </td>
        <td class="fontEL">
          とつじょ舞い込んで来た依頼文書、
          「静かな生活を乱す、怪しいヤツらがやってきた。
          アイツたちを調査して欲しい」という内容。
          地図と暗号が同封されている。
        </td>
      </tr>
    </table>
    <table class="story-detail-block">
      <tr>
        <td>
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/story/2_pic2.png">
        </td>
        <td class="fontEL">
          暗号を解き明かし、怪しい異邦人たちの足跡を追いながら、正体を暴こう。
          怪しい秘密結社なのか、それともどこからか逃げてきた犯罪者？！
        </td>
      <tr>
    </table>
    <h3 class="fontL font-lighter">怪しい異邦人たちの正体を解き明かそう</h3>
  </div>
  <div class="story-bottom-area">
    <ul class="bottom-menu">
      <li><a href="/about"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/bottom_button/to_about"></a></li>
      <li><a href="/ticket"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/bottom_button/to_ticket"></a></li>
      <div class="clear-both"></div>
    </ul>
  </div>
  <div class="story-back-image">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/story/2_back.png">
  </div>
</div>
<?php get_footer(); ?>
</body>
</html>