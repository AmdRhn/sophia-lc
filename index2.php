<?php get_header(); ?>
<main>
  <section class="keyvisual-area__group">
    <div class="keyvisual-video__wrap">
      <video autoplay loop muted playsinline class="fv--movie sp_none">
        <source src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/mov/keyvisual-mov_pc.mp4">
      </video>
      <video autoplay loop muted playsinline class="fv--movie pc_none">
        <source src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/mov/keyvisual-mov_sp.mp4">
      </video>
    </div>
    <archive class="keyvisual-text__wrap">
      <div class="_title"> <span>Until every woman smiles</span>
        <h1>ソフィアレディスクリニックは女性それぞれのライフステージに寄り添いながら、<br>
          健康で豊かな人生を、生涯に渡りサポートしていきます。</h1>
      </div>
      <div class="keyvisual-items__block">
        <div class="_btn"><a href="#reason">クリニックの特徴を見る<img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/icon-arrow.svg" alt="クリニックの特徴を見る"></a></div>
        <ul>
          <li><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/keyvisual-image01.svg" alt="ソフィアレディスクリニック"></li>
          <li><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/keyvisual-image02.svg" alt="ソフィアレディスクリニック"></li>
          <li><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/keyvisual-image03.svg" alt="ソフィアレディスクリニック"></li>
        </ul>
      </div>
    </archive>
  </section>
  <section class="second-area__group">
    <div class="common-1100-width common-100-padding">
      <div class="second-items__block">
        <div class="second-items__box">			
<!-- スマホ用予約ボタン -->
<div class="access-reserve__wrap pc_none" style="margin-top: -30px; margin-bottom: 16px;">
  <a href="https://sophia.atat.jp/i/f.php" target="_blank" rel="noreferrer">
    <span>オンラインでのご予約はこちら</span>
    <div class="_reserve">24時間予約</div>
  </a>
</div>
<!-- スマホ用予約ボタンここまで -->		
          <h2 class="_titile"><b>INFO</b>RMATION <a href="<?php echo home_url(); ?>/info/">一覧を見る</a></h2>
          <div class="info-items__wrap">
            <?php
            $args = array(
              'post_type' => 'info',
              'posts_per_page' => 4,
            );

            ?>
            <?php $query = new WP_Query( $args ); ?>
            <?php if( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="info-items__block">
              <div class="info-thumbnail__items">
                <div class="_thumbnail">
                  <?php if (has_post_thumbnail()) : ?>
                  <figure>
                    <?php the_post_thumbnail('blog_image'); ?>
                  </figure>
                  <?php else: ?>
                  <figure> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/empty.jpg" alt="<?php the_title(); ?>"> </figure>
                  <?php endif ; ?>
                </div>
              </div>
              <div class="info-text__items">
                <?php
                $terms = get_the_terms( $post->ID, 'info_cat' );
                if ( $terms ) {
                  echo '';
                  foreach ( $terms as $term ) {
                    echo '<span class="_category">' . $term->name . '</span>';
                  }
                  echo '';
                }
                ?>
                <span class="_time">
                <?php the_modified_date('Y.m.d'); ?>
                </span>
                <p>
                  <?php
                  if ( mb_strlen( $post->post_title ) > 30 ) {
                    $title = mb_substr( $post->post_title, 0, 30 );
                    echo $title . '...';
                  } else {
                    echo $post->post_title;
                  }
                  ?>
                </p>
              </div>
              <a href="<?php the_permalink() ?>">詳しく見る</a> </div>
            <?php endwhile; ?>
            <?php else : ?>
            記事がはありません
            <?php
            endif;
            wp_reset_postdata();
            ?>
          </div>
          <div class="index-banner__wrap">
<div class="index-banner__block" style="display: flex; flex-direction: column; gap: 20px;">
<style>
            /* 基本設定（PC用：横並び） */
            ul.custom-banner-list {
              display: flex !important;
              justify-content: space-between; /* 均等に配置 */
              gap: 20px; /* 画像の間の隙間 */
              padding: 0;
              margin: 0;
              list-style: none;
            }
            ul.custom-banner-list li {
              width: 48%; /* PCでは横幅の約半分ずつ使う */
              margin: 0;
            }
            
            /* スマホ（幅768px以下）のときの設定（縦並び） */
            @media screen and (max-width: 768px) {
              ul.custom-banner-list {
                flex-direction: column; /* 縦方向に並べる */
              }
              ul.custom-banner-list li {
                width: 100%; /* 横幅いっぱいに広げる */
              }
            }
          </style>

<style>
.index-banner__block.custom-banner-list {
  display: flex;
  gap: 16px;
}

.index-banner__block.custom-banner-list li {
  flex: 1;
}

@media (max-width: 768px) {
  .index-banner__block.custom-banner-list {
    flex-direction: column;
  }
}
</style>

<ul class="index-banner__block custom-banner-list">
  <li>
    <a href="<?php echo home_url(); ?>/medical/freeze-egg">
      <img src="http://sophia-lc.jp/wp-content/uploads/2026/03/3.webp" alt="計画的卵子凍結" style="width: 100%; height: auto;">
    </a>
  </li>
  <li>
    <a href="<?php echo home_url('/recruit/'); ?>">
      <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/index-banner02.png" alt="求人情報" style="width: 100%; height: auto;">
    </a>
  </li>
</ul>

          </div>
          </div>
        </div>
        <div class="second-items__box">
          <div class="_titile"><b>SCHE</b>DULE<a href="<?php echo home_url(); ?>/info/info-30/">外来担当医表</a></div>
			<div class="schedule-items__wrap">
			  <table>
				  <tr>
                <th>受付時間</th>
                <th>月</th>
                <th>火</th>
                <th>水</th>
                <th>木</th>
                <th>金</th>
                <th>土</th>
                <th>日</th>
                <th>(祝)</th>
              </tr>
				  <tr>
					  <td>09:30-13:00<br>
						  <b>受付12:45まで</b></td>
                <td>◯</td>
                <!-- 月 -->
                <td>◯</td>
                <!-- 火 -->
                <td>◯</td>
                <!-- 水 -->
				  <td>◆</td>
                <!-- 木 -->
                <td>◯</td>
                <!-- 金 -->
                <td>■</td>
                <!-- 土 -->
                <td>休</td>
                <!-- 日 --> 
                <td>△</td>
                <!-- 祝日 --> 
              </tr>
              <tr>
                <td>15:00-18:30<br>
					<b>受付18:15まで</b></td>
                <td>◯</td>
                <!-- 月 -->
                <td>◯</td>
                <!-- 火 -->
                <td>◯</td>
                <!-- 水 -->
                <td>休</td>
                <!-- 木 -->
                <td>◯</td>
                <!-- 金 -->
                <td>■</td>
                <!-- 土 -->
                <td>休</td>
                <!-- 日 --> 
                <td>休</td>
                <!-- 祝日 --> 
                
              </tr>
            </table>
            <span>◆木曜13:30まで(受付終了13:15)<br>■土曜(午前)9:30-12:30(受付終了12:15)<br>■土曜(午後)13:00-15:30(受付終了15:15)<br>△祝日（月曜日のみ）診察あり。詳細は外来担当表ページ参照</span> </div>
          <div class="access-tel__wrap"> <a href="tel:0427763636">
            <div class="_tel"><span>お問い合わせ</span>042-776-3636</div>
            </a> </div>
          <div class="access-reserve__wrap"> <a href="https://sophia.atat.jp/i/f.php" target="_blank" rel="noreferrer"> <span>オンラインでのご予約はこちら</span>
            <div class="_reserve">24時間予約</div>
            </a> </div>
<div class="contact-line__wrap">

  <a href="https://lin.ee/p9aBBGw" target="_blank" rel="nofollow">
    <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/banner-line.png?ver=1.0.1" alt="LINE">
  </a>

  <?php /* ▼▼▼ 求人バナー（無効化中） ▼▼▼
  <a href="<?php echo home_url('/recruit/'); ?>">
    <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/index-banner02.png" alt="求人情報" style="width: 100%; height: auto;">
  </a>
  ▲▲▲ ここまで ▲▲▲ */ ?>

</div>
          <!--
          <div class="social-icon__wrap">
            <div class="_icon"><a href="<?php echo home_url(); ?>/" target="_blank" rel="nofollow"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/social-instagram.svg" alt="instagram"></a></div>
            <div class="_icon"><a href="<?php echo home_url(); ?>/" target="_blank" rel="nofollow"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/social-twitter.svg" alt="twitter"></a></div>
            <div class="_icon"><a href="<?php echo home_url(); ?>/" target="_blank" rel="nofollow"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/social-line.svg" alt="line"></a></div>
          </div>
--> 
        </div>
      </div>
    </div>
  </section>
  <section class="navigation-area__group">
    <div class="common-1100-width">
      <ul class="navigation-area__block">
        <li><a href="<?php echo home_url(); ?>/firsttime/"> <span class="_icon"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/icon-firsttime.svg" alt="初めての方"></span> <span class="_text">初めての方</span> <span class="_btn">MORE</span> </a></li>
        <li><a href="<?php echo home_url(); ?>/visit/"> <span class="_icon"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/icon-visit.svg" alt="通院中の方"></span> <span class="_text">通院中の方</span> <span class="_btn">MORE</span> </a></li>
        <li><a href="<?php echo home_url(); ?>/#access"> <span class="_icon"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/icon-access.svg" alt="アクセス"></span> <span class="_text">アクセス</span> <span class="_btn">MORE</span> </a></li>
      </ul>
    </div>
  </section>
  <div id="reason"></div>
  <section class="reason-area__group">
    <div class="common-1100-width common-120-padding">
      <div class="common-title__wrap"> <span>The <b>reason</b> why it was chosen</span>
        <h2>当クリニックが<br class="pc_none">
          安心な<b>8つ</b>の理由</h2>
      </div>
      <div class="movie-area">
        <div class="movie-wrap">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/dX5bRpfv7s8?si=8ZIFqZZyos5iYMOw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>
      <div class="reason-items__wrap">
        <div class="reason-items__block">
          <div class="reason-items__image"> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/reason-image01.png" alt="長い伝統と最先端医学で高い妊娠率" class="visual"> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/reason-number01.svg" alt="長い伝統と最先端医学で高い妊娠率" class="number"></div>
          <div class="reason-items__text">
            <div class="_title"> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/reason-number01.svg" alt="">
              <h3>長い伝統と最先端医学で高い妊娠率</h3>
            </div>
            <p>ソフィアレディスクリニックは開院以来25年で採卵数10,000件以上、5,000名以上の妊娠実績がございます。<br>
              クリニックを訪れたカップルの約70%がお子様を授かり、卒業されています。</p>
          </div>
        </div>
        <div class="reason-items__block">
          <div class="reason-items__image"> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/reason-image02.png" alt="患者様にやさしく心のこもった医療" class="visual"> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/reason-number02.svg" alt="患者様にやさしく心のこもった医療" class="number"></div>
          <div class="reason-items__text">
            <div class="_title"> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/reason-number02.svg" alt="患者様にやさしく心のこもった医療">
              <h3>患者様にやさしく心のこもった医療</h3>
            </div>
            <p>静脈麻酔を使用した無痛採卵を始めとして、患者様の痛みをできるだけ軽減する診察・治療を心がけています。また、精神的な不安も和らげるために、優秀なスタッフより懇切丁寧な説明・カウンセリングも心を込めて行います。心身的にも経済的にも負担が少しでも軽くなるような医療を提案致します。</p>
          </div>
        </div>
        <div class="reason-items__block">
          <div class="reason-items__image"> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/reason-image03.png" alt="人目以降の不妊治療に強いクリニック" class="visual"> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/reason-number03.svg" alt="人目以降の不妊治療に強いクリニック" class="number"></div>
          <div class="reason-items__text">
            <div class="_title"> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/reason-number03.svg" alt="人目以降の不妊治療に強いクリニック">
              <h3>２人目以降の不妊治療に強いクリニック</h3>
            </div>
            <p>当院には『１人目を自然妊娠で授かったのに、なかなか２人目を授かることができない』などのお悩みを持った方々が多く来院されます。そういったケースでは間違った方針を選択しないことが重要です。<br>
              当院はそのような方々の治療経験が豊富であるため、それぞれの個々の原因に対応した治療の提供が可能です。また、お子様連れでの診察も可能です。</p>
          </div>
        </div>
        <div class="reason-items__block">
          <div class="reason-items__image"> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/reason-image04.png" alt="プレコンセプションケア外来・卵子凍結" class="visual"> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/reason-number04.svg" alt="プレコンセプションケア外来・卵子凍結" class="number"></div>
          <div class="reason-items__text">
            <div class="_title"> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/reason-number04.svg" alt="プレコンセプションケア外来・卵子凍結">
              <h3>プレコンセプションケア外来・卵子凍結</h3>
            </div>
            <p>当院は患者様のライフプランを第一に尊重した医療を提供します。<br>
              『まだ妊娠予定は無いけど、将来の妊娠のために何かできることを知りたい』など、妊娠能力に関する様々な検査や栄養相談、ブライダルチェックを通して、患者様のこれからのライフプランを総合的に考えることを大事にしております。未婚女性の方の卵子凍結も可能です。</p>
          </div>
        </div>
        <div class="reason-items__block">
          <div class="reason-items__image"> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/reason-image05.png" alt="男性不妊外来・男性ブライダルチェック" class="visual"> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/reason-number05.svg" alt="男性不妊外来・男性ブライダルチェック" class="number"></div>
          <div class="reason-items__text">
            <div class="_title"> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/reason-number05.svg" alt="男性不妊外来・男性ブライダルチェック">
              <h3>男性不妊外来・男性ブライダルチェック</h3>
            </div>
            <p>不妊原因の半分は男性因子にあると言われています。婦人科クリニックでは珍しく、当院では泌尿器科の男性医師による専門外来がございます。そのため、男性にとって敷居が高く、なかなか相談しにくいED、射精障害なども素早く的確な対応が可能です。カップル同時に検査・治療を効率よく進められます。</p>
          </div>
        </div>
        <div class="reason-items__block">
          <div class="reason-items__image"> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/reason-image06.png" alt="長谷川レディースクリニックと連携治療" class="visual"> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/reason-number06.svg" alt="長谷川レディースクリニックと連携治療" class="number"></div>
          <div class="reason-items__text">
            <div class="_title"> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/reason-number06.svg" alt="長谷川レディースクリニックと連携治療">
              <h3>長谷川レディースクリニックと連携治療</h3>
            </div>
            <p>当院は橋本駅にある長谷川レディースクリニックと連携して婦人科治療および不妊治療を行なっています。２つの施設で連携して、検査結果や治療方針の共有が可能です。橋本から体外受精に進まれる方は、より早くきめ細かな診療を受けることができます。</p>
          </div>
        </div>
        <div class="reason-items__block">
          <div class="reason-items__image"> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/reason-image07.png" alt="一般婦人科診療に幅広く対応" class="visual"> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/reason-number07.svg" alt="一般婦人科診療に幅広く対応" class="number"></div>
          <div class="reason-items__text">
            <div class="_title"> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/reason-number07.svg" alt="一般婦人科診療に幅広く対応">
              <h3>一般婦人科診療に幅広く対応</h3>
            </div>
            <p>当院は『女性の人生の四季』に寄り添うクリニックとして、思春期から更年期、老年期までの様々な症状に対応しています。更年期障害やがん検診、生理周りの症状、ピル相談、デリケートゾーンの痒み、など何でもご相談ください。女性ヘルスケア専門の女性医師も在籍しており、幅広く対応可能です。また、子宮鏡による日帰りポリープ手術も可能です。</p>
          </div>
        </div>
        <div class="reason-items__block">
          <div class="reason-items__image"> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/reason-image08.png" alt="通いやすさ重視のクリニック" class="visual"> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/reason-number08.svg" alt="通いやすさ重視のクリニック" class="number"></div>
          <div class="reason-items__text">
            <div class="_title"> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/reason-number08.svg" alt="通いやすさ重視のクリニック">
              <h3>通いやすさ重視のクリニック</h3>
            </div>
            <p>淵野辺駅南口徒歩2分、約１０台分の専用駐車場も完備しております。お忙しい仕事と通院の両立が可能になるように、採血や注射の時間を融通が効きやすいよう設定しております。その他、LINEからの診察予約や、クレジットカード支払いも対応しております。</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div id="disease"></div>
  <section class="disease-area__group">
    <div class="common-1100-width">
      <div class="common-title__wrap"> <span><b>disease</b> lists</span>
        <h2>当院は様々な症状に<br class="pc_none">
          対応しています</h2>
      </div>
      <div class="disease-items__wrap">
        <div class="disease-items__block">
          <div class="disease-items__box"> <a href="<?php echo home_url(); ?>/medical/infertility/"> <span class="_icon"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/disease-icon01.svg" alt="不妊症"></span> <span class="_text">不妊症</span> <span class="_arrow"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/icon-next.svg" alt="不妊症"></span> </a> </div>
          <div class="disease-items__box"> <a href="<?php echo home_url(); ?>/medical/male-infertility//"> <span class="_icon"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/disease-icon11.svg" alt="男性不妊"></span> <span class="_text">男性不妊</span> <span class="_arrow"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/icon-next.svg" alt="男性不妊"></span> </a> </div>
          <div class="disease-items__box"> <a href="<?php echo home_url(); ?>/medical/day-hysteroscopy/"> <span class="_icon"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/disease-icon15.svg" alt="日帰り子宮鏡手術"></span> <span class="_text">日帰り子宮鏡手術</span> <span class="_arrow"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/icon-next.svg" alt="日帰り子宮鏡手術"></span> </a> </div>
          <div class="disease-items__box"> <a href="<?php echo home_url(); ?>/medical/irregular-menstruation/"> <span class="_icon"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/disease-icon14.svg" alt="生理不順"></span> <span class="_text">生理不順</span> <span class="_arrow"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/icon-next.svg" alt="生理不順"></span> </a> </div>
          <div class="disease-items__box"> <a href="<?php echo home_url(); ?>/medical/menstrual-pain/"> <span class="_icon"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/disease-icon06.svg" alt="生理痛"></span> <span class="_text">生理痛</span> <span class="_arrow"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/icon-next.svg" alt="生理痛"></span> </a> </div>
          <div class="disease-items__box"> <a href="<?php echo home_url(); ?>/medical/abnormal-bleeding/"> <span class="_icon"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/disease-icon08.svg" alt="不正出血"></span> <span class="_text">不正出血</span> <span class="_arrow"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/icon-next.svg" alt="不正出血"></span> </a> </div>
          <div class="disease-items__box"> <a href="<?php echo home_url(); ?>/medical/pill-consultation/"> <span class="_icon"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/disease-icon04.svg" alt="ピル相談・アフターピル"></span> <span class="_text">ピル相談・アフターピル</span> <span class="_arrow"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/icon-next.svg" alt="ピル相談・アフターピル"></span> </a> </div>
          <div class="disease-items__box"> <a href="<?php echo home_url(); ?>/medical/menstrual-movement/"> <span class="_icon"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/disease-icon05.svg" alt="生理移動"></span> <span class="_text">生理移動</span> <span class="_arrow"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/icon-next.svg" alt="生理移動"></span> </a> </div>
          <div class="disease-items__box"> <a href="<?php echo home_url(); ?>/medical/sexual-infection/"> <span class="_icon"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/disease-icon04.svg" alt="性感染症"></span> <span class="_text">性感染症</span> <span class="_arrow"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/icon-next.svg" alt="性感染症"></span> </a> </div>
          <div class="disease-items__box"> <a href="<?php echo home_url(); ?>/medical/premenstrual-syndrome/"> <span class="_icon"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/disease-icon07.svg" alt="月経前症候群"></span> <span class="_text">月経前症候群</span> <span class="_arrow"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/icon-next.svg" alt="月経前症候群"></span> </a> </div>
          <div class="disease-items__box"> <a href="<?php echo home_url(); ?>/medical/endometriosis/"> <span class="_icon"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/disease-icon09.svg" alt="子宮内膜症"></span> <span class="_text">子宮内膜症</span> <span class="_arrow"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/icon-next.svg" alt="子宮内膜症"></span> </a> </div>
          <div class="disease-items__box"> <a href="<?php echo home_url(); ?>/medical/menopause/"> <span class="_icon"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/disease-icon10.svg" alt="更年期障害"></span> <span class="_text">更年期障害</span> <span class="_arrow"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/icon-next.svg" alt="更年期障害"></span> </a> </div>
          <div class="disease-items__box"> <a href="<?php echo home_url(); ?>/medical/preconception-care/"> <span class="_icon"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/disease-icon03.svg" alt="プレコンセプションケア"></span> <span class="_text">プレコンセプションケア</span> <span class="_arrow"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/icon-next.svg" alt="プレコンセプションケア"></span> </a> </div>
          <div class="disease-items__box"> <a href="<?php echo home_url(); ?>/medical/bridal-check/"> <span class="_icon"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/disease-icon02.svg" alt="ブライダルチェック"></span> <span class="_text">ブライダルチェック</span> <span class="_arrow"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/icon-next.svg" alt="ブライダルチェック"></span> </a> </div>
          <div class="disease-items__box"> <a href="<?php echo home_url(); ?>/medical/freeze-egg/"> <span class="_icon"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/disease-icon13.svg" alt="卵子凍結"></span> <span class="_text">卵子凍結</span> <span class="_arrow"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/icon-next.svg" alt="卵子凍結"></span> </a> </div>
          <div class="disease-items__box"> <a href="<?php echo home_url(); ?>/medical/cancer-vaccine/"> <span class="_icon"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/disease-icon11.svg" alt="子宮頚がんワクチン"></span> <span class="_text">子宮頚がんワクチン</span> <span class="_arrow"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/icon-next.svg" alt="子宮頚がんワクチン"></span> </a> </div>
          <div class="disease-items__box"> <a href="<?php echo home_url(); ?>/medical/cancer-screening/"> <span class="_icon"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/disease-icon12.svg" alt="子宮がん乳がん検診"></span> <span class="_text">子宮がん乳がん検診</span> <span class="_arrow"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/icon-next.svg" alt="子宮がん乳がん検診"></span> </a> </div>
          <div class="disease-items__box"> <a href="<?php echo home_url(); ?>/medical/aesthetic-medicine/"> <span class="_icon"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/disease-icon10.svg" alt="美容医療"></span> <span class="_text">美容医療</span> <span class="_arrow"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/icon-next.svg" alt="美容医療"></span> </a> </div>
        </div>
      </div>
      <!-- <div class="_btn"><a href="<?php echo home_url(); ?>/medical/day-hysteroscopy/"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/btn-image.svg" alt="一覧はこちら"></a></div> -->
    </div>
  </section>
  <div id="greeting"></div>
  <section class="greeting-area__group">
    <div class="common-1100-width common-120-padding">
      <div class="greeting-items__block">
        <div class="greeting-items__text">
          <div class="common-title__wrap _left"> <span><b>ABOUT </b> DIRECTOR</span>
            <h2>院長あいさつ</h2>
          </div>
          <div class="_image"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/greeting-image.jpg" alt="院長あいさつ"></div>
          <p>長い伝統で蓄積された治療実績とハーバード大学で培った世界最先端の知見を合わせることで、患者様一人一人に最適な治療を提案し、最短で高い妊娠率を実現します。</p>
        </div>
        <div class="greeting-items__image">
          <div class="_image"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/greeting-image.jpg" alt="院長あいさつ"></div>
          <div class="_btn"><a href="<?php echo home_url(); ?>/doctor/"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/btn-image.svg" alt="一覧はこちら"></a></div>
        </div>
      </div>
    </div>
  </section>
  <section class="blog-area__group">
    <div class="common-1400-width">
      <div class="blog-area__inner">
        <div id="media"></div>
        <div class="media-items__block">
          <div class="media-items__title">
            <div class="common-title__wrap _left"> <span><b>MEDIA</b> lists</span>
              <h2>メディア掲載</h2>
            </div>
          </div>
          <div class="media-items__lists">
            <?php if(have_rows('media_items__group', 'option')): ?>
            <ul>
              <?php while(have_rows('media_items__group', 'option')): the_row(); ?>
              <li> <a href="<?php the_sub_field('url'); ?>" target="_blank" rel="nofollow">
                <div class="_image"><img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('text'); ?>"></div>
                <div class="_text">
                  <?php the_sub_field('text'); ?>
                </div>
                </a> </li>
              <?php endwhile; ?>
            </ul>
            <?php else: ?>
            メディア掲載はありません
            <?php endif; ?>
          </div>
        </div>
        <div id="blog"></div>
        <div class="blog-items__block">
          <div class="blog-items__title">
            <div class="common-title__wrap _left"> <span><b>BLOG</b> lists</span>
              <h2>ブログ</h2>
            </div>
            <div class="_btn"><a href="<?php echo home_url(); ?>/blog/"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/btn-image.svg" alt="一覧はこちら"></a></div>
          </div>
          <div class="blog-items__lists">
            <ul>
              <?php
              $args = array(
                'post_type' => 'blog',
                'posts_per_page' => 3,
              );

              ?>
              <?php $query = new WP_Query( $args ); ?>
              <?php if( $query->have_posts() ) : ?>
              <?php while ( $query->have_posts() ) : $query->the_post(); ?>
              <li>
                <div class="blog-category__lists"> <span class="_time">
                  <?php the_modified_date('Y.m.d'); ?>
                  </span>
                  <?php
                  $terms = get_the_terms( $post->ID, 'blog_cat' );
                  if ( $terms ) {
                    echo '';
                    foreach ( $terms as $term ) {
                      echo '<span class="_category">' . $term->name . '</span>';
                    }
                    echo '';
                  }
                  ?>
                </div>
                <a href="<?php the_permalink() ?>">
                <?php
                if ( mb_strlen( $post->post_title ) > 50 ) {
                  $title = mb_substr( $post->post_title, 0, 50 );
                  echo $title . '...';
                } else {
                  echo $post->post_title;
                }
                ?>
                </a></li>
              <?php endwhile; ?>
            </ul>
            <?php else : ?>
            記事がはありません
            <?php
            endif;
            wp_reset_postdata();
            ?>
          </div>
        </div>
        <div class="blog-banner__block">
          <li><a href="https://sophia-lc.jp/blog_cat/consultation-room/"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/blog-banner_01.png" alt="不妊の相談室"></a></li>
          <li><a href="https://sophia-lc.jp/review/"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/blog-banner_02.png" alt="卒業生からの手紙"></a></li>
        </div>
      </div>
    </div>
  </section>
  <div id="review"></div>
  <section class="review-area__group">
    <div class="common-title__wrap"> <span><b>from</b> graduates</span>
      <h2>卒業生からの手紙</h2>
    </div>
    <article class="review-items__wrap">
      <div class="review-slider__wrap">
        <?php
        $args = array(
          'post_type' => 'review',
          'posts_per_page' => 10,
        );

        ?>
        <?php $query = new WP_Query( $args ); ?>
        <?php if( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="review-items__box">
          <div class="review-items__inner">
            <div class="_image"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/icon-quote.svg" alt="卒業生からの手紙"></div>
            <p class="_text">
              <?php
              if ( mb_strlen( get_field( 'text' ) ) > 110 ) {
                $text = mb_substr( strip_tags( get_field( 'text' ) ), 0, 110 );
                echo $text . '…';
              } else {
                echo strip_tags( get_field( 'text' ) );
              }
              ?>
            </p>
            <div class="_pason">
              <?php the_field('old'); ?>
              ／
              <?php the_field('sex'); ?>
              ／
              <?php
              $terms = get_the_terms( $post->ID, 'review_cat' );
              if ( $terms ) {
                echo '';
                foreach ( $terms as $term ) {
                  echo '' . $term->name . '';
                }
                echo '';
              }
              ?>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
      <?php else : ?>
      記事はありません
      <?php
      endif;
      wp_reset_postdata();
      ?>
      <div class="common-1400-width">
        <div class="_btn"><a href="<?php echo home_url(); ?>/review/"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/btn-image.svg" alt="一覧はこちら"></a></div>
      </div>
    </article>
  </section>
  <div id="access"></div>
  <section class="access-area__group">
    <div class="common-1100-width common-120-padding">
      <div class="common-title__wrap _left"> <span><b>clinic </b> access</span>
        <h2>アクセス</h2>
      </div>
      <div class="access-items__area">
        <article class="access-items__wrap">
          <div class="access-address__title">
            <div class="_logo"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/logo.svg?ver=1.0.1" alt="ソフィアレディスクリニック"></div>
            <div class="_text">〒252-0233 <br>
              神奈川県相模原市中央区鹿沼台2丁目12-2 サンライズアートビル 2F<br>
            町田市・八王子市・大和市からも通いやすい好立地。</div>
          </div>
          <div class="access-items__block">
            <div class="_map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12981.661851837898!2d139.3929175!3d35.568136!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018fdcfea42a3bf%3A0x8a714cbe140bfd53!2z44K944OV44Kj44Ki44Os44OH44Kj44K544Kv44Oq44OL44OD44Kv!5e0!3m2!1sja!2sjp!4v1706578903879!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="_image"> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/access-image01.jpg" alt="ソフィアレディスクリニック"> </div>
          </div>
          <div class="access-address__wrap">
            <div class="access-schedule__block">
              <div class="_schedule">
			        <div class="schedule-items__wrap">
			  <table>
				  <tr>
                <th>受付時間</th>
                <th>月</th>
                <th>火</th>
                <th>水</th>
                <th>木</th>
                <th>金</th>
                <th>土</th>
                <th>日</th>
                <th>(祝)</th>
              </tr>
				  <tr>
					  <td>09:30-13:00<br>
						  <b>受付12:45まで</b></td>
                <td>◯</td>
                <!-- 月 -->
                <td>◯</td>
                <!-- 火 -->
                <td>◯</td>
                <!-- 水 -->
				  <td>◆</td>
                <!-- 木 -->
                <td>◯</td>
                <!-- 金 -->
                <td>■</td>
                <!-- 土 -->
                <td>休</td>
                <!-- 日 --> 
                <td>△</td>
                <!-- 祝日 --> 
              </tr>
              <tr>
                <td>15:00-18:30<br>
					<b>受付18:15まで</b></td>
                <td>◯</td>
                <!-- 月 -->
                <td>◯</td>
                <!-- 火 -->
                <td>◯</td>
                <!-- 水 -->
                <td>休</td>
                <!-- 木 -->
                <td>◯</td>
                <!-- 金 -->
                <td>■</td>
                <!-- 土 -->
                <td>休</td>
                <!-- 日 --> 
                <td>休</td>
                <!-- 祝日 --> 
                
              </tr>
            </table>
            <span>◆木曜13:30まで(受付終了13:15)<br>■土曜(午前)9:30-12:30(受付終了12:15)<br>■土曜(午後)13:00-15:30(受付終了15:15)<br>△祝日（月曜日のみ）診察あり。詳細は外来担当表ページ参照</span> </div>
              </div>
              <div class="_appointment">
                <div class="access-appointment__tel"> <span>お問い合わせ</span> <a href="tel:0427763636">042-776-3636</a> </div>
                <div class="access-appointment__web"><a href="" target="_blank" rel="nofollow"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/icon-appointment.svg" alt="">24時間診療予約</a></div>
              </div>
            </div>
            <div class="access-banner__wrap"> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/cachecard-image_pc.png" alt="キャッシュカード" class="sp_none"> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/cachecard-image_sp.png" alt="キャッシュカード" class="pc_none"> </div>
          </div>
        </article>
        <article class="access-items__wrap">
          <div class="access-address__title">
            <div class="_logo"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/logo-hasegawa.svg" alt="長谷川レディースクリニック"></div>
            <div class="_text">〒252-0143<br>
              神奈川県相模原市緑区橋本2-3-6吉美ビル3F</div>
          </div>
          <div class="access-items__block">
            <div class="_map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12977.245559410387!2d139.343128!3d35.5953847!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60191d364d7071ed%3A0x36fef0bc79570faf!2z6ZW36LC35bed44Os44OH44Kj44O844K544Kv44Oq44OL44OD44Kv!5e0!3m2!1sja!2sjp!4v1706580553153!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="_image"> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/access-image02.jpg" alt="長谷川レディースクリニック"> </div>
          </div>
          <div class="access-address__wrap">
            <div class="access-schedule__block">
              <div class="_schedule">
                <div class="schedule-items__wrap">
                  <table>
                    <tr>
                      <th>受付時間</th>
                      <th>月</th>
                      <th>火</th>
                      <th>水</th>
                      <th>木</th>
                      <th>金</th>
                      <th>土</th>
                      <th>日/祝</th>
                    </tr>
                    <tr>
                      <td>09:00-12:30<br>
                        <b>最終受付11:30</b></td>
                      <td>★</td>
                      <!-- 月 -->
                      <td>★</td>
                      <!-- 火 -->
                      <td>★</td>
                      <!-- 水 -->
                      <td>休</td>
                      <!-- 木 -->
                      <td>★</td>
                      <!-- 金 -->
                      <td>◉</td>
                      <!-- 土 -->
                      <td>休</td>
                      <!-- 日 --> 
                    </tr>
                    <tr>
                      <td>15:00-19:00<br>
                        <b>最終受付17:30</b></td>
                      <td>●</td>
                      <!-- 月 -->
                      <td>●</td>
                      <!-- 火 -->
                      <td>★</td>
                      <!-- 水 -->
                      <td>休</td>
                      <!-- 木 -->
                      <td>●</td>
                      <!-- 金 -->
                      <td>▲</td>
                      <!-- 土 -->
                      <td>休</td>
                      <!-- 日 --> 
                    </tr>
                  </table>
                  <span>★月曜日午前、火曜日午前、水曜日午前・午後、金曜午前は女医による診察を行っております。<br>
                  ◉土曜午前は医師2名による2診体制にて診察を行っております。<br>
                  ▲土曜日午後は17時に診療終了（初診受付は11:30まで、再診受付は16:00まで）<br>
                  ※学会等の都合で担当医が変更になる場合もございます。予めご了承ください。<br>
                  休診日　木曜日、日曜、祝祭日</span> </div>
              </div>
              <div class="_appointment">
                <div class="access-appointment__tel"> <span>お問い合わせ</span> <a href="tel:0427005680">042-700-5680</a> </div>
                <div class="access-appointment__web"><a href="https://hasegawaladies-cl.jp/" target="_blank">ホームページはこちら</a></div>
              </div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>
  <div id="facility"></div>
  <section class="facility-area__group">
    <ul class="facility-slider__wrap">
      <li> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/facility-image02.jpg" alt="施設紹介"> </li>
      <li> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/facility-image03.jpg" alt="施設紹介"> </li>
      <li> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/facility-image04.jpg" alt="施設紹介"> </li>
      <li> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/facility-image05.jpg" alt="施設紹介"> </li>
      <li> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/facility-image06.jpg" alt="施設紹介"> </li>
      <li> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/facility-image07.jpg" alt="施設紹介"> </li>
      <li> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/facility-image02.jpg" alt="施設紹介"> </li>
      <li> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/facility-image03.jpg" alt="施設紹介"> </li>
      <li> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/facility-image04.jpg" alt="施設紹介"> </li>
      <li> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/facility-image05.jpg" alt="施設紹介"> </li>
      <li> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/facility-image06.jpg" alt="施設紹介"> </li>
      <li> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/facility-image07.jpg" alt="施設紹介"> </li>
    </ul>
    <div class="_btn"><a href="<?php echo home_url(); ?>/facility/"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/btn-image.svg" alt="一覧はこちら"></a></div>
  </section>
  <section class="banner-area__group">
    <article class="banner-area__inner">
      <div class="common-1100-width common-100-padding">
        <div class="banner-items__block">
          <div class="banner-items__box"><a href="<?php echo home_url(); ?>/recruit/"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/banner-image01_pc.jpg" alt="求人情報" class="sp_none"> <img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/banner-image01_sp.jpg" alt="" class="pc_none"></a></div>
          <div class="banner-items__box"><a href="<?php echo home_url(); ?>/faq/"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/banner-image02.jpg" alt="よくある質問"></a></div>
          <div class="banner-items__box"><a href="<?php echo home_url(); ?>/organization/"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/banner-image03.jpg" alt="紹介病院医療機関"></a></div>
          <div class="banner-items__box"><a href="<?php echo home_url(); ?>/info/info-30/"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/banner-image04.jpg" alt="外来担当医表"></a></div>
			<div class="banner-items__box"><a href="<?php echo home_url(); ?>/download/"><img src="<?php echo esc_url ( get_template_directory_uri() ); ?>/assets/img/banner-image06.jpg" alt="更新書類ダウンロード"></a></div>
        </div>
      </div>
    </article>
  </section>
</main>
<?php get_footer(); ?>
