<?php
    get_header();
?>
	<main id="diagnosis__main" class="site-main">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/diagnosis/main_header.png" alt="「脳トレ」4タイプ診断" class="diagnosis__mainHeader -pc">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/diagnosis/main_header-sp.png" alt="「脳トレ」4タイプ診断" class="diagnosis__mainHeader -sp">
        <p class="diagnosis__lead">
            各タイプによって、<br class="-sp">得意なオーダーの通し方やパートナーとの<br class="-sp">相性があるよ！<br class="-pc" />
            自分に合った方法で<br class="-sp">サクサク引き寄せていこう！<br />
            全部で16問、自分に当てはまるものに<br class="-sp">チェックを打ってね。
        </p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/diagnosis/text_go.svg" alt="go" class="diagnosis__go">

        <div id="diagnosis-form">
            <h3 class="diagnosis__group">【A郡】</h3>
            <div class="l-checkboxes">
                <diagnosis-form
                    v-for="item in groupA"
                    :key="item.id"
                    :id="item.id"
                    :question="item.question"
                    @change="toggleChecked('A', $event)"
                />
            </div>
            <h3 class="diagnosis__group">【B郡】</h3>
            <div class="l-checkboxes">
                <diagnosis-form
                    v-for="item in groupB"
                    :key="item.id"
                    :id="item.id"
                    :question = "item.question"
                    @change="toggleChecked('B', $event)"
                />
            </div>
            <h3 class="diagnosis__group">【C郡】</h3>
            <div class="l-checkboxes">
                <diagnosis-form
                    v-for="item in groupC"
                    :key="item.id"
                    :id="item.id"
                    :question = "item.question"
                    @change="toggleChecked('C', $event)"
                />
            </div>
            <h3 class="diagnosis__group">【D郡】</h3>
            <div class="l-checkboxes">
                <diagnosis-form
                    v-for="item in groupD"
                    :key="item.id"
                    :id="item.id"
                    :question = "item.question"
                    @change="toggleChecked('D', $event)"
                />
            </div>
            <button @click="diagnose" class="diagnosis__button">診断結果へ</button>
            <transition name="diagnosis-fade">
                <div v-if="showResult" class="diagnosis__resultHeaderWrapper" id="diagnosis-result">
                    <h2 class="diagnosis__resultHeading">
                        あなたに合った<br />
                        オーダーの仕方はこれ！
                        <span class="diagnosis__caution">※チェックが同数の場合、<br class="-sp">複数の結果が表示されます</span>
                    </h2>
                </div>
            </transition>
            <transition name="diagnosis-fade">
                <div v-if="isShowGroupA">
                    <diagnosis-result
                        v-for="type in spring"
                        :key="type.group"
                        :type-source="'<?php echo get_template_directory_uri() ?>/assets/img/diagnosis/type_spring_text.png'"
                        :group="type.group"
                        more-link="<?php echo get_permalink(3760); ?>"
                        :chara-source="'<?php echo get_template_directory_uri() ?>/assets/img/diagnosis/type_spring_image.jpg'"
                        :person-source="'<?php echo get_template_directory_uri() ?>/assets/img/diagnosis/y-etoh.jpg'"
                        :person-name="type.personName"
                        :genres="type.genres"
                        profile-link="<?php echo home_url('/profile#etoh') ?>"
                    >
                    <p class="diagnosis__resultDesc">
                        華やかで軽やかな空気感が一番の魅力。<br />
                        直感に従って迷わず動けるフットワークの軽さで、スルスルとオーダーを通せる才覚の持ち主。<br />
                        根拠のない感覚を頼りになぜかうまく行ってしまうタイプ。
                    </p>
                    </diagnosis-result>
                </div>
            </transition>
            <transition name="diagnosis-fade">
                <div v-if="isShowGroupB">
                    <diagnosis-result
                        v-for="type in summer"
                        :key="type.group"
                        :type-source="'<?php echo get_template_directory_uri() ?>/assets/img/diagnosis/type_summer_text.png'"
                        :group="type.group"
                        more-link="<?php echo get_permalink(3763); ?>"
                        :chara-source="'<?php echo get_template_directory_uri() ?>/assets/img/diagnosis/type_summer_image.jpg'"
                        :person-source="'<?php echo get_template_directory_uri() ?>/assets/img/diagnosis/mii.jpg'"
                        :person-name="type.personName"
                        :genres="type.genres"
                        profile-link="<?php echo home_url('/profile#mii') ?>"
                    >
                    <p class="diagnosis__resultDesc">
                        相手と自分の最高の姿を見抜き、相乗効果を出す達人。纏っている雰囲気だけで、何も言わずとも人を幸せにできる魅力の持ち主。天性のサポーター気質により、ずっと側にいたいと思われるタイプ。                </p>
                    </diagnosis-result>
                </div>
            </transition>
            <transition name="diagnosis-fade">
                <div v-if="isShowGroupC">
                    <diagnosis-result
                        v-for="type in fall"
                        :key="type.group"
                        :type-source="'<?php echo get_template_directory_uri() ?>/assets/img/diagnosis/type_fall_text.png'"
                        :group="type.group"
                        more-link="<?php echo get_permalink(3767); ?>"
                        :chara-source="'<?php echo get_template_directory_uri() ?>/assets/img/diagnosis/type_fall_image.jpg'"
                        :person-source="'<?php echo get_template_directory_uri() ?>/assets/img/diagnosis/saki.jpg'"
                        :person-name="type.personName"
                        :genres="type.genres"
                        profile-link="<?php echo home_url('/profile#saki') ?>"
                    >
                    <p class="diagnosis__resultDesc">
                        生まれついてのリーダー。<br />
                        もっともオーダー力が高く、どんな逆境にも負けないカッコイイ在り方に周りが感服する魅力を持つ。野心を表に出すことで、応援が集まってくるタイプ。
                    </p>
                    </diagnosis-result>
                </div>
            </transition>
            <transition name="diagnosis-fade">
                <div v-if="isShowGroupD">
                    <diagnosis-result
                        v-for="type in winter"
                        :key="type.group"
                        :group="type.group"
                        :type-source="'<?php echo get_template_directory_uri() ?>/assets/img/diagnosis/type_winter_text.png'"
                        :group="type.group"
                        more-link="<?php echo get_permalink(3771); ?>"
                        :chara-source="'<?php echo get_template_directory_uri() ?>/assets/img/diagnosis/type_winter_image.jpg'"
                        :person-source="'<?php echo get_template_directory_uri() ?>/assets/img/diagnosis/s-ohara.jpg'"
                        :person-name="type.personName"
                        :genres="type.genres"
                        profile-link="<?php echo home_url('/profile#obara') ?>"
                    >
                    <p class="diagnosis__resultDesc">
                        完成度の高いオーダーで人を魅了する。<br />
                        凛とした美しさと誠実さで、相手を骨抜きにできる才能を持つ。精神的に大人びており、思わず甘えさせたくなる、貢献したくなるタイプ。
                    </p>
                    </diagnosis-result>
                </div>
            </transition>
        </div>

<?php
get_sidebar();
get_footer();
