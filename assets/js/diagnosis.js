"use strict";

window.addEventListener("load", function () {
  Vue.component("diagnosis-form", {
    template: `
        <div class="diagnosis__checkbox">
            <input type="checkbox" :id=id value="id" :checked="checked" @change="callback($event.target.checked)" class="diagnosis__check">
            <label :for=id class="diagnosis__label">{{ question }}</label>
        </div>
    `,
    props: {
      id: {
        type: String,
        required: true,
      },
      question: {
        type: String,
      },
      checked: {
        type: Boolean,
        default: false,
      },
    },
    methods: {
      callback(checked) {
        this.$emit("change", checked);
      },
    },
  });

  Vue.component("diagnosis-result", {
    template: `
        <div class="diagnosis__result">
            <img :src="typeSource" class="diagnosis__resultTypeImage" alt="タイプイメージ">
            <span class="diagnosis__resultSpan">※{{ group }}群が一番多かった人</span>
            <hr class="diagnosis__resultHr" />
            <slot></slot>
            <div class="diagnosis__resultImageWrapper">
              <img :src="charaSource" class="diagnosis__resultCharaImage" alt="タイプイメージ">
              <a :href="moreLink" class="diagnosis__moreLink" :class="seasonColor">もっと<br class="-pc" />詳しく</a>
            </div>
            <hr class="diagnosis__resultHr" />
            <div class="diagnosis__resultPerson">
                <img :src="personSource" class="diagnosis__resultPersonImage" :alt="personName">
                <div class="diagnosis__resultContents">
                  <p class="diagnosis__resultParagraph">同じ気質の<br />「脳トレ」運営陣は…<br />{{ personName }}です。</p>
                  <h2 class="diagnosis__resultContentsHeading">得意ジャンル</h2>
                  <p class="diagnosis__resultParagraph">
                      <div v-for="genre in genres" :key="genre" class="diagnosis__genreWrapper">
                        <mark class="diagnosis__genreMark">{{ genre }}</mark><span class="diagnosis__separate">・</span>
                      </div>
                  </p>
                  <a :href="profileLink" class="diagnosis__profileButton -pc" :class="seasonColor">プロフィール</a>
                </div>
              </div>
              <a :href="profileLink" class="diagnosis__profileButton -sp" :class="seasonColor">プロフィール</a>
        </div>
    `,
    props: {
      typeSource: {
        type: String,
      },
      group: {
        type: String,
      },
      charaSource: {
        type: String,
      },
      personSource: {
        type: String,
      },
      moreLink: {
        type: String,
      },
      personName: {
        type: String,
      },
      profileLink: {
        type: String,
      },
      genres: {
        type: Array,
      },
    },
    computed: {
      seasonColor() {
        switch (this.group) {
          case 'A':
            return '-spring'

          case 'B':
            return '-summer'

          case 'C':
            return '-fall'

          case 'D':
            return '-winter'
        }
      }
    },
  });

  new Vue({
    el: "#diagnosis-form",
    data() {
      return {
        groupA: [
          {
            id: "a01",
            question: "家でゆっくり過ごすより、遊びに出かけるほうが好きです。",
          },
          {
            id: "a02",
            question: "実際より若く見えるとよく言われます。",
          },
          {
            id: "a03",
            question: "どんな場面でも臨機応変に対応できます。",
          },
          {
            id: "a04",
            question:
              "何かを思いついて始めても、途中で飽きてしまうことが多いです。",
          },
        ],
        groupB: [
          {
            id: "b01",
            question: "よく人から相談される方です。",
          },
          {
            id: "b02",
            question: "どちらかといえば人を引き立てるほうです。",
          },
          {
            id: "b03",
            question: "人前に立つよりも、人をサポートする方が得意です。",
          },
          {
            id: "b04",
            question: "細かい作業を人よりも長時間続けることができます。",
          },
        ],
        groupC: [
          {
            id: "c01",
            question: "他人の、理屈に合わない言動に対してよくイライラします。",
          },
          {
            id: "c02",
            question: "ミーティングなどでしばしばリーダーとして選ばれます。",
          },
          {
            id: "c03",
            question:
              "人生に目標をもって、精力的に、真剣に生きていくつもりです。",
          },
          {
            id: "c04",
            question:
              "仕事や何かの活動の途中で中断して休憩したり、リラックスするのは苦手です。",
          },
        ],
        groupD: [
          {
            id: "d01",
            question: "高級な空間や手間のかかった商品に魅力を感じます。",
          },
          {
            id: "d02",
            question:
              "生まれついて特別な存在だと感じます。人とは違う存在だと思います。",
          },
          {
            id: "d03",
            question:
              "大勢の友人を持つよりも、一人か二人の友人を持つほうがいいです。",
          },
          {
            id: "d04",
            question:
              "一人でコツコツと積み上げていくような仕事をするのが好きです。",
          },
        ],
        groups: [
          { name: "A", count: 0 },
          { name: "B", count: 0 },
          { name: "C", count: 0 },
          { name: "D", count: 0 },
        ],
        spring: [
          {
            group: "A",
            personName: "江藤有紀",
            genres: ["ビジネス", "お金", "結婚", "夫婦"],
          },
        ],
        summer: [
          {
            group: "B",
            personName: "みい",
            genres: ["セカンド", "片思い", "働き方", "お金"],
          },
        ],
        fall: [
          {
            group: "C",
            personName: "Saki",
            genres: ["秘密の関係", "離婚", "借金", "親子関係"],
          },
        ],
        winter: [
          {
            group: "D",
            personName: "小原彩夏",
            genres: ["復縁", "転職", "職場", "お金"],
          },
        ],
        isShowGroupA: false,
        isShowGroupB: false,
        isShowGroupC: false,
        isShowGroupD: false,
        showResult: false
      };
    },
    methods: {
      toggleChecked(checkedGroupName, checked) {
        let checkedGroup = this.groups.find((group) => {
          return group.name === checkedGroupName;
        });
        if (checked) {
          checkedGroup.count += 1;
          Vue.set(this.groups, checkedGroup);
        } else {
          checkedGroup.count -= 1;
          Vue.set(this.groups, checkedGroup);
        }
      },
      diagnose() {
        this.isShowGroupA = false;
        this.isShowGroupB = false;
        this.isShowGroupC = false;
        this.isShowGroupD = false;
        this.showResult = true
        let counts = this.groups.map(function (groups) {
          return groups.count;
        });
        let maxValue = Math.max.apply(null, counts);
        let idx = counts.indexOf(maxValue);
        let maxGroup = [];
        // 一番チェックされているグループを配列で出力する
        while (idx != -1) {
          maxGroup.push(idx);
          idx = counts.indexOf(maxValue, idx + 1);
        }
        maxGroup.forEach((g) => {
          if (g == 0) {
            this.isShowGroupA = true;
          } else if (g == 1) {
            this.isShowGroupB = true;
          } else if (g == 2) {
            this.isShowGroupC = true;
          } else if (g == 3) {
            this.isShowGroupD = true;
          }
        });
      },
    },
  });
});
