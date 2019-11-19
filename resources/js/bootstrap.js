import Vue from 'vue';

import moment from 'moment';
Vue.prototype.$moment = moment;

import Str from './blaze/support/str';
Vue.prototype.$str = Str;

import Path from './blaze/support/paths';
Vue.prototype.$path = Path;

import Array from './blaze/support/Array';
Vue.prototype.$array = Array;
