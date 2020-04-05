import Vue from 'vue';

import { library } from '@fortawesome/fontawesome-svg-core';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';

import { faHeart } from '@fortawesome/free-regular-svg-icons';
import { faHeart as faHeartSolid } from '@fortawesome/free-solid-svg-icons';
import { faShareSquare } from '@fortawesome/free-regular-svg-icons';
import { faBookmark } from '@fortawesome/free-regular-svg-icons';
import { faEllipsisH } from '@fortawesome/free-solid-svg-icons';
import { faBorderAll } from '@fortawesome/free-solid-svg-icons';
import { faUserTag } from '@fortawesome/free-solid-svg-icons';
library.add(faHeart, faHeartSolid, faShareSquare, faBookmark, faEllipsisH, faBorderAll, faUserTag);
Vue.component('font-awesome-icon', FontAwesomeIcon);

import './bootstrap';


window.Vue = Vue;

Vue.config.productionTip = false;
new Vue({
    el: '#app',
});
